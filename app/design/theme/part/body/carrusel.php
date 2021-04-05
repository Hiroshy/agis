<div class="container-fluid p-0">
      <div id="controles" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php 
            $ruta ="/admin-agisi/assets/images/sliders/";
            foreach($sliders as $slider):
          ?>
          <div class="carousel-item">
            <img src="<?= $ruta.$slider['image'];?>" src="<?= $ruta.$slider['image'];?> 1024w,<?= $ruta.$slider['image_mobile'];?> 900w" class="img-fluid w-100" alt="Bomberos de AGIS">
            <div class="carousel-caption d-none center_content_carousel">
              <h5 class="text-dark display-4">
                <?= $slider['title'];?>
              </h5>
              <div class="form-group mt-4 d-sm-none">
                <a class="btn-info-agis mx-0" href="<?= $slider['url'];?>">
                  continuar &nbsp; <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fas fa-chevron-right"></i> Font Awesome fontawesome.com -->
                </a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
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