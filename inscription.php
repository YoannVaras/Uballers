<?php
     // page de contrôle de login
     // page "aveugle" qui memorise le nom des variables de session
     session_start();
     $_SESSION["usrnom"] = $_POST["prenom"];
     $_SESSION["nom"] = $_POST["nom"];
     $_SESSION["numail"] = $_POST["numail"];
     $_SESSION["conf_numail"] = $_POST["conf_numail"];
     $_SESSION["mdp"] = $_POST["mdp"];
    // unset($_SESSION["usrnom"]); 
    header("location:inscriptionsuite.php");
