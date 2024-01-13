<div class="widget widget-author">
    <div class="widget-title">
        <h3 class="title">Profile Info</h3>
    </div>
    <div class="widget-body">
        <div class="img-fluid">
            <img max-width="300px" max-height="300px" class="rounded-circle" src="images/<?php echo $author_profile; ?>" alt="<?php echo $author_fullname; ?>">
        </div>
    </div>
</div>
<div class="widget widget-author">
    <div class="widget-title">
        <h3 class="title">Intro</h3>
    </div>
    <div class="widget-body">
        <div class="bio">
                <h1 class="h3" style="color: #45526e;"><?php echo $author_fullname;
                        // Profile Badge
                        if($author_badge != null){
                            ?>
                                <i class="fa-solid fa-circle-check text-<?php echo $author_badge; ?>"></i></a></h3>
                            <?php
                        }else{
                            
                        }
                    ?>
                </h1>
        </div>
        <p> <?php echo $author_bio; ?></p>
    </div>
</div>


    <!-- Trending Post -->
    <div class="widget widget-latest-post">
        <div class="widget-title">
            <h3>Trending Post</h3>
        </div>
        <div class="widget-body">

            <?php
                $postlist = $obj->postlist(5,0);
                if(mysqli_num_rows($postlist)==0){
                    echo "<h6 class='text-center'> No Post Found </h6>";
                }else{
                    while($data = mysqli_fetch_assoc($postlist)){
                ?>
                <div class="latest-post-aside media">
                    <div class="lpa-left media-body">
                        <div class="lpa-title">
                            <h5><a href="blog-details.php?slug=<?php echo $data['slug'] ?>"> <?php echo $data['title'] ?> </a></h5>
                        </div>
                        <div class="lpa-meta">
                            <a class="name" href="blog-details.php?slug=<?php echo $data['slug'] ?>">
                                <?php 
                                    $cat = $obj->singlecatlist($data['category_id']);
                                    $catdata = mysqli_fetch_assoc($cat);
                                    echo $catdata['category_name']; 
                                ?>
                            </a>
                            <a class="date " href="blog-details.php?slug=<?php echo $data['slug'] ?>">
                            <?php $dateString = $data['publication_date'];
                                            $dateTime = new DateTime($dateString);
                                            $formattedDate = $dateTime->format('d F Y');
                                            echo $formattedDate;
                            ?>
                            </a>
                        </div>
                    </div>
                    <div class="lpa-right">
                        <a href="blog-details.php?slug=<?php echo $data['slug'] ?>">
                            <img src="images/<?php echo $data['feature_image']; ?>" title="" alt="">
                        </a>
                    </div>
                </div>
                <?php
                    }
                }
            ?>
            
        </div>
    </div>