<?php
include('header.php');
$sql = "Select * from proceduretable where subID = '$SubID' and expID = '$ExpID';";
$result = mysqli_query($db, $sql);
$sql1 = "Select * from onlineprocedure where subID = '$SubID' and expID = '$ExpID';";
$result1 = mysqli_query($db, $sql1);
$count = mysqli_num_rows($result1);
?>
<div class="proc-body">
    <h2 class="mb-4">Offline Procedure</h2>
    <?php
    while ($rows = mysqli_fetch_assoc($result)) {
        echo "<li class='list-wrap'>" . $rows['procedure'] . "</li>";
    }
    if ($count > 0) {
    ?>
        <h2 class="mb-4">Online Procedure</h2>
    <?php
        while ($rows = mysqli_fetch_assoc($result1)) {
            echo "<li class='list-wrap'>" . $rows['procedure'] . "</li>";
        }
    }
    ?>
</div>
</div>
</div>

<?php
include('footer.php');
?>