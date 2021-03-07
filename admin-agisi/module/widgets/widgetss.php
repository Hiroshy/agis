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
                                            <li class="breadcrumb-item active">Widgets</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Widgets</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                                <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="float-left m-2 mr-4">
                                            <img src="../../assets/images/users/avatar-2.jpg" style="height: 100px;" alt="" class="rounded-circle img-thumbnail">
                                        </span>
                                        <div class="media-body">
                                    
                                            <h4 class="mt-1 mb-1">Michael Franklin</h4>
                                            <p class="font-13"> Authorised Brand Seller</p>
                                    
                                            <ul class="mb-0 list-inline">
                                                <li class="list-inline-item mr-3">
                                                    <h5 class="mb-1">$ 25,184</h5>
                                                    <p class="mb-0 font-13">Total Revenue</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-1">5482</h5>
                                                    <p class="mb-0 font-13">Number of Orders</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end media-body-->
                                    </div>
                                    <!-- end card-body-->
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div id="sales-spark" class="apex-charts" data-colors="#3688fc"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div id="profit-spark" class="apex-charts" data-colors="#0acf97"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-currency-btc widget-icon bg-danger rounded-circle text-white"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0" title="Revenue">Revenue</h5>
                                        <h3 class="mt-3 mb-3">$6,254</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="badge badge-info mr-1">
                                                <i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-pulse widget-icon"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0" title="Growth">Growth</h5>
                                        <h3 class="mt-3 mb-3">+ 30.56%</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="text-success mr-2">
                                                <i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat bg-success text-white">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                                        </div>
                                        <h6 class="text-uppercase mt-0" title="Customers">Customers</h6>
                                        <h3 class="mt-3 mb-3">36,254</h3>
                                        <p class="mb-0">
                                            <span class="badge badge-light-lighten mr-1">
                                                <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-currency-usd widget-icon bg-light-lighten rounded-circle text-white"></i>
                                        </div>
                                        <h5 class="font-weight-normal mt-0" title="Revenue">Revenue</h5>
                                        <h3 class="mt-3 mb-3 text-white">$10,245</h3>
                                        <p class="mb-0">
                                            <span class="badge badge-info mr-1">
                                                <i class="mdi mdi-arrow-up-bold"></i> 17.26%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
        
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">Campaign Sent</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">New Leads</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div id="new-leads-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Deals">Deals</h5>
                                                <h3 class="my-2 py-1">861</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue</h5>
                                                <h3 class="my-2 py-1">$253k</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <div id="booked-revenue-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-4">
                                <!-- Chat-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Chat</h4>

                                        <div class="chat-conversation">
                                            <div data-simplebar style="height: 350px;">
                                                <ul class="conversation-list">
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="../../assets/images/users/avatar-5.jpg" alt="male">
                                                            <i>10:00</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Geneva</i>
                                                                <p>
                                                                    Hello!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="../../assets/images/users/avatar-1.jpg" alt="Female">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Dominic</i>
                                                                <p>
                                                                    Hi, How are you? What about our next meeting?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="../../assets/images/users/avatar-5.jpg" alt="male">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Geneva</i>
                                                                <p>
                                                                    Yeah everything is fine
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="../../assets/images/users/avatar-1.jpg" alt="male">
                                                            <i>10:02</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Dominic</i>
                                                                <p>
                                                                    Wow that's great
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit" class="btn btn-danger chat-send btn-block waves-effect waves-light">Send</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div> <!-- end .chat-conversation-->
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card cta-box bg-danger text-white">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i></h2>
                                                <h3 class="m-0 font-weight-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach <i class="mdi mdi-arrow-right-bold-outline"></i></h3>
                                            </div>
                                            <img class="ml-3" src="../../assets/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->

                                <div class="card cta-box bg-primary text-white">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h3 class="m-0 font-weight-normal cta-box-title">Enhance your <b>Campaign</b> for better outreach</h3>

                                            <img class="my-3" src="../../assets/images/report.svg" width="180" alt="Generic placeholder image">

                                            <br/>

                                            <a href="javascript:void(0);" class="btn btn-sm btn-light btn-rounded">Know More <i class="mdi mdi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->

                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <!-- Todo-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Todo</h4>

                                        <div class="todoapp">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h5>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="float-right btn btn-light btn-sm" id="btn-archive">Archive</a>
                                                </div>
                                            </div>

                                            <div style="max-height: 314px;" data-simplebar>
                                                <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                                            </div>

                                            <form name="todo-form" id="todo-form" class="needs-validation" novalidate>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" 
                                                            placeholder="Add new todo" required>
                                                        <div class="invalid-feedback">
                                                            Please enter your task name
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="submit" id="todo-btn-submit">Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- end .todoapp-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-4">
                                <!-- Messages-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Messages</h4>

                                        <div class="inbox-widget">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="../../assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Tomaslau</p>
                                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="../../assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Stillnotdavid</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="../../assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Kurafire</p>
                                                <p class="inbox-item-text">Nice to meet you</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>

                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="../../assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Shahedk</p>
                                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                            <div class="inbox-item">
                                                <div class="inbox-item-img"><img src="../../assets/images/users/avatar-6.jpg" class="rounded-circle" alt=""></div>
                                                <p class="inbox-item-author">Adhamdannaway</p>
                                                <p class="inbox-item-text">This theme is awesome!</p>
                                                <p class="inbox-item-date">
                                                    <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                                </p>
                                            </div>
                                        </div> <!-- end inbox-widget -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-2">Recent Activity</h4>

                                        <div data-simplebar style="max-height: 330px;">
                                            <div class="timeline-alt pb-0">
                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">5 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="font-weight-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="font-weight-bold">"Are you there?"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">2 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                                        <small>Uploaded a photo
                                                            <span class="font-weight-bold">"Error.jpg"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">14 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->  
                            
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Transactions</h4>

                                        <div data-simplebar style="max-height: 320px; overflow-x: hidden;">
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Purchased Hyper Admin Template</a>
                                                    <p class="mb-0 text-muted"><small>Today</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger font-weight-bold pr-2">-$489.30</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Payment received Bootstrap Marketplace</a>
                                                    <p class="mb-0 text-muted"><small>Yesterday</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success font-weight-bold pr-2">+$1578.54</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Freelance work - Shane</a>
                                                    <p class="mb-0 text-muted"><small>16 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success font-weight-bold pr-2">+$247.5</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Hire new developer for work</a>
                                                    <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger font-weight-bold pr-2">-$185.14</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Money received from paypal</a>
                                                    <p class="mb-0 text-muted"><small>28 Aug 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success font-weight-bold pr-2">+$684.45</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Zairo landing purchased</a>
                                                    <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger font-weight-bold pr-2">-$21.00</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-up text-danger font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Purchased Ubold admin template</a>
                                                    <p class="mb-0 text-muted"><small>17 Aug 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-danger font-weight-bold pr-2">-$32.89</span>
                                                </div>
                                            </div>
                                            <div class="row py-1 align-items-center">
                                                <div class="col-auto">
                                                    <i class="mdi mdi-arrow-collapse-down text-success font-18"></i>
                                                </div>
                                                <div class="col pl-0">
                                                    <a href="javascript:void(0);" class="text-body">Interest received</a>
                                                    <p class="mb-0 text-muted"><small>09 Sep 2018</small></p>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="text-success font-weight-bold pr-2">+$784.55</span>
                                                </div>
                                            </div>
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->  
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Sales Summary</h6>
                                        <h3 class="mb-4 mt-2">259</h3>
                                        <div id="spark1" class="apex-charts mb-3" data-colors="#734CEA"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Last Month</h6>
                                                <p class="font-18 mb-0">358</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Current Month</h6>
                                                <p class="font-18 mb-0">194</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Revenue</h6>
                                        <h3 class="mb-4 mt-2">$6,254</h3>
                                        <div id="spark2" class="apex-charts mb-3" data-colors="#34bfa3"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Last Month</h6>
                                                <p class="font-18 mb-0">$781.12</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Current Month</h6>
                                                <p class="font-18 mb-0">$128.2</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Active Users</h6>
                                        <h3 class="mb-4 mt-2">324</h3>
                                        <div id="spark3" class="apex-charts mb-3" data-colors="#f4516c"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Last Month</h6>
                                                <p class="font-18 mb-0 text-success">+15%</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Current Month</h6>
                                                <p class="font-18 mb-0 text-danger">-6.87%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                            <div class="col-xl-3 col-lg-6">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-sm btn-light">View</button>
                                        </div>
                                        <h6 class="text-muted text-uppercase mt-0" title="Revenue">Expense Summary</h6>
                                        <h3 class="mb-4 mt-2">$4,745.2</h3>
                                        <div id="spark4" class="apex-charts mb-3" data-colors="#00c5dc"></div>

                                        <div class="row text-center">
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Last Month</h6>
                                                <p class="font-18 mb-0">$7814</p>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-truncate d-block">Current Month</h6>
                                                <p class="font-18 mb-0">$4782.8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card text-white bg-info overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div>
                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card text-white bg-danger overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4> <i class="mdi mdi-headset"></i> Need help ? Just contact us</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div>
                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card bg-success text-white">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4> <i class="mdi mdi-deskphone"></i> Toll Free : 1-234-567-8901</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div>
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
        <!-- third party js ends -->
        <!-- Chat js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/ui/component.chat.js"></script>

        <!-- Todo js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/ui/component.todo.js"></script>

        <!-- demo:js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/pages/demo.widgets.js"></script>
        <!-- demo end -->
    </body>

</html>