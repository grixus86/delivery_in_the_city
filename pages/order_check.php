<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<?php
include 'connect_db.php';
if (!$conn) {
    echo"Kết nối không thành công." . mysqli_connect_error();
} else {
//    echo "Kết nối thành công !";
}
?>
<br>
<br>
<div class="md-form active-pink active-pink-2 mb-3 mt-0" style="width: 500px; margin: 0px auto">
    <form method="POST" action="">
        <input class="form-control" type="text" placeholder="Nhập số điện thoại tại đây !" aria-label="Search" name="phonenumber">
        <br>
        <button type="submit" class="btn btn-warning" name="check">Tra cứu !</button>
    </form>
</div>

<?php
if (isset($_POST['check'])) {
    if (isset($_POST["check"]) && $_POST["phonenumber"] != '') {
        $phonenumber = $_POST["phonenumber"];
        $ERR = '';
        $list = array();
        $sql = "SELECT * FROM ship_order WHERE phone = '$phonenumber'";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) > 0) {
            $result = mysqli_fetch_assoc($user);
            $list[] = $result;
        } else {
            $ERR = "Không tồn tại đơn hàng !";
            echo $ERR;
            exit;
        }
    }
    ?>
    <br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Tên</th>
                <th scope="col">Địa chỉ gửi</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Loại hàng</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Thời gian tạo đơn</th>
                <th scope="col">Trạng thái</th>
            </tr>
        </thead>
        <?php
        $temp = 0;
        foreach ($list as &$result) {
            $temp++;
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $result['name'] ?></th>
                    <td><?= $result['address'] ?></td>
                    <td><?= $result['phone'] ?></td>
                    <td><?= $result['item'] ?></td>
                    <td><?= $result['addressto'] ?></td>
                    <td><?= $result['money'] ?></td>
                    <td><?= $result['created_time'] ?></td>
                    <td><?php if ($result['status'] == 1) { ?>
                            <strong>Duyệt</strong>
                        <?php } elseif ($result['status'] == 2) { ?>
                            <strong>Đang lấy hàng</strong>
                        <?php } elseif ($result['status'] == 3) { ?>
                            <strong>Đã giao</strong>
                        <?php } elseif ($result['status'] == 4) { ?>
                            <strong>Đã hủy</strong>
                        <?php } ?>
                    </td>
                </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
<?php } ?>


