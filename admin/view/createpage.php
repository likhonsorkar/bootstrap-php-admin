<?php
    $formerr = "";
    if(isset($_POST['createpage'])){
        // Assuming you have received the title from the form
        $title = $_POST['title'];
        
        // Generate the slug
        $slug =  $title;
      
        $content = $_POST['content'];
        $meta_des = $_POST['meta_des'];
        $tag = $_POST['tag'];
        if(empty($title) || empty($content) || empty($meta_des) || empty($tag)){
            $formerr = "Fill All Fields And Try Again!";
        }else{
            // send data to database
        }
    }
?>
<h1 class="mt-4">Create a new page</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Create a new page </li>
    </ol>

    <?php if(isset($slug)){echo "<a href='$slug'> This is ".$slug." </a>";}?>

    <form action="" method="post">
        <p class="text-danger text-center"><?php echo  $formerr; ?></p>
        <div class="mb-3">
            <label for="title" class="form-label">Page Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Page Content</label>
            <textarea name="content" class="summernote form-control" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="meta_des" class="form-label">Page Meta Description</label>
            <textarea name="meta_des" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Page Tag</label>
            <input name="tag" class="form-control">
        </div>


            <button type="submit" name="createpage" class="btn btn-primary">Create New Page</button>
    </form>

   
