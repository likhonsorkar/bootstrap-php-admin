<?php
    $query = $obj->featuredpost();

?>
<section id="blogslider" class="mt-8">
        <h2 class="text-center m-4 h1">Featured Post</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider" class="owl-carousel">
                        <?php 
                            while($data = mysqli_fetch_assoc($query)){
                                $featured_image = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME']."/"."images/".$data['feature_image'];
                                $post_title = $data['title'];
                                $post_date = $data['publication_date'];
                                ?>
                                    <div class="post-slide">
                                        <div class="post-img">
                                            <img src="<?php echo $featured_image ?>" alt="">
                                        </div>
                                        <h3 class="post-title">
                                            <a href="<?php echo $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'];?>/blog/<?php echo $data['slug'] ?>"><?php echo $post_title ?></a>
                                        </h3>
                                        <span class="post-date">
                                        <?php 
                                            $dateString = $post_date;
                                            $dateTime = new DateTime($dateString);
                                            $formattedDate = $dateTime->format('d F Y');
                                            echo $formattedDate;
                                        ?></span>
                                    </div>

                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>