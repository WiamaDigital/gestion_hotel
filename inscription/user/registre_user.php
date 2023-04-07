<?php
include_once('../../config.php');

$user = new user();

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/adminPage-style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <title>Inscription</title>

</head>

<body>
  <div class="mainPage">
    <video autoplay loop muted plays-inline class="back_video">
      <source src="../../images/videos/adminPagee.mp4" type="video/mp4">

    </video>
    <section>
      <div class="sec-container">
        <div class="form-wrapper">

          <div class="card moreWidth">

            <div class="title">
              <h1>Inscription</h1>
            </div>

            <div class="card-body" id="formContainer">
              <form action="" method="post" onsubmit="return validation(event)">
                <div class="input-field">

                  <input type="text" class="form-control" placeholder=" Nom complet " name="name" id="name"
                   value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
                  <div class="icon">
                    <i class="fas fa-user"></i>
                  </div>
                </div>
                <div class="error_msg" id="error_name"></div>

                <div class="input-field">
                  <input type="text" class="form-control" placeholder="Email" name="email" id="email"
                   value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div>
                <div class="error_msg" id="error_email"></div>

                <div class="input-field">
                  <input type="password" class="form-control" placeholder="Mot de passe" name="password" id="password">
                  <div class="icon">
                    <i class="fas fa-lock"></i>
                  </div>
                </div>
                <div class="error_msg" id="error_password"></div>

                <div class="input-field">
                  <input type="password" class="form-control" placeholder="Confirmer mot de passe" name="cpass" id="cpass">
                  <div class="icon">
                    <i class="fas fa-lock"></i>
                  </div>
                </div>
                <div class="error_msg" id="error_cpass"></div>
                
                <button type="submit" class="formButton" name="submit" id="login_btn">
                  <span>Inscription</span>
                </button>
                
                <div class="links">
                  <div class="left">
                    <span>Déjà inscrit ? <a href="../index.php" class="text">Connectez-vous</a></span>
                  </div>
                  <div class="right">
                    <a href="../../index.php" class="text">Retour à la page d'accueil</a>
                  </div>
                </div>

                <?php
                if (isset($_POST['submit'])) {
                  extract($_POST);
                  $register = $user->reg_user($name, $email, $password);
                  if ($register) {
                      header("location:./user.php");
                  } else { ?>

                    <script type='text/javascript'>
                      document.getElementById('error_cpass').innerHTML = 'Compte déjà existe !!';
                      document.getElementById("email").value = "";
                    </script>

                <?php  };
                } ?>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="../../javaScript/scriptRegister.js"></script>
  
  <script src="../../javaScript/scriptHoverBtn.js"></script>
</body>

</html>