<?php
include_once('functions/functions.php');

$formerr = $formsucces = "";

if (isset($_POST['createpost'])) {
    $title = $_POST['title'];
    $slug = generateSlug($title);
    $cat = $_POST['category'];
    $content = $_POST['content'];
    $meta_des = $_POST['meta_des'];
    $tags = $_POST['tag'];
    $imgtmpname = $_FILES['featured_image']['tmp_name'];
    $target_file = "../images/" . $_FILES["featured_image"]["name"];
    $filesql = $_FILES["featured_image"]["name"];
    $uploadOk = 1;

    if (empty($title) || empty($content) || empty($meta_des) || empty($tags) || empty($meta_des) || $uploadOk != 1) {
        $formerr = "Fill All Fields And Try Again!";
    } else {
        $sql = "INSERT INTO blog_posts (title,content,meta_description,author_id,category_id,feature_image,publication_date,tags,slug)
                VALUES ('$title', '$content','$meta_des', 1, $cat, '$filesql', current_timestamp(), '$tags', '$slug')";

        if (mysqli_query($obj->conn, $sql)) {
            move_uploaded_file($imgtmpname, $target_file);
            $formsucces = "New Post Added Successfully";
        } else {
            $formerr = "Failed to add new post";
        }
    }
}

$catlist = $obj->categorylist();
?>

<h1 class="mt-4">Create a new Post</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a> -> Create a Post</li>
</ol>

<form action="" method="post" enctype="multipart/form-data">
    <p class="text-danger text-center"><?php echo $formerr; ?></p>
    <p class="text-success text-center"><?php echo $formsucces; ?></p>

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
        <select name="category" class="form-control selectpicker" data-live-search="true" style="z-index: 99999;">
            <option value="">Select Category</option>
            <?php
            while ($data = mysqli_fetch_assoc($catlist)) {
                echo "<option value='{$data['category_id']}'>{$data['category_name']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="featured_image" class="form-label">Featured Image</label>
        <input type="file" name="featured_image" class="form-control-file">
    </div>

    <div class="mb-3">
        <label for="meta_des" class="form-label">Page Meta Description</label>
        <textarea name="meta_des" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="tag" class="form-label">Post Tag</label>
        <input name="tag" class="form-control">
    </div>

    <button type="submit" name="createpost" class="btn btn-primary">Add New Post</button>
</form>
