

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
                        <h3 id="index" class="fl-left">Danh s??ch ????n h??ng</h3>
                    </div>
                </div>
                <div class="section" id="detail-page">
                    <div class="section-detail">
                        <!--                        <form method="GET" class="form-s fl-right">
                                                    <input type="text" name="name"  value="">
                                                    <input type="submit" name="" value="T??m ki???m">
                                                </form>-->

                        <div class="table-responsive">
                            <table class="table list-table-wp">
                                <thead>
                                    <tr>
                                        <td><span class="thead-text">STT</span></td>
                                        <td><span class="thead-text">H??? v?? t??n</span></td>
                                        <td><span class="thead-text">S??? ??i???n tho???i</span></td>
                                        <td><span class="thead-text">?????a ch??? g???i</span></td>
                                        <td><span class="thead-text">Lo???i m???t h??ng</span></td>
                                        <td><span class="thead-text">?????a ch??? giao h??ng</span></td>
                                        <td><span class="thead-text">T???ng ti???n</span></td>
                                        <td><span class="thead-text">Ng??y t???o</span></td>
                                        <td><span class="thead-text">Tr???ng th??i</span></td>
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
                                            <td><span class="tbody-text"><?= number_format($order['money']) ?> ??</span></td>
                                            <td><span class="tbody-text"><?= $order['created_time'] ?></span></td>
                                            <td><span class="tbody-text"><?php if ($order['status'] == 1) { ?>
                                                        <a href="#" style="color: #029ef3"><strong>Duy???t</strong></a>
                                                    <?php } elseif ($order['status'] == 2) { ?>
                                                        <a href="#" style="color: #029ef3"><strong>??ang l???y h??ng</strong></a>
                                                    <?php } elseif ($order['status'] == 3) { ?>
                                                        <a href="#" style="color: green"><strong>Ho??n th??nh</strong></a>
                                                    <?php } elseif ($order['status'] == 4) { ?>
                                                        <a href="#" style="color: grey"><strong>???? h???y</strong></a>
                                                    <?php } ?>
                                                </span></td>
                                            <td>
                                                <ul class="list-operation fl-right">
                                                    <li><a href="<?php echo $order['url_update']; ?>" title="S???a" style="color: blue" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                    <li><a href="<?php echo $order['url_delete']; ?>" title="X??a" style="color: black" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
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
                                <li class="all"><a href="">T???t c??? <span class="count">(<?php echo $num_rows ?>)</span></a> |</li>
                                <li class="pending"><a href="">???? duy???t<span class="count">(0)</span> |</a></li>
                                <li class="pending"><a href="">Th??ng r??c<span class="count">(0)</span></a></li>
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
        <strong>B???n c???n <a href="./login/login.php">????ng nh???p</a> ????? s??? d???ng ch???c n??ng n??y !!</strong>
    </body>
<?php } ?>

