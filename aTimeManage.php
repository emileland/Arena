<?php
session_start();
?>

<!DOCTYPE html>

<html lang="fr">
<head>
    <title>Gestion Temps</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require_once (__DIR__.'/aHeader.php'); ?>

<h2>Heure Actuelle</h2>

<div id="timeNow"></div>

<h2>Modifier l'Heure</h2>
<label>Modifier l'heure : <input type="checkbox" name="fakeTime" id="fakeTime" onchange="timeFake()"></label><br/>
<div id="changeDate">
    <label>Heure départ : <input type="time" name="startTime" id="startTime" value="12:00"> </label>
    <input type="button" value="Heure Actuelle"><br/>
    <input type="button" value="actualiser" name="update" ><br/>
    <input type="button" value="x0,5" name="x0.5" id="x0.5" onclick="chooseSpeed(0.5)">
    <input type="button" value="x1" name="x1" id="x1" onclick="chooseSpeed(1)">
    <input type="button" value="x2" name="x2" id="x2" onclick="chooseSpeed(2)">
    <input type="button" value="x5" name="x5" id="x5" onclick="chooseSpeed(5)">
    <input type="button" value="x10" name="x10" id="x10" onclick="chooseSpeed(10)">
    <input type="button" value="x100" name="x100" id="x100" onclick="chooseSpeed(100)">
    <input type="button" value="x1000" name="x100" id="x100" onclick="chooseSpeed(1000)">
</div>

<h2>Heure Utilisée</h2>

<div id="displayTime"></div>
<script src="script/script.js"></script>
</body>
</html>