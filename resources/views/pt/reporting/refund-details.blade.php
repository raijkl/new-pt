@extends('layouts.app')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        @include('layouts.navbars.auth.topnav', ['title' => 'Product List'])
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
                        <div>
                            <h5 class="mb-0">Refund Details</h5> 
                        </div>

                    </div>
                </div>


                <div class="card mt-3 bg-dark" style="border-radius: 0;">
                    <div class="row">
                        <div class="col-12">
                            <!-- Calendar Range Picker -->
                            <div class="d-flex align-items-center ms-2 me-2">
                                <input id="reportrange" type="text" class="form-control" name="daterange" />
                                <!-- Dropdowns -->
                                <select class="form-select form-control me-2" aria-label="Currency">
                                    <option selected>Currency</option>
                                    <option value="usd">USD</option>
                                    <option value="eur">EUR</option>
                                    <option value="gbp">GBP</option>
                                    <option value="cad">CAD</option>
                                    <option value="jpy">JPY</option>
                                    <option value="aud">AUD</option>
                                    <option value="zar">ZAR</option>
                                    <option value="brl">BRL</option>
                                    <option value="inr">INR</option>
                                </select>

                                <select class="form-select form-control me-2" aria-label="Order By">
                                    <option selected>Order By</option>
                                    <option value="refundcount">Refund Count</option>
                                    <option value="refundtotal">Refund Total</option>
                                </select>

                                <select class="form-select form-control me-2" aria-label="Order">
                                    <option selected>Order</option>
                                    <option value="desc">DESC</option>
                                    <option value="asc">ASC</option>
                                </select>

                                <!-- Search Button -->
                                <button class="btn btn-primary ms-auto mt-3" type="button">SEARCH</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-flush" id="datatable-search">
                    <thead class="thead-light">
                        <tr>
                            <th>Client</th>
                            <th>ISO</th>
                            <th>Total Count</th>
                            <th>Total Refund</th>
                            <th>Gateway</th>
                            <th>Refund Count</th>
                            <th>Currency</th>
                            <th>Total Refund</th>
                            <th>Trx Count</th>
                            <th>Trx Amount</th>
                            <th>Refund Count %</th>
                            <th>Refund Volume %</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row for reddogcasino.com -->
                        <tr>
                            <td>reddogcasino.com<br>Count: 42, Total: 2,807.23</td>
                            <td>HOUSE</td>
                            <td>42</td>
                            <td>2,807.23</td>
                            <td>Snappy-2D-USD</td>
                            <td>42</td>
                            <td>USD</td>
                            <td>2,807.23</td>
                            <td>2082</td>
                            <td>136,574.52</td>
                            <td>2.02%</td>
                            <td>2.06%</td>
                        </tr>

                        <!-- Consolidated Rows for planetpeptide.com -->
                        <tr>
                            <td rowspan="3">planetpeptide.com<br>Count: 9, Total: 105.46</td>
                            <td rowspan="3">CNBS</td>
                            <td rowspan="3">5</td>
                            <td rowspan="3">61.46</td>
                            <td>Global-USD</td>
                            <td>3</td>
                            <td>USD</td>
                            <td>37.47</td>
                            <td>17</td>
                            <td>198.23</td>
                            <td>17.65%</td>
                            <td>18.90%</td>
                        </tr>
                        <tr>
                            <td>MID-EUR-FTD-G</td>
                            <td>1</td>
                            <td>EUR</td>
                            <td>11.00</td>
                            <td>1</td>
                            <td>11.00</td>
                            <td>100.00%</td>
                            <td>100.00%</td>
                        </tr>
                        <tr>
                            <td>Global-2D</td>
                            <td>1</td>
                            <td>USD</td>
                            <td>12.99</td>
                            <td>1</td>
                            <td>12.99</td>
                            <td>100.00%</td>
                            <td>100.00%</td>
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

    .form-control {
        margin-right: 0.5rem !important;
    }

    .daterangepicker {
        direction: revert;
    }
</style>

@push('js')

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="/assets/js/plugins/datatables.js"></script>
<script>
    $(function() {

        var end = moment(); // Today
        var start = moment().subtract(1, 'month'); // One month ago

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
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

        // Set initial input value to "MM/DD/YYYY - MM/DD/YYYY"
        $('#reportrange').val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));

        cb(start, end); // Trigger initial display
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
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

    document.addEventListener('DOMContentLoaded', () => {
        // Select all rows in the table body
        const rows = document.querySelectorAll('#datatable-search tbody tr');

        // Iterate through each row
        rows.forEach(row => {
            // Find the "Status" cell (assuming it's the 12th column, index 11)
            const statusCell = row.cells[11];

            // Get the text content of the status cell and trim whitespace
            const statusText = statusCell.textContent.trim().toLowerCase();

            // Add appropriate Bootstrap class based on the status value
            if (statusText === 'success') {
                statusCell.classList.add('text-success');
            } else if (statusText === 'failed' || statusText === 'error') {
                statusCell.classList.add('text-danger');
            } else if (statusText === 'warning') {
                statusCell.classList.add('text-warning');
            }
        });
    });
</script>


@endpush