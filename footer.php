<section class="footer">
  <div class="contenu-footer">

    <div class="boite">
      <h3>Liens utiles</h3>
      <a href="index.php"> <i class="fas fa-angle-right"></i> Accueil</a>
      <a href="./packages.php"> <i class="fas fa-angle-right"></i> nos packs</a>

      <div class="menu-deroulant">
        <button> <i class="fas fa-angle-right"></i> Nos services </button>

        <div class="contenus">
          <a href="./reservation/room/home_room.php"> <i class="fas fa-angle-right"></i> Hébergement</a>
          <a href="./reservation/resto/resto.php"> <i class="fas fa-angle-right"></i> Restaurant</a>
          <a href="./reservation/activite/activ.php"> <i class="fas fa-angle-right"></i> Activités</a>
        </div>

      </div>

      <a href="about.php"> <i class="fas fa-angle-right"></i> A propos</a>
      <a href="about.php?#contact"> <i class="fas fa-angle-right"></i> Nos contact</a>


      <a href="./inscription/index.php"> <i class="fas fa-angle-right"></i> Connexion</a>
      
    </div>

    <div class="boite">
      <h3>Contact information</h3>
      <a href="#"> <i class="fas fa-phone"></i> +212 611-15-30-48</a>
      <a href="#"> <i class="fas fa-phone"></i> +212 635-12-14-20</a>
      <a href="#"> <i class="fas fa-envelope"></i> dakhla@gmail.com</a>
      <a href="#"> <i class="fas fa-map"></i> Dakhla , Maroc - 71000</a>
    </div>

    <div class="boite">
      <h3>Réseaux sociaux</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
    </div>
  </div>

  <div class="move-up">
    <span><a href="#" class="to-top">
        <i class="fas fa-arrow-circle-up fa-2x"></i>
      </a></span>
  </div>

  <div class="create">
    &copy; <span>2023</span> Créer par <span> Dakhla </span> | tous droits réservés
  </div>

</section>
<script>
  const toTop = document.querySelector('.to-top');

  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
      toTop.classList.add("active")
    } else {
      toTop.classList.remove('active')
    }
  }) 
  </script>