<?php

require_once "config.php";

// racine des fichier pour l'autoload
define('DIR_ROOT', '../app/');
// salt pour les mot de passe
define('SALT','#£$@tr0c#$£è');
// messages erreurs
define('EXCEPTION_NOT_FOUND', 'Erreur 404 page non trouvée');
define('EXCEPTION_INVALIDE', "l'action demandé n'est pas valide");
define('PUBLIC_PATH',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER["HTTP_HOST"].'/projet_blog_promo/public');
