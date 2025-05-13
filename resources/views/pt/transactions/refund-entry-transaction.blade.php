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
                    <h5 class="mb-2">Refund Transaction</h5>
                    <p class="mb-0"> </p>
                </div>
                <div class="d-flex">

                    <!-- Tab Content Area -->
                    <div class="card col-6">
                        <div class="card-body">
                            <!-- Refund Information Section -->
                            <!-- Refund Information Section -->
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Transaction Number <span class="text-danger">*</span></label>
                                    <input class="multisteps-form__input form-control" type="text" value="11130704" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <label>Gateway Transaction ID <span class="text-danger">*</span></label>
                                    <input class="multisteps-form__input form-control" type="text" value="418985" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label>Refund Amount <span class="text-danger">*</span></label>
                                    <input class="multisteps-form__input form-control" type="text" value="30.07" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label>Refund Fees <span class="text-danger">*</span></label>
                                    <input class="multisteps-form__input form-control" type="text" value="10.00" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label>Other Fees</label>
                                    <input class="multisteps-form__input form-control" type="text" value="0" />
                                </div>
                                <div class="col-12 col-sm-6 mt-3">
                                    <label>Refund Date <span class="text-danger">*</span></label>
                                    <input class="multisteps-form__input form-control" type="date" value="2025-05-13" />
                                </div>
                                <div class="col-12 mt-3">
                                    <label>Refund Note <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="3" placeholder="Enter refund note here..."></textarea>
                                </div>

                                <!-- Refund Button -->
                                <div class="col-12 mt-4 d-flex justify-content-end">
                                    <button type="button" class="btn btn-danger">Refund</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-6">
                        <!-- Refund Information Section -->

                        <div class="card-header ">
                            <h5 class="mb-0 ">Transaction Information</h5>
                        </div>
                        <div class="card-body">
                            <dl class="row">

                                <dt class="col-sm-3"><strong>Transaction</strong></dt>
                                <dd class="col-sm-3">11130704</dd>

                                <dt class="col-sm-3"><strong>Partner</strong></dt>
                                <dd class="col-sm-3">reddogcasino.com</dd>

                                <dt class="col-sm-3"><strong>Trn Fees</strong></dt>
                                <dd class="col-sm-3">USD 0.65</dd>

                                <dt class="col-sm-3"><strong>PG Order ID</strong></dt>
                                <dd class="col-sm-3">368182f949376a</dd>

                                <dt class="col-sm-3"><strong>Trn Amount</strong></dt>
                                <dd class="col-sm-3">USD 30.07</dd>

                                <dt class="col-sm-3"><strong>Refund Fees</strong></dt>
                                <dd class="col-sm-3">USD 10.00</dd>

                                <dt class="col-sm-3"><strong>Gateway Name</strong></dt>
                                <dd class="col-sm-3">Global-2D</dd>

                                <dt class="col-sm-3"><strong>Gateway TID</strong></dt>
                                <dd class="col-sm-3">418985</dd>

                                <dt class="col-sm-3"><strong>Rolling Reserve</strong></dt>
                                <dd class="col-sm-3">USD 3.01</dd>

                                <dt class="col-sm-3"><strong>MDR</strong></dt>
                                <dd class="col-sm-3">USD 3.01</dd>

                                <dt class="col-sm-3"><strong>CC Last 4</strong></dt>
                                <dd class="col-sm-3">3444</dd>

                                <dt class="col-sm-3"><strong>Trn Date Time</strong></dt>
                                <dd class="col-sm-3">5 May 2025 03:25am</dd>

                            </dl>
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

        </script>
        @endpush