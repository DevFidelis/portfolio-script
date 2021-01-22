// JavaScript logic for contact.php.

// event listeners
window.addEventListener('DOMContentLoaded', () => {
  let url = location.href;
  let report = document.querySelector('#warning');

  if (url.indexOf('success') !== -1) {
    report.classList.add('sent');
  }

  if (url.indexOf('error') !== -1) {
    report.classList.add('warning');
  }
  
  if (report.innerText == 'Fill in all inputs below.') {
    report.classList.add('info');
  }

});

// functions
function validate() {
  // variables
  let contactForm = document.querySelector('.contact-form');
  let formErrors = document.querySelector('#warning');
  let username = contactForm.username.value.trim();
  let useremail = contactForm.useremail.value.trim();
  let subject = contactForm.subject.value.trim();
  let msg = contactForm.msg.value.trim();

  // add warning class
  formErrors.classList.toggle('info');
  formErrors.classList.toggle('warning');

  // validate form input.
  if (username == '' || username < 2) {
    formErrors.innerHTML = 'Please enter your full name...';
    return false;
  }
  
  if (useremail == '' || useremail.indexOf('@') == -1) {
    formErrors.innerHTML = 'Please enter a valid email...';
    return false;
  }
  
  if (subject == '' || subject.length < 6) {
    formErrors.innerHTML = 'Please enter a valid subject (at least 6 characters).';
    return false;
  }
  
  if (msg == '' || msg.length < 20) {
    formErrors.innerHTML = 'Please enter a message (at least 20 characters).';
    return false;
  }
  
  return true;
}
