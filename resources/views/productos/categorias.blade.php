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
                  <li class="breadcrumb-item active" aria-current="page">Categorias</li>
                </ol>
              </nav>
  
              <h1 class="page-header-title">Categorias</h1>
            </div>
            <!-- End Col -->
  
            <div class="col-sm-auto">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventToCalendarModal">
                <i class="bi-plus"></i> Nuevo Categoria
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
                <th class="table-column-ps-0">Categoria</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              @foreach($categorias as $item)
              <tr>
                <td class="table-column-ps-0">
                  <a class="d-flex align-items-center" href="#">
                    <div class="flex-grow-1 ms-3">
                      <h5 class="text-inherit mb-0">{{$item->nombre}}</h5>
                    </div>
                  </a>
                </td>
                <td>
                  <div class="btn-group" role="group">
                    <a class="btn btn-white btn-sm" href="{{route('deleteCategoria',['id'=>$item->id])}}">
                        <i class="bi-trash dropdown-item-icon"></i> Eliminar
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
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
        <form action="{{route('registroCategoria')}}" method="POST">
          @csrf
          <div class="modal-body">
            <label for="eventTitleLabel" class="visually-hidden form-label">Nombre</label>
            <textarea id="eventTitleLabel" class="form-control form-control-title" name="nombre" placeholder="Agregar Categoria"></textarea>
  
            
          </div>
          <!-- End Body -->
  
          <!-- Footer -->
          <div class="modal-footer gap-3">
            <button type="reset" id="discardFormt" class="btn btn-white" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" id="processEvent" class="btn btn-primary">Registrar</button>
          </div>
          <!-- End Footer -->

        </form>
        <!-- Body -->
      </div>
    </div>
  </div>

  <!-- End Modal -->