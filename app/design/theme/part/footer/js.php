<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>
<!-- Swipper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  if (screen.width<800) {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  }else{
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  }
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  function open_navbar(){
    navbar_overlay.style.right="0"
  }

  function close_navbar(){
    navbar_overlay.style.right="200%"
  }

  let btn=document.getElementById('navbar');
  let navbar_overlay=document.getElementById('menu-overlay');
  let close_navbar_button=Array.from(document.querySelectorAll(".close_btn"))

  for (let index = 0; index < close_navbar_button.length; index++) {
    close_navbar_button[index].addEventListener('click',close_navbar)
  }

  btn.addEventListener('click',open_navbar)
  navbar_overlay.addEventListener('click',close_navbar)

  //Buscar
  search_term=document.getElementById("search_term")
  box_buscar=document.getElementById("form_buscar")
  search_term.addEventListener("click",()=>{
    box_buscar.classList.toggle("dflex")
  })

</script>
<!-- enviando info de la empresa -->
<script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "brand" : "ARC SOLUCIONES",
        "url": "https://www.arcsoluciones.com.mx",
        "logo": "https://www.arcsoluciones.com.mx/img/site/"
        }
    </script>
    <!-- Cursos -->
    
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "",
                "item": "https://www.arcsoluciones.com.mx/producto/capacitacin/inteligencia-emocional"
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
        "https://www.arcsoluciones.com.mx/img/site/"
       ],
      "@id": "https://www.arcsoluciones.com.mx",
      "name": "ARC SOLUCIONES",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Jacinto Pallares 31, Cd. Satélite, 53100 Naucalpan de Juárez, Méx..",
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
      "url": "https://www.arcsoluciones.com.mx/producto/capacitacin/inteligencia-emocional"
      "telephone": "+5215573460744",
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