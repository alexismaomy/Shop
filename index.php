<<<<<<< HEAD
<?php
    session_start();
    include ('lib/php/mes_fonctions_serveur.php');
    //Initialiser de manière globale la variable qui devra contenir les données de connexion
    $cnx = "";
    //Appel à la fonction qui stockera les données de connexion dans $cnx
    connexion($cnx);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>magasin</title>
        <link rel="stylesheet" type="text/css" href="./lib/css/style.css" />
    </head>
    <body>
        <div id="wrapper">
            <header>
                <div id="banniere" align="center">
                    <img src="./images/banniere.jpg" alt="banniere" />
                </div>
            </header>	
            <div id="contenu">
                <?php 
                    if(!isset($_SESSION['page'] ))
                    {
                            $_SESSION['page']="./pages/accueil.php";
                    }  
                    if(isset($_GET['page']))
                    { 
                            $_SESSION['page']="./pages/".$_GET['page'];
                    }
                    if(file_exists($_SESSION['page']))
                    { 			
                            include($_SESSION['page']);
                    }
                    else
                    {
                            echo"erreur";
                    }
                ?>
            </div>				
        </div>
=======
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
>>>>>>> ff79b5e858b9ad96923a4f9277bc999658bbb99d
    </body>
</html>
