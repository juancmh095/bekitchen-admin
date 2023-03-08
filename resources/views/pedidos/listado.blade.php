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
                <h1 class="page-header-title">Pedidos <span class="badge bg-soft-dark text-dark ms-2">{{count($pedidos)}}</span></h1>
    
                
              </div>
              <!-- End Col -->
    
              
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
           
              <!-- End Nav -->
            <!-- End Nav Scroller -->
          </div>
          <!-- End Page Header -->
    
          <!-- Card -->
          <div class="card">
            <!-- Header -->
            <div class="card-header card-header-content-sm-between">
             
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
                    <th># pedido</th>
                    <th class="table-column-ps-0">Nombre</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Fecha y Hora</th>
                    <th>Estatus</th>
                    <th>T. Entrega</th>
                    <th>Productos</th>
                    <th>Total</th>
                    <th>Cambiar estatus del pedido</th>
                  </tr>
                </thead>
    
                <tbody>
                  @foreach($pedidos as $pedido)
                  <tr>
                    <td>{{$pedido->id + 150}}</td>
                    <td class="table-column-ps-0">
                      <a class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                          <span class="h5 text-inherit">{{$pedido->usuario->nombre}}</span>
                        </div>
                      </a>
                    </td>
                    <td>{{isset($pedido->usuario)?$pedido->usuario->telefono:'N/A'}}</td>
                    <td>{{isset($pedido->direccion->destino->direccion)?$pedido->direccion->destino->direccion:'N/A'}}</td>
                    <td>{{$pedido->created_at}}</td>
                    <td>
                      @if($pedido->status === 0)
                        <span class="badge text-bg-warning">Pendiente</span>
                      @endif
                      @if($pedido->status === 1)
                        <span class="badge text-bg-info">Preparando</span>
                      @endif
                      @if($pedido->status === 2)
                        <span class="badge text-bg-primary">Terminado</span>
                      @endif
                      @if($pedido->status === 3)
                        <span class="badge text-bg-secondary">Enviado</span>
                      @endif
                      @if($pedido->status === 4)
                        <span class="badge text-bg-success">Entregado</span>
                      @endif
                      @if($pedido->status === 5)
                        <span class="badge text-bg-danger">Cancelada</span>
                      @endif
                    </td>
                    <td>
                      @if($pedido->tipoDelivery == 'Delivery')
                        <span class="badge text-bg-info">Delivery</span>
                      @endif
                      @if($pedido->tipoDelivery != 'Delivery')
                        <span class="badge text-bg-light">Pick n go</span>
                      @endif
                    </td>
                    <td>
                      <ul>
                        @foreach($pedido->productos as $p)
                          <li>{{$p->nombre}} x{{$p->cantidad}}</li>
                        @endforeach
                      </ul>
                    </td>
                    <td>
                        {{$pedido->total}}
                    </td>
                    <td>
                        <form action="{{route('updatePedido')}}">
                          @csrf
                          <input type="hidden" name="id" value="{{$pedido->id}}">
                          <div class="input-group">
                            <select class="form-select" name="status" id="inputGroupSelect04" aria-label="Example select with button addon">
                              
                              <option value="1">Preparando</option>
                              <option value="2">Terminado</option>
                              <option value="3">Enviado</option>
                              <option value="4">Entregado</option>
                              <option value="5">Cancelar</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="submit">Aplicar</button>
                          </div>
                        </form>
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