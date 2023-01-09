<?php

$playname = htmlspecialchars($_POST['new']);
$playname = str_replace(" ", "_", $playname);



#connect to database
$host = 'localhost';
$username = 'levels_user';
$password = 'password123';
$dbname = 'levels';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->prepare('INSERT INTO `playlists` (`name`) VALUES (:playname)');
$stmt->bindParam(':playname', $playname, PDO::PARAM_STR);

if($stmt->execute()){
    
}else{
    echo "<script>alert('An error occured while trying to create new playlist')</script>";
}