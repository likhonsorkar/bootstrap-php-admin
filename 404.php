<?php 
include_once('database.php');
$obj = new database();
$pagetitle = "404 not found - ubloging";
$pagedes = "404 not found - Ubloging is a blog website";
$pagethumb = "admin/site/logo.png";
$pagetag = "Ubloging, Blog Website";
$pageauthor = "Md. Likhon Sorkar";
include_once ('includes/head.php'); 
?>

    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <!-- Start 404 -->
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <div class="text-center">
                        <h1 class="display-1 fw-bold">404</h1>
                        <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                        <p class="lead">
                            The page you’re looking for doesn’t exist.
                        </p>
                        <a href="<?php echo $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'];?>" class="btn btn-primary">Go Home</a>
                    </div>
                </div>
                <!-- end 404 -->
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