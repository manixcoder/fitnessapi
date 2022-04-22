<?php
include("includes/header.php");


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
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/insertRecipe.php" enctype='multipart/form-data'>
                <div class="box-body">
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
                    </div>

                    <div class="form-group">
                        <label for="instructions">instructions</label>
                        <input type="text" class="form-control" name="instructions" id="instructions" placeholder="Enter instructions">
                    </div>

                    <div class="form-group">
                        <label for="Ingredients1">Ingredients1</label>
                        <input type="text" class="form-control" name="Ingredients1" id="Ingredients1" placeholder="Enter Ingredients1">
                    </div>

                    <div class="form-group">
                        <label for="Ingredients2">Ingredients2</label>
                        <input type="text" class="form-control" name="Ingredients2" id="Ingredients2" placeholder="Enter Ingredients2">
                    </div>

                    <div class="form-group">
                        <label for="Ingredients3">Ingredients3</label>
                        <input type="text" class="form-control" name="Ingredients3" id="Ingredients3" placeholder="Enter Ingredients3">
                    </div>

                    <div class="form-group">
                        <label for="cat">cat</label>
                        <select name="cat" id="cat" class="form-control" require>
                            <option value="">Select category</option>
                            <option value="V">Veg</option>
                            <option value="NV">Non Veg</option>
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