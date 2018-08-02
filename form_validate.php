<?php
// Example from PHPMailer documentation

/**
 * This example shows how to handle a simple contact form.
 */
//Import PHPMailer classes into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require '../vendor/autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'user@example.com';                 // SMTP username
        $mail->Password = 'secret';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to


    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('from@example.com', 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('whoto@example.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'New Contact Form Submission';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}


//----------- INPUT VALIDATION -----------------

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
//    $message_body = "";
//    unset($_POST['submit']);
//    foreach($_POST as $key => $value){
//      $message_body = "$key: $value \n";
//    }
//
//    $to = 'cmhandojo@gmail.com';
//    $subject = "Contact Form Submittal";
//    if (mail($to, $subject, $message)){
//      $success = "Message sent, thank you for contacting Celena!";
//      $name = $email = $message = "";
//    }

  }



?>
