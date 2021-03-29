<div itemtype="http://schema.org/Product" itemscope>
    <meta itemprop="mpn" content="<?= $slug ?>" />
    <meta itemprop="name" content="<?= $nameProduct ?>" />
    <link itemprop="image" href="<?= $firstImage ?>" />
    <meta itemprop="description" content="<?= $shortDescription ?>" />
    <div itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
        <link itemprop="url" href="<?= $url ?>" />
        <meta itemprop="availability" content="https://schema.org/InStock" />
        <meta itemprop="priceCurrency" content="PEN" />
        <meta itemprop="itemCondition" content="https://schema.org/NewCondition" />
    </div>
    <div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
        <meta itemprop="reviewCount" content="89" />
        <meta itemprop="ratingValue" content="0" />
    </div>
    <div itemprop="review" itemtype="http://schema.org/Review" itemscope>
        <div itemprop="author" itemtype="http://schema.org/Person" itemscope>
        <meta itemprop="name" content="<?= $brand ?>" />
        </div>
        <div itemprop="reviewRating" itemtype="http://schema.org/Rating" itemscope>
        <meta itemprop="ratingValue" content="5" />
        <meta itemprop="bestRating" content="5" />
        </div>
    </div>
    <meta itemprop="sku" content="<?= $sku ?>" />
    <div itemprop="brand" itemtype="http://schema.org/Brand" itemscope>
        <meta itemprop="name" content="<?= $brand ?>" />
    </div>
</div>