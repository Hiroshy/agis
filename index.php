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
    
    <?php 
      $producto_ = $product ;
      $producto_ = $producto_->consultar(null,[
        ' active = ' => "'on'",
        ' favorite = ' => 1,
      ]);
      if ($producto_) {
        $productos=$producto_;
        include('app/design/theme/part/body/nuevos-productos.php');
      }
    ?>

    <div class="container-fluid">
        <div class="text-center py-4">
            
            <div class="mx-0" style="max-width:250px">
              <p class="h1 title__cool">Más vendidos</p>
            </div>
            <div class="col-md-8 mx-auto">
                <p class="muted text-justify">
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
    <?php 
      $sliders = $sliders_;
      include('app/design/theme/part/body/promocion.php');
    ?> 
    <div class="text-center py-4"> 
        <div class="mx-0">
          <p class="h1 title__cool">Productos</p>
        </div>
        <div class="col-md-8 mx-auto">
            <p class="muted text-justify">
              Lo más vendido en AGIS, tenemos desde productos de tlapaleria hasta uniformes hechos a la medida.                </p>
        </div>
    </div>
    
    <?php
      include('app/design/theme/part/body/categoria.php');
    ?>
    <?php include('app/design/theme/part/body/contacta.php'); ?>
    <div class="text-center mt-3 py-4"> 
        <div class="mx-0">
          <p class="h1 title__cool">Categorias</p>
        </div>
    </div>
    <?php 
      $mis_categorias_ =  $category ;
      $categorias_ = $mis_categorias_->consultar();
      include('app/design/theme/part/body/categoria_.php');
    ?>
    <?php include('app/design/theme/part/body/banner.php'); ?>
    <?php include('app/design/theme/part/footer/footer.php');?>
    <?php include('app/design/theme/part/footer/js.php');?>
    <?php include('app/design/theme/part/footer/json-ld.php');?>
  </body>
</html>