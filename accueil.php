<?php 
session_start();
	if (isset($_POST['deconnexion'])) {
		session_destroy();
	}

 ?>


<!DOCTYPE html>

<html>

		<head>
			<title>Accueil</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<link rel="stylesheet" href="style3.css">
			<link rel="icon" href="images/gsbico.ico"/>
			<meta charset="UTF-8">
		</head>
	


				<body>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="accueil.php">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fiches
        </a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="fiche_forfait.php">Fiche forfaitaire</a>
          <a class="dropdown-item" href="fiche_hors_forfait.php">Fiche hors-forfaitaire</a>
          <a class="dropdown-item" href="fiche_ancienne.php">Anciennes fiches de frais</a>
        </div>	
        <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
        
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="connexion.php">Déconnexion</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Entrez votre recherche..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
  </div>
</nav>

			<img src="images/gsb.png" />

			<h1>Bienvenue !</h1>
				</body>

	</html>