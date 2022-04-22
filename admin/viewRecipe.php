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
            <li><a href="<?php echo BASE_URL; ?>/recipe.php">recipe</a></li>
            <li class="active">recipe Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box-body">
                <input type="hidden" name="id" value="<?php echo $result_arr['id']; ?>">
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $result_arr['name']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" name="description" id="description" value="<?php echo $result_arr['description']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="instructions">instructions</label>
                    <input type="text" class="form-control" name="instructions" id="instructions" value="<?php echo $result_arr['instructions']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="Ingredients1">Ingredients1</label>
                    <input type="text" class="form-control" name="Ingredients1" id="Ingredients1" value="<?php echo $result_arr['Ingredients1']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="Ingredients2">Ingredients2</label>
                    <input type="text" class="form-control" name="Ingredients2" id="Ingredients2" value="<?php echo $result_arr['Ingredients2']; ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="Ingredients3">Ingredients3</label>
                    <input type="text" class="form-control" name="Ingredients3" id="Ingredients3" value="<?php echo $result_arr['Ingredients3']; ?>" disabled>
                </div>
                <div class="form-group">
                    
                    <img src="<?php echo $result_arr['image']; ?>" style="width: 150px;hieght=150px;">
                </div>

                <div class="form-group">
                    <label for="cat">cat</label>
                    <select name="cat" id="cat" class="form-control"  disabled>
                        <option value="">Select category</option>
                        <option value="V" <?php if( $result_arr['foodintake_id'] =='V') echo"selected"; ?>>Veg</option>
                        <option value="NV" <?php if($result_arr['foodintake_id'] =='NV') echo"selected"; ?>>Non Veg</option>
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