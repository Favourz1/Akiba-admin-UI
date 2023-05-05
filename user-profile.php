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

        <div class="content-body user-profile-content-body">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="user-profile.html">User Profile</a>
                    </li>
                </ol>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card  user-profile p-3">
                                    <div class="card-header">
                                        <div class="user-avatar-wrapper">
                                            <img src="images/avatar-7.png" alt="Use IMG" class="user-avatar">
                                        </div>
                                        <div class="user-name-text">Billy Waymond</div>
                                        <div class="user-name-sub-text">@billy_way</div>
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" id="more-option" href="#" role="button"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-top" x-placement="top-right"
                                                aria-labelledby="more-option">
                                                <a class="dropdown-item" href=""><i class="fas fa-copy"
                                                        aria-hidden="true"></i>Copy Link</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-lock"
                                                        aria-hidden="true"></i>Disable</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-body-title">Personal Details</h2>
                                        <div class="personal-details-wrapper row">
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">Name</div>
                                                <div class="personal-details-desc">Billy Waymond</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">Email</div>
                                                <div class="personal-details-desc">Billy@gmail.com</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">Phone</div>
                                                <div class="personal-details-desc">012345678901</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">Date of Birth</div>
                                                <div class="personal-details-desc">02-03-1999</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">Address</div>
                                                <div class="personal-details-desc">No 1, Olulekan road, Surulere.</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">City</div>
                                                <div class="personal-details-desc">Ikeja</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">State</div>
                                                <div class="personal-details-desc">Lagos</div>
                                            </div>
                                            <div class="col-lg-6 personal-details-item">
                                                <div class="personal-details-title">Country</div>
                                                <div class="personal-details-desc">Nigeria</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="card" style="border: 1px solid #d3d6da;">
                                    <div class="card-body d-flex flex-column">
                                        <div class="card-title text-center mb-3">Savings Wallet</div>
                                        <div class="card-info row d-flex justify-content-center">
                                            <div class="col-8 card-desc p-1">
                                                <ul
                                                    class="d-flex flex-column align-content-between p-3 font-size-14 font-weight-semibold">
                                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <img class="mr-2" width="30" height="30"
                                                                src="images/icons/standard-savings-icon.svg" alt="">
                                                            <span>Standard Savings</span>
                                                        </div>
                                                        <div>
                                                            <span>180,000</span>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <img class="mr-2" width="30" height="30"
                                                                src="images/icons/dollar-savings-icon.svg" alt="">
                                                            <span>Dollar Savings</span>
                                                        </div>
                                                        <div>
                                                            <span>40,000</span>
                                                        </div>

                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <img class="mr-2" width="30" height="30"
                                                                src="images/icons/target-savings-icon.svg" alt="">
                                                            <span>Target Savings</span>
                                                        </div>
                                                        <div>
                                                            <span>30,000</span>
                                                        </div>

                                                    </li>
                                                    <li class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <img class="mr-2" width="30" height="30"
                                                                src="images/icons/vault-savings-icon.svg" alt="">
                                                            <span>Vault Savings</span>
                                                        </div>
                                                        <div>
                                                            <span>400,000</span>
                                                        </div>

                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- <div class="col-12 text-center font-weight-bold">
                                                <span style="color:#8691b4;">Total Savings :</span> <span class="font-size-16">
                                                    <span style="text-decoration-line: line-through; text-decoration-style: double;">N</span>
                                                    650,000</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="chart-content text-center">
                                            <div class="row">
                                                <div class="card-header mt-3 border-0">
                                                    <h4 class="card-title">Transaction History</h4>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="transaction-table users-data-table">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0 table-responsive-sm">
                                                                <thead class="users-data-table-head-container">
                                                                    <tr role="row">
                                                                        <th rowspan="1" colspan="1">S/N</th>
                                                                        <th class="sorting_disabled" rowspan="1"
                                                                            colspan="1" style="width: 149.078px;">
                                                                            Transaction ID</th>
                                                                        <th class="sorting_disabled" rowspan="1"
                                                                            colspan="1" style="width: 240.062px;">
                                                                            User</th>
                                                                        <th class="sorting_disabled" rowspan="1"
                                                                            colspan="1" style="width: 191.906px;">
                                                                            Transaction Date</th>
                                                                        <th class="sorting_disabled" rowspan="1"
                                                                            colspan="1" style="width: 232.891px;">
                                                                            Category</th>
                                                                        <th class="sorting_disabled" rowspan="1"
                                                                            colspan="1" style="width: 185.062px;">Amount
                                                                        </th>
                                                                        <th class="sorting_disabled" rowspan="1"
                                                                            colspan="1" style="width: 232.891px;">
                                                                            Transaction Type</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>1</td>
                                                                        <td>D-SAVE-0001</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>02-03-2023</td>
                                                                        <td><span
                                                                                class="badge badge-dollar-savings">Dollar
                                                                                Savings</span></td>
                                                                        <td>$20,000</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-danger">Withdrawn</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>2</td>
                                                                        <td>S-SAVE-04091</td>
                                                                        <td>
                                                                            <a href="user-profile.html"
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
                                                                        <td>01-02-2023</td>
                                                                        <td><span class="badge badge-dollar-savings">
                                                                                Dollar Savings</span></td>
                                                                        <td>$1,850</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-success">Received</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>3</td>
                                                                        <td>V-SAVE-0021</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>10-03-2023</td>
                                                                        <td><span class="badge badge-standard-savings">
                                                                                Standard Savings</span></td>
                                                                        <td>&#8358;15,280</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-success">Received</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>4</td>
                                                                        <td>S-SAVE-0096</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>24-02-2023</td>
                                                                        <td><span class="badge badge-standard-savings">
                                                                                Standard Savings</span></td>
                                                                        <td>&#8358;110,000</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-danger">Withdrawn</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>5</td>
                                                                        <td>T-SAVE-0490</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>10-03-2023</td>
                                                                        <td><span
                                                                                class="badge badge-vault-savings">Vault
                                                                                Savings</span></td>
                                                                        <td>&#8358;200,000</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-danger">Withdrawn</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>6</td>
                                                                        <td>D-SAVE-0034</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>02-01-2023</td>
                                                                        <td><span
                                                                                class="badge badge-dollar-savings">Dollar
                                                                                Savings</span></td>
                                                                        <td>$19,000</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-success">Received</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>7</td>
                                                                        <td>T-SAVE-0031</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>02-03-2023</td>
                                                                        <td><span
                                                                                class="badge badge-target-savings">Target
                                                                                Savings</span></td>
                                                                        <td>&#8358;816,927</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-danger">Withdrawn</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>8</td>
                                                                        <td>V-SAVE-0501</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>02-03-2023</td>
                                                                        <td><span class="badge badge-vault-savings">
                                                                                Vault Savings</span></td>
                                                                        <td>&#8358;20,000</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-success">Received</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>9</td>
                                                                        <td>S-SAVE-0641</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>02-02-2023</td>
                                                                        <td><span class="badge badge-standard-savings">
                                                                                Standard Savings</span></td>
                                                                        <td>&#8358;94,250</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-danger">Withdrawn</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr data-toggle="modal"
                                                                        data-target="#transactionDetailsModal">
                                                                        <td>10</td>
                                                                        <td>S-SAVE-0482</td>
                                                                        <td>
                                                                            <a href=" user-profile.html"
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
                                                                        <td>26-02-2023</td>
                                                                        <td><span class="badge badge-target-savings">
                                                                                Target Savings</span></td>
                                                                        <td>&#8358;20,000</td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-success">Received</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-4">
                                                <div class="col-sm-12 col-md-5 text-left">
                                                    <div role="status" aria-live="polite">Showing 1 to 10 of 45 entries
                                                    </div>
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

    <?php
    include('modules/modals.php');
    include('modules/footer-script.php');
    ?>
</body>

</html>