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
                <h1 class="page-header-title">Usuarios <span class="badge bg-soft-dark text-dark ms-2">{{count($usuarios)}}</span></h1>
    
                
              </div>
              <!-- End Col -->
    
              <div class="col-md-auto">
                <a class="btn btn-primary" href="/usuarios/registro">Agregar Usuario</a>
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
                    <a class="nav-link" href="/usuarios/registro">Registro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/usuarios">Usuarios</a>
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
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders" aria-label="Search orders">
                  </div>
                  <!-- End Search -->
                </form>
              </div>
    
              <div class="d-grid d-sm-flex justify-content-sm-end align-items-sm-center gap-2">
                <!-- Datatable Info -->
                <div id="datatableCounterInfo" style="display: none;">
                  <div class="d-flex align-items-center">
                    <span class="fs-5 me-3">
                      <span id="datatableCounter">0</span>
                      Selected
                    </span>
                    <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                      <i class="bi-trash"></i> Delete
                    </a>
                  </div>
                </div>
                <!-- End Datatable Info -->
    
                <!-- Dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-white w-100" id="showHideDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <i class="bi-table me-1"></i> Columns <span class="badge bg-soft-dark text-dark rounded-circle ms-1">5</span>
                  </button>
    
                  <div class="dropdown-menu dropdown-menu-end dropdown-card" aria-labelledby="showHideDropdown" style="width: 15rem;">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="d-grid gap-3">
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_name">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Name</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_name" checked>
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_email">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">E-mail</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_email" checked>
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_phone">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Phone</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_phone">
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_country">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Country</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_country" checked>
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_account_status">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Account status</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_account_status">
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_orders">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Orders</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_orders" checked>
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_total_spent">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Total spent</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_total_spent" checked>
                            </span>
                          </label>
                          <!-- End Form Switch -->
    
                          <!-- Form Switch -->
                          <label class="row form-check form-switch" for="toggleColumn_last_activity">
                            <span class="col-8 col-sm-9 ms-0">
                              <span class="me-2">Last activity</span>
                            </span>
                            <span class="col-4 col-sm-3 text-end">
                              <input type="checkbox" class="form-check-input" id="toggleColumn_last_activity">
                            </span>
                          </label>
                          <!-- End Form Switch -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Dropdown -->
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
                    <th scope="col" class="table-column-pe-0">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                        <label class="form-check-label" for="datatableCheckAll"></label>
                      </div>
                    </th>
                    <th class="table-column-ps-0">Nombre</th>
                    <th>Tipo</th>
                    <th>E-mail</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                  </tr>
                </thead>
    
                <tbody>
                  @foreach($usuarios as $item)
                    <tr>
                      <td class="table-column-pe-0">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="usersDataCheck1">
                          <label class="form-check-label" for="usersDataCheck1"></label>
                        </div>
                      </td>
                      <td class="table-column-ps-0">
                        <a class="d-flex align-items-center" href="{{route('editUser',['id'=>$item->id])}}">
                          <div class="flex-shrink-0">
                            <div class="avatar avatar-circle">
                              <img class="avatar-img" src="{{asset('storage/'.$item->foto)}}" alt="Image Description">
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <span class="h5 text-inherit">{{$item->nombre}} <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Top endorsed"></i></span>
                          </div>
                        </a>
                      </td>
                      <td>{{$item->tipo}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->telefono}}</td>
                      <td>{{$item->direccion}}</td>
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