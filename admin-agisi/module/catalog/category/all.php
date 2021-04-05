<?php
    include_once("../../../model/bd.php");
    include_once("../../../controller/info-page.php");
    include_once("../../../model/store_info.class.php");

    /** MODEL */
    include_once(__DIR__."/Model/Category.php");
    $new_category = new Category();
    $categorias=$new_category->consultar()
    /** CONTROLLER */

    /** HELPERS */
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../../part/header/GTM.php") ?>
        <?php include_once("../../../part/header/link.php") ?>
         <!-- third party css -->
         <link href="../../../assets/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../../../assets/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="../../../assets/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!--  <link href="../../../assets/css/vendor/select.bootstrap4.css" rel="stylesheet" type="text/css" />
        third party css end -->
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
                            <div class="form-group pt-4 pl-3 d-flex">
                                <p class="h1">Categorias</p>
                                <ul class="list-horizontal">
                                    <li>
                                        <div class="btn-group mb-2 dropright">
                                            <a href="new" class="btn btn-light  ">
                                                Crear Categoria
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="container-fluid px-3 mx-auto">
                                <hr>
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Imagen</th>
                                            <th>Name</th>
                                            <th>SKU</th>
                                            <th>Descripción corta</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    <?php foreach($categorias as $categoria): ?>
                                        <tr>
                                            <td>
                                                <img src="../../../assets/images/category/<?= $categoria['image']; ?>" alt="<?= $categoria['image']; ?>" class="img-fluid">
                                            </td>
                                            <td><?= $categoria['category']; ?></td>
                                            <td><?= $categoria['sku']; ?></td>
                                            <td><?= $categoria['short_description']; ?></td>
                                            <td>
                                                <a href="edit/<?= $categoria['id'];?>">editar</a>
                                                <a href="?id=<?= $categoria['id'];?>">eliminar</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- container --> 

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <?php include_once("../../../part/body/footer.php") ?>

                <?php
                    if(isset($_GET['id'])){
                        $registro=[
                            'where'=>'id',
                            'id'=>$_GET['id']
                        ]; 
                        echo $new_category->eliminar($registro);
                    }
                ?>

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
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dataTables.bootstrap4.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/responsive.bootstrap4.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dataTables.buttons.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/buttons.bootstrap4.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/buttons.html5.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/buttons.flash.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/buttons.print.min.js"></script>
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dataTables.keyTable.min.js"></script>
        <!-- <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dataTables.select.min.js"></script>
         third party js ends -->

        <!-- demo app -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/pages/demo.datatable-init.js"></script>
        <!-- end demo js-->

    </body>

</html>