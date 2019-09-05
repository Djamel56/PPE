
<!DOCTYPE html>

<?php
        
        $bdd = new PDO("mysql:host=127.0.0.1;dbname=gsbv3", "root", "");
        
        if(isset($_POST['connexion']))
        {
            $name = htmlspecialchars($_POST['name']);
            $password = htmlspecialchars($_POST['password']);
            
            if(!empty($name) and !empty($password))
            {
                $requser = $bdd->prepare("SELECT * FROM visiteur WHERE login = ? AND mdp = ?");
                $requser->execute(array($name, $password));
                $userexist = $requser->rowCount();
                if($userexist == 1)
                {
                   header('Location: accueil.php');
                }
                else
                {
                    $erreur = "Mauvais identifiant ou mot de passe";
                }
            }
            else
            {
                $erreur = "Champs non complet!";
            }
        }


        ?>

          <?php
                        if(isset($erreur))
                        {
                            echo '<font color="red">'.$erreur."</font>";
                        }
                        ?>


	<html>
		<head>
			<meta charset="UTF-8" />
			<title>GSB V2</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<link rel="stylesheet" href="style.css" />
			<link rel="icon" href="images/gsbico.ico"/>
		</head>


	<body>

		<div class="container">
		
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<img src="images/gsb.png" />

		<br />
		<br />
	

		<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1" >Identifiant :</label>
    <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre identifiant">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe :</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">

    <label class="form-check-label" for="exampleCheck1">Restez connecté</label>

              


  </div>


  <br />
  <center><button class="button" name="connexion">Connexion</button></center>

</form>



	</body>




	</html>