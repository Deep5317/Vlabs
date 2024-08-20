<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Engineering Virtual Lab | Registeration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/registration.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/vlabLogo-main1.png" />
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

        <div class="mid-block">
            <h1>Create a New Account</h1>
            <form method="POST">
                <div class="inner-block">
                    <div class="stud-details">
                        <div class="input-container">
                            <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                            <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter Last Name" required>
                            <select class="form-control" name="coll-name" id="coll-name" onchange="showField()">
                                <option value="dum">Select College</option>
                                <option value="sakec">Shah & Anchor Kutchhi Engineering College</option>
                                <option value="others">Other College</option>
                            </select>
                            <select class="form-control" name="coll-branch" id="coll-branch" onchange="showField()">
                                <option value="NULL">Select Branch</option>
                                <option value="IT">Information Technology</option>
                                <option value="CE">Computer Engineering</option>
                                <option value="EXTC">Electronics and Telecommunication</option>
                                <option value="other">Other</option>
                            </select>
                            <input class="form-control" type="email" id="email-d" name="emailid" placeholder="Enter Email-ID" required>
                        </div>
                        <div class="on-select">
                                <select class="form-control" name="coll-class" id="coll-class">
                                    <option value="NULL">Select Class</option>
                                    <option value="FE">FE</option>
                                    <option value="SE">SE</option>
                                    <option value="TE">TE</option>
                                    <option value="BE">BE</option>
                                </select>
                                <select class="form-control" name="coll-div" id="coll-div">
                                    <option value="NULL">Select Division</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                                <select class="form-control" name="coll-batch" id="coll-batch">
                                    <option value="NULL">Select Batch</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                                <input class="form-control" type="text" id="roll-no" name="roll-no" placeholder="Enter Roll Number">

                            </div>
                            <h4>Provide a valid email where the Login Credentials will be mailed.</h4>
                    </div>
                   
                </div>
                <input type="submit" value="Sign Up" name="signup" class="btn btn-primary submit-btn">
            </form>
            <div style="margin-top: 3%;">
                <a href="./login.php">
                    <h6>Already have an Account? Login here</h6>
                </a>
            </div>

        </div>
    </div>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    if (isset($_POST['signup'])) {
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $college = mysqli_real_escape_string($db, $_POST['coll-name']);
        $class = mysqli_real_escape_string($db, $_POST['coll-class']);
        $branch = mysqli_real_escape_string($db, $_POST['coll-branch']);
        $div = mysqli_real_escape_string($db, $_POST['coll-div']);
        $rollno = mysqli_real_escape_string($db, $_POST['roll-no']);
        $batch = mysqli_real_escape_string($db, $_POST['coll-batch']);
        $email = mysqli_real_escape_string($db, $_POST['emailid']);


        $sql2 = "select Email from user where Email = '$email'";
        $res2 = mysqli_query($db, $sql2);
        $count = mysqli_num_rows($res2);
        if ($count == 0) {
            $n = 10;
            function getPassword($n)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';

                for ($i = 0; $i < $n; $i++) {
                    $index = rand(0, strlen($characters) - 1);
                    $randomString .= $characters[$index];
                }

                return $randomString;
            }
            $password = getPassword($n);
            $hpass = sha1($password);

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
                $mail->Password   = 'Sakec@123';                               //SMTP password //Email passsword
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('vlabs@sakec.ac.in', 'VLab');
                $mail->addAddress($email, $fname . " " . $lname);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "VLab Login Credentials";
                $mail->Body    = "Hello, Your Email Id :" . $email . " and Password is " . $password . ".";
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                
                $sql1 = "INSERT INTO `user` (`userID`,`teacher`,`subID`, `Fname`, `Lname`, `college`, `branch`, `class`, `division`, `rollno`, `batch`, `Email`, `Password`) VALUES (NULL,0,0, '$fname', '$lname', '$college', '$branch', '$class','$div','$rollno', '$batch', '$email', '$hpass')";
                mysqli_query($db, $sql1);

                echo "<script>window.alert('Sign Up Succesfull!!')</script>";
                echo "<script>window.location='login.php'</script>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }



            // $cpassword = sha1(mysqli_real_escape_string($db, $_POST['re-password']));

            // if ($password == $cpassword) {
            //     $sql = "SELECT * from user where Email = '$email';";
            //     $result = mysqli_query($db, $sql);
            //     $count = mysqli_num_rows($result);
            //     if ($count == 0) {
        } else {
            echo "<script>window.alert('Email already exist..')</script>";
        }
    }

    ?>

</body>
<script src="./js/signUpIn.js"></script>


</html>