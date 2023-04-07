<?php

  $conn = new mysqli("localhost", "root", "", "gt_hotel") or die('Erreur dans la connexion ');

class user
{
  public $db;
  public function __construct()
  {
    $this->db = new mysqli("localhost", "root", "", "gt_hotel") or die('There was a problem connecting to the database');
  }

  //registration user 

  public function reg_user($name, $email, $password)
  {
    //$password=md5($password);
    $sql = "SELECT * FROM user_form WHERE mail_user='$email' OR pass_user ='$password'";
    $check = $this->db->query($sql);
    $count_row = $check->num_rows;
    if ($count_row == 0) {
      
      $sql1 = "INSERT INTO user_form values ('','$name' , '$email' ,'$password' )";
      $result = mysqli_query($this->db, $sql1) or die(mysqli_connect_errno() . "Data cannot inserted");
      return $result;
      
    } else {
      return false;
    }
  }

}
