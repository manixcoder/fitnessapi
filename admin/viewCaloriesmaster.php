<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `caloriesmaster` WHERE item_id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

$query  = "SELECT * FROM `foodintake`";
$resnumfoodintake = mysqli_query($con, $query);


?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            caloriesmaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>/caloriesmaster.php">caloriesmaster</a></li>
            <li class="active">caloriesmaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box-body">
                <input type="hidden" name="item_id" value="<?php echo $result_arr['item_id']; ?>">
                <div class="form-group">
                    <label for="item_name">item_name</label>
                    <input type="text" class="form-control" name="item_name" id="item_name" value="<?php echo $result_arr['item_name']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="qty">qty</label>
                    <input type="text" class="form-control" name="qty" value="<?php echo $result_arr['qty']; ?>" id="qty" disabled>
                </div>
                <div class="form-group">
                    <label for="cal_value">cal_value</label>
                    <input type="text" class="form-control" name="cal_value" id="cal_value" value="<?php echo $result_arr['cal_value']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="foodintake_id">foodintake_id</label>
                    <select name="foodintake_id" id="foodintake_id" class="form-control" disabled>
                        <option value="">Select Foodin Take</option>
                        <?php while ($resfoodintake = mysqli_fetch_assoc($resnumfoodintake)) { ?>
                            <option value="<?php echo $resfoodintake['id']; ?>" <?php if ($resfoodintake['id'] == $result_arr['foodintake_id']) echo "selected"; ?>><?php echo $resfoodintake['name'] ?></option>
                        <?php } ?>
                    </select>

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