<?php
include("includes/header.php");
$query  = "SELECT * FROM `user_calories` ORDER BY `id` DESC";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
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
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">User Calories Data Table</h3>
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
                                                    user_name
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    date
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                    calburn
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    caltaken
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    product
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    energy
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    currentbmi
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    step
                                                </th>


                                                <th class="sorting" style="color: red" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            while ($result_arr = mysqli_fetch_assoc($resnum)) {
                                                $query  = "SELECT * FROM `users` WHERE id='".$result_arr['user_id']."'";
                                                $resnumUs = mysqli_query($con, $query);
                                                $result_arrUs = mysqli_fetch_assoc($resnumUs);
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $i; ?></td>
                                                    <td><?php echo $result_arrUs['name']; ?></td>
                                                    <td><?php echo $result_arr['date']; ?></td>
                                                    <td><?php echo $result_arr['calburn']; ?></td>
                                                    <td><?php echo $result_arr['caltaken']; ?></td>
                                                    <td><?php echo $result_arr['product']; ?></td>
                                                    <td><?php echo $result_arr['energy']; ?></td>
                                                    <td><?php echo $result_arr['currentbmi']; ?></td>
                                                    <td><?php echo $result_arr['step']; ?></td>

                                                    <td>
                                                        <a href="<?php echo BASE_URL; ?>/editUserCalories.php?id=<?php echo $result_arr['id']; ?>">Edit</a>|
                                                        <a href="<?php echo BASE_URL; ?>/deleteUserCalories.php?id=<?php echo $result_arr['id']; ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1" style="color: green">Id</th>
                                                <th rowspan="1" colspan="1" style="color: green">name</th>
                                                <th rowspan="1" colspan="1" style="color: green">date</th>
                                                <th rowspan="1" colspan="1" style="color: green">calburn</th>
                                                <th rowspan="1" colspan="1" style="color: green">caltaken</th>
                                                <th rowspan="1" colspan="1" style="color: green">product</th>
                                                <th rowspan="1" colspan="1" style="color: green">energy</th>
                                                <th rowspan="1" colspan="1" style="color: green">currentbmi</th>
                                                <th rowspan="1" colspan="1" style="color: green">step</th>
                                                <th rowspan="1" colspan="1" style="color: rdd">Action</th>
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