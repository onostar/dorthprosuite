<?php
    session_start();
    date_default_timezone_set("Africa/Lagos");
    if(isset($_SESSION['user'])){
        $username = $_SESSION['user'];

        // instantiate classes
        include "../classes/dbh.php";
        include "../classes/select.php";
        $fetch_user = new selects();
        $users = $fetch_user->fetch_details_cond('users', 'username', $username);
        foreach($users as $user){
            $comp_id = $user->company;
        }

        /* get company */
        // $fetch_comp = new selects();
        $comps = $fetch_user->fetch_details_cond('companies', 'company_id', $comp_id);
        if(is_array($comps)){
            foreach($comps as $com){
                $verify_code = $com->verification;
            }
        }
        require "../../PHPMailer/PHPMailerAutoload.php";
        require "../../PHPMailer/class.phpmailer.php";
        require "../../PHPMailer/class.smtp.php";
   
        //send verification email
        /* send mails to seller */
        function smtpmailer($to, $from, $from_name, $subject, $body){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true; 

            $mail->SMTPSecure = 'ssl'; 
            $mail->Host = 'www.dorthpro.com';
            $mail->Port = 465; 
            $mail->Username = 'admin@dorthpro.com';
            $mail->Password = 'yMcmb@her0123!';   


            $mail->IsHTML(true);
            $mail->From="admin@dorthpro.com";
            $mail->FromName=$from_name;
            $mail->Sender=$from;
            $mail->AddReplyTo($from, $from_name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($to);
            // $mail->AddAddress('clozethinc@gmail.com');
            $mail->AddAddress('onostarmedia@gmail.com');
            
            if(!$mail->Send())
            {
                $_SESSION['error'] = "Failed to send mail";
                $error = $_SESSION['error'];
                header("Location: ../view/users.php");
                
                return $error; 
            }
            else 
            {
                /* success message */
                $_SESSION['success'] = "Congratulations!!!. Your registration was successful, kindly verify your account to complete setup of your business!";
                $error = $_SESSION['success'];
                header("Location: ../verification.php");
                // header("Location: index.html");
                return $error;
            }
        }
        
        $to = $username;
        $from = 'admin@dorthpro.com';
        $from_name = "Dorthpro Digitals";
        $name = 'Dorthpro';
        $subj = 'Account verification';
        $msg = "<p>Congratulations on registering an account on Dorthpro. To complete your registration, kindly enter <h2>$verify_code</h2> to  verify your account.<br>
        Or click on the link below to verify your account<br><br>
        <a style='color:#fff; background:green; padding:20px;' href='https://www.dorthpro.com/company/verification.php?code=$verify_code'>Verify Account</a></p>";
        
        $error=smtpmailer($to, $from, $name ,$subj, $msg);
        
    }else{
        header("Location: ../index.php");
    }