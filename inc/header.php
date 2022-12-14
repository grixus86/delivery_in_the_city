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
                                    <li style="float: left"><a style="text-decoration: none" href="?page=info_account" title="Th??ng tin c?? nh??n">Th??ng tin t??i kho???n</a></li>
                                    <li style="float: left"><a style="text-decoration: none" href="./login/logout.php" title="Tho??t">Tho??t</a></li>
                                </ul>
                            </div>
                        <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?page=home" title="">Trang ch???</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Gi???i thi???u</a>
                                </li>
                                <li>
                                    <a href="?page=order_check" title="">Tra c???u ????n h??ng</a>
                                </li>
                                <li>
                                    <a href="./priceship/index.php" title="">B???ng gi??</a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul id="main-menu" class="clearfix">
                                <li>
                                    <a href="?page=home" title="">Trang ch???</a>
                                </li>
                                <li>
                                    <a href="?page=category_product" title="">Gi???i thi???u</a>
                                </li>
                                <li>
                                    <a href="?page=order_check" title="">Tra c???u ????n h??ng</a>
                                </li>
                                <li>
                                    <a href="./priceship/index.php" title="">B???ng gi??</a>
                                </li>
                                <li>
                                    <a href="./login/login.php" title="">????ng nh???p</a>
                                </li>
                                <li>
                                    <a href="./login/signin.php" title="">????ng k??</a>
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
                            <span class="title">H??? tr??? tr???c tuy???n</span>
                            <span class="phone">000.000.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>