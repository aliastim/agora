<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap version 3.3.7 -->
    <title><?php echo($pagetitle); ?></title>

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./css/app.css">
    <!--<?php /*require 'config.php'; */?>-->


  </head>
  <body>



    <nav class="navbar navbar-fixed-top navbar-inverse navbaredit">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand outlinenone" href="accueil.php"><img src="./img/Agora.png" class="img-responsive logonav" alt="Responsive image"></a> 
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php if($ongletaccueil==1){echo ('class="activenav"');} ?>><a class="<?php if($ongletaccueil==1){echo ("activenavcolor");} else {echo ("activenavcolor2");} ?> navtitles" href="accueil.php">Accueil</a></li>
            <li <?php if($ongletmesfichiers==1){echo ('class="activenav"');} ?>><a class="<?php if($ongletmesfichiers==1){echo ("activenavcolor");} else {echo ("activenavcolor2");} ?> navtitles" href="mes_fichiers.php">Mes fichiers <span class="sr-only">(current)</span></a></li> <!-- active -->
            <li <?php if($ongletfaq==1){echo ('class="activenav"');} ?>><a class="<?php if($ongletfaq==1){echo ("activenavcolor");} else {echo ("activenavcolor2");} ?> navtitles" href="faq.php">FAQ</a></li>
 
          </ul>
          
          <ul class="nav navbar-nav navbar-right srchbar">
            <form class="navbar-form navbar-left">
                <div class="input-group">
                  <input type="text" class="form-control searchbarnav" placeholder="Rechercher...">
                  <span class="input-group-btn">
                    <button class="btn btn-default searchbarnav2" type="button"><img src="./img/icones/search.png" class="img-responsive iconesearchnav" alt="Responsive image"></button>
                  </span>
                </div><!-- /input-group -->
               
            </form>

            <li><a href="ajouter_un_fichier.php" class="outlinenone"><img src="./img/icones/plus.png" class="img-responsive iconeplusnav" alt="Responsive image"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="./img/icones/mycount.png" class="img-responsive iconesnav" alt="Responsive image"></a>
              <ul class="dropdown-menu">
                <li><a href="mon_compte.php">Mon compte</a></li>
                <li><a href="mes_fichiers.php">Mes fichiers</a></li>
                <li><a href="#" style="color: red">Déconnexion</a></li>
                <li role="separator" class="divider"></li>
                <li class="text-center">Nom de l'utilisateur</li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<!-- ATTENTION IL FAUT FERMER BODY ET HTML-->