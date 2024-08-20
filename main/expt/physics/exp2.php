<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stylePhyExp2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<form method="POST">

    <!-- <div class="row">
        <div class="col-xs-12 col-lg-12 bg">

            <h3 align="center" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                <b>Charging And Discharging of Supercapacitor
                </b>
            </h3>

        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-5">
                <div class="tablehead obs spc">
                    <h4>OBSERVATION TABLE</h4>
                </div>
                <div class="table">
                    <table id="table1">
                        <tr>
                            <th class="tablehead" colspan="3">CHARGING</th>
                        </tr>
                        <tr>
                            <th>Sr no.</th>
                            <th>Time (s)</th>
                            <th>Voltage (V)</th>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr1" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime1" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol1" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr2" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime2" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol2" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr3" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime3" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol3" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr4" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime4" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol4" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr5" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime5" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol5" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr6" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime6" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol6" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr7" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime7" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol7" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="csr8" value="" disabled></td>
                            <td><input class="time" type="text" name="ctime8" value="" disabled></td>
                            <td><input class="voltage" type="text" name="cvol8" value="" disabled></td>
                        </tr>
                    </table>
                    <table id="table2">
                        <tr>
                            <th class="tablehead" colspan="3">DISCHARGING</th>
                        </tr>
                        <tr>
                            <th>Sr no.</th>
                            <th>Time (s)</th>
                            <th>Voltage (V)</th>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr1" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime1" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol1" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr2" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime2" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol2" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr3" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime3" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol3" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr4" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime4" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol4" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr5" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime5" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol5" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr6" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime6" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol6" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr7" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime7" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol7" value="" disabled></td>
                        </tr>
                        <tr>
                            <td><input class="srno" type="text" name="dsr8" value="" disabled></td>
                            <td><input class="time" type="text" name="dtime8" value="" disabled></td>
                            <td><input class="voltage" type="text" name="dvol8" value="" disabled></td>
                        </tr>
                    </table>
                </div>

                <div class="graph" style="margin-top: 10px;">
                    <div class="tablehead obs">
                        <h5>Plot of Charging and Discharging Characteristic</h5>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-xs-12 col-lg-7 bt">
                <div class="center-height">
                    <div class="simulation-container">
                        <object type="image/svg+xml" data="../images/circuitFinalPDT.svg"></object>
                        <div id="snackbar" class="instruct1"></div>
                        <!-- <button onclick="openFullscreen()">Click here</button> -->
                        <!-- <div id="snackbar" class="instruct2">Press on the Stopwatch and Power Supply buttons to begin the Readings.</div> -->
                        <?php if ($_SESSION['logged_in'] == 'true') { ?>
                            <input class="btn btn-primary btn-sbt" name="submit" type="submit" onclick="volValueUpdate()" value="Submit Observation">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../js/tablegraphPhyExp2.js"></script>
<!-- <script src="index.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<?php
if (isset($_POST["submit"])) {


    // $cvol1 = $_POST['cvol1'];
    // $cvol2 = $_POST['cvol2'];
    // $cvol3 = $_POST['cvol3'];
    // $cvol4 = $_POST['cvol4'];
    // $cvol5 = $_POST['cvol5'];
    // $cvol6 = $_POST['cvol6'];
    // $cvol7 = $_POST['cvol7'];
    // $cvol8 = $_POST['cvol8'];

    // $dvol1 = $_POST['dvol1'];
    // $dvol2 = $_POST['dvol2'];
    // $dvol3 = $_POST['dvol3'];
    // $dvol4 = $_POST['dvol4'];
    // $dvol5 = $_POST['dvol5'];
    // $dvol6 = $_POST['dvol6'];
    // $dvol7 = $_POST['dvol7'];
    // $dvol8 = $_POST['dvol8'];


    $userName = $_SESSION['email'];
    $sql1 = "Select * from user where Email='$userName'; ";
    $result1 = mysqli_query($db, $sql1);
    $userID;
    while ($rows = mysqli_fetch_assoc($result1)) {
        $userID = $rows['userID'];
    }

    $sql2 = "select * from observationTable where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
    $result2 = mysqli_query($db, $sql2);

    $count = mysqli_num_rows($result2);
    if ($count == 0) {
        $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '1','1', '6', '', 'CHARGING',  '', '','DISCHARGING','');";
        mysqli_query($db, $sql3);
        $sql30 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '2','1', '6', 'Sr no', 'Time', 'Voltage', 'Sr no', 'Time', 'Voltage');";
        $sql31 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '3','1', '6', '1', '0', '0.36', '1', '240', '1.38');";
        $sql32 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '4','1', '6', '2', '30', '0.78', '2', '270', '1.06');";
        $sql33 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '5','1', '6', '3', '60', '1.15', '3', '300', '0.81');";
        $sql34 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '6','1', '6', '4', '90', '1.41', '4', '330', '0.7');";
        $sql35 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '7','1', '6', '5', '120', '1.61', '5', '360', '0.58');";
        $sql36 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '8','1', '6', '6', '150', '1.72', '6', '', '');";
        $sql37 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '9','1', '6', '7', '180', '1.76', '7', '', '');";
        $sql38 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`) VALUES ('$SubID', '$ExpID', '$userID', '10','1', '6', '8', '210', '1.8', '8', '', '');";

        mysqli_query($db, $sql30);
        mysqli_query($db, $sql31);
        mysqli_query($db, $sql32);
        mysqli_query($db, $sql33);
        mysqli_query($db, $sql34);
        mysqli_query($db, $sql35);
        mysqli_query($db, $sql36);
        mysqli_query($db, $sql37);
        mysqli_query($db, $sql38);

        echo "<script>alert('Simulation Completed');</script>";
        echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    } else {

        // $sql41 = "UPDATE `observationtable` SET `col3`='$cvol1', `col6`='$dvol1' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='2' && `userID`=$userID;";
        // $sql42 = "UPDATE `observationtable` SET `col3`='$cvol2', `col6`='$dvol2' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='3' && `userID`=$userID;";
        // $sql43 = "UPDATE `observationtable` SET `col3`='$cvol3', `col6`='$dvol3' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='4' && `userID`=$userID;";
        // $sql44 = "UPDATE `observationtable` SET `col3`='$cvol4', `col6`='$dvol4' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='5' && `userID`=$userID;";
        // $sql45 = "UPDATE `observationtable` SET `col3`='$cvol5', `col6`='$dvol5' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='6' && `userID`=$userID;";
        // $sql46 = "UPDATE `observationtable` SET `col3`='$cvol6', `col6`='$dvol6' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='7' && `userID`=$userID;";
        // $sql47 = "UPDATE `observationtable` SET `col3`='$cvol7', `col6`='$dvol7' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='8' && `userID`=$userID;";
        // $sql48 = "UPDATE `observationtable` SET `col3`='$cvol8', `col6`='$dvol8' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`='9' && `userID`=$userID;";

        // mysqli_query($db, $sql41);
        // mysqli_query($db, $sql42);
        // mysqli_query($db, $sql43);
        // mysqli_query($db, $sql44);
        // mysqli_query($db, $sql45);
        // mysqli_query($db, $sql46);
        // mysqli_query($db, $sql47);
        // mysqli_query($db, $sql48);

        echo "<script>alert('Simulation Completed');</script>";
        echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    }
}
?>