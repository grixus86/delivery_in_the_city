<?php
//require 'connect_db.php';
?>
<html>
    <head>
        <title>Trang đăng nhập</title>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page_title">Đăng nhập <br> admin 247</h1>
            <form id="form-login" action="" method="post">
                <input type="text" name="username" id="username" placeholder="Username" />
                <input type="password" name="password" id="password" placeholder="password" />
                <button id="btn-login" name="login">Đăng nhập</button>
            </form>
            <a href="" id="lost-pass">Quên mật khẩu?</a>
        </div>
    </body>

    <?php
    session_start();
    require 'url.php';
    $conn = mysqli_connect("localhost", "root", "", "db_logistic");
    mysqli_set_charset($conn, "utf8");
    if (isset($_POST["login"]) && $_POST["username"] != '' && $_POST["password"] != '') {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $ERR = '';
        $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password ='$password'";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) > 0) {
            $result = mysqli_fetch_assoc($user);
            $_SESSION['current_user'] = $result;
            redirect("../index.php");
        } else {
            $ERR = "Sai tên tài khoản hoặc mật khẩu !";
            echo $ERR;
        }
    }
    ?>