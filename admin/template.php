<?php
    // Dashboard Page includes Head
?>
<?php include_once('includes/head.php'); ?>
    <body class="sb-nav-fixed">
        <?php include_once('includes/top_nav.php'); ?>
        <div id="layoutSidenav">
            <?php
                include_once('includes/layoutsidenav.php');
             ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php
                           if($view == "dashboard"){
                            include_once('view/dashboard.php');
                           }elseif ($view == "sitesettings") {
                            include_once('view/sitesettings.php');
                           }elseif($view == "createpage"){
                             include_once('view/createpage.php');
                           }elseif ($view == "managepage") {
                            include_once('view/managepage.php');
                           }elseif($view == "updatepage"){
                            include_once('view/updatepage.php');
                           }elseif ($view == "createpost") {
                            include_once('view/createpost.php');  
                           }elseif ($view == "managepost") {
                            include_once('view/managepost.php');
                           }elseif ($view == "updatepost") {
                            include_once('view/updatepost.php');
                           }elseif ($view == "createcate") {
                            include_once('view/createcat.php');
                           }elseif ($view == "updatecat") {
                            include_once('view/updatecat.php');
                           }else{
                            include_once('404.php');
                           }
                        ?>
                    </div>
                </main>
                <?php 
                    // Footer
                    include_once('includes/footer.php'); 
                ?>
            </div>
        </div>
        <?php 
            // Script Include
            include_once('includes/script.php'); 
        ?>
    </body>
</html>
