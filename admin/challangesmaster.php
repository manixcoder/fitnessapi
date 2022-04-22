<?php
include("includes/header.php");
$query  = "SELECT * FROM `challangesmaster`  ORDER BY `challangesmaster`.`id` DESC";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        challangesmaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">challangesmaster</a></li>
            <li class="active">challangesmaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <a href="<?php echo BASE_URL; ?>/addChallangesmaster.php"  class="add_btn">Add challangesmaster</a>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">challangesmaster Data Table</h3>
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
                                                url
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                healthoption
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                gender
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                IsPregency
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                medicalconditionId
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                agestart
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                ageend
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
                                                    <td><img src="<?php echo $result_arr['url']; ?>" style="width:100px;hieght:46px;" ></td>
                                                    <td><?php echo $result_arr['healthoption']; ?></td>
                                                    <td><?php echo $result_arr['gender']; ?></td>
                                                    <td><?php echo $result_arr['IsPregency']; ?></td>
                                                    <td><?php echo $result_arr['medicalconditionId']; ?></td>
                                                    <td><?php echo $result_arr['agestart']; ?></td>
                                                    <td><?php echo $result_arr['ageend']; ?></td>
                                                    
                                                    <td>
                                                        <a href="<?php echo BASE_URL; ?>/editChallangesmaster.php?id=<?php echo $result_arr['id'];?>">Edit</a>|
                                                        <a href="<?php echo BASE_URL; ?>/deleteChallangesmaster.php?id=<?php echo $result_arr['id'];?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                            } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th rowspan="1" colspan="1" style="color: green">Id</th>
                                                <th rowspan="1" colspan="1" style="color: green">url</th>
                                                <th rowspan="1" colspan="1" style="color: green">healthoption</th>
                                                <th rowspan="1" colspan="1" style="color: green">gender</th>
                                                <th rowspan="1" colspan="1" style="color: green">IsPregency</th>
                                                <th rowspan="1" colspan="1" style="color: green">medicalconditionId</th>
                                                <th rowspan="1" colspan="1" style="color: green">agestart</th>
                                                <th rowspan="1" colspan="1" style="color: green">ageend</th>
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