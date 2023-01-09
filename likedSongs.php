<?php
    #connect to database
    $host = 'localhost';
    $username = 'levels_user';
    $password = 'password123';
    $dbname = 'levels';

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


    $liked = $conn->query('SELECT * FROM `user_songs` WHERE `liked` = "YES"  ORDER BY RAND()');
    $liked = $liked->fetchAll(PDO::FETCH_ASSOC);

?>


<h2>Liked Songs <img src="images/heart-filled-orange.svg"></h2>
<section id="like-all-song" aria-label="All songs">
    <div id="like-all-song-contain">
        <?php foreach ($liked as $song) : ?>
            <a href="<?= $song['source'] ?>" class="songLink" aria-label="<?= $song['name'] ?> by <?= $song['artist'] ?>">
                <img src="<?= $song['cover_pic'] ?>" class="songImage">
                <h5 class="songName"><?= $song['name'] ?></h5>
                <p class="songArtist"><?= $song['artist'] ?></p>

            </a>
        <?php endforeach; ?>
    </div>

</section>