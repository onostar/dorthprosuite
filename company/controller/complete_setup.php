<?php
    session_start();
    date_default_timezone_set("Africa/Lagos");
    require "../../PHPMailer/PHPMailerAutoload.php";
    require "../../PHPMailer/class.phpmailer.php";
    require "../../PHPMailer/class.smtp.php";
    if(isset($_POST['register'])){
        $username = htmlspecialchars(stripslashes($_POST['user']));
        $comp_id = htmlspecialchars(stripslashes($_POST['comp_id']));
        $company = ucwords(htmlspecialchars(stripslashes($_POST['company'])));
        $fullname = strtoupper(htmlspecialchars(stripslashes($_POST['full_name'])));
        $address = ucwords(htmlspecialchars(stripslashes($_POST['address'])));
        $phone = htmlspecialchars(stripslashes($_POST['phone']));
        $date = date("Y-m-d H:i:s");
        
        //instantiate class
        
        include "../classes/dbh.php";
        include "../classes/select.php";
        include "../classes/update.php";
        //check if company already exist
        $check_user = new selects();
        $results = $check_user->fetch_count_cond('companies', 'company', $company);
        if($results > 0){
            $_SESSION['error'] = "The Business Name you entered has been taken";
            header("Location: ../view/organization.php?user=$username&company=$comp_id");
         
        }else{
            //update compnay name
            $update = new Update_table();
            $update->update('companies', 'company', 'company_id', $company,  $comp_id);
            //update store details
            $update->update_double('stores', 'store_address', $address, 'phone_number', $phone, 'company', $comp_id);
            //update user details
            $update->update2cond('users', 'full_name', 'company', 'username', $fullname, $comp_id, $username);
            
            if($update){
                $_SESSION['user'] = $username;
                $_SESSION['reg_success'] = "Welcome to Dorthpro";
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
                        $_SESSION['reg_success'] = "Congratulations!!!. Your setup was successful.<br>You store link is: <span style='color:rgba(241, 56, 23, 0.9);text-transform:lowercase;text-decoration:underline'>www.dorthpro.com/company/index.php</span><br>Kindly view the step-by-step video tutorial to learn more on how to set up your store!";
                        $error = $_SESSION['reg_success'];
                        header("Location: ../view/users.php");
                        // header("Location: index.html");
                        return $error;
                    }
                }
                
                $to = $username;
                $from = 'admin@dorthpro.com';
                $from_name = "Dorthpro Digitals";
                $name = 'Dorthpro';
                $subj = 'Welcome to Dorthpro!';
                $msg = "<p>Hi $fullname <br>Congratulations on joining Dorthpro! We’re thrilled to have you onboard and excited to support your business journey.. </p><br>
                <h4>Here are your account details:</h4>
                <ul>
                <li><strong>Name:</strong> $fullname</li>
                <li>Email: $username</li>
                <li>Subscription Plan: Professional</li>
                </ul>
                <p>You can get started right away by accessing your dashboard here:<br><br>
                <a href='https://www.dorthpro.com/company/index.php' title='access dashboard' style='color:#fff;text-decoration:none; padding:10px;background:green;border-radius:15px; box-shadow:1px 1px 1px #222;border:1px solid #fff'>View Dashboard</a></p><br>
                <p>You can also copy this link to access your page<br>
                www.dorthpro.com/company/index.php</p>
                <p>Need help? Check out our step-by-step tutorial to make the most of your account:<br><br>
                📖<a href='https://www.dorthpro.com/tutorials.php' title='watch Tutorial' style='color:#fff;text-decoration:none;padding:10px;background:brown;border-radius:15px; box-shadow:1px 1px 1px #222;border:1px solid #fff'>View Tutorials</a></p><br>
                <p>If you have any questions or need assistance, don’t hesitate to reach out. Welcome to the Dorthpro family!</p>
                <p>Best regards,</p>
                <p>Onostar media</p>
                <p>support@dorthpro.com</p>";
                
                
                $error=smtpmailer($to, $from, $name ,$subj, $msg);
                /* update payment status */
            }else{
                $_SESSION["error"] = "Failed setup business";
            }
       
        }
        
    }