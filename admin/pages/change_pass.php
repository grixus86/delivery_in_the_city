    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php
session_start();
if (!empty($_SESSION['current_user'])) {
    ?>
    <?php
    $id = 1;
    $conn = mysqli_connect("localhost", "root", "", "db_logistic");
    mysqli_set_charset($conn, "utf8");
    if (mysqli_connect_error()) {
        echo "Connect Fail: " . mysqli_connect_error();
    } else {
//    echo "success";
    }
    if (isset($_POST["change"]) && $_POST["oldpass"] != '') {
        $oldpass = $_POST["oldpass"];
        $newpass = $_POST["newpass"];
        $confirmpass = $_POST["confirmpass"];
        $ERR = '';
        $sql = "SELECT * FROM `admin_login` WHERE password ='$oldpass'";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) > 0) {
            $result = mysqli_fetch_assoc($user);
            $_SESSION['current_user'] = $result;
            if ($newpass = $confirmpass) {
                $sql = "UPDATE `admin_login` SET `password` = '{$confirmpass}' WHERE  `id` = {$id}";
                if (mysqli_query($conn, $sql)) {
                    $alert['success'] = "Cập nhật dữ liệu thành công !";
                } else {
                    echo "Lỗi " . mysqli_error($conn);
                }
            }
        }
        $ERR = "Sai mật khẩu,  vui lòng nhập lại !!";
    }
    ?>
    <?php
} else {
    ?>
    <body>
        <strong>Bạn cần <a href="./login/login.php">đăng nhập</a> để sử dụng chức năng này !!</strong>
    </body>
<?php } ?>
<div id = "main-content-wp" class = "change-pass-page">
    <div class = "section" id = "title-page">
        <div class = "clearfix">
            <a href = "?page=add_cat" title = "" id = "add-new" class = "fl-left">Thêm mới</a>
            <h3 id = "index" class = "fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class = "wrap clearfix">
        <div id = "sidebar" class = "fl-left">
            <ul id = "list-cat">
                <li>
                    <a href = "?page=info_account" title = "">Cập nhật thông tin</a>
                </li>
                <li>
                    <a href = "?page=list_order" title = "">Thoát</a>
                </li>
            </ul>
        </div>
        <div id = "content" class = "fl-right">
            <div class = "section" id = "detail-page">
                <div class = "section-detail">
                    <form method = "POST" action="">
                        <label for = "old-pass">Mật khẩu cũ</label>
                        <input type = "password" name = "oldpass" id = "pass-old">
                        <label for = "new-pass">Mật khẩu mới</label>
                        <input type = "password" name = "newpass" id = "pass-new">
                        <label for = "confirm-pass">Xác nhận mật khẩu</label>
                        <input type = "password" name = "confirmpass" id = "confirm-pass">
                        <button type = "submit" name = "change" id = "btn-submit">Cập nhật</button>
                        <br>
                        <div class="alert alert-primary" role="alert">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



