

<?php
session_start();
if (!empty($_SESSION['current_user'])) {
    ?>
    <?php
    include 'connect_db.php';
    $sql = "SELECT * FROM `ship_order`";
    $result = mysqli_query($conn, $sql);
    $list_order = array();
    $param = "";
    $sortParam = "";
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $list_order[] = $row;
        }
    }
    foreach ($list_order as &$order) {
        $order['url_update'] = "?page=change_order&id={$order['id']}";
        $order['url_delete'] = "?page=delete&id={$order['id']}";
    }
    ?>
    <?php
## tim kiem
//$search = isset($_GET['name']) ? $_GET['name'] : "";
//
//if ($search) {
//    $where = "WHERE `name` LIKE'%" . $search . "%'";
//}
//
//if ($search) {
//    $list_order = mysqli_query($conn, "SELECT * FROM `ship_order` where (" . $where . ")");
//} else {
//    $list_order = mysqli_query($conn, "SELECT * FROM `ship_order` ORDER BY `id` DESC LIMIT ");
//}
//
//if (!empty($_GET['action']) && $_GET['action'] == 'search' && !empty($_POST)) {
//    $_SESSION['order_filter'] = $_POST;
//}
//if (!empty($_SESSION['order_filter'])) {
//    $where = "";
//    foreach ($_SESSION['order_filter'] as $fiel => $value) {
//        if (!empty($value)) {
//            switch ($fiel) {
//                case 'name':
//                    $where = "`" . $fiel . "` LIKE '%" . $value . "%'";
//                    break;
//            }
//        }
//    }
//    extract($_SESSION['order_filter']);
//}
//if (!empty($where)) {
//    $order = mysqli_query($conn, "SELECT * FROM `ship_order` where (" . $where . ")");
//} else {
//    $order_name = mysqli_query($conn, "SELECT * FROM `ship_order` ORDER BY `id` DESC LIMIT ");
//}
    ?>
    <div id="main-content-wp" class="list-product-page">
        <div class="wrap clearfix">
            <?php require 'inc/sidebar.php'; ?>
            <div id="content" class="fl-right">
                <div class="section" id="title-page">
                    <div class="clearfix">
                        <h3 id="index" class="fl-left">Danh sách đơn hàng</h3>
                    </div>
                </div>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <!--                        <form method="GET" class="form-s fl-right">
                                                    <input type="text" name="name"  value="">
                                                    <input type="submit" name="" value="Tìm kiếm">
                                                </form>-->

                        <div class="table-responsive">
                            <table class="table list-table-wp">
                                <thead>
                                    <tr>
                                        <td><span class="thead-text">STT</span></td>
                                        <td><span class="thead-text">Họ và tên</span></td>
                                        <td><span class="thead-text">Số điện thoại</span></td>
                                        <td><span class="thead-text">Địa chỉ gửi</span></td>
                                        <td><span class="thead-text">Loại mặt hàng</span></td>
                                        <td><span class="thead-text">Địa chỉ giao hàng</span></td>
                                        <td><span class="thead-text">Tổng tiền</span></td>
                                        <td><span class="thead-text">Ngày tạo</span></td>
                                        <td><span class="thead-text">Trạng thái</span></td>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <?php
                                    $temp = 0;
                                    foreach ($list_order as &$order) {
                                        $temp++;
                                        ?>
                                        <tr>
                                            <td><span class="tbody-text"><h3><?php echo $temp ?></h3></span>
                                            <td><span class="tbody-text"><?= $order['name'] ?></h3></span>
                                            <td><span class="tbody-text"><?= $order['phone'] ?></span></td>
                                            <td><span class="tbody-text"><?= $order['address'] ?></span></td>
                                            <td><span class="tbody-text"><?= $order['item'] ?></span></td>
                                            <td><span class="tbody-text"><?= $order['addressto'] ?></span>kg</td>
                                            <td><span class="tbody-text"><?= number_format($order['money']) ?> đ</span></td>
                                            <td><span class="tbody-text"><?= $order['created_time'] ?></span></td>
                                            <td><span class="tbody-text"><?php if ($order['status'] == 1) { ?>
                                                        <a href="#" style="color: #029ef3"><strong>Duyệt</strong></a>
                                                    <?php } elseif ($order['status'] == 2) { ?>
                                                        <a href="#" style="color: #029ef3"><strong>Đang lấy hàng</strong></a>
                                                    <?php } elseif ($order['status'] == 3) { ?>
                                                        <a href="#" style="color: green"><strong>Hoàn thành</strong></a>
                                                    <?php } elseif ($order['status'] == 4) { ?>
                                                        <a href="#" style="color: grey"><strong>Đã hủy</strong></a>
                                                    <?php } ?>
                                                </span></td>
                                            <td>
                                                <ul class="list-operation fl-right">
                                                    <li><a href="<?php echo $order['url_update']; ?>" title="Sửa" style="color: blue" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo $order['url_delete']; ?>" title="Xóa" style="color: black" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="section" id="paging-wp">
                    <div class="section-detail clearfix">
                        <div class="filter-wp clearfix">
                            <ul class="post-status fl-left">
                                <li class="all"><a href="">Tất cả <span class="count">(<?php echo $num_rows ?>)</span></a> |</li>
                                <li class="pending"><a href="">Đã duyệt<span class="count">(0)</span> |</a></li>
                                <li class="pending"><a href="">Thùng rác<span class="count">(0)</span></a></li>
                            </ul>

                        </div>
                        <ul id="list-paging" class="fl-right">
                            <li>
                                <a href="" title=""><</a>
                            </li>
                            <li>
                                <a href="?page=list_order&pages=1" title="">1</a>
                            </li>
                            <li>
                                <a href="?page=list_order&pages=2" title="">2</a>
                            </li>
                            <li>
                                <a href="?page=list_order&pages=2" title="">3</a>
                            </li>
                            <li>
                                <a href="" title="">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    ?>
    <body>
        <strong>Bạn cần <a href="./login/login.php">đăng nhập</a> để sử dụng chức năng này !!</strong>
    </body>
<?php } ?>

