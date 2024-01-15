<?php 
include_once('database.php');
$obj = new database();
include_once ('includes/head.php'); 
?>

    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <!-- recent Post start -->
                <?php include_once('includes/category_post.php'); ?>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar -->
                <?php include_once('includes/sidebar.php'); ?>  
            </div>
        </div>
    </section>
    <!-- recent post end -->

     <!-- Featured Post Start -->
     <?php include_once ('includes/fetured_post.php'); ?>
    <!-- Featured Post end -->

<?php include_once('includes/footer.php'); ?>