<?php
session_start();
include('./config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['chgpass'])) {
    $email = mysqli_real_escape_string($db, $_POST['username']);
    $sql = "select * from user where Email = '$email'";
    $res = mysqli_query($db, $sql);

    $count = mysqli_num_rows($res);
    if ($count == 0) {
        echo "<script>alert('The user does not exists')</script>";
    } else {

        $fname = "";
        $lname = "";
        $opt_send = rand(10000, 99999);
        $_SESSION['otp_send'] = $opt_send;

        // $_SESSION['cnfpass'] = $cnfpass;


        while ($row = mysqli_fetch_assoc($res)) {
            $fname = $row['Fname'];
            $lname = $row['Lname'];
        }


        require 'phpmailer/vendor/autoload.php';
        //Create an instance; passing `true` enables exceptions

        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'vlabs@sakec.ac.in';                     //SMTP username //EmailID
            $mail->Password   = 'Sakec@123';                              //SMTP password //Email passsword
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('vlabs@sakec.ac.in', 'VLab');
            $mail->addAddress($email, $fname . " " . $lname);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "VLabs Reset Password";
            $mail->Body    = "Hello, Your OTP for the request of reset password is " . $opt_send . ".";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();

            echo "<script>alert('OTP Sent. Please check your email id.')</script>";
            echo "<script>window.location='reset1.php?email=" . $email . "'</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

?>










<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>VLab</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<div class="area">
    <ul class="circles">
        <li><img src="./images/home-screen-img/Group 118.svg" width="50vw"></li>
        <li><img src="./images/home-screen-img/Group 120.svg" width="100vw"></li>
        <li><img src="./images/home-screen-img/Group 126.svg" width="40vw"></li>
        <li><img src="./images/home-screen-img/Group 131.svg" width="50vw"></li>
        <li><img src="./images/home-screen-img/Group 134.svg" width="60vw"></li>
        <li><img src="./images/home-screen-img/Group 129.svg" width="150vw"></li>
        <li><img src="./images/home-screen-img/Group 128.svg" width="80vw"></li>
        <li><img src="./images/home-screen-img/Group 133.svg" width="70vw"></li>
        <li><img src="./images/home-screen-img/Group 127.svg" width="80vw"></li>
        <li><img src="./images/home-screen-img/Group 125.svg" width="30vw"></li>
        <li><img src="./images/home-screen-img/Group 121.svg" width="50vw"></li>
        <li><img src="./images/home-screen-img/Group 123.svg" width="90vw"></li>
        <li><img src="./images/home-screen-img/Group 124.svg" width="30vw"></li>
        <li><img src="./images/home-screen-img/Group 130.svg" width="40vw"></li>
        <li><img src="./images/home-screen-img/Group 122.svg" width="100vw"></li>
    </ul>
</div>

<body>
    <header>
        <div class="banner">
            <div class="banner-column">
                <div class="logo">

                </div>
                <div class="col-name">

                </div>
            </div>
            <div class="vlab-logo">

            </div>
        </div>
    </header>
    <div class="outer-block">
        <div class="inner-block">
            <div class="stud-details">
                <form name="reset" method="POST">
                    <h1>Password Reset</h1>
                    <div class="input-container">
                        <input class="form-control" type="text" id="username" name="username" placeholder="Enter Username" required>
                        <!-- <input class="form-control" type="password" id="password" name="password" placeholder="Enter New Password" required>
                        <input class="form-control" type="password" id="cnfpassword" name="cnfpassword" 
                        placeholder="Confirm New Password" required> -->
                        <input type="submit" id="chgpass" value="Change Password" class="btn btn-primary" name="chgpass">
                    </div>

                    <h4>An OTP will be sent to the registered email id. Please check your email id and enter the otp below.</h4>




                </form>
            </div>


        </div>
    </div>



</body>

</html>