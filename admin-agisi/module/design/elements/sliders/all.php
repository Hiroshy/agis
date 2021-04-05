<?php 
    /** INFO WEBSITE */
    include_once("../../../../controller/info-page.php");
    include_once("../../../../model/store_info.class.php");

    /** MODEL */
    include_once("../Model/Sliders.php");
    $sliders = new Slider();
    $sliders_ = new Slider();
    $sliders = $sliders->consultar();

    /** CONTROLLER */

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
                    <div class="form-group pt-4 pl-3 d-flex">
                        <p class="h1">Slider</p>
                        <ul class="list-horizontal">
                            <li>
                                <div class="btn-group mb-2 dropright">
                                    <a href="new" class="btn btn-light  ">
                                        Crear Slider
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="container-fluid px-0">
                            
                            <div class="container-fluid px-3 mx-auto">
                                <hr>
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Title</th>
                                            <th>URL</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php foreach($sliders as $slider): ?>
                                        <tr>
                                            <td>
                                                <img src="../../../../assets/images/sliders/<?= $slider['image']; ?>" alt="<?= $slider['image']; ?>" class="img-fluid">
                                            </td>
                                            <td><?= $slider['title']; ?></td>
                                            <td><?= $slider['url']; ?></td>
                                            <td>
                                                <a href="edit/<?= $slider['id'];?>">editar</a>
                                                <a href="?id=<?= $slider['id'];?>">eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- container -->
                    <?php
                        if(isset($_GET['id'])){
                            $registro=[
                                'where'=>'id',
                                'id'=>$_GET['id']
                            ]; 
                            echo $sliders_->eliminar($registro);
                        }
                    ?>

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