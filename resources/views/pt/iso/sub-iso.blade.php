@extends('layouts.app')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        @include('layouts.navbars.auth.topnav', ['title' => 'Manage Sub ISO'])
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
            <a href="javascript:;" class="nav-link p-0">
                <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                </div>
            </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-flex align-items-center">
                    @include('auth.logout')
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0">
                        <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                    </a>
                </li>
                <li class="nav-item position-relative pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                            alt="user image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="../../../assets/img/small-logos/logo-spotify.svg"
                                            class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background"
                                                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                opacity="0.593633743"></path>
                                                            <path class="color-background"
                                                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        {{-- <div>
                            <h5 class="mb-0">Manage Partners</h5>
                            Manage your partner's account here
                        </div> --}}
                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                <a href="./new-product.html" class="btn bg-gradient-primary btn-sm mb-0"
                                    target="_blank">+&nbsp; Download as CSV</a>
                                {{-- <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal"
                                    data-bs-target="#import">
                                    Import
                                </button> --}}
                                {{-- <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog mt-lg-10">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                <i class="fas fa-upload ms-3"></i>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>You can browse your computer for a file.</p>
                                                <input type="text" placeholder="Browse file..."
                                                    class="form-control mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="importCheck" checked="">
                                                    <label class="custom-control-label" for="importCheck">I accept the
                                                        terms and conditions</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary btn-sm"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn bg-gradient-primary btn-sm">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv"
                                    type="button" name="button">Export</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3 bg-dark" style="border-radius: 0;">
                    <div class="row">
                        <div class="col-12">
                            <!-- Input Fields -->
                            <div class="d-flex align-items-center ms-2 me-2">
                                {{-- <input type="text" class="form-control me-2" placeholder="Email" aria-label="Email">
                                <input type="text" class="form-control me-2" placeholder="First Name" aria-label="First Name">
                                <input type="text" class="form-control me-2" placeholder="Last Name" aria-label="Last Name">
                                <input type="text" class="form-control me-2" placeholder="Phone No" aria-label="Phone No">
                                <input type="text" class="form-control me-2" placeholder="Business Name" aria-label="Business Name">
                                <input type="text" class="form-control me-2" placeholder="Company Name" aria-label="Company Name">
                                <input type="text" class="form-control me-2" placeholder="Domain" aria-label="Domain">
                                <input type="text" class="form-control me-2" placeholder="Authentication Id" aria-label="Authentication Id">
                                <input type="password" class="form-control me-2" placeholder="Authentication PW" aria-label="Authentication PW"> --}}

                                <!-- Dropdown for "any trx capability status" -->
                                <select class="form-select form-control me-2" aria-label="trx capability status" style="width: 300px;>
                                    <option selected>Category</option>
                                    <option value="active">Test </option>
                                    <option value="inactive">Test 2</option>
                                    <option value="inactive">Test 3</option>
                                </select>
                                <input type="date" class="form-control me-2" placeholder="" aria-label="Domain" style="width: 300px;">

                                <!-- Search Button -->
                                <button class="btn btn-primary ml-auto mt-3" type="button">Generate</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>SL.</th>
                            <th>Sub ISO ID</th>
                            <th>ISO ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-sm font-weight-normal">01</td>
                            <td class="text-sm font-weight-normal"><a href="#">THOR</a></td>
                            <td class="text-sm font-weight-normal">	0 </td>
                            <td class="text-sm font-weight-normal">Patrizio Spitalieri</td>
                            <td class="text-sm font-weight-normal">support@thorpayments.net</td>
                            <td class="text-sm font-weight-normal">
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="transactionToggleActive" checked>
                                    <label class="form-check-label ms-2" for="transactionToggleActive">
                                        <span id="transactionStatus">Active</span>
                                    </label>
                                </div>
                            </td>
                            <td class="text-sm font-weight-normal">
                                <div class="flex items-center gap-2">
                                    <!-- Edit Button -->
                                    <a href="#" class="text-gray-500 hover:text-blue-500 px-2">
                                        <i class="ti ti-pencil text-lg"></i>
                                    </a>

                                    <!-- Transaction Report Button -->
                                    <a href="#" class="text-gray-500 hover:text-green-500 px-2">
                                        <i class="ti ti-file-text text-lg"></i>
                                    </a>

                                    <!-- Act As Button -->
                                    <a href="#" class="text-gray-500 hover:text-indigo-500 px-2">
                                        <i class="ti ti-user-circle text-lg"></i>
                                    </a>

                                    <!-- Payout Report Button -->
                                    <a href="#" class="text-gray-500 hover:text-yellow-500 px-2">
                                        <i class="ti ti-currency-dollar text-lg"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm font-weight-normal">02</td>
                            <td class="text-sm font-weight-normal"><a href="#">SWITCH</a></td>
                            <td class="text-sm font-weight-normal">	0 </td>
                            <td class="text-sm font-weight-normal">Patrizio Spitalieri</td>
                            <td class="text-sm font-weight-normal">support@thorpayments.net</td>
                            <td class="text-sm font-weight-normal">
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="transactionToggleActive" checked>
                                    <label class="form-check-label ms-2" for="transactionToggleActive">
                                        <span id="transactionStatus">Active</span>
                                    </label>
                                </div>
                            </td>
                            <td class="text-sm font-weight-normal">
                                <div class="flex items-center gap-2">
                                    <!-- Edit Button -->
                                    <a href="#" class="text-gray-500 hover:text-blue-500 px-2">
                                        <i class="ti ti-pencil text-lg"></i>
                                    </a>

                                    <!-- Transaction Report Button -->
                                    <a href="#" class="text-gray-500 hover:text-green-500 px-2">
                                        <i class="ti ti-file-text text-lg"></i>
                                    </a>

                                    <!-- Act As Button -->
                                    <a href="#" class="text-gray-500 hover:text-indigo-500 px-2">
                                        <i class="ti ti-user-circle text-lg"></i>
                                    </a>

                                    <!-- Payout Report Button -->
                                    <a href="#" class="text-gray-500 hover:text-yellow-500 px-2">
                                        <i class="ti ti-currency-dollar text-lg"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-sm font-weight-normal">03</td>
                            <td class="text-sm font-weight-normal"><a href="#">HOUSE</a></td>
                            <td class="text-sm font-weight-normal">	0 </td>
                            <td class="text-sm font-weight-normal">Patrizio Spitalieri</td>
                            <td class="text-sm font-weight-normal">support@thorpayments.net</td>
                            <td class="text-sm font-weight-normal">
                                <div class="form-check form-switch d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" id="transactionToggleActive" checked>
                                    <label class="form-check-label ms-2" for="transactionToggleActive">
                                        <span id="transactionStatus">Active</span>
                                    </label>
                                </div>
                            </td>
                            <td class="text-sm font-weight-normal">
                                <div class="flex items-center gap-2">
                                    <!-- Edit Button -->
                                    <a href="#" class="text-gray-500 hover:text-blue-500 px-2">
                                        <i class="ti ti-pencil text-lg"></i>
                                    </a>

                                    <!-- Transaction Report Button -->
                                    <a href="#" class="text-gray-500 hover:text-green-500 px-2">
                                        <i class="ti ti-file-text text-lg"></i>
                                    </a>

                                    <!-- Act As Button -->
                                    <a href="#" class="text-gray-500 hover:text-indigo-500 px-2">
                                        <i class="ti ti-user-circle text-lg"></i>
                                    </a>

                                    <!-- Payout Report Button -->
                                    <a href="#" class="text-gray-500 hover:text-yellow-500 px-2">
                                        <i class="ti ti-currency-dollar text-lg"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection

<style>
    /* Green text for Active */
    .text-active {
        color: green;
    }

    /* Red text for Inactive */
    .text-inactive {
        color: red;
    }
</style>

@push('js')
<script src="/assets/js/plugins/datatables.js"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false,
        perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "soft-ui-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        // Function to update status text and color
        function updateStatus(toggleElement, statusElement) {
            if (toggleElement.checked) {
                statusElement.textContent = 'Active';
                statusElement.classList.remove('text-inactive');
                statusElement.classList.add('text-active');
            } else {
                statusElement.textContent = 'Inactive';
                statusElement.classList.remove('text-active');
                statusElement.classList.add('text-inactive');
            }
        }

        // Transaction Toggle
        const transactionToggle = document.getElementById('transactionToggleActive');
        const transactionStatus = document.getElementById('transactionStatus');
        updateStatus(transactionToggle, transactionStatus); // Initialize on page load
        transactionToggle.addEventListener('change', function() {
            updateStatus(transactionToggle, transactionStatus);
        });

        // Login Toggle
        const loginToggle = document.getElementById('loginToggleInactive');
        const loginStatus = document.getElementById('loginStatus');
        updateStatus(loginToggle, loginStatus); // Initialize on page load
        loginToggle.addEventListener('change', function() {
            updateStatus(loginToggle, loginStatus);
        });
    });
</script>
@endpush