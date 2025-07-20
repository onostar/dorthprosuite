<?php
    session_start();
    date_default_timezone_set("Africa/Lagos");
    require "../../PHPMailer/PHPMailerAutoload.php";
    require "../../PHPMailer/class.phpmailer.php";
    require "../../PHPMailer/class.smtp.php";
    if(isset($_POST['register'])){
        $username = strtolower(htmlspecialchars(stripslashes($_POST['email'])));
        $password = htmlspecialchars(stripslashes($_POST['password']));
        $confirm = htmlspecialchars(stripslashes($_POST['confirm_password']));
        $date = date("Y-m-d H:i:s");
        $due_date = date("Y-m-d", strtotime("+30 days", strtotime($date)));
        $ran_num ="";
        for($i = 0; $i < 6; $i++){
            $random_num = random_int(0, 9);
            $ran_num .= $random_num;
        }
        $reg = $ran_num;
        $data = array(
            'email_address' => $username,
            // 'password' => $password,
            'package' => '3',
            'logo' => 'icon.png',
            'date_created' => $date,
            'due_date' => $due_date
        );
        //instantiate class
        
        include "../classes/dbh.php";
        include "../classes/select.php";
        include "../classes/inserts.php";
        include "../classes/update.php";
        //check if username already exists
        $check_user = new selects();
        $results = $check_user->fetch_count_cond('companies', 'email_address', $username);
        if($results > 0){
            $_SESSION['error'] = "Email already exists";
            header("Location: ../../register.php");
            //check password length
        }else if($password < 6){
            $_SESSION['error'] = "Password is too short";
            header("Location: ../../register.php");
        }else if($confirm !== $password){
            $_SESSION['error'] = "Password does not match";
            header("Location: ../../register.php");
        }else{
            //hash password
            $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);
           //insert into companies
            $add_company = new add_data('companies', $data);
            $add_company->create_data();
            if($add_company){
                //get company id and insert into user and stores
                $get_id = new selects();
                $ids = $get_id->fetch_lastInserted('companies', 'company_id');
                $comp_id = $ids->company_id;
                $reg_number = $ran_num.$comp_id;
                $verify_code = $reg_number;
                //update registration number
                $update = new Update_table();
                $update->update_double('companies', 'reg_number', $reg_number, 'verification', $verify_code, 'company_id', $comp_id);
                //insert into store
                $store_data = array(
                    'company' => $comp_id,
                    'date_created' => $date,
                    'store' => 'Main Store',
                );
                $add_store = new add_data('stores', $store_data);
                $add_store->create_data();
                //get store id
                $str_id = $get_id->fetch_lastInserted('stores', 'store_id');
                $store = $str_id->store_id;
                //add user
                $user_data = array(
                    'username' => $username,
                    'user_role' => 'Admin',
                    'user_password' => $hashed_pwd,
                    'company' => $comp_id,
                    'store' => $store,
                    'reg_date' => $date,
                    
                );
                $add_user = new add_data('users', $user_data);
                $add_user->create_data();
                if($add_user){
                    $_SESSION['user'] = $username;
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
                            header("Location: ../../register.php");
                            
                            return $error; 
                        }
                        else 
                        {
                            /* success message */
                            $_SESSION['success'] = "Congratulations!!!. Your registration was successful, kindly verify your account to complete setup of your account!";
                            $error = $_SESSION['success'];
                            header("Location: ../verification.php");
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
                    /* update payment status */
                }else{
                    $_SESSION["error"] = "Failed to create user";
                }
            }else{
                $_SESSION["error"] = "Failed to create user";
            }
        }
        
    }