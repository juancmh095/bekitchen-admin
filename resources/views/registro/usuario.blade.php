<!DOCTYPE html>
<html lang="en">
<head>
  @include('components.assets')
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

    <main role="main" class="main" style="padding-left: 0px;">
        <div class="content container-fluid">
            <!-- Step Form -->
            <form class="js-step-form py-md-5" id="form-add-user" data-hs-step-form-options='{
                    "progressSelector": "#addUserStepFormProgress",
                    "stepsSelector": "#addUserStepFormContent",
                    "endSelector": "#addUserFinishBtn",
                    "isValidate": false
                  }'>
              <div class="row justify-content-lg-center">
                <div class="col-lg-8">
                  <!-- Step -->
                  <ul id="addUserStepFormProgress" class="js-step-progress step step-sm step-icon-sm step step-inline step-item-between mb-3 mb-md-5">
                    <li class="step-item">
                      <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                          "targetSelector": "#addUserStepProfile"
                        }'>
                        <span class="step-icon step-icon-soft-dark">1</span>
                        <div class="step-content">
                          <span class="step-title">Perfil</span>
                        </div>
                      </a>
                    </li>
      
                    <li class="step-item">
                      <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                          "targetSelector": "#addUserStepBillingAddress"
                        }'>
                        <span class="step-icon step-icon-soft-dark">2</span>
                        <div class="step-content">
                          <span class="step-title">Datos del negocio</span>
                        </div>
                      </a>
                    </li>
      
                    <li class="step-item">
                      <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                          "targetSelector": "#addUserStepConfirmation"
                        }'>
                        <span class="step-icon step-icon-soft-dark">3</span>
                        <div class="step-content">
                          <span class="step-title">Confirmation</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- End Step -->
      
                  <!-- Content Step Form -->
                  <div id="addUserStepFormContent">
                    <!-- Card -->
                    <div id="addUserStepProfile" class="card card-lg active">
                      <!-- Body -->
                      <div class="card-body">
                        <!-- Form -->
                        <div class="row mb-4">
                          <label class="col-sm-3 col-form-label form-label">Avatar</label>
      
                          <div class="col-sm-9">
                            <div class="d-flex align-items-center">
                              <!-- Avatar -->
                              <label class="avatar avatar-xl avatar-circle avatar-uploader me-5" for="avatarUploader">
                                <img id="avatarImg" class="avatar-img" src="{{asset('/static/img/160x160/img1.jpg')}}" alt="Image Description">
      
                                <input type="file" class="js-file-attach avatar-uploader-input" name="avatar" id="avatarUploader" data-hs-file-attach-options='{
                                          "textTarget": "#avatarImg",
                                          "mode": "image",
                                          "targetAttr": "src",
                                          "resetTarget": ".js-file-attach-reset-img",
                                          "resetImg": "{{asset('/static/img/img/160x160/img1.jpg')}}",
                                          "allowTypes": [".png", ".jpeg", ".jpg"]
                                       }'>
      
                                <span class="avatar-uploader-trigger">
                                  <i class="bi-pencil avatar-uploader-icon shadow-sm"></i>
                                </span>
                              </label>
                              <!-- End Avatar -->
      
                              <button type="button" class="js-file-attach-reset-img btn btn-white">Eliminar</button>
                            </div>
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="firstNameLabel" class="col-sm-3 col-form-label form-label">Nombre completo <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Displayed on public forums, such as Front."></i></label>
      
                          <div class="col-sm-9">
                            <div class="input-group input-group-sm-vertical">
                              <input type="text" class="form-control" name="nombre" id="firstNameLabel" placeholder="Juan" aria-label="Clarice">
                              <input type="text" class="form-control" name="apellidos" id="lastNameLabel" placeholder="Perez..." aria-label="Boone">
                            </div>
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="emailLabel" class="col-sm-3 col-form-label form-label">Email</label>
      
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="emailLabel" placeholder="@bekitchen.com" aria-label="clarice@site.com">
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="js-add-field row mb-4" data-hs-add-field-options='{
                                "template": "#addPhoneFieldTemplate",
                                "container": "#addPhoneFieldContainer",
                                "defaultCreated": 0
                              }'>
                          <label for="phoneLabel" class="col-sm-3 col-form-label form-label">Telefonos</label>
      
                          <div class="col-sm-9">
                            <div class="input-group input-group-sm-vertical">
                              <input type="text" class="js-input-mask form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                       "mask": "+0(000)000-00-00"
                                     }'>
      
                              <!-- Select -->
                              <div class="tom-select-custom tom-select-custom-end">
                                <select class="js-select form-select" autocomplete="off" name="telefonos" data-hs-tom-select-options='{
                                          "searchInDropdown": false,
                                          "hideSearch": true,
                                          "dropdownWidth": "8rem"
                                        }'>
                                  <option value="Mobile" selected>Celular</option>
                                  <option value="Work">Telefono</option>
                                  <option value="Fax">Fax</option>
                                  <option value="Direct">Directo</option>
                                </select>
                              </div>
                              <!-- End Select -->
                            </div>
      
                            <!-- Container For Input Field -->
                            <div id="addPhoneFieldContainer"></div>
      
                            <a class="js-create-field form-link" href="javascript:;">
                              <i class="bi-plus"></i> Agregar nuevo numero
                            </a>
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Add Phone Input Field -->
                        <div id="addAddressFieldTemplate" style="display: none;">
                          <div class="input-group-add-field">
                            <input type="text" class="form-control" data-name="addressLine" placeholder="Your address" aria-label="Your address">
      
                            <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                              <i class="bi-x-lg"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Add Phone Input Field -->
      
                        <!-- Add Phone Input Field -->
                        <div id="addPhoneFieldTemplate" class="input-group-add-field" style="display: none;">
                          <div class="input-group input-group-sm-vertical align-items-center">
                            <input type="text" class="js-input-mask form-control" data-name="additionlPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                     "mask": "+0(000)000-00-00"
                                   }'>
      
                            <div class="input-group-append">
                              <!-- Select -->
                              <div class="tom-select-custom tom-select-custom-end">
                                <select class="js-select-dynamic form-select" autocomplete="off" name="telefonos" data-name="phoneSelect" data-hs-tom-select-options='{
                                          "searchInDropdown": false,
                                          "hideSearch": true,
                                          "dropdownWidth": "8rem"
                                        }'>
                                        <option value="Mobile" selected>Celular</option>
                                        <option value="Work">Telefono</option>
                                        <option value="Fax">Fax</option>
                                        <option value="Direct">Directo</option>
                                </select>
                              </div>
                              <!-- End Select -->
                            </div>
                          </div>
      
                          <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                            <i class="bi-x-lg"></i>
                          </a>
                        </div>
                        <!-- End Add Phone Input Field -->
      
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="organizationLabel" class="col-sm-3 col-form-label form-label">Nombre Comercial</label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre_comercial" id="organizationLabel" placeholder="SA de CV" aria-label="Htmlstream">
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="departmentLabel" class="col-sm-3 col-form-label form-label">Alias</label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="alias" id="departmentLabel" placeholder="Restaurante el tony..." aria-label="Human resources">
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row">
                          <label class="col-sm-3 col-form-label form-label">Tipo de negocio</label>
      
                          <div class="col-sm-9">
                            <div class="input-group input-group-sm-vertical">
                              <!-- Radio Check -->
                              <label class="form-control" for="userAccountTypeRadio1">
                                <span class="form-check">
                                  <input type="radio" class="form-check-input" name="individual" id="userAccountTypeRadio1">
                                  <span class="form-check-label">Individual</span>
                                </span>
                              </label>
                              <!-- End Radio Check -->
      
                              <!-- Radio Check -->
                              <label class="form-control" for="userAccountTypeRadio2">
                                <span class="form-check">
                                  <input type="radio" class="form-check-input" name="multisucursal" id="userAccountTypeRadio2">
                                  <span class="form-check-label">Multi-sucursal</span>
                                </span>
                              </label>
                              <!-- End Radio Check -->
                            </div>
                          </div>
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Body -->
      
                      <!-- Footer -->
                      <div class="card-footer d-flex justify-content-end align-items-center">
                        <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                                  "targetSelector": "#addUserStepBillingAddress"
                                }'>
                          Siguiente <i class="bi-chevron-right"></i>
                        </button>
                      </div>
                      <!-- End Footer -->
                    </div>
                    <!-- End Card -->
      
                    <div id="addUserStepBillingAddress" class="card card-lg" style="display: none;">
                      <!-- Body -->
                      <div class="card-body">
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="locationLabel" class="col-sm-3 col-form-label form-label">Direccion</label>
      
                          <div class="col-sm-9">
                            <!-- Select -->
                            <div class="tom-select-custom mb-4">
                              <select class="js-select form-select" id="locationLabel" name="pais">
                                <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="/static/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>Mexico</option>
                                <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="/static/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>Estados Unidos</option>
                              </select>
                            </div>
                            <!-- End Select -->
                            
                            <div class="mb-4">
                              <input type="text" class="form-control" name="Estado" id="cityLabel" placeholder="Estado" aria-label="City">
                            </div>
      
                            <input type="text" class="form-control" name="Municipio" id="stateLabel" placeholder="Municipio/Delegacion" aria-label="State">
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row mb-4">
                          <label for="addressLine1Label" class="col-sm-3 col-form-label form-label">Calle y colonia</label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="colonia" id="addressLine1Label" placeholder="Col.." aria-label="Your address">
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="js-add-field row mb-4" data-hs-add-field-options='{
                                "template": "#addAddressFieldTemplate",
                                "container": "#addAddressFieldContainer",
                                "defaultCreated": 0
                              }'>
                          <label for="addressLine2Label" class="col-sm-3 col-form-label form-label">Entre calles<span class="form-label-secondary">(Optional)</span></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="entrecalles" id="addressLine2Label" placeholder="..." aria-label="Your address">
      
                            <!-- Container For Input Field -->
                            <div id="addAddressFieldContainer"></div>
                          </div>
                        </div>
                        <!-- End Form -->
      
                        <!-- Form -->
                        <div class="row">
                          <label for="zipCodeLabel" class="col-sm-3 col-form-label form-label">Codigo Postal<i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="You can find your code in a postal address."></i></label>
      
                          <div class="col-sm-9">
                            <input type="text" class="js-input-mask form-control" name="cp" id="zipCodeLabel" placeholder="xxxxx" aria-label="Your zip code" data-hs-mask-options='{
                                     "mask": "AA0 0AA"
                                   }'>
                          </div>
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Body -->
      
                      <!-- Footer -->
                      <div class="card-footer d-flex align-items-center">
                        <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                             "targetSelector": "#addUserStepProfile"
                           }'>
                          <i class="bi-chevron-left"></i> Regresar
                        </button>
      
                        <div class="ms-auto">
                          <button type="button" class="btn btn-primary" onClick="getForm()" data-hs-step-form-next-options='{
                                    "targetSelector": "#addUserStepConfirmation"
                                  }'>
                            Siguiente <i class="bi-chevron-right"></i>
                          </button>
                        </div>
                      </div>
                      <!-- End Footer -->
                    </div>
      
                    <div id="addUserStepConfirmation" class="card card-lg" style="display: none;">
                      <!-- Profile Cover -->
                      <div class="profile-cover">
                        <div class="profile-cover-img-wrapper">
                          <img class="profile-cover-img" src="{{asset('/static/img/1920x400/img1.jpg')}}" alt="Image Description">
                        </div>
                      </div>
                      <!-- End Profile Cover -->
      
                      <!-- Avatar -->
                      <div class="avatar avatar-xxl avatar-circle avatar-border-lg profile-cover-avatar">
                        <img id="avatar-img" class="avatar-img" src="{{asset('/static/img/160x160/img9.jpg')}}" alt="Image Description">
                      </div>
                      <!-- End Avatar -->
      
                      <!-- Body -->
                      <div class="card-body">
                        <dl class="row">
                          <dt class="col-sm-6 text-sm-end">Nombre</dt>
                          <dd class="col-sm-6" id="nombre"></dd>

                          <dt class="col-sm-6 text-sm-end">Apellidos</dt>
                          <dd class="col-sm-6" id="apellidos"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Email:</dt>
                          <dd class="col-sm-6" id="email"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Telefono:</dt>
                          <dd class="col-sm-6" id="phone"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Nombre Comercial:</dt>
                          <dd class="col-sm-6" id="nombre_comercial"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Alias:</dt>
                          <dd class="col-sm-6" id="alias">-</dd>
      
                          <dt class="col-sm-6 text-sm-end">Tipo de cuenta:</dt>
                          <dd class="col-sm-6" id="tipo"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Pais:</dt>
                          <dd class="col-sm-6" id="pais"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Ciudad:</dt>
                          <dd class="col-sm-6" id="Estado"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Municipio:</dt>
                          <dd class="col-sm-6" id="Municipio"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Direccion</dt>
                          <dd class="col-sm-6" id="colonia"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Entre Calles</dt>
                          <dd class="col-sm-6" id="entrecalles"></dd>
      
                          <dt class="col-sm-6 text-sm-end">Codifo postal</dt>
                          <dd class="col-sm-6" id="cp"></dd>
                        </dl>
                        <!-- End Row -->
                      </div>
                      <!-- End Body -->
      
                      <!-- Footer -->
                      <div class="card-footer d-sm-flex align-items-sm-center">
                        <button type="button" class="btn btn-ghost-secondary mb-2 mb-sm-0" data-hs-step-form-prev-options='{
                             "targetSelector": "#addUserStepBillingAddress"
                           }'>
                          <i class="bi-chevron-left"></i> Regresar
                        </button>
      
                        <div class="ms-auto">
                          <button type="button" class="btn btn-white me-2">Cancelar</button>
                          <button id="addUserFinishBtn" type="button" class="btn btn-primary">Agregar</button>
                        </div>
                      </div>
                      <!-- End Footer -->
                    </div>
                  </div>
                  <!-- End Content Step Form -->
      
                  <!-- Message Body -->
                  <div id="successMessageContent" style="display:none;">
                    <div class="text-center">
                      <img class="img-fluid mb-3" src="/static/svg/illustrations/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
                      <img class="img-fluid mb-3" src="/static/svg/illustrations-light/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">
      
                      <div class="mb-4">
                        <h2>Successful!</h2>
                        <p>New <span class="fw-semibold text-dark">Ella Lauda</span> user has been successfully created.</p>
                      </div>
      
                      <div class="d-flex justify-content-center">
                        <a class="btn btn-white me-3" href="/login">
                          <i class="bi-chevron-left ms-1"></i> Iniciar Sesion
                        </a>
                        <a class="btn btn-primary" href="/registro/usuario">
                          <i class="bi-person-plus-fill me-1"></i> Registrar Nuevo
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End Message Body -->
                </div>
              </div>
              <!-- End Row -->
            </form>
            <!-- End Step Form -->
          </div>

        @include('components.footer')
    </main>
    @include('components.assetstop')
    <script>
      function getForm(){
        console.log($('#form-add-user').serializeArray());
        var data = $('#form-add-user').serializeArray();
        var img = document.getElementById("avatarImg").src;
        document.getElementById("avatar-img").src = img;
        data.forEach(element => {
          if(document.getElementById(element.name) || element.value == 'on'){
            if(element.value != 'on'){
              var id = element.name;
              document.getElementById(id).innerHTML = "";
              document.getElementById(id).innerHTML = element.value;
            }else{
              document.getElementById('tipo').innerHTML = "";
              document.getElementById('tipo').innerHTML = element.name;
            }
          }
        });
      }
    </script>
</body>
</html>