<?php

    $id = strval(htmlspecialchars($_POST['id']));
    
    
    #connect to database
    $host = 'localhost';
    $username = 'levels_user';
    $password = 'password123';
    $dbname = 'levels';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $conn->query('SELECT * FROM `playlists`');
    $allPlaylists = $stmt->fetchAll(PDO::FETCH_ASSOC);

    

    foreach($allPlaylists as $play){
        
        
        if(isset(($_POST[$play['name']])) and htmlspecialchars($_POST[$play['name']]) === "on"){
            $stmt = $conn->prepare('UPDATE `playlists` SET `songs` = :playSongs WHERE `name` = :playName');
            $newSongs = $play['songs'].','.$id;
            $playName = $play['name'];

            
            

            $stmt->execute(array(':playSongs'=> $newSongs, ':playName'=> $playName));
            
           
        }
    }