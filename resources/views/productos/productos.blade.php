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
          <div class="row align-items-center mb-3">
            <div class="col-sm mb-2 mb-sm-0">
              <h1 class="page-header-title">Productos <span class="badge bg-soft-dark text-dark ms-2">{{count($productos)}}</span></h1>
  
              <div class="mt-2">
                
              </div>
            </div>
            <!-- End Col -->
  
            <div class="col-sm-auto">
              <a class="btn btn-primary" href="/productos/registro">Agregar producto</a>
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
  
            <!-- Nav -->
            <ul class="nav nav-tabs page-header-tabs" id="pageHeaderTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#">Todos los productos</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Archived</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Publish</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Unpublish</a>
              </li> --}}
            </ul>
            <!-- End Nav -->
          </div>
          <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->
  
        <div class="row justify-content-end mb-3">
          <div class="col-lg">
            <!-- Datatable Info -->
            <div id="datatableCounterInfo" style="display: none;">
              <div class="d-sm-flex justify-content-lg-end align-items-sm-center">
                <span class="d-block d-sm-inline-block fs-5 me-3 mb-2 mb-sm-0">
                  <span id="datatableCounter">0</span>
                  Selected
                </span>
                <a class="btn btn-outline-danger btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                  <i class="bi-trash"></i> Delete
                </a>
                <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                  <i class="bi-archive"></i> Archive
                </a>
                <a class="btn btn-white btn-sm mb-2 mb-sm-0 me-2" href="javascript:;">
                  <i class="bi-upload"></i> Publish
                </a>
                <a class="btn btn-white btn-sm mb-2 mb-sm-0" href="javascript:;">
                  <i class="bi-x-lg"></i> Unpublish
                </a>
              </div>
            </div>
            <!-- End Datatable Info -->
          </div>
        </div>
        <!-- End Row -->
  
        <!-- Card -->
        <div class="card">
          
  
          <!-- Table -->
          <div class="table-responsive datatable-custom">
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
                  <th>Activo</th>
                  <th>Product</th>
                  <th>Categoria</th>
                  <th>Descripcion</th>
                  <th>SKU</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                </tr>
              </thead>
  
              <tbody>
                @forEach($productos as $item)
                  <tr>
                    <td>
                      <div class="form-check form-switch">
                        @if($item->status == 0)
                        <form action="{{route('updateProductoS')}}" id="form2" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{$item->id}}">
                          <input type="hidden" name="status" value="1">
                          <input class="form-check-input" type="checkbox" id="stocksCheckbox1" value="{{$item->status}}" onchange="$('#form2').submit()">
                        </form>
                        @else
                          <form action="{{route('updateProductoS')}}" id="form1" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}">
                            <input type="hidden" name="status" value="0">
                            <input class="form-check-input" type="checkbox" id="stocksCheckbox1" value="{{$item->status}}" checked onchange="$('#form1').submit()">
                          </form>
                        @endif
                        <label class="form-check-label" for="stocksCheckbox1"></label>
                      </div>
                    </td>
                    <td>
                      <a class="d-flex align-items-center" href="#">
                        <div class="flex-shrink-0">
                          @if($item->media == "")
                            <img class="avatar avatar-lg" src="{{asset('static/img/producto.jpg')}}" alt="Image Description">
                          @else
                            <img class="avatar avatar-lg" src="{{asset('storage/'.$item->media)}}" alt="Image Description">
                          @endif
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <h5 class="text-inherit mb-0">{{$item->nombre}}</h5>
                        </div>
                      </a>
                    </td>
                    <td>{{$item->categoria}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->sku}}</td>
                    <td>$ {{$item->precio}}</td>
                    <td>
                      <div class="btn-group" role="group">
                        <a class="btn btn-white btn-sm" href="{{route('/producto',['id'=>$item->id])}}">
                          <i class="bi-pencil-fill me-1"></i> Editar
                        </a>
    
                        <!-- Button Group -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-white btn-icon btn-sm dropdown-toggle dropdown-toggle-empty" id="productsEditDropdown1" data-bs-toggle="dropdown" aria-expanded="false"></button>
    
                          <div class="dropdown-menu dropdown-menu-end mt-1" aria-labelledby="productsEditDropdown1">
                            <a class="dropdown-item" href="#">
                              <i class="bi-trash dropdown-item-icon"></i> Eliminar
                            </a>
                          </div>
                        </div>
                        <!-- End Button Group -->
                      </div>
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
                      <option value="12">12</option>
                      <option value="14" selected>14</option>
                      <option value="16">16</option>
                      <option value="18">18</option>
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

        @include('components.footer');
    </main>
    @include('components.assetstop');
</body>
</html>