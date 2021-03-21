<!-- menu -->
<div id="menu-overlay" class="modal_amesh animate__animated animate__fadeIn open_modal">
    <div id="menu_schema" class="menu_schema animate__animated animate__bounceInLeft col-lg-6 col-md-12">
        <div class="form-group">
            <div class="col-12 text-center pt-4 pb-4">
                <a href="/">
                    <p class="h3 text-danger font-weight-bold mb-0">AGIS EXTINTORES</p>
                    <p class="small text-light mb-0">Amesh Global Industries Solutions S.A.C</p>
                </a>
            </div>
            <div class="col-12 form-group">
                <ul class="list">
                    <li class="list_child">
                        <button href="" class="item_list btn-transparent" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-search"></i> 
                        </button>
                    </li>
                    <li class="list_child">
                        <a href="" class="item_list">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list_child">
                        <a href="" class="item_list">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list_child">
                        <a href="" class="item_list">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                    <li class="list_child">
                        <a href="" class="item_list">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-12 form-group">
                <ul class="list flex-column text-left pl-4">
                    <li class="list_child title__cool_nav mr-2">
                        <a href="" class="item_list">
                            Lo más vendido
                        </a>
                    </li>
                    <li class="list_child title__cool_nav mr-2">
                        <a href="categoria" class="item_list">
                            Categorias
                        </a>
                    </li>
                    <li class="list_child title__cool_nav mr-2">
                        <a href="" class="item_list">
                            Productos
                        </a>
                    </li>
                    <li class="list_child title__cool_nav mr-2">
                        <a href="#" class="item_list close_btn">
                            Soluciones Enterprise
                        </a>
                    </li>
                    <li class="list_child title__cool_nav mr-2 ">
                        <a href="/nosotros" class="item_list close_btn">
                            Nosotros
                        </a>
                    </li>
                    <li class="list_child title__cool_nav mr-2 ">
                        <a href="/#contacta" class="item_list close_btn">
                            Contacta
                        </a>
                    </li>
                </ul>
            </div>

            <img src="app/design/theme/assets/media/others/escudo_jerusalem.png" class="img-fluid emblema_jerusalem" alt="escudo jerusalem agis" />
            <img src="app/design/theme/assets/media/others/peru_logo.png" class="img-fluid emblema_peru" alt="escudo jerusalem agis" />
            <div class="form-group box-bottom">
                <button class="btn btn-danger close_btn">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- buscar -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="text-light mb-0">Buscar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="form_buscar" class="modal-body" itemscope itemtype=”http://schema.org/WebSite”>
            <meta itemprop=”url” content=”https://www.ejemplo.com/”/>
            <form action="./buscar" itemprop=”potentialAction” itemscope itemtype=”http://schema.org/SearchAction”>
                <div class="box-content">
                    <meta itemprop=”target” content=”https://query.ejemplo.com/search?q={search_term_string}”/>
                    <input itemprop=”query-input” type="text" name="”search_term_string”" id="search_by" class="form-control pd-3" autocorrect="on">
                    <button type="submit" class="btn_search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>