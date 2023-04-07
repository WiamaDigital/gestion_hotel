<!DOCTYPE html>
<?php
require_once '../connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css"> -->

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!-- swiper style link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">


  <link rel="stylesheet" type="text/css" href="../../css/css_inscrit/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../../css/css_inscrit/style.css" />
  <link rel="stylesheet" href="../../css/style.css">


  <title>Admin Panel - Reservation</title>
  <style>
    body {
      background-color: var(--body-color);
    }

    .logoPage {
      text-decoration: none;
      color: whitesmoke;
      font-size: 3rem;

    }

    #dashboard-menu {
      position: fixed;
      height: 100%;

    }

    @media screen and (max-width :992px) {
      #dashboard-menu {
        height: auto;
        width: 100%;

      }

      #main-content {
        margin-top: 60px;
      }
    }

    .container {
      padding: 100px;
    }

    .logoPage {
      text-decoration: none !important;
    }

    .logoPage:hover {
      color: var(--main-color);
    }
  </style>
</head>





<body>
<div class="all" id="all" style="margin-bottom: 70px;">
    <header class="header">
      <a href="../../index.php" class="logoPage">Dakhla</a>

      <input type="checkbox" id="menu-bar">
      <label for="menu-bar">Menu</label>

      <nav class="navbarMenu ">
        <ul>
          <li><a href="../logout.php">Se déconnecter</a></li>

          </li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="alert alert-info">Remplir le formulaire</div>
        <?php
        $stmt = $conn->prepare("SELECT * FROM book
          NATURAL JOIN user_book
          NATURAL JOIN rooms
          NATURAL JOIN pack
          WHERE book_id = ?");
        $stmt->bind_param("i", $_REQUEST['book_id']);
        $stmt->execute();
        $result = $stmt->get_result();
        $fetch = mysqli_fetch_array($result, MYSQLI_ASSOC);
        

        ?>
        <br />
        <form method="POST" enctype="multipart/form-data" action="save_form.php?book_id=<?php echo $fetch['book_id'] ?>">
          <div class="form-inline" style="float:left;">
            <label>Prénom</label>
            <br />
            <input type="text" value="<?php echo $fetch['first_name'] ?>" class="form-control" size="40" disabled="disabled" />
          </div>

          <div class="form-inline" style="float:left; margin-left:20px;">
            <label>Nom</label>
            <br />
            <input type="text" value="<?php echo $fetch['last_name'] ?>" class="form-control" size="40" disabled="disabled" />
          </div>
          <br style="clear:both;" />
          <br />
          <div class="form-inline" style="float:left; margin-left:20px;">
            <label>Type d'hebergement</label>
            <br />
            <input type="text" value="<?php echo $fetch['type_heberg'] ?>" class="form-control" size="40" disabled="disabled" />
          </div>

          <div class="form-inline" style="float:left; margin-left:20px;">
            <label>Nom d'hebergement</label>
            <br />
            <input type="text" value="<?php echo $fetch['name_heberg'] ?>" class="form-control" size="40" disabled="disabled" />
          </div>

          <div class="form-inline" style="float:left; margin-left:20px;">
            <label>Pack réservé</label>
            <br />
            <input type="text" value="<?php echo $fetch['name_pack'] ?>" class="form-control" size="40" disabled="disabled" />
          </div>

          <div class="form-inline" style="float:left; margin-left:20px;">
            <label>Numéro d'hebergement</label>
            <br />
            <input type="number" min="0" max="999" name="room_no" class="form-control" required="required" />
          </div>
          
          <div class="form-inline" style="float:left; margin-left:20px;">
            <label>Nombre du Jour</label>
            <br />
            <input type="number" min="0" max="99" name="days" class="form-control" required="required" />
          </div>

          <br style="clear:both;" />
          <br />
          <button name="add_form" class="btn btn-primary"> Soumettre</button>
        </form>
      </div>
    </div>
  </div>

</body>


<script src="../../javaScript/js_inscrit/jquery.js"></script>
<script src="../../javaScript/js_inscrit/bootstrap.js"></script>

</html>