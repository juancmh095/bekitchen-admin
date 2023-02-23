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
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="/productos">Productos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Agregar Producto</li>
                </ol>
              </nav>
  
              <h1 class="page-header-title">Agregar producto</h1>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
  
        <form action="{{route('registroProducto')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Informacion del producto</h4>
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body">
                <div class="mb-4">
                  <label class="form-label">Foto</label>
  
                  <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarUploader">
                      <img id="avatarProjectSettingsImg" class="avatar-img" src="{{asset('static/svg/brands/guideline-icon.svg')}}" alt="Image Description">
  
                      <input type="file" name="foto" class="js-file-attach avatar-uploader-input" id="avatarUploader" data-hs-file-attach-options='{
                                "textTarget": "#avatarProjectSettingsImg",
                                "mode": "image",
                                "targetAttr": "src",
                                "resetTarget": ".js-file-attach-reset-img",
                                "resetImg": "./assets/img/160x160/img2.jpg",
                                "allowTypes": [".png", ".jpeg", ".jpg"],
                                "maxFileSize": "2048"
                             }'>
  
                      <span class="avatar-uploader-trigger">
                        <i class="bi-pencil-fill avatar-uploader-icon shadow-sm"></i>
                      </span>
                    </label>
                    <!-- End Avatar -->
  
                    <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                  </div>
                </div>
                <!-- End Form -->
                <!-- Form -->
                <div class="mb-4">
                  <label for="productNameLabel" class="form-label">Nombre <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Products are the goods or services you sell."></i></label>
  
                  <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="pizza, coca cola ..." aria-label="Shirt, t-shirts, etc." required>
                </div>
                <!-- End Form -->
  
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="SKULabel" class="form-label">SKU</label>
  
                      <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032" required>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
  
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="weightLabel" class="form-label">Peso</label>
  
                      <div class="input-group">
                        <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="0.0" aria-label="0.0" required>
  
                        <div class="input-group-append">
                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select form-select" name="unidadm" autocomplete="off" data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "6rem"
                                    }' required>
                              <option value="lb">lb</option>
                              <option value="oz">oz</option>
                              <option value="kg">kg</option>
                              <option value="g">g</option>
                              <option value="Pz" selected>Pz</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
  
                <label class="form-label">Descripcion <span class="form-label-secondary">(Optional)</span></label>
  
                <!-- Quill -->
                <div class="quill-custom">
                  <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

  
            
          </div>
          <!-- End Col -->
  
          <div class="col-lg-4">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Precio</h4>
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="mb-4">
                  <label for="priceNameLabel" class="form-label">Precio</label>
  
                  <div class="input-group">
                    <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00" aria-label="0.00" required>
  
                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "7rem",
                                  "dropdownWrapperClass": "tom-select-custom tom-select-custom-end"
                                }' required>
                                <option value="MXN">MXN</option>
                          <option value="USD" selected>USD</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                </div>
                <!-- End Form -->
  
                <hr class="my-4">
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->
  
            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Organizacion</h4>
              </div>
              <!-- End Header -->
  
              <!-- Body -->
              <div class="card-body">
  
                <!-- Form -->
                <div class="mb-4">
                  <label for="categoryLabel" class="form-label">Categorias</label>
  
                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="js-select form-select" autocomplete="off" name="categoria" id="categoryLabel" data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true,
                              "placeholder": "Select category"
                            }'>
                            @foreach($categorias as $item)
                              <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                            @endforeach
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
                <!-- Form -->
  
                <label for="tagsLabel" class="form-label">Etiquetas</label>
  
                <input type="text" class="form-control" name="tagsLabel" id="tagsLabel" placeholder="Enter tags here" aria-label="Enter tags here" value=".">
              
                <br>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="top">
                  <label class="form-check-label" for="flexCheckDefault">
                    Nuestras Sugerencias
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="flexCheckChecked" name="mas_comprados">
                  <label class="form-check-label" for="flexCheckChecked">
                    Más pedidos
                  </label>
                </div>
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
                    <button type="button" class="btn btn-ghost-light">Cancelar</button>
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

    <script>

      
    </script>
</body>
</html>