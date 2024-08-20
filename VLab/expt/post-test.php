<?php
include('header.php');
?>

<div style="color: white; text-align:left;">
    <h2 class="mb-4">Post-Test</h2>
    <form name="preTest" method="POST">
        <ol class="quest-div-ol">
            <?php
            $sql = "Select * from post_test where subID = '$SubID' and expID = '$ExpID' order by rand() limit 3; ";
            $result = mysqli_query($db, $sql);
            while ($rows = mysqli_fetch_assoc($result)) {
                $ques_no = $rows['quesID'];
                $ques_desc =  $rows['question_desc'];
                $opt1 = $rows['option1'];
                $opt2 = $rows['option2'];
                $opt3 = $rows['option3'];
                $opt4 = $rows['option4'];

            ?>
                <div class="quest-div space-box">
                    <div class="quest-div">
                        <?php echo "<li>" . $ques_desc . "</li>"; ?>
                    </div>
                    <div class="opt-choice">
                        <ol>
                            <li>
                                <input type="radio" value="1" name="<?php echo $ques_no; ?>" required> <?php echo $opt1; ?>
                            </li>
                            <li>
                                <input type="radio" value="2" name="<?php echo $ques_no; ?>" required> <?php echo $opt2; ?>
                            </li>
                            <?php if ($opt3 != '') { ?>
                                <li>
                                    <input type="radio" value="3" name="<?php echo $ques_no; ?>" required> <?php echo $opt3; ?>
                                </li>
                            <?php }
                            if ($opt4 != '') {
                            ?>
                                <li>
                                    <input type="radio" value="4" name="<?php echo $ques_no; ?>" required> <?php echo $opt4; ?>
                                </li>
                            <?php } ?>
                        </ol>


                    </div>
                </div>
            <?php } ?>
        </ol>

        <div class="submit-div">
            <input class="btn btn-primary" type="submit" name="submit" value="Submit" onclick="scroll()">
        </div>
        <!-- <input type="submit" name="submit" value="Submit" onclick="scroll()"> -->

    </form>


    <!-- <h4 class="mb-4" id=ans1></h4>
    <h4 class="mb-4" id=ans2></h4>
    <h4 class="mb-4" id=ans3></h4>
    <h4 class="mb-4" id=ans4></h4>
    <h4 class="mb-4" id=ans5></h4> -->

</div>
</div>
</div>
<?php
include('footer.php');
?>

<?php

if (isset($_REQUEST["submit"])) {
    array_pop($_POST);

    if ($_SESSION['logged_in'] == 'true') {
        $userName = $_SESSION['email'];
        $sql1 = "Select * from user where Email='$userName'; ";
        $result1 = mysqli_query($db, $sql1);
        $userID;
        while ($rows = mysqli_fetch_assoc($result1)) {
            $userID = $rows['userID'];
        }

        $sql2 = "select * from ans_post_test where userID = '$userID' and expID = '$ExpID' and subID = '$SubID';";
        $result2 = mysqli_query($db, $sql2);

        $count = mysqli_num_rows($result2);
        echo $count;
        if ($count == 0) {
            foreach ($_POST as $ques_no => $ANS) {

                $sql = "INSERT INTO `ans_post_test` (`subID`, `expID`, `quesID`, `userID`, `answer`) VALUES ('$SubID', '$ExpID', '$ques_no', '$userID', '$ANS');";
                mysqli_query($db, $sql);
            }
        } else {
            $del = "delete from ans_post_test where `subID`= $SubID && `expID`=$ExpID && `userID`=$userID;";
            mysqli_query($db, $del);
            foreach ($_POST as $ques_no => $ANS) {

                $sql = "INSERT INTO `ans_post_test` (`subID`, `expID`, `quesID`, `userID`, `answer`) VALUES ('$SubID', '$ExpID', '$ques_no', '$userID', '$ANS');";
                mysqli_query($db, $sql);
            }
        }
        $sql3 = "SELECT t2.userID as userID,t1.quesID as quesID,t1.answer as correctAns,t2.answer as userAns FROM post_test t1 JOIN ans_post_test t2 ON t1.subID = t2.subId and t1.expID = t2.expID and t1.quesID=t2.quesID where t2.userID = '$userID' and t1.subID='$SubID' and t1.expID='$ExpID';";
        $result3 = mysqli_query($db, $sql3);
        $count = mysqli_num_rows($result3);
        $correct = 0;
        while ($rows = mysqli_fetch_assoc($result3)) {
            if ($rows['correctAns'] == $rows['userAns']) {
                $correct++;
            }
        }
        $percentage = ($correct / $count) * 100;
        // echo "<script>alert('You Scored " . $correct . "/" . $count . ".')</script>";
        echo "<script>alert('Post-Test Submitted')</script>";
        echo "<script>window.location='feedback.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    } else {
        $correct = 0;
        $count = 0;
        foreach ($_POST as $ques_no => $ANS) {
            $sql = "select answer from post_test where subID='$SubID' and expID='$ExpID' and quesID='$ques_no';";
            $result = mysqli_query($db, $sql);
            $crrans;
            while ($rows = mysqli_fetch_assoc($result)) {
                $crrans = $rows['answer'];
            }
            if ($crrans == $ANS) {
                $correct++;
            }
            $count++;
            // $h = 'ans';
            // $h .= $ques_no;
            // echo "<script>
            //    if(" . $ANS . " == " . $crrans . ")
            //         document.getElementById('" . $h . "').innerHTML = '" . $ques_no . ") Correct';
            //     else
            //     document.getElementById('" . $h . "').innerHTML =  '" . $ques_no . ") Incorrect';
            //     </script>";
        }
        echo "<script>alert('You Scored $correct/$count')</script>";
        echo "<script>window.location='feedback.php?subID=" . $SubID . "&expID=" . $ExpID . "'</script>";
    }
}


?>