<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP 7EX3 USER</title>
    </head>
    <body>
        <p>
            <?php
            if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {
                echo $_GET['lastname'] . ' ' . $_GET['firstname']; //affichage de nom et prénom avec GET
            } else {
                echo 'Formulaire invalide';
            }
            ?>
        </p>
    </body>
</html>
