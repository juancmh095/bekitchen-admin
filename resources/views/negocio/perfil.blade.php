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
    
              <div class="col-sm-auto">
                <a class="btn btn-primary" href="./user-profile-my-profile.html">
                  <i class="bi-person-fill me-1"></i> Mi Perfil
                </a>
              </div>
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
                      <a class="nav-link" href="#passwordSection">
                        <i class="bi-key nav-icon"></i> Contraseña
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#preferencesSection">
                        <i class="bi-gear nav-icon"></i> Preferencias
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#recentDevicesSection">
                        <i class="bi-phone nav-icon"></i> Actividad reciente
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#deleteAccountSection">
                        <i class="bi-trash nav-icon"></i> Eliminar cuenta
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
                <!-- Card -->
                <div class="card">
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
                                    "allowTypes": [".png", ".jpeg", ".jpg"]
                                 }'>
                        <label class="profile-cover-uploader-label btn btn-sm btn-white" for="profileCoverUplaoder">
                          <i class="bi-camera-fill"></i>
                          <span class="d-none d-sm-inline-block ms-1">Upload header</span>
                        </label>
                      </div>
                      <!-- End Custom File Cover -->
                    </div>
                  </div>
                  <!-- End Profile Cover -->
    
                  <!-- Avatar -->
                  <label class="avatar avatar-xxl avatar-circle avatar-uploader profile-cover-avatar" for="editAvatarUploaderModal">
                    <img id="editAvatarImgModal" class="avatar-img" src="{{asset('static/img/logobk.jpeg')}}" alt="Image Description">
    
                    <input type="file" class="js-file-attach avatar-uploader-input" id="editAvatarUploaderModal" data-hs-file-attach-options='{
                                "textTarget": "#editAvatarImgModal",
                                "mode": "image",
                                "targetAttr": "src",
                                "allowTypes": [".png", ".jpeg", ".jpg"]
                             }'>
    
                    <span class="avatar-uploader-trigger">
                      <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                    </span>
                  </label>
                  <!-- End Avatar -->
    
                  <!-- Body -->
                  <div class="card-body">
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div class="card">
                  <div class="card-header">
                    <h2 class="card-title h4">Informacion Basica</h2>
                  </div>
    
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form -->
                    <form>
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Nombre <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
    
                        <div class="col-sm-9">
                          <div class="input-group input-group-sm-vertical">
                            <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="Mark">
                          </div>
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Razon Social <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
    
                        <div class="col-sm-9">
                          <div class="input-group input-group-sm-vertical">
                            <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Your first name" aria-label="Your first name" value="Mark">
                          </div>
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>
    
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" id="emailLabel" placeholder="Email" aria-label="Email" value="mark@site.com">
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Telefono <span class="form-label-secondary">(Opcional)</span></label>
    
                        <div class="col-sm-9">
                          <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" value="+1 (609) 972-22-22" data-hs-mask-options='{
                                   "mask": "+0(000)000-00-00"
                                 }'>
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="organizationLabel" class="col-sm-3 col-form-label form-label">Organization</label>
    
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="organization" id="organizationLabel" placeholder="Your organization" aria-label="Your organization" value="Htmlstream">
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Direccion</label>
    
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="addressLine1" id="addressLine1Label" placeholder="Your address" aria-label="Your address" value="45 Roker Terrace, Latheronwheel">
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div id="emailSection" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Email</h4>
                  </div>
    
                  <!-- Body -->
                  <div class="card-body">
                    <p>Your current email address is <span class="fw-semibold">mark@site.com</span></p>
    
                    <!-- Form -->
                    <form>
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="newEmailLabel" class="col-sm-3 col-form-label form-label">Nuevo email</label>
    
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="newEmail" id="newEmailLabel" placeholder="Enter new email address" aria-label="Enter new email address">
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div id="passwordSection" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Cambiar contraseña</h4>
                  </div>
    
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form -->
                    <form id="changePasswordForm">
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="currentPasswordLabel" class="col-sm-3 col-form-label form-label">Contraseña actual</label>
    
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="currentPassword" id="currentPasswordLabel" placeholder="Enter current password" aria-label="Enter current password">
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="newPassword" class="col-sm-3 col-form-label form-label">Nueva contraseña</label>
    
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Enter new password" aria-label="Enter new password">
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="confirmNewPasswordLabel" class="col-sm-3 col-form-label form-label">Confirmar contraseña</label>
    
                        <div class="col-sm-9">
                          <div class="mb-3">
                            <input type="password" class="form-control" name="confirmNewPassword" id="confirmNewPasswordLabel" placeholder="Confirm your new password" aria-label="Confirm your new password">
                          </div>
    
                          <h5>Password requirements:</h5>
    
                          <p class="fs-6 mb-2">Ensure that these requirements are met:</p>
    
                          <ul class="fs-6">
                            <li>Minimum 8 characters long - the more, the better</li>
                            <li>At least one lowercase character</li>
                            <li>At least one uppercase character</li>
                            <li>At least one number, symbol, or whitespace character</li>
                          </ul>
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div id="preferencesSection" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Preferencias</h4>
                  </div>
    
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form -->
                    <form>
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="languageLabel" class="col-sm-3 col-form-label form-label">Lenguaje</label>
    
                        <div class="col-sm-9">
                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select form-select" id="languageLabel" data-hs-tom-select-options='{
                                      "searchInDropdown": false
                                    }'>
                              <option label="empty"></option>
                              <option value="language2" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('static/vendor/flag-icon-css/flags/1x1/us.svg')}}" alt="Image description" width="16"/><span>English (UK)</span></span>'>English</option>
                              <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="{{asset('static/vendor/flag-icon-css/flags/1x1/es.svg')}}" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>
                      <!-- End Form -->
    
                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="timeZoneLabel" class="col-sm-3 col-form-label form-label">Time zone</label>
    
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="currentPassword" id="timeZoneLabel" placeholder="Your time zone" aria-label="Your time zone" value="GMT+01:00" readonly>
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="row mb-4">
                        <label for="languageLabel" class="col-sm-3 col-form-label form-label">Sucursal Principal</label>
    
                        <div class="col-sm-9">
                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select form-select" id="languageLabel" data-hs-tom-select-options='{
                                      "searchInDropdown": false
                                    }'>
                              <option label="empty"></option>
                              <option>Sucuarsal 1</option>
                              <option>Sucuarsal 1</option>
                              <option>Sucuarsal 1</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>
                      <!-- End Form -->
                      <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div id="recentDevicesSection" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Actividad reciente</h4>
                  </div>
    
                  <!-- Body -->
                  <div class="card-body">
                    <p class="card-text">Vea y administre los dispositivos en los que está conectado actualmente.</p>
                  </div>
                  <!-- End Body -->
    
                  <!-- Table -->
                  <div class="table-responsive">
                    <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
                      <thead class="thead-light">
                        <tr>
                          <th>Browser</th>
                          <th>Device</th>
                          <th>Location</th>
                          <th>Most recent activity</th>
                        </tr>
                      </thead>
    
                      <tbody>
                        <tr>
                          <td class="align-items-center">
                            <img class="avatar avatar-xss me-2" src="{{asset('static/svg/brands/chrome-icon.svg')}}" alt="Image Description"> Chrome on Windows
                          </td>
                          <td><i class="bi-laptop fs-3 me-2"></i> Dell XPS 15 <span class="badge bg-soft-success text-success ms-1">Current</span></td>
                          <td>London, UK</td>
                          <td>Now</td>
                        </tr>
    
                        <tr>
                          <td class="align-items-center">
                            <img class="avatar avatar-xss me-2" src="{{asset('static/svg/brands/chrome-icon.svg')}}" alt="Image Description"> Chrome on Android
                          </td>
                          <td><i class="bi-phone fs-3 me-2"></i> Google Pixel 3a</td>
                          <td>London, UK</td>
                          <td>15, August 2020 15:08</td>
                        </tr>
    
                        <tr>
                          <td class="align-items-center">
                            <img class="avatar avatar-xss me-2" src="{{asset('static/svg/brands/chrome-icon.svg')}}" alt="Image Description"> Chrome on Windows
                          </td>
                          <td><i class="bi-display fs-3 me-2"></i> Microsoft Studio 2</td>
                          <td>London, UK</td>
                          <td>12, August 2020 20:07</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table -->
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div id="deleteAccountSection" class="card">
                  <div class="card-header">
                    <h4 class="card-title">Borrar tu cuenta</h4>
                  </div>
    
                  <!-- Body -->
                  <div class="card-body">
                    <p class="card-text">When you delete your account, you lose access to Front account services, and we permanently delete your personal data. You can cancel the deletion for 14 days.</p>
    
                    <div class="mb-4">
                      <!-- Form Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="deleteAccountCheckbox">
                        <label class="form-check-label" for="deleteAccountCheckbox">
                          Confirm that I want to delete my account.
                        </label>
                      </div>
                      <!-- End Form Check -->
                    </div>
    
                    <div class="d-flex justify-content-end gap-3">
                      <a class="btn btn-white" href="#">Learn more</a>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                  <!-- End Body -->
                </div>
                <!-- End Card -->
              </div>
    
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