<?php
session_start();
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

    <?php foreach ($bookings as $booking) : ?>
        <article>
            <h3><a href="bookings_read.php?id=<?php echo($booking['booking_id']); ?>"><?php echo($booking['startDate']) ?></a> </h3>
        </article>
    <?php endforeach ?>
</body>
</html>
