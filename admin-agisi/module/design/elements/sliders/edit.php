<?php 
    /** INFO WEBSITE */
    include_once("../../../../controller/info-page.php");
    include_once("../../../../model/store_info.class.php");

    /** MODEL */
    include_once("../Model/Sliders.php");
    $sliders = new Slider();
    $sliders_ = new Slider();

    /** CONTROLLER */
    $where=[
        'id='=>$_GET['id']
    ];
    $sliders =  $sliders->consultar(null,$where);
    $resultProduct=[];
    foreach($sliders as $product):
        $resultProduct['title']=$product['title'];
        $resultProduct['url']=$product['url'];
    endforeach;

    /** HELPERS */
    
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../../../part/header/GTM.php") ?>
        <?php include_once("../../../../part/header/link.php") ?>
        <!-- App css -->
        <?php include_once("../../../../part/header/meta_head.php") ?>
    </head>
    
    <body class="loading" data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":true, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
    <?php include_once("../../../../part/body/GTM.php") ?>    
    <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once("../../../../part/body/nav_left.php") ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page px-0">
                <div class="content">
                    <!-- Topbar Start -->
                    <?php include_once("../../../../part/body/nav_top.php") ?>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid px-0">
                        <div class="form-group pt-4 pl-3 d-flex">
                                <p class="h1">Productos</p>
                            </div>
                            <div class="col-lg-6 mx-auto px-0">
                                <form action="/admin-agisi/module/design/elements/sliders/edit/<?= $_GET['id'];?>" class="p-3" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="product">Título</label>
                                        <input type="text" class="form-control" id="title" name="title" value="<?=$resultProduct['title']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">url</label>
                                        <input type="text" class="form-control" name="url" id="url" value="<?= $resultProduct['url']; ?>">
                                    </div>
                                    
                                    <div class="accordion custom-accordion" id="custom-accordion-one">
                                        <div class="card mb-0">
                                            <div class="card-header card-header-px-0" id="headingFive">
                                                <h5 class="m-0">
                                                    <a class="custom-accordion-title collapsed d-block py-1"
                                                        data-toggle="collapse" href="#collapseFive"
                                                        aria-expanded="false" aria-controls="collapseFive">
                                                        Imagenes , Videos <i
                                                            class="mdi mdi-chevron-down accordion-arrow"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse"
                                                aria-labelledby="headingFive"
                                                data-parent="#custom-accordion-one">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <h5>Desktop</h5>
                                                    </div>
                                                    <div class="my-3">
                                                        <input name="slide_item" type="file" id="formFile" multiple require>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <h5>Móvil</h5>
                                                    </div>
                                                    <div class="my-3">
                                                        <input name="slide_item_mobile" type="file" id="formFile" multiple require>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group p-3">
                                            <div class="row">
                                                <button type="submit" name="createProduct" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <?php
                                    if ($_POST) {
                                        $ruta='../../../../assets/images/sliders/';

                                        
                                            if ((strpos($_FILES['slide_item']['type'], "gif") || strpos($_FILES['slide_item']['type'], "jpeg") || strpos($_FILES['slide_item']['type'], "png") )) {
                                                move_uploaded_file($_FILES['slide_item']['tmp_name'], $ruta.$app['business'].'_'.$_FILES['slide_item']['name']);
                                            }
                                       

                                        
                                            if ((strpos($_FILES['slide_item_mobile']['type'], "gif") || strpos($_FILES['slide_item_mobile']['type'], "jpeg") || strpos($_FILES['slide_item_mobile']['type'], "png") )) {
                                                move_uploaded_file($_FILES['slide_item_mobile']['tmp_name'], $ruta.$app['business'].'_'.$_FILES['slide_item_mobile']['name']);
                                            }
                                        

                                        $data=[
                                            "id"=>$_GET['id'],
                                            "title"=>$_POST['title'],
                                            "url"=>$_POST['url']
                                        ];

                                        if (strlen($_FILES['slide_item']['name']) > 1 ) {
                                            $data['image']=$app['business'].'_'.$_FILES['slide_item']['name'];
                                        }

                                        if (strlen($_FILES['slide_item_mobile']['name']) > 1 ) {
                                            $data['image_mobile']=$app['business'].'_'.$_FILES['slide_item_mobile']['name'];
                                        }

                                        echo $sliders_->actualizar($data);
                                    }
                                ?>
                            </div>
                        </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <?php include_once("../../../../part/body/footer.php") ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php include_once("../../../../part/body/nav_right.php") ?>
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