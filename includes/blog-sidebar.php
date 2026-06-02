<?php
/**
 * Sidebar for single blog posts: share, in-article table of contents, and a CTA.
 * Expects: $post (array), $share_url (string).
 * The TOC list is populated by the script at the bottom of blog.php.
 */
$post        = $post ?? [];
$share_url   = $share_url ?? '';
$share_title = $post['title'] ?? SITE_NAME;
$enc_url     = rawurlencode($share_url);
$enc_title   = rawurlencode($share_title);
?>
<aside class="blog-sidebar" aria-label="Article sidebar">

  <div class="blog-side-card blog-side-toc">
    <span class="blog-side-label">In this article</span>
    <ul class="blog-toc-list" id="blog-toc">
      <!-- Headings injected by JS at the bottom of the post page -->
    </ul>
  </div>

  <div class="blog-side-card blog-side-share">
    <span class="blog-side-label">Share this story</span>
    <div class="blog-share">
      <a class="share-btn fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e($enc_url); ?>" target="_blank" rel="noopener" aria-label="Share on Facebook" title="Share on Facebook">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13.6 21v-7h2.3l.4-2.9h-2.7V9.1c0-.8.3-1.4 1.5-1.4h1.3V5.1C16.1 5 15.3 5 14.4 5c-2 0-3.4 1.2-3.4 3.6v2.5H8.6V14H11v7h2.6Z"/></svg>
      </a>
      <a class="share-btn x" href="https://twitter.com/intent/tweet?url=<?php echo e($enc_url); ?>&text=<?php echo e($enc_title); ?>" target="_blank" rel="noopener" aria-label="Share on X" title="Share on X">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M17.5 3h3l-6.6 7.5L21.7 21h-6l-4.7-6.1L5.6 21H2.5l7-8L2.3 3h6.1l4.2 5.6L17.5 3Zm-1 16h1.7L7.6 4.8H5.8L16.5 19Z"/></svg>
      </a>
      <a class="share-btn li" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo e($enc_url); ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn" title="Share on LinkedIn">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M6.9 8.6H4.3V20h2.6V8.6ZM5.6 4.2A1.5 1.5 0 1 0 5.6 7.2a1.5 1.5 0 0 0 0-3ZM20 20v-6.3c0-3-1.6-4.4-3.7-4.4a3.2 3.2 0 0 0-2.9 1.6V8.6H10.8c0 .8 0 11.4 0 11.4h2.6v-6.4c0-.3 0-.7.1-.9a1.8 1.8 0 0 1 1.7-1.2c1.2 0 1.7.9 1.7 2.3V20H20Z"/></svg>
      </a>
      <a class="share-btn wa" href="https://api.whatsapp.com/send?text=<?php echo e(rawurlencode($share_title . ' ' . $share_url)); ?>" target="_blank" rel="noopener" aria-label="Share on WhatsApp" title="Share on WhatsApp">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12 3a9 9 0 0 0-7.7 13.6L3 21l4.5-1.2A9 9 0 1 0 12 3Zm0 1.8a7.2 7.2 0 0 1 6 11.2 7.2 7.2 0 0 1-9.1 2.4l-.3-.2-2.6.7.7-2.6-.2-.3A7.2 7.2 0 0 1 12 4.8Zm-2.5 3.4c-.2 0-.4 0-.6.3-.2.2-.8.7-.8 1.8s.8 2.1.9 2.3c.1.2 1.6 2.6 4 3.5 1.9.7 2.3.6 2.7.6.5 0 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1l-.7-.4c-.3-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1l-.7.9c-.1.2-.3.2-.5.1a5.9 5.9 0 0 1-1.7-1.1 6.4 6.4 0 0 1-1.2-1.5c-.1-.2 0-.4.1-.5l.4-.4.3-.5c0-.2 0-.3 0-.5l-.7-1.7c-.2-.4-.4-.4-.5-.4Z"/></svg>
      </a>
      <a class="share-btn em" href="mailto:?subject=<?php echo e($enc_title); ?>&body=<?php echo e($enc_url); ?>" aria-label="Share by email" title="Share by email">
        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2.4" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="m4.2 7 7.8 5.6L19.8 7" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </div>

  <div class="blog-side-card blog-side-cta">
    <span class="blog-side-glow" aria-hidden="true"></span>
    <span class="blog-side-label">Have a story to tell?</span>
    <h4>Book a free <em>30-minute</em> chat.</h4>
    <p>Tell us where you are with your children&apos;s book and we&apos;ll come back within one business day.</p>
    <a class="btn btn-sun" href="<?php echo e(asset(MAIN_CTA_LINK)); ?>" data-quote-open>Start a Conversation <span aria-hidden="true">&rarr;</span></a>
  </div>

</aside>
