<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <!-- Post Section  -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fab fa-pagelines"></i></div>
                                Post
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- Post Collaps -->
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="createpost.php">Add New Post</a>
                                    <a class="nav-link" href="managepost.php">Manage Post</a>
                                </nav>
                            </div>
                            
                            <!-- Pages Section -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- pages collapse -->
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="createpage.php">Create New Page</a>
                                    <a class="nav-link" href="managepage.php">Manage New Page</a>
                                    <a class="nav-link" href="#">Manage System Page</a>
                                </nav>
                            </div>

                            <!-- section -->
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSection" aria-expanded="false" aria-controls="collapseSection">
                                <div class="sb-nav-link-icon"><i class="fas fa-clone"></i></i></div>
                                Section
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <!-- section collapse -->
                            <div class="collapse" id="collapseSection" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="#">Testimonial</a>
                                </nav>
                            </div>

                            
                            <div class="sb-sidenav-menu-heading">Other</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-code"></i></div>
                                Shortcode
                            </a>
                            <a class="nav-link collapsed" data-toggle="collapse" href="#" data-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Settings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSettings" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="sitesettings.php">Site Settings</a>
                                    <a class="nav-link" href="#">Post Settings</a>
                                    <a class="nav-link" href="#">Page Settings</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>