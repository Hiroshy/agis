<?php
    include_once("../../../model/bd.php");
    include_once("../../../controller/info-page.php");
    include_once("../../../model/store_info.class.php");

    /** MODEL */
    include_once(__DIR__."/Model/Category.php");
    $new_category = new Category();
    $where=[
        'id='=>$_GET['id']
    ];
    $categorias=$new_category->consultar(null,$where);
    $resultProduct=[];
    foreach($categorias as $categoria):
        $resultProduct['id']=$categoria['id'];
        $resultProduct['active']=$categoria['active'];
        $resultProduct['category']=$categoria['category'];
        $resultProduct['short_description']=$categoria['short_description'];
        $resultProduct['description']=$categoria['description'];
        $resultProduct['slug']=$categoria['slug'];
        $resultProduct['meta_title']=$categoria['meta_title'];
        $resultProduct['meta_keywords']=$categoria['meta_keywords'];
        $resultProduct['meta_description']=$categoria['meta_description'];
    endforeach;

    /** CONTROLLER */

    /** HELPERS */
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../../part/header/GTM.php") ?>
        <?php include_once("../../../part/header/link.php") ?>
        <link href="../../../../assets/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />

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

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <?php include_once("../../../part/body/nav_top.php") ?>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid px-0">
                        <div class="form-group pt-4 pl-3 d-flex">
                                <p class="h1">Categoria</p>
                            </div>
                            <div class="col-lg-6 mx-auto px-0">
                                <form action="/admin-agisi/module/catalog/category/edit/<?=$_GET['id']?>" class="p-3" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate" enctype="multipart/form-data">

                                    <div class="form-check form-switch pb-2">
                                        <input class="form-check-input" type="checkbox" id="activeCategoria" name="activeCategoria" <?= ($resultProduct['active']=='on')?'checked':''; ?>>
                                        <label class="form-check-label" for="activeCategoria">Habilitar Categoria</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Categoria</label>
                                        <input type="text" class="form-control" id="categoria" name="categoria" value="<?= $resultProduct['category']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Descripci??n Corta</label>
                                        <textarea name="short_description" id="" class="form-control"><?= $resultProduct['short_description']; ?></textarea>
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
                                                <div class="card-body p-0">
                                                   <!-- HTML-->
                                                   <input type="hidden" name="description" id="content_product" class="form-control" value="<?= htmlspecialchars($resultProduct['description']); ?>"/>
                                                    <div id="summernote-basic"></div>
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
                                                    
                                                    <div class="my-3">
                                                        <input name="productos" type="file" id="formFile" require>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-header card-header-px-0" id="headingSix">
                                                <h5 class="m-0">
                                                    <a class="custom-accordion-title collapsed d-block py-1"
                                                        data-toggle="collapse" href="#collapseSix"
                                                        aria-expanded="false" aria-controls="collapseSix">
                                                        Optimizaci??n de motores de b??squeda <i
                                                            class="mdi mdi-chevron-down accordion-arrow"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                data-parent="#custom-accordion-one">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="product">URL</label>
                                                        <input type="text" class="form-control" id="metaUrl" name="metaUrl" value="<?= $resultProduct['slug']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="product">Meta Title</label>
                                                        <input type="text" class="form-control" name="metaTitle" value="<?= $resultProduct['meta_title']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="product">Meta Keyword</label>
                                                        <input type="text" class="form-control" name="metaKeyword" value="<?= $resultProduct['meta_keywords']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="product">Meta Description</label>
                                                        <textarea name="metaDescription" id="" class="form-control"><?= $resultProduct['meta_description']; ?></textarea>
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

                                        $ruta='../../../assets/images/category/';

                                        if (strlen($_FILES['productos']['name']) > 1 ) {

                                            if ((strpos($_FILES['productos']['type'], "gif") || strpos($_FILES['productos']['type'], "jpeg") || strpos($_FILES['productos']['type'], "png") )) {
                                                move_uploaded_file($_FILES['productos']['tmp_name'], $ruta.$app['business'].'_'.$_FILES['productos']['name']);
                                            }
                                            
                                        }

                                        $data=[
                                            "id"=>$_GET['id'],
                                            "active"=>$_POST['activeCategoria'],
                                            "category"=>$_POST['categoria'],
                                            "short_description"=>$_POST['short_description'],
                                            "description"=>$_POST['description'],
                                            "slug"=>$_POST['metaUrl'],
                                            "meta_title"=>$_POST['metaTitle'],
                                            "meta_keywords"=>$_POST['metaKeyword'],  
                                            "meta_description"=>$_POST['metaDescription']
                                        ]; 

                                        if (strlen($_FILES['productos']['name']) > 1 ) {
                                            $data['image']=$app['business'].'_'.$_FILES['productos']['name'];
                                        }

                                        echo $new_category->actualizar($data);

                                    }
                                ?>
                            </div>
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
        <!-- plugin js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/summernote-bs4.min.js"></script>
        <!-- Summernote demo -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/pages/demo.summernote.js"></script>
        <!-- plugin js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/vendor/dropzone.min.js"></script>
        <!-- init js -->
        <script src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/js/ui/component.fileupload.js"></script>
        <!-- third party js ends -->
        <script>
            let container=Array.from(document.getElementsByClassName("note-editable"));
            let placeholder=Array.from(document.getElementsByClassName("note-placeholder"))
            placeholder[0].style.display="none"
            let mirror=document.getElementById("content_product");
            container[0].innerHTML='<?= $resultProduct['description']; ?> '
            function copy(){
                mirror.value=container[0].innerHTML
            }

            container[0].addEventListener("mouseleave",copy)
            container[0].addEventListener("keyup",copy)

            function string_to_slug (str) {
                str = str.replace(/^\s+|\s+$/g, ''); // trim
                str = str.toLowerCase();
            
                // remove accents, swap ?? for n, etc
                var from = "??????????????????????????????????????????????/_,:;";
                var to   = "aaaaeeeeiiiioooouuuunc------";
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }

                str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                    .replace(/\s+/g, '-') // collapse whitespace and replace by -
                    .replace(/-+/g, '-'); // collapse dashes

                return str;
            }
            let categoria = document.getElementById('categoria');
            let uri_product = document.getElementById('metaUrl');

            categoria.addEventListener("keyup",()=>{
                uri_product.value=string_to_slug(categoria.value)
            })
        </script>
    </body>

</html>