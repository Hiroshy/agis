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
include("admin-agisi/module/design/elements/Model/SlidersPromo.php");
$sliders = new Slider();
$sliders = $sliders->consultar();

$sliders_ = new SliderPromo();
$sliders_ = $sliders_->consultar();
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
    <?php include('app/design/theme/part/body/carrusel.php');?>
    
    <div class="container-fluid">
      <?php 
        $categoria = $category;
        $categoria = $categoria->consultar(['id'],['slug ='=>"'".$_GET['slug']."'"]);


        $productos = $product;
        $productos = $productos->consultar(null,['active ='=>"'on'","id_Categoria = " => $categoria[0]['id'] ]);

        if ($productos):
          include('app/design/theme/part/body/nuevos-productos.php');
        endif;
      ?>
    </div>

    <div class="container-fluid">
        <div class="form-group text-center py-2">
            <p class="h1">Más vendidos</p>
            <div class="col-md-8 mx-auto">
                <p class="muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, illo officiis recusandae commodi nemo necessitatibus, deleniti dolorum dicta veritatis eum similique! Illum sapiente ipsa dolore voluptate aspernatur ducimus dolorem distinctio!</p>
            </div>
        </div>
        <?php 
          $productos = $product;
          $productos = $productos->consultar(null,['active ='=>"'on'",""]);

          if ($productos):
            include('app/design/theme/part/body/categoria.php');
          endif;
        ?>
    </div>

    <?php include('app/design/theme/part/body/promocion.php');?>    
    <?php include('app/design/theme/part/body/contacta.php'); ?>
    <?php include('app/design/theme/part/body/banner.php'); ?>
    <?php include('app/design/theme/part/footer/footer.php');?>
    <?php include('app/design/theme/part/footer/js.php');?>
    <?php include('app/design/theme/part/footer/json-ld.php');?>
  </body>
</html>