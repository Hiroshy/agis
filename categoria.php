<?php include("admin-agisi/model/backend.class.php"); ?>
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
    <?php include('app/design/theme/part/body/nuevos-productos.php');?>
    <div class="container-fluid">
        <div class="form-group text-center py-2">
            <p class="h1">Más vendidos</p>
            <div class="col-md-8 mx-auto">
                <p class="muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, illo officiis recusandae commodi nemo necessitatibus, deleniti dolorum dicta veritatis eum similique! Illum sapiente ipsa dolore voluptate aspernatur ducimus dolorem distinctio!</p>
            </div>
        </div>
        <?php include('app/design/theme/part/body/categoria.php');?>
    </div>

    <?php include('app/design/theme/part/body/promocion.php');?>    
    <?php include('app/design/theme/part/body/contacta.php'); ?>
    <?php include('app/design/theme/part/body/banner.php'); ?>
    <?php include('app/design/theme/part/footer/footer.php');?>
    <?php include('app/design/theme/part/footer/js.php');?>
    <?php include('app/design/theme/part/footer/json-ld.php');?>
  </body>
</html>