<?php
    session_start();

    require "../../PHPMailer/PHPMailerAutoload.php";
    require "../../PHPMailer/class.phpmailer.php";
    require "../../PHPMailer/class.smtp.php";
   /*  $_SESSION['success'] = "";
    $_SESSION['error'] = ""; */
    // $_SESSION['reg_success'] = "";

    if(isset($_POST['verify'])){
        $code = htmlspecialchars(stripslashes($_POST['verify_code']));
            include "../classes/dbh.php";
            include "../classes/select.php";
            include "../classes/update.php";
            /* check if user exists */
            $check_user = new selects();
            $results = $check_user->fetch_details_cond('companies', 'verification', $code);

            if(is_array($results)){
                foreach($results as $result){
                    $company = $result->company_id;
                    $email = $result->email_address;
                }
                //get password from store
                
                $_SESSION['user'] = $email;
                $_SESSION['company'] = $company;
                // update package status
                $update_reg = new Update_table();
                $update_reg->update_double('companies', 'package_status', 1, 'verification', 0, 'company_id', $company);
                if($update_reg){
                    /* send mails to user */
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
                        $mail->AddAddress('onostarmedia@gmail.com');
                        
                        if(!$mail->Send())
                        {
                            $_SESSION['error'] = "Failed to send mail";
                            $error = $_SESSION['error'];
                            header("Location: ../view/organization.php");
                            
                            return $error; 
                        }
                        else 
                        {
                            
                            /* success message */
                            $_SESSION['success'] = "Congratulations!!!. Your registration was successful, Set up your business by updating your company information and start adding items to sell on Dorthpro!";
                            $error = $_SESSION['success'];
                            header("Location: ../view/organization.php");
                            // header("Location: index.html");
                            return $error;
                        }
                    }
                    
                    $to = $email;
                    $from = 'admin@dorthpro.com';
                    $from_name = "Dorthpro";
                    $name = 'Dorthpro';
                    $subj = 'Registration Complete';
                    $msg = "<p>Congratulations!!! Your Dorthpro registration is complete. You can now set up your Business, by updating your details, add your favourite items and start selling!</p>
                    <a style='padding:10px; color:#fff; background:green;' href='https://www.dorthpro.com/company/index.php'>Login</a>";
                    
                    $error=smtpmailer($to, $from, $name ,$subj, $msg);
                    /* update payment status */
                
                }else{
                    $_SESSION['error'] = "failed to register";
                    header("Location: ../verification.php");
                }
                    
            }else{
                $_SESSION['error'] = "Code is invalid!";
                header("Location: ../verification.php");
            }
        
        
    }
?>