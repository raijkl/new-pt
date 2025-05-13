<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-2
    {{ $bg ?? ''}} {{ $box ?? ''}}"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href="{{ route('dashboards', ['page' => 'default']) }}">
            <img src="{{ $logo ?? '/assets/img/logo-ct-dark.png'}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Argon Dashboard 2 PRO Laravel</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link {{ Route::currentRouteName() == 'dashboards' ? 'active' : '' }}"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboards</span>
                </a>
                <div class="collapse {{ Route::currentRouteName() == 'dashboards' ? 'show' : '' }} " id="dashboardsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item active">
                            <a class="nav-link {{ str_contains(request()->url(), 'default') == true ? 'active' : '' }}" href="{{ route('dashboards', ['page' => 'default']) }}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal"> Default </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#partnerCollapse" class="nav-link {{ in_array(request()->route('page'), ['partner', 'add', 'update']) ? 'active' : '' }}"
                    aria-controls="partnerCollapse" role="button" aria-expanded="{{ in_array(request()->route('page'), ['partner', 'add', 'update']) ? 'true' : 'false' }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Partner</span>
                </a>
                <div class="collapse {{ in_array(request()->route('page'), ['partner', 'add', 'update']) ? 'show' : '' }}" id="partnerCollapse">
                    <ul class="nav ms-4">
                        <!-- View Partner -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partners') && request()->route('page') === 'partner' ? 'active' : '' }}"
                                href="{{ route('partners', ['page' => 'partner']) }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> View Partner </span>
                            </a>
                        </li>

                        <!-- Add Partner -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partners') && request()->route('page') === 'add' ? 'active' : '' }}"
                                href="{{ route('partners', ['page' => 'add']) }}">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal"> Add Partner </span>
                            </a>
                        </li>

                        <!-- Update Partner -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('partners') && request()->route('page') === 'update' ? 'active' : '' }}"
                                href="{{ route('partners', ['page' => 'update']) }}">
                                <span class="sidenav-mini-icon"> U </span>
                                <span class="sidenav-normal"> Update Partner </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#transactionCollapse" class="nav-link {{ in_array(request()->route('page'), ['manage-transaction', 'partner-transaction', 'refund-entry-transaction', 'refund-list-transaction', 'cb-entry-transaction', 'cb-list-transaction', 'buyer-transaction']) ? 'active' : '' }}"
                    aria-controls="transactionCollapse" role="button" aria-expanded="{{ in_array(request()->route('page'), ['manage-transaction', 'partner-transaction', 'refund-entry-transaction', 'refund-list-transaction', 'cb-entry-transaction', 'cb-list-transaction', 'buyer-transaction']) ? 'true' : 'false' }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Transaction</span>
                </a>
                <div class="collapse {{ in_array(request()->route('page'), ['manage-transaction', 'partner-transaction', 'refund-entry-transaction', 'refund-list-transaction', 'cb-entry-transaction', 'cb-list-transaction', 'buyer-transaction', 'bank-transaction']) ? 'show' : '' }}" id="transactionCollapse">
                    <ul class="nav ms-4">
                        <!-- Manage Transaction -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'manage-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'manage-transaction']) }}">
                                <span class="sidenav-mini-icon"> M </span>
                                <span class="sidenav-normal"> Manage Transaction </span>
                            </a>
                        </li>

                        <!-- Partner Transaction -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'partner-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'partner-transaction']) }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal"> Partner Transaction </span>
                            </a>
                        </li>

                        <!-- Refund Entry -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'refund-entry-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'refund-entry-transaction']) }}">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal"> Refund Entry </span>
                            </a>
                        </li>

                        <!-- Refund List -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'refund-list-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'refund-list-transaction']) }}">
                                <span class="sidenav-mini-icon"> L </span>
                                <span class="sidenav-normal"> Refund List </span>
                            </a>
                        </li>

                        <!-- Charge Back Entry -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'cb-entry-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'cb-entry-transaction']) }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal"> Charge Back Entry </span>
                            </a>
                        </li>

                        <!-- Charge Back List -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'cb-list-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'cb-list-transaction']) }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal"> Charge Back List </span>
                            </a>
                        </li>

                        <!-- Buyer Transaction Search -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('transactions') && request()->route('page') === 'buyer-transaction' ? 'active' : '' }}"
                                href="{{ route('transactions', ['page' => 'buyer-transaction']) }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal"> Buyer Transaction Search </span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>

            <!-- Reporting Menu -->
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#reportingCollapse" class="nav-link {{ in_array(request()->route('page'), [
        'transaction-report',
        'rolling-reserve-summary',
        'refund-summary',
        'refund-details',
        'charge-back-summary',
        'chargeback-with-refund',
        'pm-chargeback-details',
        'gateway-chargeback-details',
        'partner-credit-account',
        'partner-approved-transaction',
        'partner-satisfactory-transaction',
        'partner-invoices',
        'buyer-credit-account',
        'buyer-satisfactory-transaction' 
    ]) ? 'active' : '' }}"
                    aria-controls="reportingCollapse" role="button" aria-expanded="{{ in_array(request()->route('page'), [
        'transaction-report',
        'rolling-reserve-summary',
        'refund-summary',
        'refund-details',
        'charge-back-summary',
        'chargeback-with-refund',
        'pm-chargeback-details',
        'gateway-chargeback-details',
        'partner-credit-account',
        'partner-approved-transaction',
        'partner-satisfactory-transaction',
        'partner-invoices',
        'buyer-credit-account',
        'buyer-satisfactory-transaction' 
    ]) ? 'true' : 'false' }}">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reporting</span>
                </a>
                <div class="collapse {{ in_array(request()->route('page'), [
        'transaction-report',
        'rolling-reserve-summary',
        'refund-summary',
        'refund-details',
        'charge-back-summary',
        'chargeback-with-refund',
        'pm-chargeback-details',
        'gateway-chargeback-details',
        'partner-credit-account',
        'partner-approved-transaction',
        'partner-satisfactory-transaction',
        'partner-invoices',
        'buyer-credit-account',
        'buyer-satisfactory-transaction' 
    ]) ? 'show' : '' }}" id="reportingCollapse">
                    <ul class="nav ms-4">
                        <!-- Transaction Report -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'transaction-report' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'transaction-report']) }}">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal">Transaction Report</span>
                            </a>
                        </li>

                        <!-- Rolling Reserve Summary -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'rolling-reserve-summary' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'rolling-reserve-summary']) }}">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal">Rolling Reserve Summary</span>
                            </a>
                        </li>

                        <!-- Refund Summary -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'refund-summary' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'refund-summary']) }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">Refund Summary</span>
                            </a>
                        </li>

                        <!-- Refund Details -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'refund-details' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'refund-details']) }}">
                                <span class="sidenav-mini-icon"> D </span>
                                <span class="sidenav-normal">Refund Details</span>
                            </a>
                        </li>

                        <!-- Charge Back Summary -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'charge-back-summary' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'charge-back-summary']) }}">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal">Charge Back Summary</span>
                            </a>
                        </li>

                        <!-- Chargeback with Refund -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'chargeback-with-refund' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'chargeback-with-refund']) }}">
                                <span class="sidenav-mini-icon"> W </span>
                                <span class="sidenav-normal">Chargeback with Refund</span>
                            </a>
                        </li>

                        <!-- PM Chargeback Details -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'pm-chargeback-details' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'pm-chargeback-details']) }}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal">PM Chargeback Details</span>
                            </a>
                        </li>

                        <!-- Gateway Chargeback Details -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'gateway-chargeback-details' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'gateway-chargeback-details']) }}">
                                <span class="sidenav-mini-icon"> G </span>
                                <span class="sidenav-normal">Gateway Chargeback Details</span>
                            </a>
                        </li>

                        <!-- Partner Credit Account -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'partner-credit-account' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'partner-credit-account']) }}">
                                <span class="sidenav-mini-icon"> A </span>
                                <span class="sidenav-normal">Partner Credit Account</span>
                            </a>
                        </li>

                        <!-- Partner Approved Transaction -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'partner-approved-transaction' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'partner-approved-transaction']) }}">
                                <span class="sidenav-mini-icon"> T </span>
                                <span class="sidenav-normal">Partner Approved Transaction</span>
                            </a>
                        </li>

                        <!-- Partner Satisfactory Transaction -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'partner-satisfactory-transaction' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'partner-satisfactory-transaction']) }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">Partner Satisfactory Transaction</span>
                            </a>
                        </li>

                        <!-- Partner Invoices -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'partner-invoices' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'partner-invoices']) }}">
                                <span class="sidenav-mini-icon"> I </span>
                                <span class="sidenav-normal">Partner Invoices</span>
                            </a>
                        </li>

                        <!-- Buyer Credit Account -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'buyer-credit-account' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'buyer-credit-account']) }}">
                                <span class="sidenav-mini-icon"> B </span>
                                <span class="sidenav-normal">Buyer Credit Account</span>
                            </a>
                        </li>

                        <!-- Buyer Satisfactory Transaction -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reporting') && request()->route('page') === 'buyer-satisfactory-transaction' ? 'active' : '' }}"
                                href="{{ route('reporting', ['page' => 'buyer-satisfactory-transaction']) }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal">Buyer Satisfactory Transaction</span>
                            </a>
                        </li>

                        
                    </ul>
                </div>
            </li>
 
        </ul>
    </div>
     
</aside>