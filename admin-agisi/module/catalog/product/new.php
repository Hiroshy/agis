<?php 
    /** INFO WEBSITE */
    include_once("../../../model/bd.php");
    include_once("../../../controller/info-page.php");
    include_once("../../../model/store_info.class.php");

    /** MODEL */
    include_once(__DIR__."/Model/Product.php");
    $new_product = new Product();
    /** CONTROLLER */

    /** HELPERS */
    
?>
<!DOCTYPE html>
    <html lang="<?= $app['lenguage']; ?>">

    <head>
        <?php include_once("../../../part/header/GTM.php") ?>
        <?php include_once("../../../part/header/link.php") ?>
        <link href="../../../assets/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />

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
                                <p class="h1">Productos</p>
                            </div>
                            <div class="col-lg-6 mx-auto px-0">
                                <form action="<?= $_SERVER['PHP_SELF'] ?>" class="p-3" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">

                                    <div class="form-check form-switch pb-2">
                                        <input class="form-check-input" type="checkbox" id="activeProduct" name="activeProduct">
                                        <label class="form-check-label" for="activeProduct">Habilitar Producto</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Producto</label>
                                        <input type="text" class="form-control" id="productName" name="productName">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Precios</label>
                                        <input type="text" class="form-control" name="productPrice">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Stock</label>
                                        <input type="text" class="form-control" name="productStock">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">SKU</label>
                                        <input type="text" class="form-control" name="productSku">
                                    </div>

                                    <div class="form-group">
                                        <label for="categoria">Categoria</label>
                                        <select name="id_Categoria" id="categoria" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="product">SKU</label>
                                        <input type="text" class="form-control" name="productSku">
                                    </div>

                                    <div class="form-group">
                                        <label for="product">Descripción Corta</label>
                                        <textarea name="short_description" id="" class="form-control"></textarea>
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
                                                   <input type="hidden" name="content_product" id="content_product" class="form-control"/>
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
                                                    
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                        <h3>Arrastra y suelta</h3>
                                                        <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                            <strong>not</strong> actually uploaded.)</span>
                                                    </div>
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
                                                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                            <i class="dripicons-cross"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                        Optimización de motores de búsqueda <i
                                                            class="mdi mdi-chevron-down accordion-arrow"></i>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                                data-parent="#custom-accordion-one">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="product">URL</label>
                                                        <input type="text" class="form-control" id="metaUrl" name="metaUrl">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="product">Meta Title</label>
                                                        <input type="text" class="form-control" name="metaTitle">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="product">Meta Keyword</label>
                                                        <input type="text" class="form-control" name="metaKeyword">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="product">Meta Description</label>
                                                        <textarea name="metaDescription" id="" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="card mb-0">
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
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="url" placeholder="Buscar">
                                                    </div>
                                                    <div id="result_product_relational">
                                                        <div class="row">
                                                        <?php for($i=0;$i<=10;$i++):?>
                                                            <div class="col-md-6 py-3 dflex_center">
                                                                <input type="checkbox" class="form-check-input" name="result_product_relational_<?=$i;?>" id="result_search_<?=$i;?>" value="<?= $id; ?>">
                                                                <label for="result_search_<?=$i;?>" class="label_result_product">
                                                                    <img src="/app/design/theme/assets/media/productos/producto_prueba.jpg" class="img-fluid image_result" alt="POLOS CUSTOMIZADOS">
                                                                    Polos Customizados
                                                                </label>
                                                        </div>
                                                        <?php endfor; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="form-group p-3">
                                            <div class="row">
                                                <button type="submit" name="createProduct" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <?php
                                    if ($_POST) {
                                        $data=[
                                            "active"=>$_POST['activeProduct'],
                                            "product"=>$_POST['productName'],
                                            "id_Categoria"=>$_POST['id_Categoria'],
                                            "price"=>$_POST['productPrice'],
                                            "quantity"=>$_POST['productStock'],
                                            "sku"=>$_POST['productSku'],
                                            "short_description"=>$_POST['short_description'],
                                            "description"=>$_POST['content_product'],
                                            "metaUrl"=>$_POST['metaUrl'],
                                            "metaTitle"=>$_POST['metaTitle'],
                                            "metaKeyword"=>$_POST['metaKeyword'],
                                            "metaDescription"=>$_POST['metaDescription']
                                        ];
                                        print_r($new_product->insertar($data));
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
            let mirror=document.getElementById("content_product");

            function copy(){
                mirror.value=container[0].innerHTML
            }

            container[0].addEventListener("mouseleave",copy)
            container[0].addEventListener("keyup",copy)

            function string_to_slug (str) {
                str = str.replace(/^\s+|\s+$/g, ''); // trim
                str = str.toLowerCase();
            
                // remove accents, swap ñ for n, etc
                var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                var to   = "aaaaeeeeiiiioooouuuunc------";
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }

                str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                    .replace(/\s+/g, '-') // collapse whitespace and replace by -
                    .replace(/-+/g, '-'); // collapse dashes

                return str;
            }
            let productName = document.getElementById('productName');
            let uri_product = document.getElementById('metaUrl');
            productName.addEventListener("keyup",()=>{
                uri_product.value=string_to_slug(productName.value)
            })
        </script>
    </body>

</html>