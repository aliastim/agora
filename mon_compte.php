<?php 

$pagetitle = "Mon compte";

$ongletmesfichiers = 0;
$ongletfaq = 0;
$ongletaccueil = 0;

include "template/header.php";

?>

<br><br><br><br>

<p class="sizetitle1 caviar text-center"> Mon compte </p>
<div class="section">
	<div class="container">
		<div class="row">

			<div class="col-sm-12 center-block"><img src="./img/votreimagedecompte2.gif" class="img-responsive center-block votreimagecompte" alt="Responsive image"></div>
			<div class="col-sm-12 center-block"><input type="file" name="" id="" class="imgcompte center-block" placeholder="Choisir une image" required="" /></div>
			<div class="col-sm-12 center-block">
				<div class="tricker">
					<p class="text-center center-block orange">*Votre image doit avoir un format de 400x400 pixels</p>
					<p class="text-center center-block orange">**Votre image doit être au format .jpg .jpeg .png ou .gif</p>
				</div>
				<br>
			</div>

			<label class="text-center center-block caviar orange idtfmoncompte">~ Identifiant ~</label>

			<br>

			<button class="text-center center-block btnmoncompte" data-toggle="modal" data-target="#myModal">Changer mon adresse e-mail</button>

								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header headmodal">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title text-center" id="myModalLabel"><B>Changement d'adresse e-mail</B></h4>
								      </div>
								      <div class="modal-body bodymodal">

								      <form method="post" role="form">
								        <input class="center-block inptmoncompte" type="text" required="" placeholder="Nouvelle adresse e-mail"></><br>
								        <button class="btnmoncompte2 center-block">Valider</button>
									  </form>

								      </div>
								      <div class="modal-footer footmodal">
								        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
								      </div>
								    </div>
								  </div>
								</div>

			<br>

			<button class="text-center center-block btnmoncompte" data-toggle="modal" data-target="#myModal2">Changer mon mot de passe</button>

								<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header headmodal">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title text-center" id="myModalLabel"><B>Changement de mot de passe</B></h4>
								      </div>
								      <div class="modal-body bodymodal">
								        
								      <form method="post" role="form">
								        <input class="center-block inptmoncompte" type="password" required="" placeholder="Ancien mot de passe"></><br>
								        <input class="center-block inptmoncompte" type="password" required="" placeholder="Nouveau mot de passe"></><br>
								        <input class="center-block inptmoncompte" type="password" required="" placeholder="Retaper votre mot de passe"></><br>
								        <button class="btnmoncompte2 center-block">Valider</button>
								      </form>  

								      </div>
								      <div class="modal-footer footmodal">
								        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
								      </div>
								    </div>
								  </div>
								</div>

		</div>
	</div>
</div>


 <script type="text/javascript">
      
      (function($) {
  var duration = 2500;  // change this to change rotation time in milliseconds
  var current = 1;
  var tricker = $(".tricker");
  var height = tricker.height();
  var number = tricker.children().length;
  var first = tricker.children().first();

  setInterval(function() {
    var interv = current * -1 * height;
    first.css("margin-top", interv + "px");
    if (current == number) {
      first.css("margin-top", "0px");
      current = 1;
    } else {
      current++;
    }
  }, duration);
})(jQuery);

    </script>


<br><br><br><br><br><br>
<?php include "template/footer.php"; ?>