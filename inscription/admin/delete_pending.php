<?php
	require_once '../connect.php';
	$conn->query("DELETE FROM book WHERE book_id = '$_REQUEST[book_id]'") or die(mysqli_error());
	header("location:admin.php");
?>