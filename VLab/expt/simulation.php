<?php
include('header.php');
$sql = "Select * from simtable where subID = '$SubID' and expID = '$ExpID';";
$result = mysqli_query($db, $sql);
?>

<div class="btn-class">
    <div class="exp-head">
        <h2 class="hidden-head"></h2>
    </div>
    <button class="btn btn-primary button-glow" onclick="setSimulationFullScreen('<?php echo $expName ?>')">Set Full screen</button>
</div>
<!-- <h2 class="mb-4" style="">Simulation</h2> -->
<div class="simulation" style="text-align:left; background:white; overflow:hidden">
    <br>
    <?php
    while ($rows = mysqli_fetch_assoc($result)) {
        $path = $rows['path'];
        include($path);
        // header('Location:' . $path);
    }
    ?>
</div>
<?php if ($SubID == 1 and $ExpID == 1) { ?>
    <br>
    <h5 id="credits" align="right" style="font-size: 1vw;">Amrita University ,"Newton's Rings-Wavelength of light", 2009, via <a href="https://vlab.amrita.edu/" target="_blank" style="color: black;">https://vlab.amrita.edu/</a></h5>
    <br>
<?php } ?>
</div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title">Subscribe our Newsletter</h5> -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Press the button 'Set Full Screen' to properly perform the Simulation!</p>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>