<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- Header -->
    <?php include 'view/header/index.php'; ?>
    <!-- End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 login-form-box">
                <div class="alert alert-warning massage-form" role="alert"></div>

                <form id="login-form">
                    <input type="text" placeholder="نام کاربری" name="username">
                    <input type="password" placeholder="رمز عبور" name="password" id="input-password">
                    <div style="display: flex;margin-top: 15px;">
                        <div style="width: 50%;text-align:right;">
                            <button type="submit" class="btn btn-primary">ورود</button>
                            <a href="users/register" class="text-primary" style="margin-right: 15px;">عضویت</a>
                        </div>
                        <div style="width: 50%;text-align:left;margin-top: 5px;">
                            <a href="users/forgotPassword" style="font-size: 12px;" class="text-secondary">رمز عبور خود را فراموش کردید؟</a>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12"></div>
        </div>
    </div>

    <script src="public/js/login.js"></script>
</body>
</html>