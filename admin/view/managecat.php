<?php
    $catlist = $obj->categorylist();
?>
<h1 class="mt-4">All Category</h1>
    <ol class="breadcrumb mb-1">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Manage All Category </li>
    </ol>
<div class="text-right"><a href="createcat.php"><button class="btn btn-primary mb-1">Add New</button></a></div>
<!-- Pages Data -->

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        All Category List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    while($data = mysqli_fetch_assoc($catlist)){
                        ?>
                            <tr>
                                <td><?php echo $data['category_name']; ?></td>
                                <td><?php echo $data['category_description']; ?></td>
                                <td class="d-flex"><a href="updatecat.php?id=<?php echo $data['category_id']; ?>"><button class="btn btn-primary mr-1">Update</button></a> <button class="btn btn-danger">Delete</button></td>
                            </tr>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
