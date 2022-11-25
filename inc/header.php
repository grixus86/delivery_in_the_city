<!DOCTYPE html>
<html>
    <head>
        <title>247Logistic</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="header-wp">
            <div id="head-top" class="clearfix">
                <div class="wp-inner">
                    <div id="main-menu-wp" class="fl-right">
                        <?php
                        session_start();
                        if (isset($_SESSION['user'])) {
//                            echo "Hello " . $_COOKIE['cookieUser'] . "<br>"
                            ?>
                            <?= $_SESSION['user'] ?>
                            <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                                <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <div id="thumb-circle" class="fl-left">
                                    </div>
                                </button>
                                
                                <ul>
                                    <li style="float: left"><a style="text-decoration: none" href="?page=info_account" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                                    <li style="float: left"><a style="text-decoration: none" href="./login/logout.php" title="Thoát">Thoát</a></li>
                                </ul>
                            </div>
                        <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?page=home" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="?page=order_check" title="">Tra cứu đơn hàng</a>
                                </li>
                                <li>
                                    <a href="./priceship/index.php" title="">Bảng giá</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?page=home" title="">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="?page=order_check" title="">Tra cứu đơn hàng</a>
                                </li>
                                <li>
                                    <a href="./priceship/index.php" title="">Bảng giá</a>
                                </li>
                                <li>
                                    <a href="./login/login.php" title="">Đăng nhập</a>
                                </li>
                                <li>
                                    <a href="./login/signin.php" title="">Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div id="head-body" class="clearfix">
                <div class="wp-inner">
                    <a href="?page=home" title="" id="logo" class="fl-left"><img src="public/images/truckicon.png"/></a>
                    <div id="action-wp" class="fl-right">
                        <div id="advisory-wp" class="fl-left">
                            <span class="title">Hỗ trợ trực tuyến</span>
                            <span class="phone">000.000.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>