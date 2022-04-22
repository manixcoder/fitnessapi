<?php
include("includes/header.php");
$query  = "SELECT * FROM `caloriesmaster` ORDER BY `caloriesmaster`.`item_id` DESC";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
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
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo BASE_URL; ?>/addCaloriesmaster.php"  class="add_btn">Add caloriesmaster</a>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">caloriesmaster Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                    Id
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    item_name
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    qty
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                    cal_value
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    foodintake
                                                </th>


                                                <th class="sorting" style="color: red" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            //echo $res;
                                            //foreach($result_arr as $users)
                                            $i = 1;
                                            while ($result_arr = mysqli_fetch_assoc($resnum)) {
                                                //echo $user_id =  $result_arr['id']."<br>";
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $i; ?></td>
                                                    <td><?php echo $result_arr['item_name']; ?></td>
                                                    <td><?php echo $result_arr['qty']; ?></td>
                                                    <td><?php echo $result_arr['cal_value']; ?></td>
                                                    <td><?php echo $result_arr['foodintake_id']; ?></td>

                                                    <td>
                                                        <a href="<?php echo BASE_URL; ?>/viewCaloriesmaster.php?id=<?php echo $result_arr['item_id']; ?>">View</a>|
                                                        <a href="<?php echo BASE_URL; ?>/editcaloriesmaster.php?id=<?php echo $result_arr['item_id']; ?>">Edit</a>|
                                                        <a href="<?php echo BASE_URL; ?>/deletecaloriesmaster.php?id=<?php echo $result_arr['item_id']; ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1" style="color: green">Id</th>
                                                <th rowspan="1" colspan="1" style="color: green">item_name</th>
                                                <th rowspan="1" colspan="1" style="color: green">qty</th>
                                                <th rowspan="1" colspan="1" style="color: green">cal_value</th>
                                                <th rowspan="1" colspan="1" style="color: green">foodintake_id</th>
                                                <th rowspan="1" colspan="1" style="color: red">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php
include("includes/footer.php");
?>