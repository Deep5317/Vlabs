<?php
include('header.php');
$sql = "Select * from aimtable where subID = '$SubID' and expID = '$ExpID';";
$result = mysqli_query($db, $sql);
$sql1 = "Select * from theorytable where subID = '$SubID' and expID = '$ExpID';";
$result1 = mysqli_query($db, $sql1);
?>
<div class="bod-theory">
    <h2 class="mb-4">Aim</h2>
    <?php
    while ($rows = mysqli_fetch_assoc($result)) {
    ?>
        <p class="p-tag"><?php echo $rows['aim']; ?></p>

    <?php
    }
    ?>
    <h2 class="mb-4">Theory</h2>
    <?php
    while ($rows = mysqli_fetch_assoc($result1)) {
        if ($rows['textType'] == 1) {
            echo "<li class='list-wrap'>" . $rows['theory'] . "</li>";
        } else {
            echo '<div class="img-wrap"><img src="data:image/jpeg;base64,' . base64_encode($rows['image']) . '" /></div>';
        }
    }
    ?>
</div>
</div>
</div>
<?php
include('footer.php');
?>