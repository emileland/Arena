<?php session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Arena - Page d'Accueil</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php require_once(__DIR__ . '/header.php'); ?>
        <?php if(isset($_SESSION['LOGIN_ERROR_MESSAGE'])) : ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['LOGIN_ERROR_MESSAGE'];
                unset($_SESSION['LOGIN_ERROR_MESSAGE']); ?>
            </div>
        <?php endif; ?>
    <div style="height: 2000px">
        cc
    </div>
    </body>
</html>
