<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 7EX5</title>
    </head>
    <body>
        <!--  M ou Mme + formulaire demandant nom et prénom-->
        <form action="index.php" method="POST">
            <label for="civility">Civilité</label>
            <select name="civility" id="civility">
                <option selected disabled>Veuillez sélectionner une option</option>
                <option value="choice1">Monsieur</option>
                <option value="choice2">Madame</option>
            </select>
            <label for="lastname">Votre nom <input type="text" name="lastname" id="lastname" /></label>
            <label for="firstname">Votre prénom <input type="text" name="firstname" id="firstname" /></label>
            <p><input type="submit" name="submit" value="CREER" /></p>
        </form>
    </body>
</html>
