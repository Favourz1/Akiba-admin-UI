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
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
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
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Total Referrals</p>
                                                    <strong>7,300,00</strong>
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
                                                    <p class="mb-1">Successful Registered Users</p>
                                                    <strong>20,102</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Pending Registered Users</p>
                                                    <strong>45</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">New Users Today
                                                    </p>
                                                    <strong>38</strong>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-6 col-6">
                                                <div class="chart-stat">
                                                    <p class="mb-1">Non-registerred Users Referred</p>
                                                    <strong>450,000</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4 p-1">
                                            <div class="card-header mt-3 border-0 w-100 pl-0">
                                                <h4 class="card-title">
                                                    Transaction History</h4>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="transaction-table users-data-table">
                                                    <div class="table-responsive">
                                                        <table class="table mb-0 table-responsive-sm">
                                                            <thead class="users-data-table-head-container">
                                                                <tr role="row">
                                                                    <th rowspan="1" colspan="1" style="width: 12px;">S/N
                                                                    </th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 149.078px;">
                                                                        Referral ID</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 240.062px; text-align:left;">
                                                                        Referred By</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 240.062px; text-align:left;">
                                                                        Referred User</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 191.906px;">
                                                                        Date</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 185.062px;">
                                                                        Amount
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>REF-0001</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>02-03-2023</td>
                                                                    <td>&#8358;20,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>REF-04091</td>
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>01-02-2023</td>
                                                                    <td>&#8358;1,850</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>REF-0021</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>10-03-2023</td>
                                                                    <td>&#8358;15,280</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>REF-0096</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>24-02-2023</td>
                                                                    <td>&#8358;110,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>REF-0490</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>10-03-2023</td>
                                                                    <td>&#8358;200,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>REF-0034</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>02-01-2023</td>
                                                                    <td>&#8358;19,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>REF-0031</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>&#8358;816,927</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>REF-0501</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>02-03-2023</td>
                                                                    <td>&#8358;20,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>REF-0641</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>02-02-2023</td>
                                                                    <td>&#8358;94,250</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>REF-0482</td>
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>
                                                                        <a href="user-profile.html"
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
                                                                    <td>26-02-2023</td>
                                                                    <td>&#8358;20,000</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5 d-flex">
                                                <div role="status" aria-live="polite">Showing 1 to 10 of 45
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

    <?php
    include('modules/modals.php');
    include('modules/footer-script.php');
    ?>
</body>

</html>