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
            <li><a href="<?php echo BASE_URL; ?>/homemaster.php">homemaster</a></li>
            <li class="active">homemaster Data</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- <form role="form" method="post" action="<?php echo BASE_URL; ?>/updatehomemaster.php"> -->
                <div class="box-body">
                    <input type="hidden" name="id" value="<?php echo $result_arr['Id']; ?>">
                    <div class="form-group">
                        <label for="IsAllergiesLink">IsAllergiesLink</label>
                        <input type="text" class="form-control" name="IsAllergiesLink" id="IsAllergiesLink" value="<?php echo $result_arr['IsAllergiesLink']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentLink">IsPregnentLink</label>
                        <input type="text" class="form-control" name="IsPregnentLink" id="IsPregnentLink" value="<?php echo $result_arr['IsPregnentLink']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsDefaultLink">IsDefaultLink</label>
                        <input type="text" class="form-control" name="IsDefaultLink" id="IsDefaultLink" value="<?php echo $result_arr['IsDefaultLink']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="bottomHeader">bottomHeader</label>
                        <input type="text" class="form-control" name="bottomHeader" id="bottomHeader" value="<?php echo $result_arr['bottomHeader']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="bottomNotes">bottomNotes</label>
                        <input type="text" class="form-control" name="bottomNotes" id="bottomNotes" value="<?php echo $result_arr['bottomNotes']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsAllergiesBottomHeader">IsAllergiesBottomHeader</label>
                        <input type="text" class="form-control" name="IsAllergiesBottomHeader" id="IsAllergiesBottomHeader" value="<?php echo $result_arr['IsAllergiesBottomHeader']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsAllergiesBottomNotes">IsAllergiesBottomNotes</label>
                        <input type="text" class="form-control" name="IsAllergiesBottomNotes" id="IsAllergiesBottomNotes" value="<?php echo $result_arr['IsAllergiesBottomNotes']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomHeader">IsPregnentBottomHeader</label>
                        <input type="text" class="form-control" name="IsPregnentBottomHeader" id="IsPregnentBottomHeader" value="<?php echo $result_arr['IsPregnentBottomHeader']; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="IsPregnentBottomNotes">IsPregnentBottomNotes</label>
                        <input type="text" class="form-control" name="IsPregnentBottomNotes" id="IsPregnentBottomNotes" value="<?php echo $result_arr['IsPregnentBottomNotes']; ?>"  disabled>
                    </div>

                    <div class="form-group">
                        <label for="healthoption1Link">healthoption1Link</label>
                        <input type="text" class="form-control" name="healthoption1Link" id="healthoption1Link" value="<?php echo $result_arr['healthoption1Link']; ?>"  disabled>
                    </div>

                    <div class="form-group">
                        <label for="healthoption2Link">healthoption2Link</label>
                        <input type="text" class="form-control" name="healthoption2Link" id="healthoption2Link" value="<?php echo $result_arr['healthoption2Link']; ?>"  disabled>
                    </div>

                    <div class="form-group">
                        <label for="healthoption3Link">healthoption3Link</label>
                        <input type="text" class="form-control" name="healthoption3Link" id="healthoption3Link" value="<?php echo $result_arr['healthoption3Link']; ?>"  disabled>
                    </div>

                    <div class="form-group">
                        <label for="healthoption4Link">healthoption4Link</label>
                        <input type="text" class="form-control" name="healthoption4Link" id="healthoption4Link" value="<?php echo $result_arr['healthoption4Link']; ?>"  disabled>
                    </div>

                    <div class="form-group">
                        <label for="DateTime">DateTime</label>
                        <input type="text" class="form-control" name="DateTime" id="DateTime" value="<?php echo $result_arr['DateTime']; ?>"  disabled>
                    </div>
                </div>
                <!-- /.box-body -->

                <!-- <div class="box-footer">
                    <button type="submit" name="update" value="update" class="btn btn-primary">Submit</button>
                </div>
            </form> -->



            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<?php
include("includes/footer.php");
?>