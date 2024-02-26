<?php

$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$bookingsStatement = $mysqlClient->prepare('SELECT * FROM bookings');
$bookingsStatement->execute();
$bookings = $bookingsStatement->fetchAll();

$sportsStatement = $mysqlClient->prepare('SELECT * FROM sports');
$sportsStatement->execute();
$sports = $sportsStatement->fetchAll();