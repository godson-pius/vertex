<?php
require_once "config.php";


function user_register($post)
{
    extract($_POST);
    $errors = [];
    $year = date('Y');

    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $errors[] = "Enter fullname!";
    }

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $errors[] = "Enter username!";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $errors[] = "Enter phone number!";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Enter email!";
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Enter address!";
    }

    if (!empty($dob)) {
        $dob = sanitize($dob);
    } else {
        $errors[] = "Enter date of birth!";
    }

    if (!empty($acc_type)) {
        $acc_type = sanitize($acc_type);
    } else {
        $errors[] = "Enter account type!";
    }

    if (!empty($password)) {
        $tmp_password = sanitize($password);
    } else {
        $errors[] = "Enter password!";
    }

    if (!empty($confirm_pwd)) {
        $confirm_pwd = sanitize($confirm_pwd);
    } else {
        $errors[] = "Confirm password!";
    }

    if (!isset($terms)) {
        $errors[] = "Confirm password!";
    }

    if ($tmp_password === $confirm_pwd) {
        $password = encrypt($tmp_password);
    } else {
        $errors[] = "Passwords do not match!";
    }


    if (!$errors) {
        // generating account number...
        $account_number = generateNumber(10);
        $account_pin = generateNumber(5);
        $cot = generateNumber(4);
        $imf = generateNumber(4);

        $sql = "INSERT INTO users (fullname, email, username, phone, address, dob, acc_type, acc_number, password, acc_pin, cot, imf, created_at, updated_at) VALUES ('$fullname', '$email', '$username', '$phone', '$address', '$dob', '$acc_type', '$account_number', '$password', '$account_pin', '$cot', '$imf', now(), now())";

        $result = validateQuery($sql);
        if ($result === true) {

            $message = "
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Welcome Mail</title>
            </head>
            <body>
                <main
                    style='width: 100%; height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 10px;'>
            
                    <section
                        style='width: 100%; background-color: #f9fafb; border-width: 4px; display: flex; flex-direction: column; height: max-content; border-radius: 1rem; border-color: white; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important'>
                        <div style='background-color: white; width: 100%; display: flex; justify-content: center; padding: 1rem;'>
                            <img src='../../assets/images/resources/ogg.png' alt='Vertexphoenix Logo' width='180'>
                        </div>
            
                        <div style='padding: 1.25rem; display: flex; flex-direction: column;'>
                            <h1 style='font-size: 1.875rem; line-height: 2.25rem; margin-bottom: 0.5rem;'>Hello, <b><i>$username</i></b></h1>
                            <small style='color: #7f1d1d;'>Welcome to Vertexphoenix.</small>
            
                            <hr style='margin-top: 0.5rem; margin-bottom: 0.5rem;'>
            
                            <p>Here are your account details:</p>
            
                            <div style='justify-content: center; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr));'>
                                <section style='margin-top: 1.25rem; padding-right: 1.25rem; width: 100%;'>
                                    <div style='width: 100%; display: flex; align-items: center; gap: 0.25rem;'>
                                        <p style='color: #4a586b;'>Account Number</p>
                                        <div
                                            style='border-radius: 9999px; width: 1.25rem; height: 1.25rem; animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; border-width: 4px; background-color: #4a586b; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;'>
                                        </div>
                                    </div>
                                    <p style='font-weight: 700; color: #4a586b;'>$account_number</p>
                                </section>
            
                                <section style='padding-left: 2rem; margin-top: 1.25rem; width: 100%;'>
                                    <div
                                        style='width: 100%; display: flex; align-items: center; gap: 0.25rem; justify-content: end;'>
                                        <div
                                            style='border-radius: 9999px; width: 1.25rem; height: 1.25rem; animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; border-width: 4px; background-color: #dd2d2d; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;'>
                                        </div>
                                        <p style='color: #4a586b;'>Account Pin</p>
                                    </div>
                                    <p style='font-weight: 700; color: #4a586b; text-align: right;'>$account_pin</p>
                                </section>
                            </div>
            
                            <div style='justify-content: center; display: grid; grid-template-columns: repeat(2, minmax(0, 1fr));'>
                                <section style='margin-top: 1.25rem; padding-right: 1.25rem; width: 100%;'>
                                    <div style='width: 100%; display: flex; align-items: center; gap: 0.25rem;'>
                                        <p style='color: #4a586b;'>Account COT</p>
                                        <div
                                            style='border-radius: 9999px; width: 1.25rem; height: 1.25rem; animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; border-width: 4px; background-color: #5047e5; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;'>
                                        </div>
                                    </div>
                                    <p style='font-weight: 700; color: #4a586b;'>$cot</p>
                                </section>
            
                                <section style='padding-left: 2rem; margin-top: 1.25rem; width: 100%;'>
                                    <div
                                        style='width: 100%; display: flex; align-items: center; gap: 0.25rem; justify-content: end;'>
                                        <div
                                            style='border-radius: 9999px; width: 1.25rem; height: 1.25rem; animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite; border-width: 4px; background-color: #209bb9; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;'>
                                        </div>
                                        <p style='color: #4a586b;'>Account IMF</p>
                                    </div>
                                    <p style='font-weight: 700; color: #4a586b; text-align: right;'>$imf</p>
                                </section>
                            </div>
            
                            <hr style='margin-top: 3.5rem;'>
                            <small
                                style='margin-top: 1rem; text-align: center; font-size: 0.875rem; line-height: 1.25rem; font-style: italic;'>Thank
                                you for choosing Vertexphoenix</small>
                            <small style='text-align: center; font-style: italic; color: #6b7280;'>&copy; Copyright, $year</small>
                        </div>
            
                    </section>
                </main>
            </body>
            </html>
                ";
            sendEmail($email, "Welcome to Vertexphoenix", $message);
            return true;
        } else {
            $errors[] = "Check form inputs";
        }
    } else {
        return $errors;
    }
} // end of user registration

// User Login
function user_login($post)
{
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($accNum)) {
        $accNum = sanitize($accNum);
    } else {
        $errors[] = "Please enter your account number!";
    }


    //Checking for password...
    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM users WHERE acc_number = '$accNum'";
        $result = executeQuery($sql);
        if ($result) {
            $encryptedpassword = $result['password'];
            $userEmail = $result['email'];
            $userName = $result['fullname'];
            $user_id = $result['id'];
            $otp = generateNumber(4);

            $message = "
                <html>
                <head>
                    <title>Login</title>
                </head>
                <body>
                    <center>
                    <div style='background: #452121; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;'>
                    <img src='https://royalunionpro.com/img/logo/Logo@2x.png' width='150' style='border-radius: 0.25rem!important' alt='Vertexphoenix'> <br>
            
                        <h2 style='color: #fff !important'>Dear $userName,</h2>
                        <h3 style='color: #fff !important'>This is your ONE-TIME-PASSWORD</h3> <hr>
            
                        <h1 style='font-size: 55px; color: #fff !important'>$otp</h1>

                        <p style='color: #fff !important'>
                            <i>Use this Passcode to complete your Login.</i> <br>
                            <i>Vertexphoenix</i>
                        </p>
                </div>
                    </center>
                </body>
                </html>
                ";
            if (decrypt($encryptedpassword, $password)) {

                $_SESSION['tmpData'] = $user_id;
                if (sendEmail($userEmail, "Login Verification", $message)) {

                    $otpSql = "INSERT INTO passcodes (otp, user_id) VALUES ($otp, $user_id)";
                    $insertOtp = validateQuery($otpSql);

                    if ($insertOtp) {
                        return true;
                    }
                }
            }
        }
        $errors[] = "Invalid Login Details!";
    }
    return $errors;
}

function verifyLogin($post)
{
    extract($post);
    $errors = [];
    $user_id = $_SESSION['tmpData'];

    if (!empty($otp)) {
        $otp = sanitize($otp);
    } else {
        $errors[] = "Please enter OTP";
    }

    if (!$errors) {
        $sql = "SELECT * FROM passcodes WHERE otp = $otp AND user_id = $user_id AND status = 'null'";
        $result = executeQuery($sql);

        if ($result) {
            $updateSql = "UPDATE passcodes SET status = 'used' WHERE otp = $otp AND user_id = $user_id";
            $updateQuery = validateQuery($updateSql);

            if ($updateQuery) {
                return true;
            }
        } else {
            return "Invaild OTP provided";
        }
    } else {
        return $errors;
    }
}

function confirmPin($post)
{
    extract($post);
    $errors = [];
    $user_id = $_SESSION['tmpData'];

    if (!empty($pin)) {
        $pin = sanitize($pin);
    } else {
        $errors[] = "Please provide account pin";
    }

    if (!$errors) {
        $sql = "SELECT * FROM users WHERE acc_pin = $pin AND id = $user_id";
        $result = executeQuery($sql);

        if ($result) {
            $_SESSION['user'] = $user_id;
            $message = "
                <html>
                <head>
                    <title>Message</title>
                </head>
                <body>
                   
                        <div style='background: #452121; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='https://royalunionpro.com/img/logo/Logo@2x.png' width='150' class='rounded' alt='dd'> <br>
                            
                            
                            <h2 style='color: #fff !important'>Hello,</h2>
                            <h3 style='color: #fff !important'>You just logged in to your account!</h3> 
                            <p><i>Didn't initiate this?</i></p> <hr>
                
                            <a style='background: blue; color: #fff !important; padding: 7px; text-decoration: none;' href='horizontrustco.com/user/logout'>Logout User</a>
                
                            <p class='text-center mt-2'><i>Vertexphoenix</i></p>
                        </div>
                
                </body>
                </html>
                ";
            sendEmail($email, "Vertexphoenix Login Notification", $message);
            return true;
        } else {
            return "Invaild pin provided";
        }
    } else {
        return $errors;
    }
}

function cardLogin($post)
{
    extract($post);
    $errors = [];

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $errors[] = "Username is empty";
    }

    if (!empty($pin)) {
        $pin = sanitize($pin);
    } else {
        $errors[] = "Pin is empty";
    }

    if (isset($_SESSION['studentId'])) {
        $student_id = $_SESSION['studentId'];
    }

    if (!$errors) {
        $sql = "SELECT * FROM students WHERE id = $student_id";
        $row = executeQuery($sql);

        if ($username === $row['username']) {
            $sql2 = "SELECT * FROM student_cards WHERE card_pin = '$pin'";
            $row2 = executeQuery($sql2);

            if ($row2) {
                $stusentIdFromDb = $row2['student_id_fk'];
                $validStatus = $row2['valid'];

                // echo "<pre>";
                // print_r($row2);
                // echo "<br>student-id: $student_id";
                // echo "<br>valid status: $validStatus";

                // die();

                if ($stusentIdFromDb == $student_id && $validStatus == 1) {
                    $_SESSION['cardSet'] = $row2['card_pin'];
                    return true;
                } else {

                    if (empty($validStatus)) {
                        $changeToInvalid = "UPDATE student_cards SET student_id_fk = '$student_id', valid = '1' WHERE card_pin = '$pin'";
                        $invalidQuery = validateQuery($changeToInvalid);

                        if ($invalidQuery) {
                            $_SESSION['cardSet'] = $row2['card_pin'];
                            return true;
                        } else {
                            $invalid = "Invalid card details";
                            return $invalid;
                        }
                    } else {
                        $invalid = "This card does not belong to you! Please check for your card";
                        return $invalid;
                    }
                }
            } else {
                $invalid = "Invalid card details";
                return $invalid;
            }
        } else {
            $invalid = "Invalid card details";
            return $invalid;
        }
    } else {
        return $errors;
    }
}

function updateStudentProfile($post)
{
    extract($post);
    $errors = [];

    $studentId = $id;

    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $errors[] = "Name cannot be empty!";
    }

    if (!empty($oldpassword)) {
        $oldpassword = sanitize($oldpassword);

        $sql = "SELECT * FROM students WHERE id = $studentId";
        $gettingDetails = executeQuery($sql);
        if (!empty($gettingDetails)) {
            $db_pwd = $gettingDetails['password'];
            $check_pwd = decrypt($db_pwd, $oldpassword);
            if ($check_pwd === true) {
                if (!empty($newpassword)) {
                    $new_pwd_tmp = sanitize($newpassword);
                    $new_pwd = encrypt($new_pwd_tmp);

                    $update_pwd = "UPDATE students SET password = '$new_pwd' WHERE id = $studentId";
                    $update_pwd_query = validateQuery($update_pwd);
                }
            } else {
                $errors[] = "Incorrect Password";
            }
        }
    }

    if (isset($_FILES['pics'])) {
        $pics = sanitize($_FILES['pics']['name']);
        $tmp_pics = $_FILES['pics']['tmp_name'];
        move_uploaded_file($tmp_pics, "../assets/images/students/$pics");
    } else {
        $errors[] = "Profile Image is empty" . "<br>";
    }

    if (!$errors) {
        $update_profile = "UPDATE students SET name = '$fullname', image = '$pics' WHERE id = $studentId";
        $profile_query = validateQuery($update_profile);

        if ($profile_query) {
            return true;
        } else {
            return false;
        }
    } else {
        return $errors;
    }
}

function make_transfer($post, $user_id)
{
    extract($post);
    $errors = [];
    $err_flag = false;

    if (!empty($recipent)) {
        $acc_number = sanitize($recipent);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($routing_number)) {
        $routing_number = sanitize($routing_number);
    } else {
        $err_flag = true;
        $errors[] = "Enter routing number!";
    }

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($desc)) {
        $desc = ALLOW_SAFE_SYMBOLS(sanitize($desc));
    } else {
        $err_flag = true;
        $errors[] = "Enter transaction description!";
    }

    if ($err_flag === false) {
        $sql1 = "SELECT * FROM users WHERE id = $user_id";
        $query1 = executeQuery($sql1);

        $rec_sql = "SELECT * FROM users WHERE acc_number = '$acc_number'";
        $rec_result = executeQuery($rec_sql);

        if ($query1) {
            $details = $query1;
            $total_balance = $details['acc_balance'];
            $email = $details['email'];
            $available_balance = $total_balance - $amount;
            $date = date("Y/m/d");
            $time = date("h:i:sa");
            $username = $details['fullname'];

            //Receiver details
            $receiver_email = $rec_result['email'];
            $receiver_fullname = $rec_result['fullname'];

            if ($amount <= $total_balance) {
                $sql2 = "INSERT INTO transactions (user_id, type, amount, to_user, description, routing_number, created_at) VALUES ($user_id, 1, $amount, '$acc_number', '$desc', '$routing_number', now())";
                $query2 = validateQuery($sql2);

                if ($query2) {
                    $message = "
                <html>
                <head>
                    <title>Title</title>
                </head>
                <body>
                        <div style='background: #452121; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='https://royalunionpro.com/img/logo/Logo@2x.png' width='150' class='rounded' alt='dd'> <br>
                
                            <h2 style='color: #fff !important'>Dear $username,</h2>
                            <h3 style='color: #fff !important'>Your transaction was successful!</h3> 
                            <i>Transaction Alert</i> <hr>
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                                <tr>
                                    <th style='padding: 7px;'>Credit/Debit</th>
                                    <td>Debit</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Account number</th>
                                    <td>$acc_number</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Date/Time</th>
                                    <td>$date - $time</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Description</th>
                                    <td>$desc</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Amount</th>
                                    <td>USD $amount</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Balance</th>
                                    <td>USD $total_balance</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Avalaible Balance</th>
                                    <td>USD $available_balance</td>
                                </tr>
                            </table>
                            <p style='color: #fff !important'><i>Vertexphoenix</i></p>
                        </div>
                
                   
                </body>
                </html>
                ";

                    $rec_message = "
                <html>
                <head>
                    <title>Title</title>
                </head>
                <body>
                        <div style='background: #452121; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='https://royalunionpro.com/img/logo/Logo@2x.png' width='150' class='rounded' alt='dd'> <br>
                
                            <h2 style='color: #fff !important'>Dear $receiver_fullname,</h2>
                            <h3 style='color: #fff !important'>You were credited!</h3>  <hr>
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                                <tr>
                                    <th style='padding: 7px;'>Credit/Debit</th>
                                    <td>Credit</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>From</th>
                                    <td>$username</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Date/Time</th>
                                    <td>$date - $time</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Description</th>
                                    <td>$desc</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Amount</th>
                                    <td>USD $amount</td>
                                </tr>
                            </table>
                            <p style='color: #fff !important'><i>Vertexphoenix</i></p>
                        </div>
                
                   
                </body>
                </html>
                ";
                    sendEmail($email, "Vertexphoenix Alert", $message);
                    sendEmail($receiver_email, "Vertexphoenix Alert", $rec_message);
                    return true;
                }
            } else {
                $message = "
                <html>
                <head>
                    <title>Title</title>
                </head>
                <body>
                   
                        <div style='background: #452121; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='https://royalunionpro.com/img/logo/Logo@2x.png' width='150' class='rounded' alt='dd'> <br>
                
                            <h2 style='color: #fff !important'>Dear $userName,</h2>
                            <h3 style='color: #fff !important'>Your transaction failed</h3> 
                            <i>Transaction Alert</i> <hr>
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                            <tr>
                            <th style='padding: 7px;'>Account number</th>
                            <td>$acc_number</td>
                            </tr>
                            <tr>
                                <th style='padding: 7px;'>Date/Time</th>
                                <td>$date - $time</td>
                            </tr>
                            <tr>
                                <th style='padding: 7px;'>Amount</th>
                                <td>USD $amount</td>
                            </tr>
                            </table>
                            <p style='color: #fff !important'><i>Vertexphoenix</i></p>
                        </div>
                
                   
                </body>
                </html>
                ";
                sendEmail($email, "Vertexphoenix Notification", $message);
                $balance_err = "Insufficient Balance";
                return $balance_err;
            }
        } else {
            $err_user = "Error from getting users";
            return $err_user;
        }
    } else {
        return $errors;
    }
}

function wire_transfer($post, $user_id)
{
    extract($post);
    $errors = [];
    $err_flag = false;

    if (!empty($recipent)) {
        $acc_number = sanitize($recipent);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($acc_name)) {
        $acc_name = sanitize($acc_name);
    } else {
        $err_flag = true;
        $errors[] = "Enter account name!";
    }

    if (!empty($bank_name)) {
        $bank_name = sanitize($bank_name);
    } else {
        $err_flag = true;
        $errors[] = "Enter bank name!";
    }

    if (!empty($type)) {
        $swift_code = sanitize($swift_code);
    } else {
        $err_flag = true;
        $errors[] = "Enter swift code!";
    }

    if (!empty($type)) {
        $type = sanitize($type);
    } else {
        $err_flag = true;
        $errors[] = "Enter account type!";
    }

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($desc)) {
        $desc = ALLOW_SAFE_SYMBOLS(sanitize($desc));
    } else {
        $err_flag = true;
        $errors[] = "Enter description!";
    }


    if ($err_flag === false) {
        $sql1 = "SELECT * FROM users WHERE id = $user_id";
        $query1 = executeQuery($sql1);

        if ($query1) {
            $details = $query1;
            $total_balance = $details['acc_balance'];

            if ($amount <= $total_balance) {
                $sql2 = "INSERT INTO transactions (user_id, type, amount, to_user, created_at) VALUES ($user_id, 1, $amount, '$acc_number', now())";
                $query2 = validateQuery($sql2);

                if ($query2) {
                    return true;
                }
            } else {
                $balance_err = "Insufficient Balance";
                return $balance_err;
            }
        } else {
            $err_user = "Error from getting users";
            return $err_user;
        }
    } else {
        return $errors;
    }
}


function credit_account($post, $user_id)
{
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Amount is empty";
    }

    if ($err_flag === false) {
        $ql = "SELECT * FROM users WHERE id = $user_id";
        $qq = executeQuery($ql);

        if ($qq) {
            $details = $qq;
            $amount_in_db = $details['acc_balance'];
            $acc_number = $details['acc_number'];

            $update_balance = $amount + $amount_in_db;

            $sql = "UPDATE USERS SET acc_balance = '$update_balance' WHERE id = $user_id";
            $result = validateQuery($sql);

            if ($result) {
                $sql2 = "INSERT INTO transactions (user_id, type, amount, to_user, approved, created_at) VALUES ($user_id, 0, $amount, $acc_number, 1, now())";
                $query2 = validateQuery($sql2);

                if ($query2) {
                    return true;
                } else {
                    $err = "Error! try again";
                }
            }
        }
    } else {
        return $errors;
    }
}

function Transactions($user_id, $status)
{
    $sql = "SELECT * FROM transactions WHERE user_id = $user_id AND approved = $status ORDER BY id DESC";
    $result = returnQuery($sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function updateProfileImage($post, $user_id)
{
    extract($post);
    $errors = [];

    if (!empty($_FILES['img'])) {
        $profileImage = sanitize($_FILES['img']['name']);
        $profileImageTmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($profileImageTmp, "../img/users/$profileImage");
    } else {
        $errors[] = "Profile Image is required";
    }

    if (!$errors) {
        $sql = "UPDATE users SET profile_pic = '$profileImage' WHERE id = $user_id";
        $query = validateQuery($sql);

        if ($query) {
            return true;
        } else {
            return "Failed to add image";
        }
    } else {
        return $errors;
    }
}

function sendTicket($post)
{
    extract($post);
    $errors = [];

    if (!empty($subject)) {
        $subject = ALLOW_SAFE_SYMBOLS(sanitize($subject));
    } else {
        $errors[] = "Please enter ticket subject";
    }


    if (!empty($query)) {
        $query = ALLOW_SAFE_SYMBOLS(sanitize($query));
    } else {
        $errors[] = "Please enter ticket query";
    }

    if (!$errors) {
        $sql = "INSERT INTO tickets (sender_acc, sender_name, subject, query) VALUES ('$acc_number', '$username', '$subject', '$query')";

        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return "Please try sending again";
        }
    } else {
        return $errors;
    }
}
