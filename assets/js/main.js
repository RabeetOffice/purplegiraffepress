document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('siteHeader');
  const menuToggle = document.getElementById('menuToggle');
  const mobilePanel = document.getElementById('mobilePanel');

  const updateHeader = () => {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 8);
  };
  updateHeader();
  window.addEventListener('scroll', updateHeader, { passive: true });

  if (menuToggle && mobilePanel) {
    menuToggle.addEventListener('click', () => {
      const isOpen = mobilePanel.classList.toggle('open');
      document.body.classList.toggle('menu-open', isOpen);
      menuToggle.setAttribute('aria-expanded', String(isOpen));
      menuToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
    });

    mobilePanel.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobilePanel.classList.remove('open');
        document.body.classList.remove('menu-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Open menu');
      });
    });
  }

  const heroVideo = document.querySelector('.hero-video');
  if (heroVideo) {
    const hero = heroVideo.closest('.hero');
    const sources = Array.from(heroVideo.querySelectorAll('source[data-src]'));
    const showVideo = () => hero?.classList.add('video-ready');
    const loadHeroVideo = () => {
      sources.forEach((source) => {
        source.src = source.dataset.src;
        source.removeAttribute('data-src');
      });
      heroVideo.load();
      heroVideo.play().catch(() => {});
    };

    heroVideo.addEventListener('canplay', showVideo, { once: true });
    heroVideo.addEventListener('error', () => hero?.classList.remove('video-ready'), { once: true });

    if ('IntersectionObserver' in window) {
      const videoObserver = new IntersectionObserver((entries) => {
        if (!entries.some((entry) => entry.isIntersecting)) return;
        loadHeroVideo();
        videoObserver.disconnect();
      }, { rootMargin: '300px 0px' });
      videoObserver.observe(heroVideo);
    } else {
      loadHeroVideo();
    }
  }

  document.querySelectorAll('.faq-question').forEach((button) => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      if (!item) return;
      const isOpen = item.classList.toggle('open');
      button.setAttribute('aria-expanded', String(isOpen));
      button.querySelector('span:last-child').textContent = isOpen ? '-' : '+';
    });
  });

  const revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
    revealItems.forEach((item) => observer.observe(item));
  } else {
    revealItems.forEach((item) => item.classList.add('in'));
  }

  /* ---------------------------------------------------------------
     Service cards — cursor-tracking shimmer + subtle 3D tilt
  --------------------------------------------------------------- */
  const fineHover = window.matchMedia('(hover: hover) and (pointer: fine)');
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (fineHover.matches) {
    const MAX_TILT = 6;
    document.querySelectorAll('.services-grid .service-card').forEach((card) => {
      let frame = 0;
      card.addEventListener('pointermove', (event) => {
        if (frame) return;
        frame = requestAnimationFrame(() => {
          frame = 0;
          const rect = card.getBoundingClientRect();
          const px = (event.clientX - rect.left) / rect.width;
          const py = (event.clientY - rect.top) / rect.height;
          card.style.setProperty('--mx', (px * 100).toFixed(2) + '%');
          card.style.setProperty('--my', (py * 100).toFixed(2) + '%');
          if (!reduceMotion.matches) {
            card.classList.add('is-tilting');
            card.style.setProperty('--ry', ((px - 0.5) * 2 * MAX_TILT).toFixed(2) + 'deg');
            card.style.setProperty('--rx', ((0.5 - py) * 2 * MAX_TILT).toFixed(2) + 'deg');
          }
        });
      });
      card.addEventListener('pointerleave', () => {
        if (frame) { cancelAnimationFrame(frame); frame = 0; }
        card.classList.remove('is-tilting');
        card.style.setProperty('--rx', '0deg');
        card.style.setProperty('--ry', '0deg');
      });
    });
  }

  /* ---------------------------------------------------------------
     Portfolio grid — genre tabs + live search
  --------------------------------------------------------------- */
  const portfolioGrid = document.getElementById('portfolioGrid');
  if (portfolioGrid) {
    const cards = Array.from(portfolioGrid.querySelectorAll('.book-card'));
    const tabs = Array.from(document.querySelectorAll('.genre-tab'));
    const searchInput = document.getElementById('portfolioSearch');
    const emptyMsg = document.querySelector('.portfolio-empty');
    let activeFilter = 'all';

    const applyPortfolioFilter = () => {
      const query = (searchInput && searchInput.value ? searchInput.value : '').trim().toLowerCase();
      let visible = 0;
      cards.forEach((card) => {
        const matchesGenre = activeFilter === 'all' || card.dataset.category === activeFilter;
        const matchesQuery = !query || (card.dataset.search || '').indexOf(query) !== -1;
        const show = matchesGenre && matchesQuery;
        card.hidden = !show;
        if (show) {
          card.classList.add('in');
          visible += 1;
        }
      });
      if (emptyMsg) emptyMsg.hidden = visible !== 0;
    };

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        tabs.forEach((t) => t.classList.remove('active'));
        tab.classList.add('active');
        activeFilter = tab.dataset.filter || 'all';
        applyPortfolioFilter();
      });
    });
    if (searchInput) searchInput.addEventListener('input', applyPortfolioFilter);
  }

  /* ---------------------------------------------------------------
     Swiper sliders
  --------------------------------------------------------------- */
  if (typeof Swiper === 'undefined') return;

  // Portfolio: a real slider on every breakpoint
  document.querySelectorAll('.portfolio-swiper').forEach((el) => {
    new Swiper(el, {
      slidesPerView: 1.25,
      spaceBetween: 18,
      grabCursor: true,
      a11y: { enabled: true },
      pagination: { el: el.querySelector('.swiper-pagination'), clickable: true },
      navigation: {
        nextEl: el.querySelector('.swiper-button-next'),
        prevEl: el.querySelector('.swiper-button-prev'),
      },
      breakpoints: {
        480: { slidesPerView: 1.9, spaceBetween: 20 },
        640: { slidesPerView: 2.4, spaceBetween: 24 },
        900: { slidesPerView: 3.4, spaceBetween: 26 },
        1100: { slidesPerView: 4.2, spaceBetween: 30 },
      },
    });
  });

  // Blog "More from the blog": a real carousel on every breakpoint
  document.querySelectorAll('.blog-recent-swiper').forEach((el) => {
    new Swiper(el, {
      slidesPerView: 1.1,
      spaceBetween: 20,
      grabCursor: true,
      a11y: { enabled: true },
      watchOverflow: true,
      pagination: { el: el.querySelector('.swiper-pagination'), clickable: true },
      navigation: {
        nextEl: el.querySelector('.blog-recent-next'),
        prevEl: el.querySelector('.blog-recent-prev'),
      },
      breakpoints: {
        560: { slidesPerView: 1.8, spaceBetween: 22 },
        768: { slidesPerView: 2.2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 26 },
      },
    });
  });

  // Catalog: full-bleed "storybook shelf" — continuous drift, pause on hover
  document.querySelectorAll('.catalog-track').forEach((el) => {
    const calm = reduceMotion.matches;
    new Swiper(el, {
      slidesPerView: 'auto',
      spaceBetween: 30,
      loop: true,
      grabCursor: true,
      a11y: { enabled: true },
      speed: calm ? 600 : 5200,
      freeMode: calm ? false : { enabled: true, momentum: false },
      autoplay: calm ? false : {
        delay: 0,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
    });
  });

  // Services / steps / testimonials / blogs: slider on tablet & mobile only
  const configFor = (el) => {
    if (el.classList.contains('journey-line')) return [1.35, 2.4, 3.4];
    if (el.classList.contains('testimonial-grid')) return [1.05, 1.5, 2.05];
    if (el.classList.contains('notes-grid')) return [1.1, 1.5, 2.05];
    return [1.12, 1.7, 2.3]; // services + default
  };

  const mobileSwipers = [];
  const mq = window.matchMedia('(max-width: 1024px)');

  const buildMobileSwipers = () => {
    document.querySelectorAll('.mobile-swiper').forEach((el) => {
      el.querySelectorAll('.reveal').forEach((r) => r.classList.add('in'));
      const [base, bp560, bp768] = configFor(el);
      const swiper = new Swiper(el, {
        slidesPerView: base,
        spaceBetween: 18,
        grabCursor: true,
        a11y: { enabled: true },
        watchOverflow: true,
        pagination: { el: el.querySelector('.swiper-pagination'), clickable: true },
        breakpoints: {
          560: { slidesPerView: bp560, spaceBetween: 20 },
          768: { slidesPerView: bp768, spaceBetween: 22 },
        },
      });
      mobileSwipers.push(swiper);
    });
  };

  const destroyMobileSwipers = () => {
    while (mobileSwipers.length) {
      mobileSwipers.pop().destroy(true, true);
    }
  };

  const syncMobileSwipers = (event) => {
    if (event.matches) {
      if (!mobileSwipers.length) buildMobileSwipers();
    } else {
      destroyMobileSwipers();
    }
  };

  syncMobileSwipers(mq);
  mq.addEventListener('change', syncMobileSwipers);
});

/* ---------------------------------------------------------------
   Quote / consultation popup
   Open with any [data-quote-open] element or window.openQuotePopup().
   Close with [data-quote-close] (overlay + close button) or Escape.
--------------------------------------------------------------- */
(function () {
  const popup = document.getElementById('quotePopup');
  if (!popup) return;
  let lastFocus = null;

  const openPopup = () => {
    lastFocus = document.activeElement;
    popup.classList.add('open');
    popup.setAttribute('aria-hidden', 'false');
    document.body.classList.add('qp-open');
    const first = popup.querySelector('input, select, textarea, button:not(.quote-popup-close)');
    if (first) setTimeout(() => first.focus(), 60);
  };
  const closePopup = () => {
    popup.classList.remove('open');
    popup.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('qp-open');
    if (lastFocus && typeof lastFocus.focus === 'function') lastFocus.focus();
  };

  window.openQuotePopup = openPopup;
  window.closeQuotePopup = closePopup;

  document.addEventListener('click', (e) => {
    const opener = e.target.closest('[data-quote-open]');
    if (opener) { e.preventDefault(); openPopup(); return; }
    if (e.target.closest('[data-quote-close]')) { e.preventDefault(); closePopup(); }
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && popup.classList.contains('open')) closePopup();
  });
})();

/* ---------------------------------------------------------------
   FAQ accordion (.svc-faq-list): smooth height-animated open/close,
   and opening one item closes the rest. We intercept the <summary>
   click so we can animate before the native <details> toggle.
--------------------------------------------------------------- */
(function () {
  const lists = document.querySelectorAll('.svc-faq-list');
  if (!lists.length) return;
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function collapse(item) {
    const ans = item.querySelector('.answer');
    if (!ans) { item.open = false; return; }
    if (reduce) { item.open = false; return; }
    const start = ans.scrollHeight;
    item.classList.add('is-animating');
    ans.style.height = start + 'px';
    void ans.offsetHeight;                 // force reflow so the transition runs
    ans.style.height = '0px';
    const done = (e) => {
      if (e && e.propertyName !== 'height') return;
      ans.removeEventListener('transitionend', done);
      item.open = false;
      item.classList.remove('is-animating');
      ans.style.height = '';
    };
    ans.addEventListener('transitionend', done);
  }

  function expand(item) {
    const ans = item.querySelector('.answer');
    item.open = true;                      // reveal content so it can be measured
    if (!ans || reduce) { if (ans) ans.style.height = ''; return; }
    const target = ans.scrollHeight;
    item.classList.add('is-animating');
    ans.style.height = '0px';
    void ans.offsetHeight;
    ans.style.height = target + 'px';
    const done = (e) => {
      if (e && e.propertyName !== 'height') return;
      ans.removeEventListener('transitionend', done);
      ans.style.height = '';               // back to auto so it reflows naturally
      item.classList.remove('is-animating');
    };
    ans.addEventListener('transitionend', done);
  }

  lists.forEach((list) => {
    const items = Array.from(list.querySelectorAll('details.svc-faq-item'));
    items.forEach((item) => {
      const summary = item.querySelector('summary');
      if (!summary) return;
      summary.addEventListener('click', (e) => {
        e.preventDefault();
        if (item.open) {
          collapse(item);
        } else {
          items.forEach((other) => { if (other !== item && other.open) collapse(other); });
          expand(item);
        }
      });
    });
  });
})();

/* ---------------------------------------------------------------
   Blog single: build the in-article table of contents from <h2>
   headings and highlight the current section while scrolling.
   No-op on pages without .blog-content.
--------------------------------------------------------------- */
(function () {
  const article = document.querySelector('.blog-content');
  const tocList = document.getElementById('blog-toc');
  if (!article || !tocList) return;
  const headings = article.querySelectorAll('h2');
  if (!headings.length) {
    const box = tocList.closest('.blog-side-toc');
    if (box) box.style.display = 'none';
    return;
  }
  headings.forEach((h, i) => {
    const id = 'sec-' + (i + 1);
    h.id = id;
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.href = '#' + id;
    a.setAttribute('data-toc-target', id);
    a.textContent = h.textContent.trim();
    li.appendChild(a);
    tocList.appendChild(li);
  });
  tocList.addEventListener('click', (e) => {
    const link = e.target.closest('a[data-toc-target]');
    if (!link) return;
    e.preventDefault();
    const target = document.getElementById(link.getAttribute('data-toc-target'));
    if (!target) return;
    const top = target.getBoundingClientRect().top + window.pageYOffset - 110;
    window.scrollTo({ top: top, behavior: 'smooth' });
    history.replaceState(null, '', '#' + link.getAttribute('data-toc-target'));
  });
  const tocLinks = tocList.querySelectorAll('a[data-toc-target]');
  const setActive = () => {
    const y = window.pageYOffset + 140;
    let current = null;
    headings.forEach((h) => { if (h.offsetTop <= y) current = h.id; });
    tocLinks.forEach((l) => l.classList.toggle('active', l.getAttribute('data-toc-target') === current));
  };
  setActive();
  window.addEventListener('scroll', setActive, { passive: true });
})();

/* ---------------------------------------------------------------
   Card image skeletons: every .note-art that contains an <img> shows
   a shimmer until the image loads. On load the image fades in; on error
   the broken image is hidden so the skeleton remains.
--------------------------------------------------------------- */
(function () {
  var arts = document.querySelectorAll('.note-art.has-img, .note-art');
  Array.prototype.forEach.call(arts, function (art) {
    var img = art.querySelector(':scope > img');
    if (!img) return;
    art.classList.add('has-img');
    var loaded = function () { art.classList.add('is-loaded'); };
    var failed = function () { art.classList.add('is-error'); };
    if (img.complete) {
      if (img.naturalWidth > 0) loaded(); else failed();
    } else {
      img.addEventListener('load', loaded, { once: true });
      img.addEventListener('error', failed, { once: true });
    }
  });
})();
