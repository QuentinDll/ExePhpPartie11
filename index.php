<?php include 'ctrl.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculatrice</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="container">
            <h1>Une calculatrice en PHP</h1>
            <form action="#" method="get">
                <input type="text" class="form-control col-3" name="chiffre1" value="<?= $chiffre1 ?>"/>
                <input type="text" class="form-control col-3" name="chiffre2" value="<?= $chiffre2 ?>"/>
                <input type="submit" class="form-control col-1" name="addition" value="+"/>
                <input type="submit" class="form-control col-1" name="soustraction" value="-"/>
                <input type="submit" class="form-control col-1" name="multiplication" value="*"/>
                <input type="submit" class="form-control col-1" name="division" value="/"/>
            </form>
            <?php
            //utilisation de count pour savoir si il ya des erreurs dans le tableau
            if (count($error) == 0) {
                //si il n'y a pas d'erreur afficher le resultat 
                ?>
                <p class="result">Résultat : <?= $result; ?> </p>
                <?php
            } else {
                //sinon afficher l'erreur
                ?>
                <p><?= implode('. ', $error) ?></p>
            <?php } ?>
        </div>
    </body>
</html>
