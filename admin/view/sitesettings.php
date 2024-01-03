<?php
// Logo Update Php Code
$logerror = "";
$logsucces = "";

// Logo Update Code
if (isset($_POST['updatelogo'])) {
    // Check if a file is selected
    if (isset($_FILES["logo"])) {
        $file = $_FILES["logo"];

        // Check for errors during file upload
        if ($file["error"] === UPLOAD_ERR_OK) {
            // Check if the uploaded file is a PNG image
            $allowedTypes = ['image/png'];
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($fileInfo, $file["tmp_name"]);

            if (in_array($mimeType, $allowedTypes)) {
                // Move the uploaded file to the desired directory
                $uploadDir = "site/";
                $uploadPath = $uploadDir . "logo.png";

                move_uploaded_file($file["tmp_name"], $uploadPath);

                $logsucces = "Logo updated successfully! Please wait a moment; the logo will be automatically changed.";
            } else {
                $logerror = "Please upload a valid image (PNG).";
            }
        } else {
            $logerror = "Error uploading file. Please try again.";
        }
    } else {
        $logerror = "Please select a file to upload.";
    }
}

// Favicon Update Php Code
$faverror = "";
$favsucces = "";
// Favicon Update Code
if (isset($_POST['updatefavicon'])) {
    // Check if a file is selected
    if (isset($_FILES["favicon"])) {
        $file = $_FILES["favicon"];

        // Check for errors during file upload
        if ($file["error"] === UPLOAD_ERR_OK) {
            // Check if the uploaded file is an image
            $allowedTypes = [ 'image/png'];
            $fileInfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimeType = finfo_file($fileInfo, $file["tmp_name"]);

            if (in_array($mimeType, $allowedTypes)) {
                // Check if the image dimensions are square and not exceeding 167 x 167 pixels
                list($width, $height) = getimagesize($file["tmp_name"]);

                if ($width == $height && $width <= 167) {
                    // Move the uploaded file to the desired directory
                    $uploadDir = "site/";
                    $uploadPath = $uploadDir ."favicon.png";

                    move_uploaded_file($file["tmp_name"], $uploadPath);

                    $favsucces =  "Favicon updated successfully! Please wait a moment; the favicon will be automatically changed.";
                } else {
                    $faverror = "Please upload a square image with dimensions not exceeding 167 x 167 pixels.";
                }
            } else {
                $faverror = "Please upload a valid image (PNG).";
            }
        } else {
            $faverror = "Error uploading file. Please try again.";
        }
    } else {
        $faverror = "Please select a file to upload.";
    }
}

?>

<h1 class="mt-4">Site Settings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Site Settings</li>
    </ol>
    <div class="row">
        <div class="col-md-6">
            <h3 class="mb-4">Update Website Logo</h3>
            <span class="text-danger"><?php echo $logerror; ?></span>
            <span class="text-success"><?php echo $logsucces; ?></span>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                    <img id="preview" src="site/logo.png" class="img-fluid" style="max-height:70px;" alt="Logo Preview">
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Choose Logo</label>
                    <input type="file" id="logo" name="logo" accept="image/*" onchange="logopreviewImage()">
                </div>
                    <button type="submit" name="updatelogo" class="btn btn-primary">Update Logo</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h3 class="mb-4">Update Website Favicon</h3>
            <span class="text-danger"><?php echo $faverror; ?></span>
            <span class="text-success"><?php echo $favsucces; ?></span>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <img id="faviconpreview" src="site/favicon.png" class="img-fluid" style="height:32px; width:32px;" alt="Logo Preview">
                </div>
                <div class="mb-3">
                    <label for="favicon" class="form-label">Choose Logo</label>
                    <input type="file" id="favicon" name="favicon" accept="image/*" onchange="faviconpreviewImage()">
                </div>
                    <button type="submit" name="updatefavicon" class="btn btn-primary">Update Fav icon</button>
            </form>
        </div>
    </div>

<script>
    // Logo Preview Javascript
    function logopreviewImage() {
        var preview = document.getElementById('preview');
        var fileInput = document.getElementById('logo');
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
    // Favicon Preview Javascript
    function faviconpreviewImage() {
        var preview = document.getElementById('faviconpreview');
        var fileInput = document.getElementById('favicon');
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
</script>