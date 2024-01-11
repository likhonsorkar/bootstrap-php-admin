<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    include_once('database.php');
    include_once('functions/functions.php');
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link rel="shortcut icon" href="site/favicon.png" type="image/x-icon">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    </head>
    <?php
        // Login Page includes Head
        $obj = new database;
        if(isset($_SESSION['admin_email']) && isset($_SESSION['admin_password'])){
            $post['email'] = $_SESSION['admin_email'];
            $post['password'] = $_SESSION['admin_password'];
            $returnmsg = $obj->checkadminlogin($post);
        }
    ?>