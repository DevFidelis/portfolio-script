<?php
/**********************************
 * class to handle contact me form.
*/
 
class Contact {
  // class properties
  private $to = 'youremail@gmail.com';
  private $name;
  private $email;
  private $subject;
  private $message;
  
  // class constructor
  public function __construct($name, $email, $subject, $message) {
    $this->name = $name;
    $this->email = $email;
    $this->subject = $subject;
    $this->message = $message;
  }
  
  // class methods
  public function sendEmail() {
    // send the email to $to
    $headers = 'From: '.$this->name.' \r\n Address: '.$this->email;
    
    if (mail($this->to, $this->subject, $this->message, $headers)) {
      header('Location: ?success');
    } else {
      header('Location: ?error');
    }
    
  }
  
}




