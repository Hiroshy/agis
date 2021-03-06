<?php include("admin-agisi/model/backend.class.php"); ?>
<!doctype html>
<html lang="<?php echo $app['html_lang'];?>">
  <head>
    <?php include('part/analytics/head.php');?>
    <?php include('part/header/css.php');?>
    <?php include('part/header/meta.php');?>
    <?php include('part/header/opengraph.php');?>
    <title><?php echo (strlen($app['titulo_secundario'])>2)?$app["titulo_secundario"]." | ".$app["empresa"]:$app["empresa"]; ?></title>
  </head>
  <body>
    <?php include('part/analytics/body.php');?>
    <?php include('part/body/lema.php');?>
    <?php include('part/body/navbar.php');?>
    <?php include('part/body/carrusel.php');?>
    <?php include('part/body/nuevos-productos.php');?>
    <div class="container-fluid">
        <div class="form-group text-center py-2">
            <p class="h1">Más vendidos</p>
            <div class="col-md-8 mx-auto">
                <p class="muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, illo officiis recusandae commodi nemo necessitatibus, deleniti dolorum dicta veritatis eum similique! Illum sapiente ipsa dolore voluptate aspernatur ducimus dolorem distinctio!</p>
            </div>
        </div>
        <?php include('part/body/categoria.php');?>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 align-self-center">
                <p class="h2">Lo mejor de Chalecos</p>
                <div class="mx-auto">
                    <p class="muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, illo officiis recusandae commodi nemo necessitatibus, deleniti dolorum dicta veritatis eum similique! Illum sapiente ipsa dolore voluptate aspernatur ducimus dolorem distinctio!</p>
                </div>
            </div>
            <div class="col-md-7">
                <?php include('part/body/categoria.php');?>
            </div>
        </div>
    </div>

    <?php include('part/promocion.php');?>
    <?php include('part/body/contacta.php'); ?>
    <?php include('part/body/banner.php'); ?>
    <?php include('part/footer/footer.php');?>
    <?php include('part/footer/js.php');?>
  </body>
</html>