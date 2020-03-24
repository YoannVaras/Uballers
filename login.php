<?php
     // page de contrôle de login
     // page "aveugle" qui memorise le nom des variables de session
     session_start();
     $_SESSION['usrlogin'] = $_POST['login'];
     $_SESSION['usrmdp'] = $_POST['mdp'];
    // unset($_SESSION["usrnom"]); 
    header("location:loginsuite.php");
