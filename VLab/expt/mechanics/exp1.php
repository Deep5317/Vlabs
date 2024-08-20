<form style="overflow-x:hidden" method="POST">
    <div class="flex-container">

        <div class='flex-child'>

            <h4 overflow-y: hidden;">Enter Input Details</h4>


            <div class='form-group'>
                <label>Enter Length a (cm): </label><input class='form-control' type="number" id="a" placeholder="Enter length a" oninput="checka()" value="">
                <span id='msga' style="color: red;"></span>
                <input type="text" name="alength" id="alength" value="" style="display: none;">
            </div>



            <div class='form-group'>
                <label>Select Weight W1 (kg) : </label>
                <select id="w1" class="form-control" onchange="dw(1)" oninput="dw(1)" disabled>
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="0.5">0.5</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>

                </select>
                <input type="text" name="w11" id="w11" value="" style="display: none;">
            </div>

            <br>
            <div class='form-group'>
                <div class='form-group'>
                    <label>Enter Length c (cm): </label><input type="number" class='form-control' id="b" placeholder="Enter length c" oninput="checkb()" value="">
                    <span id='msgb' style="color: red;"></span>
                    <input type="text" name="clength" id="clength" value="" style="display: none;">
                </div>

            </div>
            <div class='form-group'>
                <label>Select Weight W2 (kg) : </label>
                <select id="w2" class="form-control" onchange="dw(2)" oninput="dw(2)" disabled>
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="0.5">0.5</option>
                    <option value="1">1</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2</option>
                    <option value="2.5">2.5</option>
                    <option value="3">3</option>

                </select>
                <input type="text" name="w22" id="w22" value="" style="display: none;">
            </div>




            <br>
            <button id="submit" type="button" onclick="check()" class='btn btn-primary'>Submit</button>
            <button id='reset' type="button" disabled onclick="myreset()" class='btn btn-secondary' style="margin-left: 5px;">Reset</button>
            <br>
            <span id='msg' style="color: red;"></span>

        </div>
        <div class="flex-child" style="width: 100%;">
            <canvas id="canvas" style="margin-left:2%"></canvas>

        </div>

    </div>
    <br>

    <div id='d'>
        <h2 style="overflow-y: hidden;">Result</h2><br>
        <table class="table table-striped table-bordered">

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Reaction at A (Ra)</td>
                    <td></span><span id='ra'></span></td>
                    <input type="text" name="Ra" id="Ra" value="" style="display: none;">
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Reaction at B (Rb)</td>
                    <td></span><span id='rb'></span></td>
                    <input type="text" name="Rb" id="Rb" value="" style="display: none;">
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Summation of all vertical components of forces
                        (W1+W2)-(Ra+Rb)</td>
                    <td><span id='sf'></span></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Moment at point A (Ma)
                        (Rb*L)-(W2*c)-(W1*a)</td>
                    <td><span id="ma"></span></td>
                    <input type="text" name="Ma" id="Ma" value="" style="display: none;">
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Moment at point B (Mb)
                        (Ra*L)-(W2*d)-(W1*b)</td>
                    <td><span id="mb"></span></td>
                    <input type="text" name="Mb" id="Mb" value="" style="display: none;">
                </tr>

            </tbody>
        </table>
    </div>
    <input type="submit" value="Submit Observation" name="submitObservation" onclick="RaRb()">
</form>
<script>
    function RaRb() {
        // alert(document.getElementById('w2').value);
        document.getElementById('alength').value = document.getElementById('a').value;
        document.getElementById('w11').value = document.getElementById('w1').value;
        document.getElementById('clength').value = document.getElementById('b').value;
        document.getElementById('w22').value = document.getElementById('w2').value;
        document.getElementById('Ra').value = document.getElementById('ra').innerHTML;
        document.getElementById('Rb').value = document.getElementById('rb').innerHTML;
        document.getElementById('Ma').value = document.getElementById('ma').innerHTML;
        document.getElementById('Mb').value = document.getElementById('mb').innerHTML;
        // alert(document.getElementById('w2').value);
    }
</script>

<style>
    td {
        width: 50%;
    }

    .form-control {
        width: 300px;
    }


    .col-lg {
        margin-right: 500px;
    }

    .flex-container {
        display: flex;
        width: 700px;
    }

    .flex-child {
        flex: 1;

    }
</style>

<script src="../js/beam_script.js" onload="def()"> </script>

<?php
if (isset($_POST['submitObservation'])) {
    $alength = "Length a (cm)= " . $_POST['alength'];
    $w1 = "Weight W1 (kg)= " . $_POST['w11'];
    $clength = "Length c (cm)= " . $_POST['clength'];
    $w2 = "Weight W2 (kg)= " . $_POST['w22'];
    $Ra = "Reaction at A (Ra) = " . $_POST['Ra'];
    $Rb = "Reaction at B (Rb) =" . $_POST['Rb'];
    $vforce = "Summation of all vertical components of forces =(W1+W2)-(Ra+Rb)= 0";
    $Ma = "Moment at point A (Ma) =(Rb*L)-(W2*c)-(W1*a) = " . $_POST['Ma'];
    $Mb = "Moment at point B (Mb) =(Ra*L)-(W2*d)-(W1*b) = " . $_POST['Mb'];

    if ($_SESSION['logged_in'] == 'true') {
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
            $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '1', '0', '$alength');";
            $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '2', '0', '$w1');";
            $sql5 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '3', '0', '$clength');";
            $sql6 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '4', '0', '$w2');";
            $sql7 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '5', '0', '$Ra');";
            $sql8 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '6', '0', '$Rb');";
            $sql9 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '7', '0', '$vforce');";
            $sql10 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '8', '0', '$Ma');";
            $sql11 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '9', '0', '$Mb');";
            mysqli_query($db, $sql3);
            mysqli_query($db, $sql4);
            mysqli_query($db, $sql5);
            mysqli_query($db, $sql6);
            mysqli_query($db, $sql7);
            mysqli_query($db, $sql8);
            mysqli_query($db, $sql9);
            mysqli_query($db, $sql10);
            mysqli_query($db, $sql11);
            echo "<script>alert('Observation Submitted')</script>";
            echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
        } else {
            $sql12 = "UPDATE `observationTable` SET `statement`='$alength' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=1 && `userID`=$userID;";
            $sql13 = "UPDATE `observationTable` SET `statement`='$w1' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=2 && `userID`=$userID;";
            $sql14 = "UPDATE `observationTable` SET `statement`='$clength' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=3 && `userID`=$userID;";
            $sql15 = "UPDATE `observationTable` SET `statement`='$w2' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=4 && `userID`=$userID;";
            $sql16 = "UPDATE `observationTable` SET `statement`='$Ra' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=5 && `userID`=$userID;";
            $sql17 = "UPDATE `observationTable` SET `statement`='$Rb' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=6 && `userID`=$userID;";
            $sql18 = "UPDATE `observationTable` SET `statement`='$Ma' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=8 && `userID`=$userID;";
            $sql19 = "UPDATE `observationTable` SET `statement`='$Mb' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=9 && `userID`=$userID;";

            mysqli_query($db, $sql12);
            mysqli_query($db, $sql13);
            mysqli_query($db, $sql14);
            mysqli_query($db, $sql15);
            mysqli_query($db, $sql16);
            mysqli_query($db, $sql17);
            mysqli_query($db, $sql18);
            mysqli_query($db, $sql19);
            echo "<script>alert('Observation Submitted')</script>";
            echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
        }
    }
}
?>