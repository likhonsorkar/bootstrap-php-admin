<?php
    $formerr = "";
    if(isset($_POST['updatepage'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $meta_des = $_POST['meta_des'];
        $tag = $_POST['tag'];
        if(empty($title) || empty($content) || empty($meta_des) || empty($tag)){
            $formerr = "Fill All Fields And Try Again!";
        }else{
            // update data
        }
    }
?>
<h1 class="mt-4">Update page</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Update page </li>
    </ol>
    <?php if(isset($_GET['id'])){ ?>
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
            <label for="meta_des" class="form-label">Meta Description</label>
            <textarea name="meta_des" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Page Tag</label>
            <input name="tag" class="form-control">
        </div>

            <button type="submit" name="updatepage" class="btn btn-primary">Update Page</button>
    </form>
    <?php
    } else{
        echo "Server Response Failed <a href='dashboard.php'> Go To Dashboard </a>";
    }

   
