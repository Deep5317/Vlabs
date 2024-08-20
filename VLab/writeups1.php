<!doctype html>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// include('index.php');
// session_start();
// include('config.php');
// $teacherName = $_SESSION['teacherName'];
// $SubID=$_SESSION['subID'];
?>

<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 1) {
  $teacherName = $_SESSION['teacherName'];
  $teacherID = $_SESSION['teacherID'];
  $SubID = $_SESSION['subID'];
  $subName;
  $subsql = "select * from subjecttable where subID ='$SubID';";
  $subres = mysqli_query($db, $subsql);
  while ($rows = mysqli_fetch_assoc($subres)) {
    $subName = $rows['subName'];
  }
?>



  <?php
  $sql = "";
  $sql = "SELECT t1.subID as subID,t1.expID as expID,t2.userID as userID,t2.Email as email,t2.class as class,t2.division as division,t2.batch as batch,t2.rollno, t2.Fname as fname,t2.Lname as lname,t1.expname as expname FROM `explist` t1,user t2 where  t1.subID = '$SubID' and t2.class = 'FE'";

  if (isset($_POST['show'])) {

    $div = $_POST['coll_div'];
    $batch = $_POST['coll_batch'];
    $expno = $_POST['coll_expt'];

    if ($div != "" && $div != "dum") {
      $sql .= " and t2.division = '$div'";
    } else {
      $sql .= " and 1=1";
    }

    if ($batch != "" && $batch != "dum") {
      $sql .= " and t2.batch = '$batch'";
    } else {
      $sql .= " and 1=1";
    }

    if ($expno != "" && $expno != "dum") {
      $sql .= " and t1.expID = '$expno'";
    } else {
      $sql .= " and 1=1";
    }



    // echo $sql;
  }

  ?>

  <section>
    <div class="center-align head">
      <h1>Search for Submissions</h1>
    </div>
    <form method="POST">
      <div class="center-align filters">

        <select class="form-control" name="coll_div" id="coll-div">
          <option value="dum">Select Division</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        <select class="form-control" name="coll_batch" id="coll-batch">
          <option value="dum">Select Batch</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
        <select class="form-control" name="coll_expt" id="coll-expt">
          <option value="dum">All Experiment </option>
          <?php
          $sql6 = "select * FROM `explist` where subID = '$SubID'";
          $res6 = mysqli_query($db, $sql6);
          // echo $sql6;
          while ($y = mysqli_fetch_assoc($res6)) {
            $expid = $y['expID'];
            $expname = $y['expname'];

          ?>
            <option value="<?php echo $expid; ?>"><?php echo $expname; ?> </option>
          <?php
          }
          ?>
        </select>

        <button type="submit" class="btn btn-primary" value="Show" name="show" onclick="showTable()">Show</button>

      </div>
    </form>
    <table class="table" id="writeup_status">
      <thead class="thead-dark">
        <th>Timestamp</td>
        <th>Name of the Student</th>
        <th>Batch</th>
        <th>Roll No</th>
        <th>Experiment</th>
        <th>Pre Test Marks (out of 3)</th>
        <th>Post Test Marks (out of 3)</th>
        <th>Marks <br>(out of 15)</th>
        <th>Link</th>
      </thead>

      <tr>
        <?php

        $res = mysqli_query($db, $sql);
        while ($x = mysqli_fetch_assoc($res)) {
          $fname = $x['fname'];
          $lname = $x['lname'];
          $email = $x['email'];
          $div = $x['class'] . "" . $x['division'];
          $batch = $x['batch'];
          $rollno = $x['rollno'];
          // $timestamp = $x['timestamp'];
          $title_of_expt = $x['expname'];
          $ExpID = $x['expID'];
          $userID = $x['userID'];
          // $status =$x['status'];
          $SubID = $x['subID'];
          $timestamp = '';
          $status;

          $sql1 = "select * from submission where userID='$userID' and expID='$ExpID' and subID='$SubID';";
          $result1 = mysqli_query($db, $sql1);
          $count = mysqli_num_rows($result1);
          if ($count > 0) {
            $status = 1;
            while ($rows = mysqli_fetch_assoc($result1)) {
              $timestamp = $rows['timestamp'];
            }
          } else {
            $status = 0;
          }


          $sql2 = "SELECT t2.userID as userID,t1.quesID as quesID,t1.answer as correctAns,t2.answer as userAns FROM pre_test t1 JOIN ans_pre_test t2 ON t1.subID = t2.subId and t1.expID = t2.expID and t1.quesID=t2.quesID where t2.userID = '$userID' and t1.subID='$SubID' and t1.expID='$ExpID';";
          $result2 = mysqli_query($db, $sql2);
          $count1 = mysqli_num_rows($result2);
          $correct1 = 0;
          while ($rows = mysqli_fetch_assoc($result2)) {
            if ($rows['correctAns'] == $rows['userAns']) {
              $correct1++;
            }
          }
          if ($count1 == 0) {
            $premarks = 0;
          } else {
            // $premarks = ($correct1 / $count1) * 100;
            $premarks = $correct1;
          }

          $sql3 = "SELECT t2.userID as userID,t1.quesID as quesID,t1.answer as correctAns,t2.answer as userAns FROM post_test t1 JOIN ans_post_test t2 ON t1.subID = t2.subId and t1.expID = t2.expID and t1.quesID=t2.quesID where t2.userID = '$userID' and t1.subID='$SubID' and t1.expID='$ExpID';";
          $result3 = mysqli_query($db, $sql3);
          $count2 = mysqli_num_rows($result3);
          $correct2 = 0;
          while ($rows = mysqli_fetch_assoc($result3)) {
            if ($rows['correctAns'] == $rows['userAns']) {
              $correct2++;
            }
          }
          if ($count2 == 0) {
            $postmarks = 0;
          } else {
            // $postmarks = ($correct2 / $count2) * 100;
            $postmarks = $correct2;
          }
          #marks
          $submitbtn = "Sub" . $SubID . "Exp" . $ExpID . "User" . $userID;
          $sql4 = "select * from markstable where expID='$ExpID' and subID='$SubID' and userID='$userID';";
          $result4 = mysqli_query($db, $sql4);
          $usermarks = 0;
          $btnName = 'Submit';
          $updateCount = 0;
          while ($rows = mysqli_fetch_assoc($result4)) {
            $usermarks = $rows['marks'];
            $btnName = 'Update';
            $updateCount = 1;
          }

        ?>
          <td><?php echo $timestamp; ?> </td>
          <td><?php echo $fname . " " . $lname; ?></td>
          <td><?php echo $batch; ?></td>
          <td><?php echo $rollno; ?></td>
          <td><?php echo $title_of_expt; ?></td>
          <td><?php echo $premarks; ?></td>
          <td><?php echo $postmarks; ?></td>
          <td class="marks">
            <?php
            if ($status == 1) {
              if ($updateCount == 0) {
            ?><form action="" method="POST">
                  <input class="form-control" type="text" value="<?php echo $usermarks; ?> " name="marks"><input class="btn btn-primary" type="submit" value="<?php echo $btnName; ?>" name="<?php echo $submitbtn; ?>">
                </form>
            <?php
              } else {
                echo $usermarks;
              }
            }
            ?>
          </td>
          <?php
          if (isset($_POST[$submitbtn])) {
            $marks = $_POST['marks'];
            if ($updateCount == 1) {
              $sql5 = "UPDATE `markstable` SET `marks`='$marks' where `subID`='$SubID' and `expID`='$ExpID' and `userID`='$userID';";
              mysqli_query($db, $sql5);
            } else {
              $sql5 = "INSERT INTO `markstable`(`subID`, `expID`, `userID`, `marks`) VALUES ('$SubID','$ExpID','$userID','$marks');";
              mysqli_query($db, $sql5);
            }
            // $name = strip_tags(htmlspecialchars($fname . " " . $lname));
            $email1 = strip_tags(htmlspecialchars($email)); //change
            // $subject = strip_tags(htmlspecialchars($subName." Experiment Marks"));
            // $message = strip_tags(htmlspecialchars("You Got ".$marks." out of 15.Checked by ".$teacherName."."));

            // $headers = array("From: sachinm090910@gmail.com",
            //     "Reply-To: sachin26240@gmail.com",
            //     "X-Mailer: PHP/" . PHP_VERSION
            // );
            // $headers = implode("\r\n", $headers);
            // $body = "Hey $name " . "\r\n\r\n" . " This is to acknowledge you that we received your query as follows." . "\r\n" . " .Subject : $subject \r\n\r\n . Message:$message \n\n Our coordinators will get back to you soon\n\n Thank you for your paitence and time";
            // echo "<script>alert('$email1')</script>";
            // if (mail($email1, $subject, $body, $headers)) {

            //   echo "<script>alert('mail success')</script>";
            // } else {
            //   $errorMessage = error_get_last()['message'];
            //   echo "<script>alert('".$errorMessage."')</script>";
            //   http_response_code(500);
            // }

            require 'phpmailer/vendor/autoload.php';
            //Create an instance; passing `true` enables exceptions

            $mail = new PHPMailer(true);

            try {
              //Server settings
              // $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
              $mail->SMTPDebug = 0;                      //Enable verbose debug output
              $mail->isSMTP();                                            //Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
              $mail->Username   = 'vlabs@sakec.ac.in';                     //SMTP username //EmailID
              $mail->Password   = 'Sakec@123';                               //SMTP password //Email passsword
              $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
              $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

              //Recipients
              $mail->setFrom('vlabs@sakec.ac.in', 'VLab');
              $mail->addAddress($email1, $fname . " " . $lname);     //Add a recipient

              //Content
              $mail->isHTML(true);                                  //Set email format to HTML
              $mail->Subject = $subName . "-" . $title_of_expt . " Marks";
              $mail->Body    = "You Got " . $marks . " out of 15.Checked by " . $teacherName . ".";
              // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              $mail->send();
              echo "<script>alert('Marks Updated')</script>";
            } catch (Exception $e) {
              echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "<script>window.location='writeups.php'</script>";
          }
          ?>
          <!-- <td><?php
                    // if ($status == 1) {
                    //             echo 'Submitted';
                    //           } else {
                    //             echo 'Not Submited';
                    // } 
                    ?></td> -->
          <td class="link-sub"><?php if ($status == 1) { ?>
              <a href="https://www.shahandanchor.com/VLab/downlwriteups.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID; ?>&userID=<?php echo $userID ?>" target="_blank">https://www.shahandanchor.com/VLab/downlwriteups.php?subID=<?php echo $SubID; ?>&expID=<?php echo $ExpID; ?>&userID=<?php echo $userID; ?></a>
            <?php } ?>
          </td>
      </tr>
    <?php } ?>
    </table>
    <div class="center-align">
      <button type="button" class="btn btn-primary" id="export_button_to_excel">Export to Excel</button>
    </div>

    <script>
      function html_table_to_excel(type) {

        var data = document.getElementById('writeup_status');

        var file = XLSX.utils.table_to_book(data, {
          sheet: "sheet1"
        });

        XLSX.write(file, {
          bookType: type,
          bookSST: true,
          type: 'base64'
        });

        XLSX.writeFile(file, '<?php echo $subName ?>.' + type);
      }

      const export_button = document.getElementById('export_button_to_excel');

      export_button.addEventListener('click', () => {
        html_table_to_excel('xlsx');
      });
    </script>



  </section>
<?php } ?>
</body>

</html>