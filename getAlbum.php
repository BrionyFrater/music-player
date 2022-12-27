<?php

//get sanitized album name from query string
$albumName = strval(htmlspecialchars($_GET['album']));

#connect to database
$host = 'localhost';
$username = 'levels_user';
$password = 'password123';
$dbname = 'levels';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->prepare('SELECT * FROM `user_songs` WHERE `album` = :albumName');
$stmt->bindParam(':albumName', $albumName, PDO::PARAM_STR);

if($stmt->execute()){
    $album = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($album);
}else{
    echo '<script>alert("Error");</script>';
}



?>
