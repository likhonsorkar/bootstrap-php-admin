<?php
    include_once('functions/functions.php');
    $catlist = $obj->categorylist();
    $formerr =$formsucc = "";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $postlist = $obj->getPostById($id);
        $data = mysqli_fetch_assoc($postlist);
        $title = $data['title'];
        $cat = $data['category_id'];
        $content = $data['content'];
        $meta_des = $data['meta_description'];
        $tag = $data['tags'];
    }
    if(isset($_POST['updatepost'])){
        // Assuming you have received the title from the form
        $stitle = $_POST['title']; 
        $scat = $_POST['category'];
        $scontent = $_POST['content'];
        $stag = $_POST['tag'];
        $smeta = $_POST['meta_des'];
        if(empty($stitle) || empty($scontent) || empty($stag)){
            $formerr = "Fill All Fields And Try Again!";
        }else{
            // Update data in the database
            $sql = "UPDATE blog_posts SET 
                    title = '$stitle', 
                    content = '$scontent', 
                    category_id = $scat, 
                    tags = '$stag', 
                    meta_description = '$smeta'
                    WHERE post_id = $id";

            if (mysqli_query($obj->conn, $sql)) {
                $formsucc = "Post updated successfully!";
                // You can redirect the user to the updated post or any other page if needed
            } else {
                $formerr = "Error updating post: " . mysqli_error($obj->conn);
            }
        }
    }

?>
<h1 class="mt-4">Update Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Update Post </li>
    </ol>

    <form action="" method="post">
        <p class="text-success text-center"><?php echo  $formsucc; ?></p>
        <p class="text-danger text-center"><?php echo  $formerr; ?></p>
        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea name="content" class="summernote form-control" rows="10"><?php echo $content; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Post Category</label>
            <select name="category" class="form-control selectpicker" data-live-search="true" style="z-index: 99999;">
                <option value="">Select Category</option>
                <?php
                while ($data1 = mysqli_fetch_assoc($catlist)) {
                  ?> <option value="<?php echo $data1['category_id']; ?>" <?php if($data1['category_id'] == $cat) echo "selected"; ?>><?php echo $data1['category_name'];?></option> 
                  <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="meta_des" class="form-label">Page Meta Description</label>
            <textarea name="meta_des" class="form-control" rows="3"><?php echo $meta_des ?></textarea>
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Post Tag</label>
            <input name="tag" class="form-control" value="<?php echo $tag ?>">
        </div>


            <button type="submit" name="updatepost" class="btn btn-primary">Update Post</button>
    </form>

   
