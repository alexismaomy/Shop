<?php
//passage de l'adresse de la variable $cnx qui doit contenir toutes les données de connexion.
function connexion(&$cnx)
{
	$connexion = "host=localhost user=alexis dbname=alexis  password=alexis  port=5432";
	$cnx = pg_connect ($connexion);
	//si la connexion n'a pu s'établir, pg_connect retourne false :
	if( ! $cnx) {
		//echo 'Echec de la connexion à la base de données';
		//Arrêt du programme
		exit( );
	}//fin if
	//Affichage contrôle temporaire
	else {
		//echo 'Connexion établie';
	}
}//fin function


