<?php

function accueil() {
	
	require 'template/home.php';
}


//*********************************************
//  Login 
//*********************************************
function login() {
	
	require 'template/login_form.php';
}
		 
function login_traitement() 
{
	if(isset($_POST['valider']))
	{
		require 'login_traitement.php';
	}
	
	
}
//*********************************************
//  inscription 
//*********************************************

function inscription() {
	
	require 'template/inscription_form.php';
}
		 
function inscription_traitement() 
{
	if(isset($_POST['valider']))
	{
		require 'inscription_traitement.php';
	}
	
	
}
//*********************************************
//  mot cde passe oublie 
//*********************************************

function login_oublie() {
	
	require 'template/oublie_form.php';
}
		 
function login_oublie_traitement() 
{
	if(isset($_POST['valider']))
	{
		require 'login_oublie_traitement.php';
	}
	
	
}

?>

