<?php

/**
 * PHPMailer simple contact form example.
 * If you want to accept and send uploads in your form, look at the send_file_upload example.
 */
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC-8');

    require '../vendor/autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
     $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "cmhandojo@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "password"
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('cmhandojo@gmail.com', 'First Last');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('cmhandojo@gmail.com', 'John Doe');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
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

//// Modify the path in the require statement below to refer to the
//// location of your Composer autoload.php file.
//require '../vendor/autoload.php';
//
//  if ($_SERVER["REQUEST_METHOD"] == "POST")
//    // Instantiate a new PHPMailer
//    $mail = new PHPMailer;
//
//    // Tell PHPMailer to use SMTP
//    $mail->isSMTP();
//
//    // Replace sender@example.com with your "From" address.
//    // This address must be verified with Amazon SES.
//    $mail->setFrom('cmhandojo@gmail.com', 'New Contact');
//
//    // Replace recipient@example.com with a "To" address. If your account
//    // is still in the sandbox, this address must be verified.
//    // Also note that you can include several addAddress() lines to send
//    // email to multiple recipients.
//    $mail->addAddress('cmhandojo@gmail.com', 'Celena H');
//
//    // Replace smtp_username with your Amazon SES SMTP user name.
//    $mail->Username = "AKIAI72UZXVW6MKGFU2Q";
//
//    // Replace smtp_password with your Amazon SES SMTP password.
//    $mail->Password = "Ahg/jXAuVFkSHMrUH8SwFSHDw7jEpJx71loZooTXPlZM";
//
//    // Specify a configuration set. If you do not want to use a configuration
//    // set, comment or remove the next line.
//    //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');
//
//    // If you're using Amazon SES in a region other than US West (Oregon),
//    // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
//    // endpoint in the appropriate region.
//    $mail->Host = 'email-smtp.us-west-2.amazonaws.com';
//
//    //Reply to header
//    $mail->addReplyTo($_POST['email'], $_POST['name']
//
//    // The subject line of the email
//    $mail->Subject = 'New Contact Form Submittal';
//
//    // The HTML-formatted body of the email
//    $mail->Body = $_POST['message'];
//
//    // Tells PHPMailer to use SMTP authentication
//    $mail->SMTPAuth = true;
//
//    // Enable TLS encryption over port 587
//    $mail->SMTPSecure = 'tls';
//    $mail->Port = 587;
//
//    // Tells PHPMailer to send HTML-formatted email
//    $mail->isHTML(true);
//
//    // The alternative email body; this is only displayed when a recipient
//    // opens the email in a non-HTML email client. The \r\n represents a
//    // line break.
//    $mail->AltBody = "Email Test\r\nThis email was sent through the
//        Amazon SES SMTP interface using the PHPMailer class.";
//
//    if(!$mail->send()) {
//        echo "Email not sent. " , $mail->ErrorInfo , PHP_EOL;
//    } else {
//        echo "Email sent!" , PHP_EOL;
//    }
//
//  }
//

?>
