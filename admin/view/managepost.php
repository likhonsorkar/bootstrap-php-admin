<?php
   $query = $obj->postlist();
?>
<h1 class="mt-4">All Post</h1>
    <ol class="breadcrumb mb-1">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Manage All Post </li>
    </ol>
<div class="text-right"><a href="createpage.php"><button class="btn btn-primary mb-1">Add New</button></a></div>
<!-- Pages Data -->
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        All Post List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Feature Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    while($data = mysqli_fetch_assoc($query)){
                        $title = $data['title'];
                        $image = "../images/".$data['feature_image'];
                        $autor_id = $data['author_id'];
                        $post_id = $data['post_id'];
                        ?>
                            <tr>
                                <td><?php echo $title?></td>
                                <td><img src="<?php echo $image?>" class="img-fluid" alt=""></td>
                                <td>Published</td>
                                <td><?php echo $autor_id ?></td>
                                <td class="d-flex"><a href="updatepost.php?id=<?php echo $post_id ?>"><button class="btn btn-primary mr-1">Update</button></a> <button class="btn btn-danger">Delete</button></td>
                            </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
