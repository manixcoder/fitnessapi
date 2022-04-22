<?php
include("config/config.php");
if (!isset($_SESSION['admin_data'])) {
    header("Location: " . BASE_URL . "/index.php");
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
}

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo BASE_URL; ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $adminData['name']; ?></p>
                <a href="#">
                    <i class="fa fa-circle text-success"></i>
                    Online
                </a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/users.php">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/homemaster.php">
                    <span>homemaster</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/caloriesmaster.php">
                    <span>Calories Master</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/foodintake.php">
                    <span>Food In Take</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/challangesmaster.php">
                    <span>Challanges Master</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/healthmaster.php">
                    <span>healthmaster</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/medical_condition_master.php">
                    <span>Medical Condition</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/recipe.php">
                    <span>recipe</span>
                </a>
            </li>

            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/user_calories.php">
                    <span>User Calories</span>
                </a>
            </li>
            <li class=" treeview">
                <a href="<?php echo BASE_URL; ?>/watertracker.php">
                    <span>watertracker</span>
                </a>
            </li>
           
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>