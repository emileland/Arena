<?php
session_start();
require_once (__DIR__.'/isConnect.php');
require_once (__DIR__.'/config/mysql.php');
require_once (__DIR__.'/databaseconnect.php');
require_once (__DIR__.'/variables.php');
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Arena - Réservations</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php require_once (__DIR__.'/header.php'); ?>

    <div>
        <h2>Réservations</h2>
        <p>Consultez, modifiez, validez ou supprimez vos réservations</p>
        <a href="bookings_post_create.php">Ajouter une réservation</a>
    </div>

    <?php foreach ($bookings as $booking) : ?>
        <?php if (isset($_SESSION['LOGGED_USER']) && $booking['user_id'] === $_SESSION['LOGGED_USER']['user_id']) : ?>
            <article>
                <h4><a href="bookings_read.php?id=<?php echo($booking['booking_id']); ?>"><?php echo($booking['startDate']) ?></a> </h4>
            </article>
        <?php endif; ?>
    <?php endforeach ?>
</body>
</html>
