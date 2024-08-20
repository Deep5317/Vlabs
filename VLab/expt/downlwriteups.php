<?php
session_start();
?>
<html>
<?php
include('config.php');
$ExpID = $_GET['expID'];
$SubID = $_GET['subID'];
$userEmail = $_SESSION['email'];
$sql1 = "Select * from user where Email='$userEmail'; ";
$result1 = mysqli_query($db, $sql1);
$userID;
$userName;
$class;
$rollno;
while ($rows = mysqli_fetch_assoc($result1)) {
    $userID = $rows['userID'];
    $userName = $rows['Fname'] . " " . $rows['Lname'];
    $class = $rows['class'] . "" . $rows['division'];
    $rollno = $rows['rollno'];
}
?>

<head>
    <title>
        Download Writeups
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @media print {
            #printPageButton {
                display: none;
            }
        }
    </style>
</head>


<body>
    <div id=pdf>
        <div class="mt-3"></div>
        <h4 align="right"><?php echo $userName . "/" . $class . "/" . $rollno; ?></h4>
        <h2 align="center">
            Mahavir Education Trust's<br></h2>
        <h2 align="center">
            <img src="../images/sakeclogo.png" height="120" width="120">
            SHAH & ANCHOR KUTCHHI ENGINEERING COLLEGE <br>
            Chembur, Mumbai - 400 088
        </h2>


        <section class="container">
            <!-- For Aim -->
            <?php
            $sql = "Select * from aimtable where subID = '$SubID' and expID = '$ExpID';";
            $result = mysqli_query($db, $sql);
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
                <h3>Aim: <?php echo $rows['aim']; ?></h3>
            <?php
            }
            ?>


            <!-- For Theory -->
            <h3 class="mt-3">Theory:</h3>
            <?php
            $sql = "Select * from theorytable where subID = '$SubID' and expID = '$ExpID';";
            $result = mysqli_query($db, $sql);
            while ($rows = mysqli_fetch_assoc($result)) {
                if ($rows['textType'] == 1) {
                    echo "● " . $rows['theory'];
                    echo '</br>';
                } else {
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($rows['image']) . '" />';
                    echo '</br>';
                }
            }
            ?>

            <!-- For Procedure -->
            <h3 class="mt-4">Procedure</h3>
            <?php
            $sql = "Select * from proceduretable where subID = '$SubID' and expID = '$ExpID';";
            // $sql = "Select * from rsrch_iprr where year=$current_year order by date and year DESC ";
            $result = mysqli_query($db, $sql);
            while ($rows = mysqli_fetch_assoc($result)) {
                echo "● " . $rows['procedure'] . "</br>";
            }
            ?>

            <!-- For Observation -->
            <h3 class="mt-4">Observation</h3>
            <?php
            $sql = "Select * from observationtable where subID = '$SubID' and expID = '$ExpID' and userID='$userID';";
            $result = mysqli_query($db, $sql);
            $sql1 = "Select * from observationtable where subID = '$SubID' and expID = '$ExpID' and userID='$userID' and typeTable = 1;";
            $result1 = mysqli_query($db, $sql1);
            $count = mysqli_num_rows($result1);
            $th = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
                if ($rows['typeTable'] == 1) {
                    $th += 1;
                    if ($th == 1) {
                        echo '<table class = "table table-bordered table-hover"><thead>';
                        echo '<tr>';
                        for ($i = 0; $i < $rows['columnCount']; $i++) {
                            $n = $i + 1;
                            $col = 'col';
                            $col .= $n;
                            echo "<th>" . $rows[$col] . "</th>";
                        }
                        echo '</tr></thead>';
                        echo '<tbody>';
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $rows['columnCount']; $i++) {
                            $n = $i + 1;
                            $col = 'col';
                            $col .= $n;
                            echo "<td>" . $rows[$col] . "</td>";
                        }
                        echo '</tr>';
                    }
                    if ($th == $count) {
                        echo '</tbody></table>';
                    }
                } else {
                    echo "<h5>" . $rows['statement'] . "</h5>";
                }
            }
            ?>
            <input class="m-5 btn btn-primary" id="printPageButton" type="button" name="print" value="Print" onclick="window.print();" />

        </section>
    </div>

</body>


</html>