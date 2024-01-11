<?php
    $postlist = $obj->postlist();
?>
<h2 class="text-center h1 mb-2">Recent Posts</h2>

                <?php 
                        if(mysqli_num_rows($postlist)==0){
                            echo "<h6 class='text-center'> No Post Found </h6>";
                        }else{
                            while($data = mysqli_fetch_assoc($postlist)){
                        ?>
                            <!-- blog post Start-->
                        <div class="shadow-sm pt-3 rounded mb-3">
                            <div class="row">
                                <!-- Left Column - Featured Image with Overlay -->
                                <div class="col-lg-6 mb-4 position-relative">
                                    <img src="images/<?php echo $data['feature_image']; ?>" class="img-fluid" alt="Post Image">
                                    <div class="post-overlay">
                                        <?php 
                                            $cat = $obj->singlecatlist($data['category_id']);
                                            $catdata = mysqli_fetch_assoc($cat);
                                        ?>
                                        <a href="category.php?id=<?php echo $catdata['slug'] ?>" class="badge bg-success mb-2"><?php echo $catdata['category_name']; ?></a>
                                    </div>
                                </div>
                        
                                <!-- Right Column - Post Title, Date, Summary, Read More -->
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                            <h5 class="title">
                                                <?php echo $data['title'] ?>
                                            </h5>
                                            <p class="text">
                                                <small>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <?php $dateString = $data['publication_date'];
                                                        $dateTime = new DateTime($dateString);
                                                        $formattedDate = $dateTime->format('d F Y h:i A');
                                                        echo $formattedDate;?>
                                                </small>
                                            </p>
                                            <p class="text">
                                                <?php
                                                    // Shorten the string to 60 characters
                                                    $shortenedString = substr($data['meta_description'], 0, 60);

                                                    // Add ".." to indicate truncation if the original string is longer than 60 characters
                                                    if (strlen($data['meta_description']) > 60) {
                                                        $shortenedString .= '..';
                                                    }

                                                    echo $shortenedString;
                                                ?>
                                            </p>
                                            <a href="blog-details.php?id=<?php echo $data['slug'] ?>" class="btn btn-custom">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- blog post End-->
                        <?php
                    }
                    }
                 ?>
                 <!-- Pagination -->
                 <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
               