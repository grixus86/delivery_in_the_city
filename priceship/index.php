<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ước tính phí giao hàng tự động</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form class="d_block" action="" method="post">
            <?php
            include_once 'config.php';
            $query = "SELECT * FROM district Order by district_name";
            $result = $db->query($query);
            ?>
            <div class="container" style="width: 350px; margin: 0px auto" >
                <div class="row">
                    <div class="">
                        <h2><strong>Ước tính phí</strong> <strong style="color: rgb(224, 120, 0)">tự động</strong></h2>
                        <form class="d_block" action="" method="post">
                            <h4>1,Chọn vị trí của bạn</h4>
                            <div class="form-group">
                                <label for="email">Chọn Quận/Huyện</label>
                                <select name="" id="district" class="form-control" onchange="Fetchward(this.value)"  required>
                                    <option value="">Chọn Quận/Huyện</option>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value=' . $row['id'] . '>' . $row['district_name'] . '</option>';
                                        }
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Chọn Phường/Xã</label>
                                <select name="ward" id="ward" class="form-control" >
                                    <option>Chọn Phường/Xã</option>
                                </select>
                            </div>
                            <?php
                            include_once 'config.php';
                            $query = "SELECT * FROM district Order by district_name";
                            $result = $db->query($query);
                            ?>
                            <div class="container" style="width: 350px;">
                                <div class="row">
                                    <div class="">

                                        <h4>2,Gửi hàng đến</h4>
                                        <div class="form-group">
                                            <label for="districto">Chọn Quận/Huyện</label>
                                            <select name="" id="districtto" class="form-control" onchange="Fetchwardto(this.value)"  required>
                                                <option value="">Chọn Quận/Huyện</option>
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value=' . $row['id'] . '>' . $row['district_name'] . '</option>';
                                                    }
                                                }
                                                ?> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="wardto">Chọn Phường/Xã</label>
                                            <select name="wardto" id="wardto" class="form-control">
                                                <option>Chọn Phường/Xã</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function Fetchwardto(id) {
                                    $('#wardto').html('');
                                    $.ajax({
                                        type: 'post',
                                        url: 'ajaxdata1.php',
                                        data: {districtto_id: id},
                                        success: function (data) {
                                            $('#wardto').html(data);
                                        }
                                    })
                                }
                            </script>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function Fetchward(id) {
                    $('#ward').html('');
                    $.ajax({
                        type: 'post',
                        url: 'ajaxdata.php',
                        data: {district_id: id},
                        success: function (data) {
                            $('#ward').html(data);
                        }
                    })
                }
            </script>
            <button class="btn_price" name="est">Nhận báo giá</button>
        </form>
    </body>
    <?php
    $list_price = array();
    $conn = mysqli_connect("localhost", "root", "", "db_logistic");
    mysqli_set_charset($conn, "utf8");
    if (isset($_POST["est"]) && $_POST["ward"] != '' && $_POST["wardto"] != '') {
        $ward = $_POST["ward"];

        $wardto = $_POST["wardto"];
        $ERR = '';

        $sql = "SELECT * FROM `price_ship` WHERE `ward` = '$ward' AND `wardto` = '$wardto' || `ward` = '$wardto' AND `wardto` = '$ward'";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) > 0) {
            $list_price = array();
            if (mysqli_num_rows($user) > 0) {
                while ($row = mysqli_fetch_assoc($user)) {
                    $list_price[] = $row;
                }
            }
        } else {
            $ERR = "Giá chưa được cập nhật !";
            echo $ERR;
        }
    }
    ?>
    <?php
    $temp = 0;
    foreach ($list_price as &$row) {
        $temp++;
        ?>
        <div class="price">
            <?php if ($ward = $_POST["ward"] && $wardto = $_POST["wardto"]) { ?>
<!--                <br>
                <p>Địa chỉ gửi hàng :<strong style="color: rgb(224, 120, 0)"> <?= $row['from'] ?></strong></p>
                <br>
                <hr>
                <p>Địa chỉ giao hàng :<strong style="color: rgb(224, 120, 0)"> <?= $row['to'] ?></strong></p>-->
            <?php } else {
                ?>
<!--                <br>
                <p>Địa chỉ gửi hàng :<strong style="color: rgb(224, 120, 0)"> <?= $row['to'] ?></strong></p>
                <br>
                <hr>
                <p>Địa chỉ giao hàng :<strong style="color: rgb(224, 120, 0)"> <?= $row['form'] ?></strong></p>-->
            <?php } ?>
            <br>
            <hr>
            <p>Chi phí ước tính : <strong style="color: rgb(224, 120, 0)"><?= number_format($row['money']) ?></strong> đ</p>
            <br>
            <hr>
        </div>
        <?php
    }
    ?>
    <br>
    <a href="../index.php" style="text-decoration: none"><button class="btn_price">Trở về trang chủ</button></a>
</html>
