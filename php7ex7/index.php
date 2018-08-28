<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 7EX7</title>
    </head>
    <body>

        <?php
        if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['sendFile'])) {
            //variable qui stock les infos du fichier récupérées par la fonction pathinfo
            $pathFile = pathinfo($_FILES['sendFile']['name']);
             //affichage des valeurs des paramètres
            echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $pathFile['filename'] . ' ' . $pathFile['extension'];
        } else { // sinon afficher le formulaire
            ?>

            <!--sinon affichage du formulaire-->

            <form enctype="multipart/form-data" action="index.php" method="POST">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <label for="lastname">Votre nom </label>
                <input type="text" name="lastname" id="lastname" />
                <label for="fisrtname">Votre prénom </label>
                <input type="text" name="firstname" id="lastname" />
                <input type="file" name="sendFile" />
              <input type="submit" name="submit" value="ENVOYER" />
            </form>
            <?php
        }
        ?>
    </body>
</html>
