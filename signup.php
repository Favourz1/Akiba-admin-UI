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
                            <a href="signup.html">
                                <img src="./images/logo/akiba-tribe.png" alt="Akiba Logo">
                            </a>
                        </div>
                        <div class="text-center mb-4 pb-2">
                            <h3 class="login-header">Create your Akiba account</h3>
                            <p class="login-subtext">Already have an account? <a class="text-link" href="login.html">Log
                                    in</a></p>
                        </div>
                        <div class="form-container">
                            <form method="post" name="myform" class="" action="otp-verification.html">
                                <div class="form-row">
                                    <div class="form-group col-xl-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="you@example.com"
                                            name="email">
                                    </div>
                                    <div class="form-group col-xl-12">
                                        <label>Password</label>
                                        <div class="password-wrapper mb-3">
                                            <input type="password" class="form-control password" placeholder=""
                                                name="password">
                                            <span class="show-password text-muted fa fa-eye-slash"></span>
                                            <span class="show-password text-dark fa fa-eye hidden"></span>
                                        </div>
                                        <div class="password-instruction"><span
                                                class="fa fa-info-circle pr-1"></span>Password must be 8 characters
                                            minimum, must contain one number minimum, one lowercase character and one
                                            uppercase character</div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-secondary btn-block mt-2">Create
                                        account</button>
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