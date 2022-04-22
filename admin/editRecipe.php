<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `recipe` WHERE Id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

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
        <div class="row"><?php // echo "<pre>";print_r($result_arr); 
                            ?>
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/updateRecipe.php">
                <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $result_arr['id']; ?>">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $result_arr['name']; ?>" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" name="description" id="description" value="<?php echo $result_arr['description']; ?>" placeholder="Enter description">
                    </div>

                    <div class="form-group">
                        <label for="instructions">instructions</label>
                        <input type="text" class="form-control" name="instructions" id="instructions" value="<?php echo $result_arr['instructions']; ?>" placeholder="Enter instructions">
                    </div>

                    <div class="form-group">
                        <label for="Ingredients1">Ingredients1</label>
                        <input type="text" class="form-control" name="Ingredients1" id="Ingredients1" value="<?php echo $result_arr['Ingredients1']; ?>" placeholder="Enter Ingredients1">
                    </div>

                    <div class="form-group">
                        <label for="Ingredients2">Ingredients2</label>
                        <input type="text" class="form-control" name="Ingredients2" id="Ingredients2" value="<?php echo $result_arr['Ingredients2']; ?>" placeholder="Enter Ingredients2">
                    </div>

                    <div class="form-group">
                        <label for="Ingredients3">Ingredients3</label>
                        <input type="text" class="form-control" name="Ingredients3" id="Ingredients3" value="<?php echo $result_arr['Ingredients3']; ?>" placeholder="Enter Ingredients3">
                    </div>

                    <div class="form-group">
                        <label for="cat">cat</label>
                        <select name="cat" id="cat" class="form-control" require>
                            <option value="">Select category</option>
                            <option value="V">Veg</option>
                            <option value="NV">Non Veg</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="cat" id="cat" value="<?php echo $result_arr['cat']; ?>" placeholder="Enter cat"> -->
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