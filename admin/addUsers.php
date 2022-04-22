<?php
include("includes/header.php");
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
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/insertUsers.php">
                <div class="box-body">
                    <input type="hidden" name="user_id" value="<?php echo $result_arr['id']; ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="Email">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="text" class="form-control" name="weight" id="weight" placeholder="weight">
                    </div>
                    <div class="form-group">
                        <label for="goalweight">goalweight</label>
                        <input type="text" class="form-control" name="goalweight" id="goalweight" placeholder="goalweight">
                    </div>
                    <div class="form-group">
                        <label for="height">height</label>
                        <input type="text" class="form-control" name="height" id="height" placeholder="height">
                    </div>
                    <div class="form-group">
                        <label for="medicalcondition">medicalcondition</label>
                        <input type="text" class="form-control" name="medicalcondition" id="medicalcondition" placeholder="medicalcondition">
                    </div>
                    <div class="form-group">
                        <label for="Age">Age</label>
                        <select name="Age" id="Age" class="form-control">
                            <option value="">Select Age</option>
                            <?php
                            for ($i = 10; $i <= 100; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?> Years</option>
                            <?php }
                            ?>
                            </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="healthOption">healthOption</label>
                        <input type="text" class="form-control" name="healthOption" id="healthOption" placeholder="healthOption">
                    </div>
                    <div class="form-group">
                        <label for="bmi">bmi</label>
                        <input type="text" class="form-control" name="bmi" id="bmi" placeholder="bmi">
                    </div>
                    <div class="form-group">
                        <label for="GoalStep">GoalStep</label>
                        <input type="text" class="form-control" name="GoalStep" id="GoalStep" placeholder="GoalStep">
                    </div>
                    <div class="form-group">
                        <label for="GoalWater">GoalWater</label>
                        <input type="text" class="form-control" name="GoalWater" id="GoalWater" placeholder="GoalWater">
                    </div>
                    <div class="form-group">
                        <label for="CalGoal">CalGoal</label>
                        <input type="text" class="form-control" name="CalGoal" id="CalGoal" placeholder="CalGoal">
                    </div>
                    <div class="form-group">
                        <label for="Level">Level</label>
                        <input type="text" class="form-control" name="Level" id="Level" placeholder="Level">
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