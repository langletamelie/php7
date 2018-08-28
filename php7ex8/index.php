<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 7EX8</title>
    </head>
    <body>

        <?php
                if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['file'])) {
            //variable qui stock les infos du fichier récupérées par la fonction pathinfo
            $fileInfo = pathinfo($_FILES['file']['name']);
            if ($fileInfo['extension'] == 'PDF' || $fileInfo['extension'] == 'pdf') {
                echo 'Le fichier est bien un pdf';
            }
            //affichage des valeurs des paramètres
            echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' a envoyé le fichier ' . $_FILES['file']['name'] . ' ' . $fileInfo['extension'];
        } else { // sinon afficher le formulaire   
            ?>

            <!--  Mr ou Mme + formulaire demandant nom et prénom-->

            <form enctype="multipart/form-data" action="index.php" method="POST">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility">
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="lastname">Votre nom </label>
                <input type="text" name="lastname" id="lastname" />
                <label for="firstname">Votre prénom </label>
                <input type="text" name="firstname" id="firstname" />
                <input type="file" name="sendFile" />
                <input type="submit" name="submit" value="ENVOYER" />
            </form>
            <?php
        }
        ?>
    </body>
</html>
