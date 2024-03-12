<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Créer un compte</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require_once (__DIR__.'/header.php'); ?>
<h1>Créer un compte</h1>
<p>Renseignez vos coordonnées</p>
<form action="submit_signup.php" method="post">
    <label>pseudo
        <input type="text" name="pseudoUp">
    </label><br>
    <label>e-mail
        <input type="email" name="emailUp">
    </label><br>
    <label>mot de passe
        <input type="password" name="passwordUp">
    </label><br>
    <input type="hidden" name="typeUp" value="0">
    <button type="submit">Envoyer</button>
</form>
</body>
</html>
