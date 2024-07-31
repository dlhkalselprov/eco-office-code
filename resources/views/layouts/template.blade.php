<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CoreUI - Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <script src="js/config.js"></script>
    <script src="js/color-modes.js"></script>
    <link href="node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>

<body>
    <div class="sidebar sidebar-fixed border-end" id="sidebar">
        <div class="sidebar-header border-bottom">
            <div class="sidebar-brand">
                <svg class="sidebar-brand-full" width="110" height="32" alt="CoreUI Logo">
                    <use href="assets/brand/coreui.svg#full"></use>
                </svg>
                <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
                    <use href="assets/brand/coreui.svg#signet"></use>
                </svg>
            </div>
            <button class="btn-close d-lg-none" type="button" aria-label="Close"
                onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
            <li class="nav-item"><a class="nav-link" href="index.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
                    </svg><span data-coreui-i18n="dashboard">Dashboard</span></a></li>
            <li class="nav-title" data-coreui-i18n="theme">Theme</li>
            <li class="nav-item"><a class="nav-link" href="colors.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-drop"></use>
                    </svg><span data-coreui-i18n="colors">Colors</span></a></li>
            <li class="nav-item"><a class="nav-link" href="typography.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-pencil"></use>
                    </svg><span data-coreui-i18n="typography"> Typography</span></a></li>
            <li class="nav-title" data-coreui-i18n="components">Components</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
                    </svg><span data-coreui-i18n="base">Base</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span><span
                                data-coreui-i18n="accordion">Accordion</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Breadcrumb</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Cards</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Carousel</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Collapse</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> List group</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Navs &amp; Tabs</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Pagination</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Placeholders</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Popovers</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Progress</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Spinners</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Tables</a></li>
                    <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Tooltips</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-cursor"></use>
                    </svg><span data-coreui-i18n="buttons">Buttons</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Buttons Group</a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/loading-buttons.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Loading Buttons<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Dropdowns</a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-notes"></use>
                    </svg><span data-coreui-i18n="forms">Forms</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="forms/form-control.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Form Control</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/select.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Select</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/multi-select.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Multi Select<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Checks &amp; radios</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/range.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span> Range</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/input-group.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Input group</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Floating labels</a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/date-picker.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Date Picker<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/date-range-picker.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Date Range Picker<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/time-picker.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Time Picker<span
                                class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/layout.html"><span class="nav-icon"><span
                                    class="nav-icon-bullet"></span></span><span
                                data-coreui-i18n="layout">Layout</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="forms/validation.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span><span
                                data-coreui-i18n="validation">Validation</span></a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
                    </svg><span data-coreui-i18n="icons">Icons</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons<span
                                class="badge bg-success ms-auto" data-coreui-i18n="free">Free</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons - Brand</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> CoreUI Icons - Flag</a>
                    </li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                    </svg><span data-coreui-i18n="notifications">Notifications</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Alerts</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Badge</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Modals</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span
                                class="nav-icon"><span class="nav-icon-bullet"></span></span> Toasts</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="widgets.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calculator"></use>
                    </svg><span data-coreui-i18n="widgets">Widgets</span><span
                        class="badge bg-info-gradient text-uppercase ms-auto" data-coreui-i18n="new">New</span></a>
            </li>
            <li class="nav-divider"></li>
            <li class="nav-title" data-coreui-i18n="plugins">
                Plugins</li>
            <li class="nav-item"><a class="nav-link" href="calendar.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
                    </svg><span data-coreui-i18n="calendar">Calendar</span><span
                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-item"><a class="nav-link" href="charts.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-chart-pie"></use>
                    </svg><span data-coreui-i18n="charts">Charts</span></a></li>
            <li class="nav-item"><a class="nav-link" href="datatables.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-spreadsheet"></use>
                    </svg> DataTables<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-item"><a class="nav-link" href="google-maps.html">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-map"></use>
                    </svg> Google Maps<span class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
            <li class="nav-title" data-coreui-i18n="extras">
                Extras</li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-star"></use>
                    </svg><span data-coreui-i18n="pages">Pages</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                            <svg class="nav-icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                            </svg><span data-coreui-i18n="login">Login</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                            <svg class="nav-icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                            </svg><span data-coreui-i18n="register">Register</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                            <svg class="nav-icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                            </svg><span data-coreui-i18n="error404">Error 404</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                            <svg class="nav-icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-bug"></use>
                            </svg><span data-coreui-i18n="error500">Error 500</span></a></li>
                </ul>
            </li>
            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-layers"></use>
                    </svg><span data-coreui-i18n="apps">Apps</span></a>
                <ul class="nav-group-items compact">
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                            <svg class="nav-icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-description"></use>
                            </svg> Invoicing</a>
                        <ul class="nav-group-items compact">
                            <li class="nav-item"><a class="nav-link" href="apps/invoicing/invoice.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Invoice<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                            <svg class="nav-icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                            </svg> Email</a>
                        <ul class="nav-group-items compact">
                            <li class="nav-item"><a class="nav-link" href="apps/email/inbox.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Inbox<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="apps/email/message.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Message<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="apps/email/compose.html"><span
                                        class="nav-icon"><span class="nav-icon-bullet"></span></span> Compose<span
                                        class="badge bg-danger-gradient ms-auto">PRO</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item mt-auto"><a class="nav-link" href="https://coreui.io/docs/templates/installation/"
                    target="_blank">
                    <svg class="nav-icon">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-description"></use>
                    </svg><span data-coreui-i18n="docs">Docs</span></a></li>
            <li class="nav-title"><span data-coreui-i18n="systemUtilization">System Utilization</span></li>
            <li class="nav-item px-3 pb-2 d-narrow-none">
                <div class="text-uppercase small fw-bold mb-1" data-coreui-i18n="cpuUsage">CPU Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 25%"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary"
                    data-coreui-i18n="cpuUsageDescription, { 'number_of_processes': 358, 'number_of_cores': '1/4' }">
                    348 Processes. 1/4 Cores.</div>
            </li>
            <li class="nav-item px-3 pb-2 d-narrow-none">
                <div class="text-uppercase small fw-bold mb-1" data-coreui-i18n="memoryUsage">Memory Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 70%"
                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary">11444MB/16384MB</div>
            </li>
            <li class="nav-item px-3 pb-2 mb-3 d-narrow-none">
                <div class="text-uppercase small fw-bold mb-1" data-coreui-i18n="ssdUsage">SSD Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 95%"
                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary">243GB/256GB</div>
            </li>
        </ul>
        <div class="sidebar-footer border-top d-none d-lg-flex">
            <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
        </div>
    </div>
    <div class="sidebar sidebar-light sidebar-lg sidebar-end sidebar-overlaid border-start" id="aside">
        <div class="sidebar-header p-0 position-relative">
            <ul class="nav nav-underline-border w-100" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#timeline"
                        role="tab">
                        <svg class="icon">
                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-list"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#messages" role="tab">
                        <svg class="icon">
                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-speech"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#settings" role="tab">
                        <svg class="icon">
                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                        </svg></a></li>
            </ul>
            <button class="btn-close position-absolute top-50 end-0 translate-middle my-0" type="button"
                aria-label="Close"
                onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#aside&quot;)).toggle()"></button>
        </div>
        <!-- Tab panes-->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-flush">
                    <div class="list-group-item border-start-4 border-start-secondary bg-body-tertiary text-center fw-bold text-body-secondary text-uppercase small"
                        data-coreui-i18n="today">Today</div>
                    <div class="list-group-item border-start-4 border-start-warning list-group-item-divider">
                        <div class="avatar avatar-lg float-end"><img class="avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
                        <div>Meeting with <strong>Lucas</strong></div><small class="text-body-secondary me-3">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
                            </svg> 1 - 3pm</small><small class="text-body-secondary">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-location-pin"></use>
                            </svg> Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item border-start-4 border-start-info">
                        <div class="avatar avatar-lg float-end"><img class="avatar-img"
                                src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                        <div>Skype with <strong>Megan</strong></div><small class="text-body-secondary me-3">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
                            </svg> 4 - 5pm</small><small class="text-body-secondary">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/brand.svg#cib-skype"></use>
                            </svg> On-line</small>
                    </div>
                    <div class="list-group-item border-start-4 border-start-secondary bg-body-tertiary text-center fw-bold text-body-secondary text-uppercase small"
                        data-coreui-i18n="tomorrow">Tomorrow</div>
                    <div class="list-group-item border-start-4 border-start-danger list-group-item-divider">
                        <div>New UI Project - <strong>deadline</strong></div><small class="text-body-secondary me-3">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
                            </svg> 10 - 11pm</small><small class="text-body-secondary">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-home"></use>
                            </svg> creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                    alt="user@email.com"></div>
                        </div>
                    </div>
                    <div class="list-group-item border-start-4 border-start-success list-group-item-divider">
                        <div><strong>#10 Startups.Garden</strong> Meetup</div><small class="text-body-secondary me-3">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
                            </svg> 1 - 3pm</small><small class="text-body-secondary">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-location-pin"></use>
                            </svg> Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item border-start-4 border-start-primary list-group-item-divider">
                        <div><strong>Team meeting</strong></div><small class="text-body-secondary me-3">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-calendar"></use>
                            </svg> 4 - 6pm</small><small class="text-body-secondary">
                            <svg class="icon">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-home"></use>
                            </svg> creativeLabs HQ</small>
                        <div class="avatars-stack mt-2">
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                    alt="user@email.com"></div>
                            <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                    alt="user@email.com"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-body-secondary">Lukasz Holeczek</small><small
                            class="text-body-secondary float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-body-secondary">Lukasz Holeczek</small><small
                            class="text-body-secondary float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-body-secondary">Lukasz Holeczek</small><small
                            class="text-body-secondary float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-body-secondary">Lukasz Holeczek</small><small
                            class="text-body-secondary float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 me-3 float-start">
                        <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-body-secondary">Lukasz Holeczek</small><small
                            class="text-body-secondary float-end mt-1">1:52 PM</small></div>
                    <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div><small
                        class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6 data-coreui-i18n="settings">Settings</h6>
                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox"
                                checked>
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                1</label>
                        </div>
                    </div>
                    <div><small class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                2</label>
                        </div>
                    </div>
                    <div><small class="text-body-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                3</label>
                        </div>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <div class="form-check form-switch form-switch-lg">
                            <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox"
                                checked>
                            <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                                4</label>
                        </div>
                    </div>
                </div>
                <hr>
                <h6 data-coreui-i18n="systemUtilization">System Utilization</h6>
                <div class="small text-uppercase fw-semibold mb-1 mt-4" data-coreui-i18n="cpuUsage">CPU Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary"
                    data-coreui-i18n="cpuUsageDescription, { 'number_of_processes': 358, 'number_of_cores': '1/4' }">
                    348 Processes. 1/4 Cores.</div>
                <div class="small text-uppercase fw-semibold mb-1 mt-2" data-coreui-i18n="memoryUsage">Memory Usage
                </div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary">11444GB/16384MB</div>
                <div class="small text-uppercase fw-semibold mb-1 mt-2" data-coreui-i18n="ssdUsage">SSD Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary">243GB/256GB</div>
                <div class="small text-uppercase fw-semibold mb-1 mt-2" data-coreui-i18n="ssdUsage">SSD Usage</div>
                <div class="progress progress-thin">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="small text-body-secondary">25GB/256GB</div>
            </div>
        </div>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100">
        <header class="header header-sticky p-0 mb-4">
            <div class="container-fluid px-4 border-bottom">
                <button class="header-toggler" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"
                    style="margin-inline-start: -14px">
                    <svg class="icon icon-lg">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
                    </svg>
                </button>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#"
                            data-coreui-i18n="dashboard">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-coreui-i18n="users">Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" data-coreui-i18n="settings">Settings</a>
                    </li>
                </ul>
                <ul class="header-nav d-none d-md-flex ms-auto">
                    <li class="nav-item dropdown"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-lg my-1 mx-2">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                            </svg><span
                                class="badge rounded-pill position-absolute top-0 end-0 bg-danger-gradient">5</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="notificationsCounter, { 'counter': 5 }">You have 5 notifications
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2 text-success">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-user-follow">
                                    </use>
                                </svg><span data-coreui-i18n="newUserRegistered">New user registered</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2 text-danger">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-user-unfollow">
                                    </use>
                                </svg><span data-coreui-i18n="userDeleted">User deleted</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2 text-info">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-chart"></use>
                                </svg><span data-coreui-i18n="salesReportIsReady">Sales report is ready</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2 text-success">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-basket"></use>
                                </svg><span data-coreui-i18n="newClient">New client</span></a><a class="dropdown-item"
                                href="#">
                                <svg class="icon me-2 text-warning">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer">
                                    </use>
                                </svg><span data-coreui-i18n="serverOverloaded">Server overloaded</span></a>
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2"
                                data-coreui-i18n="server">Server</div><a class="dropdown-item d-block py-2"
                                href="#">
                                <div class="text-uppercase small fw-semibold mb-1" data-coreui-i18n="cpuUsage">CPU
                                    Usage</div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="small text-body-secondary"
                                    data-coreui-i18n="cpuUsageDescription, { 'number_of_processes': 358, 'number_of_cores': '1/4' }">
                                    348 Processes. 1/4 Cores.</div>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="text-uppercase small fw-semibold mb-1" data-coreui-i18n="memoryUsage">
                                    Memory Usage</div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-warning-gradient" role="progressbar"
                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="small text-body-secondary">11444MB/16384MB</div>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="text-uppercase small fw-semibold mb-1" data-coreui-i18n="ssdUsage">SSD
                                    Usage</div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                        style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="small text-body-secondary">243GB/256GB</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-lg my-1 mx-2">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                            </svg><span
                                class="badge rounded-pill position-absolute top-0 end-0 bg-warning-gradient">5</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="taskCounter, { 'counter': 5 }">You have 5 pending tasks</div><a
                                class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">Upgrade NPM</div>
                                    <div class="fw-semibold">0%</div>
                                </div>
                                <div class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">ReactJS Version</div>
                                    <div class="fw-semibold">25%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">VueJS Version</div>
                                    <div class="fw-semibold">50%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%"
                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">Add new layouts</div>
                                    <div class="fw-semibold">75%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a><a class="dropdown-item d-block py-2" href="#">
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="small">Angular Version</div>
                                    <div class="fw-semibold">100%</div>
                                </div><span class="progress progress-thin">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </span>
                            </a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-center fw-semibold"
                                href="#" data-coreui-i18n="viewAllTasks">View all tasks</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <svg class="icon icon-lg my-1 mx-2">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                            </svg><span
                                class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">7</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md pt-0" style="min-width: 24rem">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="messagesCounter, { 'counter': 7 }">You have 4 messages</div><a
                                class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/1.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-success"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Jessica Williams</div>
                                            <div class="small text-body-secondary">Just now</div>
                                        </div>
                                        <div class="fw-semibold"><span class="text-danger">! </span>Urgent: System
                                            Maintenance Tonight</div>
                                        <div class="small text-body-secondary">Attention team, we'll be conducting
                                            critical system maintenance tonight from 10 PM to 2 AM. Plan accordingly...
                                        </div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/2.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-warning"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Richard Johnson</div>
                                            <div class="small text-body-secondary">5 minutes ago</div>
                                        </div>
                                        <div class="fw-semibold"><span class="text-danger">! </span>Project Update:
                                            Milestone Achieved</div>
                                        <div class="small text-body-secondary">Kudos on hitting sales targets last
                                            quarter! Let's keep the momentum. New goals, new victories ahead...</div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/4.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-secondary"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Angela Rodriguez</div>
                                            <div class="small text-body-secondary">1:52 PM</div>
                                        </div>
                                        <div class="fw-semibold">Social Media Campaign Launch</div>
                                        <div class="small text-body-secondary">Exciting news! Our new social media
                                            campaign goes live tomorrow. Brace yourselves for engagement...</div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/5.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-success"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Jane Lewis</div>
                                            <div class="small text-body-secondary">4:03 PM</div>
                                        </div>
                                        <div class="fw-semibold">Inventory Checkpoint</div>
                                        <div class="small text-body-secondary">Team, it's time for our monthly
                                            inventory check. Accurate counts ensure smooth operations. Let's nail it...
                                        </div>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 my-3 me-3"><img class="avatar-img"
                                            src="assets/img/avatars/3.jpg" alt="user@email.com"><span
                                            class="avatar-status bg-secondary"></span></div>
                                    <div class="message text-wrap">
                                        <div class="d-flex justify-content-between mt-1">
                                            <div class="small text-body-secondary">Ryan Miller</div>
                                            <div class="small text-body-secondary">3 days ago</div>
                                        </div>
                                        <div class="fw-semibold">Customer Feedback Results</div>
                                        <div class="small text-body-secondary">Our latest customer feedback is in.
                                            Let's analyze and discuss improvements for an even better service...</div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-center fw-semibold"
                                href="#" data-coreui-i18n="viewAllMessages">View all messages</a>
                        </div>
                    </li>
                </ul>
                <ul class="header-nav ms-auto ms-md-0">
                    <li class="nav-item py-1">
                        <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link" type="button" aria-expanded="false"
                            data-coreui-toggle="dropdown">
                            <svg class="icon icon-lg">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-language"></use>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-language-value="en"
                                    onclick="i18next.changeLanguage(&quot;en&quot;)">
                                    <svg class="icon icon-lg me-3">
                                        <use href="node_modules/@coreui/icons/sprites/flag.svg#cif-gb"></use>
                                    </svg>English
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-language-value="es"
                                    onclick="i18next.changeLanguage(&quot;es&quot;)">
                                    <svg class="icon icon-lg me-3">
                                        <use href="node_modules/@coreui/icons/sprites/flag.svg#cif-es"></use>
                                    </svg>Español
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-language-value="pl"
                                    onclick="i18next.changeLanguage(&quot;pl&quot;)">
                                    <svg class="icon icon-lg me-3">
                                        <use href="node_modules/@coreui/icons/sprites/flag.svg#cif-pl"></use>
                                    </svg>Polski
                                </button>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-link nav-link" type="button" aria-expanded="false"
                            data-coreui-toggle="dropdown">
                            <svg class="icon icon-lg theme-icon-active">
                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast"></use>
                            </svg>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-theme-value="light">
                                    <svg class="icon icon-lg me-3">
                                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-sun"></use>
                                    </svg><span data-coreui-i18n="light">Light</span>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center" type="button"
                                    data-coreui-theme-value="dark">
                                    <svg class="icon icon-lg me-3">
                                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                                    </svg><span data-coreui-i18n="dark"> Dark</span>
                                </button>
                            </li>
                            <li>
                                <button class="dropdown-item d-flex align-items-center active" type="button"
                                    data-coreui-theme-value="auto">
                                    <svg class="icon icon-lg me-3">
                                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-contrast">
                                        </use>
                                    </svg>Auto
                                </button>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item py-1">
                        <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2"
                                data-coreui-i18n="account">Account</div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                                </svg><span data-coreui-i18n="updates">Updates</span><span
                                    class="badge badge-sm bg-info-gradient ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open">
                                    </use>
                                </svg><span data-coreui-i18n="messages">Messages</span><span
                                    class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                                </svg><span data-coreui-i18n="tasks">Tasks</span><span
                                    class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square">
                                    </use>
                                </svg><span data-coreui-i18n="comments">Comments</span><span
                                    class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
                            <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold my-2"
                                data-coreui-i18n="settings">Settings</div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                                </svg><span data-coreui-i18n="profile">Profile</span></a><a class="dropdown-item"
                                href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                                </svg><span data-coreui-i18n="settings">Settings</span></a><a class="dropdown-item"
                                href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card">
                                    </use>
                                </svg><span data-coreui-i18n="payments">Payments</span><span
                                    class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                                </svg><span data-coreui-i18n="projects">Projects</span><span
                                    class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked">
                                    </use>
                                </svg><span data-coreui-i18n="lockAccount">Lock Account</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout">
                                    </use>
                                </svg><span data-coreui-i18n="logout">Logout</span></a>
                        </div>
                    </li>
                </ul>
                <button class="header-toggler" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()"
                    style="margin-inline-end: -12px">
                    <svg class="icon icon-lg">
                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-applications-settings"></use>
                    </svg>
                </button>
            </div>
            <div class="container-fluid px-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0">
                        <li class="breadcrumb-item"><a href="#" data-coreui-i18n="home">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><span data-coreui-i18n="dashboard">Dashboard</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1">
            <div class="container-lg px-4">
                <div class="row g-4 mb-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card text-white bg-primary-gradient">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                                            <svg class="icon">
                                                <use
                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-bottom">
                                                </use>
                                            </svg>)</span></div>
                                    <div data-coreui-i18n="users">Users</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#" data-coreui-i18n="action">Action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="anotherAction">Another action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="somethingElseHere">Something else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart1" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card text-white bg-info-gradient">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                                            <svg class="icon">
                                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-top">
                                                </use>
                                            </svg>)</span></div>
                                    <div data-coreui-i18n="income">Income</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#" data-coreui-i18n="action">Action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="anotherAction">Another action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="somethingElseHere">Something else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart2" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card text-white bg-warning-gradient">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                                            <svg class="icon">
                                                <use href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-top">
                                                </use>
                                            </svg>)</span></div>
                                    <div data-coreui-i18n="conversionRate">Conversion Rate</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#" data-coreui-i18n="action">Action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="anotherAction">Another action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="somethingElseHere">Something else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3" style="height:70px;">
                                <canvas class="chart" id="card-chart3" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-xl-3">
                        <div class="card text-white bg-danger-gradient">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                                            <svg class="icon">
                                                <use
                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-arrow-bottom">
                                                </use>
                                            </svg>)</span></div>
                                    <div data-coreui-i18n="sessions">Sessions</div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg class="icon">
                                            <use href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                            </use>
                                        </svg>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                            href="#" data-coreui-i18n="action">Action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="anotherAction">Another action</a><a
                                            class="dropdown-item" href="#"
                                            data-coreui-i18n="somethingElseHere">Something else here</a></div>
                                </div>
                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                <canvas class="chart" id="card-chart4" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mb-0" data-coreui-i18n="traffic">Traffic</h4>
                                <div class="small text-body-secondary"><span
                                        data-coreui-i18n-date="dateOnlyMonthName, { date: '2023, 1, 1'}">January</span>
                                    - <span
                                        data-coreui-i18n-date="dateOnlyMonthName, { 'date': '2023, 6, 30'}">July</span>
                                    2023</div>
                            </div>
                            <div class="btn-toolbar d-none d-md-block" role="toolbar"
                                aria-label="Toolbar with buttons">
                                <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                                    <input class="btn-check" id="option1" type="radio" name="options"
                                        autocomplete="off">
                                    <label class="btn btn-outline-secondary" data-coreui-i18n="day">Day</label>
                                    <input class="btn-check" id="option2" type="radio" name="options"
                                        autocomplete="off" checked="">
                                    <label class="btn btn-outline-secondary active"
                                        data-coreui-i18n="month">Month</label>
                                    <input class="btn-check" id="option3" type="radio" name="options"
                                        autocomplete="off">
                                    <label class="btn btn-outline-secondary" data-coreui-i18n="year">Year</label>
                                </div>
                                <button class="btn btn-primary" type="button">
                                    <svg class="icon">
                                        <use href="node_modules/@coreui/icons/sprites/free.svg#cil-cloud-download">
                                        </use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                            <canvas class="chart" id="main-chart" height="300"></canvas>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 g-4 mb-2 text-center">
                            <div class="col">
                                <div class="text-body-secondary" data-coreui-i18n="visits">Visits</div>
                                <div class="fw-semibold text-truncate"><span
                                        data-coreui-i18n="usersCounter, { 'counter': '29.703' }">29.703 Users</span>
                                    (40%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-body-secondary" data-coreui-i18n="unique">Unique</div>
                                <div class="fw-semibold text-truncate"><span
                                        data-coreui-i18n="usersCounter, { 'counter': '24.093' }">24.093 Users</span>
                                    (20%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                        style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-body-secondary" data-coreui-i18n="pageviews">Pageviews</div>
                                <div class="fw-semibold text-truncate"><span
                                        data-coreui-i18n="viewsCounter, { 'counter': '78.706' }">78.706 Views</span>
                                    (60%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-warning-gradient" role="progressbar"
                                        style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="text-body-secondary" data-coreui-i18n="newUsers">New Users</div>
                                <div class="fw-semibold text-truncate"><span
                                        data-coreui-i18n="usersCounter, { 'counter': '22.123' }">22.123
                                        Users</span>(80%)</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                        style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col d-none d-xl-block">
                                <div class="text-body-secondary" data-coreui-i18n="bounceRate">Bounce Rate</div>
                                <div class="fw-semibold text-truncate">40.15%</div>
                                <div class="progress progress-thin mt-2">
                                    <div class="progress-bar" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card.mb-4-->
                <div class="row g-4 mb-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card" style="--cui-card-cap-bg: #3b5998">
                            <div
                                class="card-header position-relative d-flex justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use href="node_modules/@coreui/icons/sprites/brand.svg#cib-facebook-f">
                                    </use>
                                </svg>
                                <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                    <canvas id="social-box-chart-1" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">89k</div>
                                    <div class="text-uppercase text-body-secondary small"
                                        data-coreui-i18n="friends">friends</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">459</div>
                                    <div class="text-uppercase text-body-secondary small" data-coreui-i18n="feeds">
                                        feeds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card" style="--cui-card-cap-bg: #00aced">
                            <div
                                class="card-header position-relative d-flex justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use href="node_modules/@coreui/icons/sprites/brand.svg#cib-twitter"></use>
                                </svg>
                                <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                    <canvas id="social-box-chart-2" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">973k</div>
                                    <div class="text-uppercase text-body-secondary small"
                                        data-coreui-i18n="followers">followers</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">1.792</div>
                                    <div class="text-uppercase text-body-secondary small" data-coreui-i18n="tweets">
                                        tweets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card" style="--cui-card-cap-bg: #4875b4">
                            <div
                                class="card-header position-relative d-flex justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use href="node_modules/@coreui/icons/sprites/brand.svg#cib-linkedin"></use>
                                </svg>
                                <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                    <canvas id="social-box-chart-3" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">500+</div>
                                    <div class="text-uppercase text-body-secondary small"
                                        data-coreui-i18n="contacts">contacts</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">292</div>
                                    <div class="text-uppercase text-body-secondary small" data-coreui-i18n="feeds">
                                        feeds</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header" data-coreui-i18n="trafficAndSales">Traffic &amp; Sales</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="border-start border-start-4 border-start-info px-3 mb-3">
                                                    <div class="small text-body-secondary text-truncate"
                                                        data-coreui-i18n="newClients">New Clients</div>
                                                    <div class="fs-5 fw-semibold">9.123</div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4 border-start-danger px-3 mb-3">
                                                    <div class="small text-body-secondary text-truncate"
                                                        data-coreui-i18n="recurringClients">Recuring Clients</div>
                                                    <div class="fs-5 fw-semibold">22.643</div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                        </div>
                                        <!-- /.row-->
                                        <hr class="mt-0">
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="monday">Monday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 34%" aria-valuenow="34" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="tuesday">Tuesday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 94%" aria-valuenow="94" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="wednesday">Wednesday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 67%" aria-valuenow="67" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="thursday">Thursday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 91%" aria-valuenow="91" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="friday">Friday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 73%" aria-valuenow="73" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="saturday">Saturday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 53%" aria-valuenow="53" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-4">
                                            <div class="progress-group-prepend"><span
                                                    class="text-body-secondary small"
                                                    data-coreui-i18n="sunday">Sunday</span></div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        style="width: 9%" aria-valuenow="9" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        style="width: 69%" aria-valuenow="69" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4 border-start-warning px-3 mb-3">
                                                    <div class="small text-body-secondary text-truncate"
                                                        data-coreui-i18n="pageviews">Pageviews</div>
                                                    <div class="fs-5 fw-semibold">78.623</div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                            <div class="col-6">
                                                <div
                                                    class="border-start border-start-4 border-start-success px-3 mb-3">
                                                    <div class="small text-body-secondary text-truncate"
                                                        data-coreui-i18n="organic">Organic</div>
                                                    <div class="fs-5 fw-semibold">49.123</div>
                                                </div>
                                            </div>
                                            <!-- /.col-->
                                        </div>
                                        <!-- /.row-->
                                        <hr class="mt-0">
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use href="node_modules/@coreui/icons/sprites/free.svg#cil-user">
                                                    </use>
                                                </svg>
                                                <div data-coreui-i18n="male">Male</div>
                                                <div class="ms-auto fw-semibold">43%</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-warning-gradient" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group mb-5">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        href="node_modules/@coreui/icons/sprites/free.svg#cil-user-female">
                                                    </use>
                                                </svg>
                                                <div data-coreui-i18n="female">Female</div>
                                                <div class="ms-auto fw-semibold">37%</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-warning-gradient" role="progressbar"
                                                        style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        href="node_modules/@coreui/icons/sprites/brand.svg#cib-google">
                                                    </use>
                                                </svg>
                                                <div data-coreui-i18n="organicSearch">Organic Search</div>
                                                <div class="ms-auto fw-semibold me-2">191.235</div>
                                                <div class="text-body-secondary small">(56%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                                        style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        href="node_modules/@coreui/icons/sprites/brand.svg#cib-facebook-f">
                                                    </use>
                                                </svg>
                                                <div>Facebook</div>
                                                <div class="ms-auto fw-semibold me-2">51.223</div>
                                                <div class="text-body-secondary small">(15%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                                        style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        href="node_modules/@coreui/icons/sprites/brand.svg#cib-twitter">
                                                    </use>
                                                </svg>
                                                <div>Twitter</div>
                                                <div class="ms-auto fw-semibold me-2">37.564</div>
                                                <div class="text-body-secondary small">(11%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                                        style="width: 11%" aria-valuenow="11" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-group">
                                            <div class="progress-group-header">
                                                <svg class="icon icon-lg me-2">
                                                    <use
                                                        href="node_modules/@coreui/icons/sprites/brand.svg#cib-linkedin">
                                                    </use>
                                                </svg>
                                                <div>LinkedIn</div>
                                                <div class="ms-auto fw-semibold me-2">27.319</div>
                                                <div class="text-body-secondary small">(8%)</div>
                                            </div>
                                            <div class="progress-group-bars">
                                                <div class="progress progress-thin">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                                        style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row--><br>
                                <div class="table-responsive">
                                    <table class="table border mb-0">
                                        <thead class="fw-semibold text-nowrap">
                                            <tr class="align-middle">
                                                <th class="bg-body-secondary text-center">
                                                    <svg class="icon">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/free.svg#cil-people">
                                                        </use>
                                                    </svg>
                                                </th>
                                                <th class="bg-body-secondary" data-coreui-i18n="user">User</th>
                                                <th class="bg-body-secondary text-center"
                                                    data-coreui-i18n="country">Country</th>
                                                <th class="bg-body-secondary" data-coreui-i18n="usage">Usage</th>
                                                <th class="bg-body-secondary text-center"
                                                    data-coreui-i18n="paymentMethod">Payment Method</th>
                                                <th class="bg-body-secondary" data-coreui-i18n="activity">Activity
                                                </th>
                                                <th class="bg-body-secondary"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/1.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-success"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Yiorgos Avraamu</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            data-coreui-i18n="new">New</span> | <span
                                                            data-coreui-i18n="registered">Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2023</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/flag.svg#cif-us">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">50%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-success-gradient"
                                                            role="progressbar" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-mastercard">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        data-coreui-i18n="lastLogin">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -10, 'range': 'seconds' }">
                                                        10 sec ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="info">Info</a><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="edit">Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                data-coreui-i18n="delete">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/2.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-danger-gradient"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Avram Tarasios</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            data-coreui-i18n="recurring">Recurring</span> | <span
                                                            data-coreui-i18n="registered">Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2023</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/flag.svg#cif-br">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">10%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-info-gradient"
                                                            role="progressbar" style="width: 10%"
                                                            aria-valuenow="10" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-visa">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        data-coreui-i18n="lastLogin">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -5, 'range': 'minutes' }">
                                                        5 minutes ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="info">Info</a><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="edit">Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                data-coreui-i18n="delete">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/3.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-warning-gradient"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Quintin Ed</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            data-coreui-i18n="new">New</span> | <span
                                                            data-coreui-i18n="registered">Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2023</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/flag.svg#cif-in">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">74%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-warning-gradient"
                                                            role="progressbar" style="width: 74%"
                                                            aria-valuenow="74" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-stripe">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        data-coreui-i18n="lastLogin">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -1, 'range': 'hours' }">
                                                        1 hour ago</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="info">Info</a><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="edit">Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                data-coreui-i18n="delete">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/4.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-secondary-gradient"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Enéas Kwadwo</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            data-coreui-i18n="new">New</span> | <span
                                                            data-coreui-i18n="registered">Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2023</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/flag.svg#cif-fr">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">98%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-danger-gradient"
                                                            role="progressbar" style="width: 98%"
                                                            aria-valuenow="98" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-paypal">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        data-coreui-i18n="lastLogin">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -1, 'range': 'weeks' }">
                                                        Last week</div>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="info">Info</a><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="edit">Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                data-coreui-i18n="delete">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/5.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-success"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Agapetus Tadeáš</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            data-coreui-i18n="new">New</span> | <span
                                                            data-coreui-i18n="registered">Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2023</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/flag.svg#cif-es">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">22%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 18'}">
                                                            </span></div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-info-gradient"
                                                            role="progressbar" style="width: 22%"
                                                            aria-valuenow="22" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-apple-pay">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        data-coreui-i18n="lastLogin">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -3, 'range': 'months' }">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropup">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="info">Info</a><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="edit">Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                data-coreui-i18n="delete">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td class="text-center">
                                                    <div class="avatar avatar-md"><img class="avatar-img"
                                                            src="assets/img/avatars/6.jpg"
                                                            alt="user@email.com"><span
                                                            class="avatar-status bg-danger-gradient"></span></div>
                                                </td>
                                                <td>
                                                    <div class="text-nowrap">Friderik Dávid</div>
                                                    <div class="small text-body-secondary text-nowrap"><span
                                                            data-coreui-i18n="new">New</span> | <span
                                                            data-coreui-i18n="registered">Registered: </span><span
                                                            data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 1, 10'}">Jan
                                                            1, 2023</span></div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/flag.svg#cif-pl">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-between align-items-baseline">
                                                        <div class="fw-semibold">43%</div>
                                                        <div class="text-nowrap small text-body-secondary ms-3"><span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 6, 11'}"></span>
                                                            - <span
                                                                data-coreui-i18n-date="dateShortMonthName, { 'date': '2023, 7, 10'}"></span>
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-thin">
                                                        <div class="progress-bar bg-success-gradient"
                                                            role="progressbar" style="width: 43%"
                                                            aria-valuenow="43" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <svg class="icon icon-xl">
                                                        <use
                                                            href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-amex">
                                                        </use>
                                                    </svg>
                                                </td>
                                                <td>
                                                    <div class="small text-body-secondary"
                                                        data-coreui-i18n="lastLogin">Last login</div>
                                                    <div class="fw-semibold text-nowrap"
                                                        data-coreui-i18n="relativeTime, { 'val': -1, 'range': 'years' }">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="dropdown dropup">
                                                        <button
                                                            class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                            type="button" data-coreui-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <svg class="icon">
                                                                <use
                                                                    href="node_modules/@coreui/icons/sprites/free.svg#cil-options">
                                                                </use>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end"><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="info">Info</a><a
                                                                class="dropdown-item" href="#"
                                                                data-coreui-i18n="edit">Edit</a><a
                                                                class="dropdown-item text-danger" href="#"
                                                                data-coreui-i18n="delete">Delete</a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>
        <footer class="footer px-4">
            <div><a href="https://coreui.io">CoreUI </a><a
                    href="https://coreui.io/product/bootstrap-dashboard-template/">Bootstrap Admin Template</a> &copy;
                2023 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI PRO UI Components</a>
            </div>
        </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script src="vendors/i18next/js/i18next.min.js"></script>
    <script src="vendors/i18next-http-backend/js/i18nextHttpBackend.js"></script>
    <script src="vendors/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.js"></script>
    <script src="js/i18next.js"></script>
    <script>
        const header = document.querySelector('header.header');

        document.addEventListener('scroll', () => {
            if (header) {
                header.classList.toggle('shadow-sm', document.documentElement.scrollTop > 0);
            }
        });
    </script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.umd.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/index.js"></script>
    <script src="js/main.js"></script>

</body>



</html>
