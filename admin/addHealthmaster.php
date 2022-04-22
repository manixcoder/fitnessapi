<?php
include("includes/header.php");
?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            healthmaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">healthmaster</a></li>
            <li class="active">healthmaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/inserthealthmaster.php" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="heading">heading</label>
                        <input type="text" class="form-control" name="heading" id="heading">
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