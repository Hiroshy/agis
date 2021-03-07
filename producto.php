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
    <div class="container bg-dark text-center mt-3 py-3 text-light">
        <p class="h2 mb-0">MI CATEGORIA</p>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-6 px-0 mb-3">
                <div id="controles" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/media/carousel/bomberos_agis.jpg" class="img-fluid w-100" alt="Bomberos de AGIS" />
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/media/carousel/bomberos_agis.jpg" class="img-fluid w-100" alt="Bomberos de AGIS" />
                        </div>
                        <a class="carousel-control-prev" href="#controles" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#controles" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="form-group">
                    <h1>Articulo #1</h1>
                    </div>
                    <div class="form-group">
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum commodi, illum dicta sit odio at non sequi nihil officia laudantium explicabo tempore incidunt dolorum, officiis hic. Debitis repudiandae eos recusandae!
                    </p>
                    </div>
                    <div class="form-group">
                    Categoria : <a href="#" class="alert-link text-success">camisas</a>
                    </div>
                    <div class="form-group">
                    Costo : S/ 500.00
                    </div>
                    <div class="btn-group form-group" role="group" aria-label="Basic example">
                    <a href="" target="_blank" class="btn btn-primary"><svg class="svg-inline--fa fa-facebook fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg><!-- <i class="fab fa-facebook"></i> Font Awesome fontawesome.com --></a>
                    <a href="" target="_blank" class="btn btn-info"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter"></i> Font Awesome fontawesome.com --></a>
                    <a href="" target="_blank" class="btn btn-success"><svg class="svg-inline--fa fa-whatsapp fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg><!-- <i class="fab fa-whatsapp"></i> Font Awesome fontawesome.com --></a>
                    </div>
                    <div class="form-group">
                    <a href="#" class="btn-info-agis mx-0">
                        continuar &nbsp; <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right"></i> Font Awesome fontawesome.com -->
                    </a>
                </div>
                <div itemtype="http://schema.org/Course" itemscope>
                    <meta itemprop="mpn" content="inteligencia-emocional" />
                    <meta itemprop="name" content="Executive Anvil" />
                    <link itemprop="image" href="/assets/media/producto/6. TIE.png" />
                    <meta itemprop="description" content="" />
                    <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                        <link itemprop="url" href="//www.arcsoluciones.com.mx/producto/capacitacin/inteligencia-emocional" />
                        <meta itemprop="availability" content="https://schema.org/InStock" />
                        <meta itemprop="priceCurrency" content="MXN" />
                        <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
                    </div>
                    <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
                        <meta itemprop="reviewCount" content="89" />
                        <meta itemprop="ratingValue" content="0" />
                    </div>
                    <div itemprop="review" itemtype="http://schema.org/Review" itemscope>
                        <div itemprop="author" itemtype="http://schema.org/Person" itemscope>
                        <meta itemprop="name" content="ARC SOLUCIONES" />
                        </div>
                        <div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
                        <meta itemprop="ratingValue" content="0" />
                        <meta itemprop="bestRating" content="0" />
                        </div>
                    </div>
                    <meta itemprop="sku" content="inteligencia-emocional" />
                    <div itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
                        <meta itemprop="name" content="ACME" />
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid my-3">
        <div class="container">
            <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
            </div>
        </div>
    </div>
    <?php include('app/design/theme/part/body/categoria.php');?>
    <?php include('app/design/theme/part/promocion.php');?>
    <?php include('app/design/theme/part/body/categoria.php');?>
    <div id="opinionesComentarios" class="container py-5">
            <div class="row">
                    <div class="col-12">
                        <div class="list-group list-group-horizontal text-center" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active text-uppercase text-parrafo fa-2x" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
                                <svg class="svg-inline--fa fa-comment-dots fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment-dots" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M144 208c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg><!-- <i class="far fa-comment-dots"></i> Font Awesome fontawesome.com --> <span class="w-desktop">opinar</span> 
                            </a>
                            <a class="list-group-item list-group-item-action text-uppercase text-parrafo fa-2x" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                <svg class="svg-inline--fa fa-grin-stars fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="grin-stars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm105.6-151.4c-25.9 8.3-64.4 13.1-105.6 13.1s-79.6-4.8-105.6-13.1c-9.8-3.1-19.4 5.3-17.7 15.3 7.9 47.2 71.3 80 123.3 80s115.3-32.9 123.3-80c1.6-9.8-7.7-18.4-17.7-15.3zm-227.9-57.5c-1 6.2 5.4 11 11 7.9l31.3-16.3 31.3 16.3c5.6 3.1 12-1.7 11-7.9l-6-34.9 25.4-24.6c4.5-4.5 1.9-12.2-4.3-13.2l-34.9-5-15.5-31.6c-2.9-5.8-11-5.8-13.9 0l-15.5 31.6-34.9 5c-6.2.9-8.9 8.6-4.3 13.2l25.4 24.6-6.1 34.9zm259.7-72.7l-34.9-5-15.5-31.6c-2.9-5.8-11-5.8-13.9 0l-15.5 31.6-34.9 5c-6.2.9-8.9 8.6-4.3 13.2l25.4 24.6-6 34.9c-1 6.2 5.4 11 11 7.9l31.3-16.3 31.3 16.3c5.6 3.1 12-1.7 11-7.9l-6-34.9 25.4-24.6c4.5-4.6 1.8-12.2-4.4-13.2z"></path></svg><!-- <i class="far fa-grin-stars"></i> Font Awesome fontawesome.com --> <span class="w-desktop">reseñas</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <form id="form" action="//www.arcsoluciones.com.mx/producto/capacitacin/prevencion-y-actuacion-en-caso-de-incendio" method="post" class="mb-5">
                                <input type="hidden" name="id" value="26">
                                <input type="hidden" name="token" value="26f5bd4aa64fdadf96152ca6e6408068">
                                <div class="form-group mt-4">
                                    <p class="clasificacion text-center mt-4">
                                        <input id="radio5" type="radio" name="estrellas" value="5">
                                        <label for="radio5" class="label_estrella"><svg class="svg-inline--fa fa-star fa-w-18 fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star fa-2x"></i> Font Awesome fontawesome.com --></label>
                                        
                                        <input id="radio4" type="radio" name="estrellas" value="4">
                                        <label for="radio4" class="label_estrella"><svg class="svg-inline--fa fa-star fa-w-18 fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star fa-2x"></i> Font Awesome fontawesome.com --></label>
                                        
                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3" class="label_estrella"><svg class="svg-inline--fa fa-star fa-w-18 fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star fa-2x"></i> Font Awesome fontawesome.com --></label>
                                        
                                        <input id="radio2" type="radio" name="estrellas" value="2">
                                        <label for="radio2" class="label_estrella"><svg class="svg-inline--fa fa-star fa-w-18 fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star fa-2x"></i> Font Awesome fontawesome.com --></label>
                                        
                                        <input id="radio1" type="radio" name="estrellas" value="1">
                                        <label for="radio1" class="label_estrella"><svg class="svg-inline--fa fa-star fa-w-18 fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star fa-2x"></i> Font Awesome fontawesome.com --></label>
                                    </p>
                                </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form__group field mx-0 ">
                        <input type="input" class="form__field text-dark" placeholder="titulo_resena_producto" name="titulo_resena_producto" id="titulo_resena_producto" required="">
                        <label for="titulo_resena_producto" class="form__label text-capitalize">Titulo</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form__group field mx-0 ">
                        <input type="email" class="form__field text-dark" placeholder="email" name="email" id="email_resena" required="">
                        <label for="email_resena" class="form__label text-capitalize">email</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form__group field mx-0 ">
                        <input type="input" class="form__field text-dark" placeholder="nombre_completo" name="nombre_completo" id="nombre_completo_resena" required="">
                        <label for="nombre_completo_resena" class="form__label text-capitalize">nombre completo</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form__group field mx-0 ">
                        <input type="input" class="form__field text-dark" maxlength="12" placeholder="telefono" name="telefono" id="telefono_resena" required="">
                        <label for="telefono_resena" class="form__label text-capitalize">teléfono </label>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="form__group field mx-0 ">
                        <input type="input" class="form__field text-dark" placeholder="mensaje_contacto" name="mensaje_contacto" id="mensaje_contacto_resena" required="">
                        <label for="mensaje_contacto_resena" class="form__label text-capitalize">mensaje</label>
                    </div>
                </div>
            </div>
            <div class="form-group text-center w-100">
                <button type="submit" name="crear_opinion" class="btn-submit-form mx-0">Vamos</button>
            </div>
        </div>
    </form>

                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="container py-5">
        <div class="box-comment">
            <ul class="list-unstyled">
                                    <div class="form-group py-5 text-justify text-center">
                            <p class="text-parrafo font-title">Aún no hay ningún comentario. <br> Que esperas para ser el primero...</p>
                            <svg class="svg-inline--fa fa-laugh-squint fa-w-16 fa-5x text-secondary" aria-hidden="true" focusable="false" data-prefix="far" data-icon="laugh-squint" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm141.4 389.4c-37.8 37.8-88 58.6-141.4 58.6s-103.6-20.8-141.4-58.6S48 309.4 48 256s20.8-103.6 58.6-141.4S194.6 56 248 56s103.6 20.8 141.4 58.6S448 202.6 448 256s-20.8 103.6-58.6 141.4zM343.6 196l33.6-40.3c8.6-10.3-3.8-24.8-15.4-18l-80 48c-7.8 4.7-7.8 15.9 0 20.6l80 48c11.5 6.8 24-7.6 15.4-18L343.6 196zm-209.4 58.3l80-48c7.8-4.7 7.8-15.9 0-20.6l-80-48c-11.6-6.9-24 7.7-15.4 18l33.6 40.3-33.6 40.3c-8.7 10.4 3.8 24.8 15.4 18zM362.4 288H133.6c-8.2 0-14.5 7-13.5 15 7.5 59.2 58.9 105 121.1 105h13.6c62.2 0 113.6-45.8 121.1-105 1-8-5.3-15-13.5-15z"></path></svg><!-- <i class="far fa-laugh-squint fa-5x text-secondary"></i> Font Awesome fontawesome.com -->
                        </div>
                                </ul>
        </div>
    </div>                    </div>                
                    </div>
                </div>
            </div>
        </div>
    <?php include('app/design/theme/part/body/contacta.php'); ?>
    <?php include('app/design/theme/part/body/banner.php'); ?>
    <?php include('app/design/theme/part/footer/footer.php');?>
    <?php include('app/design/theme/part/footer/js.php');?>
    <script>
        let btn_trigger=document.getElementById('')
    </script>
  </body>
</html>