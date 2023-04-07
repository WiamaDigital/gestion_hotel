<?php

session_start();
if(!$_SESSION['login']){
  header('location:../index.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap-grid.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="../../css/style.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- swiper style link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <title>Utilisateur</title>
</head>

<body>
  <div class="all" id="all" style='margin-bottom:100px'>
    <header class="header">
      <a href="#" class="logoPage">Dakhla</a>

      <input type="checkbox" id="menu-bar">
      <label for="menu-bar">Menu</label>

      <nav class="navbarMenu ">
        <ul>
          <li><a href="../logout.php">Se déconnecter</a></li>
        </ul>
      </nav>
    </header>
  </div>

  <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    <h1>Votre reservation</h1>
  </nav>

  <div class="container">
    <table class="table table-hover text-center">
      <thead class='table-dark'>
        <tr>
          <th style='font-size:20px' scope="col">Nom</th>
          <th style='font-size:20px' scope="col">Prénom</th>
          <th style='font-size:20px' scope="col">Email</th>
          <th style='font-size:20px' scope="col">Telephone</th>
          <th style='font-size:20px' scope="col">Type D'hebergement</th>
          <th style='font-size:20px' scope="col">Nom D'hebergement</th>
          <th style='font-size:20px' scope="col">Pack</th>
          <th style='font-size:20px' scope="col">Date</th>
          <th style='font-size:20px' scope="col">Total</th>
          <th style='font-size:20px' scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        // include "connect.php";
        //   $sql="SELECT .... ";
        //   $result=mysqli_query($conn,$sql);
        //   while ($row = mysqli_fetch_assoc($result)){
              ?>

                <tr>
                  <!-- <th scope="row">1</th> -->
                  <td style='font-size:15px'>hafi</td>
                  <td style='font-size:15px'>sofia</td>
                  <td style='font-size:15px'>sofia@gmail.com</td>
                  <td style='font-size:15px'>0601245632</td>
                  <td style='font-size:15px'>chambre</td>
                  <td style='font-size:15px'>deluxe garden view</td>
                  <td style='font-size:15px'>ramadan</td>
                  <td style='font-size:15px'>02-03-2023</td>
                  <td style='font-size:15px'>2074.00</td>
                  <td>
                    <a href="" class="link-dark"><i class="fa-solid fa-pen-to-square 
                    fs-5 me-3"></i></a>
                    <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                  </td>
                </tr>

                <tr>
                  <!-- <th scope="row">1</th> -->
                  <td style='font-size:15px'>el hafiane</td>
                  <td style='font-size:15px'>aya</td>
                  <td style='font-size:15px'>aya@gmail.com</td>
                  <td style='font-size:15px'>0601458732</td>
                  <td style='font-size:15px'>chambre</td>
                  <td style='font-size:15px'>deluxe ocean view</td>
                  <td style='font-size:15px'>Pack sportif</td>
                  <td style='font-size:15px'>21-03-2023</td>
                  <td style='font-size:15px'>3050.00</td>
                  <td>
                    <a href="" class="link-dark"><i class="fa-solid fa-pen-to-square 
                    fs-5 me-3"></i></a>
                    <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                  </td>
                </tr>

                <tr>
                  <!-- <th scope="row">1</th> -->
                  <td style='font-size:15px'>alaoui</td>
                  <td style='font-size:15px'>nizar</td>
                  <td style='font-size:15px'>nizar@gmail.com</td>
                  <td style='font-size:15px'>0645896782</td>
                  <td style='font-size:15px'>suite</td>
                  <td style='font-size:15px'>suite executive</td>
                  <td style='font-size:15px'>summer</td>
                  <td style='font-size:15px'>15-05-2023</td>
                  <td style='font-size:15px'>5000.00</td>
                  <td>
                    <a href="" class="link-dark"><i class="fa-solid fa-pen-to-square 
                    fs-5 me-3"></i></a>
                    <a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                  </td>
                </tr>

                

              <?php


          // }
        ?>

        
      </tbody>
    </table>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
