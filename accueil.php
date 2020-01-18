<?php 

$pagetitle = "Accueil";

$ongletmesfichiers = 0;
$ongletfaq = 0;
$ongletaccueil = 1;

include "template/header.php";

?>


<div class="section">
	<div class="container containermdf">
		<div class="row">
		  <div class="col-xs-3 grey fenetregauche"><br><br><br>

		  		<form method="POST" role="form">

		  		<p class="text-center orange caviar breakword sizetitle3"> Affinage de recherche </p> <br> <!--Pour les recherches : sizetitlefngauche à la place de sizetitle3-->

		  		<hr class="lignefngauche" /> <br>

		  		<input class="orange caviar inputfngauche center-block" maxlength="30" placeholder="Nom" cols="50" rows="1" name="" type="text" required></> <br>

		  		<input class="orange caviar inputfngauche center-block" maxlength="30" placeholder="Mots-clés" cols="50" rows="1" name="" type="text"></> <br>

		  		<input class="orange caviar inputfngauche center-block" maxlength="30" placeholder="Uploader" cols="50" rows="1" name="" type="text"></> <br><br>

		  		<hr class="lignefngauche" /> <br>

		  		<select class="selectfngauche center-block" name="">
					<option class="text-center" selected=""><B>Catégorie</B></option>
					<option>Films</option>
		            <option>Jeux vidéo</option>
		            <option>Séries</option>
		            <option>Fichiers</option>
		            <option>Musiques</option>
		            <option>Livres</option>
		            <option>Autre</option>
	            </select> <br>

	            <select class="selectfngauche center-block" name="">
					<option class="text-center" selected=""><B>Sous-catégorie</B></option>
					<option>Films</option>
		            <option>Jeux vidéo</option>
		            <option>Séries</option>
		            <option>Fichiers</option>
		            <option>Musiques</option>
		            <option>Livres</option>
		            <option>Autre</option>
	            </select> <br>

	            <select class="selectfngauche center-block" name="">
					<option class="text-center" selected=""><B>Poids</B></option>
					<option>0 - 500MB</option>
		            <option>500MB - 1Go</option>
		            <option>1Go - 5Go</option>
		            <option>+5Go</option>
	            </select> <br>

	            <select class="selectfngauche center-block" name="">
					<option class="text-center" selected=""><B>Langue</B></option>
					<option>Français</option>
		            <option>Anglais</option>
		            <option>Autre</option>
		            <option>Vostfr</option>
		            <option>Vo</option>
	            </select> <br><br>

	            <hr class="lignefngauche" /> <br>

	            <button class="rechercherfngauche center-block">Rechercher</button>

	            </form>

		  		<!--<h1 class="text-center orange caviar breakword sizetitle2"> Catégories </h1> <br><br>

				<div class="control-group text-left caviar checklist breakword">

					<label class="control control-checkbox orange">
				        Films
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Jeux
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Musiques
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Fichiers
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Livres
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Autre
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				</div>

				<br><br>

				<h1 class="text-center orange caviar breakword sizetitle2"> Langues </h1> <br><br>

				<div class="control-group text-left caviar checklist breakword">

					<label class="control control-checkbox orange">
				        Français
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Anglais sous-titré Français
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Anglais
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>

				    <label class="control control-checkbox orange">
				        Autre
				            <input type="checkbox" checked="checked" />
				        <div class="control_indicator"></div>
				    </label> <br>


				</div>-->

				<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		  </div>

		  <div id="fndroit" class="col-xs-9"> <!-- red -->

		  		<br><br>
		  		<p class="sizetitle1 caviar"> Derniers Uploads </p> <br>

		  		 	  		
		  		 <div class="col-xs-11 blocktelechargements grey">

		  		 <table class="table caviar">
					  <tr>
					  	<th class="imgcategories"><img src="./img/icones/film.png" class="img-responsive iconescategories" alt="Responsive image"></th>
					    <th class="titlecategories">Game of Thrones S07E03</th> <!-- Limiter à 41 caracteres-->
					    <th class="sizecategories">536,8 MB</th>
					    <th class="datecategories">31/07/2017</th>
					    <th class="usercategories">Par Utilisateur</th>
					    <th class="dlicones">

	    					<a class="cloud" href="">D</a>
	    					<a class="share" href="">S</a>
	    					<a class="dlinfo" data-toggle="modal" data-target="#myModal" href="">I</a>

		    					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header headmodal">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title" id="myModalLabel"><B>Game of Thrones S07E03</B></h4>
								      </div>
								      <div class="modal-body bodymodal">
								        <img src="fichiers/1/img/DanyGOTS07.jpg" class="img-responsive imgmodal center-block" alt="Responsive image">
								        <hr style="">
								        <label class="caviar">Résumé :</label><br>
								        <p class="caviar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse finibus lorem nisi. Sed malesuada tincidunt accumsan. Aliquam nibh nulla, tempus et massa ac, mattis pretium nibh. Praesent viverra ligula ac nulla dapibus pellentesque. Pellentesque blandit pulvinar pellentesque. Ut dolor lectus, commodo cursus varius eu, sollicitudin in metus. Donec rhoncus in quam sed venenatis. </p>
								        <hr>
								        <label class="caviar"><i>Ajouté le  : 31/07/2017<br>Par : Username</i></label>
								      </div>
								      <div class="modal-footer footmodal">
								        <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
								        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
								      </div>
								    </div>
								  </div>
								</div>
	    					<!--<a class="dledit" href="">E</a>
	    					<a class="dldelete" href="">D</a>-->

	    				</th> 
					  </tr>


					</table>	  

		  		 </div>



		  		 <div class="defilementpages" aria-label="...">
				  <ul class="pager">
				    <li class="previous disabled"><a class="pageprecedent" href="#"><span aria-hidden="true">&larr;</span> Précédent</a></li>
				    <li class="next"><a class="pagesuivant" href="#">Suivant<span aria-hidden="true">&rarr;</span></a></li>
				  </ul>
				</div>
		  		 



		  </div>
		  	
		  	 <script type="text/javascript">

		  	 	var timer;								/*Rafraichit la page au changement de taille de fenêtre*/
				window.onresize = function(){
				    clearInterval( timer );
				    timer = setTimeout( function(){
				        top.location = "accueil.php"
				    }, 0 );								/*0 initialise la page dés le changement de taille de fenêtre*/
				}

				if (document.body.clientWidth <= 790)
				{
					/*alert("bonjour");*/
					document.getElementById("fndroit").className = "col-xs-12";

				}


				else if (document.body.clientWidth >= 791)
				{
					/*alert("aurevoir");*/
					document.getElementById("fndroit").className = "col-xs-9";
				}
			 </script>


		  </div>
	</div>
</div>	

<!-- 




<div class="menugauche">
			

	</div>
			
	<div class="menudroit">
			

	</div> -->

<?php include "template/footer.php"; ?>