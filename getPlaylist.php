<?php

//get sanitized album name from query string


    $playlist = strval(htmlspecialchars($_GET['playlist']));

    #connect to database
    $host = 'localhost';
    $username = 'levels_user';
    $password = 'password123';
    $dbname = 'levels';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $conn->prepare('SELECT `songs` FROM `playlists` WHERE `name` = :playlist');
    $stmt->bindParam(':playlist', $playlist, PDO::PARAM_STR);
    
    if($stmt->execute()){
        $playIndex = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $playIndex = explode(',', $playIndex[0]['songs']);
        

        // Create a placeholder for each value in the array
        $qMarks = str_repeat('?,', count($playIndex) - 1) . '?';
        

        $stmt = $conn->prepare("SELECT * FROM `user_songs` WHERE `id` IN ($qMarks)");
        

        if($stmt->execute($playIndex)){
            $songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($songs);
        }
        
        
        

        
    }
    





?>
