<div style="background:wheat">
  <link rel="stylesheet" href="../css/beeExp2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/v4-shims.min.css">
  <link rel="icon" href="images/tabicon.png" type="image/x-icon">

  <form name="f1" method="POST">
    <script src="../js/beeExpt2.js"></script>
    <!-- <h1 class="title">SUPERPOSITION THEOREM</h1> -->

    <div class="col">
      <div class="dropdown">
        <p> INSTRUCTIONS</p>
        <div class="dropdown-content">
          <ol type="1">
            Set all the resistances <b>R<sub>1</sub>, R<sub>2</sub> and R<sub>3</sub></b> and
            choose any arbitrary values of <b>V</b> and <b>I</b>.<br>
            <h3> Experiment Part Select: </h3>
            <li><b>Case-1: In presence of both the sources</b><br>
              Select switch of S<sub>1</sub> and S<sub>2</sub> to power and Simulate the program.
              Observe the result from case 1 tab.<br>
            <li><b>Case-2: In presence of V only</b></li>
            Apply switch S<sub>1</sub> to power and S<sub>2</sub> to Open. Simulate the program. Read ammeter values from Case 2 tab.<br>
            <li><b>Case-3: In presence of I only</b></li>
            Apply switch S<sub>1</sub> to short and S<sub>2</sub> to power. Simulate the program. Read ammeter values from Case 3 tab.<br>
            Click on <b>'Fill data to the table'</b> to update the observation table.<br>
            <b>Repeat the above steps to take other observations.</b><br><br>
            <b>All the resistances are in ohms.</b><br>

          </ol>

        </div>
      </div>
    </div>
    <div class="container-pic">

      <div class="circuit">
        <img id="diagram" src="../images/beeExp2case1.png">


        <input class="components" type="number" name="r1" value="30" id="r1">
        <input class="components" type="number" name="r3" value="20" id="r3">
        <input class="components" type="number" name="r2" value="100" id="r2">
        <input class="components" type="number" name="v1" value="100" id="v1">
        <input class="components" type="number" name="v2" value="50" id="v2">

        <div class="switch">

          <select name="s1" id="s1" onchange="picChange(value)">
            <option disabled="disabled" selected="selected">Switch S1</option>
            <option value="1">Power</option>
            <option value="2">Short</option>
          </select>


          <select name="s2" id="s2" onchange="picChange(value)">
            <option disabled="disabled" selected="selected"> Switch S2</option>
            <option value="1">Power</option>
            <option value="3">Open</option>
          </select>
        </div>

        <div class="ammeter">
          <input class="components" type="text" name="A1" value="0" id="A1" readonly="readonly">
          <input class="components" type="text" name="A2" value="0" id="A2" readonly="readonly">
          <input class="components" type="text" name="A3" value="0" id="A3" readonly="readonly">
        </div>



      </div>
    </div>
    <div class="container">
      <ul class="tabs">
        <li>
          <input type="radio" name="tabs" id="tab1">
          <label for="tab1" onclick="divContentChange(1)">Case 1</label>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2">
          <label for="tab2" onclick="divContentChange(2)">Case 2</label>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab3">
          <label for="tab3" onclick="divContentChange(3)">Case 3</label>
        </li>
      </ul>
    </div>
    <div class="outside-info">
      <div class="info-container">
        <h4 id="headerCase">Determination of branch currents in presence of V and I :</h4><br>
        <p id="subheaderCase">Select the switch S1 and S2 to power. And then click on Simulate.<br></p>

        <div class="outside-info">
          <div style="width: 100%;">
            <input type="text" value="A1 ammeter reading" style="background-color:transparent; text-align:center; font-size:15px; color:yellow; width:160px; border:none" readonly="readonly">
            <input type="test" value="A2 ammeter reading" style="background-color:transparent; text-align:center; font-size:15px; color:yellow; width:160px; border:none" readonly="readonly">
            <input type="text" value="A3 ammeter reading" style="background-color:transparent; text-align:center; font-size:15px; color:yellow; width:160px; border:none" readonly="readonly">
            <br>
            <input type="text" value="(in Amp)" style="background-color:transparent; text-align:center; width:140px; border:none; font-size:15px; color:yellow;" readonly="readonly">
            <input type="test" value="(in Amp)" style="background-color:transparent; text-align:center; width:140px; font-size:15px; color:yellow; border:none" readonly="readonly">
            <input type="text" value="(in Amp)" style="background-color:transparent; text-align:center; width:140px; font-size:15px; color:yellow; border:none" readonly="readonly">
            <br>
            <input type="text" name="A01" value="0" id="A31" style="background-color:#E3DE84; text-align:center; width:140px" readonly="readonly">
            <input type="text" name="A02" value="0" id="A32" style="background-color:#E3DE84; text-align:center; width:140px" readonly="readonly">
            <input type="text" name="A03" value="0" id="A33" style="background-color:#E3DE84; text-align:center; width:140px" readonly="readonly">
          </div>
          <div class="button">
            <input type="button" value="Simulate" class="simulate" onclick="simulate()">
            <input id="case3Btn" type="button" value="Fill data to the table" onclick="perform4()" style="display: none; cursor: pointer; background-color:#ffe26a; text-align:center; border-radius: 10px; font-size:13px; width:25vh; height:40px">
          </div>
        </div>
      </div>

    </div>
    <div class="tablee">
      <table cellspacing='0' style="font-size:12px; border: 2px solid black;">
        <thread>
          <h3> Observation Table: </h3>
          <table cellspacing='0' style="font-size:12px; border: 2px solid black;">
            <th colspan="3">In presence of both V and I</th>
            <th colspan="3">In presence of V only</th>
            <th colspan="3">In presence of I only</th>
            </tr>

            <tr>
              <th>I<sub>1</sub><br>(in A)</th>
              <th>I<sub>2</sub><br>(in A)</th>
              <th>I<sub>3</sub><br>(in A)</th>
              <th>I<sub>1</sub><br>(in A)</th>
              <th>I<sub>2</sub><br>(in A)</th>
              <th>I<sub>3</sub><br>(in A)</th>
              <th>I<sub>1</sub><br>(in A)</th>
              <th>I<sub>2</sub><br>(in A)</th>
              <th>I<sub>3</sub><br>(in A)</th>
            </tr>
        </thread>
      </table>
      <table id="tb1" class="table">
        <tr></tr>
      </table>
    </div>
    <?php if ($_SESSION['logged_in'] == 'true') { ?>
      <h5><input type="submit" value="Submit Observation" name="Submit"></h5>
    <?php } ?>
  </form>
</div>

<?php
if (isset($_POST["Submit"])) {
  $rowCount = count($_POST['I1']);
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
      $heading = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`,`col7`,`col8`,`col9`) VALUES ('$SubID', '$ExpID', '$userID', '1','1', '9', '', 'In presence of both V and I', '', '', 'In presence of V only', '','', 'In presence of I only', '');";
      mysqli_query($db, $heading);
      $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`,`col7`,`col8`,`col9`) VALUES ('$SubID', '$ExpID', '$userID', '2','1', '9', 'I1(A)', 'I2(A)', 'I3(A)', 'I1(A)', 'I2(A)', 'I3(A)','I1(A)', 'I2(A)', 'I3(A)');";
      mysqli_query($db, $sql3);
      for ($a = 0; $a < 5; $a++) {
        $b = $a + 3;
        $I1 = $_POST['I1'][$a];
        $I2 = $_POST['I2'][$a];
        $I3 = $_POST['I3'][$a];
        $I11 = $_POST['I11'][$a];
        $I12 = $_POST['I12'][$a];
        $I13 = $_POST['I13'][$a];
        $I21 = $_POST['I21'][$a];
        $I22 = $_POST['I22'][$a];
        $I23 = $_POST['I23'][$a];
        $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `columnCount`, `col1`, `col2`, `col3`, `col4`, `col5`,`col6`,`col7`,`col8`,`col9`) VALUES ('$SubID', '$ExpID', '$userID', '$b','1', '9', '$I1', '$I2', '$I3', '$I11', '$I12','$I13','$I21','$I22','$I23');";
        mysqli_query($db, $sql4);
      }
      echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    } else {
      for ($a = 0; $a < 5; $a++) {
        $b = $a + 3;
        $I1 = $_POST['I1'][$a];
        $I2 = $_POST['I2'][$a];
        $I3 = $_POST['I3'][$a];
        $I11 = $_POST['I11'][$a];
        $I12 = $_POST['I12'][$a];
        $I13 = $_POST['I13'][$a];
        $I21 = $_POST['I21'][$a];
        $I22 = $_POST['I22'][$a];
        $I23 = $_POST['I23'][$a];
        $sql5 = "UPDATE `observationTable` SET `col1`='$I1',`col2`='$I2',`col3`='$I3',`col4`='$I11',`col5`='$I12',`col6`='$I13',`col7`='$I21',`col8`='$I22',`col9`='$I23' WHERE `subID`= $SubID && `expID`=$ExpID && `rowID`=$b && `userID`=$userID;";
        mysqli_query($db, $sql5);
      }
      echo "<script>alert('Simulation Completed');</script>";
      echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    }
  }
}
?>