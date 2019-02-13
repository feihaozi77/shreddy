<?php

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "mooc0705@hotmail.com";
    $email_subject = "Shreddy Customer Message";
  
    $email = $_POST['email']; // required
    $wechat = $_POST['wechat']; // required
    $address = $_POST['address']; // required
    $city = $_POST['city']; // not required
    $state = $_POST['state']; // required
    $message = $_POST['msg'];

    echo($email);
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
   
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Wechat or Phone Number: ".clean_string($wechat)."\n";
    $email_message .= "Address: ".clean_string($address)."\n";
    $email_message .= "City: ".clean_string($city)."\n";
    $email_message .= "Province: ".clean_string($state)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 echo($email_message);
// create email headers
$headers = 'From: '.$email."\r\n";

@mail($email_to, $email_subject, $email_message, $headers);

?>
 
