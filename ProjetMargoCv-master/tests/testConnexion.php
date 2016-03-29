<!DOCTYPE HTML>

<html lang = "FR">
    <head>
        <meta charset = "UTF-8">
    </head>
    
    <body>
        <?php
        require_once ("../modele/dao/Connexion.php");
        use modele\dao\Connexion;

        $connexion = Connexion:: seConnecter();
        echo var_dump($connexion);
        ?>
    </body>
</html>