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
       
        if (empty($_SESSION['usrlogin']) OR empty($_SESSION['usrmdp']))
        {
            echo "Erreur lors de la connexion !";
        }
        else
        {
            echo "Connexion réussie !";
        }
        ?>
    </title>
</head>


<?php // cas d'erreur ==> retour vers main.php
    if (empty($_SESSION["usrlogin"]) OR empty($_SESSION["usrmdp"]))
    {
    ?>
    <h1> Erreur lors de votre connexion...</h1>
    <p><a href="main.php">Retour à la page de connexion</a></p>
    <?php
    }
    else // authentification OK ==> menu
    {
    ?>
    <h1>Connexion réussie. Bienvenue à vous <?php echo $_SESSION["usrlogin"]; ?> !</h1>
    <?php
    }
    ?>
</html>