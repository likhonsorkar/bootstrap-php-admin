<div class="widget widget-author">
                    <div class="widget-title">
                        <h3 class="title">Search</h3>
                    </div>
                    <div class="widget-body">
                        <form action="search.php" method="GET">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <button class="btn btn-outline-secondary" type="submit">Go</button>
                            </div>
                        </form>
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

                <div class="widget widget-author">
                    <div class="widget-title">
                        <h3 class="title">Categories</h3>
                    </div>
                    <div class="widget-body">
                        <ul class="d-block" style="list-style:none; margin-left:-20px;">
                            <?php $cat = $obj->categorylist();
                                while($data = mysqli_fetch_assoc($cat)){
                                    $catname = $data['category_name'];
                                    $catslug = $data['slug'];
                                    ?>
                                    <li class="cat-cloud"><a href="category.php?id=<?php echo $catslug ?>"><i class="fa-solid fa-list mr-2"></i> <?php echo $catname ?></a></li>
                                    <?php
                                } 
                            ?>
                        </ul>
                    </div>
                </div>