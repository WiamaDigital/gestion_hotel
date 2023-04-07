<!DOCTYPE html>
<?php
	require_once('../connect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">

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

	<br />
	
	<div class = "container-fluid">	
		<div class = "panel panel-default">
			<?php
				$q_p = $conn->query("SELECT COUNT(*) as total FROM book WHERE `status` = 'En attente'") or die(mysqli_error());
				$f_p = $q_p->fetch_array();
				$q_ci = $conn->query("SELECT COUNT(*) as total FROM book WHERE `status` = 'Enregistrer'") or die(mysqli_error());
				$f_ci = $q_ci->fetch_array();
			?>
			<div class = "panel-body">
				<a class = "btn btn-success" href = "admin.php"><span class = "badge"><?php echo $f_p['total']?></span> En attente</a>
				<a class = "btn btn-info" href = "checkin.php"><span class = "badge"><?php echo $f_ci['total']?></span> Enregistrer</a>
				<a class = "btn btn-warning disabled"> Quitter</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
          <tr>
							<th>Nom Complet</th>
							<th>Type d'hebergement</th>
							<th>Nom d'hebergement</th>
							<th>Numero d'hebergement</th>
              <th>Pack réservé</th>
							<th>Date arrive</th>
							<th>Jours</th>
							<th>Date sortie</th>
							<th>Status</th>
							<th>Total</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$query = $conn->query("SELECT * FROM book NATURAL JOIN user_book NATURAL JOIN rooms NATURAL JOIN pack WHERE `status` = 'Quitter'") or die(mysqli_query());
							while($fetch = $query->fetch_array()){
						?>
						<tr>
              <td><?php echo $fetch['first_name']." ".$fetch['last_name']?></td>
							<td><?php echo $fetch['type_heberg']?></td>
							<td><?php echo $fetch['name_heberg']?></td>
							<td><?php echo $fetch['room_no']?></td>
							<td><?php echo $fetch['name_pack']?></td>
							<td><?php echo "<label style = 'color:#00ff00;'>".date("M d, Y", strtotime($fetch['checkin']))."</label>"." @ "."<label>".date("h:i a", strtotime($fetch['checkin_time']))."</label>"?></td>
							<td><?php echo $fetch['days']?></td>
							<td><?php echo "<label style = 'color:#ff0000;'>".date("M d, Y", strtotime($fetch['checkin']."+".$fetch['days']."DAYS"))."</label>"." @ "."<label>".date("h:i A", strtotime($fetch['checkout_time']))."</label>"?></td>
							<td><?php echo $fetch['status']?></td>
							<td><?php echo $fetch['total'].".00". "MAD"?></td>
							<td><label class = "">Payé</label></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>

<script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="../../javaScript/js_inscrit/jquery.js"></script>
<script src="../../javaScript/js_inscrit/bootstrap.js"></script>
<script src="../../javaScript/js_inscrit/jquery.dataTables.js"></script>
<script src="../../javaScript/js_inscrit/dataTables.bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
<script type = "text/javascript">
	function confirmationCheckin(anchor){
		var conf = confirm("Êtes-vous sûr de vouloir effectuer la sortie de cette réservation ?");
		if(conf){
			window.location = anchor.attr("href");
		}
	}
</script>
</html>