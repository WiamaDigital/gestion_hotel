<?php
include_once('connect.php')
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/adminPage-style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <title>Utilisateur Connexion</title>

</head>

<body>
  <div class="mainPage">
    <video autoplay loop muted plays-inline class="back_video">
      <source src="../images/videos/adminPagee.mp4" type="video/mp4">

    </video>
    <section>
      <div class="sec-container">
        <div class="form-wrapper">
          <div class="card moreWidth">

            <div class="title">
              <h1>Connexion</h1>
            </div>

            <div class="card-body" id="formContainer">

              <form action="" method="post" onsubmit="return validation(event)">

                <div class="input-field">
                  <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
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

                <button type="submit" class="formButton" name="submit" id="login_btn">
                  <span>Connexion</span>
                </button>

                <div class="links">
                  <div class="left">
                    <span>Pas inscrit ? <a href="./user/registre_user.php" class="text">Inscrivez-vous</a></span>
                  </div>

                  <div class="right">
                    <a href="../index.php" class="text">Retour à la page d'accueil</a>
                  </div>
                </div>



              </form>

              <?php
              if (isset($_POST['submit'])) {
                $username = $_POST['email'];
                $password = $_POST['password'];

                //// Admin
                $query = $conn->query("SELECT * FROM `admin_form` WHERE `uname` = '$username' && `upass` = '$password'");
                $fetch = $query->fetch_array();
                $row = $query->num_rows;

                //// User
                $sql = "SELECT * from user_form WHERE mail_user ='$username'  and pass_user='$password'";
                $result = mysqli_query($conn, $sql);
                $user_data = mysqli_fetch_array($result);
                $count_row = $result->num_rows;

                if ($count_row == 1) {
                  session_start();
                    $_SESSION['login'] = true;
                    $_SESSION['uid'] = $user_data['id_user'];
              
                  header('location:./user/user.php');
                  
                } else if ($row ==1) {
                  session_start();
                  $_SESSION['login'] = true;
                  $_SESSION['id_ad'] = $fetch['id_admin'];
                  header('location:./admin/admin.php');
                } else {
                  echo '
                    <script type="text/javascript">
                    document.getElementById("error_password").innerHTML = "Email ou mot de passe est incorrect";
                  </script>
                    ';
                }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="../javaScript/scriptLogin.js"></script>

  <script src="../javaScript/scriptHoverBtn.js"></script>


</body>

</html>