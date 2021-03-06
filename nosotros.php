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
                    <img src="assets/media/others/ceo_amesh.jpg" class="img-fluid" alt="CEO AMESH">
                </div>
            </div>
        </div>
    </div>

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
        <div class="form-group text-center py-2">
            <p class="h1">Categorias</p>
            <div class="col-md-8 mx-auto">
                <p class="muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam, illo officiis recusandae commodi nemo necessitatibus, deleniti dolorum dicta veritatis eum similique! Illum sapiente ipsa dolore voluptate aspernatur ducimus dolorem distinctio!</p>
            </div>
        </div>
        <?php include('part/body/categoria.php');?>
    </div>
    <?php include('part/body/contacta.php'); ?>
    <?php include('part/body/banner.php'); ?>
    <?php include('part/footer/footer.php');?>
    <?php include('part/footer/js.php');?>
  </body>
</html>