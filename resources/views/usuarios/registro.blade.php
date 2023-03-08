<!DOCTYPE html>
<html lang="en">
<head>
  @include('components.assets')
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

    @include('components.topbar');
    @include('components.navbar');

    
    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
          <!-- Page Header -->
          <div class="page-header">
            <div class="row align-items-end mb-3">
              <div class="col-sm">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Usuarios</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registro</li>
                  </ol>
                </nav>
    
                <h1 class="page-header-title">Registro de nuevo usuario</h1>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
    
            <!-- Nav -->
            <!-- Nav -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
              <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                  <i class="bi-chevron-left"></i>
                </a>
              </span>
    
              <span class="hs-nav-scroller-arrow-next" style="display: none;">
                <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                  <i class="bi-chevron-right"></i>
                </a>
              </span>
    
              <ul class="nav nav-tabs page-header-tabs" id="projectsTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" href="/usuarios/registro">Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/usuarios">Usuarios</a>
                </li>
                </li>
              </ul>
            </div>
            <!-- End Nav -->
          </div>
          <!-- End Page Header -->
    
          <div class="row justify-content-lg-center">
            <div class="col-lg-10">
              <!-- Card -->
              <div class="card card-lg mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-header-title">Detalles</h4>
                </div>
                <!-- End Header -->
                <form action="{{route('registrarUsuario')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label">Foto</label>
      
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarUploader">
                          <img id="avatarProjectSettingsImg" class="avatar-img" src="{{asset('static/svg/brands/guideline-icon.svg')}}" alt="Image Description">
      
                          <input type="file" name="foto" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                                    "textTarget": "#avatarProjectSettingsImg",
                                    "mode": "image",
                                    "targetAttr": "src",
                                    "resetTarget": ".js-file-attach-reset-img",
                                    "resetImg": "./assets/img/160x160/img2.jpg",
                                    "allowTypes": [".png", ".jpeg", ".jpg"]
                                 }'>
      
                          <span class="avatar-uploader-trigger">
                            <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                          </span>
                        </label>
                        <!-- End Avatar -->
      
                        <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                      </div>
                    </div>
                    <!-- End Form -->
      
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Nombre(s)</label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-person"></i>
                        </div>
                        <input type="text" class="form-control" name="nombre" id="nameSucursal" placeholder="Ingrese el nombre" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->
      
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Apellido Paterno </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-list"></i>
                        </div>
                        <input type="text" class="form-control" name="ap" id="nameSucursal" placeholder="Ingrese el nombre" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->
  
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Apellido Materno </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-list"></i>
                        </div>
                        <input type="text" class="form-control" name="am" id="nameSucursal" placeholder="Ingrese el nombre" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->
  
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Correo </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-envelope"></i>
                        </div>
                        <input type="email" class="form-control" name="correo" id="nameSucursal" placeholder="Ingrese email" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->
  
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Telefono </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-phone"></i>
                        </div>
                        <input type="phone" class="form-control" name="telefono" id="nameSucursal" maxlength="10" placeholder="Ingrese el nombre" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Password </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-key"></i>
                        </div>
                        <input type="password" class="form-control" name="password" id="nameSucursal" placeholder="*********" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->
  
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Direccion </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-phone"></i>
                        </div>
                        <input type="text" class="form-control" name="direccion" id="nameSucursal" placeholder="Ingrese el nombre" aria-label="Enter project name here">
                      </div>
                    </div>
                    <!-- End Form -->
  
  
  
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Tipo </label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-gear"></i>
                        </div>
                        <select id="" class="form-control" name="tipo">
                          <option value="admin-tienda">Administrador</option>
                          <option value="empleado">Empleado</option>
                        </select>
                      </div>
                    </div>
                    <!-- End Form -->
  
                  </div>
                  <!-- End Body -->
      
                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center gap-3">
                    <button type="reset" class="btn btn-white">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  <!-- End Footer -->

                </form>
              </div>
              <!-- End Card -->
    
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Content -->
    
        <!-- Footer -->
    
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
            </div>
            <!-- End Col -->
    
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Separator -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">FAQ</a>
                  </li>
    
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">License</a>
                  </li>
    
                  <li class="list-inline-item">
                    <!-- Keyboard Shortcuts Toggle -->
                    <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                      <i class="bi-command"></i>
                    </button>
                    <!-- End Keyboard Shortcuts Toggle -->
                  </li>
                </ul>
                <!-- End List Separator -->
              </div>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
    
        <!-- End Footer -->
      </main>
      <!-- ========== END MAIN CONTENT ========== -->

    @include('components.assetstop')
    
</body>
</html>