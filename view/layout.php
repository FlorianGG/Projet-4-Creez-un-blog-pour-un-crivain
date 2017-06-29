<?php 
	namespace view;
 ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="web/css/style.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="content">
			<header>
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?controller=article&action=index">Accueil</a></li>
                        <li><a href="index.php?controller=article&action=index">Liste des articles</a></li> 
                      </ul>
                    </div>
            </header>

            <div id="specificContent">
                <?= $content ?>
            </div>
            <footer>
                <p>Site réalisé par Florian Garcia</p>
            </footer>    
        </div>
        <script type="text/javascript" src="web/js/script.js"></script> 
    </body>
</html>