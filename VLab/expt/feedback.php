<?php
include('header.php');
?>


<div style="color: white; text-align:left;">
    <h2 class="mb-4">Feedback</h2>
    <form name="preTest" method="POST">
        <ol class="quest-div-ol">
        <?php
        $sql = "Select * from feedback;";
        $result = mysqli_query($db, $sql);
        while ($rows = mysqli_fetch_assoc($result)) {
            $ques_no = $rows['feedbackID'];
            $ques_desc =  $rows['feedbackQues'];

        ?>
            <div class="quest-div space-box">
                <div class="quest-div">
                    <?php echo "<li>" . $ques_desc . "</li>"; ?>
                </div>
                <div class="opt-choice">
                    <div class="horizontal-band">
                        <div>
                            <h6>Excellent</h6>
                        </div>
                        <div style="text-align:right">
                            <h6>Below Average</h6>
                        </div>
                    </div>
                    <ol class="horizontal-band">
                        <li>
                            <input type="radio" value="5" name="<?php echo $ques_no; ?>" style='font-size: 22px;' required>
                        </li>
                        <li>
                            <input type="radio" value="4" name="<?php echo $ques_no; ?>" style='font-size: 22px;' required> 
                        </li>
                        <li>
                            <input type="radio" value="3" name="<?php echo $ques_no; ?>" style='font-size: 22px;' required> 
                        </li>
                        <li>
                            <input type="radio" value="2" name="<?php echo $ques_no; ?>" style='font-size: 22px;' required> 
                        </li>
                        <li>
                            <input type="radio" value="1" name="<?php echo $ques_no; ?>" style='font-size: 22px;' required> 
                        </li>
                    </ol>
                </div>
            </div>
        <?php } ?>
        </ol>

        <div class="submit-div">
            <input class="btn btn-primary" type="submit" name="feedback" value="Final Submission">
        </div>

    </form>
</div>
</div>
</div>
<?php
include('footer.php');
?>

<?php

if (isset($_REQUEST["feedback"])) {
    array_pop($_POST);

    if ($_SESSION['logged_in'] == 'true') {
        $userName = $_SESSION['email'];
        $sql1 = "Select * from user where Email='$userName'; ";
        $result1 = mysqli_query($db, $sql1);
        $userID;
        while ($rows = mysqli_fetch_assoc($result1)) {
            $userID = $rows['userID'];
        }

        $sql2 = "select * from fbresponse where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $result2 = mysqli_query($db, $sql2);

        $count = mysqli_num_rows($result2);
        echo $count;
        if ($count == 0) {
            foreach ($_POST as $ques_no => $ANS) {

                $sql = "INSERT INTO `fbresponse` (`subID`, `expID`, `feedbackID`, `userID`, `answer`) VALUES ('$SubID', '$ExpID', '$ques_no', '$userID', '$ANS');";
                mysqli_query($db, $sql);
            }
        } else {
            foreach ($_POST as $ques_no => $ANS) {

                $sql = "UPDATE `fbresponse` SET `answer`='$ANS' WHERE `subID`= $SubID && `expID`=$ExpID && `feedbackID`=$ques_no && `userID`=$userID;";
                mysqli_query($db, $sql);
            }
        }

        $sql3 = "select * from ans_pre_test where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $sql4 = "select * from ans_post_test where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $sql5 = "select * from observationtable where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $result3 = mysqli_query($db, $sql3);
        $result4 = mysqli_query($db, $sql4);
        $result5 = mysqli_query($db, $sql5);

        $count1 = mysqli_num_rows($result3);
        $count2 = mysqli_num_rows($result4);
        $count3 = mysqli_num_rows($result5);
        if ($count1 > 0) {
            if ($count3 > 0) {
                if ($count2 > 0) {
                    $sql6 = "INSERT INTO `submission` ( `timestamp`, `userID`, `subID`, `expID`, `submit_status`) VALUES (current_timestamp(), '$userID', '$SubID', '$ExpID', '1');";
                    if (mysqli_query($db, $sql6)) {
                        echo "<script>alert('Submission Done')</script>";
                        echo "<script>window.location='credits.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
                    } else {
                        echo "<script>alert('Already Submitted')</script>";

                        echo "<script>window.location='credits.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
                    }
                    // echo "<script>window.location='feedback.php?subID=" . $SubID . "&expID=" . $ExpID .  "'</script>";
                } else {
                    echo "<script>alert('Post test not submitted')</script>";
                }
            } else {
                echo "<script>alert('Observation Table not submitted')</script>";
            }
        } else {
            echo "<script>alert('Pre test not submitted')</script>";
        }
    }
}
?>