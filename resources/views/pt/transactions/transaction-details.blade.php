@extends('layouts.app')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        @include('layouts.navbars.auth.topnav', ['title' => 'Referral'])
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
                                        <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
                                        <img src="../../assets/img/small-logos/logo-spotify.svg"
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
                <div class="card-header p-3">
                    <h5 class="mb-2">Transaction Details</h5>
                    <div class="flex-container ms-3 mt-4">
                        <h6 class="mb-2">Transaction: #11130783</h6>
                        <span class="badge bg-success">USD 30.03</span>
                        <span class="badge bg-danger">Error</span>
                    </div>
                </div>
                <div class="d-flex">
                    <!-- Vertical Tab Sidebar -->
                    <div class="card col-2">
                        <div class="card-body p-0">
                            <ul class="nav flex-column nav-pills p-3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#detailsInformation" role="tab">Details Information</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#requestResponse" role="tab">Request/Response</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#history" role="tab">History</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab Content Area -->
                    <div class="card col-10 mb-5">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="detailsInformation" role="tabpanel">

                                    <div class="row">

                                        <!-- Transaction Info -->
                                        <div class="col-md-4 mb-4">
                                            <h5>Transaction Info</h5>
                                            <table class="table table-bordered">

                                                <tr>
                                                    <th>Date</th>
                                                    <td>2025-05-08 02:32:30</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>Error</td>
                                                </tr>
                                                <tr>
                                                    <th>Trn. ID</th>
                                                    <td>11130783</td>
                                                </tr>
                                                <tr>
                                                    <th>PG Order ID</th>
                                                    <td>3681c17be1e586</td>
                                                </tr>
                                                <tr>
                                                    <th>Gateway</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Descriptor</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Partner</th>
                                                    <td>
                                                        <a href="{{ route('partners', ['page' => 'partner-details']) }}" style="color: blue;">
                                                            reddogcasino.com
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Gateway Trn ID</th>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <th>Partner Order ID</th>
                                                    <td>13872742</td>
                                                </tr>
                                                <tr>
                                                    <th>Transaction Type</th>
                                                    <td>Authorize</td>
                                                </tr>
                                                <tr>
                                                    <th>Amount</th>
                                                    <td>USD 30.03</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- Fees Information -->
                                        <div class="col-md-4 mb-4">
                                            <h5>Fees Information</h5>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>MDR</th>
                                                    <td>3.00 (10%)</td>
                                                </tr>
                                                <tr>
                                                    <th>Transaction Fee</th>
                                                    <td>0.50</td>
                                                </tr>
                                                <tr>
                                                    <th>Rolling Reserve</th>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Rolling Reserve Date</th>
                                                    <td>( Days)</td>
                                                </tr>
                                                <tr>
                                                    <th>Refund Fees</th>
                                                    <td>10.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Chargeback Fees</th>
                                                    <td>0.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Payout Date</th>
                                                    <td>2025-05-28</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- Customer Information -->
                                        <div class="col-md-4 mb-4">
                                            <h5>Customer Information</h5>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>First Name</th>
                                                    <td>Matthew</td>
                                                </tr>
                                                <tr>
                                                    <th>Last Name</th>
                                                    <td>Berberick</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>matgmkb102213@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>8287674051</td>
                                                </tr>
                                                <tr>
                                                    <th>Street</th>
                                                    <td>246 w wonder rd</td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td>Leicester</td>
                                                </tr>
                                                <tr>
                                                    <th>Zip</th>
                                                    <td>28748</td>
                                                </tr>
                                                <tr>
                                                    <th>State</th>
                                                    <td>NC</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>US</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- Card Information -->
                                        <div class="col-md-4 mb-4">
                                            <h5>Card Information</h5>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Card Type</th>
                                                    <td>VISA</td>
                                                </tr>
                                                <tr>
                                                    <th>Card Number</th>
                                                    <td>403163******7259</td>
                                                </tr>
                                                <tr>
                                                    <th>Card Expire</th>
                                                    <td>04/30</td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- BIN Details -->
                                        <div class="col-md-4 mb-4">
                                            <h5>BIN Details</h5>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>BIN</th>
                                                    <td>40316307</td>
                                                </tr>
                                                <tr>
                                                    <th>Card Brand</th>
                                                    <td>VISA</td>
                                                </tr>
                                                <tr>
                                                    <th>Card Type</th>
                                                    <td>VISA CLASSIC</td>
                                                </tr>
                                                <tr>
                                                    <th>ISO Country Name</th>
                                                    <td>UNITED STATES</td>
                                                </tr>
                                                <tr>
                                                    <th>ISO Country A2</th>
                                                    <td>US</td>
                                                </tr>
                                                <tr>
                                                    <th>API Response</th>
                                                    <td><a href="#">View</a></td>
                                                </tr>
                                            </table>
                                        </div>

                                        <!-- Acuitytech Information -->
                                        <div class="col-md-4 mb-4">
                                            <h5>Acuitytech Information</h5>
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>User Number</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Internal Transaction Id</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Recommendation</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Score</th>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="requestResponse" role="tabpanel">
                                    <h5 class="card-title">Request/Response Logs</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>S/L</th>
                                                    <th>Gateway</th>
                                                    <th>Descriptor</th>
                                                    <th>Partner</th>
                                                    <th>Transaction ID</th>
                                                    <th>Response Code</th>
                                                    <th>Response Message</th>
                                                    <th>Type</th>
                                                    <th>Data</th>
                                                    <th>Added</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="10" class="text-muted">No data found</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="history" role="tabpanel">
                                    <h5 class="card-title">Transaction History</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>S/L</th>
                                                    <th>PGTID</th>
                                                    <th>Gateway</th>
                                                    <th>Partner</th>
                                                    <th>Transaction ID</th>
                                                    <th>Status</th>
                                                    <th>Message</th>
                                                    <th>Added</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>11130783</td>
                                                    <td></td>
                                                    <td>
                                                        <a href="{{ route('partners', ['page' => 'partner-details']) }}" style="color: blue;">
                                                            reddogcasino.com
                                                        </a>
                                                    </td>
                                                    <td>0</td>
                                                    <td>Error</td>
                                                    <td>Velocity Decline</td>
                                                    <td>2025-05-08 02:32:30</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- Request/Response Details -->
                                        <div class="mt-4">
                                            <h6>Request from partner</h6>
                                            <small class="text-muted">Request Data - Added: 2025-05-08 02:32:30</small>
                                            <pre class="bg-light p-3 rounded mt-2 overflow-auto" style="max-height: 300px;">
{
  "authenticate_id": "a16526675321f379f2457b0cefd134a9",
  "authenticate_pw": "86aca01b2e9582116905f6da3f251af5",
  "orderid": 13872742,
  "transaction_type": "A",
  "amount": "30.03",
  "currency": "USD",
  "card_info": "V3c2Y2ZoM2JzandXZXU2ejNZSjBkdkxEOTNoSTJZMU40ZHVOZVU2K0xwSnpXQi9EQmRpdG4ycFhrV1h6Q3k1Y0VGQVR0ZVRRMllIWmg5dUdtMk52aFFCQ3UwaG43NVBvbDZFa2dXNTh6TXNLRVMrb1FUNUJEMkIySXUvUW9STDM6Ovq9QA4NCPsF1PDYzanmTiQ=",
  "email": "matgmkb102213@gmail.com",
  "street": "246 w wonder rd",
  "city": "Leicester",
  "zip": "28748",
  "state": "NC",
  "country": "US",
  "phone": "8287674051",
  "transaction_hash": "eyJpdiI6IldJNWErcEVVZGU0VmxleDNlQ0t4eGlRPSIsInZhbHVlIjoiM29iUHIwZk5STTBGRnJNMS9GYld4dz09IiwibWFjIjoiMGY2Y2JlYzhmNWFhMGMxNjEwMzkwOGQ1NmJjYjc1MzY2OGQ0YmM4NjIxYTk3OWQzMmFlYjU4ZTNmYzA4MGE3MSIsInRhZyI6IiJ9",
  "customerip": "174.219.160.136",
  "signature": "f4f2096eb1ae116a5350b94ef1c8472c458f12a0"
}
          </pre>

                                            <!-- Response to partner -->
                                            <div class="mt-4">
                                                <h6>Response to partner</h6>
                                                <table class="table table-bordered table-sm mb-2">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Response Data</th>
                                                            <th>Start</th>
                                                            <th>End</th>
                                                            <th>Different</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <pre class="mb-0 bg-light p-2 rounded overflow-auto" style="max-height: 300px;">
{
  "code": 430,
  "status": "error",
  "response": {
    "transaction_id": 11130783,
    "order_id": 13872742,
    "errorCode": 430,
    "message": "Payment failed",
    "details": "Velocity Decline",
    "amount": "30.03",
    "currency": "USD",
    "descriptor": ""
  }
}
                </pre>
                                                            </td>
                                                            <td class="align-middle">2025-05-08 02:32:30</td>
                                                            <td class="align-middle">2025-05-08 02:32:30</td>
                                                            <td class="align-middle">0 Sec</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.footers.auth.footer')
            </div>
            @endsection
            <style>
                .badge {
                    display: inline-block;
                    padding: 0.6rem 0.6rem !important;
                    font-size: 0.75em;
                    font-weight: bold;
                    line-height: 1;
                    color: #fff;
                    text-align: center;
                    white-space: nowrap;
                    vertical-align: middle;
                    background-color: #6c757d;
                    border-radius: 2rem !important;
                }

                .flex-container {
                    display: flex;
                    gap: 8px;
                }

                .d-flex-between {
                    display: flex;
                    gap: 15px;
                    flex-wrap: wrap;
                }

                .nav-link>div {
                    font-weight: 600;
                }

                .nav-link small {
                    font-size: 0.8em;
                }

                #dateTabs .nav-link {
                    height: 4rem;
                    width: auto;
                }
            </style>
            @push('js')
            <script src="../../assets/js/plugins/countup.min.js"></script>
            <script>
                if (document.getElementById('state1')) {
                    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
                    if (!countUp.error) {
                        countUp.start();
                    } else {
                        console.error(countUp.error);
                    }
                }
                if (document.getElementById('state2')) {
                    const countUp = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
                    if (!countUp.error) {
                        countUp.start();
                    } else {
                        console.error(countUp.error);
                    }
                }
                if (document.getElementById('state3')) {
                    const countUp = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
                    if (!countUp.error) {
                        countUp.start();
                    } else {
                        console.error(countUp.error);
                    }
                }
                if (document.getElementById('state4')) {
                    const countUp = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
                    if (!countUp.error) {
                        countUp.start();
                    } else {
                        console.error(countUp.error);
                    }
                }

                function formatDate(date) {
                    return new Intl.DateTimeFormat('en-US', {
                        month: 'short',
                        day: 'numeric'
                    }).format(date);
                }

                function getStartEndOfWeek(date) {
                    const day = date.getDay();
                    const diff = date.getDate() - day + (day === 0 ? -6 : 1); // adjust when Sunday is the first day
                    const start = new Date(date.setDate(diff));
                    const end = new Date(date.setDate(diff + 6));
                    return [start, end];
                }

                function getStartEndOfLastWeek(date) {
                    const prevMonday = new Date(date.setDate(date.getDate() - date.getDay() - 6));
                    const prevSunday = new Date(date.setDate(date.getDate() - date.getDay() + 6));
                    return [prevMonday, prevSunday];
                }

                function getQuarterDates(date) {
                    const quarter = Math.floor((date.getMonth() / 3));
                    const start = new Date(date.getFullYear(), quarter * 3, 1);
                    const end = new Date(date.getFullYear(), (quarter + 1) * 3, 0);
                    return [start, end];
                }

                function getLastQuarterDates(date) {
                    const quarter = Math.floor((date.getMonth() / 3)) - 1;
                    const start = new Date(date.getFullYear(), quarter * 3, 1);
                    const end = new Date(date.getFullYear(), (quarter + 1) * 3, 0);
                    return [start, end];
                }

                function generateDateRanges() {
                    const today = new Date();
                    const yesterday = new Date(today);
                    yesterday.setDate(today.getDate() - 1);

                    const [thisWeekStart, thisWeekEnd] = getStartEndOfWeek(new Date());
                    const [lastWeekStart, lastWeekEnd] = getStartEndOfLastWeek(new Date());

                    const thisMonthStart = new Date(today.getFullYear(), today.getMonth(), 1);
                    const thisMonthEnd = new Date(today.getFullYear(), today.getMonth() + 1, 0);

                    const lastMonthStart = new Date(today.getFullYear(), today.getMonth() - 1, 1);
                    const lastMonthEnd = new Date(today.getFullYear(), today.getMonth(), 0);

                    const [thisQuarterStart, thisQuarterEnd] = getQuarterDates(new Date());
                    const [lastQuarterStart, lastQuarterEnd] = getLastQuarterDates(new Date());

                    const thisYearStart = new Date(today.getFullYear(), 0, 1);
                    const thisYearEnd = new Date(today.getFullYear(), 11, 31);

                    const lastYearStart = new Date(today.getFullYear() - 1, 0, 1);
                    const lastYearEnd = new Date(today.getFullYear() - 1, 11, 31);

                    const futureCustom = new Date(today);
                    futureCustom.setMonth(futureCustom.getMonth() + 1);
                    futureCustom.setDate(1);
                    futureCustom.setDate(futureCustom.getDate() - 1);

                    const customStart = new Date(futureCustom);
                    customStart.setMonth(customStart.getMonth() - 1);
                    customStart.setDate(1);

                    return [{
                            label: "Today",
                            range: formatDate(today)
                        },
                        {
                            label: "Yesterday",
                            range: formatDate(yesterday)
                        },
                        {
                            label: "This Week",
                            range: `${formatDate(thisWeekStart)} - ${formatDate(thisWeekEnd)}`
                        },
                        {
                            label: "Last Week",
                            range: `${formatDate(lastWeekStart)} - ${formatDate(lastWeekEnd)}`
                        },
                        {
                            label: "This Month",
                            range: `${formatDate(thisMonthStart)} - ${formatDate(thisMonthEnd)}`
                        },
                        {
                            label: "Last Month",
                            range: `${formatDate(lastMonthStart)} - ${formatDate(lastMonthEnd)}`
                        },
                        {
                            label: "This Quarter",
                            range: `${formatDate(thisQuarterStart)} - ${formatDate(thisQuarterEnd)}`
                        },
                        {
                            label: "Last Quarter",
                            range: `${formatDate(lastQuarterStart)} - ${formatDate(lastQuarterEnd)}`
                        },
                        {
                            label: "This Year",
                            range: `${today.getFullYear()}`
                        },
                        {
                            label: "Last Year",
                            range: `${today.getFullYear() - 1}`
                        },
                        {
                            label: "2025-03-31",
                            range: "2025-04-29"
                        }
                    ];
                }

                function renderTabs() {
                    const container = document.getElementById("dateTabs");
                    const ranges = generateDateRanges();

                    ranges.forEach((item, index) => {
                        const li = document.createElement("li");
                        li.className = "nav-item";

                        const a = document.createElement("a");
                        a.className = index === 0 ? "nav-link active" : "nav-link";
                        a.href = "#";
                        a.setAttribute("role", "button");

                        // Create main label
                        const label = document.createElement("div");
                        label.textContent = item.label;

                        // Create sub-label (date range)
                        const small = document.createElement("small");
                        small.className = "d-block text-muted";
                        small.textContent = item.range;

                        // Append both
                        a.appendChild(label);
                        a.appendChild(small);

                        li.appendChild(a);
                        container.appendChild(li);
                    });
                }
                document.addEventListener("DOMContentLoaded", renderTabs);
            </script>
            @endpush