<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo URL; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <!-- Header -->
    <?php include 'view/header/index.php'; ?>
    <!-- End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 p-menu-sidebar-p">
                <div class="p-menu-sidebar">
                    <ul>
                        <li>
                            <a href="profile">پیشخوان</a>
                        </li>
                        <li>
                            <a href="profile/wallet">کیف پول</a>
                        </li>
                        <li>
                            <a href="profile/orders">سفارش های من</a>
                        </li>
                        <li>
                            <a href="profile/personal_info">اطلاعات حساب</a>
                        </li>
                        <li>
                            <a href="users/logout" class="text-danger">خروج</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-12 p-main-p">
                <div class="p-main">