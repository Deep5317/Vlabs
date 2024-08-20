<?php
session_start();
include('./config.php');
if (isset($_POST['login'])) {


    // filter input from user : http://php.net/manual/en/function.filter-input.php
    $email = mysqli_real_escape_string($db, $_POST['username']);
    $password = sha1(mysqli_real_escape_string($db, $_POST['password']));
    // echo "<script>window.alert('$password')</script>";
error_reporting(E_ERROR | E_PARSE);
    // please note that plain text stored password is not a good practice and please use prepared statement
    // for further reading : http://php.net/manual/en/pdo.prepared-statements.php
    // for further reading : http://php.net/manual/en/function.password-hash.php
    // for further reading : http://php.net/manual/en/function.password-verify.php
    $sql = "SELECT * from user where Email = '$email' AND Password = '$password' AND teacher = 0;";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['Email'] == $email && $row['Password'] == $password) {
        $_SESSION['logged_in'] = 'true';
        $_SESSION['email'] = $email;
        $_SESSION['teacher'] = $row['teacher'];
        echo '<script type = "text/javascript"> alert("Login successful");</script>';
        header("Location: index.php");
        die();
    } else {
        echo "<script>window.alert('Email or Password incorrect')</script>";
    }
}

?>

<?php
if (isset($_POST['teacherLogin'])) {

    $email = $_POST['regNum'];
    $password = sha1($_POST['password']);

    $sql = "select * from user where `email`='$email' and `password` = '$password' AND teacher = 1;";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);

    if ($row['Email'] == $email && $row['Password'] == $password) {
        $_SESSION['logged_in'] = 'true';
        $_SESSION['email'] = $email;
        $_SESSION['teacher'] = $row['teacher'];
        $_SESSION['teacherID'] = $row['userID'];
        $_SESSION['teacherName'] = $row['Fname'] . " " . $row['Lname'];
        $_SESSION['subID'] = $row['subID'];
        echo '<script type = "text/javascript"> alert("Login successful");</script>';
        header("Location: index.php");
        die();
    } else {
        // echo "<script>window.alert('" . $password . "')</script>";

?>
        <script>
            alert("Invalid username and password");
            window.location.href = "login.php"
        </script>
<?php
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Engineering Virtual Lab | Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
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
                <div class="logo" onclick="backToHome()">

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
                <form method="POST">
                    <h1>Student Login</h1>
                    <div class="input-container">
                        <input class="form-control" type="text" id="username" name="username" placeholder="Enter Email">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password">
                    </div>
                    <div class="add-on">
                        <a href="resetpass.php">
                            <h6>Reset/Forgot Password?</h6>
                        </a>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary" name="login">
                    <div style="margin-top: 5%;">
                        <a href="./registration.php">
                            <h6>New here? Create a New Account</h6>
                        </a>
                    </div>
                </form>
            </div>
            <section class="part-line"></section>
            <div class="teacher-details">
                <form method="POST">
                    <h1>Teacher Login</h1>
                    <div class="input-container">
                        <input class="form-control" type="text" id="regNum" name="regNum" placeholder="Enter Email">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password">
                    </div>
                    <div class="add-on">
                        <a href="resetpass.php">
                            <h6>Reset/Forgot Password?</h6>
                        </a>
                    </div>
                    <input type="submit" value="Login" class="btn btn-primary" name="teacherLogin">
                </form>
            </div>

        </div>
    </div>

</body>
<script src="./js/login.js"></script>




</html>