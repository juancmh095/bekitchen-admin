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
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Sucursales</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registro</li>
                  </ol>
                </nav>
    
                <h1 class="page-header-title">Registro de nueva sucursal</h1>
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
                  <a class="nav-link active" href="/sucursales/registro">Registro</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/sucursales">Sucursales</a>
                </li>
                </li>
              </ul>
            </div>
            <!-- End Nav -->
          </div>
          <!-- End Page Header -->
          <form action="{{route('updateSucursal')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-lg-center">
              <div class="col-lg-9">
                <!-- Card -->
                <div class="card card-lg mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Detalles</h4>
                  </div>
                  <!-- End Header -->
      
                  <!-- Body -->
                  <div class="card-body">
                    <!-- Form -->
                    <div class="mb-4">
                      <label class="form-label">Logo</label>
      
                      <div class="d-flex align-items-center">
                        <!-- Avatar -->
                        <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarUploader">
                          <img id="avatarProjectSettingsImg" class="avatar-img" src="{{asset('storage/'.$suc->logo)}}" alt="Image Description">
      
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
                        
                        <button type="button" class="js-file-attach-reset-img btn btn-white">Eliminar</button>
                      </div>
                    </div>
                    <!-- End Form -->
                    <input type="hidden" name="img" value="{{$suc->logo}}">
      
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="nameSucursal" class="form-label">Nombre de la sucursal <i class="bi-question-circle text-body ms-1" data-bs-oggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
      
                      <div class="input-group input-group-merge">
                        <div class="input-group-prepend input-group-text">
                          <i class="bi-briefcase"></i>
                        </div>
                        <input type="text" class="form-control" name="nombre" id="nameSucursal" placeholder="Ingrese el nombre" value="{{$suc->nombre}}">
                      </div>
                    </div>
                    <!-- End Form -->
      
                    <!-- Quill -->
                    <label class="form-label">Descripcion <span class="form-label-secondary">(Opcional)</span></label>
      
                    <!-- Quill -->
                    <div class="quill-custom">
                      <textarea name="descripcion" id="" cols="30" rows="10" class="form-control">{{$suc->descripcion}}</textarea>
                    </div>
                    <!-- End Quill -->
                  </div>
                  <!-- End Body -->
      
                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end align-items-center gap-3">
                    <button type="button" class="btn btn-white">Cancelar</button>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card card-lg mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Horario de Atencion</h4>
                  </div>
                  <!-- End Header -->
      
                  <!-- Body -->
                  <div class="card-body">
      
                    <div class="row">
                      <table class="table">
                        <thead>
                          <th>Dia</th>
                          <th>Inicio</th>
                          <th>Fin</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Lunes</td>
                            @if($suc->lunes && count($suc->lunes)>0)
                              <td>
                                <input type="time" name="lunes[]" class="form-control" value="{{$suc->lunes[0]}}">
                              </td>
                              <td>
                                <input type="time" name="lunes[]" class="form-control" value="{{$suc->lunes[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="lunes[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="lunes[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                          <tr>
                            <td>Martes</td>
                            @if($suc->martes && count($suc->martes)>0)
                              <td>
                                <input type="time" name="martes[]" class="form-control" value="{{$suc->martes[0]}}">
                              </td>
                              <td>
                                <input type="time" name="martes[]" class="form-control" value="{{$suc->martes[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="martes[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="martes[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                          <tr>
                            <td>Miercoles</td>
                            @if($suc->miercoles && count($suc->miercoles)>0)
                              <td>
                                <input type="time" name="miercoles[]" class="form-control" value="{{$suc->miercoles[0]}}">
                              </td>
                              <td>
                                <input type="time" name="miercoles[]" class="form-control" value="{{$suc->miercoles[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="miercoles[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="miercoles[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                          <tr>
                            <td>Jueves</td>
                            @if($suc->jueves && count($suc->jueves)>0)
                              <td>
                                <input type="time" name="jueves[]" class="form-control" value="{{$suc->jueves[0]}}">
                              </td>
                              <td>
                                <input type="time" name="jueves[]" class="form-control" value="{{$suc->jueves[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="jueves[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="jueves[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                          <tr>
                            <td>Viernes</td>
                            @if($suc->viernes && count($suc->viernes)>0)
                              <td>
                                <input type="time" name="viernes[]" class="form-control" value="{{$suc->viernes[0]}}">
                              </td>
                              <td>
                                <input type="time" name="viernes[]" class="form-control" value="{{$suc->viernes[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="viernes[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="viernes[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                          <tr>
                            <td>Sabado</td>
                            @if($suc->sabado && count($suc->sabado)>0)
                              <td>
                                <input type="time" name="sabado[]" class="form-control" value="{{$suc->sabado[0]}}">
                              </td>
                              <td>
                                <input type="time" name="sabado[]" class="form-control" value="{{$suc->sabado[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="sabado[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="sabado[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                          <tr>
                            <td>Domingos</td>
                            @if($suc->domingo && count($suc->domingo)>0)
                              <td>
                                <input type="time" name="domingo[]" class="form-control" value="{{$suc->domingo[0]}}">
                              </td>
                              <td>
                                <input type="time" name="domingo[]" class="form-control" value="{{$suc->domingo[1]}}">
                              </td>
                            @else
                              <td>
                                <input type="time" name="domingo[]" class="form-control">
                              </td>
                              <td>
                                <input type="time" name="domingo[]" class="form-control">
                              </td>
                            @endif
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- End Form Row -->
      
                    
                    
                  </div>
                  <!-- End Body -->
      
                  <!-- Footer -->
                  
                  <!-- End Footer -->
                </div>
                <!-- End Card -->
      
                <!-- Card -->
                <div class="card card-lg">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Direccion y contacto</h4>
                  </div>
                  <!-- End Header -->
      
                  <!-- Body -->
                  <div class="card-body">
                    <div class="row">
      
                      <div class="col-sm-12">
                        <label for="direccion" class="form-label">Dirección</label>
      
                        <!-- Form -->
                        <div class="mb-4">
                          <div class="input-group input-group-merge">
                            <div class="input-group-prepend input-group-text">
                              <i class="bi-globe"></i>
                            </div>
                            <input type="text" class="form-control" name="direccion" id="pac-input" placeholder="Buscar Dirección" value="{{$suc->direccion}}" aria-label="Enter value here">
                          
                            <input type="hidden" name="lat" id="lat" value="{{$suc->lat}}">
                            <input type="hidden" name="lng" id="lng" value="{{$suc->lng}}">
                          </div>
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Form Row -->
      
                    <div class="row">
                      <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="telefono" class="form-label">Telefono</label>
      
                          <!-- Form -->
                          <div class="mb-4">
                              <div class="input-group input-group-merge">
                              <div class="input-group-prepend input-group-text">
                                  <i class="bi-phone"></i>
                              </div>
                              <input type="text" class="form-control" name="telefono" id="telefono" value="{{$suc->telefono}}" placeholder="+52" aria-label="Enter value here">
                              </div>
                          </div>
                        <!-- End Form -->
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Col -->
      
                      <div class="col-lg-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="correo" class="form-label me-2">Correo</label>
      
                          <!-- Form -->
                          <div class="mb-4">
                              <div class="input-group input-group-merge">
                              <div class="input-group-prepend input-group-text">
                                  <i class="bi-envelope"></i>
                              </div>
                              <input type="email" class="form-control" name="correo" id="correo" placeholder="@" value="{{$suc->correo}}" aria-label="Enter value here">
                              </div>
                          </div>
                        <!-- End Form -->
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Col -->
                      
                      <!-- End Col -->
                    </div>
                    <!-- End Form Row -->
      
                    <div class="d-grid gap-2">
                      <!-- Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tienda" id="tienda" value="{{$suc->tienda}}" " @if($suc->tienda == 1) checked @endif>
                        <label class="form-check-label" for="tienda">
                          Recoger en tienda
                        </label>
                      </div>
                      <!-- End Check -->
      
                      <!-- Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="delivery" id="delivery" value="{{$suc->delivery}}" @if($suc->delivery == 1) checked @endif>
                        <label class="form-check-label" for="delivery">
                          Delivery
                        </label>
                      </div>
                      <!-- End Check -->
                    </div>
                  </div>
                  <!-- End Body -->
                  <input type="hidden" name="id" id="" value="{{$suc->id}}">
                  <!-- Footer -->
                  <div class="card-footer d-flex justify-content-end gap-3">
                    <button type="reset" class="btn btn-white">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  <!-- End Footer -->
                </div>
                <!-- End Card -->

                
              </div>
              <!-- End Col -->
            </div>
          </form>
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