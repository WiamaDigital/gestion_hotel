<?php

include("config_room.php");
$book = $_GET['book'];


$sql = "select * from rooms where id_heberg='$book'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$id_heberg =  $row['id_heberg'];
$type_heberg =  $row['type_heberg'];
$prix =  $row['prix'];
$id_heberg =  $row['id_heberg'];
$type_heberg =  $row['type_heberg'];
$name_heberg = $row['name_heberg'];
$name_vue = $row['name_vue'];
$surface = $row['surface'];
$prix =  $row['prix'];

// recuperation des packs 

$sql2 = "SELECT * FROM pack";
$result2 = mysqli_query($conn,$sql2);

?>


<!DOCTYPE html>
<html>


<head>
  <meta charset="UTF-8">
  <title>Ciseniros - Réservation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Linking Bootstrap css file -->
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/bootstrap.min.css">
  <!-- Linking Main Css file -->
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/animate.css">
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/stylef.css">
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/color.css">
  <link rel="stylesheet" type="text/css" href="../../css/formstyle/responsive.css">


  <link rel="stylesheet" type="text/css" href="css/popup.php">
</head>


<body>

  <div class="wrapper">










    <section>

      <?php
      // echo$on;
      // echo$tw;
      // echo$th;
      // echo$fu;
      // echo $fi;
      // echo$si;
      // echo $se;
      // echo$ei;


      ?>
      <div class="block">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="res-dates">





              <div class="select-rooms">
                  <h3 class="res-title">Select Rooms</h3>
                  <div class="rom-details">
                    <h3>Room Type </h3>
                    <h2><?php echo $type_heberg; ?></h2>

                    <ul>
                      <li>
                        <span>Services</span>
                        <b>Gratuits</b>
                      </li>

                      <li>
                        <span>nom de <?php echo $type_heberg; ?>: </span><br/>
                        <b><?php echo $name_heberg ?></b>
                      </li>

                      <li>
                        <span>Vue </span>
                        <b><?php echo $name_vue ?></b>
                      </li>

                      <li>
                        <span>Surface </span>
                        <b><?php echo $surface ?></b>
                      </li>

                      <li>
                        <span>price</span>
                        <b><?php echo $prix . '.00'; ?></b>

                      </li>

                    </ul>
                  </div>

                  <div class="total-bill">
                    <h3>Grand Total</h3>
                    <b><?php echo $prix . '.00'; ?></b>
                  </div><!--total-bill end-->
                </div>
              </div><!--res-dates end-->
            </div>
            <div class="col-md-8">
              <div class="billing-details">
                <h2>Billing details</h2>
                <div class="billing-form">
                  <form action="" method='post'> 
                    <div class="row">

                      <div class="col-md-6">
                        <label>
                          <h3>TITRE <span>*</span></h3>
                          <select name="titre" id="">
                            <option value="M.">M.</option>
                            <option value="Mme.">Mme.</option>
                            <option value="Mlle.">Mlle.</option>
                          </select>
                        </label>
                      </div>

                      <div class="col-md-6">
                        <label>
                          <h3>PRENOM <span>*</span></h3>
                          <input type="text" name="fname" required>
                        </label>
                      </div>

                      <div class="col-md-6">
                        <label>
                          <h3>NOM <span>*</span></h3>
                          <input type="text" name="lname" required>
                        </label>
                      </div>

                      <div class="col-md-12">
                        <label class="sco">
                          <h3>RESIDENCE / ADRESSE <span>*</span></h3>
                          <input type="text" name="address" required>

                        </label>
                      </div>

                      <div class="col-md-6">
                        <label>
                          <h3>EMAIL <span>*</span></h3>
                          <input type="email" name="email" required>
                        </label>
                      </div>
                      <div class="col-md-6">
                        <label>
                          <h3>PACKS <span></span></h3>
                          <select name="pack" id="">
                          <option disabled selected>Selectionnez pack</option>

                          <?php while ($row2 = $result2->fetch_assoc()) {; ?>
                          
                            <option value="<?php echo $row2['id_pack']?>"><?php echo $row2['name_pack']?> / <?php echo $row2['price']?>MAD </option>
                          
                          <?php }; ?>
                          </select>
                        </label>
                      </div>
                      <div class="col-md-6">
                        <label>
                          <h3>DATE D'ARRIVEE <span>*</span></h3>
                          <input type="DATE" name="date_arr" placeholder="entrez une date" required>
                        </label>
                      </div>

                      <div class="col-md-6">
                        <label>
                          <h3>HEURE D'ARRIVEE <span>*</span></h3>
                          <input type="time" name="h_arrive" placeholder="entrez une heure" required>
                        </label>
                      </div>
                      <div class="col-md-6">
                        <label>
                          <h3>NUMERO DE TELEPHONE <span>*</span></h3>
                          <input type="text" name="phone" placeholder="Phone Number" required>
                        </label>
                      </div>
                    </div>
                    <input type="submit" name="submit" class="total-bill" style='border-radius:5px;' />


                    <?php

                    if (isset($_POST['submit'])) {
                      $titre = $_POST['titre'];
                      $fname = $_POST['fname'];
                      $lname = $_POST['lname'];
                      $address = $_POST['address'];
                      $email = $_POST['email'];
                      $date_arr = $_POST['date_arr'];
                      $h_arrive = $_POST['h_arrive'];
                      $phone = $_POST['phone'];
                      $id_pack = $_POST['pack'];



                    try {
                        $sql3 = "INSERT INTO user_book(id_heberg,id_pack,user_title,first_name,last_name,email,residence,tel,h_arrive,date_arr) VALUES('$id_heberg','$id_pack','$titre', '$fname','$lname','$email','$address','$phone','$h_arrive','$date_arr')";
                        mysqli_query($conn, $sql3);
                    } catch (mysqli_sql_exception $e) {
                        echo "Erreur d'insertion : " . $e->getMessage();
                    }
                    
                    
  }
                    

                    ?>



                  </form>

                </div><!--billing-form end-->
              </div><!--billing-details end-->
            </div>
          </div>
        </div>
      </div>
    </section>











  </div><!--wrapper end-->

  <!-- Including Jquery Js File -->
  <!-- <script type="text/javascript" src="http://creativethemes.us/relax/js/jquery.min.js"></script> -->
  <script type="text/javascript" src="../../javaScript/js/jquery.min.js"></script>
  <!-- Including Bootstrap js file -->
  <!-- <script type="text/javascript" src="http://creativethemes.us/relax/js/bootstrap.min.js"></script> -->
  <script type="text/javascript" src="../../javaScript/js/bootstrap.min.js"></script>
  <!-- Custom Js file -->
  <!-- <script type="text/javascript" src="http://creativethemes.us/relax/js/script.js"></script> -->
  <script type="text/javascript" src="../../javaScript/js/script.js"></script>


</body>


<!-- Mirrored from creativethemes.us/relax/reservation.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Sep 2017 15:23:47 GMT -->

</html>