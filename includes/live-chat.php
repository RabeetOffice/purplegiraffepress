<?php
/* =================================================================
   LIVE CHAT — Purple Giraffe Press
   A brand-matched chat launcher that opens the Tawk.to chat window.
   Tawk's own bubble is hidden; this storybook button (bottom-right)
   is what visitors see and click.

   - IDs come from config (TAWK_PROPERTY_ID / TAWK_WIDGET_ID), which
     the admin Developer page can override. Blank either to disable.
   - Progressive enhancement: the button is a real link to the contact
     page, so with JS off (or if Tawk is blocked/slow) it still does
     something useful. When Tawk is ready, JS opens the chat instead.
   - A small greeting bubble pops once per browser session; a green dot
     shows when an agent is online; an unread badge shows new replies.
================================================================= */

$__tawk_property = preg_replace('~[^A-Za-z0-9]~', '', (string) (defined('TAWK_PROPERTY_ID') ? TAWK_PROPERTY_ID : ''));
$__tawk_widget   = preg_replace('~[^A-Za-z0-9]~', '', (string) (defined('TAWK_WIDGET_ID') ? TAWK_WIDGET_ID : ''));

/* No IDs = chat switched off. Render nothing. */
if ($__tawk_property === '' || $__tawk_widget === '') { return; }
?>
<div class="pgp-chat" data-pgp-chat>
  <div class="pgp-chat-greet" data-chat-greet hidden>
    <button class="pgp-chat-greet-x" type="button" data-chat-greet-close aria-label="Dismiss">&times;</button>
    <p class="pgp-chat-greet-title">Hello there! &#128075;</p>
    <p class="pgp-chat-greet-text">Questions about publishing your book? We&rsquo;re happy to help, right here.</p>
  </div>

  <a class="pgp-chat-fab" href="<?php echo e(asset('contact.php')); ?>" data-chat-fab
     aria-label="Chat with the Purple Giraffe Press team">
    <span class="pgp-chat-fab-face">
      <svg class="pgp-chat-ic pgp-chat-ic-open" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M4 5.5h16a1.5 1.5 0 0 1 1.5 1.5v8a1.5 1.5 0 0 1-1.5 1.5H9.6L5 20.4V16.5H4A1.5 1.5 0 0 1 2.5 15V7A1.5 1.5 0 0 1 4 5.5Z"
              fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
        <circle cx="8.5" cy="11" r="1.15" fill="currentColor"/>
        <circle cx="12" cy="11" r="1.15" fill="currentColor"/>
        <circle cx="15.5" cy="11" r="1.15" fill="currentColor"/>
      </svg>
      <svg class="pgp-chat-ic pgp-chat-ic-close" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M6 6l12 12M18 6 6 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </span>
    <span class="pgp-chat-fab-label">Chat with us</span>
    <span class="pgp-chat-dot" data-chat-dot hidden aria-hidden="true"></span>
    <span class="pgp-chat-badge" data-chat-badge hidden aria-hidden="true">0</span>
  </a>
</div>

<script>
(function () {
  var root  = document.querySelector('[data-pgp-chat]');
  if (!root) return;
  var fab   = root.querySelector('[data-chat-fab]');
  var greet = root.querySelector('[data-chat-greet]');
  var dot   = root.querySelector('[data-chat-dot]');
  var badge = root.querySelector('[data-chat-badge]');
  var open = false;

  /* ---- Load Tawk.to (all environments, so the chat is testable locally) ---- */
  var Tawk_API = window.Tawk_API = window.Tawk_API || {};
  window.Tawk_LoadStart = new Date();

  Tawk_API.onLoad = function () {
    /* Hide Tawk's own launcher — ours replaces it. */
    if (typeof Tawk_API.hideWidget === 'function') Tawk_API.hideWidget();
  };
  /* Minimising re-shows Tawk's bubble, so hide it again and reset our button. */
  Tawk_API.onChatMinimized = function () { open = false; setOpen(false); if (Tawk_API.hideWidget) Tawk_API.hideWidget(); };
  Tawk_API.onChatMaximized = function () { open = true;  setOpen(true); };
  Tawk_API.onStatusChange  = function (status) { toggleDot(status === 'online'); };
  Tawk_API.onUnreadCountChanged = function (count) { setBadge(count); };

  (function () {
    var s = document.createElement('script');
    s.async = true;
    s.src = 'https://embed.tawk.to/<?php echo $__tawk_property; ?>/<?php echo $__tawk_widget; ?>';
    s.charset = 'UTF-8';
    s.setAttribute('crossorigin', '*');
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(s, first);
  })();

  function setOpen(state) {
    root.classList.toggle('is-open', !!state);
    fab.setAttribute('aria-label', state
      ? 'Close chat'
      : 'Chat with the Purple Giraffe Press team');
    if (state) hideGreet();
  }
  function toggleDot(on) { if (dot) dot.hidden = !on; }
  function setBadge(count) {
    if (!badge) return;
    count = parseInt(count, 10) || 0;
    badge.hidden = count < 1;
    badge.textContent = count > 9 ? '9+' : String(count);
  }

  /* Button: open the real chat when Tawk is present, otherwise follow the link.
     We only require the API object + maximize() to exist (Tawk queues calls made
     before it finishes initialising), so an early click still opens the chat
     instead of dropping to the contact-page fallback. */
  fab.addEventListener('click', function (e) {
    var api = window.Tawk_API;
    if (!api || typeof api.maximize !== 'function') {
      return; /* Tawk blocked/unavailable -> let the <a href="contact"> happen */
    }
    e.preventDefault();
    hideGreet();
    if (open) {
      api.minimize();
    } else {
      /* Show first: a hidden widget can otherwise swallow maximize(). onChatMinimized
         hides Tawk's own bubble again so only our launcher shows. */
      if (typeof api.showWidget === 'function') api.showWidget();
      api.maximize();
    }
  });

  /* ---- Greeting bubble: once per session, after a short beat ---- */
  function hideGreet() { if (greet) greet.hidden = true; }
  var greetClose = root.querySelector('[data-chat-greet-close]');
  if (greetClose) greetClose.addEventListener('click', function (e) {
    e.stopPropagation(); hideGreet();
    try { sessionStorage.setItem('pgpChatGreet', '1'); } catch (err) {}
  });

  var seen = false;
  try { seen = sessionStorage.getItem('pgpChatGreet') === '1'; } catch (err) {}
  if (greet && !seen) {
    window.setTimeout(function () {
      if (!open) {
        greet.hidden = false;
        try { sessionStorage.setItem('pgpChatGreet', '1'); } catch (err) {}
      }
    }, 6000);
  }
})();
</script>
