<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  ini_set('max_execution_time', 300);

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ashleytstevenson123@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include($php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = false;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_REQUEST['name'];
  $contact->from_email = $_REQUEST['email'];
  $contact->subject = $_REQUEST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'panel.freehosting.com',
    'username' => 'ashleytstevenson123@gmail.com',
    'password' => 'mehd uigo cwyv mkxb',
    'port' => '465'
  );
  

  $contact->add_message( $_REQUEST['name'], 'From');
  $contact->add_message( $_REQUEST['email'], 'Email');
  $contact->add_message( $_REQUEST['message'], 'Message', 10);

  echo $contact->send();
?>
