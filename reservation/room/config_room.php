<?php 

  $conn = new mysqli('localhost','root','','gt_hotel');
  if ($conn -> connect_error) {
    die ('connection echouée'.$conn->connect_error);
  }

?>