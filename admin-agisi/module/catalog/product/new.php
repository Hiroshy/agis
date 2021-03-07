<?php 
    include_once("../../../controller/info-page.php");
    include_once("../../../model/store_info.class.php");
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../../part/header/GTM.php") ?>
        <?php include_once("../../../part/header/link.php") ?>
        <!-- App css -->
        <?php include_once("../../../part/header/meta_head.php") ?>
    </head>
    
    <body class="loading" data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":true, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": false}'>
    <?php include_once("../../../part/body/GTM.php") ?>    
    <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <?php include_once("../../../part/body/nav_left.php") ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page px-0">
                <div class="content">
                    <!-- Topbar Start -->
                    <?php include_once("../../../part/body/nav_top.php") ?>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                        <div class="container-fluid px-0">
                            <div class="col-lg-6 px-0">
                            <form class="p-3">

                                <div class="form-check form-switch pb-2">
                                    <input class="form-check-input" type="checkbox" id="activeProduct">
                                    <label class="form-check-label" for="activeProduct">Habilitar Producto</label>
                                </div>

                                <div class="form-group">
                                    <label for="product">Producto</label>
                                    <input type="text" class="form-control" name="product">
                                </div>

                                <div class="form-group">
                                    <label for="product">Nº Articulo</label>
                                    <input type="text" class="form-control" name="n_articulo">
                                </div>

                                <div class="form-group">
                                    <label for="product">Precios</label>
                                    <input type="text" class="form-control" name="price_product">
                                </div>

                                <div class="form-group">
                                    <label for="">Tipo impuesto :</label>
                                    <select class="form-control" aria-label=".form-select-sm example">
                                        <option selected>Tipo de Impuesto</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="accordion custom-accordion" id="custom-accordion-one">
                                    <div class="card mb-0">
                                        <div class="card-header card-header-px-0" id="headingFour">
                                            <h5 class="m-0">
                                                <a class="custom-accordion-title d-block py-1"
                                                    data-toggle="collapse" href="#collapseFour"
                                                    aria-expanded="true" aria-controls="collapseFour">
                                                    Contenido <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                                </a>
                                            </h5>
                                        </div>
                                            
                                        <div id="collapseFour" class="collapse show"
                                            aria-labelledby="headingFour"
                                            data-parent="#custom-accordion-one">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header card-header-px-0" id="headingSix">
                                            <h5 class="m-0">
                                                <a class="custom-accordion-title collapsed d-block py-1"
                                                    data-toggle="collapse" href="#CollapseConfig"
                                                    aria-expanded="false" aria-controls="CollapseConfig">
                                                    Contenido <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="CollapseConfig" class="collapse" aria-labelledby="headingSix"
                                            data-parent="#custom-accordion-one">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
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
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header card-header-px-0" id="headingSix">
                                            <h5 class="m-0">
                                                <a class="custom-accordion-title collapsed d-block py-1"
                                                    data-toggle="collapse" href="#collapseSix"
                                                    aria-expanded="false" aria-controls="collapseSix">
                                                    Optimización de motores de búsqueda <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                            data-parent="#custom-accordion-one">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header card-header-px-0" id="headingSeven">
                                            <h5 class="m-0">
                                                <a class="custom-accordion-title collapsed d-block py-1"
                                                    data-toggle="collapse" href="#collapseSeven"
                                                    aria-expanded="false" aria-controls="collapseSeven">
                                                    Artículos relacionados, ventas mejoradas y ventas cruzadas  <i
                                                        class="mdi mdi-chevron-down accordion-arrow"></i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseSeven" class="collapse"
                                            aria-labelledby="headingSeven"
                                            data-parent="#custom-accordion-one">
                                            <div class="card-body">
                                                ...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group p-3">
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>

                                </form>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <?php include_once("../../../part/body/footer.php") ?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <?php include_once("../../../part/body/nav_right.php") ?>
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