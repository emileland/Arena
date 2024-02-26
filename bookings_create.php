<?php
session_start();
require_once (__DIR__.'/isConnect.php');
require_once (__DIR__.'/config/mysql.php');
require_once (__DIR__.'/databaseconnect.php');
require_once (__DIR__.'/variables.php');

$postData = $_POST;
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Ajout de Réservation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require_once (__DIR__.'/header.php'); ?>
    <h1>Ajouter une réservation</h1>
    <form action="bookings_post_create.php" method="POST">
        <div>
            <label for="date">Date : </label>
            <input type="date" name="date" id="date">
        </div>
        <div>
            <label for="startTime">Heure de début : </label>
            <select name="startTime" id="startTime">
                <option value="">Choisissez une option</option>
                <?php for ($i=0; $i < 10; $i++) : ?>
                    <option value="<?php
                    $opt = date_create_from_format("H:i:s", $i + 8 . ":00:00");
                    echo date_format($opt, 'H:i:s');
                    ?>"><?php echo date_format($opt, 'H\hi'); ?>
                    </option>
                <?php endfor; ?>
            </select>
        </div>
        <div>
            <label for="sport">Sport : </label>
            <select name="sport" id="sport">
                <option value="">---Choisissez une option</option>
                <?php foreach ($sports as $sport) : ?>
                <option value="<?php echo($sport['sport_id']) ?>"><?php echo($sport['name']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="hidden" name="status" value="0" />
        <input type="hidden" name="is_enabled" value="1" />
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
