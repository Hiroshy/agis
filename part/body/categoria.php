<div id="categorias" class="container-fluid py-5">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php for($i=1;$i<=6;$i=$i+1): ?>
                <div class="swiper-slide flex-column">
                    <div class="box_category_father mb-2">
                        <img src="/assets/media/productos/producto_prueba.jpg" class="img-fluid mx-0" alt="...">
                        <div class="box_category_content flex-column">
                            <h1 class="title__cool">Producto <?= $i; ?></h1>
                            <p class="muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt corporis eligendi beatae, provident eius dolores quaerat neque rem ipsa illo dignissimos iure consequatur, dolorum corrupti assumenda, exercitationem inventore sit aspernatur.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="lead mb-0">Producto <?= $i; ?></p>
                        <p class="muted">$  250.0<?= $i; ?></p>
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
            <?php endfor; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>