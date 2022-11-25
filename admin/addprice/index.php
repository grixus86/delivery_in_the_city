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
                        <h2><strong style="color: #4fa327">Thêm phí giao hàng</strong></h2>
                        <form class="d_block" action="" method="post">
                            <h4>1,Chọn vị trí giao</h4>
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
                                            <br>
                                            <label for="money">Giá tiền</label>
                                            <input name="money" id="wardto" class="form-control">
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

            <button class="btn_price" name="est">Thêm đơn giá</button>
        </form>
    </body>

    <?php
    if (isset($_POST['est'])) {
        $error = array();
        $alert = array();
        if (empty($_POST['ward'])) {
            $error['ward'] = "Không được để trống điểm gửi";
        } else {
            $ward = $_POST['ward'];
        }

        if (empty($_POST['wardto'])) {
            $error['wardto'] = "Không được để trống điểm giao";
        } else {
            $wardto = $_POST['wardto'];
        }

        if (empty($_POST['money'])) {
            $error['money'] = "Không được để trống giá ship";
        } else {
            $money = $_POST['money'];
        }

        if (empty($error)) {
            $sql = "INSERT INTO `price_ship` (`ward`, `wardto`, `money`)"
                    . "VALUES ('{$ward}', '{$wardto}', '{$money}')";
            if (mysqli_query($db, $sql)) {
                $alert['success'] = "Thêm giá ship thành công !!";
            } else {
                echo "Lỗi" . mysqli_error($conn);
            }
        }
        if (!empty($alert['success'])) {
            ?>  
            <br>
            <div class="price"><strong><p class="success"><?php echo $alert['success'] ?></strong></p></div>
                <?php
            }
        }
        ?>

</html>
