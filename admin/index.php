<?php
    include '../include/header.php';
    $id_user = $_SESSION['id_user'];
?>
<script type="text/javascript" src="../assets/js/Chart.min.js"></script>

<?php  
$jumalah_kriteria = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kriteria"));
$jumalah_alternatif = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM alternatif"));
$jumalah_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE akses_level = 'user' "));

?>

<!-- end query -->
<!-- user -->
<?php if($_SESSION['akses_level'] == "admin"){ ?>
<div class="row">

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <span style="font-size: 50px">
                            <?php echo $jumalah_kriteria ?></span>
                        <div><b>Kriteria</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <span style="font-size: 50px">
                            <?php echo $jumalah_alternatif ?></span>
                        <div><b>Alternatif</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <span style="font-size: 50px">
                            <?php echo $jumalah_user ?></span>
                        <div><b>User</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</div>
<?php } ?>



<?php  
include '../include/footer.php';
?>