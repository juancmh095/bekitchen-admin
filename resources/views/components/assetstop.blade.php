<!-- JS Global Compulsory  -->
<script src="{{asset('static/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('static/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{asset('static/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

<!-- JS Implementing Plugins -->
<script src="{{asset('static/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js')}}"></script>
<script src="{{asset('static/vendor/hs-form-search/dist/hs-form-search.min.js')}}"></script>

<script src="{{asset('static/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('static/vendor/chartjs-chart-matrix/dist/chartjs-chart-matrix.min.js')}}"></script>
<script src="{{asset('static/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js')}}"></script>
<script src="{{asset('static/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('static/vendor/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('static/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
<script src="{{asset('static/vendor/clipboard/dist/clipboard.min.js')}}"></script>
<script src="{{asset('static/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('static/vendor/datatables.net.extensions/select/select.min.js')}}"></script>

<!-- JS Front -->
<script src="{{asset('static/js/theme.min.js')}}"></script>
<script src="{{asset('static/js/hs.theme-appearance-charts.js')}}"></script>


 <script src="{{asset('static/vendor/hs-file-attach/dist/hs-file-attach.min.js')}}"></script>
 <script src="{{asset('static/vendor/hs-step-form/dist/hs-step-form.min.js')}}"></script>
 <script src="{{asset('static/vendor/hs-add-field/dist/hs-add-field.min.js')}}"></script>
 <script src="{{asset('static/vendor/imask/dist/imask.min.js')}}"></script>
 <script src="{{asset('static/vendor/tom-select/dist/js/tom-select.complete.min.js')}}"></script>
 <script src="{{asset('static/vendor/quill/dist/quill.min.js')}}"></script>
 <script src="{{asset('static/vendor/hs-sticky-block/dist/hs-sticky-block.min.js')}}"></script>
 <script src="{{asset('static/vendor/hs-scrollspy/dist/hs-scrollspy.min.js')}}"></script>
 <script src="{{asset('static/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
 <script src="{{asset('static/vendor/hs-quantity-counter/dist/hs-quantity-counter.min.js')}}"></script>

 <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    // INITIALIZATION OF DATERANGEPICKER
    // =======================================================
    $('.js-daterangepicker').daterangepicker();

    $('.js-daterangepicker-times').daterangepicker({
      timePicker: true,
      startDate: moment().startOf('hour'),
      endDate: moment().startOf('hour').add(32, 'hour'),
      locale: {
        format: 'M/DD hh:mm A'
      }
    });

    var start = moment();
    var end = moment();

    function cb(start, end) {
      $('#js-daterangepicker-predefined .js-daterangepicker-predefined-preview').html(start.format('MMM D') + ' - ' + end.format('MMM D, YYYY'));
    }

    $('#js-daterangepicker-predefined').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    }, cb);

    cb(start, end);
  });


  // INITIALIZATION OF DATATABLES
  // =======================================================
  HSCore.components.HSDatatables.init($('#datatable'), {
    select: {
      style: 'multi',
      selector: 'td:first-child input[type="checkbox"]',
      classMap: {
        checkAll: '#datatableCheckAll',
        counter: '#datatableCounter',
        counterInfo: '#datatableCounterInfo'
      }
    },
    language: {
      zeroRecords: `<div class="text-center p-4">
            <img class="mb-3" src="./assets/svg/illustrations/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">
            <img class="mb-3" src="./assets/svg/illustrations-light/oc-error.svg" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">
          <p class="mb-0">No data to show</p>
          </div>`
    }
  });

  const datatable = HSCore.components.HSDatatables.getItem(0)

  document.querySelectorAll('.js-datatable-filter').forEach(function (item) {
    item.addEventListener('change',function(e) {
      const elVal = e.target.value,
  targetColumnIndex = e.target.getAttribute('data-target-column-index'),
  targetTable = e.target.getAttribute('data-target-table');

  HSCore.components.HSDatatables.getItem(targetTable).column(targetColumnIndex).search(elVal !== 'null' ? elVal : '').draw()
    })
  })
</script>

<!-- JS Plugins Init. -->
<script>
  (function() {
    window.onload = function () {

      var success = {!! isset($success)?$success:0 !!};
      if(Number(success) > 0){
        var msg = 'Bienvenido';
        var color = "linear-gradient(60deg, rgba(0,0,0,1) 0%, rgba(3,1,64,1) 29%, rgba(7,3,135,1) 68%, rgba(7,3,135,1) 100%);";
        if(success == 1){
          msg = 'Registro correcto';
        }else{
          msg = 'Error al registrar el producto';
          color = 'linear-gradient(60deg, rgba(0,0,0,1) 0%, rgba(255,0,9,1) 100%);';
        }
        Toastify({
          text: msg,
          duration: 3000,
          destination: "",
          newWindow: true,
          close: true,
          gravity: "bottom", // `top` or `bottom`
          position: "right", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: color,
          },
          onClick: function(){} // Callback after click
        }).showToast();
      }
      

      // INITIALIZATION OF NAVBAR VERTICAL ASIDE
      // =======================================================
      new HSSideNav('.js-navbar-vertical-aside').init()


      // INITIALIZATION OF FORM SEARCH
      // =======================================================
      
      const HSFormSearchInstance = new HSFormSearch('.js-form-search');
      console.log(HSFormSearchInstance.collection);
      if(HSFormSearchInstance.collection.length > 0){
        HSFormSearchInstance.getItem(1).on('close', function (el) {
          el.classList.remove('top-0')
        });
      }

      console.log(document.querySelector('.js-form-search-mobile-toggle'));
      if(document.querySelector('.js-form-search-mobile-toggle')){
        document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
          let dataOptions = JSON.parse(e.currentTarget.getAttribute('data-hs-form-search-options')),
            $menu = document.querySelector(dataOptions.dropMenuElement)
  
          $menu.classList.add('top-0')
          $menu.style.left = 0
        })
      }


      console.log('entra aqui');
        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("addUserStepFormProgress").style.display = 'none'
            document.getElementById("addUserStepProfile").style.display = 'none'
            document.getElementById("addUserStepBillingAddress").style.display = 'none'
            document.getElementById("addUserStepConfirmation").style.display = 'none'
            document.getElementById("successMessageContent").style.display = 'block'
            scrollToTop('#header');
            const formContainer = document.getElementById('formContainer')
          },
          onNextStep: function () {
            scrollToTop()
          },
          onPrevStep: function () {
            scrollToTop()
          }
        })

        function scrollToTop(el = '.js-step-form') {
          el = document.querySelector(el)
          window.scrollTo({
            top: (el.getBoundingClientRect().top + window.scrollY) - 30,
            left: 0,
            behavior: 'smooth'
          })
        }

        // INITIALIZATION OF ADD FIELD
        // =======================================================
        new HSAddField('.js-add-field', {
          addedField: field => {
            HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
            HSCore.components.HSMask.init(field.querySelector('.js-input-mask'))
          }
        })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init();

      // INITIALIZATION OF FILE ATTACH
        // =======================================================
        new HSFileAttach('.js-file-attach')

         // INITIALIZATION OF STICKY BLOCKS
        // =======================================================
        new HSStickyBlock('.js-sticky-block', {
          targetSelector: document.getElementById('header').classList.contains('navbar-fixed') ? '#header' : null
        })

        // INITIALIZATION OF  QUANTITY COUNTER
        // =======================================================
        new HSQuantityCounter('.js-quantity-counter')

        // INITIALIZATION OF QUILLJS EDITOR
        // =======================================================
        HSCore.components.HSQuill.init('.js-quill')

        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')

        // INITIALIZATION OF DROPZONE
        // =======================================================
        HSCore.components.HSDropzone.init('.js-dropzone')

        // SCROLLSPY
        // =======================================================
        new bootstrap.ScrollSpy(document.body, {
          target: '#navbarSettings',
          offset: 100
        })

        new HSScrollspy('#navbarVerticalNavMenu', {
          breakpoint: 'lg',
          scrollOffset: -20
        })



      // INITIALIZATION OF CHARTJS
      // =======================================================
      Chart.plugins.unregister(ChartDataLabels);

      HSCore.components.HSChartJS.init('.js-chart')

      HSCore.components.HSChartJS.init('#updatingBarChart')
      const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')

      // Call when tab is clicked
      document.querySelectorAll('[data-bs-toggle="chart-bar"]').forEach(item => {
        item.addEventListener('click', e => {
          let keyDataset = e.currentTarget.getAttribute('data-datasets')
          const styles = HSCore.components.HSChartJS.getTheme('updatingBarChart', HSThemeAppearance.getAppearance())

          if (keyDataset === 'lastWeek') {
            updatingBarChart.data.labels = ["Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28", "Apr 29", "Apr 30", "Apr 31"];
            updatingBarChart.data.datasets = [
              {
                "data": [120, 250, 300, 200, 300, 290, 350, 100, 125, 320],
                "backgroundColor": styles.data.datasets[0].backgroundColor,
                "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                "borderColor": styles.data.datasets[0].borderColor
              },
              {
                "data": [250, 130, 322, 144, 129, 300, 260, 120, 260, 245, 110],
                "backgroundColor": styles.data.datasets[1].backgroundColor,
                "borderColor": styles.data.datasets[1].borderColor
              }
            ];
            updatingBarChart.update();
          } else {
            updatingBarChart.data.labels = ["May 1", "May 2", "May 3", "May 4", "May 5", "May 6", "May 7", "May 8", "May 9", "May 10"];
            updatingBarChart.data.datasets = [
              {
                "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220],
                "backgroundColor": styles.data.datasets[0].backgroundColor,
                "hoverBackgroundColor": styles.data.datasets[0].hoverBackgroundColor,
                "borderColor": styles.data.datasets[0].borderColor
              },
              {
                "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120],
                "backgroundColor": styles.data.datasets[1].backgroundColor,
                "borderColor": styles.data.datasets[1].borderColor
              }
            ]
            updatingBarChart.update();
          }
        })
      })


      // INITIALIZATION OF CHARTJS
      // =======================================================
      HSCore.components.HSChartJS.init('.js-chart-datalabels', {
        plugins: [ChartDataLabels],
        options: {
          plugins: {
            datalabels: {
              anchor: function (context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? 'end' : 'center';
              },
              align: function (context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? 'end' : 'center';
              },
              color: function (context) {
                var value = context.dataset.data[context.dataIndex];
                return value.r < 20 ? context.dataset.backgroundColor : context.dataset.color;
              },
              font: function (context) {
                var value = context.dataset.data[context.dataIndex],
                  fontSize = 25;

                if (value.r > 50) {
                  fontSize = 35;
                }

                if (value.r > 70) {
                  fontSize = 55;
                }

                return {
                  weight: 'lighter',
                  size: fontSize
                };
              },
              offset: 2,
              padding: 0
            }
          }
        }
      })

      // INITIALIZATION OF SELECT
      // =======================================================
      HSCore.components.HSTomSelect.init('.js-select')

      
    }
  })()
</script>

<!-- Style Switcher JS -->

<script>
    (function () {
      // STYLE SWITCHER
      // =======================================================
      const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
      const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

      // Function to set active style in the dorpdown menu and set icon for dropdown trigger
      const setActiveStyle = function () {
        $variants.forEach($item => {
          if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
            $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
            return $item.classList.add('active')
          }

          $item.classList.remove('active')
        })
      }

      // Add a click event to all items of the dropdown to set the style
      $variants.forEach(function ($item) {
        $item.addEventListener('click', function () {
          HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
        })
      })

      // Call the setActiveStyle on load page
      setActiveStyle()

      // Add event listener on change style to call the setActiveStyle function
      window.addEventListener('on-hs-appearance-change', function () {
        setActiveStyle()
      })
    })()
  </script>

<!-- End Style Switcher JS -->