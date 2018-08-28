<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 7EX4</title>
    </head>
    <body>
        <!-- formulaire demandant nom et prénom-->
        <form action="user.php" method="POST">
            <label for="lastname">Votre nom <input type="text" name="lastname" id="lastname" /></label>
            <label for="firstname">Votre prénom <input type="text" name="firstname" id="firstname" /></label>
            <p><input type="submit" name="submit" value="CREER"/></p>
        </form>
    </body>
</html>
