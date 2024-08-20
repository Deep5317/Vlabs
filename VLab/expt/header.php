<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>
        <?php
        include('config.php');
        error_reporting(E_ERROR | E_PARSE);
        $ExpID = $_GET['expID'];
        $SubID = $_GET['subID'];
        $userName = $_SESSION['email'];
        $sql1 = "Select * from user where Email='$userName'; ";
        $result1 = mysqli_query($db, $sql1);
        $userID;
        $class;
        while ($rows = mysqli_fetch_assoc($result1)) {
            $userID = $rows['userID'];
            $class = $rows['class'];
        }
        
        $sql = "Select * from explist where subID = '$SubID' and expID = '$ExpID';";
        $result = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            $expName = $rows['expname'];
        }
        echo $expName;
        ?>
    </title>
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/aim.css">
    <link rel="stylesheet" href="../css/theory.css">
    <link rel="stylesheet" href="../css/test.css">
    <link rel="stylesheet" href="../css/procedure.css">
    <link rel="stylesheet" href="../css/simulation.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/vlabLogo-main1.png" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<!-- <div class="area">
    <ul class="circles">
        <li><img src="../images/home-screen-img/Group 118.svg" width="50vw"></li>
        <li><img src="../images/home-screen-img/Group 120.svg" width="100vw"></li>
        <li><img src="../images/home-screen-img/Group 126.svg" width="40vw"></li>
        <li><img src="../images/home-screen-img/Group 131.svg" width="50vw"></li>
        <li><img src="../images/home-screen-img/Group 134.svg" width="60vw"></li>
        <li><img src="../images/home-screen-img/Group 129.svg" width="150vw"></li>
        <li><img src="../images/home-screen-img/Group 128.svg" width="80vw"></li>
        <li><img src="../images/home-screen-img/Group 133.svg" width="70vw"></li>
        <li><img src="../images/home-screen-img/Group 127.svg" width="80vw"></li>
        <li><img src="../images/home-screen-img/Group 125.svg" width="30vw"></li>
        <li><img src="../images/home-screen-img/Group 121.svg" width="50vw"></li>
        <li><img src="../images/home-screen-img/Group 123.svg" width="90vw"></li>
        <li><img src="../images/home-screen-img/Group 124.svg" width="30vw"></li>
        <li><img src="../images/home-screen-img/Group 130.svg" width="40vw"></li>
        <li><img src="../images/home-screen-img/Group 122.svg" width="100vw"></li>
    </ul>
</div> -->

<body onscroll="onscroll()">
    <header>
        <div class="banner">

            <div class="banner-column" onclick="window.location='../list.php?subID=<?php echo $SubID ?>'" style="cursor: pointer;">
                <div class="logo">

                </div>
                <div class="col-name">

                </div>
            </div>
            <div class="vlab-logo">

            </div>
        </div>
    </header>
    <div class="outer-block" style="position:relative">
        <div style="position:absolute">
            <div id="sidebar" class="side-bar" onmouseout="toggleSidebar()" onmouseover="toggleSidebar()">
                <div id="menu" class="menu"><a href="../list.php?subID=<?php echo $SubID ?>" onmouseover="showBorder(1)" onmouseout="notShowBorder(1)"><span><i class="material-icons md-48">calendar_view_month</i><span class="icon-text">Experiment List</span></a></div>
                <div id="menu" class="menu"><a href="./theory.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>" onmouseover="showBorder(2)" onmouseout="notShowBorder(2)"><span><i class="material-icons md-48">book</i><span class="icon-text">Theory</span></a></div>
                <div id="menu" class="menu"><a href="./pre-test.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>" onmouseover="showBorder(3)" onmouseout="notShowBorder(3)"><span><i class="material-icons md-48">history_edu</i><span class="icon-text">Pre-Test</span></a></div>
                <div id="menu" class="menu"><a href="./procedure.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>" onmouseover="showBorder(4)" onmouseout="notShowBorder(4)"><span><i class="material-icons md-48">border_color</i><span class="icon-text">Procedure</span></a></div>
                <div id="menu" class="menu"><a href="./simulation.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>" onmouseover="showBorder(5)" onmouseout="notShowBorder(5)"><span><i class="material-icons md-48">engineering</i><span class="icon-text">Simulation</span></a></div>
                <div id="menu" class="menu"><a href="./post-test.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>" onmouseover="showBorder(6)" onmouseout="notShowBorder(6)"><span><i class="material-icons md-48">history_edu</i><span class="icon-text">Post-Test</span></a></div>
                <?php
                if ($_SESSION['logged_in'] == 'true') {
                ?>
                    <div id="menu" class="menu"><a href="./feedback.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>" onmouseover="showBorder(7)" onmouseout="notShowBorder(7)"><span><i class="material-icons md-48">quiz</i><span class="icon-text">Feedback</span></a></div>
                <?php } ?>
                <?php
                $sql1 = "select * from submission where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
                $result1 = mysqli_query($db, $sql1);
                $submissionCount = mysqli_num_rows($result1);
                if ($submissionCount > 0) {
                ?>
                    <div id="menu" class="menu"><a href=<?php echo "downlwriteups.php?subID=" . $SubID . "&expID=" . $ExpID ?> target='_blank' onmouseover="showBorder(8)" onmouseout="notShowBorder(8)"><span><i class="material-icons md-48">file_download</i><span class="icon-text">Download Labsheet</span></a></div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="container-grid ">
            <div>
                <!-- <h3><?php echo 'Experiment' ?></h3> -->
                <h2 class="exp-header">
                    <?php
                    echo $expName;
                    ?>
                </h2>
            </div>