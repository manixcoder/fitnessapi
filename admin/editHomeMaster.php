<?php
include("includes/header.php");
$id  = $_GET['id'];
$query  = "SELECT * FROM `homemaster` WHERE Id='" . $id . "' ";
$resnum = mysqli_query($con, $query);
$res    = mysqli_num_rows($resnum);
$result_arr = mysqli_fetch_assoc($resnum);

?>
<div class="content-wrapper" style="min-height: 916.281px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        homemaster
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">homemaster</a></li>
            <li class="active">homemaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row"><?php // echo "<pre>";print_r($result_arr); 
                            ?>
            <form role="form" method="post" action="<?php echo BASE_URL; ?>/updatehomemaster.php">
                <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $result_arr['Id']; ?>">
                    <div class="form-group">
                        <label for="IsAllergiesLink">IsAllergiesLink</label>
                        <input type="text" class="form-control" name="IsAllergiesLink" id="IsAllergiesLink" value="<?php echo $result_arr['IsAllergiesLink']; ?>" placeholder="Enter IsAllergiesLink">
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentLink">IsPregnentLink</label>
                        <input type="text" class="form-control" name="IsPregnentLink" id="IsPregnentLink" value="<?php echo $result_arr['IsPregnentLink']; ?>" placeholder="Enter IsPregnentLink">
                    </div>

                    <div class="form-group">
                        <label for="IsDefaultLink">IsDefaultLink</label>
                        <input type="text" class="form-control" name="IsDefaultLink" id="IsDefaultLink" value="<?php echo $result_arr['IsDefaultLink']; ?>" placeholder="Enter IsDefaultLink">
                    </div>

                    <div class="form-group">
                        <label for="bottomHeader">bottomHeader</label>
                        <input type="text" class="form-control" name="bottomHeader" id="bottomHeader" value="<?php echo $result_arr['bottomHeader']; ?>" placeholder="Enter bottomHeader">
                    </div>

                    <div class="form-group">
                        <label for="bottomNotes">bottomNotes</label>
                        <input type="text" class="form-control" name="bottomNotes" id="bottomNotes" value="<?php echo $result_arr['bottomNotes']; ?>" placeholder="Enter bottomNotes">
                    </div>

                    <div class="form-group">
                        <label for="IsAllergiesBottomHeader">IsAllergiesBottomHeader</label>
                        <input type="text" class="form-control" name="IsAllergiesBottomHeader" id="IsAllergiesBottomHeader" value="<?php echo $result_arr['IsAllergiesBottomHeader']; ?>" placeholder="Enter IsAllergiesBottomHeader">
                    </div>

                    <div class="form-group">
                        <label for="IsAllergiesBottomNotes">IsAllergiesBottomNotes</label>
                        <input type="text" class="form-control" name="IsAllergiesBottomNotes" id="IsAllergiesBottomNotes" value="<?php echo $result_arr['IsAllergiesBottomNotes']; ?>" placeholder="Enter IsAllergiesBottomNotes">
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" placeholder="Enter IsPregnentBottomHeader">
                    </div>
                    
                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" placeholder="Enter IsPregnentBottomHeader">
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" placeholder="Enter IsPregnentBottomHeader">
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" placeholder="Enter IsPregnentBottomHeader">
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomNotes">IsPregnentBottomNotes</label>
                        <input type="text" class="form-control" name="IsPregnentBottomNotes" id="IsPregnentBottomNotes" value="<?php echo $result_arr['IsPregnentBottomNotes']; ?>" placeholder="Enter IsPregnentBottomNotes">
                    </div>

                    <div class="form-group">
                        <label for="healthoption1Link">healthoption1Link</label>
                        <input type="text" class="form-control" name="healthoption1Link" id="healthoption1Link" value="<?php echo $result_arr['healthoption1Link']; ?>" placeholder="Enter healthoption1Link">
                    </div>

                    <div class="form-group">
                        <label for="healthoption2Link">healthoption2Link</label>
                        <input type="text" class="form-control" name="healthoption2Link" id="healthoption2Link" value="<?php echo $result_arr['healthoption2Link']; ?>" placeholder="Enter healthoption2Link">
                    </div>

                    <div class="form-group">
                        <label for="healthoption3Link">healthoption3Link</label>
                        <input type="text" class="form-control" name="healthoption3Link" id="healthoption3Link" value="<?php echo $result_arr['healthoption3Link']; ?>" placeholder="Enter healthoption3Link">
                    </div>

                    <div class="form-group">
                        <label for="healthoption4Link">healthoption4Link</label>
                        <input type="text" class="form-control" name="healthoption4Link" id="healthoption4Link" value="<?php echo $result_arr['healthoption4Link']; ?>" placeholder="Enter healthoption4Link">
                    </div>

                    <div class="form-group">
                        <label for="DateTime">DateTime</label>
                        <input type="text" class="form-control" name="DateTime" id="DateTime" value="<?php echo $result_arr['DateTime']; ?>" placeholder="Enter DateTime">
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