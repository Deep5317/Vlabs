<?php
// include('config.php');
// // include('index.php');
// session_start();
?>

<html>

<head>
  <title>Feedback Responses</title>
  <link rel="stylesheet" href="./css/response.css" />
  <link rel="stylesheet" href="./css/table.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
</head>

<body>

  <section>
    <br>
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'true' && $_SESSION['teacher'] == 1) {
      $SubID = $_SESSION['subID'];
      $sql = "Select * from feedback;";
      $result = mysqli_query($db, $sql);
      while ($rows = mysqli_fetch_assoc($result)) {
        $ques_no = $rows['feedbackID'];
        $ques_desc =  $rows['feedbackQues'];
        $opt1 = 'Excellent';
        $opt2 = 'Very Good';
        $opt3 = 'Good';
        $opt4 = 'Average';
        $opt5 = 'Below average';

        $ans = "";
        $ans_opt1 = "";
        $ans_opt2 = "";
        $ans_opt3 = "";
        $ans_opt4 = "";
        $ans_opt5 = "";

        $sql1 = "select count(answer) as opt1ans from fbresponse where feedbackID = '$ques_no' and answer = '5' and subID ='$SubID' and expID='$ExpID';";
        $res = mysqli_query($db, $sql1);

        while ($row1 = mysqli_fetch_assoc($res)) {
          $ans_opt1 = $row1['opt1ans'];
        }

        $sql2 = "select count(answer) as opt2ans from fbresponse where feedbackID = '$ques_no' and answer = '4' and subID ='$SubID' and expID='$ExpID'";
        $res = mysqli_query($db, $sql2);

        while ($row2 = mysqli_fetch_assoc($res)) {
          $ans_opt2 = $row2['opt2ans'];
        }

        $sql3 = "select count(answer) as opt3ans from fbresponse where feedbackID = '$ques_no' and answer = '3' and subID ='$SubID' and expID='$ExpID';";
        $res = mysqli_query($db, $sql3);

        while ($row3 = mysqli_fetch_assoc($res)) {
          $ans_opt3 = $row3['opt3ans'];
        }

        $sql4 = "select count(answer) as opt4ans from fbresponse where feedbackID = '$ques_no' and answer = '2' and subID ='$SubID' and expID='$ExpID'";
        $res = mysqli_query($db, $sql4);

        while ($row4 = mysqli_fetch_assoc($res)) {
          $ans_opt4 = $row4['opt4ans'];
        }

        $sql5 = "select count(answer) as opt5ans from fbresponse where feedbackID = '$ques_no' and answer = '1' and subID ='$SubID' and expID='$ExpID'";
        $res = mysqli_query($db, $sql5);

        while ($row5 = mysqli_fetch_assoc($res)) {
          $ans_opt5 = $row5['opt5ans'];
        }


        $sql6 = "select * from fbresponse where feedbackID = '$ques_no' and subID ='$SubID' and expID='$ExpID'";
        $res = mysqli_query($db, $sql6);

        $sql7 = "select * from fbcomment where subID ='$SubID' and expID='$ExpID'";
        $res7 = mysqli_query($db, $sql7);


        while ($row6 = mysqli_fetch_assoc($res)) {
          $ans_opt = $row6['answer'];
        }


    ?>
        <div class="card mt-5 mb-4">
          <div class="card-title">
            <?php echo "<p class='quest'>" . $ques_no . ") " . $ques_desc . "</p>"; ?>
          </div>
          <div class="response-tile">
            <div class="card-body">

              <table class="table table-hover table-bordered feedback">
                <thead>
                  <th>Options</th>
                  <th>Count</th>
                  <thead>
                    <tr>
                      <td>Option 1:<b> <?php echo $opt1; ?></b></td>
                      <td><?php echo $ans_opt1; ?>
                    </tr>
                    <tr>
                      <td>Option 2: <b><?php echo $opt2; ?></b></td>
                      <td><?php echo $ans_opt2; ?>
                    </tr>
                    <tr>
                      <td>Option 3:<b> <?php echo $opt3; ?></b></td>
                      <td><?php echo $ans_opt3; ?>
                    </tr>
                    <tr>
                      <td>Option 4: <b><?php echo $opt4; ?></b></td>
                      <td><?php echo $ans_opt4; ?>
                    </tr>
                    <tr>
                      <td>Option 5:<b> <?php echo $opt5; ?></b></td>
                      <td><?php echo $ans_opt5; ?>
                    </tr>
              </table>





            </div>



            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script>
              // Load google charts
              google.charts.load('current', {
                'packages': ['corechart']
              });
              google.charts.setOnLoadCallback(drawChart);

              // Draw the chart and set the chart values
              function drawChart() {

                var data = google.visualization.arrayToDataTable([
                  ['Options', 'Feedback'],
                  ['Excellent', <?php echo $ans_opt1; ?>],
                  ['Very Good', <?php echo $ans_opt2; ?>],
                  ['Good', <?php echo $ans_opt3; ?>],
                  ['Average', <?php echo $ans_opt4; ?>],
                  ['Below Average', <?php echo $ans_opt5; ?>]
                ]);



                // Optional; add a title and set the width and height of the chart
                var options = {
                  'title': 'Analysis of Options',
                  'width': '100%',
                  // 'height': '50%'
                };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart<?php echo $ques_no; ?>'));
                chart.draw(data, options);
              }
            </script>


            <div id="piechart<?php echo $ques_no; ?>" align='center'></div>
          </div>

        </div>

    <?php }
    }
    ?>
    <h1 align="center" style="color: white;">Comments</h1>
    <div style="overflow-y: scroll;height:200px;border: 3px solid white">
      <table class="table ">
        <tbody>
          <?php
          // $comment = ""; 
          while ($com = mysqli_fetch_assoc($res7)) {
            $comment = $com['comments'];
            $userID = $com['userID'];
            $usersql = "select * from user where userID = $userID;";
            $res8 = mysqli_query($db, $usersql);
            while ($resuser = mysqli_fetch_assoc($res8)) {
              $userName = $resuser['Email'];
            }
          ?>
            <tr scope="col">
              <td>
                <?php echo $comment . " - " . $userName; ?>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </section>






</body>

</html>