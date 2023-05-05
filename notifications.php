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

        <div class="content-body notifications-content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card profile_chart">
                                    <div class="card-body">

                                        <div class="row mb-4 p-1">
                                            <div class="card-header mt-3 border-0 w-100 pl-0">
                                                <h4 class="card-title">
                                                    Notification History</h4>
                                                <a href="#" id="new-user--btn" class="btn btn-sm shadow-0"
                                                    data-toggle="modal" data-target="#create-new-notification-modal"><i
                                                        class="fa fa-plus pr-1"></i>
                                                    New Notification</a>
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
                                                                        Notification ID</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 240.062px; text-align:left;">
                                                                        Sender</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 240.062px; text-align:left;">
                                                                        Subject</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 191.906px;">
                                                                        Date</th>
                                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                        style="width: 185.062px;">
                                                                        Message
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>1</td>
                                                                    <td>N-0001</td>
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
                                                                    <td> Happy New Month!</td>
                                                                    <td>02-03-2023</td>
                                                                    <td>We Wish you a happy new month and a better
                                                                        experience.</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>2</td>
                                                                    <td>N-04091</td>
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
                                                                    <td>Service Upgrade</td>
                                                                    <td>01-02-2023</td>
                                                                    <td>Dear Users, There would be a short maintenance.
                                                                    </td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>3</td>
                                                                    <td>N-0021</td>
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
                                                                    <td>Happy Holidays</td>
                                                                    <td>10-03-2023</td>
                                                                    <td>Merry Christmas and a prosperous new year!</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>4</td>
                                                                    <td>N-0096</td>
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
                                                                    <td>Beware of Scam!</td>
                                                                    <td>24-02-2023</td>
                                                                    <td>We would never ask of your details.</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>5</td>
                                                                    <td>N-0490</td>
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
                                                                    <td>Bonus Offer.</td>
                                                                    <td>10-03-2023</td>
                                                                    <td>Pay with verve card and get 50% off.</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>6</td>
                                                                    <td>N-0034</td>
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
                                                                    <td>Celebrate with Friends</td>
                                                                    <td>02-01-2023</td>
                                                                    <td>Tag a friend and also tag us on IG lets see your
                                                                        wonderful moments.</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>7</td>
                                                                    <td>N-0031</td>
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
                                                                    <td>Refer A Friend And Earn Bonuses.</td>
                                                                    <td>02-03-2023</td>
                                                                    <td>For every friend you refer you get bonus.</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>8</td>
                                                                    <td>N-0501</td>
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
                                                                    <td>Akiba City Contest!</td>
                                                                    <td>02-03-2023</td>
                                                                    <td>Join the contest on IG, Youtube and Twitter!
                                                                    </td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>9</td>
                                                                    <td>N-0641</td>
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
                                                                    <td>Celebrating Our Customer Of The Year.</td>
                                                                    <td>02-02-2023</td>
                                                                    <td>Our customer of the year is @Favour_Riley</td>
                                                                </tr>
                                                                <tr data-toggle="modal"
                                                                    data-target="#view-notification-modal">
                                                                    <td>10</td>
                                                                    <td>N-0482</td>
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
                                                                    <td>Celebrate With Us!</td>
                                                                    <td>26-02-2023</td>
                                                                    <td>Akiba @10</td>
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