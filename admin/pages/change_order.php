<?php
include 'connect_db.php';
$id = (int) $_GET['id'];
?>
<?php
if (isset($_POST['btn_update'])) {
    $error = array();
    $alert = array();
    if (empty($_POST['name'])) {
        $error['name'] = "Không được để trống name";
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['phone'])) {
        $error['phone'] = "Không được để trống số điện thoại";
    } else {
        $phone = $_POST['phone'];
    }
    if (empty($_POST['address'])) {
        $error['address'] = "Không được để trống địa chỉ";
    } else {
        $address = $_POST['address'];
    }
    if (empty($error)) {
        $sql = "UPDATE `ship_order` SET `name` = '{$name}', `phone` = '{$phone}', `address` = '{$address}'  WHERE  `id` = {$id}";
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = "Cập nhật dữ liệu thành công !";
        } else {
            echo "Lỗi " . mysqli_error($conn);
        }
    } else {
    }
}
$sql = "SELECT * FROM `ship_order` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_assoc($result);

if (isset($_POST['status'])) {
    $status = $_POST['status'];
    mysqli_query($conn, "UPDATE ship_order SET status = '$status' WHERE id = $id");
    
}
?>

<div id="main-content-wp" class="info-account-page">
    <div class="wrap clearfix">
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <?php
                    if (!empty($alert['success'])) {
                        ?>
                        <p class="success"><?php echo $alert['success'] ?> </p>
                        <?php
                    }
                    ?>
                    <form  method="POST">
                        <label for="name">Họ và tên</label>
                        <input type="text" name="name" id="name" value="<?php if (!empty($item['name'])) echo $item['name'] ?>">
                        <?php
                        if (!empty($error['name'])) {
                            ?>
                            <p class="error"><?php echo $error['name'] ?></p>
                            <?php
                        }
                        ?>
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="name" value="<?php if (!empty($item['phone'])) echo $item['phone'] ?>">
                        <?php
                        if (!empty($error['phone'])) {
                            ?>
                            <p class="error"><?php echo $error['phone'] ?></p>
                            <?php
                        }
                        ?>
                        <label for="address">Địa chỉ gửi hàng</label>
                        <input type="text" name="address" id="name" value="<?php if (!empty($item['address'])) echo $item['address'] ?>">
                        <?php
                        if (!empty($error['address'])) {
                            ?>
                            <p class="error"><?php echo $error['address'] ?></p>
                            <?php
                        }
                        ?>
                        <select name="status">
                            <option value="0">Tác vụ</option>
                            <option value="1">Duyệt</option>
                            <option value="2">Đang lấy hàng</option>
                            <option value="3">Hoàn Thành</option>
                            <option value="4">Bỏ vào thùng rác</option>
                        </select>
                        <button type="submit" name="btn_update" id="">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>