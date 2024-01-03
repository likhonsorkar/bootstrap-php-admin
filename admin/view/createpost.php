<?php
    $formerr = "";
    if(isset($_POST['createpage'])){
        // Assuming you have received the title from the form
        $title = $_POST['title'];
        
        // Generate the slug
        $slug =  $title;
        $cat = $_POST['category'];
      
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
<h1 class="mt-4">Create a new Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Create a Post </li>
    </ol>

    <form action="" method="post">
        <p class="text-danger text-center"><?php echo  $formerr; ?></p>
        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea name="content" class="summernote form-control" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Post Category</label>
            <select name="category" class = "form-control">
                <option value="">Select Category</option>
                <option value="1">Category One</option>
                <option value="2">Category Two</option>
                <option value="3">Category Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="meta_des" class="form-label">Page Meta Description</label>
            <textarea name="meta_des" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Post Tag</label>
            <input name="tag" class="form-control">
        </div>


            <button type="submit" name="createpage" class="btn btn-primary">Create New Page</button>
    </form>

   
