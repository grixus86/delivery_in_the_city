<?php
//require 'connect_db.php';
?>
<html>
    <head>
        <title>Trang đăng ký</title>
        <link href="css/login.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div id="wp-form-login">
            <h1 class="page_title">Đăng ký tài khoản</h1>
            <form id="form-login" action="" method="post">
                <input type="text" name="name" id="username" placeholder="Họ và tên" />
                <input type="text" name="email" id="username" placeholder="Email" />
                <input type="text" name="address" id="username" placeholder="Địa chỉ" />
                <input type="number" name="phone" id="username" placeholder="Số điện thoại" />
                <input type="password" name="password" id="password" placeholder="Mật khẩu" />
                <input type="password" name="confirmpass" id="password" placeholder="Xác nhận mật khẩu" />
                <button id="btn-login" name="signin">Đăng ký</button>
            </form>
            <a href="" id="lost-pass">Quên mật khẩu?</a>
            <br>
            <a href="login.php" id="lost-pass">Đăng nhập ngay !</a>
        </div>
    </body>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_logistic");
    mysqli_set_charset($conn, "utf8");
    $ERR = '';
    if (isset($_POST['signin']) && $_POST["name"] != '' && $_POST["email"] != '' && $_POST["address"] != '' && $_POST["phone"] != '' && $_POST["password"] != '') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirmpass = $_POST["confirmpass"];


        $sql = "SELECT * FROM `member` WHERE email = '$email'";
        $old = mysqli_query($conn, $sql);
        //  $password = md5($password); ma hoa pass

        if (mysqli_num_rows($old) > 0 || $password != $confirmpass) {
            $ERR = "Đăng ký thất bại !";
            echo "$ERR";exit;
        } else {
            $xuly = mysqli_query($conn, "INSERT INTO `member` (`id`, `name`, `email`, `address`,`phone`, `password`) VALUES (NULL, '$name', '$email', '$address','$phone','$password')");
            // $sql = "INSERT INTO user (username,password,sdt) VALUES ('$username','$password','$sdt')";
            // mysqli_query($conn,$sql);
            $ERR = "Đăng ký thành công!";
            echo "$ERR";
            exit;
        }
    } else {
//        header("location:Signup.php");
    }
    ?>