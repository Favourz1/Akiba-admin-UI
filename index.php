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
                            <a href="login.html">
                                <img src="./images/logo/akiba-tribe.png" alt="Akiba Logo">
                            </a>
                        </div>
                        <div class="form-container mb-5">
                            <div class="text-center mb-4 pb-1">
                                <h3 class="login-header">Welcome back 👋</h3>
                                <p class="login-subtext">Log in to your account. New to Akiba? <a class="text-link" href="signup.html">Sign up</a></p>
                            </div>
                            <form method="post" name="myform" class="" action="dashboard.html">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="text" class="form-control" placeholder="Email address" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="login-button text-center">
                                    <a href="dashboard.html" role="button" type="submit" class="btn btn-secondary btn-block">Log
                                        in</a>
                                </div>
                                <div class="forgot-password text-center mt-4">
                                    <p class="mb-0"><a class="text-link forgot-password--link" href="password-reset.html">Forget password?</a></p>
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