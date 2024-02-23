<?php
session_start();
require_once(__DIR__ . '/functions.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Profil - Arena</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require_once(__DIR__.'/header.php'); ?>
    <?php
    if (!isset($_SESSION['LOGGED_USER']))
    {
        require_once(__DIR__.'/login.php');
    }
    else{
        echo "vous etes connectés";
    }?>
</body>
</html>
