<?php 

$pagetitle = "Ajouter un fichier";

$ongletmesfichiers = 0;
$ongletfaq = 0;
$ongletaccueil = 0;

include "template/header.php";

?>
<br><br><br><br>

<p class="sizetitle1 caviar text-center"> Ajouter un fichier </p>

<div class="section">
	<div class="container">
		<div class="row center-block">
			
		<form method="POST" role="form" action="telechargement_en_ligne_initialisation.php" enctype="multipart/form-data">	
		<div class="col-sm-6"><img src="./img/votre_image.png" class="img-responsive votreimage" alt="Responsive image"></div> 
		<div class="col-sm-6">
			
			<input class="orange caviar ajoutfichiernomdefichier" maxlength="30" placeholder="Nom du fichier" cols="50" rows="1" name="nom_fichier" type="text" required></>
			<!--<label class="text-left orange"> Sélectionner la catégorie :</label><br>-->
				<select class="ajoutfichierselectcategorie" name="slcategorie">
					<option class="text-center" selected=""><B>~ Sélectionner la catégorie ~</B></option>
					<option>Films</option>
		            <option>Jeux vidéo</option>
		            <option>Séries</option>
		            <option>Fichiers</option>
		            <option>Musiques</option>
		            <option>Livres</option>
		            <option>Autre</option>
	            </select>

	            <select class="ajoutfichierselectpublique" name="slpublique">
					<option class="text-center" selected=""><B>~ Sélectionner la visiblité ~</B></option>
					<option>Publique</option>
		            <option>Privé</option>
	            </select>
            
			<!--<a href=""><button class="ajoutfichierajoutimage">Choisir une image</button></a>-->
			<input type="file" name="icone" id="icone" class="ajoutfichierajoutimage" placeholder="Choisir une image" required="" />
			<label class="text-left orange">*Votre image doit être au format .jpg .jpeg ou .png</label>

		</div>


		<div class="col-sm-12">
		
		<br>
		<textarea class="ajoutfichierresume" placeholder="Résumé"></textarea><br>
		<!--<button  class="ajoutfichierfichierajout">Choisir fichier</button>-->
		<input type="file" name="mon_fichier" id="mon_fichier" class="ajoutfichierfichierajout" value="Choisir fichier" required="" />

		</div>

		<div class="col-sm-3"><input class="ajoutfichierusername" readonly="" placeholder="Nom de l'utilisateur" disabled=""></></div>
		<div class="col-sm-9"><button class="ajoutfichiermettreenligne">Mettre en ligne !</button></div>
		</form>


		</div>
	</div>
</div>



<br><br><br>
<?php include "template/footer.php"; ?>