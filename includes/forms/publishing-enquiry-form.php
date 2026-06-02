<?php
// Publishing enquiry form: richer lead form used on the contact page.
$enquiry_packages = [
    ['name' => 'Standard',           'price' => '$1,574', 'desc' => 'Perfect for first-time authors'],
    ['name' => 'Professional',       'price' => '$2,699', 'desc' => 'Full editorial and formatting support'],
    ['name' => 'Illustrated',        'price' => '$2,699', 'desc' => 'Custom illustrations included'],
    ['name' => 'All-Inclusive',      'price' => '$5,579', 'desc' => 'Everything from editing to global distribution'],
    ['name' => 'Traditional',        'price' => '$7,199', 'desc' => 'White-glove full-service publishing'],
    ['name' => 'Custom / Not Sure Yet', 'price' => "Let's Talk", 'desc' => "We'll build a quote around your needs"],
];
$enquiry_book_types = [
    'Picture Book (ages 0-5)',
    'Early Reader (ages 5-8)',
    'Chapter Book (ages 7-12)',
    'Middle Grade (ages 8-12)',
    'Young Adult (ages 13+)',
    'Board Book (ages 0-3)',
    'Activity / Colouring Book',
    'Non-Fiction for Kids',
    'Other',
];
$enquiry_budgets = [
    'Under $2,000',
    '$2,000 to $3,500',
    '$3,500 to $5,000',
    '$5,000 to $7,500',
    '$7,500 and above',
    'Not sure yet',
];
?>
<div class="card form-card enquiry-card">
  <div class="form-head">
    <span class="form-badge" aria-hidden="true">
      <svg viewBox="0 0 24 24"><path d="M12 3v12" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="m7.5 8 4.5-4.5L16.5 8" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 14v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
    </span>
    <div>
      <p class="form-eyebrow">Start Your Publishing Journey</p>
      <h3>Let&apos;s Publish Your Book</h3>
      <p>Fill in the details below and our publishing team will be in touch within 1 business day with a personalised plan.</p>
    </div>
  </div>
  <form class="site-form enquiry-form" action="<?php echo e(asset('form-submission.php')); ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="form_type" value="enquiry">
    <input type="hidden" name="source_page" value="<?php echo e($_SERVER['REQUEST_URI'] ?? ''); ?>">
    <div class="hp-field" aria-hidden="true"><label>Company<input type="text" name="company" tabindex="-1" autocomplete="off"></label></div>
    <?php if (!empty($_GET['form_status']) && $_GET['form_status'] !== 'success'): ?>
      <p class="form-notice field full" role="alert"><?php
        $fs = $_GET['form_status'];
        echo e([
          'invalid'        => 'Please add your name and a valid email, then try again.',
          'file-too-large' => 'That file is too large. Please keep attachments under 20MB.',
          'file-blocked'   => 'That file type is not allowed. Use PDF, DOC, DOCX or TXT.',
          'invalid-file'   => 'We could not read that file. Use PDF, DOC, DOCX or TXT.',
        ][$fs] ?? 'Something went wrong sending your enquiry. Please try again.');
      ?></p>
    <?php endif; ?>
    <div class="field">
      <label for="enq-name">Full Name <span class="req">*</span></label>
      <input id="enq-name" name="name" type="text" placeholder="e.g. Jane Smith" required>
    </div>
    <div class="field">
      <label for="enq-email">Email Address <span class="req">*</span></label>
      <input id="enq-email" name="email" type="email" placeholder="yourname@domain.com" required>
    </div>
    <div class="field">
      <label for="enq-phone">Phone Number</label>
      <input id="enq-phone" name="phone" type="tel" placeholder="+61 400 000 000">
    </div>
    <div class="field">
      <label for="enq-budget">Budget Range <span class="req">*</span></label>
      <select id="enq-budget" name="budget" required>
        <option value="" disabled selected>Select your budget range...</option>
        <?php foreach ($enquiry_budgets as $budget): ?>
          <option><?php echo e($budget); ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <fieldset class="field full pkg-field">
      <legend>Package Selection <span class="req">*</span></legend>
      <div class="pkg-grid">
        <?php foreach ($enquiry_packages as $i => $pkg): ?>
          <label class="pkg-card">
            <input type="radio" name="package" value="<?php echo e($pkg['name']); ?>"<?php echo $i === 0 ? ' required' : ''; ?>>
            <span class="pkg-inner">
              <span class="pkg-top">
                <span class="pkg-name"><?php echo e($pkg['name']); ?></span>
                <span class="pkg-price"><?php echo e($pkg['price']); ?></span>
              </span>
              <span class="pkg-desc"><?php echo e($pkg['desc']); ?></span>
            </span>
          </label>
        <?php endforeach; ?>
      </div>
    </fieldset>

    <div class="field full">
      <label for="enq-booktype">Book Type <span class="req">*</span></label>
      <select id="enq-booktype" name="book_type" required>
        <option value="" disabled selected>Select your book type...</option>
        <?php foreach ($enquiry_book_types as $type): ?>
          <option><?php echo e($type); ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div class="field full">
      <label for="enq-about">Tell Us About Your Book</label>
      <textarea id="enq-about" name="about" placeholder="Give us a brief overview of your story idea, characters, themes, or anything else you'd like us to know..."></textarea>
    </div>

    <div class="field full file-field">
      <label for="enq-file" class="file-label">Attach Manuscript <span class="opt">(optional)</span></label>
      <label class="file-drop" id="enq-drop" for="enq-file">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 16V7" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/><path d="m8.5 10.5 3.5-3.5 3.5 3.5" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M5 15v3a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
        <span class="file-drop-main">Drop your manuscript here or <span class="file-browse">browse files</span></span>
        <span class="file-drop-sub">PDF, DOC, DOCX or TXT &middot; Max 20MB</span>
        <span class="file-name" id="enq-file-name">No file chosen</span>
      </label>
      <input id="enq-file" name="manuscript" type="file" accept=".pdf,.doc,.docx,.txt" hidden>
    </div>

    <div class="field full nda-field">
      <label class="nda-check">
        <input type="checkbox" name="nda" value="yes">
        <span class="nda-text">
          <strong>I require an NDA to be sent in the reply</strong>
          <small>By checking this box, you confirm that you&apos;d like Purple Giraffe Press to include a signed Non-Disclosure Agreement (NDA) with their first response email. Your idea will be kept strictly confidential.</small>
        </span>
      </label>
    </div>

    <button class="btn btn-sun form-submit" type="submit">Submit My Publishing Enquiry <span aria-hidden="true">&rarr;</span></button>
    <p class="form-note">
      <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="11" width="14" height="9" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M8 11V8a4 4 0 0 1 8 0v3" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>
      Your details are fully secure and will never be shared with third parties.
    </p>
  </form>
</div>
<script>
(function () {
  var input = document.getElementById('enq-file');
  var nameEl = document.getElementById('enq-file-name');
  var drop = document.getElementById('enq-drop');
  if (!input || !nameEl) return;
  function render() {
    if (input.files && input.files.length) {
      nameEl.textContent = input.files[0].name;
      nameEl.classList.add('has-file');
    } else {
      nameEl.textContent = 'No file chosen';
      nameEl.classList.remove('has-file');
    }
  }
  input.addEventListener('change', render);
  if (drop) {
    ['dragenter', 'dragover'].forEach(function (ev) {
      drop.addEventListener(ev, function (e) { e.preventDefault(); drop.classList.add('is-drag'); });
    });
    ['dragleave', 'dragend', 'drop'].forEach(function (ev) {
      drop.addEventListener(ev, function (e) { e.preventDefault(); drop.classList.remove('is-drag'); });
    });
    drop.addEventListener('drop', function (e) {
      if (e.dataTransfer && e.dataTransfer.files && e.dataTransfer.files.length) {
        input.files = e.dataTransfer.files;
        render();
      }
    });
  }
})();
</script>
