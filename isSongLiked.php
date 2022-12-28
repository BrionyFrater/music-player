<?php


$artist = htmlspecialchars($_GET['artist']);
$song = htmlspecialchars($_GET['song']);

#connect to database
$host = 'localhost';
$username = 'levels_user';
$password = 'password123';
$dbname = 'levels';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->prepare('SELECT `liked` FROM `user_songs` WHERE `name` = :songName AND `artist` = :artist');
$stmt->bindParam(':songName', $song, PDO::PARAM_STR);
$stmt->bindParam(':artist', $artist, PDO::PARAM_STR);

if($stmt->execute()){
    $liked = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($liked);
}else{
    echo '<script>alert("Error");</script>';
}