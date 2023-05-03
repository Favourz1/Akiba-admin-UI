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
                            <a href="signup.php">
                                <img src="./images/logo/akiba-tribe.png" alt="Akiba Logo">
                            </a>
                        </div>
                        <div class="text-center mb-4 pb-2">
                            <h3 class="login-header">Enter 6-digit OTP</h3>
                            <p class="login-subtext">We sent a verification code to your email. Please enter the OTP
                                code below.</p>
                        </div>
                        <div class="form-container">
                            <form method="post" name="myform" class="" action="dashboard.php">
                                <div class="form-row">
                                    <div class="form-group col-xl-12">
                                        <label>OTP Token</label>
                                        <input type="text" class="form-control otp-token" maxlength="6" placeholder=""
                                            name="otp">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="users.php" type="submit" class="btn btn-secondary btn-block mt-2">Validate
                                        OTP Token</a>
                                </div>
                                <div class="password-instruction mt-4 text-center">Didn't get the OTP? <a href=""
                                        type="button" id="resend-otp-button" class="text-link">Resend</a></div>
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