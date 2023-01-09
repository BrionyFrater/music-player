<?php
#connect to database
$host = 'localhost';
$username = 'levels_user';
$password = 'password123';
$dbname = 'levels';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


$stmt = $conn->query('SELECT * FROM `playlists`');
$playlists = $stmt->fetchAll(PDO::FETCH_ASSOC);

//choose a random playlist background
$pics = ['chill1', 'chill2', 'chill3', 'chill4', 'cloudy', 'cloudy2', 'cloudy3', 'creation', 'surreal1', 'surreal2', 'surreal3', 'surreal4', 'love1', 'love2'];
$picsIndex = rand(1, count($pics));
$picsIndex = $picsIndex - 1;

?>

<div class="success">
    
</div>

<h2>Add New Song</h2>
<section id="new-song-contain" aria-label="Add new songs">

    <form action="newSong.php" method="post" id="add-new-song" enctype="multipart/form-data">

        <div>
            <label for="name">Name: </label>
            <input type="text" placeholder="lost soul (feat. Brent Faiyaz) " id="name" name="name" required>
        </div>
        
        <div>
            <label for="artist">Artist: </label>
            <input type="text" placeholder="Baby Keem" id="artist" name="artist" required>
        </div>



        <div>
            <label for="album">Album: </label>
            <input type="text" placeholder="Swimming" id="album" name="album" required>
        </div>

        <div>
            <label for="feat-artist">Featured Artist (optional): </label>
            <input type="text" placeholder="Brent Faiyaz" id="feat-artist" name="feat-artist">
        </div>

        <div>
            <label for="audio">Audio: </label>
            <input type="file" id="audio" name="audio" required>
        </div>
        
        <div>
            <label for="album-pic">Album Image (optional): </label>
            <input type="file" id="album-pic" name="album-pic">
        </div>

        <div>
            <label for="artist-pic">Artist Image (optional) recommended 700 x 700px: </label>
            <input type="file" id="artist-pic" name="artist-pic">
        </div>


        <input type="submit" value="Add Song">

        
        
    </form>

</section>

<h2>Playlists</h2>
<section id="playlist-all" aria-label="All playlists">
    <div id="playlist-all-contain">

        <a id="new-button" aria-label="New Playlist">
            <div class="playCnt" onclick="newPlaylistFormReveal()">
                <img src="images/new-playlist-icon.png" class="playImage">
                <h3 class="playName">New</h3>
            </div>

            <form action="newPlaylist.php" method="post" id="new-playlist-form">

                <input type="text" required placeholder="Enter a playlist name" name="new" id="new" aria-label="New Playlist Name">
                <input type="submit" value="Create Playlist">
            </form>

        </a>

        <?php foreach ($playlists as $play) : ?>
            <a href="<?= $play['name'] ?>" class="playLink" aria-label="Playlist: <?= $play['name'] ?>">
                <div class="playCnt">
                    <img src="images/play-bk-<?= $pics[$picsIndex] ?>.png" class="playImage">
                    <h3 class="playName"><?= $play['name'] ?></h3>

                    <?php

                    $picsIndex = rand(1, count($pics));
                    $picsIndex = $picsIndex - 1;
                    ?>

                </div>

            </a>
        <?php endforeach; ?>
    </div>

</section>