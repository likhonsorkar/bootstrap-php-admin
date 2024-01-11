<div class="widget widget-author">
    <div class="widget-title">
        <h3 class="title">Profile Info</h3>
    </div>
    <div class="widget-body">
        <div class="img-fluid">
            <img max-width="300px" max-height="300px" class="rounded-circle" src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/86b6a158e4ad032bedacf8534870cf65-1669782541463/34345acb-0c1e-4680-9e9d-aa47a53d879a.jpg" alt="">
        </div>
    </div>
</div>
<div class="widget widget-author">
    <div class="widget-title">
        <h3 class="title">Intro</h3>
    </div>
    <div class="widget-body">
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus numquam, veritatis enim modi totam quis officia asperiores iure perspiciatis nesciunt. </p>
        <div class="bio mt-3">
            <h1 class="h5" style="color: #45526e;"><strong id="author_name">MD. LIKHON SORKAR</strong> <i class="fa-solid fa-circle-check text-info"></i></h1>
            <h5 class="h6">Email :<span id="author_name">Author@gmail.com</span></h5>
            <h5 class="h6"><strong id="author_name"></strong></h5>
            <h5 class="h6"> City : <span id="author_name">Dhaka</span></h5> 
            <h5 class="h6"> Country : <span id="author_name">Bangladesh</span></h5>
        </div>
    </div>
</div>


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