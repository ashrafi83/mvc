<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عضویت</title>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 register-form-box">
                <div class="alert alert-warning massage-form" role="alert"></div>

                <form id="register-form">
                    <input type="text" placeholder="نام" name="first_name">
                    <input type="text" placeholder="نام خانوادگی" name="last_name">
                    <input type="email" placeholder="ایمیل" name="email" style="text-align: right;">
                    <input type="text" placeholder="نام کاربری" name="username">
                    <input type="password" placeholder="رمز عبور" name="password">
                    <input type="password" placeholder="تکرار رمز عبور" name="re_password">
                    <br><br>
                    <button type="submit" class="btn btn-primary">عضویت</button>
                </form>

                <div class="text-center" style="margin-top: 15px;">
                    <a href="users/login" class="text-center">ورود</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12"></div>
        </div>
    </div>

    <script src="public/js/register.js"></script>
</body>
</html>