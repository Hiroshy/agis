<?php
/**WEBSITE */
include("admin-agisi/model/bd.php");
include("admin-agisi/model/backend.class.php"); 

/**CATALOGO */
include("admin-agisi/module/catalog/product/Model/Product.php"); 
include("admin-agisi/module/catalog/category/Model/Category.php"); 
  $product = new Product();
  $category = new Category();

/**SLIDERS */
include("admin-agisi/module/design/elements/Model/Sliders.php");

/**CHAT,LEAD */
include("admin-agisi/module/chat/Model/Chat.php"); ?>
<!doctype html>
<html lang="<?php echo $app['html_lang'];?>">
  <head>
    <?php include('app/design/theme/part/analytics/head.php');?>
    <?php include('app/design/theme/part/header/css.php');?>
    <?php include('app/design/theme/part/header/meta.php');?>
    <?php include('app/design/theme/part/header/opengraph.php');?>
    <title><?php echo (strlen($app['titulo_secundario'])>2)?$app["titulo_secundario"]." | ".$app["empresa"]:$app["empresa"]; ?></title>
  </head>
  <body>
    <?php include('app/design/theme/part/analytics/body.php');?>
    <?php include('app/design/theme/part/body/lema.php');?>
    <?php include('app/design/theme/part/body/navbar.php');?>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pt-5 pb-3">
                    <p class="muted">
                    ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-md-6 pt-5 pb-3">
                    <p class="muted">
                    ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-md-6 py-5 align-self-center">
                    <div class="form-group">
                        <h1 class="title__cool">Julio Jhonny Diaz Polin</h1>
                        <span class="muted">Director Comercial</span>
                    </div>
                    <div class="form-group">
                        <p class="muted">
                            ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 py-5 align-self-center text-center">
                    <img src="app/design/theme/assets/media/others/ceo_amesh.jpg" class="img-fluid" alt="CEO AMESH">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5 py-5 align-self-center text-center">
                    <img src="app/design/theme/assets/media/logo/agis_logo.png" class="img-fluid" alt="CEO AMESH">
                </div>
                <div class="col-md-7 py-5 align-self-center">
                    <div class="form-group">
                        <h1 class="title__cool">La creación de un imperio</h1>
                        <span class="muted">Solo para valientes</span>
                    </div>
                    <div class="form-group">
                        <p class="muted">
                            ""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="form-group text-center py-2">
            <div class="mx-0" style="max-width:250px">
              <p class="h1 title__cool">Más vendidos</p>
            </div>
            <div class="col-md-8 mx-auto">
                <p class="muted">
                <?php 
                    $mas_vendidos = $category;
                    $mas_vendidos = $mas_vendidos->consultar(['short_description'],null);
                    if ($mas_vendidos) {
                      echo $mas_vendidos[0]['short_description'];
                    }
                  ?>
                </p>
            </div>
        </div>
        <?php 
          $productos = $product;
          $productos = $productos->consultar(null,['active ='=>"'on'"]);

          if ($productos):
            include('app/design/theme/part/body/categoria.php');
          endif;
        ?>
    </div>

    <div class="container-fluid">
        <div class="form-group text-center py-2">
            <p class="h1">Categorias</p>
            <div class="col-md-8 mx-auto">
                <p class="muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, illo officiis recusandae commodi nemo necessitatibus, deleniti dolorum dicta veritatis eum similique! Illum sapiente ipsa dolore voluptate aspernatur ducimus dolorem distinctio!</p>
            </div>
        </div>
        <?php include('app/design/theme/part/body/categoria.php');?>
    </div>
    <?php include('app/design/theme/part/body/contacta.php'); ?>
    <?php include('app/design/theme/part/body/banner.php'); ?>
    <?php include('app/design/theme/part/footer/footer.php');?>
    <?php include('app/design/theme/part/footer/js.php');?>
    <?php include('app/design/theme/part/footer/json-ld.php');?>
  </body>
</html>