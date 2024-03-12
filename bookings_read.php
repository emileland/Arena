<?php
session_start();
require_once(__DIR__.'/isConnect.php');
require_once (__DIR__.'/config/mysql.php');
require_once (__DIR__.'/databaseconnect.php');
require_once (__DIR__.'/variables.php');
require_once  (__DIR__.'/functions.php');

$getData = $_GET;
$bookingData = [];

if(isset($getData['id'])){
    foreach ($bookings as $booking){
        if($booking['booking_id'] == $getData['id']){
            $bookingData = $booking;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Réservation</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require_once (__DIR__.'/header.php') ?>
<h1><?php echo $bookingData['startDate'] ?></h1
<label>Horaire de début :
    <input type="datetime-local" value="<?php echo $bookingData['startDate'] ?>" disabled>
</label><br>
<label>Horaire de fin :
    <input type="datetime-local" value="<?php echo $bookingData['endDate'] ?>" disabled>
</label><br>
<label>Sport :
    <input type="text" value="<?php echo $sports[$bookingData['sport_id']]['name'] ?>" disabled>
</label>
<p>Vous recevrez un mail contenant un code à usage unique 24h avant votre réservation <a href="notSend.php">Cliquez ici si non reçu</a></p>
<a>Modifier</a>
<a>Supprimer</a>
</body>
</html>
