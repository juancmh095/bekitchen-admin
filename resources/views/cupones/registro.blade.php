<!DOCTYPE html>
<html lang="en">
<head>
  @include('components.assets')
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">
    @include('components.topbar')
    @include('components.navbar')

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
                  <li class="breadcrumb-item active" aria-current="page">Cupones</li>
                </ol>
              </nav>
  
              <h1 class="page-header-title">Cuponera</h1>
            </div>
            <!-- End Col -->
  
            <div class="col-sm-auto">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventToCalendarModal">
                <i class="bi-plus"></i> Nuevo cupon
              </button>
              <!-- End Button trigger modal -->
            </div>
            <!-- End Col -->
          </div>
        </div>
        <!-- End Page Header -->
  
        
        <!-- Table -->
        <div class="table-responsive datatable-custom" style="height: 100%;">
          <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                  "columnDefs": [{
                      "targets": [0, 4, 9],
                      "width": "5%",
                      "orderable": false
                    }],
                  "order": [],
                  "info": {
                    "totalQty": "#datatableWithPaginationInfoTotalQty"
                  },
                  "search": "#datatableSearch",
                  "entries": "#datatableEntries",
                  "pageLength": 12,
                  "isResponsive": false,
                  "isShowPaging": false,
                  "pagination": "datatablePagination"
                }'>
            <thead class="thead-light">
              <tr>
                <th scope="col" class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                    <label class="form-check-label">
                    </label>
                  </div>
                </th>
                <th class="table-column-ps-0">Nombre</th>
                <th>Code</th>
                <th>Importe Min.</th>
                <th>Activo</th>
                <th>Porcentaje</th>
                <th>Fecha de expiracion</th>
                <th>Numero de canjes</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table-column-pe-0">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll1">
                    <label class="form-check-label" for="datatableCheckAll1"></label>
                  </div>
                </td>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">Cupon 1</h5>
                    </div>
                  </a>
                </td>
                <td>BE-CODE-01</td>
                <td>0</td>
                <td>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="stocksCheckbox1" checked>
                    <label class="form-check-label" for="stocksCheckbox1"></label>
                  </div>
                </td>
                <td>20%</td>   
                <td>01/01/2023</td>   
                <td>N/A</td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="./ecommerce-product-details.html">
                      <i class="bi-pencil-fill me-1"></i> Editar
                    </a>

                    <!-- Button Group -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="productsEditDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>

                      <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                        <a class="dropdown-item" href="#">
                          <i class="bi-trash dropdown-item-icon"></i> Delete
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-archive dropdown-item-icon"></i> Archive
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-upload dropdown-item-icon"></i> Publish
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-x-lg dropdown-item-icon"></i> Unpublish
                        </a>
                      </div>
                    </div>
                    <!-- End Button Group -->
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Table -->

 
        
      </div>
      <!-- End Content -->

        @include('components.footer')
    </main>
    @include('components.assetstop')
</body>
</html>

  <!-- Modal -->
  <div class="modal fade" id="addEventToCalendarModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <label for="eventTitleLabel" class="visually-hidden form-label">Nombre</label>
          <textarea id="eventTitleLabel" class="form-control form-control-title" placeholder="Agregar nombre"></textarea>

          
          <!-- End Row -->
          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-percent nav-icon"></i>
                <div class="flex-grow-1">Descuento por porcentaje</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Flatpickr -->
              <input type="text" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="%">
              <!-- End Flatpickr -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- End Row -->
          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-currency-dollar nav-icon"></i>
                <div class="flex-grow-1">Descuento por importe</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Flatpickr -->
              <input type="text" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="$0,00">
              <!-- End Flatpickr -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-calendar-event nav-icon"></i>
                <div class="flex-grow-1">Limite por fecha</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <label for="eventDateRangeLabel" class="visually-hidden form-label">Date</label>

              <!-- Flatpickr -->
              <input type="text" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="Select dates" data-hs-flatpickr-options='{
                       "dateFormat": "m/d/Y",
                       "mode": "range",
                       "minDate": "12/01/2020"
                     }'>
              <!-- End Flatpickr -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <!-- End Row -->
          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-ticket nav-icon"></i>
                <div class="flex-grow-1">Numero de canjes</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Flatpickr -->
              <input type="number" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="000">
              <!-- End Flatpickr -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-ticket nav-icon"></i>
                <div class="flex-grow-1">Codigo</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Flatpickr -->
              <input type="text" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="BE-CODE-PROMO">
              <!-- End Flatpickr -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->

          <div class="row mb-4">
            <div class="col-sm-3 mb-2 mb-sm-0">
              <div class="d-flex align-items-center mt-2">
                <i class="bi-ticket nav-icon"></i>
                <div class="flex-grow-1">Importe minimo</div>
              </div>
            </div>
            <!-- End Col -->

            <div class="col-sm">
              <!-- Flatpickr -->
              <input type="numbre" id="eventDateRangeLabel" class="flatpickr-custom form-control mb-2" placeholder="0">
              <!-- End Flatpickr -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer gap-3">
          <button type="button" id="discardFormt" class="btn btn-white" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" id="processEvent" class="btn btn-primary">Registrar cupon</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Modal -->