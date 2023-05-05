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

        <div class="content-body users-content-body">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-12 mb-4">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm btn-secondary shadow-0 font-size-14"
                                style="min-width: 113px; padding: 8px 10px;" data-toggle="modal"
                                data-target="#add-new-user"><i class="fa fa-plus pr-1"></i> New User</a>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header d-flex align-items-start mb-3 pl-0">
                                    <h4 class="card-title">Admin Users</h4>
                                    <a href="#" id="new-user--btn" class="btn btn-sm shadow-0" data-toggle="modal" data-target="#add-new-user"><i class="fa fa-plus pr-1"></i>
                                        New User</a>
                                    <!-- <div class="card-body w-100">
                                        <form action="">
                                            <div class="form-row align-items-center">
                                                <div class="card-body-title mr-2">Sort</div>
                                                <div class="form-group col-1 mb-0">
                                                    <select class="form-control px-1">
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-3 mb-0">
                                                    <select class="form-control px-1">
                                                        <option value="" disabled selected>Sort By Order</option>
                                                        <option value="ascending">Ascending</option>
                                                        <option value="descending">Descending</option>
                                                    </select>
                                                </div>
                                                <div class="input-group col-5 mb-0">
                                                    <input type="text" class="form-control" placeholder="Search">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" style="background: var(--color-secondary); color: white;"><i class="fa fa-search"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->
                                </div>
                                <div class="users-data-table mb-5">
                                    <table class="table user-list" id="datatable-basic">
                                        <thead class="users-data-table-head-container">
                                            <tr>
                                                <th rowspan="1" colspan="1">S/N</th>
                                                <th rowspan="1" colspan="1">Name</th>
                                                <th rowspan="1" colspan="1">Email</th>
                                                <th rowspan="1" colspan="1">Role</th>
                                                <th rowspan="1" colspan="1">Gender</th>
                                                <th rowspan="1" colspan="1" class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <img alt="User Image" src="images/avatar-1.png">
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Jorja
                                                                Smith</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">jorjasmith@gmail.com</td>
                                                <td><span class="badge badge-super-admin">Super Admin</span></td>
                                                <td class="text-muted">Female</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <div class="avatar-initials" style="background: #ff9922; color: #333;">
                                                                <span class="avatar-initials-text">CA</span>
                                                            </div>
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Chris
                                                                Attoh</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">chrisattoh@gmail.com</td>
                                                <td><span class="badge badge-admin">Admin</span></td>
                                                <td class="text-muted">Male</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <img alt="User Image" src="images/avatar-2.png">
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Lyda
                                                                Moose</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">lydamoose19@gmail.com</td>
                                                <td><span class="badge badge-super-admin">Super Admin</span></td>
                                                <td class="text-muted">Female</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <img alt="User Image" src="images/avatar-7.png">
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Mike
                                                                Orogun</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">orogunmike@gmail.com</td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td class="text-muted">Male</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <div class="avatar-initials" style="background: #ff87be; color: #333;">
                                                                <span class="avatar-initials-text">SO</span>
                                                            </div>
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Somto
                                                                Obafemi</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">somtoobafemi1999@gmail.com</td>
                                                <td><span class="badge badge-admin">Admin</span></td>
                                                <td class="text-muted">Male</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <img alt="User Image" src="images/avatar-3.png">
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Chioma
                                                                Nathaniel</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">chiomzzybae@gmail.com</td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td class="text-muted">Female</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <div class="avatar-initials" style="background:#1fd9139e; color: #333;">
                                                                <span class="avatar-initials-text">RL</span>
                                                            </div>
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Richard
                                                                Long</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">richyyy@gmail.com</td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td class="text-muted">Male</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <div class="avatar-initials" style="background: #77ff2266; color: #333;">
                                                                <span class="avatar-initials-text">CO</span>
                                                            </div>
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Cynthia
                                                                Ola</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">cynthiaola@gmail.com</td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td class="text-muted">Female</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <img alt="User Image" src="images/avatar-6.png">
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Daniel
                                                                Aboya</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">danboya@gmail.com</td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td class="text-muted">Male</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <a href="admin-profile.html" class="user-name-cell">
                                                        <div class="user-avatar-wrapper">
                                                            <img alt="User Image" src="images/avatar-8.png">
                                                        </div>
                                                        <div class="user-name-wrap">
                                                            <span class="align-self-start mb-0 user-name">Clement
                                                                Obusola</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-muted">obusola.clement@gmail.com</td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td class="text-muted">Male</td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn dropdown-toggle" id="more-option" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="more-option">
                                                            <a class="dropdown-item" href="admin-profile.html"><i class="fas fa-eye" aria-hidden="true"></i>View</a>
                                                            <a class="dropdown-item" href="#"><i class="fas fa-lock" aria-hidden="true"></i>Disable</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-sm-12 col-md-5">
                                    <div role="status" aria-live="polite">Showing 1 to 10 of 45 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7 d-flex justify-content-end">
                                    <div class="">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="datatable-basic_previous"><a href="#" aria-controls="datatable-basic" data-dt-idx="0" tabindex="0" class="page-link"><i class="fas fa-angle-left"></i></a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="datatable-basic" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                            <li class="paginate_button page-item next disabled" id="datatable-basic_next"><a href="#" aria-controls="datatable-basic" data-dt-idx="2" tabindex="0" class="page-link"><i class="fas fa-angle-right"></i></a></li>
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

    <?php
    include('modules/modals.php');
    include('modules/footer-script.php');
    ?>
</body>

</html>