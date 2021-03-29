<div id="nuevos-productos" class="container py-5">
      <div id="carruselProducts" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ($productos as $producto):?>
          <div class="carousel-item">
            <div class="container"> 
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <img src="/admin-agisi/assets/images/products/<?= json_decode($producto['image'])[0]; ?>" class="img-fluid" alt="<?= json_decode($producto['image'])[0]; ?>">
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="form-group">
                    <h1><?= $producto['product'] ?></h1>
                  </div>
                  <div class="form-group">
                    <p class="lead">
                      <?= $producto['short_description'] ;?>
                    </p>
                  </div>
                  <div class="form-group">
                    Categoria : <a href="#" class="alert-link text-success">camisas</a>
                  </div>
                  <div class="form-group">
                    Costo : S/ <?= number_format($producto['price'], 2, ',', ' '); ?>
                  </div>
                  <div class="btn-group form-group" role="group" aria-label="Basic example">
                    <a href="" target="_blank" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
                    <a href="" target="_blank" class="btn btn-info"><i class="fab fa-twitter"></i></a>
                    <a href="" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
                  </div>
                  <div class="form-group">
                    <a href="producto" class="btn-info-agis mx-0">
                      continuar &nbsp; <i class="fas fa-chevron-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div itemtype="http://schema.org/Product" itemscope>
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
          <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carruselProducts" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carruselProducts" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>