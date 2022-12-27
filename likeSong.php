<?php


$like = htmlspecialchars($_POST['like']);
$song = htmlspecialchars($_POST['song']);
$artist = htmlspecialchars($_POST['artist']);

if($like === 'YES' or $like === 'NO'){
    

    #connect to database
    $host = 'localhost';
    $username = 'levels_user';
    $password = 'password123';
    $dbname = 'levels';

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $conn->prepare('UPDATE `user_songs` SET `liked` = :liked WHERE `name` = :songName AND `artist` = :artist');
    $stmt->bindParam(':liked', $like, PDO::PARAM_STR);
    $stmt->bindParam(':songName', $song, PDO::PARAM_STR);
    $stmt->bindParam(':artist', $artist, PDO::PARAM_STR);

    if($stmt->execute()){
        
    }else{
        echo '<script>alert("Error");</script>';
    }


}