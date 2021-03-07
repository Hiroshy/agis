<?php 
    include_once("../../controller/info-page.php");
    include_once("../../model/store_info.class.php");
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../part/header/GTM.php") ?>
        <?php include_once("../../part/header/link.php") ?>
        <!-- App css -->
        <?php include_once("../../part/header/meta_head.php") ?>
    </head>
    
    <body class="loading" data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":true, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
    <?php include_once("../../part/body/GTM.php") ?>    
    <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once("../../part/body/nav_left.php") ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page px-0">
                <div class="content">
                    <!-- Topbar Start -->
                    <?php include_once("../../part/body/nav_top.php") ?>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Timeline</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Timeline</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="timeline">

                                    <div class="timeline-show mb-3 text-center">
                                        <h5 class="m-0 time-show-name">Today</h5>
                                    </div>

                                    <div class="timeline-lg-item timeline-item-left">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">Completed UX design project for our client</h4>
                                                <p class="text-muted"><small>22 July, 2019</small></p>
                                                <p>Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? </p>

                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 17</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 89</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-lg-item">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">Yay! We are celebrating our first admin release.</h4>
                                                <p class="text-muted"><small>22 July, 2019</small></p>
                                                <p>Consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>

                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 148</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-show my-3 text-center">
                                        <h5 class="m-0 time-show-name">Yesterday</h5>
                                    </div>

                                    <div class="timeline-lg-item timeline-item-left">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">We released new version of our theme Ubold.</h4>
                                                <p class="text-muted"><small>21 July, 2019</small></p>
                                                <p>3 new photo Uploaded on facebook fan page</p>

                                                <div class="timeline-album mb-3">
                                                    <a href="javascript: void(0);">
                                                        <img alt="" src="../../assets/images/small/small-1.jpg">
                                                    </a>
                                                    <a href="javascript: void(0);">
                                                        <img alt="" src="../../assets/images/small/small-2.jpg">
                                                    </a>
                                                    <a href="javascript: void(0);">
                                                        <img alt="" src="../../assets/images/small/small-3.jpg">
                                                    </a>
                                                </div>

                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🏆 94</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-lg-item">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">We have archieved 25k sales in our themes.</h4>
                                                <p class="text-muted"><small>21 July, 2019</small></p>
                                                <p>Outdoor visit at California State Route 85 with John Boltana &
                                                    Harry Piterson regarding to setup a new show room.</p>

                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 1.4k</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 2k</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-lg-item timeline-item-left">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">Conference call with UX team</h4>
                                                <p class="text-muted"><small>21 July, 2019</small></p>
                                                <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                                    Lorem ipsum dolor sit amet consiquest dio</p>

                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 89</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-show my-3 text-center">
                                        <h5 class="m-0 time-show-name">2018</h5>
                                    </div>

                                    <div class="timeline-lg-item">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">Join new team member Alex Smith</h4>
                                                <p class="text-muted"><small>10 December, 2018</small></p>
                                                <p>Alex Smith is a Senior Software (Full Stack) engineer with a deep passion for building usable, functional & pretty web applications. </p>
                                                <div class="media">
                                                    <img src="../../assets/images/users/avatar-3.jpg" alt="Arya S" class="rounded-circle mr-2" height="24">
                                                    <div class="media-body">
                                                        <h5 class="mt-1 font-14 mb-0">
                                                            Alex Smith <small>- Senior Software (Full Stack)</small>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="timeline-lg-item timeline-item-left">
                                        <div class="timeline-desk">
                                            <div class="timeline-box">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                                <h4 class="mt-0 mb-1 font-16">First release of Hyper admin dashboard template</h4>
                                                <p class="text-muted"><small>16 July, 2018</small></p>
                                                <p>Outdoor visit at California State Route 85 with John Boltana &
                                                    Harry Piterson regarding to setup a new show room.</p>

                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">🎉 10k</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">👍 3.2k</a>
                                                <a href="javascript: void(0);" class="btn btn-sm btn-light">❤️ 7.1k</a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end timeline -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <?php include_once("../../part/body/footer.php") ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php include_once("../../part/body/nav_right.php") ?>
        <!-- /Right-bar -->

        <!-- bundle -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/apexcharts.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
        <!-- third party js ends -->
        
    </body>

</html>