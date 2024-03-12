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
        <th>pseudo</th>
        <th>email</th>
        <th>mot de passe</th>
        <th>type</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?php echo($user['user_id']) ?></td>
        <td><?php echo($user['pseudo']) ?></td>
        <td><?php echo($user['email']) ?></td>
        <td><?php echo($user['password']) ?></td>
        <td><?php echo($user['type']) ?></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>
