<?php
// include main site header and form processor.
$pageTitle = 'Contact';
include 'header.php';
include 'inc/processors/contact.process.php';
?>

<section class="contact-area">
  <h2>Contact Me</h2>
  <div class="contact-block">
    <div id="warning"></div>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" onsubmit="return validate();" class="contact-form">
      <input type="text" name="username" placeholder="full name...">
      <input type="email" name="useremail" placeholder="your email...">
      <input type="text" name="subject" placeholder="subject...">
      <textarea name="msg" placeholder="enter your message..."></textarea>
      <button type="submit" name="send" class="btn-submit">Send</button>
    </form>
  </div>
</section>

<?php
// include main site footer
$jsFile = 'contact';
include 'footer.php';
