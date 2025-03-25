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

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="container-fluid py-4">
    <div class="row mb-5">
        <div class="col-12">
            <div class="multisteps-form mb-5">
                <!-- Progress Bar -->
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto my-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="multisteps-form__progress">
                                    <!-- Step 1 -->
                                    <button class="multisteps-form__progress-btn js-active" type="button" title="Basic Info">
                                        <span>Basic Info</span>
                                    </button>
                                    <!-- Step 2 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Bank Info">
                                        <span>Bank Info</span>
                                    </button>
                                    <!-- Step 3 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Gateway Assignment">
                                        <span>Gateway Assignment</span>
                                    </button>
                                    <!-- Step 4 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Card(s) Settings">
                                        <span>Card(s) Settings</span>
                                    </button>
                                    <!-- Step 5 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Crypto Settings">
                                        <span>Crypto Settings</span>
                                    </button>
                                    <!-- Step 6 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Bank to Bank Settings">
                                        <span>Bank to Bank Settings</span>
                                    </button>
                                    <!-- Step 7 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Other Fees">
                                        <span>Other Fees</span>
                                    </button>
                                    <!-- Step 8 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Settings">
                                        <span>Settings</span>
                                    </button>
                                    <!-- Step 9 -->
                                    <button class="multisteps-form__progress-btn" type="button" title="Others">
                                        <span>Others</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--form panels-->
                <div class="row">
                    <div class="col-12 col-lg-10 m-auto">
                        <form class="multisteps-form__form mb-8">

                            <!--Basic Info-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                <h5 class="font-weight-bolder mb-0">Login Information</h5>
                                <div class="multisteps-form__content">
                                    <!-- Login Information Section -->
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Login Email <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="email" placeholder="eg. user@example.com"
                                                required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="password" placeholder="******" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Retype Password <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="password" placeholder="******" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. John" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. Doe" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="tel" placeholder="eg. +1234567890" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Country <span class="text-danger">*</span></label>
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
                                            <textarea class="multisteps-form__input form-control" rows="3"
                                                placeholder="Enter any additional notes"></textarea>
                                        </div>
                                    </div>

                                    <!-- Partner Information -->
                                    <h5 class="font-weight-bolder mt-4 mb-0">Partner Information</h5>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Partner Doing Business As Name <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. ABC Corp" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Partner Legal (Registered) Company Name <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. XYZ Inc" required />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Partner Domain <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. example.com" required />
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Bank Validated URL</label>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="eg. https://bank.example.com" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>PM Type <span class="text-danger">*</span></label>
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
                                            <label class="d-block mb-2">Assign Currencies <span class="text-danger">*</span></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="USD" id="currency-usd" />
                                                <label class="form-check-label" for="currency-usd">USD</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="EUR" id="currency-eur" />
                                                <label class="form-check-label" for="currency-eur">EUR</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="GBP" id="currency-gbp" />
                                                <label class="form-check-label" for="currency-gbp">GBP</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="CAD" id="currency-cad" />
                                                <label class="form-check-label" for="currency-cad">CAD</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="JPY" id="currency-jpy" />
                                                <label class="form-check-label" for="currency-jpy">JPY</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="AUD" id="currency-aud" />
                                                <label class="form-check-label" for="currency-aud">AUD</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="ZAR" id="currency-zar" />
                                                <label class="form-check-label" for="currency-zar">ZAR</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="BRL" id="currency-brl" />
                                                <label class="form-check-label" for="currency-brl">BRL</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" value="INR" id="currency-inr" />
                                                <label class="form-check-label" for="currency-inr">INR</label>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Crypto Enable -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Crypto Enable <span class="text-danger">*</span></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="crypto-enable" id="crypto-yes" value="yes"
                                                    required />
                                                <label class="form-check-label" for="crypto-yes">YES</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="crypto-enable" id="crypto-no" value="no"
                                                    required />
                                                <label class="form-check-label" for="crypto-no">NO</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Bank to Bank Enable -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Bank to Bank Enable <span class="text-danger">*</span></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="bank-enable" id="bank-yes" value="yes"
                                                    required />
                                                <label class="form-check-label" for="bank-yes">YES</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="bank-enable" id="bank-no" value="no" required />
                                                <label class="form-check-label" for="bank-no">NO</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tracopia Flow -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Tracopia Flow <span class="text-danger">*</span></label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tracopia-flow" id="tracopia-enable"
                                                    value="enable" required />
                                                <label class="form-check-label" for="tracopia-enable">Enable</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tracopia-flow" id="tracopia-disable"
                                                    value="disable" required />
                                                <label class="form-check-label" for="tracopia-disable">Disable</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">

                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Bank Info-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <!-- Radio Buttons for Selection -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="paymentMethod" value="bank" checked onclick="toggleForm('bank')"> Bank
                                            Information
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="paymentMethod" value="crypto" onclick="toggleForm('crypto')"> Crypto
                                            Information
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label>
                                            <input type="radio" name="paymentMethod" value="echeck" onclick="toggleForm('echeck')"> eCheck
                                            Information
                                        </label>
                                    </div>
                                </div>

                                <!-- Bank Information Section -->
                                <div id="bankSection" class="multisteps-form__content mt-3">
                                    <h5 class="font-weight-bolder">Bank Information</h5>

                                    <!-- Two-Column Layout -->
                                    <div class="row mt-3">
                                        <!-- Column 1 -->
                                        <div class="col-12 col-sm-6">
                                            <!-- Legal Name on Bank Account -->
                                            <div class="mb-3">
                                                <label>Legal Name on Bank Account <span class="text-danger">*</span></label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. John Doe"
                                                    required />
                                            </div>

                                            <!-- Bank Account Number -->
                                            <div class="mb-3">
                                                <label>Bank Account Number <span class="text-danger">*</span></label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. 123456789"
                                                    required />
                                            </div>

                                            <!-- Routing Number -->
                                            <div class="mb-3">
                                                <label>Routing Number</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. 123456789" />
                                            </div>

                                            <!-- Complete Address of Your Bank -->
                                            <div class="mb-3">
                                                <label>Complete Address of Your Bank</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. 1 Queen's Road Central, Hong Kong" />
                                            </div>
                                        </div>

                                        <!-- Column 2 -->
                                        <div class="col-12 col-sm-6">
                                            <!-- Name of Bank -->
                                            <div class="mb-3">
                                                <label>Name of Bank <span class="text-danger">*</span></label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. HSBC" required />
                                            </div>

                                            <!-- Swift Code -->
                                            <div class="mb-3">
                                                <label>Swift Code</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. COBADEFFXXX" />
                                            </div>

                                            <!-- Status -->
                                            <div class="mb-3">
                                                <label>Status</label>
                                                <select class="multisteps-form__select form-control">
                                                    <option selected="selected">Not Verified</option>
                                                    <option value="verified">Verified</option>
                                                </select>
                                            </div>

                                            <!-- HSBC Designated Checkbox -->
                                            <div class="mb-0">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="hsbcDesignatedCheckbox"
                                                        onclick="toggleIntermediateBank()" />
                                                    <label class="form-check-label mb-0" for="hsbcDesignatedCheckbox">HSBC Designated</label>
                                                </div>
                                            </div>



                                            <!-- Intermediate Bank Name (Dynamic) -->
                                            <div id="hsbcDesignatedSection" style="display: none;">
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. Citibank" />
                                            </div>


                                        </div>

                                        <h5 class="font-weight-bolder">Through Intermediate Bank</h5>

                                        <div id="intermediateBankSection" class="row mt-3">
                                            <div class="col-md-12">
                                                <label>Intermediate Bank Name</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="eg. Citibank" />
                                            </div>
                                            <div class="col-md-12">
                                                <label>Intermediate Bank Address</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. 123 Wall Street, New York" />
                                            </div>
                                            <div class="col-md-12">
                                                <label>Intermediate Bank Swift Code</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. 123 Wall Street, New York" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Crypto Information Section -->
                                <div id="cryptoSection" class="multisteps-form__content mt-3" style="display: none;">
                                    <h5 class="font-weight-bolder">Crypto Information</h5>

                                    <!-- Crypto Currency Type -->
                                    <div class="row mt-3">
                                        <div class="col-3">
                                            <label>Crypto Currency Type <span class="text-danger">*</span></label>
                                            <select class="multisteps-form__select form-control" required>
                                                <option value="" disabled selected>Select Currency Type</option>
                                                <option value="Bitcoin">Bitcoin (BTC)</option>
                                                <option value="Ethereum">Ethereum (ETH)</option>
                                                <option value="Cardano">Cardano (ADA)</option>
                                                <option value="Binance Coin">Binance Coin (BNB)</option>
                                                <option value="Tether">Tether (USDT)</option>
                                                <option value="XRP">XRP (XRP)</option>
                                                <option value="Dogecoin">Dogecoin (DOGE)</option>
                                                <option value="Solana">Solana (SOL)</option>
                                                <option value="USD Coin">USD Coin (USDC)</option>
                                                <option value="Polkadot">Polkadot (DOT)</option>
                                                <option value="Uniswap">Uniswap (UNI)</option>
                                                <option value="Terra">Terra (LUNA)</option>
                                                <option value="Binance USD">Binance USD (BUSD)</option>
                                                <option value="Bitcoin Cash">Bitcoin Cash (BCH)</option>
                                                <option value="Litecoin">Litecoin (LTC)</option>
                                                <option value="Chainlink">Chainlink (LINK)</option>
                                                <option value="Internet Computer">Internet Computer (ICP)</option>
                                                <option value="Wrapped Bitcoin">Wrapped Bitcoin (WBTC)</option>
                                                <option value="Polygon">Polygon (MATIC)</option>
                                                <option value="Stellar">Stellar (XLM)</option>
                                                <option value="Ethereum Classic">Ethereum Classic (ETC)</option>
                                                <option value="Avalanche">Avalanche (AVAX)</option>
                                                <option value="VeChain">VeChain (VET)</option>
                                                <option value="Filecoin">Filecoin (FIL)</option>
                                                <option value="THETA">THETA (THETA)</option>
                                                <option value="TRON">TRON (TRX)</option>
                                                <option value="Dai">Dai (DAI)</option>
                                                <option value="PancakeSwap">PancakeSwap (CAKE)</option>
                                                <option value="Monero">Monero (XMR)</option>
                                                <option value="Tezos">Tezos (XTZ)</option>
                                            </select>
                                        </div>

                                        <!-- Crypto Wallet Address -->
                                        <div class="col-9">
                                            <label>Crypto Wallet Address <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. 0x123..." required />
                                        </div>
                                    </div>
                                </div>

                                <!-- eCheck Information Section -->
                                <div id="echeckSection" class="multisteps-form__content mt-3" style="display: none;">
                                    <h5 class="font-weight-bolder">eCheck Information</h5>

                                    <!-- Pay To The Order Of -->
                                    <div class="row mt-3">
                                        <div class="col-7">
                                            <label>Pay To The Order Of <span class="text-danger">*</span></label>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="eg. John Doe" required />
                                        </div>

                                        <div class="col-5">
                                            <label>State <span class="text-danger">*</span></label>
                                            <select class="multisteps-form__select form-control" required>
                                                <option value="" disabled selected>Select State</option>
                                                <option value="AL">Alabama (AL)</option>
                                                <option value="AK">Alaska (AK)</option>
                                                <option value="AZ">Arizona (AZ)</option>
                                                <option value="AR">Arkansas (AR)</option>
                                                <option value="CA">California (CA)</option>
                                                <option value="CO">Colorado (CO)</option>
                                                <option value="CT">Connecticut (CT)</option>
                                                <option value="DE">Delaware (DE)</option>
                                                <option value="FL">Florida (FL)</option>
                                                <option value="GA">Georgia (GA)</option>
                                                <option value="HI">Hawaii (HI)</option>
                                                <option value="ID">Idaho (ID)</option>
                                                <option value="IL">Illinois (IL)</option>
                                                <option value="IN">Indiana (IN)</option>
                                                <option value="IA">Iowa (IA)</option>
                                                <option value="KS">Kansas (KS)</option>
                                                <option value="KY">Kentucky (KY)</option>
                                                <option value="LA">Louisiana (LA)</option>
                                                <option value="ME">Maine (ME)</option>
                                                <option value="MD">Maryland (MD)</option>
                                                <option value="MA">Massachusetts (MA)</option>
                                                <option value="MI">Michigan (MI)</option>
                                                <option value="MN">Minnesota (MN)</option>
                                                <option value="MS">Mississippi (MS)</option>
                                                <option value="MO">Missouri (MO)</option>
                                                <option value="MT">Montana (MT)</option>
                                                <option value="NE">Nebraska (NE)</option>
                                                <option value="NV">Nevada (NV)</option>
                                                <option value="NH">New Hampshire (NH)</option>
                                                <option value="NJ">New Jersey (NJ)</option>
                                                <option value="NM">New Mexico (NM)</option>
                                                <option value="NY">New York (NY)</option>
                                                <option value="NC">North Carolina (NC)</option>
                                                <option value="ND">North Dakota (ND)</option>
                                                <option value="OH">Ohio (OH)</option>
                                                <option value="OK">Oklahoma (OK)</option>
                                                <option value="OR">Oregon (OR)</option>
                                                <option value="PA">Pennsylvania (PA)</option>
                                                <option value="RI">Rhode Island (RI)</option>
                                                <option value="SC">South Carolina (SC)</option>
                                                <option value="SD">South Dakota (SD)</option>
                                                <option value="TN">Tennessee (TN)</option>
                                                <option value="TX">Texas (TX)</option>
                                                <option value="UT">Utah (UT)</option>
                                                <option value="VT">Vermont (VT)</option>
                                                <option value="VA">Virginia (VA)</option>
                                                <option value="WA">Washington (WA)</option>
                                                <option value="WV">West Virginia (WV)</option>
                                                <option value="WI">Wisconsin (WI)</option>
                                                <option value="WY">Wyoming (WY)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>

                            <!--Gateway Assignment-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Assigned Currencies</h5>

                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4 col-sm-8">
                                        <div class="nav-wrapper position-relative end-0">
                                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 active  active " data-bs-toggle="tab" role="tab"
                                                        aria-selected="true">
                                                        USD
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" role="tab" aria-selected="false">
                                                        JPY
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__content">

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Assigned Gateways </h5>

                                        <div class="table-responsive mb-3">
                                            <h6 class="font-weight-bolder text-center">Threshold</h6>
                                            <table class="table table-flush" id="datatable-basic">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gateway</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tran. %</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duration
                                                            (day)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve
                                                            Amount.</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline
                                                            Amount.</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amt Duration
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CB Trn#</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trn#
                                                            Duration</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline Trn#
                                                            (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund Trn#
                                                            (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CB Trn# (%)
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">(%) Duration
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Min Trn#
                                                            Currency</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Currency
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-sm font-weight-normal">Gateway A</td>
                                                        <td class="text-sm font-weight-normal">5%</td>
                                                        <td class="text-sm font-weight-normal">$10,000</td>
                                                        <td class="text-sm font-weight-normal">30</td>
                                                        <td class="text-sm font-weight-normal">$8,000</td>
                                                        <td class="text-sm font-weight-normal">$2,000</td>
                                                        <td class="text-sm font-weight-normal">15</td>
                                                        <td class="text-sm font-weight-normal">120</td>
                                                        <td class="text-sm font-weight-normal">30</td>
                                                        <td class="text-sm font-weight-normal">10</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">10</td>
                                                        <td class="text-sm font-weight-normal">25%</td>
                                                        <td class="text-sm font-weight-normal">8%</td>
                                                        <td class="text-sm font-weight-normal">4%</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">USD</td>
                                                        <td class="text-sm font-weight-normal d-flex justify-content-center align-items-center">
                                                            <div class="d-flex align-items-center">

                                                                <!-- Edit Button -->
                                                                <a href="#" class="text-gray-500 hover:text-blue-500 px-1">
                                                                    <i class="ti ti-pencil text-lg"></i>
                                                                </a>

                                                                <!-- Delete Button -->
                                                                <a href="#" class="text-gray-500 hover:text-red-500 px-1">
                                                                    <i class="ti ti-trash text-lg"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Add more rows as needed -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Assigned Gateways </h5>
                                        <div class="table-responsive mb-3">
                                            <table class="table table-flush" id="datatable-search">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Gateway</th>
                                                        <th>Category</th>
                                                        <th>Type</th>
                                                        <th>Currency</th>
                                                        <th>Descriptor</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-xs font-weight-bold ms-2 mb-0">WKG-USD-F2D</p>
                                                            </div>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>InverteD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>FRICTIONLESS</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>USD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>,</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold d-flex justify-content-center align-items-center">
                                                            <button class="btn bg-gradient-success btn-sm float-end mb-0">
                                                                <span>Added</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-xs font-weight-bold ms-2 mb-0">LPG6 3DS - USDtoBRA</p>
                                                            </div>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>Pocket V2</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>FRICTIONLESS</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>USD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>,</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold d-flex justify-content-center align-items-center">
                                                            <button class="btn bg-gradient-primary btn-sm mb-0">
                                                                <span>Add</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Apply Gateway Name </h5>

                                        <div class="table-responsive mb-3 ms-3 me-3">

                                            <table class="horizontal-input-table">
                                                <thead>
                                                    <tr>
                                                        <th>Amount</th>
                                                        <th>Duration (day)</th>
                                                        <th>Approve Amt.</th>
                                                        <th>Decline Amt.</th>
                                                        <th>Amt Duration</th>
                                                        <th>Approve Trn#</th>
                                                        <th>Decline Trn#</th>
                                                        <th>Refund Trn#</th>
                                                        <th>CB Trn#</th>
                                                        <th>Trn# Duration</th>
                                                        <th>Decline Trn# (%)</th>
                                                        <th>Refund Trn# (%)</th>
                                                        <th>CB Trn# (%)</th>
                                                        <th>(%) Duration</th>
                                                        <th>Min Trn#</th>
                                                        <th>Currency</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" placeholder="Amount"></td>
                                                        <td><input type="text" placeholder="(Days)"></td>
                                                        <td><input type="text" placeholder="App Amt"></td>
                                                        <td><input type="text" placeholder="Dec Amt"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="App Trn"></td>
                                                        <td><input type="text" placeholder="Dec Trn"></td>
                                                        <td><input type="text" placeholder="Ref Trn"></td>
                                                        <td><input type="text" placeholder="CB Trn"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="Dec (%)"></td>
                                                        <td><input type="text" placeholder="Ref (%)"></td>
                                                        <td><input type="text" placeholder="CB (%)"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="Trn #"></td>
                                                        <td><input type="text" placeholder="USD"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                            <button class="btn bg-gradient-primary btn-sm mb-3">
                                                <span>ASSIGN</span>
                                            </button>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Card(s) Settings-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Assigned Currencies</h5>

                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4 col-sm-8">
                                        <div class="nav-wrapper position-relative end-0">
                                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 active  active " data-bs-toggle="tab" role="tab"
                                                        aria-selected="true">
                                                        USD
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" role="tab" aria-selected="false">
                                                        JPY
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="multisteps-form__content">

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Current Applicable Fees</h5>

                                        <div class="table-responsive mb-3">
                                            <table class="table table-flush" id="datatable-basic">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Card</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MDR (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Processing
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Chargeback
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RR</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assigned
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Next Update
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-sm font-weight-normal">Visa</td>
                                                        <td class="text-sm font-weight-normal"><strong>7</strong><br>Flat: 8.00</td>
                                                        <td class="text-sm font-weight-normal"><strong>0.5</strong><br>Flat: 0.50</td>
                                                        <td class="text-sm font-weight-normal"><strong>0.5</strong><br>Flat: 0.50</td>
                                                        <td class="text-sm font-weight-normal"><strong>20</strong><br>Flat: 20.00</td>
                                                        <td class="text-sm font-weight-normal"><strong>50</strong><br>Ratio: 0.00% - 0.00%</td>
                                                        <td class="text-sm font-weight-normal"><strong>10% 180 days</strong> <br>Flat: 0.00</td>
                                                        <td class="text-sm font-weight-normal">17 March, 2025</td>
                                                        <td class="text-sm font-weight-normal">
                                                            01 April, 2025
                                                            <div class="d-flex align-items-center mt-1">
                                                                <a href="#" class="text-gray-500 hover:text-blue-500 px-1">
                                                                    <i class="ti ti-pencil text-lg"></i>
                                                                </a>
                                                                <a href="#" class="text-gray-500 hover:text-green-500 px-1">
                                                                    <i class="ti ti-rotate-2 text-lg"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-sm font-weight-normal">Mastercard</td>
                                                        <td class="text-sm font-weight-normal"><strong>7</strong><br>Flat: 7.00</td>
                                                        <td class="text-sm font-weight-normal"><strong>0.5</strong><br>Flat: 0.50</td>
                                                        <td class="text-sm font-weight-normal"><strong>0.5</strong><br>Flat: 0.50</td>
                                                        <td class="text-sm font-weight-normal"><strong>20</strong><br>Flat: 20.00</td>
                                                        <td class="text-sm font-weight-normal"><strong>50</strong><br>Ratio: 0.00% - 0.00%</td>
                                                        <td class="text-sm font-weight-normal"><strong>10% 180 days</strong> <br>Flat: 0.00</td>
                                                        <td class="text-sm font-weight-normal">17 March, 2025</td>
                                                        <td class="text-sm font-weight-normal">
                                                            01 April, 2025
                                                            <div class="d-flex align-items-center mt-1">
                                                                <a href="#" class="text-gray-500 hover:text-blue-500 px-1">
                                                                    <i class="ti ti-pencil text-lg"></i>
                                                                </a>
                                                                <a href="#" class="text-gray-500 hover:text-green-500 px-1">
                                                                    <i class="ti ti-rotate-2 text-lg"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Manage Card(s) & Fees For Partner</h5>
                                        <div class="row align-items-center ms-2 me-2">
                                            <div class="col-lg-12 col-sm-8 mb-3">
                                                <div class="nav-wrapper position-relative end-0">
                                                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1 active d-flex justify-content-between align-items-center"
                                                                data-bs-toggle="tab" role="tab" aria-selected="true">
                                                                <span class="text-center flex-grow-1">Visa</span>
                                                                <i class="ti ti-adjustments-horizontal text-lg rotate-icon me-2"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1 active d-flex justify-content-between align-items-center"
                                                                data-bs-toggle="tab" role="tab" aria-selected="true">
                                                                <span class="text-center flex-grow-1">Mastercard</span>
                                                                <i class="ti ti-adjustments-horizontal text-lg rotate-icon me-2"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1 active d-flex justify-content-between align-items-center"
                                                                data-bs-toggle="tab" role="tab" aria-selected="true">
                                                                <span class="text-center flex-grow-1">AMEX</span>
                                                                <i class="ti ti-plus text-lg rotate-icon me-2"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1 active d-flex justify-content-between align-items-center"
                                                                data-bs-toggle="tab" role="tab" aria-selected="true">
                                                                <span class="text-center flex-grow-1">Discover</span>
                                                                <i class="ti ti-plus text-lg rotate-icon me-2"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link mb-0 px-0 py-1 active d-flex justify-content-between align-items-center"
                                                                data-bs-toggle="tab" role="tab" aria-selected="true">
                                                                <span class="text-center flex-grow-1">JCB</span>
                                                                <i class="ti ti-plus text-lg rotate-icon me-2"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card mb-3">
                                                <div class="row align-items-center ms-5 me-2 mt-3">
                                                    <div class="col-lg-11 col-sm-8">
                                                        <div class="nav-wrapper position-relative end-0">
                                                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" role="tab"
                                                                        aria-selected="true">
                                                                        MDR
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" role="tab"
                                                                        aria-selected="false">
                                                                        Processing Fees
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" role="tab"
                                                                        aria-selected="false">
                                                                        Decline Fees
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" role="tab"
                                                                        aria-selected="false">
                                                                        Chargeback
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" role="tab"
                                                                        aria-selected="false">
                                                                        Refund
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" role="tab"
                                                                        aria-selected="false">
                                                                        Rolling Reserve
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="multisteps-form__content ">
                                                        <!-- Current MDR -->
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label>Current MDR :</label> <strong> 7% </strong>
                                                            </div>
                                                        </div>

                                                        <!-- Calculation Type -->
                                                        <div class="row">
                                                            <div class="col-12">

                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <label>Calculation type *</label>
                                                                    <!-- Main Radio Buttons -->
                                                                    <div class="form-check form-check-inline ms-3">
                                                                        <input class="form-check-input c_type_volume c_type_mdr_3" type="radio"
                                                                            name="card_fees[3][mdr][type]" id="mdr_fee_type_3_v" value="volume"
                                                                            data-fee-type="mdr" data-card-id="3" checked />
                                                                        <label class="form-check-label" for="mdr_fee_type_3_v">Volume</label>
                                                                    </div>

                                                                    <!-- Separate "Fiat" Option -->
                                                                    <div class="form-check form-check-inline ms-auto me-8">
                                                                        <input class="form-check-input c_type_flat c_type_mdr_3" type="radio"
                                                                            name="card_fees[3][mdr][type]" id="mdr_fee_type_3_f" value="flat"
                                                                            data-fee-type="mdr" data-card-id="3" />
                                                                        <label class="form-check-label" for="mdr_fee_type_3_f">Fiat</label>

                                                                    </div>
                                                                    <div class="row mt-3">
                                                                        <div class="col-11 col-sm-6">
                                                                            <div class="input-group">
                                                                                <input id="percentage-input" class="form-control" type="number" />
                                                                                <span class="input-group-text">%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="input-group currency-padding total" style="margin-left: 8px;">

                                                                </div>

                                                                <div class="row mt-3">
                                                                    <div class="col-11 col-sm-3">
                                                                        <label>Transaction Volume >=</label>
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <label>Transaction Volume < </label>
                                                                                <div class="input-group">
                                                                                    <input id="percentage-input" class="form-control"
                                                                                        type="number" />
                                                                                    <span class="input-group-text">USD</span>
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <label>Fees</label>
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-3">
                                                                    <div class="col-11 col-sm-3">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">

                                                                        <a href="#" class="text-gray-500 hover:text-red-500 px-1">
                                                                            <i class="ti ti-trash text-lg"></i>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                                <div class="row mt-3">
                                                                    <div class="col-11 col-sm-3">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">

                                                                        <a href="#" class="text-gray-500 hover:text-red-500 px-1">
                                                                            <i class="ti ti-trash text-lg"></i>
                                                                        </a>

                                                                    </div>

                                                                </div>
                                                                <div class="row mt-3 mb-3">
                                                                    <div class="col-11 col-sm-3">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">USD</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number" />
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-3 mt-3 mt-sm-0">

                                                                        <a href="#" class="text-gray-500 hover:text-red-500 px-1">
                                                                            <i class="ti ti-trash text-lg"></i>
                                                                        </a>

                                                                    </div>

                                                                </div>

                                                                <div class="button-container">
                                                                    <button class="btn bg-gradient-primary btn-sm mb-3">
                                                                        <span>Add New</span>
                                                                    </button>
                                                                    <div class="action-buttons">
                                                                        <button class="btn bg-gradient-light btn-sm mr-2">
                                                                            <span>Close</span>
                                                                        </button>
                                                                        <button class="btn bg-gradient-dark btn-sm">
                                                                            <span>Save</span>
                                                                        </button>
                                                                        <div class="spacer"></div> <!-- Invisible spacer -->
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="horizontal-buttons">
                                                                <button class="btn bg-gradient-light btn-sm mr-2">
                                                                    <i class="ti ti-premium-rights text-lg me-2"></i> Current Fee
                                                                </button>
                                                                <button class="btn bg-gradient-light btn-sm mr-2">
                                                                    <i class="ti ti-history text-lg me-2"></i> History
                                                                </button>
                                                                <button class="btn bg-gradient-light btn-sm">
                                                                    <i class="ti ti-trash text-lg me-2"></i>Remove
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card mb-3 ms-3 me-3">

                                        <h5 class="font-weight-bolder">Current Applicable Fees</h5>

                                        <div class="card mb-3 ms-3 me-3">
                                            <h5 class="font-weight-bolder">Current Applicable Fees</h5>

                                            <div class="table-responsive mb-3">
                                                <table class="table table-flush" id="datatable-basic-2">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">
                                                                MDR (%)</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">
                                                                Processing Fees</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">
                                                                Monthly Minimum Service Fee</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-end">
                                                                Current Setup Fee</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                Assigned</th>
                                                            <th
                                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                                                Next Update</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-sm font-weight-normal text-end">
                                                                <strong>6.5</strong><br>
                                                                Split: Yes<br>
                                                                End Point: 7<br>
                                                                ISO Split: 50<br>
                                                                House Split: 50
                                                            </td>
                                                            <td class="text-sm font-weight-normal text-end">
                                                                <strong>0.5</strong><br>
                                                                Split: No
                                                            </td>
                                                            <td class="text-sm font-weight-normal text-end">
                                                                <strong>0</strong><br>
                                                                Split: No
                                                            </td>
                                                            <td class="text-sm font-weight-normal text-end">
                                                                <strong>0</strong><br>
                                                                Split: No
                                                            </td>
                                                            <td class="text-sm font-weight-normal text-center">31 October, 2024</td>
                                                            <td class="text-sm font-weight-normal text-center">
                                                                01 April, 2025

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card mb-3 ms-3 me-3">
                                            <h5 class="font-weight-bolder">ISO Commission Settings</h5>

                                            <div class="multisteps-form__content ms-3 me-3">
                                                <!-- Current MDR -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label>Current MDR :</label> <strong> 6.5% </strong>
                                                    </div>
                                                </div>

                                                <!-- Calculation Type -->
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <!-- Calculation Type -->
                                                            <div class="row mt-3">
                                                                <div class="col-12">
                                                                    <label>Calculation Type: </label>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="calculationType"
                                                                            id="calculationTypeVolume" value="volume" />
                                                                        <label class="form-check-label" for="calculationTypeVolume">Volume</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="calculationType"
                                                                            id="calculationTypeFlat" value="flat" />
                                                                        <label class="form-check-label" for="calculationTypeFlat">Flat</label>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="input-group currency-padding total" style="margin-left: 8px;">

                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-11 col-sm-3">
                                                                <label>Transaction Volume >=</label>
                                                                <div class="input-group">
                                                                    <input id="percentage-input" class="form-control" type="number"
                                                                        placeholder="Start Amount" />
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                <label>Transaction Volume < </label>
                                                                        <div class="input-group">
                                                                            <input id="percentage-input" class="form-control" type="number"
                                                                                placeholder="End Amount" />
                                                                            <span class="input-group-text">%</span>
                                                                        </div>
                                                            </div>
                                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                <label>Fees</label>
                                                                <div class="input-group">
                                                                    <input id="percentage-input" class="form-control" type="number"
                                                                        placeholder="Fees" />
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-3 mt-4">

                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="split" id="splitVolume"
                                                                        value="volume" />
                                                                    <label class="form-check-label" for="splitVolume">Split</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-11 col-sm-3">
                                                                <label>End Point *</label>
                                                                <div class="input-group">
                                                                    <input id="percentage-input" class="form-control" type="number"
                                                                        placeholder="Start Amount" />
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                <label>ISO Split *</label>
                                                                <div class="input-group">
                                                                    <input id="percentage-input" class="form-control" type="number"
                                                                        placeholder="End Amount" />
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                                <label>House Split *</label>
                                                                <div class="input-group">
                                                                    <input id="percentage-input" class="form-control" type="number"
                                                                        placeholder="Fees" />
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="button-container">
                                                            <button class="btn bg-gradient-primary btn-sm mb-3 mt-3">
                                                                <span>Add New</span>
                                                            </button>

                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                            </div>


                            <!--Crypto Settings-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="multisteps-form__content">
                                    <h5 class="font-weight-bolder">Crypto Settings</h5>
                                    <div class="card mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Title -->
                                            <h5 class="font-weight-bolder">Assigned Gateways</h5>

                                            <!-- Button aligned to the right -->
                                            <button class="btn bg-gradient-primary btn-sm mb-0 me-4">
                                                <span>Add</span>
                                            </button>
                                        </div>
                                        <div class="table-responsive mb-3">
                                            <h6 class="font-weight-bolder text-center">Threshold</h6>
                                            <table class="table table-flush" id="datatable-basic-crypto">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gateway</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tran. %</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duration
                                                            (day)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve
                                                            Amount.</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline
                                                            Amount.</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amt Duration
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CB Trn#</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trn#
                                                            Duration</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline Trn#
                                                            (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund Trn#
                                                            (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CB Trn# (%)
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">(%) Duration
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Min Trn#
                                                            Currency</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Currency
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-sm font-weight-normal">Gateway A</td>
                                                        <td class="text-sm font-weight-normal">5%</td>
                                                        <td class="text-sm font-weight-normal">$10,000</td>
                                                        <td class="text-sm font-weight-normal">30</td>
                                                        <td class="text-sm font-weight-normal">$8,000</td>
                                                        <td class="text-sm font-weight-normal">$2,000</td>
                                                        <td class="text-sm font-weight-normal">15</td>
                                                        <td class="text-sm font-weight-normal">120</td>
                                                        <td class="text-sm font-weight-normal">30</td>
                                                        <td class="text-sm font-weight-normal">10</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">10</td>
                                                        <td class="text-sm font-weight-normal">25%</td>
                                                        <td class="text-sm font-weight-normal">8%</td>
                                                        <td class="text-sm font-weight-normal">4%</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">USD</td>
                                                        <td class="text-sm font-weight-normal d-flex justify-content-center align-items-center">
                                                            <div class="d-flex align-items-center">

                                                                <!-- Edit Button -->
                                                                <a href="#" class="text-gray-500 hover:text-blue-500 px-1">
                                                                    <i class="ti ti-pencil text-lg"></i>
                                                                </a>

                                                                <!-- Delete Button -->
                                                                <a href="#" class="text-gray-500 hover:text-red-500 px-1">
                                                                    <i class="ti ti-trash text-lg"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Add more rows as needed -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Assigned Gateways </h5>
                                        <div class="table-responsive mb-3">
                                            <table class="table table-flush" id="datatable-search">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Gateway</th>
                                                        <th>Category</th>
                                                        <th>Type</th>
                                                        <th>Currency</th>
                                                        <th>Descriptor</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-xs font-weight-bold ms-2 mb-0">WKG-USD-F2D</p>
                                                            </div>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>InverteD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>FRICTIONLESS</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>USD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>,</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold d-flex justify-content-center align-items-center">
                                                            <button class="btn bg-gradient-success btn-sm float-end mb-0">
                                                                <span>Added</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-xs font-weight-bold ms-2 mb-0">LPG6 3DS - USDtoBRA</p>
                                                            </div>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>Pocket V2</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>FRICTIONLESS</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>USD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>,</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold d-flex justify-content-center align-items-center">
                                                            <button class="btn bg-gradient-primary btn-sm mb-0">
                                                                <span>Add</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Apply Gateway Name </h5>

                                        <div class="table-responsive mb-3 ms-3 me-3">

                                            <table class="horizontal-input-table">
                                                <thead>
                                                    <tr>
                                                        <th>Amount</th>
                                                        <th>Duration (day)</th>
                                                        <th>Approve Amt.</th>
                                                        <th>Decline Amt.</th>
                                                        <th>Amt Duration</th>
                                                        <th>Approve Trn#</th>
                                                        <th>Decline Trn#</th>
                                                        <th>Refund Trn#</th>
                                                        <th>CB Trn#</th>
                                                        <th>Trn# Duration</th>
                                                        <th>Decline Trn# (%)</th>
                                                        <th>Refund Trn# (%)</th>
                                                        <th>CB Trn# (%)</th>
                                                        <th>(%) Duration</th>
                                                        <th>Min Trn#</th>
                                                        <th>Currency</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" placeholder="Amount"></td>
                                                        <td><input type="text" placeholder="(Days)"></td>
                                                        <td><input type="text" placeholder="App Amt"></td>
                                                        <td><input type="text" placeholder="Dec Amt"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="App Trn"></td>
                                                        <td><input type="text" placeholder="Dec Trn"></td>
                                                        <td><input type="text" placeholder="Ref Trn"></td>
                                                        <td><input type="text" placeholder="CB Trn"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="Dec (%)"></td>
                                                        <td><input type="text" placeholder="Ref (%)"></td>
                                                        <td><input type="text" placeholder="CB (%)"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="Trn #"></td>
                                                        <td><input type="text" placeholder="USD"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                            <button class="btn bg-gradient-primary btn-sm mb-3">
                                                <span>ASSIGN</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Bank to Bank Settings-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <div class="multisteps-form__content">
                                    <h5 class="font-weight-bolder">Bank to Bank Settings</h5>
                                    <div class="card mb-3">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Title -->
                                            <h5 class="font-weight-bolder">Assigned Gateways</h5>

                                            <!-- Button aligned to the right -->
                                            <button class="btn bg-gradient-primary btn-sm mb-0 me-4">
                                                <span>Add</span>
                                            </button>
                                        </div>
                                        <div class="table-responsive mb-3">
                                            <h6 class="font-weight-bolder text-center">Threshold</h6>
                                            <table class="table table-flush" id="datatable-basic-crypto">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gateway</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tran. %</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Duration
                                                            (day)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve
                                                            Amount.</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline
                                                            Amount.</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amt Duration
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Approve Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund Trn#
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CB Trn#</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trn#
                                                            Duration</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Decline Trn#
                                                            (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Refund Trn#
                                                            (%)</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CB Trn# (%)
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">(%) Duration
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Min Trn#
                                                            Currency</th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Currency
                                                        </th>
                                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-sm font-weight-normal">Gateway A</td>
                                                        <td class="text-sm font-weight-normal">5%</td>
                                                        <td class="text-sm font-weight-normal">$10,000</td>
                                                        <td class="text-sm font-weight-normal">30</td>
                                                        <td class="text-sm font-weight-normal">$8,000</td>
                                                        <td class="text-sm font-weight-normal">$2,000</td>
                                                        <td class="text-sm font-weight-normal">15</td>
                                                        <td class="text-sm font-weight-normal">120</td>
                                                        <td class="text-sm font-weight-normal">30</td>
                                                        <td class="text-sm font-weight-normal">10</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">10</td>
                                                        <td class="text-sm font-weight-normal">25%</td>
                                                        <td class="text-sm font-weight-normal">8%</td>
                                                        <td class="text-sm font-weight-normal">4%</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">5</td>
                                                        <td class="text-sm font-weight-normal">USD</td>
                                                        <td class="text-sm font-weight-normal d-flex justify-content-center align-items-center">
                                                            <div class="d-flex align-items-center">

                                                                <!-- Edit Button -->
                                                                <a href="#" class="text-gray-500 hover:text-blue-500 px-1">
                                                                    <i class="ti ti-pencil text-lg"></i>
                                                                </a>

                                                                <!-- Delete Button -->
                                                                <a href="#" class="text-gray-500 hover:text-red-500 px-1">
                                                                    <i class="ti ti-trash text-lg"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Add more rows as needed -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Assigned Gateways </h5>
                                        <div class="table-responsive mb-3">
                                            <table class="table table-flush" id="datatable-search">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Gateway</th>
                                                        <th>Category</th>
                                                        <th>Type</th>
                                                        <th>Currency</th>
                                                        <th>Descriptor</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-xs font-weight-bold ms-2 mb-0">WKG-USD-F2D</p>
                                                            </div>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>InverteD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>FRICTIONLESS</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>USD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>,</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold d-flex justify-content-center align-items-center">
                                                            <button class="btn bg-gradient-success btn-sm float-end mb-0">
                                                                <span>Added</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <p class="text-xs font-weight-bold ms-2 mb-0">LPG6 3DS - USDtoBRA</p>
                                                            </div>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>Pocket V2</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>FRICTIONLESS</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>USD</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold">
                                                            <span>,</span>
                                                        </td>
                                                        <td class="text-xs font-weight-bold d-flex justify-content-center align-items-center">
                                                            <button class="btn bg-gradient-primary btn-sm mb-0">
                                                                <span>Add</span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <h5 class="font-weight-bolder">Apply Gateway Name </h5>

                                        <div class="table-responsive mb-3 ms-3 me-3">

                                            <table class="horizontal-input-table">
                                                <thead>
                                                    <tr>
                                                        <th>Amount</th>
                                                        <th>Duration (day)</th>
                                                        <th>Approve Amt.</th>
                                                        <th>Decline Amt.</th>
                                                        <th>Amt Duration</th>
                                                        <th>Approve Trn#</th>
                                                        <th>Decline Trn#</th>
                                                        <th>Refund Trn#</th>
                                                        <th>CB Trn#</th>
                                                        <th>Trn# Duration</th>
                                                        <th>Decline Trn# (%)</th>
                                                        <th>Refund Trn# (%)</th>
                                                        <th>CB Trn# (%)</th>
                                                        <th>(%) Duration</th>
                                                        <th>Min Trn#</th>
                                                        <th>Currency</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input type="text" placeholder="Amount"></td>
                                                        <td><input type="text" placeholder="(Days)"></td>
                                                        <td><input type="text" placeholder="App Amt"></td>
                                                        <td><input type="text" placeholder="Dec Amt"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="App Trn"></td>
                                                        <td><input type="text" placeholder="Dec Trn"></td>
                                                        <td><input type="text" placeholder="Ref Trn"></td>
                                                        <td><input type="text" placeholder="CB Trn"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="Dec (%)"></td>
                                                        <td><input type="text" placeholder="Ref (%)"></td>
                                                        <td><input type="text" placeholder="CB (%)"></td>
                                                        <td><input type="text" placeholder="(days)"></td>
                                                        <td><input type="text" placeholder="Trn #"></td>
                                                        <td><input type="text" placeholder="USD"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div style="display: flex; justify-content: center;">
                                            <button class="btn bg-gradient-primary btn-sm mb-3">
                                                <span>ASSIGN</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Other Fees-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Applicable Currency</h5>
                                <div class="row align-items-center mb-3">
                                    <div class="col-lg-4 col-sm-8">
                                        <div class="nav-wrapper position-relative end-0">
                                            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 active  active " data-bs-toggle="tab" role="tab"
                                                        aria-selected="true">
                                                        USD
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" role="tab" aria-selected="false">
                                                        JPY
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card ">


                                    <div class="multisteps-form__content ms-3 me-3 mt-3 ">
                                        <h5 class="font-weight-bolder">Other Fees Settings</h5>
                                        <div class="row mt-3 ms-2 me-2">
                                            <!-- Header Row -->
                                            <div class="col-12">
                                                <div class="row fw-bold">
                                                    <div class="col-4">Fees Name</div>
                                                    <div class="col-2">Reseller Cost*</div>
                                                    <div class="col-2">ISO Split*</div>
                                                    <div class="col-2">House Split*</div>
                                                    <div class="col-2">Status</div>
                                                </div>
                                            </div>

                                            <!-- Fee 1: Setup Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Setup Fee" readonly />
                                                        <small class="text-muted">One Time</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="500" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="" placeholder="-" readonly />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="" placeholder="-" readonly />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="setupFeeToggleActive" checked>
                                                            <label class="form-check-label ms-2" for="setupFeeToggleActive">
                                                                <span id="setupFeeStatus" class="text-success">Active</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 2: Gateway Setup Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Gateway Setup Fee" readonly />
                                                        <small class="text-muted">One Time</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="0" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="100" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="gatewaySetupFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="gatewaySetupFeeToggleInactive">
                                                                <span id="gatewaySetupFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 3: Underwriting Success Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Underwriting Success Fee" readonly />
                                                        <small class="text-muted">One Time</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="0" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="100" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="underwritingSuccessFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="underwritingSuccessFeeToggleInactive">
                                                                <span id="underwritingSuccessFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 4: Bank Application Fee charged to merchant on first drop -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control"
                                                            value="Bank Application Fee charged to merchant on first drop" readonly />
                                                        <small class="text-muted">One Time</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="0" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="100" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="bankApplicationFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="bankApplicationFeeToggleInactive">
                                                                <span id="bankApplicationFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 5: Gateway Monthly Access Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Gateway Monthly Access Fee" readonly />
                                                        <small class="text-muted">Monthly</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="20" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="0" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="100" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="gatewayMonthlyAccessFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="gatewayMonthlyAccessFeeToggleInactive">
                                                                <span id="gatewayMonthlyAccessFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 6: PCI Monthly Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="PCI Monthly Fee" readonly />
                                                        <small class="text-muted">Monthly</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="15" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="0" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="100" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="pciMonthlyFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="pciMonthlyFeeToggleInactive">
                                                                <span id="pciMonthlyFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 7: Monthly Statement Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Monthly Statement Fee" readonly />
                                                        <small class="text-muted">Monthly</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="25" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="monthlyStatementFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="monthlyStatementFeeToggleInactive">
                                                                <span id="monthlyStatementFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 8: Monthly Minimum Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Monthly Minimum Fee" readonly />
                                                        <small class="text-muted">Monthly</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="monthlyMinimumFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="monthlyMinimumFeeToggleInactive">
                                                                <span id="monthlyMinimumFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 9: Monthly Minimum Service Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Monthly Minimum Service Fee" readonly />
                                                        <small class="text-muted">Monthly</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="199" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="" placeholder="-" readonly />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="" placeholder="-" readonly />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="monthlyMinimumServiceFeeToggleActive" checked>
                                                            <label class="form-check-label ms-2" for="monthlyMinimumServiceFeeToggleActive">
                                                                <span id="monthlyMinimumServiceFeeStatus" class="text-success">Active</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 10: Semi-Annual Fee (Billed April & October) -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Semi-Annual Fee (Billed April & October)"
                                                            readonly />
                                                        <small class="text-muted">Semi-Annual</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="99" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="0" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="100" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="semiAnnualFeeToggleInactive">
                                                            <label class="form-check-label ms-2" for="semiAnnualFeeToggleInactive">
                                                                <span id="semiAnnualFeeStatus" class="text-danger">Inactive</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fee 11: Early Termination Fee -->
                                            <div class="col-12 mt-3">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" value="Early Termination Fee" readonly />
                                                        <small class="text-muted">Early Termination</small>
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="199" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <input type="number" class="form-control" value="50" />
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="earlyTerminationFeeToggleActive"
                                                                checked>
                                                            <label class="form-check-label ms-2" for="earlyTerminationFeeToggleActive">
                                                                <span id="earlyTerminationFeeStatus" class="text-success">Active</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                            </div>

                            <!--Settings-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Payment Information</h5>
                                <div class="multisteps-form__content mt-3">
                                    <!-- Payout Condition -->
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Payout Condition *</label>
                                            <select class="form-select app-filed form-select-sm multisteps-form__input" name="payout_condition"
                                                required="" data-dirrty-initial-value="">
                                                <option value="" selected="">Select Payout Condition</option>
                                                <option value="7DPO">7DPO</option>
                                                <option value="2nd_4th_wednesday">2nd &amp; 4th Wednesday</option>
                                                <option value="1weekArrear">1 Week in Arrears</option>
                                                <option value="every_wednesday">2 Weeks in Arrears</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label>Payout Minimum *</label>
                                            <input class="multisteps-form__input form-control" type="number"
                                                placeholder="Enter minimum payout amount" />
                                        </div>
                                    </div>
                                    <!-- Fee Calculation Condition -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Fee Calculation Condition *</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="feeCalculationCondition" id="feeMonthly"
                                                    value="monthly" required />
                                                <label class="form-check-label" for="feeMonthly">Monthly</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="feeCalculationCondition" id="feeOther"
                                                    value="other" required />
                                                <label class="form-check-label" for="feeOther">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Virtual Terminal -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Virtual Terminal</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="virtualTerminal" id="virtualTerminalOn"
                                                    value="on" />
                                                <label class="form-check-label" for="virtualTerminalOn">ON</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="virtualTerminal" id="virtualTerminalOff"
                                                    value="off" />
                                                <label class="form-check-label" for="virtualTerminalOff">OFF</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ignore Velocity Decline -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Ignore Velocity Decline</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ignoreVelocityDecline" id="ignoreVelocityYes"
                                                    value="yes" />
                                                <label class="form-check-label" for="ignoreVelocityYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ignoreVelocityDecline" id="ignoreVelocityNo"
                                                    value="no" />
                                                <label class="form-check-label" for="ignoreVelocityNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ignore aVelocity Decline -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Ignore aVelocity Decline</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ignoreAVelocityDecline" id="ignoreAVelocityYes"
                                                    value="yes" />
                                                <label class="form-check-label" for="ignoreAVelocityYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="ignoreAVelocityDecline" id="ignoreAVelocityNo"
                                                    value="no" />
                                                <label class="form-check-label" for="ignoreAVelocityNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Gentius ID Verification -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label class="d-block mb-2">Gentius ID Verification</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gentiusIDVerification" id="gentiusNo"
                                                    value="no" />
                                                <label class="form-check-label" for="gentiusNo">NO</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gentiusIDVerification" id="gentiusYesAll"
                                                    value="yesAll" />
                                                <label class="form-check-label" for="gentiusYesAll">YES for all transactions</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gentiusIDVerification" id="gentiusYesCB"
                                                    value="yesCB" />
                                                <label class="form-check-label" for="gentiusYesCB">YES when the CB is over 0.375%</label>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6">
                                                    <input class="multisteps-form__input form-control" type="text"
                                                        placeholder="Enter minimum payout amount" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- AcuityTec System Override -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>AcuityTec System Override</label>
                                            <select class="multisteps-form__input form-control">
                                                <option value="" disabled selected>Select Option</option>
                                                <option value="followGlobal">Follow Global Setting (Current Settings: Do not check with AcuityTec)
                                                </option>
                                                <option value="enabled">Enabled (Always check with AcuityTec)</option>
                                                <option value="disabled">Disabled (Never check with AcuityTec)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Send Email To Customer/Partner -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label>Send Email To Customer/Partner</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sendSalesEmail" />
                                                <label class="form-check-label" for="sendSalesEmail">Send sales/purchase confirmation email to
                                                    customer</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sendRefundEmail" />
                                                <label class="form-check-label" for="sendRefundEmail">Send refund confirmation email to
                                                    customer</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sendSatisfactionEmail" />
                                                <label class="form-check-label" for="sendSatisfactionEmail">Send satisfaction guaranteed email to
                                                    customer</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sendTransactionEmail" />
                                                <label class="form-check-label" for="sendTransactionEmail">Send transaction successfully processed
                                                    email to Partner</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="row">
                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Others-->
                            <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                <h5 class="font-weight-bolder">Payment Information</h5>
                                <h5 class="font-weight-bolder">Payment Configuration</h5>
                                <div class="multisteps-form__content mt-3">
                                    <!-- Allowed Bank Hosted Payment -->
                                    <div class="row">
                                        <div class="col-12">
                                            <label>Allowed Bank Hosted Payment *</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="allowedBankHostedPayment" id="allowedBankYes"
                                                    value="yes" required />
                                                <label class="form-check-label" for="allowedBankYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="allowedBankHostedPayment" id="allowedBankNo"
                                                    value="no" required />
                                                <label class="form-check-label" for="allowedBankNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Allowed Hosted Payment -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label>Allowed Hosted Payment *</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="allowedHostedPayment" id="allowedHostedYes"
                                                    value="yes" required />
                                                <label class="form-check-label" for="allowedHostedYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="allowedHostedPayment" id="allowedHostedNo"
                                                    value="no" required />
                                                <label class="form-check-label" for="allowedHostedNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Instant Payment Notification (IPN) URL -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Instant Payment Notification ("IPN") URL</label>
                                            <small class="form-text text-muted d-block mb-2">PaymentTechnologies sends IPN message to the URL that
                                                you specify.</small>
                                            <input class="multisteps-form__input form-control" type="url" placeholder="Enter IPN URL" />
                                        </div>
                                        <div class="col-6">
                                            <label>Success URL</label>
                                            <small class="form-text text-muted d-block mb-2">Sends the customer back to this URL if the transaction
                                                is successful.</small>
                                            <input class="multisteps-form__input form-control" type="url" placeholder="Enter Success URL" />
                                        </div>
                                    </div>

                                    <!-- Failed/Cancelled URL -->
                                    <div class="row mt-3">
                                        <div class="col- 6">
                                            <label>Failed/Cancelled URL</label>
                                            <small class="form-text text-muted d-block mb-2">Sends the customer back to this URL if the transaction
                                                is declined.</small>
                                            <input class="multisteps-form__input form-control" type="url"
                                                placeholder="Enter Failed/Cancelled URL" />
                                        </div>
                                    </div>

                                    <!-- CBD and Related Options -->
                                    <div class="row mt-3">
                                        <!-- First Column -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cbdNoThc" />
                                                <label class="form-check-label" for="cbdNoThc">CBD (Derived from Industrial Hemp with No THC)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cbdEdiblesNoThc" />
                                                <label class="form-check-label" for="cbdEdiblesNoThc">CBD Infused Edibles (0.0% THC)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cbdTopicalsNoThc" />
                                                <label class="form-check-label" for="cbdTopicalsNoThc">CBD for Topical Use (0.0% THC)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cbdLessThanPointThreeThc" />
                                                <label class="form-check-label" for="cbdLessThanPointThreeThc">CBD (with equal to or less than 0.3% THC)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cbdEdiblesLessThanPointThreeThc" />
                                                <label class="form-check-label" for="cbdEdiblesLessThanPointThreeThc">CBD Infused Edibles (less than 0.3% THC)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cbdTopicalsLessThanPointThreeThc" />
                                                <label class="form-check-label" for="cbdTopicalsLessThanPointThreeThc">CBD for Topical Use (less than 0.3% THC)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cannabinol" />
                                                <label class="form-check-label" for="cannabinol">Cannabinol</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cannabigerol" />
                                                <label class="form-check-label" for="cannabigerol">Cannabigerol</label>
                                            </div>
                                        </div>

                                        <!-- Second Column -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cannabichromene" />
                                                <label class="form-check-label" for="cannabichromene">Cannabichromene</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cannabidivarin" />
                                                <label class="form-check-label" for="cannabidivarin">Cannabidivarin</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cannabidiolicAcid" />
                                                <label class="form-check-label" for="cannabidiolicAcid">Cannabidiolic Acid</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="naturallyPresentTerpenes" />
                                                <label class="form-check-label" for="naturallyPresentTerpenes">Naturally Present Terpenes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="peptides" />
                                                <label class="form-check-label" for="peptides">Peptides</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="kratom" />
                                                <label class="form-check-label" for="kratom">Kratom</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="seeds" />
                                                <label class="form-check-label" for="seeds">Seeds</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="medicalMarijuana" />
                                                <label class="form-check-label" for="medicalMarijuana">Medical Marijuana</label>
                                            </div>
                                        </div>

                                        <!-- Third Column -->
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="edibles" />
                                                <label class="form-check-label" for="edibles">Edibles</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="topicals" />
                                                <label class="form-check-label" for="topicals">Topicals</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="recreationalMarijuana" />
                                                <label class="form-check-label" for="recreationalMarijuana">Recreational Marijuana</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="vapes" />
                                                <label class="form-check-label" for="vapes">Vapes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="nutraceutical" />
                                                <label class="form-check-label" for="nutraceutical">Nutraceutical</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="cryptoCurrency" />
                                                <label class="form-check-label" for="cryptoCurrency">Crypto Currency</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pcTech" />
                                                <label class="form-check-label" for="pcTech">PC TECH</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="pdl" />
                                                <label class="form-check-label" for="pdl">PDL</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Check BIN for Transaction -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Check BIN for Transaction</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="checkBin" id="checkBinYes" value="yes" />
                                                <label class="form-check-label" for="checkBinYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="checkBin" id="checkBinNo" value="no" />
                                                <label class="form-check-label" for="checkBinNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Check IP for Transaction -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Check IP for Transaction</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="checkIp" id="checkIpYes" value="yes" />
                                                <label class="form-check-label" for="checkIpYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="checkIp" id="checkIpNo" value="no" />
                                                <label class="form-check-label" for="checkIpNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Allowed IPs -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Allowed IPs</label>
                                            <small class="form-text text-muted d-block mb-2">Add New IPs</small>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="Enter IP Address" />
                                        </div>
                                    </div>

                                    <!-- Validate Domain for Transaction -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Validate Domain for Transaction</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="validateDomain" id="validateDomainYes"
                                                    value="yes" />
                                                <label class="form-check-label" for="validateDomainYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="validateDomain" id="validateDomainNo"
                                                    value="no" />
                                                <label class="form-check-label" for="validateDomainNo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Allowed BIN Countries -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Allowed BIN Countries *</label>
                                            <small class="form-text text-muted d-block mb-2">Select countries allowed for BIN transactions.</small>
                                            <select class="multisteps-form__select form-control" required>
                                                <option value="" disabled selected>Select State</option>
                                                <option value="AL">Alabama (AL)</option>
                                                <option value="AK">Alaska (AK)</option>
                                                <option value="AZ">Arizona (AZ)</option>
                                                <option value="AR">Arkansas (AR)</option>
                                                <option value="CA">California (CA)</option>
                                                <option value="CO">Colorado (CO)</option>
                                                <option value="CT">Connecticut (CT)</option>
                                                <option value="DE">Delaware (DE)</option>
                                                <option value="FL">Florida (FL)</option>
                                                <option value="GA">Georgia (GA)</option>
                                                <option value="HI">Hawaii (HI)</option>
                                                <option value="ID">Idaho (ID)</option>
                                                <option value="IL">Illinois (IL)</option>
                                                <option value="IN">Indiana (IN)</option>
                                                <option value="IA">Iowa (IA)</option>
                                                <option value="KS">Kansas (KS)</option>
                                                <option value="KY">Kentucky (KY)</option>
                                                <option value="LA">Louisiana (LA)</option>
                                                <option value="ME">Maine (ME)</option>
                                                <option value="MD">Maryland (MD)</option>
                                                <option value="MA">Massachusetts (MA)</option>
                                                <option value="MI">Michigan (MI)</option>
                                                <option value="MN">Minnesota (MN)</option>
                                                <option value="MS">Mississippi (MS)</option>
                                                <option value="MO">Missouri (MO)</option>
                                                <option value="MT">Montana (MT)</option>
                                                <option value="NE">Nebraska (NE)</option>
                                                <option value="NV">Nevada (NV)</option>
                                                <option value="NH">New Hampshire (NH)</option>
                                                <option value="NJ">New Jersey (NJ)</option>
                                                <option value="NM">New Mexico (NM)</option>
                                                <option value="NY">New York (NY)</option>
                                                <option value="NC">North Carolina (NC)</option>
                                                <option value="ND">North Dakota (ND)</option>
                                                <option value="OH">Ohio (OH)</option>
                                                <option value="OK">Oklahoma (OK)</option>
                                                <option value="OR">Oregon (OR)</option>
                                                <option value="PA">Pennsylvania (PA)</option>
                                                <option value="RI">Rhode Island (RI)</option>
                                                <option value="SC">South Carolina (SC)</option>
                                                <option value="SD">South Dakota (SD)</option>
                                                <option value="TN">Tennessee (TN)</option>
                                                <option value="TX">Texas (TX)</option>
                                                <option value="UT">Utah (UT)</option>
                                                <option value="VT">Vermont (VT)</option>
                                                <option value="VA">Virginia (VA)</option>
                                                <option value="WA">Washington (WA)</option>
                                                <option value="WV">West Virginia (WV)</option>
                                                <option value="WI">Wisconsin (WI)</option>
                                                <option value="WY">Wyoming (WY)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Disallowed BIN Countries -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Disallowed BIN Countries *</label>
                                            <small class="form-text text-muted d-block mb-2">Select countries disallowed for BIN transactions.</small>
                                            <select class="multisteps-form__select form-control" required>
                                                <option value="" disabled selected>Select State</option>
                                                <option value="AL">Alabama (AL)</option>
                                                <option value="AK">Alaska (AK)</option>
                                                <option value="AZ">Arizona (AZ)</option>
                                                <option value="AR">Arkansas (AR)</option>
                                                <option value="CA">California (CA)</option>
                                                <option value="CO">Colorado (CO)</option>
                                                <option value="CT">Connecticut (CT)</option>
                                                <option value="DE">Delaware (DE)</option>
                                                <option value="FL">Florida (FL)</option>
                                                <option value="GA">Georgia (GA)</option>
                                                <option value="HI">Hawaii (HI)</option>
                                                <option value="ID">Idaho (ID)</option>
                                                <option value="IL">Illinois (IL)</option>
                                                <option value="IN">Indiana (IN)</option>
                                                <option value="IA">Iowa (IA)</option>
                                                <option value="KS">Kansas (KS)</option>
                                                <option value="KY">Kentucky (KY)</option>
                                                <option value="LA">Louisiana (LA)</option>
                                                <option value="ME">Maine (ME)</option>
                                                <option value="MD">Maryland (MD)</option>
                                                <option value="MA">Massachusetts (MA)</option>
                                                <option value="MI">Michigan (MI)</option>
                                                <option value="MN">Minnesota (MN)</option>
                                                <option value="MS">Mississippi (MS)</option>
                                                <option value="MO">Missouri (MO)</option>
                                                <option value="MT">Montana (MT)</option>
                                                <option value="NE">Nebraska (NE)</option>
                                                <option value="NV">Nevada (NV)</option>
                                                <option value="NH">New Hampshire (NH)</option>
                                                <option value="NJ">New Jersey (NJ)</option>
                                                <option value="NM">New Mexico (NM)</option>
                                                <option value="NY">New York (NY)</option>
                                                <option value="NC">North Carolina (NC)</option>
                                                <option value="ND">North Dakota (ND)</option>
                                                <option value="OH">Ohio (OH)</option>
                                                <option value="OK">Oklahoma (OK)</option>
                                                <option value="OR">Oregon (OR)</option>
                                                <option value="PA">Pennsylvania (PA)</option>
                                                <option value="RI">Rhode Island (RI)</option>
                                                <option value="SC">South Carolina (SC)</option>
                                                <option value="SD">South Dakota (SD)</option>
                                                <option value="TN">Tennessee (TN)</option>
                                                <option value="TX">Texas (TX)</option>
                                                <option value="UT">Utah (UT)</option>
                                                <option value="VT">Vermont (VT)</option>
                                                <option value="VA">Virginia (VA)</option>
                                                <option value="WA">Washington (WA)</option>
                                                <option value="WV">West Virginia (WV)</option>
                                                <option value="WI">Wisconsin (WI)</option>
                                                <option value="WY">Wyoming (WY)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Allowed IPs -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Allowed IPs *</label>
                                            <small class="form-text text-muted d-block mb-2">Enter IP addresses allowed for transactions.</small>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="Add New IPs (comma-separated)" />
                                        </div>
                                    </div>

                                    <!-- Validate Domain -->
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <label>Validate Domain *</label>
                                            <small class="form-text text-muted d-block mb-2">Enter domains allowed for transactions.</small>
                                            <input class="multisteps-form__input form-control" type="text" placeholder="Add New Domains (comma-separated)" />
                                        </div>
                                    </div>

                                    <!-- Do Not Cascade Response Keywords -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label><input type="checkbox" id="doNotCascadeKeywords" checked> Do Not Cascade Response Keywords</label>
                                            <div class="mt-2">
                                                <label>Negative Keywords</label>
                                                <input type="text" class="form-control" id="negativeKeywords" placeholder="Enter Negative Keywords" value="qwe" />
                                            </div>
                                            <div class="mt-2">
                                                <label>Select Gateway</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gateway" id="WKG-USD-F2D" value="WKG-USD-F2D" />
                                                    <label class="form-check-label" for="WKG-USD-F2D">WKG-USD-F2D</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gateway" id="LPG6-3DS-USDtoBRA" value="LPG6 3DS - USDtoBRA" />
                                                    <label class="form-check-label" for="LPG6-3DS-USDtoBRA">LPG6 3DS - USDtoBRA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gateway" id="Percentage-Japan-JPY" value="Percentage-Japan-JPY" />
                                                    <label class="form-check-label" for="Percentage-Japan-JPY">Percentage-Japan-JPY</label>
                                                </div>
                                                <button type="button" class="btn btn-sm btn-success ml-3" id="addKeywordButton">Add</button>
                                            </div>
                                            <div class="mt-2">
                                                <label>Added Keywords:</label>
                                                <div id="addedKeywordsContainer">
                                                    <span class="badge badge-light mr-2">qwe - WKG-USD-F2D</span>
                                                    <button type="button" class="btn btn-sm btn-danger" id="removeKeywordButton">x</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Failed Response Messages to Blacklist -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <label><input type="checkbox" id="failedResponseBlacklist" checked> Failed Response Messages to Blacklist</label>
                                            <div class="mt-2">
                                                <label>Negative Keywords</label>
                                                <input type="text" class="form-control" id="blacklistNegativeKeywords" placeholder="Enter Negative Keywords" value="qwe" />
                                            </div>
                                            <div class="mt-2">
                                                <label>Select Gateway</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="blacklistGateway" id="blacklistWKG-USD-F2D" value="WKG-USD-F2D" />
                                                    <label class="form-check-label" for="blacklistWKG-USD-F2D">WKG-USD-F2D</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="blacklistGateway" id="blacklistLPG6-3DS-USDtoBRA" value="LPG6 3DS - USDtoBRA" />
                                                    <label class="form-check-label" for="blacklistLPG6-3DS-USDtoBRA">LPG6 3DS - USDtoBRA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="blacklistGateway" id="blacklistPercentage-Japan-JPY" value="Percentage-Japan-JPY" />
                                                    <label class="form-check-label" for="blacklistPercentage-Japan-JPY">Percentage-Japan-JPY</label>
                                                </div>
                                                <button type="button" class="btn btn-sm btn-success ml-3" id="addBlacklistKeywordButton">Add</button>
                                            </div>
                                            <div class="mt-2">
                                                <label>Added Keywords:</label>
                                                <div id="blacklistAddedKeywordsContainer">
                                                    <span class="badge badge-light mr-2">qwe - WKG-USD-F2D</span>
                                                    <button type="button" class="btn btn-sm btn-danger" id="removeBlacklistKeywordButton">x</button>
                                                    <span class="badge badge-light mr-2">qwe - LPG6 3DS - USDtoBRA</span>
                                                    <button type="button" class="btn btn-sm btn-danger" id="removeBlacklistKeywordButton">x</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="button-row d-flex mt-4">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">Save</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
</div>
@endsection

@push('js')
<script src="../../../assets/js/plugins/multistep-form.js"></script>

<script src="../../assets/js/plugins/datatables.js"></script>


<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: false,
        fixedHeight: true
    });
    const dataTableBasic2 = new simpleDatatables.DataTable("#datatable-basic-2", {
        searchable: false,
        fixedHeight: true
    });
    const dataTableBasicCrypto = new simpleDatatables.DataTable("#datatable-basic-crypto", {
        searchable: false,
        fixedHeight: true
    });

    const dataTableCrypto2 = new simpleDatatables.DataTable("#datatable-search-crypto-2", {
        searchable: true,
        fixedHeight: true
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

    function toggleForm(selectedSection) {
        // Hide all sections
        document.getElementById('bankSection').style.display = 'none';
        document.getElementById('cryptoSection').style.display = 'none';
        document.getElementById('echeckSection').style.display = 'none';

        // Show the selected section
        if (selectedSection === 'bank') {
            document.getElementById('bankSection').style.display = 'block';
        } else if (selectedSection === 'crypto') {
            document.getElementById('cryptoSection').style.display = 'block';
        } else if (selectedSection === 'echeck') {
            document.getElementById('echeckSection').style.display = 'block';
        }
    }

    // Function to toggle visibility of Intermediate Bank fields
    function toggleIntermediateBank() {
        const checkbox = document.getElementById('hsbcDesignatedCheckbox');
        const hsbcDesignatedSection = document.getElementById('hsbcDesignatedSection');

        if (checkbox.checked) {
            hsbcDesignatedSection.style.display = 'block'; // Show the input
        } else {
            hsbcDesignatedSection.style.display = 'none'; // Hide the input
        }
    }

    document.querySelectorAll('.form-check-input').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {
            const statusSpan = this.nextElementSibling.querySelector('span');
            if (this.checked) {
                statusSpan.textContent = 'Active';
                statusSpan.classList.remove('text-danger');
                statusSpan.classList.add('text-success');
            } else {
                statusSpan.textContent = 'Inactive';
                statusSpan.classList.remove('text-success');
                statusSpan.classList.add('text-danger');
            }
        });
    });

    document.getElementById('addKeywordButton').addEventListener('click', function() {
        const keyword = document.getElementById('negativeKeywords').value;
        const gateway = document.querySelector('input[name="gateway"]:checked').value;
        const badge = `<span class="badge badge-light mr-2">${keyword} - ${gateway}</span>`;
        const closeButton = `<button type="button" class="btn btn-sm btn-danger" onclick="removeKeyword(this)">x</button>`;
        document.getElementById('addedKeywordsContainer').innerHTML += badge + closeButton;
    });

    function removeKeyword(button) {
        button.parentElement.remove();
    }
</script>


@endpush

<style>
    .dataTable-wrapper .dataTable-top .dataTable-dropdown {
        display: none;
    }

    .dataTable-wrapper .dataTable-bottom {
        display: none;
    }


    .dataTable-wrapper .dataTable-top {
        padding: 0rem !important;
    }

    .font-weight-bolder {
        margin: 1rem;
    }

    .d-flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .rotate-icon {
        color: gray;
        /* Default color */
        transition: transform 0.3s ease;
        /* Smooth rotation transition */
    }

    .rotate-icon:hover {
        color: orangered;
        /* Change color on hover */
    }

    .input-group>.form-control {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-right: none !important;
        /* Match Bootstrap's default border color */
    }

    .input-group>.input-group-text {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-left: none !important;
        /* Match Bootstrap's default border color */
    }

    .button-container {
        display: flex;
        flex-direction: column;
        /* Stack buttons vertically */
        align-items: flex-start;
        /* Align buttons to the left */
    }

    .horizontal-buttons {
        display: flex;
        /* Align buttons horizontally */
        gap: 0.5rem;
        /* Add spacing between the buttons */
        align-items: center;
        /* Vertically center the buttons */
    }

    .action-buttons {
        display: flex;
        justify-content: flex-end;
        /* Align buttons to the far right */
        gap: 0.5rem;
        /* Add spacing between the buttons */
        width: 100%;
        /* Ensure the container spans the full width */
    }

    .spacer {
        width: 5rem;
        /* Add space equivalent to the desired margin */
    }

    .text-success {
        color: green;
    }

    .text-danger {
        color: red;
    }
</style>