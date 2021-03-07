<div class="left-side-menu">
    
    <!-- LOGO -->
    <a href="//<?=$app['web_url_secure'].$app['base_url_admin']?>" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/images/logo.png" alt="">
        </span>
        <span class="logo-sm">
            <img src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="//<?=$app['web_url_secure'].$app['base_url_admin']?>" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="left-side-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="metismenu side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="/" class="side-nav-link">
                    <i class="dripicons-store"></i>
                    <span> View Store </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="//<?=$app['web_url_secure'].$app['base_url_admin']?>" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge badge-success float-right">4</span>
                    <span> Dasboard </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

            <li class="side-nav-item">
                <a href="<?= $app['base_url_admin']; ?>module/calendar" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Calendario </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="<?= $app['base_url_admin']; ?>module/chat" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Chat </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-money-withdrawal"></i>
                    <span> Ventas </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/orders">Ordenes</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/quotes">Cotizaciones</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/shipments">Envios</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/credits">Créditos</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/returns">Devoluciones</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/billings">Facturación</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/sales/transactions">Transacciones</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="dripicons-box"></i>
                    <span> Catálogo </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']."module/catalog/product/new"; ?>">Productos</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']."module/catalog/category/new"; ?>">Categorias</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="dripicons-user-group"></i>
                    <span> Clientes </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']."module/customer/all"; ?>">Todos los clientes</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']."module/customer/in-line"?>">En linea</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']."module/customer/segment"?>">Segmentar</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']."module/customer/groupClientes"?>">Grupo de clientes</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="dripicons-browser"></i>
                    <span> Diseño </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li class="side-nav-item">
                        <a href="javascript: void(0);" aria-expanded="false">Elementos
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-third-level" aria-expanded="false">
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/page">Página</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/hierarchy">Jerarquia</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/block">Bloques</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/block-dinamico">Bloque dinámico</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/widgets">Widgets</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/plantillas">Plantillas</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/elements/sliders">Sliders</a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav-item">
                        <a href="javascript: void(0);" aria-expanded="false">Diseño
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-third-level" aria-expanded="false">
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/design/configuration">Configuración</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/design/theme">Temas</a>
                            </li>
                            <li>
                                <a href="<?= $app['base_url_admin']; ?>module/design/design/calendar">Calendario</a>
                            </li>
                            <li class="side-nav-item">
                                <a href="javascript: void(0);" aria-expanded="false">Item 2
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="side-nav-forth-level" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);">Item 2.1</a>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);">Item 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="<?= $app['base_url_admin']; ?>module/reports" class="side-nav-link">
                    <i class="uil-chart-bar-alt"></i>
                    <span> Reportes </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/reports/products">Productos</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/reports/customer">Clientes</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/reports/sell">Ventas</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Email </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/email/inbox">Inbox</a>
                    </li>
                </ul>
            </li>

            <!-- <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="apps-ecommerce-products.html">Products</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-products-details.html">Products Details</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-orders.html">Orders</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-orders-details.html">Order Details</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-customers.html">Customers</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-sellers.html">Sellers</a>
                    </li>
                </ul>
            </li> -->

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Proyectos </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/project/list">List</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/project/project-details">Details</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/project/gantt">Gantt <span class="badge badge-pill badge-light-lighten font-10 float-right">New</span></a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/project/create-project">Create Project <span class="badge badge-pill badge-success-lighten font-10 float-right">New</span></a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="<?= $app['base_url_admin']; ?>module/social/index" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span> Social Feed </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Tasks </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/task/list">List</a>
                    </li>
                    <li>
                        <a href="<?= $app['base_url_admin']; ?>module/task/kanban">Kanban Board</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="javascript: void(0);" class="side-nav-link">
                    <i class="uil-package"></i>
                    <span> Sistema </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li>
                        <a href="apps-ecommerce-products.html">Products</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-products-details.html">Products Details</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-orders.html">Orders</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-orders-details.html">Order Details</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-customers.html">Customers</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-sellers.html">Sellers</a>
                    </li>
                    <li>
                        <a href="apps-ecommerce-sellers.html">Usuarios</a>
                    </li>
                </ul>
            </li>

            <li class="side-nav-item">
                <a href="//<?=$app['web_url_secure'].$app['base_url_admin']?>module/authentication/log-out" class="side-nav-link">
                    <i class="mdi mdi-logout mr-1 text-danger"></i>
                    <span> Salir </span>
                </a>
            </li>

        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-right close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="//<?=$app['web_url_secure'].$app['base_url_admin']?>assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
