<!DOCTYPE html>

<html>
    <head>
        <title>Đăng xuất tài khoản</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #user_logout form{
                width: 200px;
                margin: 40px auto;
            }
            #user_logout form input{
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        unset($_SESSION['user']);
        ?>
        <div id="user_logout" class="box-content">
            <h1>Đăng xuất tài khoản thành công</h1>
            <a href="Login.php">Đăng nhập lại</a>|<a href="../index.php">Trang chủ</a>
        </div>
    </body>
</html>