<div class="card form-card">
  <div class="form-head">
    <span class="form-badge" aria-hidden="true">
      <svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2.4" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="m4.2 7 7.8 5.6L19.8 7" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </span>
    <div>
      <h3>Send us a message</h3>
      <p>We usually reply within one business day.</p>
    </div>
  </div>
  <form class="site-form" action="#" method="post">
    <div class="field">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" placeholder="Your name" required>
    </div>
    <div class="field">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" placeholder="you@email.com" required>
    </div>
    <div class="field">
      <label for="phone">Phone</label>
      <input id="phone" name="phone" type="tel" placeholder="Optional">
    </div>
    <div class="field">
      <label for="book-type">Book Type <span class="req">*</span></label>
      <select id="book-type" name="book_type" required>
        <option value="" disabled selected>Select your book type...</option>
        <option>Picture Book (ages 0-5)</option>
        <option>Early Reader (ages 5-8)</option>
        <option>Chapter Book (ages 7-12)</option>
        <option>Middle Grade (ages 8-12)</option>
        <option>Young Adult (ages 13+)</option>
        <option>Board Book (ages 0-3)</option>
        <option>Activity / Colouring Book</option>
        <option>Non-Fiction for Kids</option>
        <option>Other</option>
      </select>
    </div>
    <div class="field full">
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Tell us a little about your book or question..." required></textarea>
    </div>
    <div class="field full nda-field">
      <label class="nda-check">
        <input type="checkbox" name="nda" value="yes">
        <span class="nda-text">
          <strong>Instant NDA Protection</strong>
          <small>Send a signed Non-Disclosure Agreement directly to my inbox for my manuscript submission.</small>
        </span>
      </label>
    </div>
    <button class="btn btn-sun form-submit" type="submit">Send Message <span aria-hidden="true">&rarr;</span></button>
    <p class="form-note">
      <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="11" width="14" height="9" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M8 11V8a4 4 0 0 1 8 0v3" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>
      Your details stay private, no spam, ever.
    </p>
  </form>
</div>
