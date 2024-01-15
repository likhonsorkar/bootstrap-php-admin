<?php
    include_once('database.php');
    $obj = new database();
    if (isset($_GET['slug'])){
       $query = $obj->postbyslug($_GET['slug']);
       $data = mysqli_fetch_assoc($query); 
       $obj->postviewscount($data['post_views'], $data['post_id']);
       $author_query = $obj->authordetails($data['author_id']);
       $author_data = mysqli_fetch_assoc($author_query); 

       $author_fname = $author_data['fname'];
       $author_lname = $author_data['lname'];
       $author_fullname = $author_fname." ".$author_lname;
       $author_profile = $author_data['profile_img'];
       $author_bio = $author_data['profile_bio'];
       $author_id = $author_data['id'];
       $author_badge = $author_data['badge'];
       $obj = new database();
        $pagetitle = $data['title'];
        $pagedes = $data['meta_description'];
        $pagethumb = "images/".$data['feature_image'];
        $pagetag = $data['tags'];
        $pageauthor = $author_fullname;
    }
    include_once ('includes/head.php'); 
?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 widget p-3">
                <h1 style="color:#45526e"><?php echo $data['title'] ?></h1>
                <p><?php echo $data['meta_description'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="widget post-details p-3">
                    <div class="featured_image mb-2 border">
                        <img class="img-fluid w-100" src="images/<?php echo $data['feature_image']; ?>" alt="featured-image">
                    </div>
                    <h4 class="h6">
                    <?php 
                        $cat = $obj->singlecatlist($data['category_id']);
                        $catdata = mysqli_fetch_assoc($cat);
                    ?>
                        <a href="category.php?slug=<?php echo $catdata['slug'] ?>&catname=<?php echo $catdata['category_name']; ?>" class="text-warning text-uppercase"><?php echo $catdata['category_name']; ?></a>
                    </h4>
                    <h2 class="h3" style="color:#45526e"><?php echo $data['title'] ?></h2>
                    <ul class="post-info">
                        <li><a href="profile.php?id=<?php echo $author_id;?>"><?php echo $author_fullname;
                        // Profile Badge
                        if($author_badge != null){
                            ?>
                                <i class="fa-solid fa-circle-check text-<?php echo $author_badge; ?>"></i></a></h3>
                            <?php
                        }else{
                            
                        }
                    ?>
                    </a></li>
                        <li>
                        <?php $dateString = $data['publication_date'];
                            $dateTime = new DateTime($dateString);
                            $formattedDate = $dateTime->format('d F Y h:i A');
                            echo $formattedDate;
                        ?>
                        </li>
                        <li><?php if($data['post_views'] == null){
                            echo 1;
                        } else{
                            echo $data['post_views'];
                        } ?> Views</li>
                    </ul>

                    <div class="blogpost text-justify">
                        <?php echo $data['content'] ?>
                        <div class="nav tag-cloud">
                           
                            <?php
                                $tags = $data['tags'];
                                if ($tags != ""){
                                ?>
                                     <a href="search.php?q=">Tags:</a> 
                                <?php
                                // Explode the tags string into an array
                                $tagArray = explode(',', $tags);

                                // Iterate through the tags and display them as links
                                foreach ($tagArray as $tag) {
                                    $tag = trim($tag); // Remove any leading or trailing whitespaces
                                    ?>
                                     <a href="search.php?q=<?php echo $tag ?>"> <?php echo $tag ?> </a>  
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>

                        <div class="author-details bg-light p-4 mt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Profile Photo Rounded -->
                                        <img src="images/<?php echo $author_profile; ?>" alt="Author Photo" class="img-fluid rounded-circle">
                                    </div>
                                    <div class="col-md-9">
                                        <!-- Name with Profile Link -->
                                        <h3><a href="profile.php?id=<?php echo $author_id ?>" style="color: #45526e;"><strong id="author_name"><?php echo $author_fullname;?></strong> 
                                        <?php
                                            // Profile Badge
                                            if($author_badge != null){
                                                ?>
                                                 <i class="fa-solid fa-circle-check text-<?php echo $author_badge; ?>"></i></a></h3>
                                                <?php
                                            }else{

                                            }
                                        ?>
                                       
                                        
                                        <!-- Profile Bio -->
                                        <h6>
                                            <?php 
                                               echo  $author_bio;
                                            ?>
                                        </h6>
  
                                    </div>

                                    <!-- Share Now Heading -->
                                    <h5 class="mt-3">SHARE NOW</h5>

                                    <!-- Share Buttons -->
                                    <div class="d-flex">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=your-website-url" target="_blank" class="btn btn-primary me-3"><i class="fab fa-facebook"></i></a>
                                        <a href="https://www.youtube.com/share?url=your-website-url" target="_blank" class="btn btn-danger me-3"><i class="fab fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/share?url=your-website-url" target="_blank" class="btn btn-warning me-3"><i class="fab fa-instagram"></i></a>
                                        <a href="https://twitter.com/share?url=your-website-url" class="btn btn-info me-3"><i class="fa-brands fa-x-twitter"></i></a>
                                        <a href="#" class="btn btn-secondary"><i class="fas fa-globe"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar -->
                <?php include_once('includes/sidebar.php'); ?>  
            </div>
        </div>
    </div>
    <!-- recent post end -->
    
    <div class="featured-post">
         <!-- Featured Post Start -->
            <?php include_once ('includes/fetured_post.php'); ?>
        <!-- Featured Post end -->
    </div>

    
<?php include_once('includes/footer.php'); ?>