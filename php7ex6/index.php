<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 7EX6</title>
    </head>
    <body>
        <?php
        if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname'])) {
            //si les champs sont remplis afficher gender lastname et lastname
            echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
        } else { // sinon afficher le formulaire
            ?>
            <!--  M ou Mme + formulaire demandant nom et prénom-->
            <form action="index.php" method="POST">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility">
                    <option selected disabled>Veuillez sélectionner une option</option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="lastname">Votre nom </label>
                <input type="text" name="lastname" id="lastname" placeholder="Nom" />
                <label for="firstname">Votre prénom </label>
                <input type="text" name="firstname" id="firstname" placeholder="Prénom" />
                <input type="submit" name="submit" value="CREER" />
            </form>
            <p>Veuillez remplir votre formulaire</p>
            <?php
        }
        ?>
    </body>
</html>
