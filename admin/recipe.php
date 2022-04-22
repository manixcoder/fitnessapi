<?php
include("includes/header.php");
$query  = "SELECT * FROM `recipe`  ORDER BY `recipe`.`id` DESC";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            recipe
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">recipe</a></li>
            <li class="active">recipe Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo BASE_URL; ?>/addRecipe.php"  class="add_btn">Add Recipe</a>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">recipe Data Table</h3>
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
                                                    name
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                    description
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                    instructions
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Ingredients1
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Ingredients2
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    Ingredients3
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    image
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    cat
                                                </th>
                                                <th class="sorting" style="color: green" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                    createdby
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
                                                $queryusers  = "SELECT * FROM `users` WHERE id='" . $result_arr['createdby'] . "';";
                                                $resnumusers = mysqli_query($con, $queryusers);
                                                $resultusers = mysqli_fetch_assoc($resnumusers)
                                            ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $i; ?></td>
                                                    <td><?php echo substr($result_arr['name'], 0, 25) . '... ';  ?></td>
                                                    <td><?php echo substr($result_arr['description'], 0, 25) . '... ';  ?></td>
                                                    <td><?php echo substr($result_arr['instructions'], 0, 25) . '... ';  ?></td>
                                                    <td><?php echo substr($result_arr['Ingredients1'], 0, 25) . '... ';  ?></td>
                                                    <td><?php echo substr($result_arr['Ingredients2'], 0, 25) . '... ';  ?></td>
                                                    <td><?php echo substr($result_arr['Ingredients3'], 0, 25) . '... ';  ?></td>
                                                    <td><img src="<?php echo $result_arr['image']; ?>" style="width: 150px;hieght=150px;"></td>
                                                    <td><?php if ($result_arr['cat'] == 'V') {
                                                            echo "vegetarian";
                                                        } else {
                                                            echo "Non vegetarian ";
                                                        }    ?></td>
                                                    <td><?php echo $resultusers['name'];  ?></td>

                                                    <td>
                                                        <a href="<?php echo BASE_URL; ?>/viewRecipe.php?id=<?php echo $result_arr['id']; ?>">View</a>|
                                                        <a href="<?php echo BASE_URL; ?>/editRecipe.php?id=<?php echo $result_arr['id']; ?>">Edit</a>|
                                                        <a href="<?php echo BASE_URL; ?>/deleteRecipe.php?id=<?php echo $result_arr['id']; ?>">Delete</a>
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
                                                <th rowspan="1" colspan="1" style="color: green">description</th>
                                                <th rowspan="1" colspan="1" style="color: green">instructions</th>
                                                <th rowspan="1" colspan="1" style="color: green">Ingredients1</th>
                                                <th rowspan="1" colspan="1" style="color: green">Ingredients2</th>
                                                <th rowspan="1" colspan="1" style="color: green">Ingredients3</th>
                                                <th rowspan="1" colspan="1" style="color: green">image</th>
                                                <th rowspan="1" colspan="1" style="color: green">cat</th>
                                                <th rowspan="1" colspan="1" style="color: green">createdby</th>
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