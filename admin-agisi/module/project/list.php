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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Projects</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Projects</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="apps-projects-add.html" class="btn btn-danger btn-rounded mb-3"><i class="mdi mdi-plus"></i> Create Project</a>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-right">
                                    <div class="btn-group mb-3">
                                        <button type="button" class="btn btn-primary">All</button>
                                    </div>
                                    <div class="btn-group mb-3 ml-1">
                                        <button type="button" class="btn btn-light">Ongoing</button>
                                        <button type="button" class="btn btn-light">Finished</button>
                                    </div>
                                    <div class="btn-group mb-3 ml-2 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                                    </div>
                                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                                        <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></button>
                                    </div>
                                </div>
                            </div><!-- end col-->
                        </div> 
                        <!-- end row-->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="dropdown card-widgets">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline mr-1"></i>Invite</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app mr-1"></i>Leave</a>
                                            </div>
                                        </div>
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">App design and development</a>
                                        </h4>
                                        <div class="badge badge-success mb-3">Finished</div>

                                        <p class="text-muted font-13 mb-3">With supporting text below as a natural lead-in to additional contenposuere erat a ante...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                                        </p>

                                        <!-- project detail-->
                                        <p class="mb-1">
                                            <span class="pr-2 text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>21</b> Tasks
                                            </span>
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>741</b> Comments
                                            </span>
                                        </p>
                                        <div>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                                +7 more
                                            </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3">
                                            <!-- project progress-->
                                            <p class="mb-2 font-weight-bold">Progress <span class="float-right">100%</span></p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                        </li>
                                    </ul>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="dropdown card-widgets">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline mr-1"></i>Invite</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app mr-1"></i>Leave</a>
                                            </div>
                                        </div>
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Coffee detail page - Main Page</a>
                                        </h4>
                                        <div class="badge badge-secondary mb-3">Ongoing</div>

                                        <p class="text-muted font-13 mb-3">This card has supporting text below as a natural lead-in to additional content is a little bit longer...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                                        </p>

                                        <!-- project detail-->
                                        <p class="mb-1">
                                            <span class="pr-2 text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>81</b> Tasks
                                            </span>
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>103</b> Comments
                                            </span>
                                        </p>
                                        <div>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                                +3 more
                                            </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3">
                                            <!-- project progress-->
                                            <p class="mb-2 font-weight-bold">Progress <span class="float-right">28%</span></p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                        </li>
                                    </ul>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="dropdown card-widgets">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline mr-1"></i>Invite</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app mr-1"></i>Leave</a>
                                            </div>
                                        </div>
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Poster illustation design</a>
                                        </h4>
                                        <div class="badge badge-secondary mb-3">Ongoing</div>

                                        <p class="text-muted font-13 mb-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                                        </p>

                                        <!-- project detail-->
                                        <p class="mb-1">
                                            <span class="pr-2 text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>12</b> Tasks
                                            </span>
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>482</b> Comments
                                            </span>
                                        </p>
                                        <div>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3">
                                            <!-- project progress-->
                                            <p class="mb-2 font-weight-bold">Progress <span class="float-right">63%</span></p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                        </li>
                                    </ul>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="dropdown card-widgets">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class="dripicons-dots-3"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil mr-1"></i>Edit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete mr-1"></i>Delete</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline mr-1"></i>Invite</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app mr-1"></i>Leave</a>
                                            </div>
                                        </div>
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Drinking bottle graphics </a>
                                        </h4>
                                        <div class="badge badge-success mb-3">Finished</div>

                                        <p class="text-muted font-13 mb-3">Some quick example text to build on the card title and make up the bulk of the card's content...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                                        </p>

                                        <!-- project detail-->
                                        <p class="mb-1">
                                            <span class="pr-2 mb-2 d-inline-block text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type text-muted"></i>
                                                <b>50</b> Tasks
                                            </span>
                                            <span class="text-nowrap mb-2 d-inline-block">
                                                <i class="mdi mdi-comment-multiple-outline text-muted"></i>
                                                <b>208</b> Comments
                                            </span>
                                        </p>
                                        <div>
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                                +2 more
                                            </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3">
                                            <!-- project progress-->
                                            <p class="mb-2 font-weight-bold">Progress <span class="float-right">100%</span></p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                </div><!-- /.progress-bar -->
                                            </div><!-- /.progress -->
                                        </li>
                                    </ul>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="../../assets/images/projects/project-1.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Company logo design</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>3</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>104</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">45%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="../../assets/images/projects/project-2.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-success p-1">Finished</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Landing page design - Home</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>11</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>254</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                                +2 more
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">100%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="../../assets/images/projects/project-3.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Product page redesign</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>21</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>668</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                                +5 more
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">71%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <!-- project card -->
                                <div class="card d-block">
                                    <!-- project-thumbnail -->
                                    <img class="card-img-top" src="../../assets/images/projects/project-4.jpg" alt="project image cap">
                                    <div class="card-img-overlay">
                                        <div class="badge badge-secondary p-1">Ongoing</div>
                                    </div>

                                    <div class="card-body position-relative">
                                        <!-- project title-->
                                        <h4 class="mt-0">
                                            <a href="details" class="text-title">Coffee detail page - Main Page</a>
                                        </h4>

                                        <!-- project detail-->
                                        <p class="mb-3">
                                            <span class="pr-2 text-nowrap">
                                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                                <b>18</b> Tasks
                                            </span>
                                            <span class="text-nowrap">
                                                <i class="mdi mdi-comment-multiple-outline"></i>
                                                <b>259</b> Comments
                                            </span>
                                        </p>
                                        <div class="mb-3">
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                                <img src="../../assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                            </a>
                                        </div>

                                        <!-- project progress-->
                                        <p class="mb-2 font-weight-bold">Progress <span class="float-right">52%</span></p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                                            </div><!-- /.progress-bar -->
                                        </div><!-- /.progress -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
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
        
    </body>

</html>