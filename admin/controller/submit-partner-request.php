<?php
session_start();
date_default_timezone_set("Africa/Lagos");

// Sanitize input
$full_name = strtoupper(htmlspecialchars(stripslashes($_POST['full_name'])));
$email = htmlspecialchars(stripslashes($_POST['email']));
$phone = htmlspecialchars(stripslashes($_POST['phone']));
$location = ucwords(htmlspecialchars(stripslashes($_POST['location'])));
$experience = ucwords(htmlspecialchars(stripslashes($_POST['experience'])));
$user_message = ucwords(htmlspecialchars(stripslashes($_POST['message'])));

// PHPMailer requirements
require "../../PHPMailer/PHPMailerAutoload.php";
require "../../PHPMailer/class.phpmailer.php";
require "../../PHPMailer/class.smtp.php";

// Compose the email message
$message = "<p>Dear Admin,<br> A new partnership request has been submitted via the DorthProSuite website. Below are the partner details:<br></p>
<ul>
    <li><strong>Full Name:</strong> $full_name</li>
    <li><strong>Email:</strong> $email</li>
    <li><strong>Phone:</strong> $phone</li>
    <li><strong>Location:</strong> $location</li>
    <li><strong>Marketing Experience:</strong> $experience</li>
    <li><strong>Message:</strong> $user_message</li>
</ul>
<p>Please log in to the dashboard or contact the prospect directly to follow up on this partnership request.<br><br>
Best regards,<br>
DorthProSuite<br>Partnership Team</p>";

// Email sending function
function smtpmailer($to, $from, $from_name, $subject, $body) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'www.dorthprosuite.com';
    $mail->Port = 465;
    $mail->Username = 'admin@dorthprosuite.com';
    $mail->Password = 'yMcmb@her0123!';

    $mail->IsHTML(true);
    $mail->From = "admin@dorthprosuite.com";
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    $mail->AddAddress('onostarmedia@gmail.com');

    if(!$mail->Send()) {
        $error = "<div id='not_available'><div class='not_available'><p style='color:red'><strong><i class='fas fa-times-circle' style='color: red;'></i> Submission Failed</strong><br>Your partnership request could not be sent. Please try again.</p><a style='background:#048d76; color:#fff;padding:10px; border:1px solid #fff; box-shadow:1px 1px 1px #222' href='partners.php'> Retry</a></div></div>";
        $_SESSION['error'] = $error;
        header("Location: ../../partners.php");
        return $error;
    } else {
        $success = "<div id='not_available'><div class='not_available'><p><strong><i class='fas fa-check-circle' style='color: #28a745;'></i> Request Submitted</strong><br>Your partnership request has been received successfully. Our team will contact you shortly.</p><a style='background:#048d76; color:#fff;padding:10px; border:1px solid #fff; box-shadow:1px 1px 1px #222' href='index.php'> Continue</a></div></div>";
        $_SESSION['success'] = $success;
        header("Location: ../../partners.php");
        return $success;
    }
}

// Email parameters
$to = 'contact@dorthprosuite.com';
$from = 'admin@dorthprosuite.com';
$from_name = "DorthProSuite";
$subj = 'New Partnership Request from '.$full_name;
$msg = "<div>$message</div>";

// Trigger email
$error = smtpmailer($to, $from, $from_name, $subj, $msg);
?>
