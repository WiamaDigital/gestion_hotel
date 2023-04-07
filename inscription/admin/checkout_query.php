<?php
	require_once '../connect.php';
	$time = date("H:i:s");
	$conn->query("UPDATE book SET `checkout_time` = '$time', `status` = 'Quitter' WHERE book_id = '$_REQUEST[book_id]'") or die(mysqli_error());
	header("location:checkout.php");
?>