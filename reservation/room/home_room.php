<?php


require('./config_room.php');

$sql = "SELECT * FROM rooms WHERE type_heberg = 'Chambre'";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM rooms WHERE type_heberg = 'Suite'";
$result2 = $conn->query($sql2);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <!-- css link -->
  <link rel="stylesheet" href="../../css/style.css">


  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- swiper style link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>



  <title>chambres et suites</title>

</head>

<body>

  <?php include("./menu.php"); ?>

  <!-- slide section  start-->

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 4"></button>

    </div>
    <div class="carousel-inner mainSliders">
      <div class="carousel-item active c-item">
        <img src="../../images/suite.jpg" class="d-block w-100 c-img" alt="image">
      </div>
      <div class="carousel-item active c-item">
        <img src="../../images/suite.jpg" class="d-block w-100 c-img" alt="image">
      </div>
      <div class="carousel-item active c-item">
        <img src="../../images/suite.jpg" class="d-block w-100 c-img" alt="image">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- slide section  end-->



  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Nos Chambres</h2>
  </div>

  <div class="container mb-5">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">Filters</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <form method="post">
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size:18px">vérifier la disponibilté</h5>
                  <label class="form-label">check in</label>
                  <input type="date" class='form-control shadow-none mb-3' name="date_arr">
                  <label class="form-label">check out</label>
                  <input type="date" class='form-control shadow-none' name="date_sor">
                </div>
                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size:18px">Nombre de personnes</h5>
                  <div class="d-flex">
                    <div class="me-3">
                      <label class="form-label">Adultes</label>
                      <input type="number" class="form-control shadow-none" name="adulte">
                    </div>
                    <div>
                      <label class="form-label">Enfants</label>
                      <input type="number" class="form-control shadow-none" name="child">
                    </div>
                  </div>
                </div>
                <input type="submit" value="Vérifier" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" name="submit_form ">
              </form>
            </div>

          </div>
        </nav>
      </div>


      <div class="col-lg-9 col-md-12 px-4">
        <form action="" method="get">
            <?php while ($row = $result->fetch_assoc()) {; ?>

            <div class="card mb-4 border-0 shadow">

              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                  <img src="../../images/chambres/<?php echo $row["image_heberg"]; ?>" class="img-fluid rounded ">
                </div>
                <div class="col-md-5 px-lg-4 px-md-4 px-0">
                  <h3 class="mb-3"><?php echo $row["name_heberg"]; ?></h3>
                  <div class="features mb-3">
                    <h4 class="mb-1">Caracteristiques</h4>

                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">Vue : <?php echo $row['name_vue']; ?></span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">occupation: 2 adultes et 2 enfants de moins de 11 ans</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">surface: <?php echo $row["surface"]; ?> mètres carrés</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">LITERIE : <?php echo $row["type_lit"]; ?></span>
                  </div>
                  <div class="facilities mb-3">
                    <h4>installations</h4>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">WIFI</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">douche</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">television</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">thé/café</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">coin salon</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">BAIGNOIRE SÉPARÉE</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">SATELLITE OU CÂBLE</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">ROOM SERVICE 24 HEURES SUR 24</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">SÈCHE-CHEVEUX</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">FER À REPASSER</span>
                  </div>
                </div>

                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">

                  <h4 class="mb-4"><?php echo $row["prix"]; ?> MAD / nuit</h4>

                  <a href="./book_form.php?book=<?php echo $row['id_heberg']?>"  class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">reserver maintenant</a>
                </div>
              </div>

            </div>
            <?php }; ?>
        </form>
      </div>

    </div>
  </div>


  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Nos Suites</h2>
  </div>
  <div class="row">
  <div class="col-lg-9 col-md-12 px-4">
        <?php while ($row = $result2->fetch_assoc()) {; ?>

          <div class="card mb-4 border-0 shadow">

            <form action="" method="get">
              <div class="row g-0 p-3 align-items-center">
                <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                  <img src="../../images/chambres/<?php echo $row["image_heberg"]; ?>" class="img-fluid rounded ">
                </div>
                <div class="col-md-5 px-lg-4 px-md-4 px-0">
                  <h3 class="mb-3"><?php echo $row["name_heberg"]; ?></h3>
                  <div class="features mb-3">
                    <h4 class="mb-1">Caracteristiques</h4>

                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">Vue : <?php echo $row['name_vue']; ?></span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">occupation: 2 adultes et 2 enfants de moins de 11 ans</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">surface: <?php echo $row["surface"]; ?> mètres carrés</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">LITERIE : <?php echo $row["type_lit"]; ?></span>
                  </div>
                  <div class="facilities mb-3">
                    <h4>installations</h4>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">WIFI</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">douche</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">television</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">thé/café</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">coin salon</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">BAIGNOIRE SÉPARÉE</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">SATELLITE OU CÂBLE</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">ROOM SERVICE 24 HEURES SUR 24</span></br>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">SÈCHE-CHEVEUX</span>
                    <span style="font-size:11px" class="badge rounded-pill bg-light text-dark text-wrap">FER À REPASSER</span>
                  </div>
                </div>

                <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">

                  <h4 class="mb-4"><?php echo $row["prix"]; ?> MAD / nuit</h4>

                  <a href="../book_form.php?book=<?php echo $row['id_heberg']?>"  class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">reserver maintenant</a>
                </div>
              </div>
            </form>

          </div>
        <?php }; ?>
      </div>
  </div>











  <!-- footer inclus -->
  <?php include("./footer.php"); ?>


  <!-- swiper script link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <!-- <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> -->
  <script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>




</body>

</html>