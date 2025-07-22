<?php
    session_start();
    date_default_timezone_set("Africa/Lagos");
    // $date = date("Y-m-d H:i:s");
    $full_name = strtoupper(htmlspecialchars(stripslashes($_POST['full_name'])));
    $email = htmlspecialchars(stripslashes($_POST['email']));
    $phone = htmlspecialchars(stripslashes($_POST['phone']));
    $business = ucwords(htmlspecialchars(stripslashes($_POST['industry'])));
    $date = htmlspecialchars(stripslashes($_POST['preferred_datetime']));
    $preferred_date = date("jS F, Y, h:ia", strtotime($date));
    $user_message = ucwords(htmlspecialchars(stripslashes($_POST['message'])));
    require "../../PHPMailer/PHPMailerAutoload.php";
    require "../../PHPMailer/class.phpmailer.php";
    require "../../PHPMailer/class.smtp.php";
    $message = "<p>Dear Admin,<br> A new live demo request has been submitted via the DorthProSuite website. Below are the request details:<br></p>
    <ul>
        <li><strong>Name:</strong> $full_name</li>
        <li><strong>Email:</strong> $email</li>
        <li><strong>Phone:</strong> $phone</li>
        <li><strong>Industry:</strong> $business</li>
        <li><strong>Preferred Date:</strong> $preferred_date</li>
        <li><strong>Addiional Message:</strong> $user_message</li>
    </ul>
    <p>Please log in to the dashboard or contact the user directly to schedule a live demo.<br><br>
    Best regards,<br>
    DorthProSuite<br>Support Team</p>";
    
        /* send mails to customer */
        function smtpmailer($to, $from, $from_name, $subject, $body){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true; 
    
            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'www.dorthprosuite.com';
            $mail->Port = 465; 
            $mail->Username = 'admin@dorthprosuite.com';
            $mail->Password = 'yMcmb@her0123!';   
    
    
            $mail->IsHTML(true);
            $mail->From="admin@dorthprosuite.com";
            $mail->FromName=$from_name;
            $mail->Sender=$from;
            $mail->AddReplyTo($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($to);
            $mail->AddAddress('onostarmedia@gmail.com');
            
            if(!$mail->Send())
            {
                $error = "<div id='not_available'><div class='not_available'><p style='color:red'><strong><i class='fas fa-cancel' style='color: red;'></i> Request Failed</strong><br>Your demo request could not be sent. Please try again</p><a style='background:#048d76; color:#fff;padding:10px; border:1px solid #fff; box-shadow:1px 1px 1px #222' href='request_demo.php'> Retry</a></div></div>";
                $_SESSION['error'] = $error;
                header("Location: ../../request_demo.php");
                
                return $error; 
            }
            else 
            {
                
                /* success message */
                
                $error = "<div id='not_available'><div class='not_available'><p><strong><i class='fas fa-check-circle' style='color: #28a745;'></i> Request Submitted</strong><br>Your demo request has been received successfully. Our team will contact you shortly to schedule your live demo session.</p><a style='background:#048d76; color:#fff;padding:10px; border:1px solid #fff; box-shadow:1px 1px 1px #222' href='index.php'> Continue</a></div></div>";
                $_SESSION['success'] = $error;
                header("Location: ../../request_demo.php");
                return $error;
            }
        }
        
        $to = 'contact@dorthprosuite.com';
        $from = 'admin@dorthprosuite.com';
        $from_name = "$name";
        $name = "Dorthpro Suite";
        $subj = 'New demo request from '.$full_name;
        $msg = "<div>$message</div>";
        
        $error=smtpmailer($to, $from, $name ,$subj, $msg);