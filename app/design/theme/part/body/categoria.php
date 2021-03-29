<div id="categorias" class="container-fluid pt-3 pb-5">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($productos as $producto):?>
                <div class="swiper-slide flex-column">
                    <div class="box_category_father mb-2">
                        <img src="/admin-agisi/assets/images/products/<?= json_decode($producto['image'])[0]; ?>" class="img-fluid mx-0" alt="<?= json_decode($producto['image'])[0]; ?>">
                        <div class="box_category_content flex-column">
                            <a href="producto/<?= $category->consultar(['slug'],['id ='=>"$producto[id_Categoria]"])[0]['slug']; ?>/<?= $producto['meta_URL']; ?>" class="text-light">
                                <h1 class="title__cool"><?= $producto['product'] ?></h1>
                            </a>
                            <p class="muted">
                                <?= $producto['short_description'] ;?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="#">
                            <p class="lead mb-0"> <?= $producto['product'] ?> </p>
                        </a>
                        <p class="muted">$ <?= number_format($producto['price'], 2, ',', ' ');?> </p>
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
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>