<?php
session_start();
include('./config.php');
if (isset($_POST['verify'])) {
    $otp_send = $_SESSION['otp_send'];
    $otp_enter = $_POST['otp'];

    $email_reset = $_GET['email'];


    $pass = $_POST['password'];
    $cnfpass = $_POST['cnfpassword'];

    if ($pass != $cnfpass) {
        echo "<script>alert('Enter the Same password in both the fields');</script>";
        echo "<script>window.location='resetpass.php'</script>";
    }


    if ($otp_enter != $otp_send) {
        echo "<script>alert('Password Not Changed')</script>";
        echo "<script>window.location='resetpass.php'</script>";
    }
    $pass = sha1($cnfpass);
    $sql = "UPDATE `user` SET `Password`='$pass' where `Email`='$email_reset'";
    mysqli_query($db, $sql);
    // echo $sql;
    echo "<script>alert('Password Changed')</script>";
    echo "<script>window.location='login.php'</script>";
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
                    <h1>Password Reset: Enter the OTP </h1>
                    <div class="input-container">

                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter New Password" minlength='8' required>
                        <input class="form-control" type="password" id="cnfpassword" name="cnfpassword" placeholder="Confirm New Password" minlength='8' required>


                        <input class="form-control" type="number" id="otp" name="otp" placeholder="Enter OTP" maxlength="6">
                        <input type="submit" id="verify" value="Verify" class="btn btn-primary" name="verify">
                    </div>



                </form>
            </div>


        </div>
    </div>










</body>

</html>