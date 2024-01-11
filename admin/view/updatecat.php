<?php
    $formerr = $formsucces = $sname = $smeta_des = $stag = "";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $catlist = $obj->singlecatlist($_GET['id']);
        $data = mysqli_fetch_assoc($catlist);
        $sname = $data['category_name'];
        $smeta_des = $data['category_description'];
        $stag = $data['category_tag'];

        if(isset($_POST['updatecat'])){
            // Assuming you have received the title from the form
            $name = $_POST['name'];
            // Generate the slug
            $slug =  generateSlug($name);
            $meta_des = $_POST['meta_des'];
            $tag = $_POST['tag'];
            if(empty($name) || empty($meta_des) || empty($tag)){
                $formerr = "Fill All Fields And Try Again!";
            }else{
                $createcat = "UPDATE post_category SET category_name = '$name',category_description = '$meta_des',category_tag = '$tag',slug = '$slug' WHERE category_id =$id"; 
                if($query = mysqli_query($obj->conn,$createcat)){
                    $formsucces = "Category Update succesfull";
                }else{
                    $formerr = "Category Update failed";
                }
            }
        }
    }
?>
<h1 class="mt-4">Update Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Update Category </li>
    </ol>

    <form action="" method="post">
        <p class="text-danger text-center"><?php echo  $formerr; ?></p>
        <p class="text-success text-center"><?php echo  $formsucces; ?></p>
        <div class="mb-3">
            <label for="name" class="form-label">Category Name: </label>
            <input type="text" class="form-control" name="name" value="<?php echo $sname; ?>">
        </div>
        <div class="mb-3">
            <label for="meta_des" class="form-label">Category Description:</label>
            <textarea name="meta_des" class="form-control" rows="3"><?php echo $smeta_des; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Category Tag</label>
            <input name="tag" class="form-control" value="<?php echo $stag;?>">
        </div>

            <button type="submit" name="updatecat" class="btn btn-primary">Update Category</button>
    </form>

   
