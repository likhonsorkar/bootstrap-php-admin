<?php 
include_once('database.php');
$obj = new database();
include_once ('includes/head.php'); 
    $author_query = $obj->authordetails($_GET['id']);
    $author_data = mysqli_fetch_assoc($author_query); 
    $author_fname = $author_data['fname'];
    $author_lname = $author_data['lname'];
    $author_fullname = $author_fname." ".$author_lname;
    $author_profile = $author_data['profile_img'];
    $author_bio = $author_data['profile_bio'];
    $author_id = $author_data['id'];
    $author_badge = $author_data['badge'];
?>
    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-4">
                <!-- Sidebar -->
                <?php include_once('includes/profile_sidebar.php'); ?>
            </div>
            <div class="col-lg-8">
                <!-- recent Post start -->
                <?php include_once('includes/profile_post.php'); ?>
            </div>
        </div>
    </section>
    <!-- recent post end -->
     <!-- Featured Post Start -->
     <?php include_once ('includes/fetured_post.php'); ?>
    <!-- Featured Post end -->
<?php include_once('includes/footer.php'); ?>