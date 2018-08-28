<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP 7EX4 USER</title>
    </head>
    <body>
        <p>
            <?php
            if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
                echo $_POST['lastname'] . ' ' . $_POST['firstname']; //affichage de nom et prénom avec POST
            } else {
                echo 'Formulaire invalide';
            }
            ?>
        </p>
    </body>
</html>
