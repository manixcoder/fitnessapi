<?php
include("includes/header.php");
$query  = "SELECT * FROM `users` WHERE user_type='2' ORDER BY `users`.`id` DESC";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
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
            <div class="col-xs-12">
                <a href="<?php echo BASE_URL; ?>/addUsers.php" class="add_btn">Add Users</a>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users Data Table</h3>
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
                                                    User Id
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                    Name
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    Email
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                    First Name
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Last Name
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    IsActive
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Mobile
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Gender
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Weight
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Goalweight
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    height
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
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $i; ?></td>
                                                    <td><?php echo $result_arr['name']; ?></td>
                                                    <td><?php echo $result_arr['email']; ?></td>
                                                    <td><?php echo $result_arr['firstname']; ?></td>
                                                    <td><?php echo $result_arr['lastname']; ?></td>
                                                    <td><?php echo $result_arr['IsActive']; ?></td>
                                                    <td><?php echo $result_arr['mobile']; ?></td>
                                                    <td><?php echo $result_arr['gender']; ?></td>
                                                    <td><?php echo $result_arr['weight']; ?></td>
                                                    <td><?php echo $result_arr['goalweight']; ?></td>
                                                    <td><?php echo $result_arr['height']; ?></td>
                                                    <td>

                                                        <a href="<?php echo BASE_URL; ?>/viewUsers.php?id=<?php echo $result_arr['id']; ?>">view</a>|
                                                        <a href="<?php echo BASE_URL; ?>/editUsers.php?id=<?php echo $result_arr['id']; ?>">Edit</a>|
                                                        <a href="<?php echo BASE_URL; ?>/deleteUsers.php?id=<?php echo $result_arr['id']; ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1" style="color: green">Users Id</th>
                                                <th rowspan="1" colspan="1" style="color: green">name</th>
                                                <th rowspan="1" colspan="1" style="color: green">email</th>
                                                <th rowspan="1" colspan="1" style="color: green">firstname</th>
                                                <th rowspan="1" colspan="1" style="color: green">lastname</th>
                                                <th rowspan="1" colspan="1" style="color: green">IsActive</th>
                                                <th rowspan="1" colspan="1" style="color: green">mobile</th>
                                                <th rowspan="1" colspan="1" style="color: green">gender</th>
                                                <th rowspan="1" colspan="1" style="color: green">weight</th>
                                                <th rowspan="1" colspan="1" style="color: green">goalweight</th>
                                                <th rowspan="1" colspan="1" style="color: green">height</th>
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