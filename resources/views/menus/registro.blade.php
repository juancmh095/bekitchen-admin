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
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="/">Inicio</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="/productos">Menus</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Agregar Menu</li>
                </ol>
              </nav>
  
              <h1 class="page-header-title">Agregar Menu</h1>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Informacion del menu</h4>
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="mb-4">
                  <label for="productNameLabel" class="form-label">Nombre <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Products are the goods or services you sell."></i></label>
  
                  <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="Tiro track jacket">
                </div>
                <!-- End Form -->
  
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
  
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Productos</h4>
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body">
                <h6 class="text-cap">Opciones</h6>
  
                <div class="js-add-field" data-hs-add-field-options='{
                      "template": "#addAnotherOptionFieldTemplate",
                      "container": "#addAnotherOptionFieldContainer",
                      "defaultCreated": 0
                    }'>
                  <div class="row mb-4">
                    <div class="col-sm-12 mb-2 mb-sm-0">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="Size">Producto 1</option>
                          <option value="Color">Color</option>
                          <option value="Material">Material</option>
                          <option value="Style">Style</option>
                          <option value="Title">Title</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
  
                  <!-- Container For Input Field -->
                  <div id="addAnotherOptionFieldContainer"></div>
  
                  <a href="javascript:;" class="js-create-field form-link">
                    <i class="bi-plus"></i> Add another option
                  </a>
                </div>
  
                <!-- Add Another Option Input Field -->
                <div id="addAnotherOptionFieldTemplate" style="display: none;">
                  <div class="row mb-4">
                    <div class="col-sm-4 mb-2 mb-sm-0">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select-dynamic form-select" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="Size">Producto 1</option>
                          <option value="Color">Color</option>
                          <option value="Material">Material</option>
                          <option value="Style">Style</option>
                          <option value="Title">Title</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->
  
                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Add Another Option Input Field -->
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
                        <th scope="col" class="table-column-pe-0">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                            <label class="form-check-label">
                            </label>
                            </div>
                        </th>
                        <th class="table-column-ps-0">Producto</th>
                        <th>Tipo</th>
                        <th>Categoria</th>
                        <th>Precio</th>
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
                            <a class="d-flex align-items-center" href="../../ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="{{asset('static/img/400x400/img4.jpg')}}" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Producto 1</h5>
                            </div>
                            </a>
                        </td>
                        <td>Tipo 1</td>
                        <td>Cat 2</td>
                        <td>Precio</td>
                        <td>
                        <div class="btn-group" role="group">
            
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
                    </tbody>
                    </table>
                </div>
                <!-- End Table -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-0">
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-header-title">Combos</h4>
                </div>
                <!-- End Header -->    
                <!-- Body -->
                <div class="card-body">
                  <h6 class="text-cap">Opciones</h6>
    
                  <div class="js-add-field" data-hs-add-field-options='{
                        "template": "#addAnotherOptionFieldTemplate",
                        "container": "#addAnotherOptionFieldContainer",
                        "defaultCreated": 0
                      }'>
                    <div class="row mb-4">
                      <div class="col-sm-12 mb-2 mb-sm-0">
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select form-select" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                            <option value="Size">Combo 1</option>
                            <option value="Color">Color</option>
                            <option value="Material">Material</option>
                            <option value="Style">Style</option>
                            <option value="Title">Title</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
    
                    <!-- Container For Input Field -->
                    <div id="addAnotherOptionFieldContainer"></div>
    
                    <a href="javascript:;" class="js-create-field form-link">
                      <i class="bi-plus"></i> Add another option
                    </a>
                  </div>
    
                  <!-- Add Another Option Input Field -->
                  <div id="addAnotherOptionFieldTemplate" style="display: none;">
                    <div class="row mb-4">
                      <div class="col-sm-4 mb-2 mb-sm-0">
                        <!-- Select -->
                        <div class="tom-select-custom">
                          <select class="js-select-dynamic form-select" data-hs-tom-select-options='{
                                    "searchInDropdown": false,
                                    "hideSearch": true
                                  }'>
                            <option value="Size">Combo 1</option>
                            <option value="Color">Color</option>
                            <option value="Material">Material</option>
                            <option value="Style">Style</option>
                            <option value="Title">Title</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                      <!-- End Col -->
    
                      <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Add Another Option Input Field -->
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
                          <th scope="col" class="table-column-pe-0">
                              <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                              <label class="form-check-label">
                              </label>
                              </div>
                          </th>
                          <th class="table-column-ps-0">Nombre</th>
                          <th>Tipo</th>
                          <th>Categoria</th>
                          <th>Precio</th>
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
                              <a class="d-flex align-items-center" href="../../ecommerce-product-details.html">
                              <div class="flex-shrink-0">
                                  <img class="avatar avatar-lg" src="{{asset('static/img/400x400/img4.jpg')}}" alt="Image Description">
                              </div>
                              <div class="flex-grow-1 ms-3">
                                  <h5 class="text-inherit mb-0">Combo 1</h5>
                              </div>
                              </a>
                          </td>
                          <td>Tipo 1</td>
                          <td>Cat 2</td>
                          <td>Precio</td>
                          <td>
                          <div class="btn-group" role="group">
              
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
                      </tbody>
                      </table>
                  </div>
                  <!-- End Table -->
                </div>
                <!-- Body -->
            </div>
              <!-- End Card -->
          </div>
          <!-- End Col -->
  
          <div class="col-lg-4">
  
            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Sucursales</h4>
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body">
  
                <!-- Form -->
                <div class="mb-4">
                  <label for="categoryLabel" class="form-label">Sucursal</label>
  
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="js-select form-select" autocomplete="off" id="categoryLabel" data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true,
                              "placeholder": "Select category"
                            }'>
                      <option value="Clothing">Sucursal 1</option>
                      <option value="Shoes">Shoes</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
                <!-- Form -->
  
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
                        <th scope="col" class="table-column-pe-0">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                            <label class="form-check-label">
                            </label>
                            </div>
                        </th>
                        <th class="table-column-ps-0">Sucursal</th>
                        <th>Direccion</th>
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
                            <a class="d-flex align-items-center" href="../../ecommerce-product-details.html">
                            <div class="flex-shrink-0">
                                <img class="avatar avatar-lg" src="{{asset('static/img/400x400/img4.jpg')}}" alt="Image Description">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-inherit mb-0">Suc 1</h5>
                            </div>
                            </a>
                        </td>
                        <td>Tipo 1</td>
                        <td>
                        <div class="btn-group" role="group">
            
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
                    </tbody>
                    </table>
                </div>
                <!-- End Table -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
  
        <div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
          <!-- Card -->
          <div class="card card-sm bg-dark border-dark mx-2">
            <div class="card-body">
              <div class="row justify-content-center justify-content-sm-between">
                <div class="col">
                  <button type="button" class="btn btn-ghost-danger">Delete</button>
                </div>
                <!-- End Col -->
  
                <div class="col-auto">
                  <div class="d-flex gap-3">
                    <button type="button" class="btn btn-ghost-light">Discard</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Content -->

        @include('components.footer')
    </main>
    @include('components.assetstop')
</body>
</html>