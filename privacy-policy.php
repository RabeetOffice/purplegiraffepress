<?php include 'includes/config.php'; ?>
<?php
$page_title = "Privacy Policy | Purple Giraffe Press";
$page_description = 'How Purple Giraffe Press collects, uses, and protects your personal information, plus your privacy rights under GDPR, the Australian Privacy Act, and CCPA.';
$canonical_path = 'privacy-policy.php';
require_once __DIR__ . '/includes/legal-icons.php';

$mail = e(SITE_EMAIL);
// Each section renders as an icon card. Body is trusted inline HTML.
$legal_sections = [
    ['n' => 1, 'icon' => 'clipboard', 'title' => 'Information We Collect',
     'body' => '<p>When you use our website, contact forms, or submission portals, we may collect the following personal information:</p>'
        . '<ul class="legal-list">'
        . '<li>Full name and email address</li>'
        . '<li>Phone number (if provided)</li>'
        . '<li>Manuscript files or writing samples you voluntarily upload</li>'
        . '<li>IP address, browser type, and general usage data via analytics tools</li>'
        . '<li>Any information you include in free-text fields (e.g. your book description)</li>'
        . '</ul>'
        . '<p>We do not collect payment card information directly — all transactions (where applicable) are processed through secure third-party payment providers.</p>'],
    ['n' => 2, 'icon' => 'sliders', 'title' => 'How We Use Your Information',
     'body' => '<p>We use the information we collect to:</p>'
        . '<ul class="legal-list">'
        . '<li>Respond to publishing enquiries and manuscript submissions</li>'
        . '<li>Send you a personalised publishing consultation or quote</li>'
        . '<li>Deliver the newsletter you have opted into (you may unsubscribe at any time)</li>'
        . '<li>Improve the performance and content of our website</li>'
        . '<li>Comply with our legal obligations</li>'
        . '</ul>'
        . '<p>We will never sell, rent, or trade your personal information to third parties for marketing purposes.</p>'],
    ['n' => 3, 'icon' => 'scales', 'title' => 'Legal Basis for Processing (GDPR)',
     'body' => '<p>For visitors in the European Economic Area (EEA) and United Kingdom, we process your data under the following lawful bases:</p>'
        . '<ul class="legal-list">'
        . '<li><strong>Legitimate Interest</strong> — to respond to enquiries you have initiated</li>'
        . '<li><strong>Consent</strong> — for newsletter subscriptions and optional cookies</li>'
        . '<li><strong>Contractual Necessity</strong> — where we are fulfilling a publishing agreement</li>'
        . '</ul>'
        . '<p>You may withdraw consent at any time by contacting us at <a href="mailto:' . $mail . '">' . $mail . '</a>.</p>'],
    ['n' => 4, 'icon' => 'lock', 'title' => 'Data Security',
     'body' => '<p>We take the security of your personal information seriously. We implement industry-standard technical and organisational measures to protect your data against unauthorised access, disclosure, alteration, or destruction.</p>'
        . '<p>All form submissions on our website are transmitted via HTTPS. Manuscript files you upload are stored securely and accessible only to authorised team members involved in your project.</p>'
        . '<p>We use Formspree to handle contact form submissions. Please refer to Formspree\'s Privacy Policy for information on how they handle your data.</p>'],
    ['n' => 5, 'icon' => 'cookie', 'title' => 'Cookies',
     'body' => '<p>Our website uses cookies to enhance your browsing experience. Cookies are small text files stored on your device.</p>'
        . '<p>We use the following categories of cookies:</p>'
        . '<ul class="legal-list">'
        . '<li><strong>Essential Cookies</strong> — required for the website to function correctly</li>'
        . '<li><strong>Analytics Cookies</strong> — help us understand how visitors interact with our site (e.g. page views, session duration)</li>'
        . '</ul>'
        . '<p>You can manage or disable cookies via your browser settings at any time. Note that disabling cookies may affect some features of our website.</p>'],
    ['n' => 6, 'icon' => 'clock', 'title' => 'Data Retention',
     'body' => '<p>We retain your personal data only for as long as necessary to fulfil the purposes outlined in this policy, or as required by law.</p>'
        . '<ul class="legal-list">'
        . '<li><strong>Enquiry and form data:</strong> retained for up to 2 years unless a publishing relationship is established</li>'
        . '<li><strong>Manuscript files:</strong> deleted within 12 months of the relevant submission window closing, unless you have entered a publishing agreement with us</li>'
        . '<li><strong>Newsletter subscribers:</strong> data retained until you unsubscribe</li>'
        . '</ul>'
        . '<p>You may request deletion of your data at any time (see Your Rights below).</p>'],
    ['n' => 7, 'icon' => 'user-check', 'title' => 'Your Rights',
     'body' => '<p>Depending on your location, you may have the following rights regarding your personal data:</p>'
        . '<ul class="legal-list">'
        . '<li><strong>Right of Access</strong> — request a copy of the data we hold about you</li>'
        . '<li><strong>Right to Rectification</strong> — correct any inaccurate data</li>'
        . '<li><strong>Right to Erasure</strong> — request deletion of your data</li>'
        . '<li><strong>Right to Restrict Processing</strong> — ask us to limit how we use your data</li>'
        . '<li><strong>Right to Data Portability</strong> — receive your data in a portable format</li>'
        . '<li><strong>Right to Object</strong> — object to processing based on legitimate interests</li>'
        . '</ul>'
        . '<p>To exercise any of these rights, please email us at <a href="mailto:' . $mail . '">' . $mail . '</a>. We will respond within 30 days.</p>'],
    ['n' => 8, 'icon' => 'globe', 'title' => 'International Transfers',
     'body' => '<p>Purple Giraffe Press serves authors globally. When you submit information through our website, your data may be processed in secure systems used to provide our services.</p>'
        . '<ul class="legal-list">'
        . '<li><strong>Australia:</strong> We comply with the Australian Privacy Act 1988 and the Australian Privacy Principles (APPs).</li>'
        . '<li><strong>United States:</strong> We comply with applicable US state privacy laws including the California Consumer Privacy Act (CCPA) where applicable.</li>'
        . '<li><strong>EEA / UK:</strong> Where we transfer data outside the EEA or UK, we ensure appropriate safeguards are in place.</li>'
        . '</ul>'],
    ['n' => 9, 'icon' => 'layers', 'title' => 'Third-Party Services',
     'body' => '<p>We use the following third-party services which may process your data:</p>'
        . '<ul class="legal-list">'
        . '<li><strong>Formspree</strong> — contact and submission form handling (formspree.io)</li>'
        . '<li><strong>Google Analytics (if enabled)</strong> — anonymised website usage statistics</li>'
        . '</ul>'
        . '<p>These services have their own privacy policies. We encourage you to review them.</p>'],
    ['n' => 10, 'icon' => 'heart', 'title' => 'Children&apos;s Privacy',
     'body' => '<p>Whilst our books are created for children, our website and services are directed at adults (authors, parents, educators, and publishing professionals).</p>'
        . '<p>We do not knowingly collect personal information from children under the age of 13. If you believe a child has submitted personal information to us, please contact us immediately at <a href="mailto:' . $mail . '">' . $mail . '</a> and we will delete it promptly.</p>'],
];
?>
<?php include 'includes/header.php'; ?>

<section class="legal-hero">
  <div class="container legal-hero-inner">
    <span class="legal-pill"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><?php echo legal_icon('lock'); ?></svg> Legal</span>
    <h1>Privacy <em>Policy</em></h1>
    <p class="legal-hero-sub">We respect your privacy and are committed to protecting your personal information. This policy explains what we collect, why, and how we keep it safe.</p>
    <p class="legal-meta">Last updated: <strong>29 March 2026</strong> &middot; Effective: <strong>29 March 2026</strong></p>
  </div>
</section>

<section class="section legal-body">
  <div class="container">
    <div class="legal-intro">
      <p>Purple Giraffe Press is operated by <a href="https://keystonepublishinggroup.com/" target="_blank" rel="nofollow noopener">Keystone Publishing Group Pty Ltd</a> (ABN <a href="https://abr.business.gov.au/ABN/View?id=21697806447" target="_blank" rel="nofollow noopener">21 697 806 447</a>), which is the entity responsible for the personal information described in this policy.</p>
      <p>This Privacy Policy applies to all personal information collected through our website at purplegiraffepress.com, our contact forms, and our manuscript submission portal. By using our website or submitting your details, you agree to the collection and use of information in accordance with this policy.</p>
    </div>

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
      <h2>Questions About This Policy?</h2>
      <p>If you have any questions, concerns, or requests regarding your personal data, our Privacy Officer is here to help.</p>
      <a class="btn btn-primary" href="mailto:<?php echo e(SITE_EMAIL); ?>">Email Us</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
