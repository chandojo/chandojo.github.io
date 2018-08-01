<?php

  $nameErr = $emailErr = $messageErr = "";
  $name = $email = $message = $success = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
 }
    }

    if (empty($_POST["email"])){
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["message"])){
      $messageErr = "Message is required";
    } else {
      $message= test_input($_POST["message"]);
    }
  }

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
    }

  if($nameErr and $emailErr == "" and $messageErr == ""){
    $message_body = "";
    unset($_POST['submit']);
    foreach($_POST as $key => $value){
      $message_body = "$key: $value \n";
    }

    $to = 'cmhandojo@gmail.com';
    $subject = "Contact Form Submittal";
    if (mail($to, $subject, $message)){
      $success = "Message sent, thank you for contacting Celena!";
      $name = $email = $message = "";
    }
  }



?>
