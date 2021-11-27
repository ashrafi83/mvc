<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بازیابی رمز عبور</title>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 forgot-password-form-box">
                <div class="alert alert-warning massage-form" role="alert"></div>

                <form id="forgot-password-form">
                    <input type="email" placeholder="ایمیل" name="email">
                    <button type="submit" class="btn btn-primary">ارسال لینک به ایمیل</button>
                </form>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12"></div>
        </div>
    </div>

    <script src="public/js/forgot_password.js"></script>
</body>
</html>