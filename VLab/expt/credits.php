<?php
include('header.php');
// session_start();
// include('config.php');
$ExpID = $_GET['expID'];
$SubID = $_GET['subID'];
?>
<style>
    .grid :hover {
        cursor: pointer;
        /* box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3); */
        /* filter: drop-shadow(0 0 0.75rem crimson); */
    }

    .grid article {
        z-index: 1;
    }


    .img-wrapper {
        margin: auto;
        justify-content: center;
        display: inline-block;
        height: 274px;
        overflow: hidden;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        grid-gap: 20px;
        align-items: stretch;
    }

    .grid>article {
        padding-top: 5%;
        border: 2px solid #ccc;
        /* box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3); */
        border-radius: 4px;
    }


    .grid>article>div img {
        max-width: 80%;

    }

    .grid .text {
        padding: 20px;
    }
</style>

<?php


$sql = "select t2.name as name, t2.image as photo, t2.teacher as teacher from credits t1,photos t2 where t1.expID = '$ExpID' and t1.subID = '$SubID' and t1.pID=t2.pID";
// $sql = 'select * from photos;';
$res = mysqli_query($db, $sql);
?>
<div>
    <h1 style="color: white; font-family: 'Exo';">Simulation Prepared by</h1>
    <div class="grid">

        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['name'];
            if ($row['teacher'] == 1) {
                $desg = 'Faculty';
            } else {
                $desg = 'Student';
            }
        ?>
            <article>

                <div class="img-wrapper">
                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['photo']) . '" style="width:480px;" > '; ?>
                </div>
                <div>
                    <div class="text">
                        <h3><?php echo $name ?></h3>
                        <h3><?php echo $desg ?></h3>
                    </div>
                </div>
            </article>
        <?php } ?>
    </div>
    <br>
    <div class="submit-div">
        <input class="btn btn-primary" type="button" value="Back to Experiment" onclick="window.location='theory.php?subID=<?php echo $SubID ?>&expID=<?php echo $ExpID ?>'">
    </div>
</div>
<br>
</div>
</div>
<style>
    #sidebar {
        display: none;
    }
</style>
<?php
include('footer.php');
?>