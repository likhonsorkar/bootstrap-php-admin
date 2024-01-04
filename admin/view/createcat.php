<?php
    $formerr = "";
    if(isset($_POST['addcategory'])){
        // Assuming you have received the title from the form
        $name = $_POST['name'];
        
        // Generate the slug
        $slug =  $name;
        $meta_des = $_POST['meta_des'];
        $tag = $_POST['tag'];
        if(empty($name) || empty($meta_des) || empty($tag)){
            $formerr = "Fill All Fields And Try Again!";
        }else{
            // send data to database
        }
    }
?>
<h1 class="mt-4">Add Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Add Category </li>
    </ol>

    <?php if(isset($slug)){echo "<a href='$slug'> This is ".$slug." </a>";}?>

    <form action="" method="post">
        <p class="text-danger text-center"><?php echo  $formerr; ?></p>
        <div class="mb-3">
            <label for="name" class="form-label">Category Name: </label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="meta_des" class="form-label">Category Description:</label>
            <textarea name="meta_des" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Category Tag</label>
            <input name="tag" class="form-control">
        </div>

            <button type="submit" name="addcategory" class="btn btn-primary">Add Category</button>
    </form>

   
