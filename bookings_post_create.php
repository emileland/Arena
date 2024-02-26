<?php
session_start();

require_once (__DIR__.'/isConnect.php');
require_once (__DIR__.'/config/mysql.php');
require_once (__DIR__.'/databaseconnect.php');

$postData = $_POST;

if(
    empty($postData['date'])
    || empty($postData['startTime'])
    || empty($postData['sport'])
){
    echo "Il faut une date, une heure et un sport pour valider le formulaire";
    return;
}

$startDate = date_create(trim(strip_tags($postData['date']))." ".trim(strip_tags($postData['startTime'])));
$endDate = date_create(trim(strip_tags($postData['date']))." ".trim(strip_tags($postData['startTime'])))->add(new DateInterval('PT1H'));
$sport_id = trim(strip_tags($postData['sport']));
$status = $postData['status'];
$is_enabled = $postData['is_enabled'];
echo date_format($startDate, 'Y-m-d H:i:s')."<br/>";
echo date_format($endDate, 'Y-m-d H:i:s');

$insertBooking = $mysqlClient->prepare('INSERT INTO bookings(startDate, endDate, sport_id, status, user_id, is_enabled) VALUES (:startDate, :endDate, :sport_id, :status, :user_id, :is_enabled)');
$insertBooking->execute([
    'startDate' => date_format($startDate, 'Y-m-d H:i:s'),
    'endDate' => date_format($endDate, 'Y-m-d H:i:s'),
    'sport_id' => $sport_id,
    'status' => $status,
    'user_id' => $_SESSION['LOGGED_USER']['user_id'],
    'is_enabled' => $is_enabled,
]);


?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Arena - Agenda</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

</body>
</html>
