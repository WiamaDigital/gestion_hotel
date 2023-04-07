<div class="all" id="all">
  <header class="header">
    <a href="../../index.php" class="logoPage">Dakhla</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">Menu</label>

    <nav class="navbarMenu ">
      <ul>
        <li><a href="../../index.php">Accueil</a></li>
        <li><a href="../../packages.php">Nos packs</a></li>
        <li><a >Nos services +</a>
          <ul>
            <li><a href="../room/home_room.php">Hébergement</a></li>
            <li><a href="../resto/resto.php">Restaurant</a></li>
            <li><a href="#">Activités</a></li>
          </ul>
        </li>
        <li><a href="../../about.php">A propos</a></li>
        <li><a href="../../about.php?#contact">Nos contact</a></li>

        <li><a href="../../inscription/index.php">Connexion </a></li>
      </ul>
    </nav>
  </header>
</div>
<script>
  const header = document.querySelector('.header');
window.addEventListener('scroll' ,()=>{
  if(window.scrollY > 50){
    header.classList.add('header-scrolled')
  }else if(window.scrollY <= 50){
    header.classList.remove('header-scrolled')
    
  }
} )
</script>