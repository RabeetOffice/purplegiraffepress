/**
 * Admin Studio JS.
 * Part A: shell behaviour shared by every admin page (nav, flashes, modals).
 * Part B: the blog editor engine (only runs when #edSurface exists).
 * Vanilla JS, no dependencies.
 */
(function () {
  'use strict';

  var CSRF = window.ADM_CSRF || '';

  /* ====================================================== Part A: shell */

  var burger  = document.getElementById('admBurger');
  var sidebar = document.getElementById('admSidebar');
  var scrim   = document.getElementById('admScrim');

  function setNav(open) {
    if (sidebar) sidebar.classList.toggle('is-open', open);
    if (scrim) scrim.hidden = !open;
    if (burger) burger.setAttribute('aria-expanded', open ? 'true' : 'false');
  }
  if (burger && sidebar) {
    burger.addEventListener('click', function () {
      setNav(!sidebar.classList.contains('is-open'));
    });
  }
  if (scrim) scrim.addEventListener('click', function () { setNav(false); });

  /* Flash messages fade out on their own. */
  function autoHideFlash(el) {
    setTimeout(function () {
      el.style.transition = 'opacity .4s ease';
      el.style.opacity = '0';
      setTimeout(function () {
        if (el.parentNode) el.parentNode.removeChild(el);
      }, 450);
    }, 4500);
  }
  Array.prototype.forEach.call(document.querySelectorAll('.adm-flash'), autoHideFlash);

  /* Generic confirm guard. Capture phase so cancelling also stops the
     element's own click handlers (e.g. #btnUnpublish). */
  document.addEventListener('click', function (e) {
    var el = e.target.closest ? e.target.closest('[data-confirm]') : null;
    if (!el) return;
    if (!window.confirm(el.getAttribute('data-confirm') || 'Are you sure?')) {
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();
    }
  }, true);

  /* Generic modal openers/closers via the hidden attribute. */
  document.addEventListener('click', function (e) {
    if (!e.target.closest) return;
    var opener = e.target.closest('[data-modal-open]');
    if (opener) {
      var m = document.getElementById(opener.getAttribute('data-modal-open'));
      if (m) m.hidden = false;
      return;
    }
    var closer = e.target.closest('[data-modal-close]');
    if (closer) {
      var modal = closer.closest('.adm-modal');
      if (modal) modal.hidden = true;
      return;
    }
    /* Clicking the backdrop closes too. */
    if (e.target.classList && e.target.classList.contains('adm-modal')) {
      e.target.hidden = true;
    }
  });
  document.addEventListener('keydown', function (e) {
    if (e.key !== 'Escape') return;
    Array.prototype.forEach.call(document.querySelectorAll('.adm-modal:not([hidden])'), function (m) {
      m.hidden = true;
    });
  });

  /* Small inline flash used by AJAX pages. */
  function showMsg(text, isError) {
    var main = document.querySelector('.adm-main') || document.body;
    var el = document.createElement('div');
    el.className = 'adm-flash ' + (isError ? 'adm-flash-err' : 'adm-flash-ok');
    el.setAttribute('role', 'status');
    el.textContent = text;
    main.insertBefore(el, main.firstChild);
    autoHideFlash(el);
  }

  /* ============================================== Part B: editor engine */

  var surface = document.getElementById('edSurface');
  if (!surface) return;

  var post = window.ADM_POST || {
    slug: '', status: 'draft', source: 'admin',
    registry: {}, seo: {}, body: '', faqs: [], read_auto: true
  };

  var dirty       = false;
  var published   = post.status === 'published';
  var slugTouched = !!post.slug;
  var sourceMode  = false;
  var coverSet    = !!(post.registry && post.registry.image);
  var savedRange  = null;
  var savePending = null;
  var imgClickAt  = 0;

  var edSource    = document.getElementById('edSource');
  var toolbar     = document.getElementById('edToolbar');
  var btnSourceEl = document.getElementById('btnSource');

  var titleInput   = document.getElementById('f_title');
  var slugInput    = document.getElementById('f_slug');
  var dateInput    = document.getElementById('f_date');
  var catSelect    = document.getElementById('f_category');
  var authorSelect = document.getElementById('f_author');
  var glyphInput   = document.getElementById('f_glyph');
  var glyphPick    = document.getElementById('glyphPick');
  var readInput    = document.getElementById('f_read');
  var readAutoBox  = document.getElementById('f_read_auto');
  var excerptInput = document.getElementById('f_excerpt');
  var seoTitle     = document.getElementById('f_seo_title');
  var seoDesc      = document.getElementById('f_seo_description');
  var seoKeys      = document.getElementById('f_seo_keywords');

  var statusChip = document.getElementById('statusChip');
  var savedAt    = document.getElementById('savedAt');
  var btnSave    = document.getElementById('btnSave');
  var btnPreview = document.getElementById('btnPreview');
  var btnPublish = document.getElementById('btnPublish');
  var btnUnpub   = document.getElementById('btnUnpublish');
  var btnDelete  = document.getElementById('btnDelete');

  var faqList   = document.getElementById('faqList');
  var faqTpl    = document.getElementById('faqTpl');
  var btnAddFaq = document.getElementById('btnAddFaq');

  var coverDrop    = document.getElementById('coverDrop');
  var coverFile    = document.getElementById('coverFile');
  var coverPreview = document.getElementById('coverPreview');

  var scoreRing = document.getElementById('seoScore');
  var checklist = document.getElementById('seoChecklist');

  var picker     = document.getElementById('linkPicker');
  var linkUrl    = document.getElementById('linkUrl');
  var linkBlank  = document.getElementById('linkBlank');
  var linkInsert = document.getElementById('linkInsert');

  /* ------------------------------------------------------------ helpers */

  function escapeHTML(s) {
    return String(s)
      .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
  }

  function debounce(fn, ms) {
    var t = null;
    return function () {
      if (t) clearTimeout(t);
      t = setTimeout(fn, ms);
    };
  }

  function markDirty() {
    dirty = true;
  }

  /* Stored bodies use @@asset:...@@ tokens; images need a real src while
     editing so they render. Links keep their tokens as-is. */
  function tokensToDisplay(html) {
    return String(html).replace(/src="@@asset:([^@"]+)@@"/g, 'src="../$1"');
  }
  function displayToTokens(html) {
    return String(html).replace(/src="\.\.\/([^"]+)"/g, function (m, path) {
      return 'src="@@asset:' + path + '@@"';
    });
  }

  /* NEVER toggles the source/visual view: reads whichever is active. */
  function getBodyHTML() {
    var html;
    if (sourceMode) {
      html = edSource.value;
    } else {
      var sel = surface.querySelector('img.is-selected');
      if (sel) sel.classList.remove('is-selected');
      html = surface.innerHTML;
    }
    return displayToTokens(html);
  }

  function getPlainText() {
    if (!sourceMode) return surface.innerText || '';
    var tmp = document.createElement('div');
    tmp.innerHTML = edSource.value;
    return tmp.textContent || '';
  }

  function clearImgSelection() {
    var img = surface.querySelector('img.is-selected');
    if (img) img.classList.remove('is-selected');
  }

  function saveRange() {
    var sel = window.getSelection();
    if (sel && sel.rangeCount && surface.contains(sel.anchorNode)) {
      savedRange = sel.getRangeAt(0).cloneRange();
    }
  }
  function restoreRange() {
    surface.focus();
    if (!savedRange) return;
    var sel = window.getSelection();
    if (!sel) return;
    sel.removeAllRanges();
    sel.addRange(savedRange);
  }

  function exec(cmd, value) {
    surface.focus();
    try { document.execCommand(cmd, false, value); } catch (err) { /* unsupported */ }
    dirty = true;
    scheduleRecalc();
  }

  /* ----------------------------------------------------------- load */

  try { document.execCommand('defaultParagraphSeparator', false, 'p'); } catch (err) { /* optional */ }

  surface.innerHTML = post.body ? tokensToDisplay(post.body) : '<p><br></p>';

  /* ----------------------------------------------------------- toolbar */

  if (toolbar) {
    /* Keep the surface selection when clicking toolbar buttons. */
    toolbar.addEventListener('mousedown', function (e) {
      if (e.target.closest && e.target.closest('.adm-ed-btn')) e.preventDefault();
    });
    toolbar.addEventListener('click', function (e) {
      var btn = e.target.closest ? e.target.closest('.adm-ed-btn') : null;
      if (!btn) return;
      handleCmd(btn.getAttribute('data-cmd'));
    });
  }

  function caretBlock() {
    var sel = window.getSelection();
    if (!sel || !sel.anchorNode || !surface.contains(sel.anchorNode)) return null;
    var node = sel.anchorNode.nodeType === 3 ? sel.anchorNode.parentNode : sel.anchorNode;
    return (node && node.closest) ? node : null;
  }

  function caretRow() {
    var node = caretBlock();
    if (!node) return null;
    var tr = node.closest('tr');
    return (tr && surface.contains(tr)) ? tr : null;
  }

  function handleCmd(cmd) {
    switch (cmd) {
      case 'p':
      case 'h2':
      case 'h3':
      case 'h4':
        exec('formatBlock', '<' + cmd + '>');
        break;
      case 'bold':
        exec('bold');
        break;
      case 'italic':
        exec('italic');
        break;
      case 'ul':
        exec('insertUnorderedList');
        break;
      case 'ol':
        exec('insertOrderedList');
        break;
      case 'blockquote': {
        var sel = window.getSelection();
        if (!sel || sel.isCollapsed || !surface.contains(sel.anchorNode)) {
          exec('insertHTML',
            '<blockquote><p>Quote text</p><cite>Name, Role</cite></blockquote><p><br></p>');
        } else {
          exec('formatBlock', '<blockquote>');
        }
        break;
      }
      case 'table': {
        var rows = '';
        for (var r = 0; r < 3; r++) {
          rows += '<tr><td>Cell</td><td>Cell</td><td>Cell</td></tr>';
        }
        exec('insertHTML',
          '<div class="blog-table-wrap"><table><thead><tr><th>Column</th><th>Column</th><th>Column</th></tr></thead><tbody>'
          + rows + '</tbody></table></div><p><br></p>');
        break;
      }
      case 'rowadd': {
        var tr = caretRow();
        if (!tr) { showMsg('Click inside a table first.', true); break; }
        var clone = tr.cloneNode(true);
        Array.prototype.forEach.call(clone.querySelectorAll('td,th'), function (cell) {
          cell.innerHTML = '<br>';
        });
        if (tr.parentNode && tr.parentNode.nodeName === 'THEAD') {
          /* Never grow the header: the new row becomes the first body row. */
          var table = tr.closest('table');
          var tbody = table ? table.querySelector('tbody') : null;
          if (tbody) tbody.insertBefore(clone, tbody.firstChild);
        } else if (tr.parentNode) {
          tr.parentNode.insertBefore(clone, tr.nextSibling);
        }
        dirty = true;
        scheduleRecalc();
        break;
      }
      case 'rowdel': {
        var row = caretRow();
        if (!row) { showMsg('Click inside a table row first.', true); break; }
        if (row.parentNode && row.parentNode.nodeName === 'THEAD') {
          showMsg('The header row stays. Delete body rows only.', true);
          break;
        }
        row.parentNode.removeChild(row);
        dirty = true;
        scheduleRecalc();
        break;
      }
      case 'link':
        openLinkPicker();
        break;
      case 'unlink':
        exec('unlink');
        break;
      case 'img':
        saveRange();
        inlineFile.click();
        break;
      case 'hr':
        exec('insertHorizontalRule');
        break;
      case 'undo':
        exec('undo');
        break;
      case 'redo':
        exec('redo');
        break;
      case 'html':
        toggleSource();
        break;
    }
  }

  /* Source (HTML) view toggle. */
  function toggleSource() {
    if (sourceMode) {
      surface.innerHTML = edSource.value;
      edSource.hidden = true;
      surface.style.display = '';
      sourceMode = false;
      surface.focus();
    } else {
      clearImgSelection();
      edSource.value = surface.innerHTML
        .replace(/(<\/(?:p|h2|h3|h4|ul|ol|li|tr|thead|tbody|table|blockquote|div)>)/g, '$1\n');
      surface.style.display = 'none';
      edSource.hidden = false;
      sourceMode = true;
      edSource.focus();
    }
    if (btnSourceEl) btnSourceEl.classList.toggle('is-on', sourceMode);
  }
  if (edSource) {
    edSource.addEventListener('input', function () {
      dirty = true;
      scheduleRecalc();
    });
  }

  /* Toolbar active states. */
  function setBtnOn(cmd, on) {
    if (!toolbar) return;
    var btn = toolbar.querySelector('[data-cmd="' + cmd + '"]');
    if (btn) btn.classList.toggle('is-on', !!on);
  }
  function refreshToolbar() {
    var sel = window.getSelection();
    var inside = sel && sel.anchorNode && surface.contains(sel.anchorNode) && !sourceMode;
    var states = { bold: false, italic: false, ul: false, ol: false };
    if (inside) {
      try {
        states.bold = document.queryCommandState('bold');
        states.italic = document.queryCommandState('italic');
        states.ul = document.queryCommandState('insertUnorderedList');
        states.ol = document.queryCommandState('insertOrderedList');
      } catch (err) { /* some browsers throw on detached selections */ }
    }
    setBtnOn('bold', states.bold);
    setBtnOn('italic', states.italic);
    setBtnOn('ul', states.ul);
    setBtnOn('ol', states.ol);

    var block = null;
    if (inside) {
      var node = caretBlock();
      block = node ? node.closest('h2,h3,h4,blockquote,p') : null;
    }
    ['p', 'h2', 'h3', 'h4', 'blockquote'].forEach(function (tag) {
      setBtnOn(tag, block && block.nodeName.toLowerCase() === tag);
    });
  }

  document.addEventListener('selectionchange', function () {
    /* Any selection movement deselects a clicked image, except right after
       the click that selected it. */
    if (Date.now() > imgClickAt + 250) clearImgSelection();
    refreshToolbar();
  });

  /* -------------------------------------------------------- link picker */

  function openLinkPicker() {
    saveRange();
    if (linkUrl) linkUrl.value = '';
    if (picker) picker.hidden = false;
  }
  function closeLinkPicker() {
    if (picker) picker.hidden = true;
  }

  function applyLink(href, blank, fallbackText) {
    closeLinkPicker();
    restoreRange();
    var sel = window.getSelection();
    if (!sel || sel.isCollapsed || !surface.contains(sel.anchorNode)) {
      var a = '<a href="' + escapeHTML(href) + '"'
        + (blank ? ' target="_blank" rel="noopener"' : '')
        + '>' + escapeHTML(fallbackText || href) + '</a>';
      exec('insertHTML', a);
      return;
    }
    exec('createLink', href);
    /* Decorate the anchor that createLink just made. */
    var node = caretBlock();
    var made = node ? node.closest('a') : null;
    if (!made) {
      /* Selection may sit just outside the anchor; find it by href. */
      var all = surface.querySelectorAll('a[href="' + href.replace(/"/g, '\\"') + '"]');
      made = all.length ? all[all.length - 1] : null;
    }
    if (made && blank) {
      made.setAttribute('target', '_blank');
      made.setAttribute('rel', 'noopener');
    }
  }

  if (picker) {
    picker.addEventListener('click', function (e) {
      var btn = e.target.closest ? e.target.closest('.adm-linkpicker button[data-href]') : null;
      if (!btn) return;
      applyLink(btn.getAttribute('data-href'), false, btn.textContent.trim());
    });
  }
  if (linkInsert) {
    linkInsert.addEventListener('click', function () {
      var url = (linkUrl && linkUrl.value || '').trim();
      if (!/^https?:\/\//i.test(url)) {
        showMsg('External links must start with http:// or https://', true);
        return;
      }
      applyLink(url, !!(linkBlank && linkBlank.checked), url);
    });
  }

  /* ------------------------------------------------------------- images */

  var inlineFile = document.createElement('input');
  inlineFile.type = 'file';
  inlineFile.accept = 'image/*';

  inlineFile.addEventListener('change', function () {
    var file = inlineFile.files && inlineFile.files[0];
    inlineFile.value = '';
    if (!file) return;
    var fd = new FormData();
    fd.append('action', 'upload_inline');
    fd.append('csrf', CSRF);
    fd.append('slug', post.slug || '');
    fd.append('image', file);
    fetch('post-actions.php', {
      method: 'POST',
      body: fd,
      headers: { 'X-CSRF-Token': CSRF },
      credentials: 'same-origin'
    }).then(function (r) { return r.json(); }).then(function (res) {
      if (!res || !res.ok) {
        showMsg((res && res.error) || 'Image upload failed.', true);
        return;
      }
      restoreRange();
      var src = '../' + res.image;
      exec('insertHTML', '<img src="' + escapeHTML(src) + '" alt="">');
      var imgs = surface.querySelectorAll('img[src="' + src.replace(/"/g, '\\"') + '"]');
      var img = imgs.length ? imgs[imgs.length - 1] : null;
      var alt = window.prompt('Describe the image (alt text):', '');
      if (img && alt) img.setAttribute('alt', alt);
      dirty = true;
      scheduleRecalc();
    }).catch(function () {
      showMsg('Network error. The image was not uploaded.', true);
    });
  });

  /* Click selects an image; Delete/Backspace removes it through
     execCommand so it stays on the undo stack. */
  surface.addEventListener('click', function (e) {
    if (e.target && e.target.nodeName === 'IMG') {
      clearImgSelection();
      e.target.classList.add('is-selected');
      imgClickAt = Date.now();
    }
  });
  surface.addEventListener('keydown', function (e) {
    var img = surface.querySelector('img.is-selected');
    if (!img) return;
    if (e.key === 'Delete' || e.key === 'Backspace') {
      e.preventDefault();
      img.classList.remove('is-selected');
      var range = document.createRange();
      range.selectNode(img);
      var sel = window.getSelection();
      sel.removeAllRanges();
      sel.addRange(range);
      try { document.execCommand('delete'); } catch (err) { img.parentNode && img.parentNode.removeChild(img); }
      dirty = true;
      scheduleRecalc();
    } else {
      img.classList.remove('is-selected');
    }
  });

  /* ------------------------------------------------------ paste cleanup */

  var PASTE_ALLOWED = {
    p: 1, h2: 1, h3: 1, h4: 1, ul: 1, ol: 1, li: 1,
    table: 1, thead: 1, tbody: 1, tr: 1, td: 1, th: 1,
    blockquote: 1, cite: 1, a: 1, img: 1, b: 1, strong: 1, i: 1, em: 1,
    u: 1, br: 1, span: 1, div: 1, figure: 1, figcaption: 1, hr: 1, sub: 1, sup: 1
  };

  function unwrapNode(node) {
    var parent = node.parentNode;
    if (!parent) return;
    while (node.firstChild) parent.insertBefore(node.firstChild, node);
    parent.removeChild(node);
  }

  function cleanPastedHTML(html) {
    var doc = document.implementation.createHTMLDocument('paste');
    var root = doc.createElement('div');
    root.innerHTML = html;

    /* Comments out first (Word drops conditional comments everywhere). */
    var walker = doc.createTreeWalker(root, NodeFilter.SHOW_COMMENT, null, false);
    var comments = [];
    while (walker.nextNode()) comments.push(walker.currentNode);
    comments.forEach(function (n) { if (n.parentNode) n.parentNode.removeChild(n); });

    Array.prototype.forEach.call(root.querySelectorAll('meta,style,script,link,title,head'), function (n) {
      if (n.parentNode) n.parentNode.removeChild(n);
    });

    /* Google Docs: the whole clipboard rides inside <b id="docs-internal-
       guid-..."> and bold-looking tags may carry font-weight:normal. */
    Array.prototype.forEach.call(root.querySelectorAll('b,strong'), function (n) {
      var style = n.getAttribute('style') || '';
      var id = n.id || '';
      if (/font-weight\s*:\s*(normal|400)/i.test(style) || id.indexOf('docs-internal-guid') === 0) {
        unwrapNode(n);
      }
    });

    /* Styled spans become semantic tags BEFORE attributes are stripped. */
    Array.prototype.forEach.call(root.querySelectorAll('span'), function (n) {
      var style = n.getAttribute('style') || '';
      var bold = /font-weight\s*:\s*(bold|[6-9]00)/i.test(style);
      var italic = /font-style\s*:\s*italic/i.test(style);
      if (!bold && !italic) return;
      var outer = doc.createElement(bold ? 'strong' : 'em');
      var inner = outer;
      if (bold && italic) {
        inner = doc.createElement('em');
        outer.appendChild(inner);
      }
      while (n.firstChild) inner.appendChild(n.firstChild);
      if (n.parentNode) n.parentNode.replaceChild(outer, n);
    });

    scrubPaste(root, doc);
    return root.innerHTML;
  }

  function scrubPaste(node, doc) {
    var kids = Array.prototype.slice.call(node.childNodes);
    kids.forEach(function (child) {
      if (child.nodeType === 8) {
        node.removeChild(child);
        return;
      }
      if (child.nodeType !== 1) return;

      var tag = child.nodeName.toLowerCase();

      /* Demote out-of-range headings into the house h2..h4 band. */
      if (tag === 'h1' || tag === 'h5' || tag === 'h6') {
        var nt = tag === 'h1' ? 'h2' : 'h4';
        var repl = doc.createElement(nt);
        while (child.firstChild) repl.appendChild(child.firstChild);
        node.replaceChild(repl, child);
        child = repl;
        tag = nt;
      }

      if (!PASTE_ALLOWED[tag]) {
        scrubPaste(child, doc);
        unwrapNode(child);
        return;
      }

      /* Per-tag attribute whitelist. */
      var keep = [];
      if (tag === 'a') keep = ['href'];
      else if (tag === 'img') keep = ['src', 'alt'];
      else if (tag === 'td' || tag === 'th') keep = ['colspan', 'rowspan'];
      else if (tag === 'div' || tag === 'table') keep = ['class'];
      Array.prototype.slice.call(child.attributes).forEach(function (attr) {
        var name = attr.name.toLowerCase();
        if (keep.indexOf(name) === -1) {
          child.removeAttribute(attr.name);
          return;
        }
        if (name === 'class') {
          if (attr.value.indexOf('blog-table-wrap') === -1) {
            child.removeAttribute(attr.name);
          } else {
            child.setAttribute('class', 'blog-table-wrap');
          }
        }
      });

      scrubPaste(child, doc);

      /* Attribute-less spans/divs are meaningless wrappers: unwrap, or drop
         entirely when there is nothing left inside. */
      if ((tag === 'span' || tag === 'div') && !child.attributes.length) {
        if (!child.textContent.trim() && !child.querySelector('img,hr,br,table')) {
          if (child.parentNode) child.parentNode.removeChild(child);
        } else {
          unwrapNode(child);
        }
      }
    });
  }

  surface.addEventListener('paste', function (e) {
    var cd = e.clipboardData;
    if (!cd) return; // very old browser: let the default happen
    e.preventDefault();
    var html = cd.getData('text/html');
    if (html) {
      exec('insertHTML', cleanPastedHTML(html));
      return;
    }
    var text = cd.getData('text/plain');
    if (!text) return;
    var paras = text.split(/\r?\n\s*\r?\n/).map(function (p) {
      var t = p.trim();
      return t ? '<p>' + escapeHTML(t).replace(/\r?\n/g, '<br>') + '</p>' : '';
    }).join('');
    if (paras) exec('insertHTML', paras);
  });

  /* -------------------------------------------------------- FAQ builder */

  function addFaq(q, a) {
    if (!faqTpl || !faqList) return;
    var node = faqTpl.content.firstElementChild.cloneNode(true);
    node.querySelector('.faq-q').value = q || '';
    node.querySelector('.faq-a').value = a || '';
    faqList.appendChild(node);
  }

  function collectFaqs() {
    if (!faqList) return [];
    return Array.prototype.map.call(faqList.querySelectorAll('.adm-faq-item'), function (item) {
      return {
        q: (item.querySelector('.faq-q') || {}).value ? item.querySelector('.faq-q').value.trim() : '',
        a: (item.querySelector('.faq-a') || {}).value ? item.querySelector('.faq-a').value.trim() : ''
      };
    }).filter(function (f) { return f.q !== '' || f.a !== ''; });
  }

  if (btnAddFaq) {
    btnAddFaq.addEventListener('click', function () {
      addFaq('', '');
      dirty = true;
      var last = faqList.querySelector('.adm-faq-item:last-child .faq-q');
      if (last) last.focus();
    });
  }
  if (faqList) {
    faqList.addEventListener('click', function (e) {
      var item = e.target.closest ? e.target.closest('.adm-faq-item') : null;
      if (!item) return;
      if (e.target.closest('.faq-del')) {
        item.parentNode.removeChild(item);
      } else if (e.target.closest('.faq-up')) {
        var prev = item.previousElementSibling;
        if (prev) faqList.insertBefore(item, prev);
      } else if (e.target.closest('.faq-down')) {
        var next = item.nextElementSibling;
        if (next) faqList.insertBefore(next, item);
      } else {
        return;
      }
      dirty = true;
      scheduleRecalc();
    });
    faqList.addEventListener('input', function () {
      dirty = true;
      scheduleRecalc();
    });
  }
  (post.faqs || []).forEach(function (f) { addFaq(f.q, f.a); });

  /* --------------------------------------------------------------- slug */

  function slugify(s) {
    return String(s).toLowerCase()
      .replace(/['’]/g, '')
      .replace(/[^a-z0-9]+/g, '-')
      .replace(/^-+|-+$/g, '');
  }
  if (titleInput) {
    titleInput.addEventListener('input', function () {
      if (!slugTouched && !published && slugInput) {
        slugInput.value = slugify(titleInput.value);
      }
    });
  }
  if (slugInput) {
    slugInput.addEventListener('input', function () {
      slugTouched = true;
    });
  }

  /* ---------------------------------------------------------- read time */

  function updateReadTime() {
    if (!readInput || !readAutoBox || !readAutoBox.checked) return;
    var words = (getPlainText().match(/\S+/g) || []).length;
    var mins = Math.max(3, Math.ceil(words / 210));
    readInput.value = mins + ' min read';
  }
  if (readAutoBox) {
    readAutoBox.addEventListener('change', function () {
      if (readInput) readInput.readOnly = readAutoBox.checked;
      if (readAutoBox.checked) updateReadTime();
      dirty = true;
    });
  }

  /* ------------------------------------------------------ char counters */

  var counters = [
    { el: seoTitle, max: 60 },
    { el: seoDesc, max: 160 },
    { el: excerptInput, max: 170 }
  ];
  counters.forEach(function (c) {
    c.badge = c.el ? document.querySelector('.adm-charcount[data-for="' + c.el.id + '"]') : null;
  });
  function updateCounters() {
    counters.forEach(function (c) {
      if (!c.el || !c.badge) return;
      var n = c.el.value.length;
      c.badge.textContent = n + ' chars';
      c.badge.classList.toggle('over', n > c.max);
    });
  }

  /* ------------------------------------------------- checklist + score */

  function updateChecklist() {
    if (!checklist) return;
    var bodyHTML = getBodyHTML();
    var text = getPlainText();
    var titleLen = seoTitle ? seoTitle.value.trim().length : 0;
    var descLen = seoDesc ? seoDesc.value.trim().length : 0;
    var keyword = seoKeys ? (seoKeys.value.split(',')[0] || '').trim().toLowerCase() : '';
    var haystack = ((titleInput ? titleInput.value : '') + ' '
      + (seoTitle ? seoTitle.value : '') + ' ' + text).toLowerCase();

    var checks = {
      title:    titleLen >= 35 && titleLen <= 60,
      desc:     descLen >= 110 && descLen <= 160,
      excerpt:  !!(excerptInput && excerptInput.value.trim() !== ''),
      words:    (text.match(/\S+/g) || []).length >= 600,
      h2:       (bodyHTML.match(/<h2\b/gi) || []).length >= 2,
      faqs:     collectFaqs().filter(function (f) { return f.q && f.a; }).length >= 2,
      internal: /href="[^"]*@@/.test(bodyHTML),
      cover:    coverSet,
      keyword:  keyword !== '' && haystack.indexOf(keyword) !== -1
    };

    var passed = 0;
    var total = 0;
    Array.prototype.forEach.call(checklist.querySelectorAll('li[data-check]'), function (li) {
      var key = li.getAttribute('data-check');
      li.classList.remove('ok', 'warn', 'off');
      if (key === 'keyword' && keyword === '') {
        li.classList.add('off');
        return; // no keyword set: excluded from the score
      }
      total++;
      if (checks[key]) {
        passed++;
        li.classList.add('ok');
      } else {
        li.classList.add('warn');
      }
    });

    var pct = total ? Math.round(100 * passed / total) : 0;
    if (scoreRing) {
      scoreRing.style.setProperty('--score', pct);
      var span = scoreRing.querySelector('span');
      if (span) span.textContent = pct;
    }
  }

  var scheduleRecalc = debounce(function () {
    updateCounters();
    updateReadTime();
    updateChecklist();
  }, 350);

  /* ------------------------------------------------------- glyph picker */

  if (glyphPick) {
    glyphPick.addEventListener('click', function (e) {
      var btn = e.target.closest ? e.target.closest('button[data-glyph]') : null;
      if (!btn) return;
      if (glyphInput) glyphInput.value = btn.getAttribute('data-glyph');
      Array.prototype.forEach.call(glyphPick.querySelectorAll('button'), function (b) {
        b.classList.toggle('is-on', b === btn);
      });
      dirty = true;
    });
  }

  /* ----------------------------------------------------- collect + save */

  function buildFormData(action) {
    var fd = new FormData();
    fd.append('action', action);
    fd.append('csrf', CSRF);
    fd.append('slug', ((slugInput && slugInput.value) || post.slug || '').trim());
    fd.append('orig_slug', post.slug || '');
    fd.append('title', titleInput ? titleInput.value.trim() : '');
    fd.append('excerpt', excerptInput ? excerptInput.value.trim() : '');
    fd.append('date', dateInput ? dateInput.value : '');
    fd.append('category', catSelect ? catSelect.value : '');
    fd.append('author', authorSelect ? authorSelect.value : '');
    fd.append('glyph', (glyphInput && glyphInput.value) || '✦');
    fd.append('seo_title', seoTitle ? seoTitle.value.trim() : '');
    fd.append('seo_description', seoDesc ? seoDesc.value.trim() : '');
    fd.append('seo_keywords', seoKeys ? seoKeys.value.trim() : '');
    fd.append('body', getBodyHTML());
    fd.append('faqs', JSON.stringify(collectFaqs()));
    fd.append('read_auto', (readAutoBox && readAutoBox.checked) ? '1' : '0');
    fd.append('read', readInput ? readInput.value.trim() : '');
    return fd;
  }

  function save(action) {
    action = action || 'save';
    if (savePending) return savePending;
    savePending = fetch('post-actions.php', {
      method: 'POST',
      body: buildFormData(action),
      headers: { 'X-CSRF-Token': CSRF },
      credentials: 'same-origin'
    }).then(function (r) {
      return r.json();
    }).then(function (res) {
      savePending = null;
      if (!res || !res.ok) {
        showMsg((res && res.error) || 'Could not save. Please try again.', true);
        return null;
      }
      if (res.slug) {
        post.slug = res.slug;
        slugTouched = true;
        if (slugInput && !published) slugInput.value = res.slug;
        try {
          history.replaceState(null, '', 'post-edit.php?slug=' + encodeURIComponent(res.slug));
        } catch (err) { /* file:// etc. */ }
      }
      if (res.read && readAutoBox && readAutoBox.checked && readInput) {
        readInput.value = res.read;
      }
      if (res.saved && savedAt) savedAt.textContent = 'Saved ' + res.saved;
      dirty = false;
      return res;
    }).catch(function () {
      savePending = null;
      showMsg('Network error. The post was not saved.', true);
      return null;
    });
    return savePending;
  }

  if (btnSave) {
    btnSave.addEventListener('click', function () { save('save'); });
  }

  if (btnPreview) {
    btnPreview.addEventListener('click', function () {
      save('preview').then(function (res) {
        if (res && res.url) window.open(res.url, '_blank');
      });
    });
  }

  if (btnPublish) {
    btnPublish.addEventListener('click', function () {
      if (!published) {
        var s = ((slugInput && slugInput.value) || post.slug || 'this-post').trim();
        if (!window.confirm('Publish this post? It goes live at blogs/' + s + '.php')) return;
      }
      save('publish').then(function (res) {
        if (!res) return;
        published = true;
        post.status = 'published';
        if (statusChip) {
          statusChip.textContent = 'Published';
          statusChip.className = 'adm-chip chip-green';
        }
        if (slugInput) slugInput.disabled = true;
        btnPublish.textContent = 'Update';
        if (btnUnpub) btnUnpub.hidden = false;
        showMsg(res.message || 'Published.');
      });
    });
  }

  if (btnUnpub) {
    /* The confirm lives in data-confirm (Part A guard). */
    btnUnpub.addEventListener('click', function () {
      var fd = new FormData();
      fd.append('action', 'unpublish');
      fd.append('csrf', CSRF);
      fd.append('slug', post.slug || '');
      fetch('post-actions.php', {
        method: 'POST',
        body: fd,
        headers: { 'X-CSRF-Token': CSRF },
        credentials: 'same-origin'
      }).then(function (r) { return r.json(); }).then(function (res) {
        if (res && res.ok) {
          dirty = false;
          location.reload();
        } else {
          showMsg((res && res.error) || 'Could not unpublish.', true);
        }
      }).catch(function () {
        showMsg('Network error. Please try again.', true);
      });
    });
  }

  if (btnDelete) {
    btnDelete.addEventListener('click', function () {
      if (!window.confirm('Delete this post? Published copies are unpublished and the draft moves to /trash.')) return;
      if (!window.confirm('Last check: really delete "' + ((titleInput && titleInput.value) || post.slug || 'this post') + '"?')) return;
      if (!post.slug) {
        dirty = false;
        location.href = 'posts.php';
        return;
      }
      var fd = new FormData();
      fd.append('action', 'delete');
      fd.append('csrf', CSRF);
      fd.append('slug', post.slug);
      fetch('post-actions.php', {
        method: 'POST',
        body: fd,
        headers: { 'X-CSRF-Token': CSRF },
        credentials: 'same-origin'
      }).then(function (r) { return r.json(); }).then(function (res) {
        if (res && res.ok) {
          dirty = false;
          location.href = 'posts.php';
        } else {
          showMsg((res && res.error) || 'Could not delete.', true);
        }
      }).catch(function () {
        showMsg('Network error. Please try again.', true);
      });
    });
  }

  /* -------------------------------------------------------------- cover */

  function uploadCover(file) {
    if (!file) return;
    /* The backend needs a saved source before it can attach a cover. */
    var ready = post.slug ? Promise.resolve({ ok: true }) : save('save');
    ready.then(function (res) {
      if (!res || !post.slug) return;
      var fd = new FormData();
      fd.append('action', 'upload_featured');
      fd.append('csrf', CSRF);
      fd.append('slug', post.slug);
      fd.append('image', file);
      fetch('post-actions.php', {
        method: 'POST',
        body: fd,
        headers: { 'X-CSRF-Token': CSRF },
        credentials: 'same-origin'
      }).then(function (r) { return r.json(); }).then(function (out) {
        if (!out || !out.ok) {
          showMsg((out && out.error) || 'Cover upload failed.', true);
          return;
        }
        coverSet = true;
        if (post.registry) post.registry.image = out.image;
        if (coverPreview) {
          coverPreview.innerHTML = '';
          var img = document.createElement('img');
          img.src = out.url + '?v=' + Date.now(); // bust the old cached cover
          img.alt = 'Cover preview';
          coverPreview.appendChild(img);
          coverPreview.hidden = false;
        }
        updateChecklist();
        showMsg('Cover updated.');
      }).catch(function () {
        showMsg('Network error. The cover was not uploaded.', true);
      });
    });
  }

  if (coverDrop && coverFile) {
    coverDrop.addEventListener('click', function () { coverFile.click(); });
    coverDrop.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        coverFile.click();
      }
    });
    coverDrop.addEventListener('dragover', function (e) {
      e.preventDefault();
      coverDrop.classList.add('is-drag');
    });
    coverDrop.addEventListener('dragleave', function () {
      coverDrop.classList.remove('is-drag');
    });
    coverDrop.addEventListener('drop', function (e) {
      e.preventDefault();
      coverDrop.classList.remove('is-drag');
      var file = e.dataTransfer && e.dataTransfer.files && e.dataTransfer.files[0];
      uploadCover(file);
    });
    coverFile.addEventListener('change', function () {
      uploadCover(coverFile.files && coverFile.files[0]);
      coverFile.value = '';
    });
  }

  /* ---------------------------------------------- dirty + autosave etc. */

  surface.addEventListener('input', function () {
    dirty = true;
    scheduleRecalc();
  });

  [titleInput, slugInput, dateInput, excerptInput, seoTitle, seoDesc, seoKeys, readInput]
    .forEach(function (el) {
      if (!el) return;
      el.addEventListener('input', function () {
        dirty = true;
        scheduleRecalc();
      });
    });
  [dateInput, catSelect, authorSelect].forEach(function (el) {
    if (!el) return;
    el.addEventListener('change', markDirty);
  });

  setInterval(function () {
    if (dirty && !savePending && titleInput && titleInput.value.trim() !== '') {
      save('save');
    }
  }, 45000);

  document.addEventListener('keydown', function (e) {
    if ((e.ctrlKey || e.metaKey) && String(e.key).toLowerCase() === 's') {
      e.preventDefault();
      save('save');
    }
  });

  window.addEventListener('beforeunload', function (e) {
    if (!dirty) return;
    e.preventDefault();
    e.returnValue = '';
  });

  /* ----------------------------------------------------------- kick off */

  updateCounters();
  updateReadTime();
  updateChecklist();
  refreshToolbar();
})();
