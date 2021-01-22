<?php
// processor for contact me form.
// include Contact Class.
include 'inc/classes/contact.class.php';

// check if form is submitted.
if (isset($_POST['send'])) {
  // get form data.
  $name = $_POST['username'];
  $email = $_POST['useremail'];
  $subject = $_POST['subject'];
  $message = $_POST['msg'];
  
  // instantiate Contact class and invoke the sendEmail method.
  $contact = new Contact($name, $email, $subject, $message);
  $contact->sendEmail();
  
}
