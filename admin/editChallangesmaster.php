<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `challangesmaster` WHERE id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            challangesmaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">challangesmaster</a></li>
            <li class="active">challangesmaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/updateChallangesmaster.php" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $result_arr['id'];?>">
                    <!-- <div class="form-group">
                        <label for="url">url</label>
                        <input type="file" class="form-control" name="url" id="url">
                    </div> -->
                    <div class="form-group">
                        <label for="healthoption">healthoption</label>
                        <select name="healthoption" id="healthoption" class="form-control" require>
                            <option value="">Select Health Option</option>
                            <option value="1" <?php if($result_arr['healthoption'] == '1') echo"selected"; ?>>Weight Loss</option>
                            <option value="2" <?php if($result_arr['healthoption'] == '2') echo"selected"; ?>>Weight Gain</option>
                            <option value="3" <?php if($result_arr['healthoption'] == '3') echo"selected"; ?>>BuildMuscle</option>
                            <option value="4" <?php if($result_arr['healthoption'] == '4') echo"selected"; ?>>HomeWorkOut</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">gender</label>
                        <select name="gender" id="gender" class="form-control" require>
                            <option value="">Select gender</option>
                            <option value="M" <?php if($result_arr['gender'] == 'M') echo"selected"; ?>>Male</option>
                            <option value="F" <?php if($result_arr['gender'] == 'F') echo"selected"; ?>>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IsPregency">IsPregency</label>
                        <select name="IsPregency" id="IsPregency" class="form-control" require>
                            <option value="">Select Pregency</option>
                            <option value="1" <?php if($result_arr['IsPregency'] == '1') echo"selected"; ?> >Yes</option>
                            <option value="0" <?php if($result_arr['IsPregency'] == '0') echo"selected"; ?> >No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medicalconditionId">medicalconditionId</label>
                        <input type="text" class="form-control" name="medicalconditionId" value="<?php echo $result_arr['medicalconditionId'] ?>" id="medicalconditionId" placeholder="Enter medicalconditionId">
                    </div>
                    <div class="form-group">
                        <label for="agestart">agestart</label>
                        <input type="text" class="form-control" name="agestart" id="agestart" value="<?php echo $result_arr['agestart'] ?>" placeholder="Enter agestart">
                    </div>
                    <div class="form-group">
                        <label for="ageend">ageend</label>
                        <input type="text" class="form-control" name="ageend" id="ageend" value="<?php echo $result_arr['ageend'] ?>" placeholder="Enter ageend">
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