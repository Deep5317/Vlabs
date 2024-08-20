<?php
require_once "config.php";
session_start();
$ExpID = $_GET['expID'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="./images/vlabLogo-main1.png" />

</head>
<!-- <div class="area">
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
</div> -->

<body class="fade-in-image">
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
        <div class="nav">
            <a class="nav-content" href="./index.php">Home</a>
            <a class="nav-content" href="./index.php#objective">Objectives</a>
            <a class="nav-content" href="./index.php#vlab">VLabs</a>
            <a class="nav-content" href="./index.php#about">About</a>
            <a class="nav-content" href="./team.php">Team</a>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 0) {
            ?>
                <a class="nav-content" href="./logout.php">Logout</a>
                <!-- <a class="nav-content"><?php echo "Hello, " . $_SESSION['email']
                                            ?></a> -->
            <?php
            } else if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 1) { ?>
                <a class="nav-content" href="./feedback.php">View Feedback</a>
                <a class="nav-content" href="./writeups.php">View Writeups</a>
                <a class="nav-content" href="./logout.php">Logout</a>
                <!-- <a class="nav-content"><?php echo "Hello, " . $_SESSION['email']
                                            ?></a> -->
            <?php } else {
            ?>
                <a class="nav-content" href="./login.php">Log In/Sign Up</a>
            <?php
            }
            ?>
        </div>
    </header>
    <div class="dum-body">
        <div class="table-responsive" style="background: white;">
            <?php include('response1.php') ?>
        </div>
    </div>
    <section>
        <footer id="footer" class="section bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="">
                            <h6 class="footer-heading text-uppercase">Virtual Labs</h6>
                            <ul class="list-unstyled footer-link mt-4">
                                <li>Shah & Anchor Kutchhi Engineering College</li>
                                <li>Mahavir Education Trust Chowk, W. T. Patil Marg, Near Dukes Company, Chembur, Mumbai- 400 088.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div>
                            <h6 class="footer-heading text-uppercase text-white">Important Links</h6>
                            <ul class="list-unstyled footer-link mt-4">
                                <li>
                                    <a href="./index.php">Home</a>
                                </li>
                                <li>
                                    <a href="./index.php#objective">Objectives</a>
                                </li>
                                <li>
                                    <a href="./index.php#vlab">Vlabs</a>
                                </li>
                                <li>
                                    <a href="./index.php#about">About</a>
                                </li>
                                <li>
                                    <a href="./login.php">Login In/Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div>
                            <h6 class="footer-heading text-uppercase text-white">VLabs</h6>
                            <ul class="list-unstyled footer-link mt-4">
                                <li><a href="./list.php?subID=1">EP-I</a></li>
                                <li><a href="./list.php?subID=2">EC-I</a></li>
                                <li><a href="./list.php?subID=3">EM</a></li>
                                <li><a href="./list.php?subID=4">BEE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div>
                            <h6 class="footer-heading text-uppercase">Contact Us</h6>
                            <form action="" method="POST">
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Your Name">
                                </div>
                                <div class="mb-3 form-group">
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Your Email">
                                </div>
                                <div class="mb-3 form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="mb-3 form-group">
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Query"></textarea>
                                </div>
                                <button type="submit" name="contactUs" class="mb-2 btnp">Send Message</button>
                            </form>
                            <?php

                            use PHPMailer\PHPMailer\PHPMailer;
                            use PHPMailer\PHPMailer\SMTP;
                            use PHPMailer\PHPMailer\Exception;

                            if (isset($_POST["contactUs"])) {
                                // session_start();
                                // username and password sent from form 
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $subject = $_POST['subject'];
                                $message = $_POST['message'];

                                $sqlm = "INSERT INTO `query`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
                                mysqli_query($db, $sqlm);

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
                                    $mail->setFrom('vlabs@sakec.ac.in', 'VLabs-Queries');
                                    $mail->addAddress($email, $name);     //Add a recipient
                                    //Content
                                    $mail->isHTML(true);                                  //Set email format to HTML
                                    $mail->Subject = $subject;
                                    $mail->Body    = $message;
                                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                    if ($mail->send()) {
                                        echo "<script>alert('Your message has been send. Thank you!');window.location='index.php';</script>";
                                    } else {
                                        echo '<script>alert(\'Your message has not send. Thank you!\');</script>';
                                    }
                                } catch (Exception $e) {
                                    echo '<script>document.getElementById("error-message").innerHTML=\'Your message has been not sent. Thank you!\';</script>';
                                }
                            }
                            ?>
                            <br>
                            <p class="list-unstyled mt-4">Contact us if need help withanything</p>
                            <p class="list-unstyled">022-25580854</p>
                            <div class="mt-5">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/shahanchor/"><i class="fab facebook footer-social-icon fa-facebook-f"></i></i></a></li>
                                    <li class="list-inline-item"><a href="http://www.twitter.com/sakectweets"><i class="fab twitter footer-social-icon fa-twitter"></i></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCOjw5lBtEGWWDwiW1_x_yxw"><i class="fab youtube footer-social-icon fa-youtube"></i></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/sakec_chembur/"><i class="fab instagram footer-social-icon fa-instagram"></i></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/school/13290638/"><i class="fab Linkedin footer-social-icon fa-linkedin"></i></i></a></li>
                                </ul>
                                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 1) {
                                    $sqlvisit = "Select * from counter;";
                                    $resultv = mysqli_query($db, $sqlvisit);
                                    while ($rows = mysqli_fetch_assoc($resultv)) {
                                        $visits = $rows['visits'];
                                    }

                                    echo "<p>Visitors Count:$visits </p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <p class="footer-alt mb-0 f-14">© Shah & Anchor Kutchhi Engineering College.</p>
            </div>
        </footer>
    </section>
</body>
<script>
    var navContent = document.getElementsByClassName("nav-content")
    if (navContent.length > 6) {
        if (navContent.length > 8) {
            for (var i = 0; i < navContent.length; i++) {
                navContent[i].style.fontSize = "1.1vw"
                navContent[i].style.margin = "1% 1% 1% 1%"
            }
        } else {
            for (var i = 0; i < navContent.length; i++) {
                navContent[i].style.fontSize = "1.2vw"
                navContent[i].style.margin = "2% 2% 2% 2%"
            }
        }
        document.getElementsByClassName("nav")[0].style.width = "100%"
    }
</script>

</html>