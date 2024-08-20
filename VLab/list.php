<?php
include('config.php');
session_start();
$SubID = $_GET['subID'];
$sql = "Select * from subjecttable where subID='$SubID'; ";
$result = mysqli_query($db, $sql);
$subName;
while ($rows = mysqli_fetch_assoc($result)) {
    $subName = $rows['subName'];
}
if ($_SESSION['logged_in'] == 'true') {
?>
    <!DOCTYPE html>

    <html lang="en">

    <head>

        <meta charset="UTF-8">

        <title><?php echo $subName ?></title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/Vlab.css">
        <link rel="stylesheet" href="./css/phychem.css">
        <link rel="shortcut icon" type="image/x-icon" href="./images/vlabLogo-main1.png" />

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

    <body onload="resize()" onresize="resize()">
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
            <div id="sidebar" class="side-bar" onmouseout="toggleSidebar()" onmouseover="toggleSidebar()">
                <div id="menu" class="menu"><a href="./logout.php" onmouseover="showBorder(1)" onmouseout="notShowBorder(1)"><span><i class="material-icons md-48">account_circle</i><span class="icon-text user"><?php echo $_SESSION['email'] ?></span></a></div>
                <div id="menu" class="menu"><a href="./index.php" onmouseover="showBorder(2)" onmouseout="notShowBorder(2)"><span><i class="material-icons md-48">home</i><span class="icon-text">Home</span></a></div>
                <div id="menu" class="menu"><a href="./list.php?subID=1" onmouseover="showBorder(3)" onmouseout="notShowBorder(3)"><span><i class="material-icons md-48">biotech</i><span class="icon-text">Engineering Physics - I</span></a></div>
                <div id="menu" class="menu"><a href="./list.php?subID=2" onmouseover="showBorder(4)" onmouseout="notShowBorder(4)"><span><i class="material-icons md-48">science</i><span class="icon-text">Engineering Chemistry - I</span></a></div>
                <div id="menu" class="menu"><a href="./list.php?subID=3" onmouseover="showBorder(5)" onmouseout="notShowBorder(5)"><span><i class="material-icons md-48">precision_manufacturing</i><span class="icon-text">Engineering Mechanics</span></a></div>
                <div id="menu" class="menu"><a href="./list.php?subID=4" onmouseover="showBorder(6)" onmouseout="notShowBorder(6)"><span><i class="material-icons md-48">cable</i><span class="icon-text">Basic Electrical Engineering</span></a></div>
                <div id="menu" class="menu"><a href="./index.php#about" onmouseover="showBorder(7)" onmouseout="notShowBorder(7)"><span><i class="material-icons md-48">info</i><span class="icon-text">About</span></a></div>
            </div>
            <div class="container-grid container">
                <h1>Experiments<br><?php echo $subName ?></h1>
                <div class="grid">
                    <?php
                    $sql1 = "Select * from explist where subID = " . $SubID . ";";
                    $result1 = mysqli_query($db, $sql1);
                    while ($rows = mysqli_fetch_assoc($result1)) {
                    ?>
                        <article onclick="window.location='./expt/theory.php?subID=<?php echo $SubID ?>&expID=<?php echo $rows['expID'] ?>'">
                            <div class="img-wrapper">
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($rows['img']) . '" style="width:480px;" > '; ?>
                            </div>
                            <div>
                                <div class="text">
                                    <h3><?php echo $rows['expname'] ?></h3>
                                </div>
                            </div>
                        </article>
                    <?php } ?>

                    </article>

                </div>
            </div>
        </div>

    </body>
    <script src="./js/sidebar.js"></script>
<?php } else { ?>
    <script>
        alert('Login Required');
        window.location = './login.php';
    </script>
<?php } ?>

    </html>