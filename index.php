<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <!-- css link -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- swiper style link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

  <title>Accueil</title>

  <style>
    .custom-bg {
      background-color: #2ec1ac;
      color: var(--body-color);
    }

    .custom-bg:hover {
      background-color: #279e8c;
      color: var(--body-color);
    }

    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: Relative;
    }

    @media screen and (max-width:575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>

</head>

<body>
  <!-- menu inclus -->
  <?php include("menu.php") ?>



  <!-- home section start -->

  <!-- slide section  start-->

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>

    </div>
    <div class="carousel-inner mainSliders">
      <div class="carousel-item active c-item">
        <img src="./images/homePage/home-bg-3.jpg" class="d-block w-100 c-img " alt="image">
        <div class="contenus">
        <h3>À propos de nous</h3>
        <p>L'alliance entre le charme marocain et le confort moderne est désormais fusionnelle.</p>
      </div>
      </div>
      <div class="carousel-item  c-item">
        <video src="./images/videos/sliderVed1.mp4" autoplay loop muted class="d-block w-100 c-img"></video>
      </div>
      <div class="carousel-item  c-item">
        <video src="./images/videos/sliderVed2.mp4" autoplay loop muted class="d-block w-100 c-img"></video>

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

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class='mb-4'>vérifier la disponibilité</h5>
        <form action="">
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">check in</label>
              <input type="date" class='form-control shadow-none'>
            </div>


            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">check out</label>
              <input type="date" class='form-control shadow-none'>
            </div>


            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500">Adulte</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>


            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500">Enfant</label>
              <select class="form-select shadow-none">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn  shadow-none custom-bg ">submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>



  <!-- partie packs start -->

  <section class="packs">
    <h1 class="heading">Nos packs</h1>

    <div class="box-container">
      <div class="box">
        <img class='img' src="images/homePage/sport1.jpeg" alt="">
        <h3>PACK SPORTIF</h3>
      </div>

      <div class="box">
        <img class='img' src="images/homePage/yoga2.jpeg" alt="">
        <h3>DETENTE SPA & YOGA</h3>
      </div>

      <div class="box">
        <img class='img' src="images/homePage/summer3.jpeg" alt="">
        <h3>SUMMER</h3>
      </div>

      <div class="box">
        <img class='img' src="images/homePage/val1.jpeg" alt="">
        <h3>SAINT-VALENTIN</h3>
      </div>

    </div>

    <div class="box-btn">
      <a href="./packages.php">
        voir plus
        <span></span>
        <span></span>
        <span></span>
        <span></span>

      </a>
    </div>

  </section>


  <!-- partie packs end -->

  <!-- partie chambres start -->

  <section class="home-room">
    <h1 class="heading">Chambres &amp Suites</h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/chambres/jardin/chambre jardin.jpg" alt="">
        </div>
        <div class="content">
          <h3>Chambres</h3>
          <p>Contemplez dès votre réveil une vue sensationnelle sur l'océan, la piscine ou le jardin. Nos chambres luxueuses sont parfaites pour les couples, les familles et les groupes. Goûtez à la détente absolue dans l'un de nos cinq types de chambres dont les généreux espaces ont été conçus pour combler vos moindres besoins.</p>

          <div class="box-btn">
            <a href="./reservation/room/home_room.php">
              Découvrir
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/homePage/suites.jpg" alt="">
        </div>
        <div class="content">
          <h3>Suites</h3>
          <p>Nos suites haut de gamme sont idéales si vous aimez prendre vos aises, si vous êtes une famille nombreuse ou si vous voulez goûter au confort absolu, le tout avec une vue à couper le souffle sur l'océan scintillant, nos jardins enchanteurs ou notre parcours de golf luxuriant.</p>

          <div class="box-btn">
            <a href="./reservation/room/home_room.php">
              Découvrir
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- partie chambres end -->

  <!-- partie restaurant start -->
  <section class="home-room">
    <h1 class="heading">Café & Restaurant</h1>

    <div class="box-container">


      <div class="box">
        <div class="image">
          <img src="images/resto/cafe index.jpg" alt="">
        </div>
        <div class="content">
          <h3>Café</h3>
          <p>
          Tea time,
          Venez profiter d'un thé à la menthe accompagné de pâtisseries marocaines délicieusement préparées qui vous feront savourer chaque instant.
          </p>          
          <div class="box-btn">
            <a href="./reservation/resto/resto.php">
              Découvrir
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>
      </div>
      

      <div class="box">
        <div class="image">
          <img src="images/resto/resto.jpg" alt="">
        </div>
        <div class="content">
          <h3>Restaurant</h3>
          <p>
          Savourez le meilleur de la gastronomie italienne et Marocaine dans notre restaurant à ambiance décontractée.
          </p>          
          <div class="box-btn">
            <a href="./reservation/resto/resto.php">
              Découvrir
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- partie restaurant end -->

    <!-- partie activities start -->

    <section class="home-room">
    <h1 class="heading">Activités &amp Excursions</h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/activite/acivite.jpeg" alt="">
        </div>
        <div class="content">
          <h3>Activités</h3>
          <p>Nos activités à Dakhla sont parfaites pour les amateurs de sports nautiques ou de sensations fortes dans le Sahara. Essayez le surf ou le stand-up paddle sur les eaux cristallines de la baie de Dakhla, ou explorez les dunes de sable en buggy et en kite-surf pour une expérience unique et inoubliable.</p>
          <div class="box-btn">
            <a href="./reservation/activite/activ.php?#activites">
              Découvrir
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/activite/excursion.jpg" alt="">
        </div>
        <div class="content">
          <h3>Excursions</h3>
          <p>Nos excursions dans le désert de Dakhla sont parfaites si vous êtes attiré par la vie de nomade, si vous souhaitez vivre une expérience authentique dans le Sahara, en parcourant les dunes de sable à dos de chameau et en dormant sous les étoiles scintillantes.</p>
          <div class="box-btn">
            <a href="./reservation/activite/activ.php?#excursions">
              Découvrir
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- partie activities end -->

  <!-- about section  start -->

  <section class="home-aPropos">
    <div class="videoContainer">
      <video src="./images/videos/about.mp4" class="videoD" autoplay muted loop></video>
    </div>
    <div class="contenu-aPropos">
      <h3>Pourquoi nous ?</h3>
      <p>Evadez-vous loin du tumulte de la vie quotidienne. L’occasion
        de faire une pause, dans une nature préservée, face à l’océan.</p>
      <div class="box-btn left-btn">
        <a href="./about.php">
          voir plus
          <span></span>
          <span></span>
          <span></span>
          <span></span>

        </a>
      </div>
  </section>

  <!-- about section  end -->



  <!-- footer inclus -->
  <?php include("footer.php") ?>


  <!-- swiper script link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


  <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</body>

</html>