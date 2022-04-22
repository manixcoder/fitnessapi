<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `users` WHERE id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo BASE_URL; ?>/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>/users.php">Users</a></li>
            <li class="active">Users Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row"><?php // echo "<pre>";print_r($result_arr); 
                            ?>
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/updateUsers.php">
                <div class="box-body">
                    <input type="hidden" name="user_id" value="<?php echo $result_arr['id']; ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $result_arr['name']; ?>" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo $result_arr['firstname']; ?>" id="firstname" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $result_arr['lastname']; ?>" placeholder="lastname">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $result_arr['mobile']; ?>" placeholder="mobile">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Select Gender</option>
                            <option value="M" <?php echo $result_arr['gender'] == 'M'  ? 'selected' : ''?>>Male</option>
                            <option value="F" <?php echo $result_arr['gender'] == 'F'  ? 'selected' : ''?>>Female</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="gender" id="gender" value="<?php echo $result_arr['gender']; ?>" placeholder="gender"> -->
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" name="weight" id="weight" value="<?php echo $result_arr['weight']; ?>" placeholder="weight">
                    </div>
                    <div class="form-group">
                        <label for="goalweight">goalweight</label>
                        <input type="text" class="form-control" name="goalweight" id="goalweight" value="<?php echo $result_arr['goalweight']; ?>" placeholder="goalweight">
                    </div>
                    <div class="form-group">
                        <label for="height">height</label>
                        <input type="text" class="form-control" name="height" id="height" value="<?php echo $result_arr['height']; ?>" placeholder="height">
                    </div>
                    <div class="form-group">
                        <label for="medicalcondition">medicalcondition</label>
                        <input type="text" class="form-control" name="medicalcondition" id="medicalcondition" value="<?php echo $result_arr['medicalcondition']; ?>" placeholder="medicalcondition">
                    </div>
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <input type="text" class="form-control" name="Age" id="Age" value="<?php echo $result_arr['Age']; ?>" placeholder="Age">
                    </div>
                    <div class="form-group">
                        <label for="healthOption">healthOption</label>
                        <input type="text" class="form-control" name="healthOption" value="<?php echo $result_arr['healthOption']; ?>" id="healthOption" placeholder="healthOption">
                    </div>
                    <div class="form-group">
                        <label for="bmi">bmi</label>
                        <input type="text" class="form-control" name="bmi" id="bmi" value="<?php echo $result_arr['bmi']; ?>" placeholder="bmi">
                    </div>
                    <div class="form-group">
                        <label for="GoalStep">GoalStep</label>
                        <input type="text" class="form-control" name="GoalStep" id="GoalStep" value="<?php echo $result_arr['GoalStep']; ?>" placeholder="GoalStep">
                    </div>
                    <div class="form-group">
                        <label for="GoalWater">GoalWater</label>
                        <input type="text" class="form-control" name="GoalWater" id="GoalWater" value="<?php echo $result_arr['GoalWater']; ?>" placeholder="GoalWater">
                    </div>
                    <div class="form-group">
                        <label for="CalGoal">CalGoal</label>
                        <input type="text" class="form-control" name="CalGoal" id="CalGoal" value="<?php echo $result_arr['CalGoal']; ?>" placeholder="CalGoal">
                    </div>
                    <div class="form-group">
                        <label for="Level">Level</label>
                        <input type="text" class="form-control" name="Level" id="Level" value="<?php echo $result_arr['Level']; ?>" placeholder="Level">
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