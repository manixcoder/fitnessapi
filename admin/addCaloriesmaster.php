<?php
include("includes/header.php");
$query  = "SELECT * FROM `foodintake`";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            caloriesmaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">caloriesmaster</a></li>
            <li class="active">caloriesmaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row"><?php // echo "<pre>";print_r($result_arr); 
                            ?>
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/insertCaloriesmaster.php">
                <div class="box-body">
                    <div class="form-group">
                        <label for="item_name">item_name</label>
                        <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter item_name">
                    </div>
                    <div class="form-group">
                        <label for="qty">qty</label>
                        <input type="text" class="form-control" name="qty" id="qty" placeholder="qty">
                    </div>
                    <div class="form-group">
                        <label for="cal_value">cal_value</label>
                        <input type="text" class="form-control" name="cal_value" id="cal_value" placeholder="cal_value">
                    </div>
                    <div class="form-group">
                        <label for="foodintake_id">foodintake_id</label>
                        <select name="foodintake_id" id="foodintake_id" class="form-control">
                            <option value="">Select Foodin Take</option>
                            <?php while ($result_arr = mysqli_fetch_assoc($resnum)) { ?>
                                <option value="<?php echo $result_arr['id'] ?>"><?php echo $result_arr['name'] ?></option>
                            <?php } ?>
                        </select>

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