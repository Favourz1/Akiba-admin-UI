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

        <div class="content-body utility-content-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="akibaPay.html">AkibaPay</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="utility.html">Utility</a></li>
                </ol>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="widget-card flex-row">
                                            <div class="widget-card-wrapper w-100">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="widget-title standard-savings">
                                                        Dstv
                                                    </div>
                                                </div>
                                                <div class="widget-info align-items-center">
                                                    <div class="widget-info-desc">
                                                        <div class="widget-amount font-size-40 font-weight-bolder">
                                                            <span class="widget-amount-num">900K</span>
                                                        </div>
                                                        <div class="text-success font-size-12 mb-n3">90%
                                                            <span><i class="las la-arrow-up"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-icon">
                                                        <img style="max-width:70px; height:55px;"
                                                            src="images/logo/dstv.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="widget-card flex-row">
                                            <div class="widget-card-wrapper w-100">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="widget-title standard-savings">
                                                        Users
                                                    </div>
                                                </div>
                                                <div class="widget-info align-items-center">
                                                    <div class="widget-info-desc">
                                                        <div class="widget-amount font-size-40 font-weight-bolder">
                                                            <span class="widget-amount-num">800</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-icon">
                                                        <span class="sold-thumb"><i class="la la-arrow-down"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="widget-card flex-row">
                                            <div class="widget-card-wrapper w-100">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="widget-title standard-savings">
                                                        No. of Transactions
                                                    </div>
                                                </div>
                                                <div class="widget-info align-items-center">
                                                    <div class="widget-info-desc">
                                                        <div class="widget-amount font-size-40 font-weight-bolder">
                                                            <span class="widget-amount-num">20K</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-icon">
                                                        <span class="buy-thumb"><i class="la la-arrow-up"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="widget-card flex-row">
                                            <div class="widget-card-wrapper w-100">
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                    <div class="widget-title standard-savings">
                                                        Pending Transactions
                                                    </div>
                                                </div>
                                                <div class="widget-info align-items-center">
                                                    <div class="widget-info-desc">
                                                        <div class="widget-amount font-size-40 font-weight-bolder">
                                                            <span class="widget-amount-num">50</span>
                                                        </div>
                                                        <div class="font-size-12 mb-n3">
                                                            <span class="text-danger">10%<i
                                                                    class="las la-arrow-down"></i>
                                                            </span>
                                                            <span>vs yesterday</span>
                                                        </div>
                                                    </div>
                                                    <div class="widget-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40px"
                                                            height="40px" viewBox="0 0 16 16">
                                                            <g fill="#fe9431e0">
                                                                <path
                                                                    d="M12.144 1.157a8 8 0 10-.709 14.068 1 1 0 00-.858-1.806 6 6 0 112.86-7.955 1 1 0 001.814-.845 8 8 0 00-3.107-3.462z" />
                                                                <path
                                                                    d="M7 5a1 1 0 112 0v4a1 1 0 01-.553.894l-2 1a1 1 0 11-.894-1.788L7 8.382V5zm9 10a1 1 0 11-2 0 1 1 0 012 0zm-1-7a1 1 0 00-1 1v3a1 1 0 102 0V9a1 1 0 00-1-1z" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card profile_chart">
                                            <!-- <div class="card-header">
                                                <div class="chart_current_data">
                                                    <h3>228,548,560 <span>NGN</span></h3>
                                                    <p class="text-success">125,648 <span>NGN (20%)</span></p>
                                                </div>
                                                <div class="duration-option">
                                                    <a id="all" class="active">ALL</a>
                                                    <a id="one_month" class="">1M</a>
                                                    <a id="six_months">6M</a>
                                                    <a id="one_year" class="">1Y</a>
                                                    <a id="ytd" class="">YTD</a>
                                                </div>
                                            </div> -->
                                            <div class="card-body">
                                                <!-- <div id="loans-chart"></div> -->
                                                <div class="chart-content text-center">
                                                    <div class="row">
                                                        <div class="col-xl-4 col-sm-6 col-6">
                                                            <div class="chart-stat">
                                                                <p class="mb-1">Total Value</p>
                                                                <strong>7,300,00</strong>
                                                                NGN
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6 col-6">
                                                            <div class="chart-stat">
                                                                <p class="mb-1">Total Users</p>
                                                                <strong>800</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6 col-6">
                                                            <div class="chart-stat">
                                                                <p class="mb-1">Total Transactions</p>
                                                                <strong>20,102</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6 col-6">
                                                            <div class="chart-stat">
                                                                <p class="mb-1">Pending Transactions</p>
                                                                <strong>45</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6 col-6">
                                                            <div class="chart-stat">
                                                                <p class="mb-1">New users
                                                                </p>
                                                                <strong>38</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-sm-6 col-6">
                                                            <div class="chart-stat">
                                                                <p class="mb-1">Revenue</p>
                                                                <strong>450,000</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="card-header mt-3 border-0 w-100">
                                                            <h4 class="card-title">
                                                                Transaction History</h4>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div class="transaction-table users-data-table">
                                                                <div class="table-responsive">
                                                                    <table class="table mb-0 table-responsive-sm">
                                                                        <thead class="users-data-table-head-container">
                                                                            <tr role="row">
                                                                                <th rowspan="1" colspan="1"
                                                                                    style="width: 12px;">S/N</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1"
                                                                                    style="width: 149.078px;">
                                                                                    Transaction ID</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1"
                                                                                    style="width: 240.062px; text-align:left;">
                                                                                    User</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1"
                                                                                    style="width: 191.906px;">
                                                                                    Transaction Date</th>
                                                                                <th class="sorting_disabled" rowspan="1"
                                                                                    colspan="1"
                                                                                    style="width: 185.062px;">
                                                                                    Amount
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>1</td>
                                                                                <td>S-SAVE-0001</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-1.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Jorja
                                                                                                Smith</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>02-03-2023</td>
                                                                                <td>&#8358;20,000</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>2</td>
                                                                                <td>S-SAVE-04091</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-6.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Micheal
                                                                                                Chinelo</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>01-02-2023</td>
                                                                                <td>&#8358;1,850</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>3</td>
                                                                                <td>S-SAVE-0021</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-2.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Nicole
                                                                                                Ogundele</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>10-03-2023</td>
                                                                                <td>&#8358;15,280</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>4</td>
                                                                                <td>S-SAVE-0096</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-3.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Queen
                                                                                                Amanda</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>24-02-2023</td>
                                                                                <td>&#8358;110,000</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>5</td>
                                                                                <td>S-SAVE-0490</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-7.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Musa
                                                                                                Aliyu</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>10-03-2023</td>
                                                                                <td>&#8358;200,000</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>6</td>
                                                                                <td>S-SAVE-0034</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-10.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Ifeanyi
                                                                                                Okoye</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>02-01-2023</td>
                                                                                <td>&#8358;19,000</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>7</td>
                                                                                <td>S-SAVE-0031</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-4.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Hakim
                                                                                                Amina</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>02-03-2023</td>
                                                                                <td>&#8358;816,927</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>8</td>
                                                                                <td>S-SAVE-0501</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-8.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Lekan
                                                                                                West</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>02-03-2023</td>
                                                                                <td>&#8358;20,000</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>9</td>
                                                                                <td>S-SAVE-0641</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-5.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Ope
                                                                                                Oluwasope</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>02-02-2023</td>
                                                                                <td>&#8358;94,250</td>
                                                                            </tr>
                                                                            <tr data-toggle="modal"
                                                                                data-target="#transactionDetailsModal">
                                                                                <td>10</td>
                                                                                <td>S-SAVE-0482</td>
                                                                                <td>
                                                                                    <a href="" class="user-name-cell">
                                                                                        <div
                                                                                            class="user-avatar-wrapper">
                                                                                            <img alt="User Image"
                                                                                                src="images/avatar-9.png">
                                                                                        </div>
                                                                                        <div class="user-name-wrap">
                                                                                            <span
                                                                                                class="align-self-start mb-0 user-name">Paul
                                                                                                Mena</span>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                                <td>26-02-2023</td>
                                                                                <td>&#8358;20,000</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row p-2">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div role="status" aria-live="polite">Showing 1 to 10 of 45
                                                                entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7 d-flex justify-content-end">
                                                            <div class="">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled"
                                                                        id="datatable-basic_previous"><a href="#"
                                                                            aria-controls="datatable-basic"
                                                                            data-dt-idx="0" tabindex="0"
                                                                            class="page-link"><i
                                                                                class="fas fa-angle-left"></i></a></li>
                                                                    <li class="paginate_button page-item active"><a
                                                                            href="#" aria-controls="datatable-basic"
                                                                            data-dt-idx="1" tabindex="0"
                                                                            class="page-link">1</a></li>
                                                                    <li class="paginate_button page-item next disabled"
                                                                        id="datatable-basic_next"><a href="#"
                                                                            aria-controls="datatable-basic"
                                                                            data-dt-idx="2" tabindex="0"
                                                                            class="page-link"><i
                                                                                class="fas fa-angle-right"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
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