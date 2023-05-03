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
        <div class="login auth authentication">
            <div class="auth-cols bg-white">
                <div class="auth-content">
                    <div class="auth-form">
                        <div class="mini-logo text-center mb-5">
                            <a href="index.php">
                                <img src="./images/logo/akiba-tribe.png" alt="Akiba Logo">
                            </a>
                        </div>
                        <div class="form-container mb-5">
                            <div class="text-center mb-4 pb-1">
                                <h3 class="login-header">Welcome back 👋</h3>
                                <p class="login-subtext">Sign into your account below</p>
                            </div>
                            <form method="post" name="myform" class="" action="dashboard.php">
                                <div class="logged-in--account">
                                    <div class="avatar-image">
                                        <span class="initials">AA</span>
                                    </div>
                                    <p class="mb-0">i**@adegbengaagoro.co</p>
                                    <div class="close-btn">
                                        <button type="button" class="close" aria-label="close">
                                            <svg width="22" height="22" class="close-icon" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="login-button text-center">
                                    <button type="submit" class="btn btn-secondary btn-block">Log in</button>
                                </div>
                                <div class="forgot-password text-center mt-4">
                                    <p class="mb-0"><a class="text-link forgot-password--link"
                                            href="password-reset.php">Forgot password?</a></p>
                                </div>
                                <div class="change-login--details text-center mt-4">
                                    <span class="need-help-text">Not you?</span>
                                    <br><a class="text-link" href="login.php">Login with a different account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auth-cols-2">
                <div class="auth-content">
                    <img class="auth-image" src="./images/auth-image.svg" alt="">
                    <p class="auth-image--text">Get more from your money with smart ways to save and tailored advice</p>
                </div>
            </div>
        </div>
    </div>

    <?php include('modules/footer-script.php'); ?>

</body>

</html>