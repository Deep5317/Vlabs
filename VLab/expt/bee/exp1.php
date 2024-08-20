<head>
    <link rel="stylesheet" type="text/css" href="../css/Ohmslaw.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="../js/calculation.js"></script>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="content">
                <div class="input-area">

                    <div class="diagram">
                        <div class="main-diagram">
                            <img src="https://haygot.s3.amazonaws.com/questions/630039_603836_ans.JPG" alt="Ohms law ciruit" />

                        </div>
                        <div>
                            <input type="number" placeholder="R1" id="R1">
                            <input type="number" placeholder="R2" id="R2">
                            <input type="number" placeholder="R3" id="R3">
                            <input type="number" placeholder="V" id="V">
                            <input type="text" placeholder="A" id="A">
                        </div>
                        <div class="cal-btn">
                            <button type='button' onclick="calculate();" id="Current"> Current </button>&nbsp;
                            <button type='button' onclick="addItem();" id="addTable"> Add to Table </button>&nbsp;
                            <button type='button' onclick="Display();" id="Cr"> plot </button>
                            <button type='button' onclick="clearRow();" id="Cr"> Clear </button> </button>
                        </div>
                    </div>
                </div>
                <div>
                    <p>
                    <h3><u>OBSERVATION TABLE:</u></h3>
                    </p>
                </div>

                <div class="table-area">
                    <div>
                        <table id="table">
                            <thead>
                                <tr>
                                    <th>R1<br>(&#937;)</th>
                                    <th>R2<br>(&#937;)</th>
                                    <th>R3<br>(&#937;)</th>
                                    <th>Voltage(Volt)<br>&nbsp; &nbsp; &nbsp; V</th>
                                    <th>Current(A)<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; A</th>
                                </tr>
                            </thead>
                            <tbody id="tbody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="chart">
                <canvas id="myChart" style="width:100%; background-color: rgb(209, 243, 232);"></canvas>
            </div><br>
            <h5><input type="submit" name="Submit" value="Submit Observation"></h5>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST["Submit"])) {
    $rowCount = count($_POST['R1']);
    if ($rowCount < 5) {
        echo "<script>alert('Take 5 Readings');</script>";
        echo "<script>window.location='simulation.php?subID=" . $SubID . "&expID=" . $ExpID . "';</script>";
    } else {
        $userName = $_SESSION['email'];
        $sql1 = "Select * from user where Email='$userName'; ";
        $result1 = mysqli_query($db, $sql1);
        $userID;
        while ($rows = mysqli_fetch_assoc($result1)) {
            $userID = $rows['userID'];
        }

        $sql2 = "select * from observationtable where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $result2 = mysqli_query($db, $sql2);

        $count = mysqli_num_rows($result2);
        if ($count == 0) {
            $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES ('$SubID', '$ExpID', '$userID', '1','1', '5', 'R1(Ω)', 'R2(Ω)', 'R3(Ω)', 'Voltage(V)', 'Current(A)');";
            mysqli_query($db, $sql3);
            for ($a = 0; $a < 5; $a++) {
                $b = $a + 2;
                $R1 = $_POST['R1'][$a];
                $R2 = $_POST['R2'][$a];
                $R3 = $_POST['R3'][$a];
                $V = $_POST['V'][$a];
                $I = $_POST['I'][$a];
                $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES ('$SubID', '$ExpID', '$userID', '$b','1', '5', '$R1', '$R2', '$R3', '$V', '$I');";
                mysqli_query($db, $sql4);
            }
            echo "<script>alert('Simulation Completed')</script>";
            echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
        } else {
            for ($a = 0; $a < 5; $a++) {
                $b = $a + 2;
                $R1 = $_POST['R1'][$a];
                $R2 = $_POST['R2'][$a];
                $R3 = $_POST['R3'][$a];
                $V = $_POST['V'][$a];
                $I = $_POST['I'][$a];
                $sql5 = "UPDATE `observationtable` SET `col1`='$R1',`col2`='$R2',`col3`='$R3',`col4`='$V',`col5`='$I' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=$b && `userID`=$userID;";
                mysqli_query($db, $sql5);
            }
            echo "<script>alert('Simulation Completed');</script>";
            echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
        }
    }
}
?>