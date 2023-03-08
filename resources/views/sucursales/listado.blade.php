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
            <div class="row align-items-center mb-3">
              <div class="col-md mb-2 mb-md-0">
                <h1 class="page-header-title">Sucursales <span class="badge bg-soft-dark text-dark ms-2">{{count($sucursales)}}</span></h1>
    
                <div class="d-sm-flex mt-2">
                  
                </div>
              </div>
              <!-- End Col -->
    
              <div class="col-md-auto">
                <a class="btn btn-primary" href="/sucursales/registro">Agregar Sucursal</a>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
    
            <!-- Nav Scroller -->
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
            </div>
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
                    <a class="nav-link" href="/sucursales/registro">Registro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/sucursales">Sucursales</a>
                  </li>
                  </li>
                </ul>
              </div>
              <!-- End Nav -->
            <!-- End Nav Scroller -->
          </div>
          <!-- End Page Header -->
    
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
              <div class="mb-2 mb-sm-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>
                  </div>
                  <!-- End Search -->
                </form>
              </div>
    
              <div class="d-grid d-sm-flex justify-content-sm-end align-items-sm-center gap-2">
                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                  
                </div>
                <!-- End Datatable Info -->
    
            
              </div>
            </div>
            <!-- End Header -->
    
            <!-- Table -->
            <div class="table-responsive datatable-custom">
              <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                       "columnDefs": [{
                          "targets": [0],
                          "orderable": false
                        }],
                       "order": [],
                       "info": {
                         "totalQty": "#datatableWithPaginationInfoTotalQty"
                       },
                       "search": "#datatableSearch",
                       "entries": "#datatableEntries",
                       "pageLength": 15,
                       "isResponsive": false,
                       "isShowPaging": false,
                       "pagination": "datatablePagination"
                     }'>
                <thead class="thead-light">
                  <tr>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Estatus</th>
                    <th>Delivery</th>
                    <th>Tienda</th>
                  </tr>
                </thead>
    
                <tbody>
                  @foreach($sucursales as $sucursal)
                  <tr>
                    <td>
                      <a class="d-flex align-items-center" href="{{route('editarSucursal',['id'=>$sucursal->id])}}">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-circle">
                            <img class="avatar-img" src="{{asset('static/img/tienda.jpg')}}" alt="Image Description">
                          </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="h5 text-inherit">{{$sucursal->nombre}} <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                        </div>
                      </a>
                    </td>
                    <td>{{$sucursal->correo}}</td>
                    <td>{{$sucursal->telefono}}</td>
                    <td>{{$sucursal->direccion}}</td>
                    <td>
                      <span class="legend-indicator bg-success"></span>Activo
                    </td>
                    <td>
                        <span class="legend-indicator bg-success"></span>{{$sucursal->delivery}}
                    </td>
                    <td>
                        <span class="legend-indicator bg-success"></span>{{$sucursal->tienda}}
                    </td>
                  </tr>    
                  @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- End Table -->
    
            <!-- Footer -->
            <div class="card-footer">
              <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                <div class="col-sm mb-2 mb-sm-0">
                  <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                    <span class="me-2">Showing:</span>
    
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select id="datatableEntries" class="js-select form-select form-select-borderless w-auto" autocomplete="off" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                              }'>
                        <option value="10">10</option>
                        <option value="15" selected>15</option>
                        <option value="20">20</option>
                      </select>
                    </div>
                    <!-- End Select -->
    
                    <span class="text-secondary me-2">of</span>
    
                    <!-- Pagination Quantity -->
                    <span id="datatableWithPaginationInfoTotalQty"></span>
                  </div>
                </div>
                <!-- End Col -->
    
                <div class="col-sm-auto">
                  <div class="d-flex justify-content-center justify-content-sm-end">
                    <!-- Pagination -->
                    <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Footer -->
          </div>
          <!-- End Card -->
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