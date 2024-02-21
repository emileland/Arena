<?php
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Login - Arena</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login</h1>
    <form action="submit_login.php" method="post">
        <p>
            <label>Nom d'utilisateur</label>
            <input type="text" name="user">
        </p>
        <p>
            <label>e-mail</label>
            <input type="email" name="mail">
        </p>
        <p>
            <label>mot de passe</label>
            <input type="password" name="password">
        </p>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
