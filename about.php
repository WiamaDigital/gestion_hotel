<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/aboutStyle.css">




  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- swiper style link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">


  <title>Â propos</title>
  <style>
    .swiper {
      max-width: 57%;
      height: 500px;


    }

    .swiper-wrapper {
      align-items: center;
    }

    .swiper-slide {
      width: 340px;
      border-radius: 7px;
      height: 80%;
      margin-top: -30px;
    }

    .swiper-slide img {
      width: 100%;
      height: 100%;
      border-radius: 7px;
    }

    .swiper-slide-active {
      transform: scale(1.2);
      transition: 1s;
    }

    .info {
      width: 100%;
      padding: 8px 0;
      background: rgba(0, 0, 0, 0.4);
      position: absolute;
      bottom: 0;
      text-align: justify;
      border-radius: 0 0 5px 5px;

    }

    .info h1 {
      font-size: 20px;
      text-align: center;
      font-weight: 360;
      color: whitesmoke;
      text-transform: initial;
      margin-bottom: 10px;

    }

    .info h4 {
      font-size: 15px;
      margin-left: 20px;
      font-weight: 100;
      color: beige;
      margin-bottom: 2px;

    }
    .info i {
      color:  #eae8dc;
      margin-right: 3px;
    }

    @media screen and (max-width : 695px) {
      .swiper-slide {
        width: 100%;
        height: 70%;
  
      
      }
    }
  </style>
</head>

<body>
  <?php include('./menu.php') ?>

  <div class="about">
    <div class="aboutImage">
      <div class="contenus">
        <h3>À propos de nous</h3>
        <p>L'alliance entre le charme marocain et le confort moderne est désormais fusionnelle.</p>
      </div>
    </div>
    <article class="aboutContainer">
      <div class="imageRcp">

        <img src="./images/about/recpHotel.jpeg" alt="Reception Hôtel">
      </div>
      <div class="aboutText">
        <h2>Dakhla Hotel</h2>
        <p>Evadez-vous loin du tumulte de la vie quotidienne.
          L’occasion de faire une pause, dans une nature préservée, face à l’océan.</p>
        <p>Perdu entre les eaux de l’Atlantique et le Sahara,
          Dakhla est un petit bout de paradis au sud du Maroc qui offre
          des conditions de vent exceptionnelles accompagnées du soleil
          tout au long de l’année.</p>
        <p>Réservez dès maintenant dans le resort le plus emblématique
          du Maroc sur la côte atlantique et profitez d'un voyage inédit
          avec des activités en plein air et un moment magique au Spa &
          Hammam. Vivez la grandeur du resort avec ses restaurants et
          bars animés et ses lieux de divertissement eclectiques.
          Profitez de remises allant jusqu'à 20 % sur votre séjour avec
          petit-déjeuner offert et 20 % sur vos soins Spa et bien–être.</p>
        </p>
      </div>
    </article>

    <article class="aboutServices">
      <h1 class="heading-title">
        Services &amp; commodités
      </h1>
      <div class="text">
        <p>
          À l'<strong>Hotel Dakhla</strong> , nous savons que chaque client est spécial, c'est pourquoi
          nous proposons une grande variété de services pour nous adapter aux besoins éventuels de tous nos clients.
          Nous avons une connexion Wi-Fi gratuite dans toutes nos installations afin que vous puissiez rester connecté à tout moment.
        </p>
        <p>
          Notre réception est ouverte 24 heures sur 24 avec un personnel très sympathique et hautement qualifié pour rendre votre séjour
          encore plus incroyable, en vous aidant dans tout ce dont vous avez besoin. En cas de besoin,
          nous proposons un service de <strong>bagagerie</strong>. Un <strong>petit-déjeuner continental</strong>
          gratuit est offert à nos clients, y compris : fruits de saison, bagels, pain grillé, une variété de céréales, jus de fruits frais,
          café, thé et autres boissons.
        </p>
      </div>
      <div class="box-contenus">

        <div class="sous-box">
          <img src="./images/services/reception.png" alt="">
          <h3>Réception ouverte 24h/24.</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/roomservice.png" alt="">
          <h3>Service en chambre</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/resto.png" alt="">
          <h3>café de l'hôtel</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/noSmoking.png" alt="">
          <h3>Environnement sans tabac</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/bagagge.png" alt="">
          <h3>consignation de bagagges</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/bookss.png" alt="">
          <h3>bibliothéque</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/surf.png" alt="">
          <h3>activités aquatiques</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/gym.png" alt="">
          <h3>salle de sport</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/pets.png" alt="">
          <h3>animaux autorisés</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/wheelchair.png" alt="">
          <h3 class="longText">installations pour les personnes à mobilité réduite</h3>
        </div>
        <div class="sous-box">
          <img src="./images/services/resto.png" alt="">
          <h3>café &amp; restaurant</h3>
        </div>


        <div class="sous-box">
          <img src="./images/services/wifilogo.png" alt="">
          <h3 class="longText">Le WiFi est disponible dans toutes les zones.</h3>
        </div>
      </div>
    </article>

    <article class="contact" id="contact">
      <div class="contactInfo">
        <h1 class="heading-title">
          Nous contacter
        </h1>
        <div class="text">
          <p>Nous sommes là pour vous aider. Contactez-nous pour obtenir plus
            d'informations sur notre resort, la réservation des chambres, des restaurants,
            du spa ou des activités, les navettes, les excursions ou toute autre question.
          </p>
        </div>
        <div class="contactDetail">
          <p>
            <span>Adresse :</span>
            <span>Dakhla hotel, Route de Dakhla, 71000 Dakhla, Maroc</span>
          </p>
          <p>
            <span>E-mail :</span>
            <span>reservation@dakhlahotel.com</span>
          </p>
          <p>
            <span>Télèphone :</span>
            <span>+212 555781224</span>
          </p>
        </div>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/about/concierge.png" alt="">
            <div class="info">
              <h1>Renseignements sur l'expéeience conierge</h1>
              <h4><i class="fa-regular fa-envelope" ></i> concierge@dakhlahotel.com</h4>
              <h4><i class="fa fa-phone"></i> +212 555146879</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="./images/about/spa.jpeg" alt="">
            <div class="info">
              <h1>Renseignements sur le Spa et le fitness</h1>
              <h4><i class="fa-regular fa-envelope" ></i> spa@dakhlahotel.com</h4>
              <h4><i class="fa fa-phone"></i> +212 555175648</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="./images/about/surfing.jpg" alt="">
            <div class="info">
              <h1>Renseignements sur les sports aquatiques</h1>
              <h4><i class="fa-regular fa-envelope" ></i> surfing@dakhlahotel.com</h4>
              <h4><i class="fa fa-phone"></i> +212 555234578</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="./images/about/chef.jpg" alt="">
            <div class="info">
              <h1>Renseignements sur le restaurants </h1>
              <h4><i class="fa-regular fa-envelope"></i> chef@dakhlahotel.com</h4>
              <h4><i class="fa fa-phone"></i> +212 555187546</h4>
            </div>
          </div>

        </div>

        <div class="swiper-pagination"></div>
      </div>
  </div>

  </article>


  <?php include('./footer.php') ?>




  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: "auto",
      spaceBetween: 30,
      // centeredSlides: true,
      grabCursor: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },

    });
  </script>

</body>

</html>