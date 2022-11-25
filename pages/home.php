

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
    <link href="../public/responsive.css" rel="stylesheet" type="text/css"/>
</head>

<!--content-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./public/images/delivery3.jpg" class="d-block w-100" alt="..." width="1903" height="500">
            <div class="carousel-caption d-none d-md-block">
                <h5>Giao nhanh trong 1 tiếng !</h5>
                <p>WHEN IF ABSOLUTELY, POSITIVELY HAS TO BE THERE OVERNIGHT</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./public/images/delivery2.jpg" class="d-block w-100" alt="..."width="1903" height="500">
            <div class="carousel-caption d-none d-md-block">
                <h5>Giao nhanh trong 1 tiếng !</h5>
                <p>WHEN IF ABSOLUTELY, POSITIVELY HAS TO BE THERE OVERNIGHT</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./public/images/delivery3.jpg" class="d-block w-100" alt="..."width="1903" height="500">
            <div class="carousel-caption d-none d-md-block">
                <h5>Giao nhanh trong 1 tiếng !</h5>
                <p>WHEN IF ABSOLUTELY, POSITIVELY HAS TO BE THERE OVERNIGHT</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php
include 'connect_db.php';
if (isset($_POST['btn_reg'])) {
    if (isset($_SESSION['user'])) {
        $error = array();
        $alert = array();
        #Kiểm tra fullname
        if (empty($_POST['name'])) {
            $error['name'] = "Không được để trống tên người gửi";
        } else {
            $name = $_POST['name'];
        }
        //checkname
        if (empty($_POST['address'])) {
            $error['address'] = "Không được để trống địa chỉ";
        } else {
            $address = $_POST['address'];
        }
        if (empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống số điện thoại";
        } else {
            $phone = $_POST['phone'];
        }
        if (empty($_POST['item'])) {
            $error['item'] = "Không được để trống loại mặt hàng";
        } else {
            $item = $_POST['item'];
        }
        if (empty($_POST['addressto'])) {
            $error['addressto'] = "Không được để trống địa chỉ người nhận";
        } else {
            $addressto = $_POST['addressto'];
        }
        if (empty($_POST['money'])) {
            $error['money'] = "Không được để trống tiền hàng";
        } else {
            $money = $_POST['money'];
        }
        if (empty($_POST['from_name'])) {
            $err['from_name'] = "Bạn phải chọn quận";
        } else {
            $from_name = $_POST['from_name'];
        }
        if (empty($_POST['to_name'])) {
            $err['to_name'] = "Bạn phải chọn quận";
        } else {
            $to_name = $_POST['to_name'];
        }
        if (empty($_POST['from'])) {
            $err['from'] = "Bạn phải chọn phường";
        } else {
            $from = $_POST['from'];
        }
        if (empty($_POST['to'])) {
            $err['to'] = "Bạn phải chọn phường";
        } else {
            $to = $_POST['to'];
        }
        $from_name = $_POST['from_name'];
        $to_name = $_POST['to_name'];
        $id_from = $_POST['from'];
        $id_to = $_POST['to'];

        if (empty($error)) {
            $sql = "INSERT INTO `ship_order` (`name`, `address`, `phone`, `item`,`addressto`, `money`)"
                    . "VALUES ('{$name}', '{$address}', '{$phone}', '{$item}', '{$addressto}', '{$money}')";
            if (mysqli_query($conn, $sql)) {
                $sqli = "SELECT * FROM `price_logistic` WHERE `from_name` = '$from_name' AND `id_from` = '$id_from' AND `to_name` = '$to_name' AND `id_to` = '$id_to'";
                $user = mysqli_query($conn, $sqli);
                if (mysqli_num_rows($user) > 0) {
                    $list_price = array();
                    while ($row = mysqli_fetch_assoc($user)) {
                        $list_price[] = $row;
                        echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Tạo đơn hàng thành công-----------Giá ship của bạn là : ";
                        echo number_format($row['price']);
                        echo "-----------Tổng giá trị đơn hàng của bạn là : ";
                        echo number_format($row['price'] + $money);
                    }
                } else {
                    $ERR = "Giá chưa được cập nhật !";
                    echo $ERR;
                }
//                $alert['success'] = "Thành công ";
            } else {
                echo "Lỗi" . mysqli_error($conn);
            }
        }
    } else {
        echo 'Bạn cần đăng nhập để tạo đơn hàng !';
    }
}
?>
<div class="bg-content">
    <h1>TẠO ĐƠN HÀNG</h1>
    <div class="content">


        <div class="receive form" >

            <?php
            if (!empty($alert['success'])) {
                ?>
    <!--                <p class="success"><?php echo $alert['success'] ?></p>-->
    <?php
}
?>

            <form method="POST" id="form_reg">
                <h1>THÔNG TIN NHẬN HÀNG</h1>
                <div class="input-box">
                    <input type="text" name="name" placeholder="Họ và tên người gửi" id="name">
                    <?php
                    if (!empty($error['name'])) {
                        ?>
                        <p class="error"><?php echo $error['name'] ?></p>
    <?php
}
?>
                </div>
                <br>
                <div class="input-box">
                    <input type="text" placeholder="Điện thoại" name="phone" id="phone">
                    <?php
                    if (!empty($error['phone'])) {
                        ?>
                        <p class="error"><?php echo $error['phone'] ?></p>
    <?php
}
?>
                </div>
                <br>
                <div class="input-box">
                    <?php include 'from.php'; ?>
                    <br>
                    <br>
                    <input type="text" placeholder="Địa chỉ gửi cụ thể" name="address" id="address">
                    <?php
                    if (!empty($error['address'])) {
                        ?>
                        <p class="error"><?php echo $error['address'] ?></p>
    <?php
}
?>
                </div>
        </div>
        <div class="delivery form">
            <h1>THÔNG TIN GIAO HÀNG</h1>
            <br><br>
            <div class="input-box">
                <input type="text" placeholder="Loại mặt hàng" name="item" id="item">
                <?php
                if (!empty($error['item'])) {
                    ?>
                    <p class="error"><?php echo $error['item'] ?></p>
    <?php
}
?>
            </div>
            <br>
            <div class="input-box">
                <input type="text" placeholder="Tiền hàng (Nhập số)" name="money" id="money">
                <?php
                if (!empty($error['money'])) {
                    ?>
                    <p class="error"><?php echo $error['money'] ?></p>
    <?php
}
?>
            </div>
            <br>
            <div class="input-box">
                <?php include 'to.php'; ?>
                <br>
                <br>
                <input type="text" placeholder="Địa chỉ nhận cụ thể " name="addressto" id="addressto">
                <?php
                if (!empty($error['addressto'])) {
                    ?>
                    <p class="error"><?php echo $error['addressto'] ?></p>
    <?php
}
?>
            </div>
            <br>
            <div class="btn-box">
                <button type="submit" name="btn_reg">
                    Thêm đơn hàng
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

