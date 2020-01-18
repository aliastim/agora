<?php 

$pagetitle = "FAQ";

$ongletmesfichiers = 0;
$ongletfaq = 1;
$ongletaccueil = 0;

include "template/header.php";

?>

<br><br><br><br>

<p class="sizetitle1 caviar text-center"> FAQ </p>

							
	<section class="ac-container">
		<div>
			<input id="ac-1" name="accordion-1" type="checkbox" checked/>
				<label for="ac-1">A propos</label>
					<article class="ac-large350">
						<img src="./img/Agora.png" class="img-responsive text-center center-block logoapropos" alt="Responsive image">
						<p class="orange text-center"><B>Bienvenue sur Agora.orange</B><br><br> Agora est une idée née suite à la fermeture de feu T411, un site qui aura berçé nos débuts dans ce monde fantastique qu'est Internet. Nous avons eu l'idée de concevoir un site de Cloud où vous choisissez le contenu que vous souhaitez garder pour vous ou partager au reste de la communauté. Agora étant un petit site privé, nous vous demandons de rester discret sur ce dernier afin de restreindre la communauté. <br><br> Nous vous souhaitons une agréable visite !</p>
					</article>
		</div>
		<div>
			<input id="ac-2" name="accordion-1" type="checkbox" />
				<label for="ac-2">Mon compte</label>
					<article class="ac-medium">
						<p>Some content... </p>
					</article>
		</div>
		<div>
			<input id="ac-3" name="accordion-1" type="checkbox" />
				<label for="ac-3">Ajouter du contenu en ligne</label>
					<article class="ac-medium">
						<p>Some content... </p>
					</article>
		</div>
		<div>
			<input id="ac-4" name="accordion-1" type="checkbox" />
				<label for="ac-4">Télécharger du contenu en ligne</label>
					<article class="ac-medium">
						<p>Some content... </p>
					</article>
		</div>
		<div>
			<input id="ac-5" name="accordion-1" type="checkbox" />
				<label for="ac-5">Partager du contenu en ligne</label>
					<article class="ac-medium">
						<p>Some content... </p>
					</article>
		</div>
		<div>
			<input id="ac-6" name="accordion-1" type="checkbox" />
				<label for="ac-6">Forum</label>
					<article class="ac-medium">
						<p>Some content... </p>
					</article>
		</div>
	</section>

<br><br><br><br><br><br>
<?php include "template/footer.php"; ?>