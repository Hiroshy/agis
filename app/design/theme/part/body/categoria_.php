<div id="categorias" class="container-fluid pt-3 pb-5">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($categorias_ as $categoria):?>
                
                <div class="swiper-slide flex-column">
                    <div class="box_category_father mb-2">
                        <img src="/admin-agisi/assets/images/category/<?= $categoria['image']; ?>" class="img-fluid mx-0" alt="<?= $categoria['image']; ?>">
                        <div class="box_category_content flex-column">
                            <a href="/categoria/<?= $categoria['slug'] ?>" class="text-light">
                                <h1 class="title__cool"><?= $categoria['category'] ?></h1>
                            </a>
                            <p class="muted">
                                <?= $categoria['short_description'] ;?>
                            </p>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="/categoria/<?= $categoria['slug'] ?>">
                            <p class="lead mb-0"> <?= $categoria['category'] ?> </p>
                        </a>
                    </div>
                    <div itemtype="http://schema.org/Product" itemscope>
                        <meta itemprop="mpn" content="//<?= $_SERVER['HTTP_HOST']?>/categoria/<?= $categoria['slug'] ?>" />
                        <meta itemprop="name" content="<?= $categoria['short_description'] ;?>" />
                        <link itemprop="image" href="//<?= $_SERVER['HTTP_HOST']?>/admin-agisi/assets/images/category/<?= $categoria['image']; ?>" />
                        <meta itemprop="description" content="<?= $categoria['short_description'] ;?>" />
                        <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                            <link itemprop="url" href="//<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
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
                            <meta itemprop="name" content="<?= $categoria['short_description'] ;?>" />
                            </div>
                            <div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
                            <meta itemprop="ratingValue" content="0" />
                            <meta itemprop="bestRating" content="0" />
                            </div>
                        </div>
                        <meta itemprop="sku" content="inteligencia-emocional" />
                        <div itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
                            <meta itemprop="name" content="<?= $categoria['short_description'] ;?>" />
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>