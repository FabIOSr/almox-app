<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Dashboard Template · Bootstrap v5.3</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('almox/css/dashboard.css') }}" rel="stylesheet">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    @livewireStyles()
    @stack('css')
</head>

<body>

    <div id="app">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">SAF Online <sub> 0.1</sub></a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav d-none d-md-block">
                <div class="nav-item text-nowrap">
                    <a class="nav-link px-3" href="#">Sair</a>
                </div>
            </div>
        </header>
    
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <span data-feather="home" class="align-text-bottom"></span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file" class="align-text-bottom"></span>
                                    Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users" class="align-text-bottom"></span>
                                    Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                    Reports
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="layers" class="align-text-bottom"></span>
                                    Integrations
                                </a>
                            </li>
                        </ul>
    
                        <h6
                            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                            <span>Saved reports</span>
                            <a class="link-secondary" href="#" aria-label="Add a new report">
                                <span data-feather="plus-circle" class="align-text-bottom"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text" class="align-text-bottom"></span>
                                    Year-end sale
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
    
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group me-2">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Share</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Export</button>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions">
                                <span data-feather="calendar" class="align-text-bottom"></span>
                                This week
                            </button>
                        </div>
                    </div>
    
                    <h2>Section title</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                    <th scope="col">Header</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td class="justify-content-between">
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="edit-2" class="align-text-bottom"></span>
                                        </a>
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="info" class="align-text-bottom"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>placeholder</td>
                                    <td>irrelevant</td>
                                    <td>visual</td>
                                    <td class="justify-content-between">
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="edit-2" class="align-text-bottom"></span>
                                        </a>
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="info" class="align-text-bottom"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>data</td>
                                    <td>rich</td>
                                    <td>dashboard</td>
                                    <td class="justify-content-between">
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="edit-2" class="align-text-bottom"></span>
                                        </a>
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="info" class="align-text-bottom"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>information</td>
                                    <td>placeholder</td>
                                    <td>illustrative</td>
                                    <td class="justify-content-between">
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="edit-2" class="align-text-bottom"></span>
                                        </a>
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="info" class="align-text-bottom"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,006</td>
                                    <td>dashboard</td>
                                    <td>illustrative</td>
                                    <td>rich</td>
                                    <td class="justify-content-between">
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="edit-2" class="align-text-bottom"></span>
                                        </a>
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="info" class="align-text-bottom"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1,012</td>
                                    <td>text</td>
                                    <td>placeholder</td>
                                    <td>layout</td>
                                    <td class="justify-content-between">
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <span data-feather="edit-2" class="align-text-bottom"></span>
                                        </a>
                                        <a href="#" class="mx-1 text-decoration-none">
                                            <x-icons.feather icon="trash-2" color="danger"></x-icons.feather>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>
    @stack('modals')
    <x-modals.alert-delete title="One title"></x-modals.alert-delete>
    <x-modals.modal></x-modals.modal>
    <x-modals.offcanvas></x-modals.offcanvas>
    <script src="{{ asset('almox/js/bootstrap.bundle.min.js') }}"></script>
    @livewireScripts()
    @stack('js')
</body>

</html>