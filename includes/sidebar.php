<div class="widget widget-author">
                    <div class="widget-title">
                        <h3 class="title">Search</h3>
                    </div>
                    <div class="widget-body">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-outline-secondary" type="button">Go</button>
                            </div>
                        </form>
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

    
                <!-- Trending Post -->
                <div class="widget widget-post">
                    <div class="widget-title">
                        <h3>Trending Now</h3>
                    </div>
                    <div class="widget-body">

                    </div>
                </div>
                <!-- End Trending Post -->
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Latest Post</h3>
                    </div>
                    <div class="widget-body">
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        Rachel Roth
                                    </a>
                                    <a class="date" href="#">
                                        26 FEB 2020
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        Rachel Roth
                                    </a>
                                    <a class="date" href="#">
                                        26 FEB 2020
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                        Rachel Roth
                                    </a>
                                    <a class="date" href="#">
                                        26 FEB 2020
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="https://www.bootdey.com/image/400x200/FFB6C1/000000" title="" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Author -->
                <div class="widget widget-post">
                    <div class="widget-title">
                        <h3>Top 10 Author</h3>
                    </div>
                    <div class="widget-body">
                        <ul>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <li>Author</li>
                            <!-- Add more popular posts as needed -->
                        </ul>
                    </div>
                </div>

                 <!-- Top Author -->
                 <div class="widget widget-post">
                    <div class="widget-title">
                        <h3>Archive</h3>
                    </div>
                    <div class="widget-body">
                        <ul>
                            <li>January 2024</li>
                            <li>December 2023</li>
                            <!-- Add more archive months as needed -->
                        </ul>
                    </div>
                </div>
    
                 <!-- widget Tags -->
                 <div class="widget widget-tags">
                    <div class="widget-title">
                        <h3>Latest Tags</h3>
                    </div>
                    <div class="widget-body">
                        <div class="nav tag-cloud">
                            <a href="#">Design</a>
                            <a href="#">Development</a>
                            <a href="#">Travel</a>
                            <a href="#">Web Design</a>
                            <a href="#">Marketing</a>
                            <a href="#">Research</a>
                            <a href="#">Managment</a>
                        </div>
                    </div>
                </div>
                <!-- End widget Tags -->