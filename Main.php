<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body> 
    <header>
        <span>Adresse email ou mobile</span>
        <span>Mot de passe</span>

        <form action="login.php" method="post">
            <input type="text" name="login" id="login" placeholder="Votre login">
            <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
            <button type="submit" id="co">Connexion</button>
        </form>

        <span>Information de compte oubliées ?</span>
    </header>

    <section>
        <span>Inscription</span><br>
        <span>C'est gratuit (et ca le restera toujours)</span><br>

        <form action="inscription.php" method="post">

            <input type="text" name="prenom" id="prenom" placeholder="Prénom">
            <input type="text" name="nom" id="nom" placeholder="Nom de famille"><br>
            <input type="text" name="numail" id="numail" placeholder="Numéro de mobile ou mail"><br>
            <input type="text" name="conf_numail" id="conf_numail" placeholder="Confirmer numéro de mobile ou mail"><br>
            <input type="password" name="mdp" id="mdp_reg" placeholder="Nouveau mot de passe"><br>
            <span>Date de naissance</span><br>

            <select name="jour" id="jour" required> 
                <option value="">Jour</option>
                    <?php
                    for($date_jour = 1; $date_jour <= 31; $date_jour++)
                    {
                    ?>
                <option value="<?php $date_jour ?>"><?php echo $date_jour?></option>
                    <?php
                    }   
                    ?>
            </select>

            <select name="mois" id="mois" required>
                <option value="">Mois</option>
                    <?php
                    for($date_mois = 1; $date_mois <= 12; $date_mois++)
                    {
                    ?>
                <option value="<?php $date_mois ?>"><?php echo $date_mois?></option>
                    <?php
                    }
                    ?>
            </select>


            <select name="annee" id="annee" required>
                <option value="">Année</option>
                    <?php
                    for($date_annee = 1900; $date_annee <= 2010; $date_annee++)
                        {
                    ?>
                <option value="<?php echo $date_annee ?>"><?php echo $date_annee ?></option>
                    <?php
                        }
                    ?>
            </select>

            <span>Pourquoi indiquer ma date de naissance ?</span><br>
            <input type="radio" name="sexe" id="femme"><label for="femme">Femme</label>
            <input type="radio" name="sexe" id="homme"><label for="homme">Homme</label><br>
            <span>En cliquant sur Inscription, vous acceptez nos <a href="">Condition</a> et indiquez que vous avez lu notre <a href="">Politique d'utilisation des données</a> y compris notre <a href="">Utilisation des cookies.</a> Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.</span><br>
            <input type="submit" value="Inscription">

        </form>

    </section>
</body>
</html>