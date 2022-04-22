<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `user_calories` WHERE id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

$queryUs  = "SELECT * FROM `users` WHERE id='" . $result_arr['user_id'] . "'";
$resnumUs = mysqli_query($con, $queryUs);
$result_arrUs = mysqli_fetch_assoc($resnumUs);
?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            User Calories
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User Calories</a></li>
            <li class="active">User Calories Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row"><?php // echo "<pre>";print_r($result_arr); 
                            ?>
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/updateUserCalories.php">
                <div class="box-body">
                    <input type="hidden" name="user_id" value="<?php echo $result_arr['id']; ?>">
                    <!-- <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php // echo $result_arr['name']; 
                                                                                                ?>" placeholder="Enter name">
                    </div> -->
                    <div class="form-group">
                        <label for="date">date</label>
                        <input type="text" class="form-control" name="date" value="<?php echo $result_arr['date']; ?>" id="date" placeholder="date">
                    </div>
                    <div class="form-group">
                        <label for="time">time</label>
                        <input type="text" class="form-control" name="time" id="time" value="<?php echo $result_arr['time']; ?>" placeholder="time">
                    </div>
                    <div class="form-group">
                        <label for="calburn">calburn</label>
                        <input type="text" class="form-control" name="calburn" id="calburn" value="<?php echo $result_arr['calburn']; ?>" placeholder="calburn">
                    </div>
                    <div class="form-group">
                        <label for="caltaken">caltaken</label>
                        <input type="text" class="form-control" name="caltaken" id="caltaken" value="<?php echo $result_arr['caltaken']; ?>" placeholder="caltaken">
                    </div>
                    <div class="form-group">
                        <label for="product">product</label>
                        <input type="text" class="form-control" name="product" id="product" value="<?php echo $result_arr['product']; ?>" placeholder="product">
                    </div>
                    <div class="form-group">
                        <label for="energy">energy</label>
                        <input type="text" class="form-control" name="energy" id="energy" value="<?php echo $result_arr['energy']; ?>" placeholder="energy">
                    </div>
                    <div class="form-group">
                        <label for="currentbmi">currentbmi</label>
                        <input type="text" class="form-control" name="currentbmi" id="currentbmi" value="<?php echo $result_arr['currentbmi']; ?>" placeholder="currentbmi">
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