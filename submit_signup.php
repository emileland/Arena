<?php
session_start();
require_once (__DIR__.'/config/mysql.php');
require_once (__DIR__.'/databaseconnect.php');
require_once (__DIR__.'/functions.php');
require_once (__DIR__.'/variables.php');


$postData = $_POST;

if(isset($postData['pseudoUp']) && isset($postData['emailUp']) && isset($postData['passwordUp'])){
    $insertUser = $mysqlClient-> prepare('INSERT INTO users(pseudo, email, password, type) VALUES (:pseudoUp, :emailUp, :passwordUp, :typeUp)');
    $insertUser->execute([
        'pseudoUp' => $postData['pseudoUp'],
        'emailUp' => $postData['emailUp'],
        'passwordUp' => $postData['passwordUp'],
        'typeUp' => $postData['typeUp']
    ]);
}
