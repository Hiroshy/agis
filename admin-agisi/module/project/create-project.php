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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                            <li class="breadcrumb-item active">Create Project</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create Project</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="projectname">Name</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="project-overview">Overview</label>
                                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project.."></textarea>
                                                </div>

                                                <!-- Date View -->
                                                <div class="form-group">
                                                    <label>Start Date</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>

                                                <div class="form-group">
                                                    <label for="project-budget">Budget</label>
                                                    <input type="text" id="project-budget" class="form-control" placeholder="Enter project budget">
                                                </div>

                                                <div class="form-group mb-0">
                                                    <label for="project-overview">Team Members</label>
                                                    
                                                    <select class="form-control select2" data-toggle="select2">
                                                        <option>Select</option>
                                                        <option value="AZ">Mary Scott</option>
                                                        <option value="CO">Holly Campbell</option>
                                                        <option value="ID">Beatrice Mills</option>
                                                        <option value="MT">Melinda Gills</option>
                                                        <option value="NE">Linda Garza</option>
                                                        <option value="NM">Randy Ortez</option>
                                                        <option value="ND">Lorene Block</option>
                                                        <option value="UT">Mike Baker</option>
                                                    </select>

                                                    <div class="mt-2">
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                            <img src="../../assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                            <img src="../../assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                            <img src="../../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
            
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lorene Block" class="d-inline-block">
                                                            <img src="../../assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mike Baker" class="d-inline-block">
                                                            <img src="../../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                                                    </div>
        
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="form-group mt-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0">Avatar</label>
                                                    <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>

                                                    <form action="https://coderthemes.com/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                        data-upload-preview-template="#uploadPreviewTemplate">
                                                        <div class="fallback">
                                                            <input name="file" type="file" />
                                                        </div>

                                                        <div class="dz-message needsclick">
                                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                            <h4>Drop files here or click to upload.</h4>
                                                        </div>
                                                    </form>

                                                    <!-- Preview -->
                                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                    <!-- file preview template -->
                                                    <div class="d-none" id="uploadPreviewTemplate">
                                                        <div class="card mt-1 mb-0 shadow-none border">
                                                            <div class="p-2">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                    </div>
                                                                    <div class="col pl-0">
                                                                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                                                                        <p class="mb-0" data-dz-size></p>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <!-- Button -->
                                                                        <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                            <i class="dripicons-cross"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end file preview template -->
                                                </div>

                                                <!-- Date View -->
                                                <div class="form-group">
                                                    <label>Due Date</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
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

        <!-- plugin js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dropzone.min.js"></script>
        <!-- init js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/ui/component.fileupload.js"></script>
        
    </body>

</html>