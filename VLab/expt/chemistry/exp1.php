<head>
  <link rel="stylesheet" href="../css/phenol.css">
  <style>
    #p1 {
      display: none;
    }

    #p2 {
      display: none;
    }

    #p3 {
      display: none;
    }

    #p4 {
      display: none;
    }

    #p5 {
      display: none;
    }

    #p6 {
      display: none;
    }

    #p7 {
      display: none;
    }

    #p8 {
      display: none;
    }
  </style>
</head>

<body>

  <div class="container cbox">
    <div class="row">

      <div class="col-12 dbox" style="padding:2%;">
        <script>
          let counter = 0;

          function remove_image1() {
            if (counter == 0) {
              document.getElementById('p1').style.display = "block";
              document.getElementById('initial').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image2() {
            if (counter == 1) {
              document.getElementById('p2').style.display = "block";
              document.getElementById('p1').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image3() {
            if (counter == 2) {
              document.getElementById('p3').style.display = "block";
              document.getElementById('p2').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image4() {
            if (counter == 3) {
              document.getElementById('p4').style.display = "block";
              document.getElementById('p3').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image5() {
            if (counter == 4) {
              document.getElementById('p5').style.display = "block";
              document.getElementById('p4').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image6() {
            if (counter == 5) {
              document.getElementById('p6').style.display = "block";
              document.getElementById('p5').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image7() {
            if (counter == 6) {
              document.getElementById('p7').style.display = "block";
              document.getElementById('p6').style.display = "none";
              counter++;
            } else {
              alert("Please go according to the procedure");
            }
          }

          function remove_image8() {
            if (counter == 7) {
              document.getElementById('p8').style.display = "block";
              document.getElementById('p7').style.display = "none";
              alert("Congrats!! Procedure is completed. Note Down the weight.");
            } else {
              alert("Please go according to the procedure");
            }
          }

          function reset() {
            counter = 0;
            history.go(0);
            document.getElementById('initial').style.display = "block";
          }

          function myfun() {
            var w1 = parseInt(document.getElementById('num1').value);
            var w2 = parseInt(document.getElementById('num2').value);
            document.getElementById('result').innerHTML = w1 - w2;
          }
        </script>

        <div class="row">
          <div class="column">
            <button><img id="tt" src="../images/chemImages/cylinderGlacial.png" onclick="remove_image1()" width="100" height="100"></button>
            <p> 5ml Glacial <br> Acetic Acid </p>
          </div>

          <div class="column">
            <button><img id="tt" src="../images/chemImages/cylinderFormaldehyde.png" onclick="remove_image2()" width="100" height="100"></button>
            <p> 2.5ml of 40% Formaldehyde </p>
          </div>
        </div>

        <div class="row">
          <div class="column">
            <button><img id="tt" src="../images/chemImages/cylinderPhenol.png" onclick="remove_image3()" width="100" height="100"></button>
            <p> 2ml Phenol </p>
          </div>

          <div class="column">
            <button><img id="tt" src="../images/chemImages/cylinderHCL.png" onclick="remove_image4()" width="100" height="100"></button>
            <p> Conc HCL</p>
          </div>
        </div>

        <div class="row">
          <div class="column">
            <button><img id="tt" src="../images/chemImages/glassrod.png" onclick="remove_image5()" width="100" height="100"></button>
            <p> Glass Rod </p>
          </div>

          <div class="column">
            <button><img id="tt" src="../images/chemImages/filterPaper.png" onclick="remove_image6()" width="100" height="100"></button>
            <p> Filter Paper </p>
          </div>
        </div>

        <div class="row">
          <div class="column">
            <button><img id="tt" src="../images/chemImages/oven.png" onclick="remove_image7()" width="100" height="100"></button>
            <p> Microwave </p>
          </div>

          <div class="column">
            <button><img id="tt" src="../images/chemImages/weighingMachine.png" onclick="remove_image8()" width="100" height="100"></button>
            <p> Weighing <br> Machine </p>
          </div>
        </div>


        <center>
          <div style="border: 5px;">
            <img id="initial" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/chemImages/initialIMG.png" alt="" />
            <img id="p1" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/1.gif" alt="" />
            <img id="p2" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/2.gif" alt="" />
            <img id="p3" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/3.gif" alt="" />
            <img id="p4" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/4.gif" alt="" />
            <img id="p5" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/5.gif" alt="" />
            <img id="p6" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/6.gif" alt="" />
            <img id="p7" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/7.gif" alt="" />
            <img id="p8" STYLE="position:absolute; top:100px; left:450px; width:900px; height:600px;" src="../images/videos/8.gif" alt="" />

          </div>
          <button onclick="reset()" STYLE="position:absolute; top:750px; left:900px; padding: 10px 28px; background-color: black; color: white;">Reset</button>
        </center>
        <br><br>

        <div class="ebox">
          <h2 STYLE="text-align: center; background-color: lightblue;"> Observation</h2>
          Weight of the empty beaker (W1) = 38.36g
          <br><br>Weight of beaker + resins (W2) =
          <input type="number" value=" " style="width: 6em;"> g
          <br><br>Weight of Phenol Formaldehyde Resin = W2 - W1 =
          <input type="number" value=" " id="num1" style="width: 6em;"> -
          <input type="number" value=" " id="num2" style="width: 6em;">
          <input type="button" value="=" STYLE="background-color: black; color: white;" onclick="return myfun()">
          <span id="result"></span> g
        </div>
        <form method="post">
          <input type="submit" name="submit" value="Submit Observation">
        </form>
        <?php
        if (isset($_POST['submit'])) {
          if ($_SESSION['logged_in'] == 'true') {
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
              $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '1', '0', 'Weight of the empty beaker (W1) = 38.36g');";
              $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '2', '0', 'Weight of beaker + resins (W2) = 41.44g');";
              $sql5 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '3', '0', 'Weight of Phenol Formaldehyde Resin = W2 - W1 = 41.44g - 38.36 = 3.08g');";
              mysqli_query($db, $sql3);
              mysqli_query($db, $sql4);
              mysqli_query($db, $sql5);
              echo "<script>alert('Observation Submitted')</script>";
              echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
            } else {
                echo "<script>alert('Observation Submitted')</script>";
                echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
            }
          }
        }
        ?>
      </div>
    </div>
  </div>

</body>

</html>