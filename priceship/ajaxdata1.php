<?php 
include_once 'config.php';

if (isset($_POST['districtto_id'])) {
	$query = "SELECT * FROM ward where d_id=".$_POST['districtto_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Chọn Quận/Huyện</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['ward_name'].'</option>';
		 }
	}else{
		echo '<option>Không có phường/xã</option>';
	}

}
?>