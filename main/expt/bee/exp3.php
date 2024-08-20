<!DOCTYPE html>
<html>

<head>

    <title>Star Connection </title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    @media screen and (max-width: 900px) {
        /* body{
        display: flex;
    height: auto;
    width: 50%;
    } */
    }

    .container {
        width: 60%;
        height: 100%;
        /* background-color: rgb(209, 243, 232); */
        display: flex;
        flex-direction: column;
        margin: 0 auto;

    }

    @media screen and (max-width: 900px) {
        container {
            width: 60%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    .header {
        display: flex;
        justify-content: space-between;
        background: linear-gradient(45deg, rgb(93, 93, 182), rgb(167, 144, 211));
        padding: 20px;
    }

    .header .title {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30%;
        font-weight: bold;
        font-size: 35px;
    }

    .header img {
        height: 150px;
    }

    .content {
        flex-grow: 1;
        margin: 5%;
        width: 100%;
    }

    .input-area {
        display: flex;
        width: 100%;
        align-items: center;
    }

    .proced {
        width: 50%;
    }

    .diagram {
        width: 100%;
    }

    .procedure {
        background-color: rgb(219, 228, 240);
        margin: 20px;
        border: 1px solid black;
        border-radius: 10px;

    }

    .procedure ol {
        list-style: none;
        margin: 10px;
    }

    .main-diagram {
        float: none;
        height: auto;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .main-diagram img {
        border-radius: 10px;
        border: 1px solid black;
        width: auto;
        height: auto;
    }

    @media screen and (max-width: 900px) {
        .main-diagram {
            /* width: 60%; */
            width: fit-content;
            height: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    #VL {

        position: relative;
        top: -25vh;
        left: 29vw;
        width: 60px;
        height: 20px;
        text-align: center;

    }

    #VP {
        position: relative;
        top: -25vh;
        left: 37.5vw;
        width: 60px;
        height: 20px;
        text-align: center;
    }

    #V {
        position: relative;
        top: -23vh;
        left: 8.3vw;
        width: 60px;
        height: 15px;
        text-align: center;
    }

    #A {
        position: relative;
        top: -16vh;
        left: 21.5vw;
        width: 60px;
        height: 20px;
        text-align: center;
    }

    @media screen and (max-width: 900px) {
        #VL {
            width: min-content;
            position: relative;
            top: -25vh;
            left: 29vw;
            /* width: 60px; */
            /* height: 20px; */
            height: min-content;
            text-align: center;
        }

        #VP {
            position: relative;
            top: -25vh;
            left: 37.5vw;
            width: min-content;
            /* height: 20px; */
            height: min-content;
            text-align: center;
        }

        #V {
            position: relative;
            top: -23vh;
            left: 8.3vw;
            width: min-content;
            /* height: 15px; */
            height: min-content;
            text-align: center;
        }

        #A {
            position: relative;
            top: -16vh;
            left: 21.5vw;
            width: min-content;
            height: min-content;
            text-align: center;
        }
    }

    .cal-btn {
        /* width: 100%;
    text-align: center;
    display: flex;
    justify-content: center;
    gap: 10px; */
        width: 100%;
        display: grid;
        grid-template-columns: auto auto auto auto;
        grid-column-gap: 5px;
        padding: 5px;
        text-align: center;
        grid-gap: 10px;

    }

    #addTable {
        /* padding: 10px; */
        /* border: 1px solid black; */
        /* border-radius: 8px; */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        padding: 10px;
        text-align: center;
        background-color: #002651;
    }

    #addTable:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    #simulate {
        /* padding: 10px; */
        /* border: 1px solid black; */
        /* border-radius: 8px; */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        padding: 10px;
        text-align: center;
        background-color: #002651;
    }

    #simulate:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    #Cr {
        /* padding: 10px; */
        /* border: 1px solid black; */
        /* border-radius: 8px; */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        padding: 10px;
        text-align: center;
        background-color: #002651;
    }

    #Cr:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .footer {
        text-align: center;
        font-weight: bold;
        height: 5%;
        background-color: rgb(206, 247, 233);
    }

    .table-area {
        margin: 20px;
        justify-content: center;

    }

    table {
        font-family: "Open Sans", sans-serif;
        border-collapse: collapse;
        border-spacing: 0;
        table-layout: 20px;
        width: 90%;
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        white-space: nowrap;
        text-align: center;
    }

    table * {
        border: 1px solid black;
        padding: 10px;
        border-radius: 10px;
    }

    table thead tr {
        color: #2d3748;
        font-size: 1rem;
        font-weight: 500;
        text-align: center;

    }

    table thead tr th {
        background: #edf2f7;
        padding: 0.75rem 1.5rem;
        vertical-align: middle;
    }

    table tbody tr:nth-child(odd) td {
        background: #ffffff;
    }

    table tbody tr:nth-child(even) td {
        background: #edf2f7;
    }

    @media screen and (max-width: 900px) {

        /* body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50%;
        height: auto;
    } */
        #addTable {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            padding: 10px;
            text-align: center;
            background-color: #002651;
        }

        #addTable:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #simulate {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            padding: 10px;
            text-align: center;
            background-color: #002651;
        }

        #simulate:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #Cr {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            padding: 10px;
            text-align: center;
            background-color: #002651;
        }

        #Cr:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
    }

    @media screen and (max-width: 1000px) {
        .cal-btn {
            /* display: grid; */
            grid-template-columns: auto;
        }

        .table-area {

            display: flex;
            width: fit-content;
            align-items: center;
            justify-content: center;

        }
    }
</style>

<body>
    <div class="container" style="background-color: rgb(209, 243, 232);">

        <!-- <div style="font-size:30px; text-align:center;padding-right:100px; height:60px"> <b> STAR CONNECTION </b></div> -->
        <div class="content">
            <div class="input-area">

                <div class="diagram">
                    <div class="main-diagram">
                        <img src="../images/beeExp3.png" alt="Ohms law ciruit" />

                    </div>
                    <div>

                        <input type="text" placeholder="Vline" id="VL">
                        <input type="text" placeholder="Vphase" id="VP">
                        <input type="number" placeholder="V" id="V">
                        <input type="text" placeholder="A" id="A">
                    </div>
                    <div class="cal-btn">
                        <button type="button" onclick="calculate();" id="simulate"> <b>SIMULATE</b> </button>&nbsp;
                        <button type="button" onclick="addHTMLTableRow();" id="addTable"> <b>ADD TO TABLE</b> </button>&nbsp;

                        <button type="button" onclick="clearRow();" id="Cr"> <b>CLEAR</b> </button> </button>




                    </div>
                </div>
            </div>
            <div>
                <p>
                <h3 style="color: black;"><u>OBSERVATION TABLE:</u></h3>
                </p>
            </div>
            <form method="post">
                <div class="table-area">
                    <div>
                        <table id="table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th> Supply Voltage<br>(volt)</th>
                                    <th>I<br>(amp)</th>
                                    <th>Vline<br>(volt)</th>
                                    <th>Vphase<br>(volt)</th>
                                    <th id="Vlp">Vline/Vphase<br> (volt)</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
                <?php if ($_SESSION['logged_in'] == 'true') { ?>
                    <h5><input type="submit" name="Submit" value="Submit Observation"></h5>
                <?php } ?>
            </form>
        </div>

    </div>


    <script>
        //---------------Current----------------//
        function calculate() {

            var Vvalue = parseFloat(document.getElementById("V").value);


            var Vline = Vvalue;

            var Vphase = Vline / 1.732;

            var cal = Vline / Vphase;

            // take Zphase = 8+10j = 12.81 angle 53.34 ohm
            // so take only scalar value as 12.81

            var current = Vphase / 12.81;

            document.getElementById("VL").value = parseFloat(Vline);
            document.getElementById("VP").value = parseFloat(Vphase).toFixed(3);
            document.getElementById("Vlp").value = parseFloat(cal).toFixed(3);
            document.getElementById("A").value = parseFloat(current).toFixed(2);





        }



        //-----------------Add Table--------------------//


        function addHTMLTableRow() {
            var table = document.getElementById("table"),
                newRow = table.insertRow(table.length),
                cell1 = newRow.insertCell(0),
                cell2 = newRow.insertCell(1),
                cell3 = newRow.insertCell(2),
                cell4 = newRow.insertCell(3),
                cell5 = newRow.insertCell(4),

                V = document.getElementById("V").value,
                A = document.getElementById("A").value,
                VL = document.getElementById("VL").value,
                VP = document.getElementById("VP").value,
                Vlp = document.getElementById("Vlp").value;

            cell1.innerHTML = "<input type='text' name='V[]' value='" + V + "' readonly='readonly' style='width:80%;'>";
            cell2.innerHTML = "<input type='text' name='A[]' value='" + A + "' readonly='readonly' style='width:80%;'>"
            cell3.innerHTML = "<input type='text' name='VL[]' value='" + VL + "' readonly='readonly' style='width:80%;'>"
            cell4.innerHTML = "<input type='text' name='VP[]' value='" + VP + "' readonly='readonly' style='width:80%;'>"
            cell5.innerHTML = "<input type='text' name='Vlp[]' value='" + Vlp + "' readonly='readonly' style='width:80%;'>"

        }

        //-------------------------Clear-------------------------//  

        function clearRow() {
            location.reload()
            // var tableHeaderRowCount = 1;
            // var table = document.getElementById("table");
            // var rowCount = table.rows.length;
            // for (var i = tableHeaderRowCount; i < rowCount; i++) {
            // table.deleteRow(tableHeaderRowCount);
            // volt.pop();
            // current.pop();
            // }

        }
    </script>
</body>

</html>

<?php
if (isset($_POST["Submit"])) {
    $rowCount = count($_POST['V']);
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

        $sql2 = "select * from observationTable where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $result2 = mysqli_query($db, $sql2);

        $count = mysqli_num_rows($result2);
        if ($count == 0) {
            $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES ('$SubID', '$ExpID', '$userID', '1','1', '5', 'Supply Voltage (V)', 'Current (A)',  'Vline', 'Vphase','Vline/Vphase');";
            mysqli_query($db, $sql3);
            for ($a = 0; $a < 5; $a++) {
                $b = $a + 2;
                $V = $_POST['V'][$a];
                $A = $_POST['A'][$a];
                $VL = $_POST['VL'][$a];
                $VP = $_POST['VP'][$a];
                $Vlp = $_POST['Vlp'][$a];
                $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`) VALUES ('$SubID', '$ExpID', '$userID', '$b','1', '5', '$V', '$A', '$VL', '$VP', '$Vlp');";
                mysqli_query($db, $sql4);
            }
            echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
        } else {
            for ($a = 0; $a < 5; $a++) {
                $b = $a + 2;
                $V = $_POST['V'][$a];
                $A = $_POST['A'][$a];
                $VL = $_POST['VL'][$a];
                $VP = $_POST['VP'][$a];
                $Vlp = $_POST['Vlp'][$a];
                $sql5 = "UPDATE `observationtable` SET `col1`='$V',`col2`='$A',`col3`='$VL',`col4`='$VP',`col5`='$Vlp' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=$b && `userID`=$userID;";
                mysqli_query($db, $sql5);
            }
            echo "<script>alert('Simulation Completed');</script>";
            echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
        }
    }
}
?>