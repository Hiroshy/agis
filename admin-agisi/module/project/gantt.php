<?php 
    include_once("../../controller/info-page.php");
    include_once("../../model/store_info.class.php");
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../part/header/GTM.php") ?>
        <?php include_once("../../part/header/link.php") ?>
        <!-- third party css -->
        <link href="../../assets/css/vendor/frappe-gantt.css" rel="stylesheet" type="text/css" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Projects Calendar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Projects Calendar</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- start projects-->
                                    <div class="col-xl-3">
                                        <div class="pr-xl-3">
                                            <h5 class="mt-0 mb-3">Projects</h5>
                                            <!-- start search box -->
                                            <div class="app-search">
                                                <form>
                                                    <div class="form-group position-relative">
                                                        <input type="text" class="form-control"
                                                            placeholder="search by name..." />
                                                        <span class="mdi mdi-magnify search-icon"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end search box -->

                                            <div class="row">
                                                <div class="col">
                                                    <div data-simplebar style="max-height: 535px;">
                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media mt-2 p-2">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title bg-success-lighten rounded-circle text-success">
                                                                        <i class='uil uil-moonset font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Lunar
                                                                        <span class="badge badge-success-lighten ml-1">On Track</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj101
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media bg-light p-2">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-success-lighten rounded-circle text-success">
                                                                        <i class='uil uil-moon-eclipse font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Dark Moon
                                                                        <span class="badge badge-success-lighten ml-1">On
                                                                            Track</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj102
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media mt-1 px-2 py-2">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                                        <i class='uil uil-mountains font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Aurora
                                                                        <span class="badge badge-warning-lighten ml-1">Locked</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj103
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media mt-1 px-2 py-2">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                                        <i class='uil uil-moon font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Blue Moon
                                                                        <span
                                                                            class="badge badge-warning-lighten ml-1">Locked</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj104
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media mt-1 px-2 py-2">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                                        <i class='uil uil-ship font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Casanova
                                                                        <span
                                                                            class="badge badge-danger-lighten ml-1">Delayed</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj106
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media mt-1 px-2 py-2">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-success-lighten rounded-circle text-success">
                                                                        <i class='uil uil-subway-alt font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Darwin
                                                                        <span class="badge badge-success-lighten ml-1">On
                                                                            Track</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj107
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>

                                                        <a href="javascript:void(0);" class="text-body">
                                                            <div class="media mt-1 px-2 py-2">
                                                                <div class="avatar-sm">
                                                                    <span
                                                                        class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                                        <i class='uil uil-gold font-24'></i>
                                                                    </span>
                                                                </div>
                                                                <div class="media-body ml-2">
                                                                    <h5 class="mt-0 mb-0">
                                                                        Eagle
                                                                        <span class="badge badge-danger-lighten ml-1">Delayed</span>
                                                                    </h5>
                                                                    <p class="mt-1 mb-0 text-muted">
                                                                        ID: proj108
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end projects -->

                                    <!-- gantt view -->
                                    <div class="col-xl-9 mt-4 mt-xl-0">
                                        <div class="pl-xl-3">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="javascript: void(0);" class="btn btn-success btn-sm mb-2">Add New Task</a>
                                                </div>
                                                <div class="col text-sm-right">
                                                    <div class="btn-group btn-group-sm btn-group-toggle mb-2" data-toggle="buttons" id="modes-filter">
                                                        <label class="btn btn-light d-none d-sm-inline-block">
                                                            <input type="radio" name="modes" id="qday" value="Quarter Day" > Quarter Day
                                                        </label>
                                                        <label class="btn btn-light">
                                                            <input type="radio" name="modes" id="hday" value="Half Day"> Half Day
                                                        </label>
                                                        <label class="btn btn-light">
                                                            <input type="radio" name="modes" id="day" value="Day"> Day
                                                        </label>
                                                        <label class="btn btn-light active">
                                                            <input type="radio" name="modes" id="week" value="Week" checked> Week
                                                        </label>
                                                        <label class="btn btn-light">
                                                            <input type="radio" name="modes" id="month" value="Month"> Month
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col mt-3">
                                                    <svg id="tasks-gantt"></svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end gantt view -->
                                </div>
                            </div>
                        </div>

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

        <!-- gantt js-->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/frappe-gantt.min.js"></script>

        <!-- demo app -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/pages/demo.project-gantt.js"></script>
        <!-- end demo js-->
        
    </body>

</html>