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
        <div class="row">
            <div class="box-body">
                <input type="hidden" name="user_id" value="<?php echo $result_arr['id']; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $result_arr['name']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?php echo $result_arr['firstname']; ?>" id="firstname" disabled>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $result_arr['lastname']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $result_arr['mobile']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender" disabled>
                        <option value="">Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="weight">Weight</label>
                    <input type="text" class="form-control" name="weight" id="weight" value="<?php echo $result_arr['weight']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="goalweight">goalweight</label>
                    <input type="text" class="form-control" name="goalweight" id="goalweight" value="<?php echo $result_arr['goalweight']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="height">height</label>
                    <input type="text" class="form-control" name="height" id="height" value="<?php echo $result_arr['height']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="medicalcondition">medicalcondition</label>
                    <input type="text" class="form-control" name="medicalcondition" id="medicalcondition" value="<?php echo $result_arr['medicalcondition']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="Age">Age</label>
                    <input type="text" class="form-control" name="Age" id="Age" value="<?php echo $result_arr['Age']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="healthOption">healthOption</label>
                    <input type="text" class="form-control" name="healthOption" value="<?php echo $result_arr['healthOption']; ?>" id="healthOption" disabled>
                </div>
                <div class="form-group">
                    <label for="bmi">bmi</label>
                    <input type="text" class="form-control" name="bmi" id="bmi" value="<?php echo $result_arr['bmi']; ?>" placeholder="bmi" disabled>
                </div>
                <div class="form-group">
                    <label for="GoalStep">GoalStep</label>
                    <input type="text" class="form-control" name="GoalStep" id="GoalStep" value="<?php echo $result_arr['GoalStep']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="GoalWater">GoalWater</label>
                    <input type="text" class="form-control" name="GoalWater" id="GoalWater" value="<?php echo $result_arr['GoalWater']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="CalGoal">CalGoal</label>
                    <input type="text" class="form-control" name="CalGoal" id="CalGoal" value="<?php echo $result_arr['CalGoal']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="Level">Level</label>
                    <input type="text" class="form-control" name="Level" id="Level" value="<?php echo $result_arr['Level']; ?>" disabled>
                </div>
            </div>
            <!-- /.box-body -->





            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php
include("includes/footer.php");
?>