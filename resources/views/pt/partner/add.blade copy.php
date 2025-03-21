@extends('layouts.app')

@section('content')
<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">
        @include('layouts.navbars.auth.topnav', ['title' => 'New User'])
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
                                        <img src="/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
                                        <img src="/assets/img/small-logos/logo-spotify.svg"
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
    <div class="row mb-5">
        <div class="col-12">
            <div class="multisteps-form mb-5">
                <!--progress bar-->
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto my-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active" type="button"
                                        title="User Info">
                                        <span>User Info</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                        title="Address">Address</button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                        title="Socials">Socials</button>
                                    <button class="multisteps-form__progress-btn" type="button"
                                        title="Profile">Profile</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--form panels-->
                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <form class="multisteps-form__form mb-8">
                            <!--single form panel-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                <h5 class="font-weight-bolder mb-0">Login Information</h5>
                                <div class="multisteps-form__content">
                                    <!-- Login Information Section -->
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Login Email *</label>
                                            <input class="multisteps-form__input form-control" type="email" placeholder="eg. user@example.com" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Password *</label>
                                            <input class="multisteps-form__input form-control" type="password" placeholder="******" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Retype Password *</label>
                                            <input class="multisteps-form__input form-control" type="password" placeholder="******" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>First Name *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. John" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Last Name *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. Doe" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Phone *</label>
                                            <input class="multisteps-form__input form-control" type="tel" placeholder="eg. +1234567890" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Country *</label>
                                            <select class="multisteps-form__input form-control" required>
                                                <option value="" disabled selected>Select Country</option>
                                                <option value="US">United States</option>
                                                <option value="CA">Canada</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="AU">Australia</option>
                                                <option value="JP">Japan</option>
                                                <option value="IN">India</option>
                                                <option value="BR">Brazil</option>
                                                <option value="ZA">South Africa</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Customer Service Information -->
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Customer Service Email Address</label>
                                            <input class="multisteps-form__input form-control" type="email" placeholder="eg. support@example.com" />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Customer Service Telephone</label>
                                            <input class="multisteps-form__input form-control" type="tel" placeholder="eg. +1234567890" />
                                        </div>
                                    </div>

                                    <!-- Partner/Merchant Application Status -->
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Partner/Merchant Application Status</label>
                                            <select class="multisteps-form__input form-control">
                                                <option value="" disabled selected>Select One</option>
                                                <option value="pending">Pending</option>
                                                <option value="approved">Approved</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Notes -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label>Notes</label>
                                            <textarea class="multisteps-form__input form-control" rows="3" placeholder="Enter any additional notes"></textarea>
                                        </div>
                                    </div>

                                    <!-- Partner Information -->
                                    <h5 class="font-weight-bolder mt-4 mb-0">Partner Information</h5>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Partner Doing Business As Name *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. ABC Corp" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Partner Legal (Registered) Company Name *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. XYZ Inc" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Partner Domain *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. example.com" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Bank Validated URL</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. https://bank.example.com" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>PM Type *</label>
                                            <select class="multisteps-form__input form-control" required>
                                                <option value="" disabled selected>Select PM Type</option>
                                                <option value="unknown">Unknown</option>
                                                <option value="known">Known</option>
                                                <option value="trusted">Trusted</option>
                                                <option value="vip">VIP</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- ISO Selection -->
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Select ISO</label>
                                            <select class="multisteps-form__input form-control">
                                                <option value="" disabled selected>Select ISO</option>
                                                <option value="iso1">ISO 1</option>
                                                <option value="iso2">ISO 2</option>
                                                <option value="iso3">ISO 3</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Assign Currencies -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Assign Currencies *</label>
                                            <div class="d-flex flex-wrap gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="USD" id="currency-usd" />
                                                    <label class="form-check-label" for="currency-usd">USD</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="EUR" id="currency-eur" />
                                                    <label class="form-check-label" for="currency-eur">EUR</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="GBP" id="currency-gbp" />
                                                    <label class="form-check-label" for="currency-gbp">GBP</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="CAD" id="currency-cad" />
                                                    <label class="form-check-label" for="currency-cad">CAD</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="JPY" id="currency-jpy" />
                                                    <label class="form-check-label" for="currency-jpy">JPY</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="AUD" id="currency-aud" />
                                                    <label class="form-check-label" for="currency-aud">AUD</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="ZAR" id="currency-zar" />
                                                    <label class="form-check-label" for="currency-zar">ZAR</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="BRL" id="currency-brl" />
                                                    <label class="form-check-label" for="currency-brl">BRL</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="INR" id="currency-inr" />
                                                    <label class="form-check-label" for="currency-inr">INR</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Crypto Enable -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Crypto Enable *</label>
                                            <div class="d-flex gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="crypto-enable" id="crypto-yes" value="yes" required />
                                                    <label class="form-check-label" for="crypto-yes">YES</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="crypto-enable" id="crypto-no" value="no" required />
                                                    <label class="form-check-label" for="crypto-no">NO</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bank to Bank Enable -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Bank to Bank Enable *</label>
                                            <div class="d-flex gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bank-enable" id="bank-yes" value="yes" required />
                                                    <label class="form-check-label" for="bank-yes">YES</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="bank-enable" id="bank-no" value="no" required />
                                                    <label class="form-check-label" for="bank-no">NO</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tracopia Flow -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Tracopia Flow *</label>
                                            <div class="d-flex gap-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tracopia-flow" id="tracopia-enable" value="enable" required />
                                                    <label class="form-check-label" for="tracopia-enable">Enable</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tracopia-flow" id="tracopia-disable" value="disable" required />
                                                    <label class="form-check-label" for="tracopia-disable">Disable</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">

                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Address</h5>
                                <div class="multisteps-form__content">
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Legal Name on Bank Account *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. John Doe" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Bank Account Number *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. 123456789" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Name of Bank *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. HSBC" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Routing Number</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. 123456789" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Swift Code</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. HSBCCNBJ" />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Complete Address of Your Bank</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. 123 Bank Street" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Status</label>
                                            <select class="multisteps-form__input form-control">
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="not-verified">Not Verified</option>
                                                <option value="hsbc-designated">HSBC Designated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Intermediate Bank Name</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. Intermediate Bank" />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Intermediate Bank Address</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. 456 Intermediate Street" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Intermediate Bank Swift Code</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. INTERMEDIATE123" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Crypto Information Section -->
                                <div id="crypto-section" class="mt-3 d-none">
                                    <h6 class="font-weight-bold">Crypto Information</h6>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Crypto Currency Type *</label>
                                            <select class="multisteps-form__input form-control" required>
                                                <option value="" disabled selected>Select Currency Type</option>
                                                <option value="btc">Bitcoin (BTC)</option>
                                                <option value="eth">Ethereum (ETH)</option>
                                                <option value="usdt">Tether (USDT)</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Crypto Wallet Address *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. 1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa" required />
                                        </div>
                                    </div>
                                </div>

                                <!-- eCheck Information Section -->
                                <div id="echeck-section" class="mt-3 d-none">
                                    <h6 class="font-weight-bold">eCheck Information</h6>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Pay To The Order Of *</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. John Doe" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>N/A</label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="N/A" readonly />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>State *</label>
                                            <select class="multisteps-form__input form-control" required>
                                                <option value="" disabled selected>Select State</option>
                                                <option value="ca">California</option>
                                                <option value="ny">New York</option>
                                                <option value="tx">Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>
                    </div>
                    <!--single form panel-->
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                        data-animation="FadeIn">
                        <h5 class="font-weight-bolder">Socials</h5>
                        <div class="multisteps-form__content">
                            <div class="row mt-3">
                                <div class="col-12">
                                    <label>Twitter Handle</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        placeholder="@argon" />
                                </div>
                                <div class="col-12 mt-3">
                                    <label>Facebook Account</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        placeholder="https://..." />
                                </div>
                                <div class="col-12 mt-3">
                                    <label>Instagram Account</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        placeholder="https://..." />
                                </div>
                            </div>
                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                        title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--single form panel-->
                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100"
                        data-animation="FadeIn">
                        <h5 class="font-weight-bolder">Profile</h5>
                        <div class="multisteps-form__content mt-3">
                            <div class="row">
                                <div class="col-12">
                                    <label>Public Email</label>
                                    <input class="multisteps-form__input form-control" type="text"
                                        placeholder="Use an address you don't use frequently." />
                                </div>
                                <div class="col-12 mt-3">
                                    <label>Bio</label>
                                    <textarea class="multisteps-form__textarea form-control" rows="5"
                                        placeholder="Say a few words about who you are or what you're working on."></textarea>
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                    title="Prev">Prev</button>
                                <button class="btn bg-gradient-dark ms-auto mb-0" type="button"
                                    title="Send">Send</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
</div>
@endsection

@push('js')


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const paymentTypeRadios = document.querySelectorAll(".payment-type");
        const bankSection = document.getElementById("bank-section");
        const cryptoSection = document.getElementById("crypto-section");
        const echeckSection = document.getElementById("echeck-section");

        // Function to show/hide sections
        function toggleSections(selectedValue) {
            bankSection.classList.add("d-none");
            cryptoSection.classList.add("d-none");
            echeckSection.classList.add("d-none");

            if (selectedValue === "bank") {
                bankSection.classList.remove("d-none");
            } else if (selectedValue === "crypto") {
                cryptoSection.classList.remove("d-none");
            } else if (selectedValue === "echeck") {
                echeckSection.classList.remove("d-none");
            }
        }

        // Add event listeners to radio buttons
        paymentTypeRadios.forEach(radio => {
            radio.addEventListener("change", function() {
                toggleSections(this.value);
            });
        });
    });
</script>
<script src="../../../assets/js/plugins/multistep-form.js"></script>

@endpush