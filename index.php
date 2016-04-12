<?php
session_start();
require_once 'modele/model.php';
require_once 'controllers.php';



// "routes"
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo "<small>route = $uri</small><br>";

echo $uri;

if('/index.php' === $uri)
{
	accueil();
}	

//*********************************************
// cas de Login 
elseif('/index.php/login' === $uri)
{
	login();
}

elseif ('/index.php/accesForum' === $uri & !isset($_SESSION['user']['id'])) 
{
	login();
}
elseif ('/index.php/accesCarnet' === $uri & !isset($_SESSION['user']['id']) )
{
	login();
}
elseif ('/index.php/login_post' === $uri )
{
	login_traitement() ;
}
elseif ('/index.php/login_init' === $uri )
{
	login_oublie() ;
}

elseif ('/index.php/login_init_post' === $uri )
{
	login_oublie_traitement() ;
}
//*********************************************
// cas de Login 
elseif('/index.php/inscription' === $uri)
{
	inscription();
}

elseif ('/index.php/inscription_post' === $uri )
{
	inscription_traitement() ;
}

//*********************************************

else {
	header('Status: 404 Not Found');
	echo '<html><body>Page non trouvée...</body></html>';
}
?>