<!DOCTYPE html>
<html lang="en">

<?php include('modules/header-info.php'); ?>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <?php
        include('modules/topbar.php');
        include('modules/sidebar.php');
        ?>

        <div class="content-body dashboard-content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div x-data="{
                                activeData:'',
                                options:{
                                    totalUsers: ['Total Users', '1M'],
                                    totalSavings: ['Total Savings', '500K'],
                                    totalWithdrawals: ['Total Withdrawals', '4K'],
                                    totalLoans:['Total Loans', '300'],
                                    airtimeAndData: ['Airtime & Data', '200K'],
                                    cashback: ['Cashback', '19K']
                                }                                                          
                            }" class="col-sm-4">
                                <div class="widget-card flex-row">
                                    <div class="widget-card-wrapper w-100">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <div class="widget-title standard-savings"
                                                x-init="$watch('activeData', data => {$el.textContent = `${options[data][0]}`})">
                                                Airtime Cashback
                                            </div>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><svg fill="#000000" width="40px" height="40px"
                                                        viewBox="0 0 32 32" data-name="Layer 2" id="Layer_2"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <title />
                                                        <path
                                                            d="M11.19,12.4q4.11.15,8.21,0c1.61-.05,1.62-2.55,0-2.5q-4.09.13-8.21,0c-1.61-.06-1.6,2.44,0,2.5Z" />
                                                        <path
                                                            d="M13.56,16.79h4.9a1.25,1.25,0,0,0,0-2.5h-4.9a1.25,1.25,0,0,0,0,2.5Z" />
                                                        <path
                                                            d="M16,21.55l2.68.07a1.25,1.25,0,0,0,0-2.5L16,19.05a1.25,1.25,0,0,0,0,2.5Z" />
                                                    </svg></div>
                                                <ul class="dropdown-menu">
                                                    <li @click="activeData = `totalUsers`" class="dropdown-item">Total
                                                        Users</li>
                                                    <li @click="activeData = `totalSavings`" class="dropdown-item">Total
                                                        Savings</li>
                                                    <li @click="activeData = `totalWithdrawals`" class="dropdown-item">
                                                        Total Withdrawals</li>
                                                    <li @click="activeData = `totalLoans`" class="dropdown-item">Total
                                                        Loans</li>
                                                    <li @click="activeData = `airtimeAndData`" class="dropdown-item">
                                                        Airtime & Data</li>
                                                    <li @click="activeData = `cashback`" class="dropdown-item">Total
                                                        Cashback</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget-info align-items-center">
                                            <div class="widget-info-desc">
                                                <div class="widget-amount font-size-40 font-weight-bolder">
                                                    <span class="widget-amount-num"
                                                        x-init="$watch('activeData', data => {$el.textContent = `${options[data][1]}`})">700</span>
                                                </div>
                                            </div>
                                            <div class="widget-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                                                    viewBox="0 0 64 64" fill="none" stroke="#000000">
                                                    <rect x="18" y="8" width="28" height="48" rx="4" />
                                                    <line x1="24" y1="16" x2="36" y2="16" />
                                                    <line x1="24" y1="24" x2="28" y2="24" />
                                                    <line x1="28" y1="40" x2="40" y2="40" />
                                                    <line x1="40" y1="32" x2="32" y2="32" />
                                                    <line x1="28" y1="48" x2="24" y2="48" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{
                                activeData:'',
                                options:{
                                    totalUsers: ['Total Users', '1M'],
                                    totalSavings: ['Total Savings', '500K'],
                                    totalWithdrawals: ['Total Withdrawals', '4K'],
                                    totalLoans:['Total Loans', '300'],
                                    airtimeAndData: ['Airtime & Data', '200K'],
                                    cashback: ['Cashback', '19K']
                                }                                                          
                            }" class="col-sm-4">
                                <div class="widget-card flex-row">
                                    <div class="widget-card-wrapper w-100">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <div class="widget-title standard-savings"
                                                x-init="$watch('activeData', data => {$el.textContent = `${options[data][0]}`})">
                                                Total Savings
                                            </div>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><svg fill="#000000" width="40px" height="40px"
                                                        viewBox="0 0 32 32" data-name="Layer 2" id="Layer_2"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <title />
                                                        <path
                                                            d="M11.19,12.4q4.11.15,8.21,0c1.61-.05,1.62-2.55,0-2.5q-4.09.13-8.21,0c-1.61-.06-1.6,2.44,0,2.5Z" />
                                                        <path
                                                            d="M13.56,16.79h4.9a1.25,1.25,0,0,0,0-2.5h-4.9a1.25,1.25,0,0,0,0,2.5Z" />
                                                        <path
                                                            d="M16,21.55l2.68.07a1.25,1.25,0,0,0,0-2.5L16,19.05a1.25,1.25,0,0,0,0,2.5Z" />
                                                    </svg></div>
                                                <ul class="dropdown-menu">
                                                    <li @click="activeData = `totalUsers`" class="dropdown-item">Total
                                                        Users</li>
                                                    <li @click="activeData = `totalSavings`" class="dropdown-item">Total
                                                        Savings</li>
                                                    <li @click="activeData = `totalWithdrawals`" class="dropdown-item">
                                                        Total Withdrawals</li>
                                                    <li @click="activeData = `totalLoans`" class="dropdown-item">Total
                                                        Loans</li>
                                                    <li @click="activeData = `airtimeAndData`" class="dropdown-item">
                                                        Airtime & Data</li>
                                                    <li @click="activeData = `cashback`" class="dropdown-item">Total
                                                        Cashback</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget-info align-items-center">
                                            <div class="widget-info-desc">
                                                <div class="widget-amount font-size-40 font-weight-bolder">
                                                    <span class="widget-amount-num"
                                                        x-init="$watch('activeData', data => {$el.textContent = `${options[data][1]}`})">500K</span>
                                                </div>
                                            </div>
                                            <div class="widget-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                                                    viewBox="0 0 64 64" fill="none" stroke="#000000">
                                                    <rect x="18" y="8" width="28" height="48" rx="4" />
                                                    <line x1="24" y1="16" x2="36" y2="16" />
                                                    <line x1="24" y1="24" x2="28" y2="24" />
                                                    <line x1="28" y1="40" x2="40" y2="40" />
                                                    <line x1="40" y1="32" x2="32" y2="32" />
                                                    <line x1="28" y1="48" x2="24" y2="48" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div x-data="{
                                activeData:'',
                                options:{
                                    totalUsers: ['Total Users', '1M'],
                                    totalSavings: ['Total Savings', '500K'],
                                    totalWithdrawals: ['Total Withdrawals', '4K'],
                                    totalLoans:['Total Loans', '300'],
                                    airtimeAndData: ['Airtime & Data', '200K'],
                                    cashback: ['Cashback', '19K']
                                }                                                          
                            }" class="col-sm-4">
                                <div class="widget-card flex-row">
                                    <div class="widget-card-wrapper w-100">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <div class="widget-title standard-savings"
                                                x-init="$watch('activeData', data => {$el.textContent = `${options[data][0]}`})">
                                                Total Users
                                            </div>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><svg fill="#000000" width="40px" height="40px"
                                                        viewBox="0 0 32 32" data-name="Layer 2" id="Layer_2"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <title />
                                                        <path
                                                            d="M11.19,12.4q4.11.15,8.21,0c1.61-.05,1.62-2.55,0-2.5q-4.09.13-8.21,0c-1.61-.06-1.6,2.44,0,2.5Z" />
                                                        <path
                                                            d="M13.56,16.79h4.9a1.25,1.25,0,0,0,0-2.5h-4.9a1.25,1.25,0,0,0,0,2.5Z" />
                                                        <path
                                                            d="M16,21.55l2.68.07a1.25,1.25,0,0,0,0-2.5L16,19.05a1.25,1.25,0,0,0,0,2.5Z" />
                                                    </svg></div>
                                                <ul class="dropdown-menu">
                                                    <li @click="activeData = `totalUsers`" class="dropdown-item">Total
                                                        Users</li>
                                                    <li @click="activeData = `totalSavings`" class="dropdown-item">Total
                                                        Savings</li>
                                                    <li @click="activeData = `totalWithdrawals`" class="dropdown-item">
                                                        Total Withdrawals</li>
                                                    <li @click="activeData = `totalLoans`" class="dropdown-item">Total
                                                        Loans</li>
                                                    <li @click="activeData = `airtimeAndData`" class="dropdown-item">
                                                        Airtime & Data</li>
                                                    <li @click="activeData = `cashback`" class="dropdown-item">Total
                                                        Cashback</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget-info align-items-center">
                                            <div class="widget-info-desc">
                                                <div class="widget-amount font-size-40 font-weight-bolder">
                                                    <span class="widget-amount-num"
                                                        x-init="$watch('activeData', data => {$el.textContent = `${options[data][1]}`})">1M</span>
                                                </div>
                                            </div>
                                            <div class="widget-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                                                    viewBox="0 0 64 64" fill="none" stroke="#000000">
                                                    <rect x="18" y="8" width="28" height="48" rx="4" />
                                                    <line x1="24" y1="16" x2="36" y2="16" />
                                                    <line x1="24" y1="24" x2="28" y2="24" />
                                                    <line x1="28" y1="40" x2="40" y2="40" />
                                                    <line x1="40" y1="32" x2="32" y2="32" />
                                                    <line x1="28" y1="48" x2="24" y2="48" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="total-users-chart"></div>
                            </div>
                            <div class="col-lg-7">
                                <div id="timeline-chart"></div>
                            </div>
                            <div class="col-lg-5">
                                <div id="loans-chart"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php
    include('modules/modals.php');
    include('modules/footer-script.php');
    ?>
</body>

</html>