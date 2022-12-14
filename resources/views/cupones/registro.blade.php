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
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Apps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                </ol>
              </nav>
  
              <h1 class="page-header-title">Calendar</h1>
            </div>
            <!-- End Col -->
  
            <div class="col-sm-auto">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventToCalendarModal">
                <i class="bi-plus"></i> Create event
              </button>
              <!-- End Button trigger modal -->
            </div>
            <!-- End Col -->
          </div>
        </div>
        <!-- End Page Header -->
  
        <div class="row align-items-sm-center mb-4">
          <div class="col-lg-5 mb-2 mb-lg-0">
            <div class="d-flex align-items-center">
              <button type="button" class="btn btn-white me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-fc-today>Today</button>
  
              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle me-1" data-fc-prev-month data-bs-toggle="tooltip" data-bs-placement="top" title="Previous month">
                <i class="bi-chevron-left"></i>
              </button>
  
              <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm btn-no-focus rounded-circle ms-1" data-fc-next-month data-bs-toggle="tooltip" data-bs-placement="top" title="Next month">
                <i class="bi-chevron-right"></i>
              </button>
  
              <div class="ms-3">
                <h4 class="h3 mb-0" data-fc-title></h4>
              </div>
            </div>
          </div>
          <!-- End Col -->
  
          <div class="col-lg-7">
            <div class="d-sm-flex align-items-sm-center">
              <!-- Input Group -->
              <div class="input-group input-group-merge me-2 mb-2 mb-sm-0">
                <div class="input-group-prepend input-group-text">
                  <i class="bi-search"></i>
                </div>
                <input type="text" id="filter-by-title" class="form-control" placeholder="Search by title">
              </div>
              <!-- End Input Group -->
  
              <div class="d-flex align-items-center">
                <!-- Dropdown -->
                <div class="dropdown me-2">
                  <button type="button" class="btn btn-white dropdown-toggle" id="calendarFilterDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <i class="bi-filter me-1"></i> Filter
                  </button>
  
                  <div class="dropdown-menu dropdown-card" aria-labelledby="calendarFilterDropdown" style="min-width: 15rem;">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body">
                        <small class="card-subtitle">My calendars</small>
  
                        <!-- Form Check -->
                        <div class="form-check" data-filter>
                          <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-hs-team" id="calendarPersonalCheck" checked>
                          <label class="form-check-label" for="calendarPersonalCheck">HS Team</label>
                        </div>
                        <!-- End Form Check -->
  
                        <!-- Form Check -->
                        <div class="form-check form-check-danger" data-filter>
                          <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-reminders" id="calendarRemindersCheck" checked>
                          <label class="form-check-label" for="calendarRemindersCheck">Reminders</label>
                        </div>
                        <!-- End Form Check -->
  
                        <!-- Form Check -->
                        <div class="form-check form-check-warning" data-filter>
                          <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-tasks" id="calendarTasksCheck" checked>
                          <label class="form-check-label" for="calendarTasksCheck">Tasks</label>
                        </div>
                        <!-- End Form Check -->
                      </div>
  
                      <hr class="my-0">
  
                      <div class="card-body">
                        <small class="card-subtitle">Other calendars</small>
  
                        <!-- Form Check -->
                        <div class="form-check form-check-success" data-filter>
                          <input class="form-check-input" type="checkbox" value="fullcalendar-custom-event-holidays" id="calendarHolidaysCheck" checked>
                          <label class="form-check-label" for="calendarHolidaysCheck">Holidays</label>
                        </div>
                        <!-- End Form Check -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <!-- End Dropdown -->
  
                <!-- Dropdown -->
                <div class="dropdown me-2">
                  <button type="button" class="btn btn-white dropdown-toggle" id="calendarEventsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                    <i class="bi-calendar-event me-1"></i> Events
                  </button>
  
                  <div class="dropdown-menu dropdown-menu-sm-end dropdown-card" aria-labelledby="calendarFilterDropdown" style="width: 17rem;">
                    <!-- Card -->
                    <div class="card">
                      <div class="card-body card-body-height">
                        <small class="card-subtitle">Drag these onto the calendar:</small>
  
                        <!-- External Events -->
                        <div id="external-events" class="fullcalendar-custom">
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                               "title": "Open a new task on Jira",
                               "image": "./assets/svg/brands/jira-icon.svg",
                               "className": "",
                               "forceEvent": true
                             }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <img class="avatar avatar-xss me-2" src="./assets/svg/brands/jira-icon.svg" alt="Image Description">
                                <span class="text-truncate">Open a new task on Jira</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
  
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-reminders' style="background-color: #fdeef2; border-color: #fdeef2;" data-event='{
                                 "title": "Send weekly invoice to John",
                                 "image": "./assets/svg/brands/excel-icon.svg",
                                 "className": "fc-event-success",
                                 "forceEvent": true
                               }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <img class="avatar avatar-xss me-2" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                                <span class="text-truncate">Send weekly invoice to John</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
  
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                                 "title": "Shoot a message to Christina on Slack",
                                 "image": "./assets/svg/brands/slack-icon.svg",
                                 "className": "",
                                 "forceEvent": true
                               }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <img class="avatar avatar-xss me-2" src="./assets/svg/brands/slack-icon.svg" alt="Image Description">
                                <span class="text-truncate">Shoot a message to Christina on Slack</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
  
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-tasks' style="background-color: #fdf3e8; border-color: #fdf3e8;" data-event='{
                                 "title": "First team timeline",
                                 "image": "",
                                 "className": "fc-event-success",
                                 "forceEvent": true
                               }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <span class="avatar avatar-xss avatar-info avatar-circle me-2">
                                  <span class="text-truncate" class="avatar-initials">F</span>
                                </span>
                                <span>First team timeline</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
  
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-reminders' style="background-color: #fdeef2; border-color: #fdeef2;" data-event='{
                                 "title": "Download monthly data in DigitalOcean",
                                 "image": "./assets/svg/brands/digitalocean-icon.svg",
                                 "className": "",
                                 "forceEvent": true
                               }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <img class="avatar avatar-xss me-2" src="./assets/svg/brands/digitalocean-icon.svg" alt="Image Description">
                                <span class="text-truncate">Download monthly data in DigitalOcean</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
  
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-tasks' style="background-color: #fdf3e8; border-color: #fdf3e8;" data-event='{
                                 "title": "Hire a Figma designer",
                                 "image": "./assets/svg/brands/figma-icon.svg",
                                 "className": "",
                                 "forceEvent": true
                               }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <img class="avatar avatar-xss me-2" src="./assets/svg/brands/figma-icon.svg" alt="Image Description">
                                <span class="text-truncate">Hire a Figma designer</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
  
                          <!-- Event -->
                          <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event fc-daygrid-inline-block-event fullcalendar-custom-event-hs-team' style="background-color: #eaf1ff; border-color: #eaf1ff;" data-event='{
                                 "title": "Mobile App rework for (Pixeel)",
                                 "image": "",
                                 "className": "",
                                 "forceEvent": true
                               }'>
                            <div class='fc-event-title' style="max-width: 14rem;">
                              <div class='d-flex'>
                                <span class="avatar avatar-xss avatar-primary avatar-circle me-2">
                                  <span class="text-truncate" class="avatar-initials">M</span>
                                </span>
                                <span>Mobile App rework for (Pixeel)</span>
                              </div>
                            </div>
                          </div>
                          <!-- End Event -->
                        </div>
                        <!-- End External Events -->
                      </div>
                    </div>
                    <!-- End Card -->
                  </div>
                </div>
                <!-- End Dropdown -->
  
                <!-- Select -->
                <div class="tom-select-custom">
                  <select class="js-select form-select" data-fc-grid-view data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true
                          }'>
                    <option value="dayGridMonth">Month</option>
                    <option value="timeGridWeek">Week</option>
                    <option value="timeGridDay">Day</option>
                    <option value="listWeek">List</option>
                  </select>
                </div>
                <!-- End Select -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
  
        <!-- Fullcalendar -->
        <div id="js-fullcalendar" class="fullcalendar-custom"></div>
        <!-- End Fullcalendar -->
      </div>
      <!-- End Content -->

        @include('components.footer')
    </main>
    @include('components.assetstop')
</body>
</html>