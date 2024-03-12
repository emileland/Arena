<?php
session_start();
require_once (__DIR__.'/isConnect.php');
//faire un isAdmin
require_once (__DIR__.'/config/mysql.php');
require_once (__DIR__.'/databaseconnect.php');
require_once (__DIR__.'/variables.php');
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Arena - Agenda</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require_once (__DIR__.'/aHeader.php'); ?>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>nom</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sports as $sport) : ?>
        <tr>
            <td><?php echo($sport['sport_id']) ?></td>
            <td><?php echo($sport['name']) ?></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
