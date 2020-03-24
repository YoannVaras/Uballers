<?php
// page de menu qui teste l'existence des variables de session
//et affiche soit  le menu soit le message d'erreur
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
    <?php //titre page variable
    if (empty($_SESSION["usrnom"]) OR empty($_SESSION["nom"]) OR empty($_SESSION["numail"]) OR empty($_SESSION["conf_numail"]) OR empty($_SESSION["mdp"]))
    {
        echo "Erreur lors de l'inscription !";
    }
    else
    {
        echo "Inscription réussie !";
    }
     ?>
     </title>
  </head>



    <?php // cas d'erreur ==> retour vers main.php
    if (empty($_SESSION["usrnom"]) OR empty($_SESSION["nom"]) OR empty($_SESSION["numail"]) OR empty($_SESSION["conf_numail"]) OR empty($_SESSION["mdp"]))
    {
    ?>
    <h1> Erreur lors de votre inscription...</h1>
    <p><a href="main.php">Retour à la page d'inscription</a></p>
    <?php
    }
    else // authentification OK ==> menu
    {
    ?>
    <h1>Inscription réussie. Bienvenue à vous <?php echo $_SESSION["usrnom"]; ?> !</h1>
    <?php
    }
    ?>

</html>