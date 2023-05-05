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
                    <li class="breadcrumb-item active" aria-current="page"><a href="admin-profile.html">Admin
                            Profile</a>
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
                                                <a class="dropdown-item" href="#edit-profile-modal"
                                                    data-toggle="modal"><i class="fa-solid fa-pen-to-square"></i>Edit
                                                    Profile</a>
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
                                                <div class="personal-details-title">User Type</div>
                                                <div class="personal-details-desc"><span
                                                        class="badge badge badge-super-admin">Super Admin</span></div>
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
                                                <div class="personal-details-desc">No 1, Mira road, Surulere.</div>
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