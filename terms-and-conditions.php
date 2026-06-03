<?php include 'includes/config.php'; ?>
<?php
$page_title = 'Terms & Conditions | Purple Giraffe Press';
$page_description = 'The terms for working with Purple Giraffe Press: services, intellectual property, royalties, payments, timelines, NDAs, liability, and governing law.';
$canonical_path = 'terms-and-conditions.php';
require_once __DIR__ . '/includes/legal-icons.php';

$mail = e(SITE_EMAIL);
// Each clause renders as an icon card. Body is trusted inline HTML.
$legal_sections = [
    ['n' => 1, 'icon' => 'file', 'title' => 'Acceptance of Terms',
     'body' => '<p>By accessing or using the services provided by Purple Giraffe Press ("we", "our", or "us"), you agree to be bound by these Terms and Conditions. If you do not agree to these terms in full, please do not use our services. These terms apply to all clients, visitors, and users who access or use our publishing, illustration, editing, and distribution services.</p>'],
    ['n' => 2, 'icon' => 'book', 'title' => 'Services Provided',
     'body' => '<p>Purple Giraffe Press offers children\'s book publishing services including but not limited to: manuscript editing, illustration, book design, formatting, ISBN assignment, print-on-demand production, and global distribution via major online retailers including Amazon, Barnes &amp; Noble, and others. The specific services included in each project are defined in the individual Service Agreement or Package selected at the time of purchase.</p>'],
    ['n' => 3, 'icon' => 'copyright', 'title' => 'Intellectual Property &amp; Copyright',
     'body' => '<p>You, the author, retain 100% full copyright ownership of all content (text and story) you provide to us. Purple Giraffe Press retains copyright over original artwork, illustrations, and design elements created exclusively by our team, unless a full IP transfer is explicitly arranged in a separate written agreement. By submitting your manuscript, you confirm that you are the sole author and original owner of your work and that it does not infringe upon any existing copyright, trademark, or intellectual property rights.</p>'],
    ['n' => 4, 'icon' => 'dollar', 'title' => 'Royalties &amp; Revenue',
     'body' => '<p>Clients enrolled in eligible packages are entitled to 100% net royalties from all sales made through distribution platforms arranged by Purple Giraffe Press. "Net royalties" refers to the revenue received by Purple Giraffe Press from the retailer or distributor after the retailer\'s commission is deducted. Purple Giraffe Press does not take a royalty cut unless separately agreed in writing. Royalty payment schedules are subject to the payment terms of applicable distribution platforms.</p>'],
    ['n' => 5, 'icon' => 'card', 'title' => 'Payment &amp; Refund Policy',
     'body' => '<p>All service packages require payment as outlined in the invoice provided at the time of agreement. A non-refundable deposit (typically 50%) is required to begin work. The remaining balance is due upon project completion and prior to final file delivery. Refunds are not issued once active work on a project has begun. In the event Purple Giraffe Press is unable to deliver the agreed services, a pro-rated refund may be issued at our sole discretion. All prices are listed in USD and are subject to change without prior notice.</p>'],
    ['n' => 6, 'icon' => 'clock', 'title' => 'Timelines &amp; Delivery',
     'body' => '<p>Project timelines are estimates provided in good faith and are not legally binding unless confirmed in a separate written agreement. Delays caused by the client (e.g., delayed manuscript delivery, delayed feedback, or revision requests beyond the agreed scope) are not the responsibility of Purple Giraffe Press. We will communicate any changes to expected timelines promptly.</p>'],
    ['n' => 7, 'icon' => 'shield', 'title' => 'Confidentiality &amp; NDA',
     'body' => '<p>Purple Giraffe Press treats all client manuscripts, story concepts, and personal information with strict confidentiality. Where a client has requested a Non-Disclosure Agreement, one will be provided and signed by an authorised representative of Purple Giraffe Press prior to commencing work. Our team will not share, reproduce, or distribute any client content without express written permission from the client.</p>'],
    ['n' => 8, 'icon' => 'edit', 'title' => 'Revisions &amp; Scope',
     'body' => '<p>Each service package includes a defined number of revision rounds as specified in the package description. Revisions requested beyond the included scope are subject to additional fees, which will be communicated prior to commencing the additional work. Purple Giraffe Press reserves the right to decline revision requests that fall outside the agreed project scope.</p>'],
    ['n' => 9, 'icon' => 'alert-tri', 'title' => 'Limitation of Liability',
     'body' => '<p>Purple Giraffe Press shall not be held liable for any indirect, incidental, or consequential damages arising from the use of our services, including but not limited to loss of sales, loss of profits, or loss of readership. Our total liability for any claim related to our services shall not exceed the total amount paid by the client for the specific service in question.</p>'],
    ['n' => 10, 'icon' => 'scales', 'title' => 'Governing Law',
     'body' => '<p>These Terms and Conditions are governed by and construed in accordance with the laws of the jurisdiction in which Purple Giraffe Press operates. Any disputes arising from these terms shall be resolved through good-faith negotiation between the parties. If resolution cannot be reached, disputes may be submitted to binding arbitration.</p>'],
    ['n' => 11, 'icon' => 'alert', 'title' => 'Amendments',
     'body' => '<p>Purple Giraffe Press reserves the right to update or modify these Terms and Conditions at any time. Updated terms will be posted on this page with the revised date. Continued use of our services following any changes constitutes acceptance of the revised terms.</p>'],
    ['n' => 12, 'icon' => 'mail', 'title' => 'Contact',
     'body' => '<p>For any questions regarding these Terms and Conditions, please reach out to us at: <a href="mailto:' . $mail . '">' . $mail . '</a>. We aim to respond to all enquiries within 2 business days.</p>'],
];
?>
<?php include 'includes/header.php'; ?>

<section class="legal-hero">
  <div class="container legal-hero-inner">
    <span class="legal-pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?php echo legal_icon('scales'); ?></svg> Legal</span>
    <h1>Terms &amp; <em>Conditions</em></h1>
    <p class="legal-hero-sub">Please read these terms carefully before using any services provided by Purple Giraffe Press.</p>
    <p class="legal-meta">Last updated: <strong>March 2026</strong></p>
  </div>
</section>

<section class="section legal-body">
  <div class="container">
    <div class="legal-cards">
      <?php foreach ($legal_sections as $s): ?>
      <article class="legal-card reveal">
        <span class="legal-card-ic" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?php echo legal_icon($s['icon']); ?></svg></span>
        <div>
          <h2 class="legal-card-title"><span class="legal-card-n"><?php echo (int) $s['n']; ?>.</span> <?php echo $s['title']; ?></h2>
          <div class="legal-card-body"><?php echo $s['body']; ?></div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="legal-cta">
      <span class="legal-cta-ic" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?php echo legal_icon('shield'); ?></svg></span>
      <h2>Questions About Our Terms?</h2>
      <p>We&apos;re always happy to clarify anything in plain language. Just reach out and a member of our team will get back to you within 1 business day.</p>
      <a class="btn btn-primary" href="mailto:<?php echo e(SITE_EMAIL); ?>">Email Us</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
