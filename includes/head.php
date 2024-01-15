<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Meta Title -->
    <title><?php 
            if(isset($pagetitle)){ 
                echo $pagetitle; 
            }
            else {
                echo "UBloging";
            }?></title>

    <!-- Social Media Meta Tags -->
    <meta property="og:title" 
           content="<?php 
            if(isset($pagetitle)){ 
                echo $pagetitle; 
            }
            else {
                echo "UBloging";
            } 
            ?>">
    <meta property="og:description" 
          content="<?php 
            if(isset($pagedes)){ 
                echo $pagedes; 
            }
            else {
                echo "UBloging is Blog Website";
            } 
            ?>">
    <meta property="og:image" 
    content="<?php 
            if(isset($pagethumb)){ 
                echo $pagethumb; 
            }
            else {
                echo "admin/site/logo.png";
            } 
            ?>">

    <!-- Other Meta Tags (optional) -->
    <meta name="description" 
    content="<?php 
            if(isset($pagedes)){ 
                echo $pagedes; 
            }
            else {
                echo "UBloging is Blog Website";
            } 
            ?>">
    <meta name="keywords" 
    content="<?php 
            if(isset($pagetag)){ 
                echo $pagetag; 
            }
            else {
                echo "Ubloging, Blog Website";
            } 
            ?>">
    <meta name="author" 
    content="<?php 
            if(isset($pageauthor)){ 
                echo $pageauthor; 
            }
            else {
                echo "Md. Likhon Sorkar";
            } 
    ?>"
    >

    <link rel="shortcut icon" href="admin/site/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
</head>
<body>
    <?php $ptitle = "Test Title"; ?>
    <!-- Header Area -->
    <header style="background-color: #45526e" class="text-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="index.php">
                        <img src="admin/site/logo.png" alt="Your Logo" width="200" height="auto" class="d-inline-block align-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Login | Registration </a>
                        </li>
                        </ul>
                        <form action="search.php" method="GET" class="d-flex my-2 my-lg-0">
                        <input class="form-control mr-1" style="margin-right:5px;" type="search" placeholder="Search" name="q" aria-label="Search">
                        <button class="btn btn-custom" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    
