<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels - Music Player</title>

    <link href="index.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
</head>

<body>
    <?php

        #connect to database
        $host = 'localhost';
        $username = 'levels_user';
        $password = 'password123';
        $dbname = 'levels';

        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
     
        $count = $conn->query('SELECT COUNT(*) FROM `user_songs`')->fetch();
        $count = $count['COUNT(*)'];
  
        #redirect if there are no songs
        if ($count == 0) {
            header('location: noContent.html');
        }
    ?>

    <div id="wrapper">

        <header>
            <img id="levels-logo" src="images/levels-logo.png" alt="the logo for levels music player">
            <h6>Levels Music Player</h6>

            <label for="search-songs">Search</label>
            <input type="search" name="search-songs" id="search-songs" placeholder="Songs, Artists, Albums">
        </header>

        <nav>
            <button>Home</button>
            <button>Liked Songs</button>
            <button>Recently Played</button>
        </nav>
        
    </div>

    


</body>
</html>