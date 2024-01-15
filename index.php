<?php 
include_once('database.php');
$obj = new database();
$pagetitle = "ubloging";
$pagedes = "Ubloging is a blog website";
$pagethumb = "admin/site/logo.png";
$pagetag = "Ubloging, Blog Website";
$pageauthor = "Md. Likhon Sorkar";
include_once ('includes/head.php'); 
?>

    <!-- Featured Post Start -->
    <?php include_once ('includes/fetured_post.php'); ?>
    <!-- Featured Post end -->

    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <!-- recent Post start -->
                <?php include_once('includes/recent_post.php'); ?>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar -->
                <?php include_once('includes/sidebar.php'); ?>  
            </div>
        </div>
    </section>
    <!-- recent post end -->
<?php 
include_once('includes/footer.php'); 
?>