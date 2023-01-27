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
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="/combos">Combos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Agregar Combo</li>
                </ol>
              </nav>
  
              <h1 class="page-header-title">Agregar Combo</h1>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
        <form action="{{route('registroCombo')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-lg-8 mb-3 mb-lg-0">
              <!-- Card -->
              <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header">
                  <h4 class="card-header-title">Informacion del Combo</h4>
                </div>
                <!-- End Header -->
    
                <!-- Body -->
                <div class="card-body">
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="productNameLabel" class="form-label">Nombre <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Products are the goods or services you sell."></i></label>
    
                    <input type="text" class="form-control" name="nombre" id="productNameLabel" placeholder="Combo.">
                  </div>
                  <!-- End Form -->
  
                  <!-- Form -->
                  <div class="mb-4">
                      <label for="productNameLabel" class="form-label">Banner</label>
  
                      <input type="file" class="form-control" name="foto" id="productNameLabel" placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="Tiro track jacket">
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
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select" name="producto[]" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                              }'>
                        @forEach($productos as $item)
                          <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <div class="col-sm-2 mb-2 mb-sm-0">
                    <input type="number" name="precios[]" class="form-control" placeholder="Precio" id="">
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <!-- Container For Input Field -->
                <div id="addAnotherOptionFieldContainer"></div>

                <a href="javascript:;" class="js-create-field form-link">
                  <i class="bi-plus"></i> Agregar producto existente
                </a>
              </div>

              <!-- Add Another Option Input Field -->
              <div id="addAnotherOptionFieldTemplate" style="display: none;">
                <div class="row mb-4">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select-dynamic form-select" name="producto[]" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true
                              }'>
                            @forEach($productos as $item)
                              <option value="{{$item->id}}">{{$item->nombre}}</option>
                            @endforeach
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Col -->
                  <div class="col-sm-2 mb-2 mb-sm-0">
                    <input type="number" name="precios[]" class="form-control" placeholder="Precio" id="">
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
                  
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
                  <h4 class="card-header-title">Mas Opciones</h4>
                </div>
                <!-- End Header -->
    
                <!-- Body -->
                <div class="card-body">
    
                  <!-- Form -->
                  <div class="mb-4">
                    <label for="categoryLabel" class="form-label">Fecha de expiracion</label>
    
                   <input type="date" class="form-control" name="fecha" id="">
                  </div>
                  <!-- Form -->
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
                    <button type="button" class="btn btn-ghost-danger">Borrar</button>
                  </div>
                  <!-- End Col -->
    
                  <div class="col-auto">
                    <div class="d-flex gap-3">
                      <button type="reset" class="btn btn-ghost-light">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
            </div>
            <!-- End Card -->
          </div>

        </form>
      
      </div>
      <!-- End Content -->

        @include('components.footer')
    </main>
    @include('components.assetstop')
</body>
</html>