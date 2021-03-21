<script type=”application/ld+json”>
    {
    “@context”: “http://schema.org”,
    “@type”: “WebSite”,
    “url”: “https://www.ejemplo.com/”,
    “potentialAction”: {
            “@type”: “SearchAction”,
            “target”: “https://query.ejemplo.com/search?q={search_term_string}”,
            “query-input”: “required name=search_term_string”
        }
    }
</script>

<!-- enviando info de la empresa -->
<script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "brand" : "<?php echo $info_empresa['empresa']?>",
        "url": "https://<?php echo $_SERVER['HTTP_HOST'] ?>",
        "logo": "https://<?php echo $_SERVER['HTTP_HOST'] ?>/img/site/<?= $miLogo;?>"
        }
    </script>
    <!-- Cursos -->
    <?php if($_SERVER['PHP_SELF']=='producto.php'){?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Course",
      "name": "<?php echo $detalleProducto['producto']; ?>",
      "description": "<?php echo $detalleProducto['resumen_largo']; ?>",
      "provider": {
        "@type": "Organization",
        "name": "<?php echo $info_empresa['empresa']; ?>",
        "sameAs": "https://<?php echo $_SERVER['HTTP_HOST'] ?><?php echo $_SERVER['REQUEST_URI'] ?>"
      }
    }
    </script>
    <?php }?>

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "",
                "item": "https://<?php echo $_SERVER['HTTP_HOST'] ?><?php echo $_SERVER['REQUEST_URI'] ?>"
            }
        ]
        }
    </script>
    <!-- Ficha Google-->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Store",
      "image": [
        "https://<?php echo $_SERVER['HTTP_HOST'] ?>/img/site/<?= $miLogo;?>"
       ],
      "@id": "https://<?php echo $_SERVER['HTTP_HOST'] ?>",
      "name": "<?php echo $info_empresa['empresa']?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo  $info_empresa['direccion']; ?>",
        "addressLocality": "Naucalpan de Ju��rez",
        "addressRegion": "CDMX",
        "postalCode": "53100",
        "addressCountry": "MX"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "4",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "Lillian Ruiz"
        }
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.761293,
        "longitude": -73.982294
      },
      "url": "https://<?php echo $_SERVER['HTTP_HOST'] ?><?php echo $_SERVER['REQUEST_URI'] ?>"
      "telephone": "+521<?php echo  $info_empresa['telefono']; ?>",
      "servesCuisine": "Mexico",
      "priceRange": "$$$",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday"
          ],
          "opens": "09:00",
          "closes": "06:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Wednesday",
            "Thursday",
            "Friday"
          ],
          "opens": "09:00",
          "closes": "06:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "09:00",
          "closes": "06:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "09:00",
          "closes": "06:00"
        }
      ],
      "acceptsReservations": "True"
    }
    </script>