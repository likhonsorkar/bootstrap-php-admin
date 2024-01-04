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
// Website Information
$winerror = "";
$winsucces = "";
if(isset($_POST['webinfoupdate'])){
    $webtitle = $_POST['webtitle'];
    $webdes = $_POST['webdes'];
    $weblang = $_POST['weblang'];
    $webtag = $_POST['webtag'];
    if(!empty($webtitle) && !empty($webdes) && !empty($weblang) && !empty($webtag) ){
        $winsucces = "Successfully update information";
    }else{
        $winerror = "Please fill all filed"; 
    }

}

?>

<div class="sitesettings">
    <h1 class="mt-4">Site Settings</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a>  -> Site Settings</li>
    </ol>


    <div class="row  breadcrumb p-2 rounded">
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

    <div class="row mt-4  breadcrumb p-2 rounded">
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
</div>






<div class="row  breadcrumb p-2 rounded mb-3">
        <div class="col-12">
            <h3 class="mb-4">Website Information</h3>
            <span class="text-danger"><?php echo $winerror; ?></span>
            <span class="text-success"><?php echo $winsucces; ?></span>
            <form action="" method="post">
            <div class="mb-3">
                    <label for="webtitle">Website Title</label>
                    <input type="text" name="webtitle" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="webdes">Website Description</label>
                    <textarea type="text" name="webdes" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="weblang" class="form-label">Website Language</label>
                    <select name="weblang" class="form-control">
                        <option value="af">Afrikaans</option>
                        <option value="sq">Albanian</option>
                        <option value="ar">Arabic</option>
                        <option value="hy">Armenian</option>
                        <option value="bn">Bengali</option>
                        <option value="bs">Bosnian</option>
                        <option value="bg">Bulgarian</option>
                        <option value="ca">Catalan</option>
                        <option value="hr">Croatian</option>
                        <option value="cs">Czech</option>
                        <option value="da">Danish</option>
                        <option value="nl">Dutch</option>
                        <option value="en">English</option>
                        <option value="et">Estonian</option>
                        <option value="fi">Finnish</option>
                        <option value="fr">French</option>
                        <option value="de">German</option>
                        <option value="el">Greek</option>
                        <option value="he">Hebrew</option>
                        <option value="hi">Hindi</option>
                        <option value="hu">Hungarian</option>
                        <option value="is">Icelandic</option>
                        <option value="id">Indonesian</option>
                        <option value="ga">Irish</option>
                        <option value="it">Italian</option>
                        <option value="ja">Japanese</option>
                        <option value="ko">Korean</option>
                        <option value="lv">Latvian</option>
                        <option value="lt">Lithuanian</option>
                        <option value="mk">Macedonian</option>
                        <option value="ms">Malay</option>
                        <option value="mt">Maltese</option>
                        <option value="no">Norwegian</option>
                        <option value="fa">Persian</option>
                        <option value="pl">Polish</option>
                        <option value="pt">Portuguese</option>
                        <option value="ro">Romanian</option>
                        <option value="ru">Russian</option>
                        <option value="sr">Serbian</option>
                        <option value="sk">Slovak</option>
                        <option value="sl">Slovenian</option>
                        <option value="es">Spanish</option>
                        <option value="sw">Swahili</option>
                        <option value="sv">Swedish</option>
                        <option value="tl">Tagalog</option>
                        <option value="th">Thai</option>
                        <option value="tr">Turkish</option>
                        <option value="uk">Ukrainian</option>
                        <option value="ur">Urdu</option>
                        <option value="vi">Vietnamese</option>
                        <option value="cy">Welsh</option>
                        <option value="xh">Xhosa</option>
                        <option value="yi">Yiddish</option>
                        <option value="zu">Zulu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="webtag">Website Tag</label>
                    <input type="text" name="webtag"  class="form-control">
                </div>
                    <button type="submit" name="webinfoupdate" class="btn btn-primary">Update Information</button>
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