<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `medical_condition_master` WHERE Id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            MedicalConditionMaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#">MedicalConditionMaster</a></li>
            <li class="active">MedicalConditionMaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row"><?php // echo "<pre>";print_r($result_arr); 
                            ?>
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/updateMedicalConditionMaster.php">
                <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $result_arr['id']; ?>">
                    <div class="form-group">
                        <label for="MC">MC</label>
                        <input type="text" class="form-control" name="MC" id="MC" value="<?php echo $result_arr['MC']; ?>" placeholder="Enter MC">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" name="update" value="update" class="btn btn-primary">Submit</button>
                </div>
            </form>



            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php
include("includes/footer.php");
?>