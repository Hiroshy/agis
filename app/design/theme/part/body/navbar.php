<div class="container-fluid bg-dark py-3 row m-0 sticky-top">
    <div class="col-md-4 col-2 align-self-center text-center px-0">
        <button id="navbar" class="nav-bar">
            <i class="fas fa-bars fa-2x"></i>
        </button>
    </div>
    <div class="col-md-4 col-10 align-self-center text-center">
        <a href="/">
            <p class="h3 text-danger font-weight-bold mb-0">AGIS EXTINTORES</p>
            <p class="small text-light mb-0">Amesh Global Industries Solutions S.A.C</p>
        </a>
    </div>
    <div class="col-md-4 align-self-center text-center b-desktop">
        <a href="" class="font-weight-bold text-light pr-4" data-toggle="tooltip" data-placement="bottom" title="Encuentranos">
                <i class="fas fa-street-view"></i>
        </a>
        <button id="search_term" class="font-weight-bold text-light pr-4 btn-transparent">
            <i class="fas fa-search"></i>
        </button>
        <!-- modal buscar-->
        <div id="form_buscar" class="modal_amesh_buscar">
            <form action="./buscar">
                <div class="box-content">
                    <input type="text" name="search" id="search_by" class="form-control pd-3" autocorrect="on">
                    <button type="submit" class="btn_search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <a href="tel:" class="font-weight-bold text-light">
            <i class="fas fa-phone-volume"></i> <?= $app['telefono'];?>
        </a>
    </div>
</div>