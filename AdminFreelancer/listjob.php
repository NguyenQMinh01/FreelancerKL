<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template">
    <meta name="author" content="AppSeed">
    <link rel="icon" href="https://www.f-cdn.com/assets/main/en/assets/freelancer-logo-old.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/fonts/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/plugins/animation/css/animate.min.css">
    <link rel="stylesheet" href="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/css/style.css">
    <link rel="stylesheet" href="https://appsrv1-147a1.kxcdn.com/data-able-v100-enh1/css/dark.css">
    <link href="https://preview.tabler.io/dist/css/tabler.min.css?1668288743" rel="stylesheet">
    <link href="https://preview.tabler.io/dist/css/demo.min.css?1668288743" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <script src="https://preview.tabler.io/dist/js/demo-theme.min.js?1668288743"></script>
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo"> <a href="#" class="b-brand">
                    <div class="b-bg"> <i class="feather icon-trending-up"></i> </div> <span class="b-title">Admin Freelancer</span>
                </a> <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a> </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: 100%; height: calc(-70px + 100vh);">
                <div class="navbar-content scroll-div" style="overflow: hidden; width: 100%; height: calc(-70px + 100vh);">
                    <ul class="nav pcoded-inner-navbar">
                        <li class="nav-item pcoded-menu-caption"> <label>Danh mục</label> </li>
                        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item  active "> <a href="admin.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a> </li>
                        <li data-username="Profile Page" class="nav-item "><a href="listjob.php" class="nav-link"> <span class="pcoded-micon"><i class="feather icon-user"></i></span> <span class="pcoded-mtext">List job</span></a> </li>
                        <li data-username="Disabled Menu" class="nav-item"><a href="#" class="nav-link"> <span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Logout</span> </a> </li>
                    </ul>
                </div>
                <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 898px;"></div>
                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
        </div>
    </nav>
    <div class="col-12 pcoded-main-container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Danh sách tin/job đã được duyệt</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-muted">
                        Show
                        <div class="mx-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                        </div>
                        job
                    </div>
                    <div class="ms-auto text-muted">
                        Search:
                        <div class="ms-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                            <th class="w-1">No.
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="6 15 12 9 18 15"></polyline>
                                </svg>
                            </th>
                            <th>Title</th>
                            <th>Client</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="tr1">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001401</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                            <td>
                                <span class="flag flag-country-us"></span>
                                Carlson Limited
                            </td>
                            <td>
                                15 Dec 2017
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$887</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr1')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr2">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001402</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                            <td>
                                <span class="flag flag-country-gb"></span>
                                Adobe
                            </td>
                            <td>
                                12 Apr 2017
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$1200</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr2')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr3">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001403</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                            <td>
                                <span class="flag flag-country-de"></span>
                                Bluewolf
                            </td>
                            <td>
                                23 Oct 2017
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$534</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr3')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr4">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001404</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                            <td>
                                <span class="flag flag-country-br"></span>
                                Salesforce
                            </td>
                            <td>
                                2 Sep 2017
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$1500</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr4')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr5">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001405</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                            <td>
                                <span class="flag flag-country-pl"></span>
                                Printic
                            </td>
                            <td>
                                29 Jan 2018
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$648</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr5')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr6">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001406</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                            <td>
                                <span class="flag flag-country-br"></span>
                                Tabdaq
                            </td>
                            <td>
                                4 Feb 2018
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$300</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr6')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr7">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001407</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a></td>
                            <td>
                                <span class="flag flag-country-us"></span>
                                Apple
                            </td>
                            <td>
                                22 Mar 2018
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$2500</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr7')">
                                            Xóa
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr id="tr8">
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">001408</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                            <td>
                                <span class="flag flag-country-pl"></span>
                                Tookapic
                            </td>
                            <td>
                                13 May 2018
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Đã duyệt
                            </td>
                            <td>$940</td>
                            <td>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            Xem chi tiết
                                        </a>
                                        <a class="dropdown-item" href="#" onclick="hide('#tr8')">
                                            Xóa
                                        </a>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> job</p>
                <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="15 6 9 12 15 18"></polyline>
                            </svg>
                            prev
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            next
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <polyline points="9 6 15 12 9 18"></polyline>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script>
        function hide(id) {
            $(id).hide();
        };
    </script>
</body>

</html>