<?php
    include_once("../../model/bd.php");
    include_once("../../controller/info-page.php");
    include_once("../../model/store_info.class.php");

    /** MODEL */
    include_once(__DIR__."/Model/Customer.php");
    $customers = new Customer();
    /** CONTROLLER */

    /** HELPERS */
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
                    <div class="container-fluid px-0">
                        <div class="form-group pt-4 pl-3 d-flex">
                                <p class="h1">Cliente</p>
                            </div>
                            <div class="col-lg-6 mx-auto px-0">
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" class="p-3" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="product">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Apellido</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Mensaje</label>
                                        <textarea type="text" class="form-control" id="message" name="message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="productId">Producto</label>
                                        <select name="productId" id="productId" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Cantidad</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>

                                </form>
 
                                <?php
                                    if ($_POST) {

                                        $data=[
                                            "name"=>$_POST['name'],
                                            "lastname"=>$_POST['lastname'],
                                            "email"=>$_POST['email'],
                                            "message"=>$_POST['message'],
                                            "Quantity"=>$_POST['quantity'],
                                            "id_Article"=>$_POST['productId']
                                        ];

                                        echo $customers->insertar($data);
                                    }
                                ?>
                            </div>
                        </div>
                    <!-- container -->

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