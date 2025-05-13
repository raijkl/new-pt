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
                    <h5 class="mb-2">Client Details</h5>
                    <p class="mb-0"> </p>
                </div>
                <div class="d-flex">
                    <!-- Vertical Tab Sidebar -->
                    <div class="card col-2">
                        <div class="card-body p-0">
                            <ul class="nav flex-column nav-pills p-3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#basicInfo" role="tab">Basic Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#integrationDetails" role="tab">Integration Details</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#bankInfo" role="tab">Bank Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#gatewayAssignment" role="tab">Gateway Assignment</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#feesInfo" role="tab">Fees Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#settings" role="tab">Settings</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#others" role="tab">Others</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="{{ route('partner.accounting') }}" role="tab">Accounting</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab Content Area -->
                    <div class="card col-10 mb-5">
                        <div class="card-body">
                            <div class="tab-content">

                                <!-- Basic Info -->
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel">
                                    <h5>Basic Info</h5>
                                    <dl class="row">
                                        <dt class="col-sm-3">Login Email</dt>
                                        <dd class="col-sm-9">management@mstreethost.com</dd>
                                        <dt class="col-sm-3">First Name</dt>
                                        <dd class="col-sm-9">MStreet</dd>
                                        <dt class="col-sm-3">Last Name</dt>
                                        <dd class="col-sm-9">Corporation</dd>
                                        <dt class="col-sm-3">Phone</dt>
                                        <dd class="col-sm-9">888-888-8888</dd>
                                        <dt class="col-sm-3">Country</dt>
                                        <dd class="col-sm-9">United States</dd>
                                        <dt class="col-sm-3">Customer Service Email Address</dt>
                                        <dd class="col-sm-9"></dd>
                                        <dt class="col-sm-3">Customer Service Telephone</dt>
                                        <dd class="col-sm-9"></dd>
                                        <dt class="col-sm-3">Partner/Merchant Application Status</dt>
                                        <dd class="col-sm-9">Select One</dd>
                                        <dt class="col-sm-3">Login Status</dt>
                                        <dd class="col-sm-9">ACTIVE</dd>
                                        <dt class="col-sm-3">Notes</dt>
                                        <dd class="col-sm-9">4xT1IWUA0c</dd>
                                        <dt class="col-sm-3">Partner Doing Business As Name</dt>
                                        <dd class="col-sm-9">MStreet Corp</dd>
                                        <dt class="col-sm-3">Partner Legal (Registered) Company Name</dt>
                                        <dd class="col-sm-9">MStreet Corp</dd>
                                        <dt class="col-sm-3">Partner Domain</dt>
                                        <dd class="col-sm-9">mstreethost.com</dd>
                                        <dt class="col-sm-3">Bank Validated URL</dt>
                                        <dd class="col-sm-9"></dd>
                                        <dt class="col-sm-3">PM Type</dt>
                                        <dd class="col-sm-9">Known</dd>
                                        <dt class="col-sm-3">Allow Currency</dt>
                                        <dd class="col-sm-9">USD</dd>
                                        <dt class="col-sm-3">Crypto Enable</dt>
                                        <dd class="col-sm-9">NO</dd>
                                    </dl>
                                </div>

                                <!-- Integration Details -->
                                <div class="tab-pane fade" id="integrationDetails" role="tabpanel">
                                    <h5>Integration Details</h5>
                                    <dl class="row">
                                        <dt class="col-sm-4">Authenticate ID</dt>
                                        <dd class="col-sm-8">610b4ec9ff1ad098bf9fbdcd24685171</dd>
                                        <dt class="col-sm-4">Authenticate PW</dt>
                                        <dd class="col-sm-8">6140c9ffefe58e4db3eeaa27427d582b</dd>
                                        <dt class="col-sm-4">Secret Key</dt>
                                        <dd class="col-sm-8">681a067007fa86.22351358</dd>
                                        <dt class="col-sm-4">Optional 32 Bit Secret Key*</dt>
                                        <dd class="col-sm-8">0e49a0bcbaa587995fe8c059864777b8</dd>
                                        <dt class="col-sm-4">Public Key</dt>
                                        <dd class="col-sm-8">g045Ek9A</dd>
                                        <dt class="col-sm-4">ID Verification</dt>
                                        <dd class="col-sm-8">OFF</dd>
                                        <dt class="col-sm-4">Allowed Hosted Payment</dt>
                                        <dd class="col-sm-8">No</dd>
                                        <dt class="col-sm-4">&nbsp;</dt>
                                        <dd class="col-sm-8 text-muted"><small>*Certain scripts/languages require a 32-bit key to utilize the "AES-256-CBC" encryption method.</small></dd>
                                    </dl>
                                </div>

                                <!-- Bank Info -->
                                <div class="tab-pane fade" id="bankInfo" role="tabpanel">
                                    <h5>Bank Info</h5>
                                    <dl class="row">
                                        <dt class="col-sm-4">Crypto Currency Type</dt>
                                        <dd class="col-sm-8">Bitcoin</dd>
                                        <dt class="col-sm-4">Crypto Wallet Address</dt>
                                        <dd class="col-sm-8">testwallet</dd>
                                    </dl>
                                </div>

                                <!-- Gateway Assignment -->
                                <div class="tab-pane fade" id="gatewayAssignment" role="tabpanel">
                                    <h5>Gateway Assignment</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Gateway</th>
                                                    <th>Transaction%</th>
                                                    <th>Amount</th>
                                                    <th>Duration (Days)</th>
                                                    <th>Approve Amount</th>
                                                    <th>Decline Amount</th>
                                                    <th>Amt Duration (Days)</th>
                                                    <th>Approve Trn#</th>
                                                    <th>Decline Trn#</th>
                                                    <th>Refund Trn#</th>
                                                    <th>CB Trn#</th>
                                                    <th>Trn# Duration (Days)</th>
                                                    <th>Decline Trn#(%)</th>
                                                    <th>Refund Trn#(%)</th>
                                                    <th>CB Trn#(%)</th>
                                                    <th>(%) Duration</th>
                                                    <th>Min Trn#</th>
                                                    <th>Currency</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>GP-USD-MST</td>
                                                    <td>100</td>
                                                    <td>100000</td>
                                                    <td>1</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>USD</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Fees Info -->
                                <div class="tab-pane fade" id="feesInfo" role="tabpanel">
                                    <h5>Fees Info</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Card</th>
                                                    <th>MDR (%)</th>
                                                    <th>Processing</th>
                                                    <th>Decline</th>
                                                    <th>Refund</th>
                                                    <th>Chargeback</th>
                                                    <th>Rolling Reserve (%)</th>
                                                    <th>Rolling Reserve Duration (Days)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Visa</td>
                                                    <td>8</td>
                                                    <td>0.5</td>
                                                    <td>0.5</td>
                                                    <td>15</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                    <td>180</td>
                                                </tr>
                                                <tr>
                                                    <td>Mastercard</td>
                                                    <td>8</td>
                                                    <td>0.5</td>
                                                    <td>0.5</td>
                                                    <td>15</td>
                                                    <td>0</td>
                                                    <td>10</td>
                                                    <td>180</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Settings -->
                                <div class="tab-pane fade" id="settings" role="tabpanel">
                                    <h5>Settings</h5>
                                    <dl class="row">
                                        <dt class="col-sm-4">Payout Condition</dt>
                                        <dd class="col-sm-8">Every Wednesday</dd>
                                        <dt class="col-sm-4">Payout Minimum</dt>
                                        <dd class="col-sm-8">10000</dd>
                                        <dt class="col-sm-4">Fee Calculation Condition</dt>
                                        <dd class="col-sm-8">Monthly</dd>
                                        <dt class="col-sm-4">Virtual Terminal</dt>
                                        <dd class="col-sm-8">OFF</dd>
                                        <dt class="col-sm-4">Ignore Velocity Decline</dt>
                                        <dd class="col-sm-8">No</dd>
                                        <dt class="col-sm-4">Ignore aVelocity Decline</dt>
                                        <dd class="col-sm-8">No</dd>
                                        <dt class="col-sm-4">ID Verification</dt>
                                        <dd class="col-sm-8">No</dd>
                                    </dl>
                                </div>

                                <!-- Others -->
                                <div class="tab-pane fade" id="others" role="tabpanel">
                                    <h5>Others</h5>
                                    <dl class="row">
                                        <dt class="col-sm-4">Allowed Hosted Payment</dt>
                                        <dd class="col-sm-8">No</dd>
                                        <dt class="col-sm-4">Products sold by this business</dt>
                                        <dd class="col-sm-8"></dd>
                                        <dt class="col-sm-4">Check BIN for Transaction</dt>
                                        <dd class="col-sm-8">No</dd>
                                        <dt class="col-sm-4">Allowed IPs</dt>
                                        <dd class="col-sm-8"></dd>
                                        <dt class="col-sm-4">Additional Allowed Domains</dt>
                                        <dd class="col-sm-8"></dd>
                                        <dt class="col-sm-4">Do Not Cascade Response Keywords</dt>
                                        <dd class="col-sm-8"></dd>
                                        <dt class="col-sm-4">Failed Response Messages to Blacklist</dt>
                                        <dd class="col-sm-8"></dd>
                                    </dl>
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