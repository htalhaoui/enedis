<!DOCTYPE html>
<html lang="fr">
  <head>
  	<?php include("header.php"); ?>
  </head>

  <body>

	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<form class="form-signin">
          <h1 class="form-signin-heading">Demandes de missions</h1>
            <label for="inputEmail" class="sr-only">Identifiant </label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Identifiant" required autofocus><br>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
            <div class="checkbox">
              <label>
              <input type="checkbox" value="remember-me"> Se souvenir de moi !
             </label>
          </div>

          <a href="https://moncompte.isep.fr/login.php">Mot de passe oublié</a><br>
          <button class="btn btn-lg btn-success btn-block" type="submit">Connexion</button>
          <a href="inscription.php">Inscrivez-vous</a>
          </form>					
				</div><!-- /col-lg-6 -->
				<div class="col-lg-6">
					<img class="img-responsive" src="assets/img/ipad-hand.png" alt="">
				</div><!-- /col-lg-6 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
	
	
	
	<footer> <?php include("footer.php"); ?> </footer> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
