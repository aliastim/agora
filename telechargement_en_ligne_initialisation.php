<?php

$maxsizeicone= 1000000000;
$maxsizefichier= 99999999;
/*$erreur= "Le fichier a bien été transféré";*/
$id_membre= rand();
$extensions_invalides = array( 'php' , 'html', 'sql');
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png');
/*echo ($_POST['slcategorie'][0]);*/

if (!empty($_POST['slcategorie']) AND !empty($_POST['nom_fichier']) AND (strlen($_POST['nom_fichier']) <= 30) AND !empty($_POST['slpublique']) AND $_FILES['mon_fichier']['error'] == 0 AND $_FILES['icone']['error'] == 0)
{
		

			echo("Nom : ".$_FILES['mon_fichier']['name'] ."<br> Taille : " .$_FILES['mon_fichier']['size'] ."<br> Type : " .$_FILES['mon_fichier']['type'] ."<br> Adresse du fichier temporaire : " .$_FILES['mon_fichier']['tmp_name'] ."<br> Code d'erreur pour savoir si le fichier a bien été uploadé : " .$_FILES['mon_fichier']['error']);


			if ($_FILES['mon_fichier']['error'] == 0)
				{
					if ($_FILES['mon_fichier']['size'] <= $maxsizefichier AND $_FILES['icone']['size'] <= $maxsizeicone)
					{
						$extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
						$extension_upload_icone = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );

							if ( !in_array($extension_upload,$extensions_invalides) AND in_array($extension_upload_icone,$extensions_valides))

							{
								echo "<br> <br> Extension correcte du fichier <br><br>"; 

									/*--------Choix nom du fichier/création du fichier d'emplacement et déplacement-------------*/
									/*---IMAGE---*/

									//Créer un dossier 'fichiers/1/'

								 	/*mkdir('fichiers/1/', 0777, true);*/

									//Créer un identifiant difficile à deviner

									 /*$nom = md5(uniqid(rand(), true));*/
									 $nom_image = "fichiers/1/img/{$id_membre}.{$extension_upload_icone}";  /* NOM D IMAGE *//*Dossier de destination + choix du nom (ici l'id du membre) + extension*/

									 $resultat_image = move_uploaded_file($_FILES['icone']['tmp_name'],$nom_image); /* Transfert le fichier qui a pour name="icone" du fichier temporaire au dossier inscrit dans $nom */

									 if ($resultat_image)
									 {
										/*---FICHIER---*/

									 	/*mkdir('fichiers/1/', 0777, true);*/

										 echo "<br><br>Transfert de l'image réussi";

										 $nom = "fichiers/1/{$id_membre}.{$extension_upload}";  /*Dossier de destination + choix du nom (ici l'id du membre) + extension*/

										 $resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$nom); /* Transfert le fichier qui a pour name="mon_fichier" du fichier temporaire au dossier inscrit dans $nom */

										 if ($resultat)
										 {
										 	 echo "<br><br>Transfert réussi";
										 	 header("Location: telechargement_en_ligne.php");	

										 }
										 else
										 {
											 echo "Une erreur s'est produite lors du chargement";
										 }

										 /*---FIN FICHIER---*/
									 }
									 else
									 {
									 	echo "Une erreur s'est produite lors du chargement de l'image";
									 }
									 /*---FIN IMAGE---*/

							} 
							else 
							{
								echo"<br> <br> Extension du fichier OU de l'image incorrecte <br>Pour information : vous ne pouvez pas importer de fichier au format .html, .sql ou .php<br><br>";
							}

					} 
					else
					{
						$erreur = "Le fichier OU l'image pèse trop lourd  <br><br>";
						echo ($erreur);
					}
				}
			else
				{
					$erreur = "Erreur lors du transfert  <br><br>";
					echo ($erreur);
				} 

}
else
{
	echo "Tous les champs doivent être complétés";
	/*header('Location: ajouter_un_fichier.php');*/
}


?>