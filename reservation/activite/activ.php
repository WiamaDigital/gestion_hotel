<?php

include '../../config.php';

$sql = "SELECT * FROM activities ";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM excursions ";
$result2 = $conn->query($sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
      - primary meta tags
    -->
  <title>Activités & Excursion</title>
  <meta name="title" content="Dakhla - Activités & Excursion">


  <!-- 
      - google font link
    -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- swiper js cdn link -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- 
      - custom css link
    -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <link rel="stylesheet" href="../../css/style.css">


</head>

<body style="background-color: white;">

  <!-- 
    - #PRELOADER
  -->

  <?php include './menu.php' ?>


  <main>
    <article>
      <!-- 
        - #HERO
      -->

      <div class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <h1 class="display-1 hero-title slider-reveal">
              Activités multiple à
              <br>
              Cisneros
            </h1>

            <p class="body-2 hero-text slider-reveal" style="color: rgba(245, 245, 245, 0.856);">
              Destination unique, où tradition marocaine et expérience
              <br>
              moderne ne font plus qu'une.
            </p>

          </li>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>


            <h1 class="display-1 hero-title slider-reveal">
              Excursion multiple à
              <br>
              Cisneros
            </h1>

            <p class="body-2 hero-text slider-reveal" style="color: rgba(245, 245, 245, 0.726);">
              Découvrir la vie des nomades du désert de façon inoubliable.
            </p>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>


      </div>


      <!-- 
        - #EXPLORER
      -->
      <div class="explorer" id="explorer">
        <div class="mainExplorer">
          <div class="heading">
            <h5>explorer</h5>

          </div>

          <div class="content flex">
            <div class="left">
              <h3>
                Explorez la région de Dakhla avec nos activités et excursions variées
              </h3>
              <p>
                Découvrez la région de Dakhla grâce à nos activités et excursions en famille, entre amis ou en solo.
                Partez à dos de chameau pour une immersion dans la vie des nomades du désert, goûtez aux meilleurs
                produits
                locaux avec Khaima Sahraouiya et assistez à une cérémonie de thé traditionnelle Hassani. Pour les
                amateurs de sports nautiques,
                nous proposons des cours de kitesurf et des surfs trips vers les meilleurs spots de Dakhla, notamment
                Oum Labouir,
                adaptés à tous les niveaux.
              </p>

            </div>
            <div class="right">
              <center>
                <img src="assets/images/explorer.jpeg" alt="">
              </center>
            </div>
          </div>
        </div>
      </div>


      <!-- 
        - #ACTIVITES
      -->
      <div class="activites" id="activites">
        <div class="sec-width">
          <div class="title">
            <h2>Activités</h2>
          </div>
          <div class="activites-container">
            <!-- single activite -->
            <?php while ($row = $result->fetch_assoc()) {; ?>
              <div class="activite">
                <h3><?php echo $row['titre_activ'] ?></h3>
                <p>
                  <?php echo $row['description'] ?>
                </p>
                <div class="image-activite">
                  <img src="./assets/images/<?php echo $row['image_activ'] ?>" alt="Kitsurf image">
                </div>
              </div>

            <?php }; ?>

            <!-- <div class="activite">
              <h3>Kitesurf</h3>
              <p>
                Le kitesurf est un sport passionnant qui consiste à glisser sur l'eau en étant tracté par une aile de
                kite.
                Si vous êtes intéressé par cette activité, Nous offrons des cours de kitesurf pour tous les niveaux, que
                vous
                soyez débutant ou expérimenté. Notre équipe expérimentée est là pour vous aider et vous conseiller,
                que vous souhaitiez découvrir le sport, vous rafraîchir la mémoire ou améliorer vos compétences en
                kitesurf.
              </p>
              <div class="ved-activite">
                <img src = "./assets/images/kitesurfing.jpg" alt = "Kitsurf image">
                <video src="./assets/images/kitesurf.mp4" loop muted autoplay> </video>
              </div>
            </div> -->
            <!-- end of single activite -->
            <!-- single activite -->
            <!-- <div class="activite">
              <h3>Surf</h3>
              <p>
                Le surf est un sport de glisse sur une planche dans l'océan, utilisant
                les forces naturelles de l'eau pour surfer sur les vagues. Si vous êtes
                passionné de surf ou souhaitez découvrir ce sport, notre hôtel vous offre l'opportunité
                de vivre une expérience unique en expérimentant les vagues parfaites et peu fréquentées de Dakhla.
                Nous vous emmènerons au spot de surf Oum Labouir,
                idéal pour tous les surfeurs, débutants ou confirmés.
              </p>

              <div class="ved-activite">
                <img src = "./assets/images/surfing.jpg" alt = "Surfing image">
                <video src="./assets/images/surf.mp4" loop muted autoplay> </video>
              </div>
            </div> -->
            <!-- end of single activite -->
            <!-- single activite -->
            <!-- <div class="activite">
              <h3>SUP</h3>
              <p>
                Le Stand-Up Paddle, communément appelé SUP, est un sport nautique
                où le pratiquant se tient debout sur une planche et se propulse à l'aide d'une pagaie.
                Il est accessible à tous les niveaux, que vous soyez débutant ou expérimenté.
                À Dakhla, nous proposons des locations de SUP ainsi que des excursions guidées pour découvrir les
                meilleurs spots de SUP de la région.
              </p>
              <div class="ved-activite">
                <video src="./assets/images/sup.mp4" loop muted autoplay> </video>
              </div>
            </div> -->
            <!-- end of single activite -->
            <!-- single activite -->
            <!-- <div class="activite">
              <h3>Dune buggy</h3>
              <p>
                Découvrez les sensations fortes de la conduite de dune buggy dans les vastes étendues désertiques de
                Dakhla.
                Nous proposons des circuits de dune buggy pour les amateurs de sensations fortes. Vous pourrez profiter
                pleinement
                de l'expérience de conduite tout en explorant les magnifiques paysages de la région. Nous offrons des
                circuits adaptés à
                tous les niveaux, des débutants aux conducteurs expérimentés.
              </p>
              <div class="ved-activite">
                <video src="./assets/images/quad1.mp4"  muted autoplay controls> </video>
              </div>
            </div> -->
            <!-- end of single activite -->
          </div>
          <p class="contact-label">
            Pour plus d'information, contactez Nous : <br>
            <span class="hover-underline">+212 535 285 009</span>
          </p>

        </div>
      </div>


      <!-- 
        - #EXCURSIONS
      -->
      <div class="excursions" id="excursions">
        <div class="">
          <div class="title">
            <h2>Excursions</h2>
          </div>
          <div class="container">
            <div class="row">
              <!-- image card start  -->

              <?php while ($row = $result2->fetch_assoc()) {; ?>
                <!-- <div class="image">
                  <img src="./assets/images/nomade.jpg" alt="">
                  <div class="details">
                    <h2>
                      Vivre avec les nomades
                    </h2>
                    <p>
                      Découvrez l'authenticité du Sahara avec Les Dunes de Dakhla ! Profitez d'une expérience complète en
                      séjournant
                      dans une KHAIMA sahraouiya et dégustez les meilleurs produits locaux lors d'un repas
                      traditionnel. Savourez également une cérémonie de thé HASSANI pour une immersion
                      totale dans la culture locale.
                    </p>
                  </div>
                </div> -->
                <!-- image card start  -->
                <div class="image">
                  <img src="./assets/images/<?php echo $row['image_excur'] ?>" alt="">
                  <div class="details">
                    <h2>
                      <?php echo $row['titre_excur'] ?>
                    </h2>
                    <p>
                      <?php echo $row['description'] ?>
                    </p>
                  </div>
                </div>
                <!-- image card end  -->

              <?php }; ?>
              <!-- <div class="image">
                <img src="./assets/images/nomade.jpg" alt="">
                <div class="details">
                  <h2>
                    Vivre avec les nomades
                  </h2>
                  <p>
                    Découvrez l'authenticité du Sahara avec Les Dunes de Dakhla ! Profitez d'une expérience complète en
                    séjournant
                    dans une KHAIMA sahraouiya et dégustez les meilleurs produits locaux lors d'un repas
                    traditionnel. Savourez également une cérémonie de thé HASSANI pour une immersion
                    totale dans la culture locale.
                  </p>
                </div>
              </div> -->
              <!-- image card end  -->



              <!-- image card start  -->
              <!-- <div class="image">
                <img src="./assets/images/ville.jpg" alt="">
                <div class="details">
                  <h2>
                    Excursion à la ville de Dakhla

                  </h2>
                  <p>
                    Découvrez Dakhla et son marché local, où les tissus traditionnels
                    et l'artisanat local ne manquent pas! Poursuivez avec un dîner en ville et
                    terminez votre journée avec un jus d'orange frais ou un thé marocain dans un café local.
                    N'oubliez pas de visiter le phare espagnol et le musée local pour une expérience complète.
                  </p>
                </div>
              </div> -->
              <!-- image card end  -->

              <!-- image card start  -->
              <!-- <div class="image">
                <img src="./assets/images/dragon.jpg" alt="">
                <div class="details">
                  <h2>
                    Découvrez l'ile du Dragon

                  </h2>
                  <p>
                    Découvrez l'île légendaire du Dragon sur le lagon de Dakhla ! Cette île doit son
                    nom à sa forme unique ressemblant à un dragon étendu. Embarquez pour une excursion en bateau
                    ou en kayak et profitez d'une vue à couper le souffle depuis son sommet.
                    Prévoyez des chaussures adaptées pour explorer les coquillages parsemés sur son terrain sauvage.
                  </p>
                </div>
              </div> -->
              <!-- image card end  -->

              <!-- image card start  -->
              <!-- <div class="image">
                <img src="./assets/images/stars.jpeg" alt="">
                <div class="details">
                  <h2>
                    Stargazing​

                  </h2>
                  <p>
                    Observation des étoiles dans le désert de Dakhla : une expérience féerique à ne pas manquer !
                    Grâce à l'absence de lumières urbaines, vous pourrez profiter d'un ciel étoilé des plus sombres
                    et admirer des constellations spectaculaires.
                    Les vastes espaces désertiques font des Dunes de Dakhla l'endroit idéal pour cette excursion
                    magique.
                  </p>
                </div>
              </div> -->
              <!-- image card end  -->
            </div>
          </div>
        </div>


      </div>
    </article>
  </main>

  <?php include './footer.php' ?>

  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>


  <script>
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('header-scrolled')
      } else if (window.scrollY <= 50) {
        header.classList.remove('header-scrolled')

      }
    })
  </script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>