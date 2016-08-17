<!DOCTYPE html>
<html lang="fr">
  <head>
  	<?php include("header.php"); ?>
  </head>

  <body>
	<div class="container">
		<div class="container">

		    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<legend>Contact Us Today!</legend>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Nom</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input  name="first_name" placeholder="Nom" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Prénom</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  <input name="last_name" placeholder="Prénom" class="form-control"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  <input name="email" placeholder="Adresse e-mail" class="form-control"  type="text">
		    </div>
		  </div>
		</div>


		<!-- Text input-->
		       
		<div class="form-group">
		  <label class="col-md-4 control-label">Numéro de téléphone</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		  <input name="phone" placeholder="0123456789" class="form-control" type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->
		      
		<div class="form-group">
		  <label class="col-md-4 control-label">NNI</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  <input name="address" placeholder="NNI" class="form-control" type="text">
		    </div>
		  </div>
		</div>

		<!-- Select Basic -->
		   
		<div class="form-group"> 
		  <label class="col-md-4 control-label">Agence</label>
		    <div class="col-md-4 selectContainer">
		    	<div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		    		<select name="state" class="form-control selectpicker" >
		      			<option value=" " >Sélectionner</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		     			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		     			<option>Agence XXX</option>
		      			<option>Agence XXX</option>
		    		</select>
		 		</div>
			</div>
		</div>

		<div class="form-group"> 
		  <label class="col-md-4 control-label">Territoire</label>
		    <div class="col-md-4 selectContainer">
		    	<div class="input-group">
		        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
		    		<select name="state" class="form-control selectpicker" >
		      			<option value=" " >Sélectionner</option>
		      			<option>Alsace</option>
		      			<option>Aquitaine</option>
		      			<option>Auvergne</option>
		      			<option>Basse-Normandie</option>
		      			<option>Bourgogne</option>
		      			<option>Bretagne Bretagne</option>
		      			<option>Centre</option>
		      			<option>Champagne-Ardenne</option>
		      			<option>Corse</option>
		      			<option>Franche-Comté</option>
		     			<option>Haute-Normandie</option>
		      			<option>Ile-de-France</option>
		      			<option>Languedoc-Roussillon</option>
		      			<option>Limousin</option>
		     			 <option>Lorraine</option>
		      			<option>Midi-Pyrénées</option>
		    		</select>
		 		</div>
			</div>
		</div>

		<!-- radio checks -->
		 <div class="form-group">
		    <label class="col-md-4 control-label">Représentant Territorial ou Manager d'agence ?</label>
		        <div class="col-md-4">
		            <div class="radio">
		            	<label><input type="radio" name="job" value="yes" /> Représentant territorial</label>
		            </div>
		            <div class="radio">
		                <label><input type="radio" name="job" value="no" /> Manager d'agence</label>
		            </div>
		            <div class="radio">
		                <label><input type="radio" name="job" value="no" /> Aucun</label>
		            </div>
		        </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Mot de passe</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-ok-circle"></i></span>
		  <input  name="first_name" placeholder="Mot de passe" class="form-control"  type="password">
		    </div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label">Mot de passe (Confirmation)</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
		  <input  name="first_name" placeholder="Mot de passe" class="form-control"  type="password">
		    </div>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4">
		    <button type="submit" class="btn btn-warning">Valider l'inscription <span class="glyphicon glyphicon-send"></span></button>
		  </div>
		</div>

		</fieldset>
		</form>
		</div>
		    </div><!-- /.container -->
	</div><!-- /container -->
</body>

<footer> <?php include("footer.php"); ?> </footer> 
</html>