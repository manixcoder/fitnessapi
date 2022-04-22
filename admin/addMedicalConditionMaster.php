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
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/insertMedicalConditionMaster.php" enctype='multipart/form-data'>
                <div class="box-body">
                    
                    <div class="form-group">
                        <label for="MC">MC</label>
                        <input type="text" class="form-control" name="MC" id="MC" placeholder="Enter MC">
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