<?php
    $author_id = $_GET['id'];

    $postitems = $obj->author_post_row($author_id);
    $devidednumrows = ($postitems/4)+1;
    if(isset($_GET['pageno'])){
        $pageno = $_GET['pageno'];
        $offset = ($pageno-1) * 4;
        $pagenoplus = $pageno+1;
        $pagenominus = $pageno-1;
        if($pagenominus<1){
            $postlist = $obj->author_post_list(4, 0, $author_id);
        }else{
            $postlist = $obj->author_post_list(4, $offset, $author_id);
        }
    }else{
        $pageno = 1;
        $pagenoplus = $pageno+1;
        $pagenominus = $pageno-1;
        $postlist = $obj->author_post_list(4, 0, $author_id);
    }
?>
<h2 class="text-center h1 mb-2"> User's Posts</h2>
                <?php 
                        if(mysqli_num_rows($postlist)==0){
                            echo "<h6 class='text-center'> No Post Found For this user </h6>";
                        }else{
                            while($data = mysqli_fetch_assoc($postlist)){
                        ?>
                            <!-- blog post Start-->
                        <div class="widget p-3 rounded">
                            <div class="row">
                                <!-- Left Column - Featured Image with Overlay -->
                                <div class="col-lg-6 position-relative">
                                    <img src="images/<?php echo $data['feature_image']; ?>" class="img-fluid" alt="Post Image">
                                    <div class="post-overlay">
                                        <?php 
                                            $cat = $obj->singlecatlist($data['category_id']);
                                            $catdata = mysqli_fetch_assoc($cat);
                                        ?>
                                        <a href="category.php?slug=<?php echo $catdata['slug'] ?>" class="badge bg-success mb-2"><?php echo $catdata['category_name']; ?></a>
                                    </div>
                                </div>
                        
                                <!-- Right Column - Post Title, Date, Summary, Read More -->
                                <div class="col-lg-6">
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
                                            <a href="blog-details.php?slug=<?php echo $data['slug'] ?>" class="btn btn-custom">Read More</a>
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
                        <li class="page-item <?php if($pagenominus<1){echo "disabled"; } ?>">
                            <a class="page-link" href="?id=<?php echo $author_id?>&pageno=<?php echo $pagenominus ?>" tabindex="-1">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <?php
                            for($i=1;$i<=$devidednumrows;$i++){
                                ?>
                                <li class="page-item"><a class="page-link" href="?id=<?php echo $author_id?>&pageno=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php
                            }
                        ?>
                        <li class="page-item <?php if($pagenoplus>$devidednumrows){echo "disabled"; } ?>">
                            <a class="page-link" href="?id=<?php echo $author_id?>&pageno=<?php echo $pagenoplus ?>">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
               