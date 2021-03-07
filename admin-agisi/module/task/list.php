<?php 
    include_once("../../controller/info-page.php");
    include_once("../../model/store_info.class.php");
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../part/header/GTM.php") ?>
        <?php include_once("../../part/header/link.php") ?>
        <!-- Summernote css -->
        <link href="../../assets/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />
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

                        <div class="row">
                            <div class="col-xl-8">
                                <!-- start page title -->
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <div class="app-search">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search..." />
                                                    <span class="mdi mdi-magnify search-icon"></span>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary dropdown-toggle"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class='uil uil-sort-amount-down'></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Due Date</a>
                                                            <a class="dropdown-item" href="#">Added Date</a>
                                                            <a class="dropdown-item" href="#">Assignee</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <h4 class="page-title">Tasks <a href="#" class="btn btn-success btn-sm ml-3">Add New</a></h4>
                                </div>
                                <!-- end page title -->

                                <!-- tasks panel -->
                                <div class="mt-2">
                                    <a class="text-dark" data-toggle="collapse" href="#todayTasks" aria-expanded="false"
                                        aria-controls="todayTasks">
                                        <h5 class="m-0 pb-2">
                                            <i class='uil uil-angle-down font-18'></i>Today <span class="text-muted">(10)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="todayTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task1">
                                                                <label class="custom-control-label" for="task1">
                                                                    Draft the new contract document for sales team
                                                                </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-9.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Arya S" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item ml-1">
                                                                        <a href="details"><i class="dripicons-preview"></i> Ver tarea</a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 10am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 3/7
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 21
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task2">
                                                            <label class="custom-control-label" for="task2">
                                                                iOS App home page
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 4pm
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 2/7
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 48
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task3">
                                                            <label class="custom-control-label" for="task3">
                                                                Write a release note
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-4.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Kevin C" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 6pm
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 18/21
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 73
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div> <!-- end .collapse-->
                                </div> <!-- end .mt-2-->

                                <!-- upcoming tasks -->
                                <div class="mt-4">

                                    <a class="text-dark" data-toggle="collapse" href="#upcomingTasks" aria-expanded="false" aria-controls="upcomingTasks">
                                        <h5 class="m-0 pb-2">
                                            <i class='uil uil-angle-down font-18'></i>Upcoming <span class="text-muted">(5)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="upcomingTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task4">
                                                            <label class="custom-control-label" for="task4">
                                                                Invite user to a project
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Tomorrow 7am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 1/12
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 36
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-danger-lighten p-1">High</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task5">
                                                            <label class="custom-control-label" for="task5">
                                                                Enable analytics tracking
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> 27 Aug 10am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 13/72
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 211
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-success-lighten p-1">Low</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task6">
                                                            <label class="custom-control-label" for="task6">
                                                                Code HTML email template
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-7.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Edward S" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> No Due Date
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 0/7
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 0
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div> <!-- end collapse-->
                                </div>
                                <!-- end upcoming tasks -->

                                <!-- start other tasks -->
                                <div class="mt-4 mb-4">
                                    <a class="text-dark" data-toggle="collapse" href="#otherTasks" aria-expanded="false" aria-controls="otherTasks">
                                        <h5 class="m-0 pb-2">
                                            <i class='uil uil-angle-down font-18'></i>Other <span class="text-muted">(3)</span>
                                        </h5>
                                    </a>

                                    <div class="collapse show" id="otherTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                                <!-- task -->
                                                <div class="row justify-content-sm-between">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task7">
                                                            <label class="custom-control-label" for="task7">
                                                                Coordinate with business development
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-9.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Arya S" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> Today 10am
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 5/14
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 71
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task8">
                                                            <label class="custom-control-label" for="task8">
                                                                Kanban board design
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-2.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to James B" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> No Due Date
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 0/8
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 0
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-info-lighten p-1">Medium</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
    
                                                <!-- task -->
                                                <div class="row justify-content-sm-between mt-2">
                                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="task9">
                                                            <label class="custom-control-label" for="task9">
                                                                Code HTML email template for sales outreach
                                                            </label>
                                                        </div> <!-- end checkbox -->
                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <img src="../../assets/images/users/avatar-5.jpg" alt="image"
                                                                class="avatar-xs rounded-circle mr-1" data-toggle="tooltip"
                                                                data-placement="bottom" title="Assigned to Gary H" />
                                                            </div>
                                                            <div>
                                                                <ul class="list-inline font-13 text-right mb-0">
                                                                    <li class="list-inline-item">
                                                                        <i class='uil uil-schedule font-16 mr-1'></i> 10 Sep 3pm
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-align-alt font-16 mr-1'></i> 0/58
                                                                    </li>
                                                                    <li class="list-inline-item ml-1">
                                                                        <i class='uil uil-comment-message font-16 mr-1'></i> 9
                                                                    </li>
                                                                    <li class="list-inline-item ml-2">
                                                                        <span class="badge badge-success-lighten p-1">Low</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> <!-- end .d-flex-->
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task -->
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <!-- task details -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown card-widgets">
                                            <a href="#" class="dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                <i class='uil uil-ellipsis-h'></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class='uil uil-file-upload mr-1'></i>Attachment
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class='uil uil-edit mr-1'></i>Edit
                                                </a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class='uil uil-file-copy-alt mr-1'></i>Mark as Duplicate
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                    <i class='uil uil-trash-alt mr-1'></i>Delete
                                                </a>
                                            </div> <!-- end dropdown menu-->
                                        </div> <!-- end dropdown-->
                                        
                                        <div class="custom-control custom-checkbox float-left">
                                            <input type="checkbox" class="custom-control-input" id="completedCheck">
                                            <label class="custom-control-label" for="completedCheck">
                                                Mark as completed
                                            </label>
                                        </div> <!-- end custom-checkbox-->

                                        <hr class="mt-4 mb-2" />

                                        <div class="row">
                                            <div class="col">

                                                <a href="details">
                                                    <h4>Draft the new contract document for sales team</h4>
                                                </a>

                                                <div class="row">
                                                    <div class="col-6">
                                                        <!-- assignee -->
                                                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                                        <div class="media">
                                                            <img src="../../assets/images/users/avatar-9.jpg" alt="Arya S" class="rounded-circle mr-2" height="24" />
                                                            <div class="media-body">
                                                                <h5 class="mt-1 font-14">
                                                                    Arya Stark
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end assignee -->
                                                    </div> <!-- end col -->

                                                    <div class="col-6">
                                                        <!-- start due date -->
                                                        <p class="mt-2 mb-1 text-muted">Due Date</p>
                                                        <div class="media">
                                                            <i class='uil uil-schedule font-18 text-success mr-1'></i>
                                                            <div class="media-body">
                                                                <h5 class="mt-1 font-14">
                                                                    Today 10am
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- end due date -->
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <!-- task description -->
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <div id="taskDesk">
                                                            <p>This is a task description with markup support</p>
                                                            <ul>
                                                                <li>Select a text to reveal the toolbar.</li>
                                                                <li>Edit rich document on-the-fly, so elastic!</li>
                                                            </ul>
                                                            <p>End of air-mode area</p>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end task description -->

                                                <!-- start sub tasks/checklists -->
                                                <h5 class="mt-4 mb-2 font-16">Checklists/Sub-tasks</h5>
                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="checklist1">
                                                    <label class="custom-control-label strikethrough" for="checklist1">
                                                        Find out the old contract documents
                                                    </label>
                                                </div>

                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="checklist2">
                                                    <label class="custom-control-label strikethrough" for="checklist2">
                                                        Organize meeting sales associates to understand need in detail
                                                    </label>
                                                </div>

                                                <div class="custom-control custom-checkbox mt-1">
                                                    <input type="checkbox" class="custom-control-input" id="checklist3">
                                                    <label class="custom-control-label strikethrough" for="checklist3">
                                                        Make sure to cover every small details
                                                    </label>
                                                </div>
                                                <!-- end sub tasks/checklists -->

                                                <!-- start attachments -->
                                                <h5 class="mt-4 mb-2 font-16">Attachments</h5>
                                                <div class="card mb-2 shadow-none border">
                                                    <div class="p-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <div class="avatar-sm">
                                                                    <span class="avatar-title rounded">
                                                                        .ZIP
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="javascript:void(0);" class="text-muted font-weight-bold">sales-assets.zip</a>
                                                                <p class="mb-0">2.3 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Download"
                                                                    class="btn btn-link text-muted btn-lg p-0">
                                                                    <i class='uil uil-cloud-download'></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete"
                                                                    class="btn btn-link text-danger btn-lg p-0">
                                                                    <i class='uil uil-multiply'></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mb-2 shadow-none border">
                                                    <div class="p-1">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                                <img src="../../assets/images/projects/project-1.jpg"
                                                                    class="avatar-sm rounded" alt="file-image">
                                                            </div>
                                                            <div class="col pl-0">
                                                                <a href="javascript:void(0);" class="text-muted font-weight-bold">new-contarcts.docx</a>
                                                                <p class="mb-0">1.25 MB</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- Button -->
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Download"
                                                                    class="btn btn-link text-muted btn-lg p-0">
                                                                    <i class='uil uil-cloud-download'></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Delete"
                                                                    class="btn btn-link text-danger btn-lg p-0">
                                                                    <i class='uil uil-multiply'></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end attachments -->

                                                <!-- comments -->
                                                <div class="row mt-3">
                                                    <div class="col">
                                                        <h5 class="mb-2 font-16">Comments</h5>

                                                        <div class="media mt-3 p-1">
                                                            <img src="../../assets/images/users/avatar-9.jpg" class="mr-2 rounded-circle"
                                                                height="36" alt="Arya Stark" />
                                                            <div class="media-body">
                                                                <h5 class="mt-0 mb-0">
                                                                    <span class="float-right text-muted font-12">4:30am</span>
                                                                    Arya Stark
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted">
                                                                    Should I review the last 3 years legal documents as well?
                                                                </p>
                                                            </div>
                                                        </div> <!-- end comment -->

                                                        <hr />

                                                        <div class="media mt-2 p-1">
                                                            <img src="../../assets/images/users/avatar-5.jpg"
                                                                class="mr-2 rounded-circle" height="36" alt="Dominc B" />
                                                            <div class="media-body">
                                                                <h5 class="mt-0 mb-0">
                                                                    <span class="float-right text-muted font-12">3:30am</span>
                                                                    Gary Somya
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted">
                                                                    @Arya FYI..I have created some general guidelines last year.
                                                                </p>
                                                            </div>
                                                        </div> <!-- end comment-->

                                                        <hr />

                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="border rounded">
                                                            <form action="#" class="comment-area-box">
                                                                <textarea rows="3" class="form-control border-0 resize-none"
                                                                placeholder="Your comment..."></textarea>
                                                                <div class="p-2 bg-light">
                                                                    <div class="float-right">
                                                                        <button type="submit" class="btn btn-sm btn-success"><i class='uil uil-message mr-1'></i>Submit</button>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='uil uil-cloud-upload'></i></a>
                                                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='uil uil-at'></i></a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div> <!-- end .border-->
                                                    </div> <!-- end col-->
                                                </div> <!-- end row-->
                                                <!-- end comments -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
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

         <!-- Summernote js -->
         <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/summernote-bs4.min.js"></script>
        
        <script>
            $(document).ready(function(e) {
                $('#taskDesk').summernote({
                    airMode: true,
                    callbacks: {
                        // fix broken checkbox on link modal
                        onInit: function onInit(e) {
                            var editor = $(e.editor);
                            editor.find('.custom-control-description').addClass('custom-control-label').parent().removeAttr('for');
                        }
                    }
                });
            });
        </script>
        
    </body>

</html>