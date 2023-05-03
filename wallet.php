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

        <div class="content-body savings-single-content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="widget-card flex-row">
                                                    <div class="widget-card-wrapper w-100">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-5">
                                                            <div class="widget-title standard-savings">
                                                                Total Wallets
                                                            </div>
                                                        </div>
                                                        <div class="widget-info align-items-center">
                                                            <div class="widget-info-desc">
                                                                <div
                                                                    class="widget-amount font-size-40 font-weight-bolder">
                                                                    <span class="widget-amount-num">900</span>
                                                                </div>
                                                                <div class="text-success font-size-12 mb-n3">20%
                                                                    <span><i class="las la-arrow-up"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="widget-icon">
                                                                <svg width="40px" height="40px" class="svg-icon"
                                                                    viewBox="0 0 24 24" version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                    <g id="Iconly/Light/Wallet" stroke="#ffffff"
                                                                        stroke-width="1.5" fill="none"
                                                                        fill-rule="evenodd" stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <g id="Wallet"
                                                                            transform="translate(2.500000, 3.000000)"
                                                                            stroke="#2f3238" stroke-width="1.5">
                                                                            <path
                                                                                d="M19.1389383,11.3957621 L15.0906357,11.3957621 C13.6041923,11.3948508 12.399362,10.1909319 12.3984507,8.70448849 C12.3984507,7.21804511 13.6041923,6.01412622 15.0906357,6.01321486 L19.1389383,6.01321486"
                                                                                id="Stroke-1"></path>
                                                                            <line x1="15.5485988" y1="8.64287993"
                                                                                x2="15.2369105" y2="8.64287993"
                                                                                id="Stroke-3">
                                                                            </line>
                                                                            <path
                                                                                d="M5.24766462,1.52259158e-14 L13.8910914,1.52259158e-14 C16.7892458,1.52259158e-14 19.138756,2.34951014 19.138756,5.24766462 L19.138756,12.4246981 C19.138756,15.3228526 16.7892458,17.6723627 13.8910914,17.6723627 L5.24766462,17.6723627 C2.34951014,17.6723627 1.69176842e-15,15.3228526 1.69176842e-15,12.4246981 L1.69176842e-15,5.24766462 C1.69176842e-15,2.34951014 2.34951014,1.52259158e-14 5.24766462,1.52259158e-14 Z"
                                                                                id="Stroke-5"></path>
                                                                            <line x1="4.53561176" y1="4.53816359"
                                                                                x2="9.93456368" y2="4.53816359"
                                                                                id="Stroke-7">
                                                                            </line>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="widget-card flex-row">
                                                    <div class="widget-card-wrapper w-100">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-5">
                                                            <div class="widget-title standard-savings">
                                                                Verified Wallets
                                                            </div>
                                                        </div>
                                                        <div class="widget-info align-items-center">
                                                            <div class="widget-info-desc">
                                                                <div
                                                                    class="widget-amount font-size-40 font-weight-bolder">
                                                                    <span class="widget-amount-num">200</span>
                                                                </div>
                                                                <div class="text-success font-size-12 mb-n3">90%
                                                                    <span><i class="las la-arrow-up"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="widget-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="50px"
                                                                    height="50px" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M14.0488 5.53954C14.464 5.44421 14.8939 5.62231 15.1201 5.98327L16.114 7.56981C16.1942 7.69788 16.3025 7.80609 16.4305 7.88633L18.0171 8.88028C18.378 9.10642 18.5561 9.53639 18.4608 9.95153L18.0418 11.7762C18.008 11.9235 18.008 12.0765 18.0418 12.2238L18.4608 14.0485C18.5561 14.4637 18.378 14.8936 18.0171 15.1198L16.4305 16.1137C16.3025 16.194 16.1942 16.3022 16.114 16.4302L15.1201 18.0168C14.8939 18.3777 14.464 18.5558 14.0488 18.4605L12.2241 18.0415C12.0768 18.0077 11.9238 18.0077 11.7765 18.0415L9.95181 18.4605C9.53667 18.5558 9.1067 18.3777 8.88057 18.0168L7.88661 16.4302C7.80638 16.3022 7.69816 16.194 7.57009 16.1137L5.98355 15.1198C5.62259 14.8936 5.44449 14.4637 5.53983 14.0485L5.95885 12.2238C5.99267 12.0766 5.99267 11.9235 5.95885 11.7762L5.53983 9.95153C5.44449 9.53639 5.62259 9.10642 5.98355 8.88028L7.57009 7.88633C7.69816 7.80609 7.80638 7.69788 7.88661 7.56981L8.88057 5.98327C9.1067 5.62231 9.53667 5.44421 9.95181 5.53954L11.7765 5.95856C11.9238 5.99239 12.0768 5.99239 12.2241 5.95856L14.0488 5.53954Z"
                                                                        stroke="#2f3238" />
                                                                    <path
                                                                        d="M9.51538 12.5362L11.55 14.4846L14.4846 9.51538"
                                                                        stroke="#2f3238" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="widget-card flex-row">
                                                    <div class="widget-card-wrapper w-100">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-5">
                                                            <div class="widget-title standard-savings">
                                                                Users
                                                            </div>
                                                        </div>
                                                        <div class="widget-info align-items-center">
                                                            <div class="widget-info-desc">
                                                                <div
                                                                    class="widget-amount font-size-40 font-weight-bolder">
                                                                    <span class="widget-amount-num">800</span>
                                                                </div>
                                                            </div>
                                                            <div class="widget-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    style="width: 40px;height: 40px;vertical-align: middle;fill: black;overflow: hidden;"
                                                                    viewBox="0 0 1024 1024" version="1.1">
                                                                    <path
                                                                        d="M843.282963 870.115556c-8.438519-140.515556-104.296296-257.422222-233.908148-297.14963C687.881481 536.272593 742.4 456.533333 742.4 364.088889c0-127.241481-103.158519-230.4-230.4-230.4S281.6 236.847407 281.6 364.088889c0 92.444444 54.518519 172.183704 133.12 208.877037-129.611852 39.727407-225.46963 156.634074-233.908148 297.14963-0.663704 10.903704 7.964444 20.195556 18.962963 20.195556l0 0c9.955556 0 18.299259-7.774815 18.962963-17.73037C227.745185 718.506667 355.65037 596.385185 512 596.385185s284.254815 122.121481 293.357037 276.195556c0.568889 9.955556 8.912593 17.73037 18.962963 17.73037C835.318519 890.311111 843.946667 881.019259 843.282963 870.115556zM319.525926 364.088889c0-106.287407 86.186667-192.474074 192.474074-192.474074s192.474074 86.186667 192.474074 192.474074c0 106.287407-86.186667 192.474074-192.474074 192.474074S319.525926 470.376296 319.525926 364.088889z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card profile_chart">
                                            <div class="card-body">
                                                <div class="row mb-4 p-1">
                                                    <div class="card-header mt-3 border-0 pl-0">
                                                        <h4 class="card-title">
                                                            Wallets</h4>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="transaction-table users-data-table">
                                                            <div class="table-responsive">
                                                                <table class="table mb-0 table-responsive-sm">
                                                                    <thead class="users-data-table-head-container">
                                                                        <tr role="row">
                                                                            <th rowspan="1" colspan="1">S/N</th>
                                                                            <th class="sorting_disabled" rowspan="1"
                                                                                colspan="1" style="width: 149.078px;">
                                                                                ID</th>
                                                                            <th class="sorting_disabled" rowspan="1"
                                                                                colspan="1" style="width: 240.062px;">
                                                                                User</th>
                                                                            <th class="sorting_disabled" rowspan="1"
                                                                                colspan="1" style="width: 240.062px;">
                                                                                Email</th>
                                                                            <th class="sorting_disabled" rowspan="1"
                                                                                colspan="1" style="width: 191.906px;">
                                                                                Creation Date</th>
                                                                            <th class="sorting_disabled" rowspan="1"
                                                                                colspan="1" style="width: 232.891px;">
                                                                                Gender</th>
                                                                            <th class="sorting_disabled" rowspan="1"
                                                                                colspan="1" style="width: 185.062px;">
                                                                                Wallet
                                                                                Balance
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>1</td>
                                                                            <td>S-SAVE-0001</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>jorjas@gmail.com</td>
                                                                            <td>02-03-2023</td>
                                                                            <td>Female</td>
                                                                            <td>&#8358;200</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>2</td>
                                                                            <td>S-SAVE-04091</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>michi@gmail.com</td>
                                                                            <td>01-02-2023</td>
                                                                            <td>Male</td>
                                                                            <td>&#8358;1,850</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>3</td>
                                                                            <td>S-SAVE-0021</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>Nicoledels@gmail.com</td>
                                                                            <td>10-03-2023</td>
                                                                            <td>Female</td>
                                                                            <td>&#8358;5,280</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>4</td>
                                                                            <td>S-SAVE-0096</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>queenamanda@gmail.com</td>
                                                                            <td>24-02-2023</td>
                                                                            <td>Female</td>
                                                                            <td>&#8358;10,000</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>5</td>
                                                                            <td>S-SAVE-0490</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>musaliu@gmail.com</td>
                                                                            <td>10-03-2023</td>
                                                                            <td>Male</td>
                                                                            <td>&#8358;2000</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>6</td>
                                                                            <td>S-SAVE-0034</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>ifoks@gmail.com</td>
                                                                            <td>02-01-2023</td>
                                                                            <td>Male</td>
                                                                            <td>&#8358;900</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>7</td>
                                                                            <td>S-SAVE-0031</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>hakimamina@gmail.com</td>
                                                                            <td>02-03-2023</td>
                                                                            <td>Female</td>
                                                                            <td>&#8358;800</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>8</td>
                                                                            <td>S-SAVE-0501</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>lekanwest@gmail.com</td>
                                                                            <td>02-03-2023</td>
                                                                            <td>Male</td>
                                                                            <td>&#8358;2000</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>9</td>
                                                                            <td>S-SAVE-0641</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>opeoluwasope@yahoo.com</td>
                                                                            <td>02-02-2023</td>
                                                                            <td>Female</td>
                                                                            <td>&#8358;4,250</td>
                                                                        </tr>
                                                                        <tr data-toggle="modal"
                                                                            data-target="#walletTransactionHistoryModal">
                                                                            <td>10</td>
                                                                            <td>S-SAVE-0482</td>
                                                                            <td>
                                                                                <a href="user-profile.php"
                                                                                    class="user-name-cell">
                                                                                    <div class="user-avatar-wrapper">
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
                                                                            <td>paulmena@gmail.com</td>
                                                                            <td>26-02-2023</td>
                                                                            <td>Male</td>
                                                                            <td>&#8358;500</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="text-left" role="status" aria-live="polite">
                                                            Showing 1 to 10 of 45
                                                            entries</div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-7 d-flex justify-content-end">
                                                        <div class="">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled"
                                                                    id="datatable-basic_previous"><a href="#"
                                                                        aria-controls="datatable-basic" data-dt-idx="0"
                                                                        tabindex="0" class="page-link"><i
                                                                            class="fas fa-angle-left"></i></a></li>
                                                                <li class="paginate_button page-item active"><a href="#"
                                                                        aria-controls="datatable-basic" data-dt-idx="1"
                                                                        tabindex="0" class="page-link">1</a></li>
                                                                <li class="paginate_button page-item next disabled"
                                                                    id="datatable-basic_next"><a href="#"
                                                                        aria-controls="datatable-basic" data-dt-idx="2"
                                                                        tabindex="0" class="page-link"><i
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

    <?php
    include('modules/modals.php');
    include('modules/footer-script.php');
    ?>
</body>

</html>