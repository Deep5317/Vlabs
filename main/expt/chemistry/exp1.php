<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/phenol.css">
  <title>Experiment 1</title>

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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

  <div class="container cbox">
    <div class="row">

      <div class="col-12 dbox">
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

        <!-- <center>
          <h1>Preparation of Phenol Formaldehyde</h1>
        </center> -->
        <br>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                  <button><img id="tt" src="../images/chemImages/cylinderGlacial.png" onclick="remove_image1()" width="100" height="100"></button>
                  <p> 5ml Glacial <br> Acetic Acid </p>
                </div>

                <div class="col-md-6 col-sm-6 col-6">
                  <button><img id="tt" src="../images/chemImages/cylinderFormaldehyde.png" onclick="remove_image2()" width="100" height="100"></button>
                  <p> 2.5ml of 40% Formaldehyde </p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                  <button><img id="tt" src="../images/chemImages/cylinderPhenol.png" onclick="remove_image3()" width="100" height="100"></button>
                  <p> 2ml Phenol </p>
                </div>

                <div class="col-md-6 col-sm-6 col-6">
                  <button><img id="tt" src="../images/chemImages/cylinderHCL.png" onclick="remove_image4()" width="100" height="100"></button>
                  <p> Conc HCL</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm- col-6">
                  <button><img id="tt" src="../images/chemImages/glassrod.png" onclick="remove_image5()" width="100" height="100"></button>
                  <p> Glass Rod </p>
                </div>

                <div class="col-md-6 col-sm col-6">
                  <button><img id="tt" src="../images/chemImages/filterPaper.png" onclick="remove_image6()" width="100" height="100"></button>
                  <p> Filter Paper </p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-6 col-6">
                  <button><img id="tt" src="../images/chemImages/oven.png" onclick="remove_image7()" width="100" height="100"></button>
                  <p> Microwave </p>
                </div>

                <div class="col-md-6 col-sm-6 col-6">
                  <button><img id="tt" src="../images/chemImages/weighingMachine.png" onclick="remove_image8()" width="100" height="100"></button>
                  <p> Weighing <br> Machine </p>
                </div>
              </div>
            </div>

            <div class="col-md-8 col-sm-12">
              <div style="border: 5px;">
                <img class="img-fluid" id="initial" width="900px" height="600px" src="../images/chemImages/initialIMG.png" alt="" />
                <img class="img-fluid" id="p1" width="900px" height="600px" src="../images/videos/1.gif" alt="" />
                <img class="img-fluid" id="p2" width="900px" height="600px" src="../images/videos/2.gif" alt="" />
                <img class="img-fluid" id="p3" width="900px" height="600px" src="../images/videos/3.gif" alt="" />
                <img class="img-fluid" id="p4" width="900px" height="600px" src="../images/videos/4.gif" alt="" />
                <img class="img-fluid" id="p5" width="900px" height="600px" src="../images/videos/5.gif" alt="" />
                <img class="img-fluid" id="p6" width="900px" height="600px" src="../images/videos/6.gif" alt="" />
                <img class="img-fluid" id="p7" width="900px" height="600px" src="../images/videos/7.gif" alt="" />
                <img class="img-fluid" id="p8" src="../images/videos/8.gif" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="container my-3">
          <center>
            <button onclick="reset()" style="padding: 10px; background-color: black; color: white;">Reset</button>
          </center>
        </div>

        <div class="container">
          <div class="table-responsive-sm">
            <div class="table table-bordered" style="padding: 10px;">
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
          </div>
        </div>
        <?php if ($_SESSION['logged_in'] == 'true') { ?>
          <form method="post">
            <input type="submit" name="submit" value="Submit Observation">
          </form>
        <?php
        }
        if (isset($_POST['submit'])) {
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
              $sql3 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '1', '0', 'Weight of the empty beaker (W1) = 38.36g');";
              $sql4 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '2', '0', 'Weight of beaker + resins (W2) = 79.8g');";
              $sql5 = "INSERT INTO `observationtable` (`subID`, `expID`, `userID`, `rowID`, `typeTable`, `statement`) VALUES ('$SubID', '$ExpID', '$userID', '3', '0', 'Weight of Phenol Formaldehyde Resin = W2 - W1 = 79.8 - 38.36 = 41.44g');";
              mysqli_query($db, $sql3);
              mysqli_query($db, $sql4);
              mysqli_query($db, $sql5);
              echo "<script>alert('Simulation Completed');</script>";
              echo "<script>window.location='post-test.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
            } else {
              echo "<script>alert('Simulation Completed');</script>";
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