<?php
include("includes/header.php");
?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            foodintake
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">foodintake</a></li>
            <li class="active">foodintake Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/insertChallangesmaster.php" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="url">url</label>
                        <input type="file" class="form-control" name="url" id="url">
                    </div>
                    <div class="form-group">
                        <label for="healthoption">healthoption</label>
                        <select name="healthoption" id="healthoption" class="form-control" require>
                            <option value="">Select Health Option</option>
                            <option value="1">Weight Loss</option>
                            <option value="2">Weight Gain</option>
                            <option value="3">BuildMuscle</option>
                            <option value="4">HomeWorkOut</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">gender</label>
                        <select name="gender" id="gender" class="form-control" require>
                            <option value="">Select gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="IsPregency">IsPregency</label>
                        <select name="IsPregency" id="IsPregency" class="form-control" require>
                            <option value="">Select Pregency</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medicalconditionId">medicalconditionId</label>
                        <input type="text" class="form-control" name="medicalconditionId" id="medicalconditionId" placeholder="Enter medicalconditionId">
                    </div>

                    <div class="form-group">
                        <label for="agestart">agestart</label>
                        <input type="text" class="form-control" name="agestart" id="agestart" placeholder="Enter agestart">
                    </div>

                    <div class="form-group">
                        <label for="ageend">ageend</label>
                        <input type="text" class="form-control" name="ageend" id="ageend" placeholder="Enter ageend">
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