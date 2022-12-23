<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels - Looks Like There's Nothing Here</title>
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
        if ($count == 0) { ?>
           
           <h4>Looks like there's nothing here</h4>
           
           <button id="add-new-songs">Add Songs</button>

        <?php } else { 

            $results = $conn->query('SELECT * FROM `user_songs`');
            $results = $results->fetchAll(PDO::FETCH_ASSOC);
            
            #select a random song
            $header_song_id = rand(1, count($results));
            $header_song_id = $header_song_id - 1;
            
        ?>
    
            <label for="search-songs">Search</label>
            <input type="search" name="search-songs" id="search-songs" placeholder="Songs, Artists, Albums" aria-description="Search for songs, artists and/or albums">
            
            <!--header song is a randomly selected song-->
            <section id="ctn-header-song">
                <img id="header-song-img">
                <audio src="<?=$results[$header_song_id]['source']?>" controls></audio>
                <button>
                    <img><!--play/pause-->greg
                </button>
            </section>

        <?php } ?>

</body>
</html>