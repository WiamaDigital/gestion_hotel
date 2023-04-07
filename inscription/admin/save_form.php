<?php
	require_once '../connect.php';
	if(ISSET($_POST['add_form'])){
		$room_no = $_POST['room_no'];
		$days = $_POST['days'];
		$query = $conn->query("SELECT * FROM book WHERE `room_no` = '$room_no' && `status` = 'Enregistrer'") 
    or die(mysqli_error());
		$row = $query->num_rows;
		$time = date("H:i:s");
		if($row > 0){
			echo "<script>alert('Hébergement non disponible')</script>";
		}else{
			$query2 = $conn->query("SELECT * FROM book NATURAL JOIN user_form NATURAL JOIN rooms NATURAL JOIN pack WHERE book_id = '$_REQUEST[book_id]'") or die(mysqli_error());
			$fetch2 = $query2->fetch_array();
			$total = $fetch2['prix'] * $days;
      $total2 = $fetch2["price"] * $days;
      $totals = $total + $total2;
			$checkout = date("Y-m-d", strtotime($fetch['checkin']."+".$days."DAYS"));
			$conn->query("UPDATE book SET `room_no` = '$room_no', `days` = '$days',  `status` = 'Enregistrer', `checkin_time` = '$time', `checkout` = '$checkout', `total` = '$totals' WHERE `book_id` = '$_REQUEST[book_id]'") or die(mysqli_error());
			header("location:checkin.php");
		}
	}
?>