<?php
    $app=[
        "empresa"=>"AGIS EXTINTORES",
        "html_lang"=>"es_MX",
        "titulo_secundario"=>"",
        "telefono"=>"948 108 632",
        "email"=>"admin@agis.com",
        "direccion"=>"la direccion de la empresa",
        "direccion_url"=>"la url de la empresa",
        "logo"=>"//agis.local/app/design/theme/assets/media/logo/agis_logo.png"
    ];

    $linkDesktop="web.whatsapp.com/send?phone=+51 ";
    $mi_mensaje_wsp="https://$linkDesktop$app[telefono]&text=¡Hola! Mi *nombre* es $data[name] $data[lastname] estoy *interesado* en sus servicios mi número de *teléfono* es $data[phono].*Accedí al siguiente link* https:$data[url]. Con el siguiente *mensaje* : $data[message]. *Gracias* *por* *su* *atención* ";
