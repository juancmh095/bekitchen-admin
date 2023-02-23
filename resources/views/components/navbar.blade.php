<!-- Navbar Vertical -->

<aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-light bg-light">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="{{asset('static/img/bk.jpeg')}}" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="{{asset('static/img/bk.jpeg')}}" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="{{asset('static/img/bk.jpeg')}}" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="{{asset('static/img/bk.jpeg')}}" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link " href="/" data-placement="left">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Inicio</span>
              </a>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Administracion</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="/pedidos" data-placement="left">
                  <i class="bi-journals nav-icon"></i>
                  <span class="nav-link-title">Pedidos</span>
                </a>
              </div>
            </div>
            <!-- End Collapse -->
            
            <span class="dropdown-header mt-4">Negocio</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="/negocio/perfil" data-placement="left">
                  <i class="bi-house-door nav-icon"></i>
                  <span class="nav-link-title">Perfil</span>
                </a>
              </div>
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#sucursales" role="button" data-bs-toggle="collapse" data-bs-target="#sucursales" aria-expanded="false" aria-controls="sucursales">
                  <i class="bi-shop nav-icon"></i>
                  <span class="nav-link-title">Sucursales</span>
                </a>

                <div id="sucursales" class="nav-collapse collapse " data-bs-parent="#sucursales">
                  <a class="nav-link " href="/sucursales/registro">Registrar nueva</a>
                  <a class="nav-link " href="/sucursales">Listado</a>
                </div>
              </div>
              <!-- End Collapse -->
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#menu" role="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-expanded="false" aria-controls="menu">
                  <i class="bi-journal-text nav-icon"></i>
                  <span class="nav-link-title">Menu</span>
                </a>

                <div id="menu" class="nav-collapse collapse " data-bs-parent="#menu">
                  <a class="nav-link " href="/menus/registro">Registrar menu</a>
                  <a class="nav-link " href="/menus">Listado</a>
                </div>
              </div>
              <!-- End Collapse -->
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#productos" role="button" data-bs-toggle="collapse" data-bs-target="#productos" aria-expanded="false" aria-controls="productos">
                  <i class="bi-box-fill nav-icon"></i>
                  <span class="nav-link-title">Productos</span>
                </a>

                <div id="productos" class="nav-collapse collapse " data-bs-parent="#productos">
                  <a class="nav-link " href="/productos/registro">Registrar producto</a>
                  <a class="nav-link " href="/categorias">Categorias</a>
                  <a class="nav-link " href="/productos">Listado</a>
                </div>
              </div>
            </div>
            <!-- End Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle " href="#combos" role="button" data-bs-toggle="collapse" data-bs-target="#combos" aria-expanded="false" aria-controls="combos">
                <i class="bi-box-fill nav-icon"></i>
                <span class="nav-link-title">Combos</span>
              </a>

              <div id="combos" class="nav-collapse collapse " data-bs-parent="#combos">
                <a class="nav-link " href="/combos/registro">Registrar</a>
                <a class="nav-link " href="/combos">Listado</a>
              </div>
            </div>

            <span class="dropdown-header mt-4">Usuarios</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="/usuarios/registro" data-placement="left">
                  <i class="bi-person-plus nav-icon"></i>
                  <span class="nav-link-title">Nuevo Usuario</span>
                </a>
              </div>

              <div class="nav-item">
                <a class="nav-link " href="/usuarios" data-placement="left">
                  <i class="bi-gear-fill nav-icon"></i>
                  <span class="nav-link-title">Administrar</span>
                </a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Configuracion</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="/cuponera" data-placement="left">
                  <i class="bi-ticket nav-icon"></i>
                  <span class="nav-link-title">Cupones</span>
                </a>
              </div>
              {{-- <div class="nav-item">
                <a class="nav-link " href="/negocio/perfil" data-placement="left">
                  <i class="bi-person nav-icon"></i>
                  <span class="nav-link-title">Mi Perfil</span>
                </a>
              </div> --}}
            </div>
            <!-- End Collapse -->

            
            
          </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                </button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Dark">Dark</span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <i class="bi-info-circle"></i>
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                  <span class="dropdown-header">Help</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-journals dropdown-item-icon"></i>
                    <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-command dropdown-item-icon"></i>
                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i>
                    <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-gift dropdown-item-icon"></i>
                    <span class="text-truncate" title="What's new?">What's new?</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Contacts</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                    <span class="text-truncate" title="Contact support">Contact support</span>
                  </a>
                </div>
              </div>
              <!-- End Other Links -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Language -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <img class="avatar avatar-xss avatar-circle" src="{{asset('static/vendor/flag-icon-css/flags/1x1/mx.svg')}}" alt="United States Flag">
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                  <span class="dropdown-header">Select language</span>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('static/vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="Flag">
                    <span class="text-truncate" title="English">English</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="{{asset('static/vendor/flag-icon-css/flags/1x1/mx.svg')}}" alt="Flag">
                    <span class="text-truncate" title="Español">Español</span>
                  </a>
                </div>
              </div>

              <!-- End Language -->
            </li>
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>

  <!-- End Navbar Vertical -->