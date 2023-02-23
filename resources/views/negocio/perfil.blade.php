<!DOCTYPE html>
<html lang="en">
<head>
  @include('components.assets');
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    @include('components.topbar');
    @include('components.navbar');

    <main id="content" role="main" class="main">
        <!-- Content -->
        <div class="content container-fluid">
          <!-- Page Header -->
          <div class="page-header">
            <div class="row align-items-end">
              <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Inicio</a></li>
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Negocio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                  </ol>
                </nav>
    
                <h1 class="page-header-title">Perfil</h1>
              </div>
              <!-- End Col -->
    
             
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Page Header -->
    
          <div class="row">
            <div class="col-lg-3">
              <!-- Navbar -->
              <div class="navbar-expand-lg navbar-vertical mb-3 mb-lg-5">
                <!-- Navbar Toggle -->
                <!-- Navbar Toggle -->
                <div class="d-grid">
                  <button type="button" class="navbar-toggler btn btn-white mb-3" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
                    <span class="d-flex justify-content-between align-items-center">
                      <span class="text-dark">Menu</span>
    
                      <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                      </span>
    
                      <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                      </span>
                    </span>
                  </button>
                </div>
                <!-- End Navbar Toggle -->
                <!-- End Navbar Toggle -->
    
                <!-- Navbar Collapse -->
                <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
                  <ul id="navbarSettings" class="js-sticky-block js-scrollspy card card-navbar-nav nav nav-tabs nav-lg nav-vertical" data-hs-sticky-block-options='{
                         "parentSelector": "#navbarVerticalNavMenu",
                         "targetSelector": "#header",
                         "breakpoint": "lg",
                         "startPoint": "#navbarVerticalNavMenu",
                         "endPoint": "#stickyBlockEndPoint",
                         "stickyOffsetTop": 20
                       }'>
                    <li class="nav-item">
                      <a class="nav-link active" href="#content">
                        <i class="bi-person nav-icon"></i> Informacion basica
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#emailSection">
                        <i class="bi-at nav-icon"></i> Correo
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#redes">
                        <i class="bi-signal nav-icon"></i> Redes sociales
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- End Navbar Collapse -->
              </div>
              <!-- End Navbar -->
            </div>
            
            <div class="col-lg-9">
              <div class="d-grid gap-3 gap-lg-5">
                <form action="{{route('updateNegocio')}}" method="POST" enctype="multipart/form-data">
                  <!-- Card -->
                  @csrf
                  <div class="card mb-3 mb-lg-5">
                    <!-- Profile Cover -->
                    <div class="profile-cover">
                      <div class="profile-cover-img-wrapper">
                        <img id="profileCoverImg" class="profile-cover-img" src="{{asset('static/img/1920x400/img2.jpg')}}" alt="Image Description">
      
                        <!-- Custom File Cover -->
                        <div class="profile-cover-content profile-cover-uploader p-3">
                          <input type="file" class="js-file-attach profile-cover-uploader-input" id="profileCoverUplaoder" data-hs-file-attach-options='{
                                      "textTarget": "#profileCoverImg",
                                      "mode": "image",
                                      "targetAttr": "src",
                                      "allowTypes": [".png", ".jpeg", ".jpg"],
                                      "maxFileSize": "10240"
                                   }'>
                          
                        </div>
                        <!-- End Custom File Cover -->
                      </div>
                    </div>
                    <!-- End Profile Cover -->
      
                    <!-- Avatar -->
                    <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
                      <img id="editAvatarImgModal" class="avatar-img" src="{{asset('storage/'.$negocio->foto)}}" alt="Image Description">
      
                      <input type="file" class="js-file-attach avatar-uploader-input" name="foto" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                                  "textTarget": "#editAvatarImgModal",
                                  "mode": "image",
                                  "targetAttr": "src",
                                  "allowTypes": [".png", ".jpeg", ".jpg"],
                                  "maxFileSize": "10240"
                               }'>
      
                      <span class="avatar-uploader-trigger">
                        <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                      </span>
                    </label>
  
                    <input type="hidden" name="media" value="{{$negocio->foto}}">
                    <!-- End Avatar -->
      
                    <!-- Body -->
                    <div class="card-body">
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Card -->
      
                  <!-- Card -->
                  
                  <div class="card mb-3 mb-lg-5">
                    <div class="card-header">
                      <h2 class="card-title h4">Informacion Basica</h2>
                    </div>
      
                    <!-- Body -->
                    <div class="card-body">
                      <!-- Form -->
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Nombre <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
      
                          <div class="col-sm-9">
                            <div class="input-group input-group-sm-vertical">
                              <input type="text" class="form-control" name="alias" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="{{$negocio->alias}}">
                            </div>
                          </div>
                        </div>
                        <!-- End Form -->
  
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Razon Social <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
      
                          <div class="col-sm-9">
                            <div class="input-group input-group-sm-vertical">
                              <input type="text" class="form-control" name="nombre_comercial" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="{{$negocio->nombre_comercial}}">
                            </div>
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Telefono <span class="form-label-secondary">(Opcional)</span></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="js-input-mask form-control" name="telefono" value="{{$negocio->telefono}}" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="+1 (609) 972-22-22" data-hs-mask-options='{
                                     "mask": "+0(000)000-00-00"
                                   }'>
                          </div>
                        </div>
                        <!-- End Form -->
  
                         <!-- Form -->
                         <div class="row mb-4">
                          <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Tiempo de Preparacion(Min)<i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
      
                          <div class="col-sm-9">
                            <div class="input-group input-group-sm-vertical">
                              <input type="text" class="form-control" name="costo_envio" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="{{$negocio->costo_envio}}">
                            </div>
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <div class="d-flex justify-content-end">
                        </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Card -->
      
                  <!-- Card -->
                  <div id="emailSection" class="card mb-3 mb-lg-5">
                    <div class="card-header">
                      <h4 class="card-title">Email</h4>
                    </div>
      
                    <!-- Body -->
                    <div class="card-body">
      
                      <!-- Form -->
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Email registrado</label>
      
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="newEmailLabel" value="{{$negocio->email}}"  aria-label="Enter new email address">
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- End Form -->
                      </div>
                      <!-- End Body -->
                    </div>
                    <!-- End Card -->    
                    
                  </div>

                  <div id="redes" class="card mb-3 mb-lg-5">
                    <div class="card-header">
                      <h4 class="card-title">Redes sociales</h4>
                    </div>
      
                    <!-- Body -->
                    <div class="card-body">
      
                      <!-- Form -->
                        <!-- Form -->
                        <div class="row mb-4 ">
                          <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Facebook <i class="bi bi-facebook"></i></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="facebook" id="newEmailLabel" value="{{$negocio->facebook}}"  aria-label="Enter new email address">
                          </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Twitter <i class="bi bi-twitter"></i></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="twitter" id="newEmailLabel" value="{{$negocio->twitter}}"  aria-label="Enter new email address">
                          </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Instagram <i class="bi bi-instagram"></i></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="instagram" id="newEmailLabel" value="{{$negocio->instagram}}"  aria-label="Enter new email address">
                          </div>
                        </div>
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Tik Tok <i class="bi bi-tiktok"></i></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="tiktok" id="newEmailLabel" value="{{$negocio->tiktok}}"  aria-label="Enter new email address">
                          </div>
                        </div>
                        <!-- End Form -->
                        
      
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Body -->
                    </div>
                    <!-- End Card -->    
                    
                  </div>

                </form>
              
    
              <!-- Sticky Block End Point -->
              <div id="stickyBlockEndPoint"></div>
            </div>
          
          </div>
          <!-- End Row -->
        </div>
        

        @include('components.footer');
    </main>
    @include('components.assetstop');
</body>
</html>