<?php

    //get sanitized album name from query string


    $artist = strval(htmlspecialchars($_GET['artist']));

    #connect to database
    $host = 'localhost';
    $username = 'levels_user';
    $password = 'password123';
    $dbname = 'levels';

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $stmt = $conn->prepare('SELECT * FROM `user_songs` WHERE `artist` = :artist');
    $stmt->bindParam(':artist', $artist, PDO::PARAM_STR);

    if($stmt->execute()){
        $artist_songs = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
?>


        <h2>Songs by <?=$artist?></h2>
        <section id="artist-all-song" aria-labelledby="Songs by <?=$artist?>">
            <div id="artist-all-song-contain">
                <?php foreach ($artist_songs as $song) : ?>
                    <a href="<?= $song['source'] ?>" class="songLink" aria-labelledby="<?= $song['name'] ?> by <?= $song['artist'] ?>">
                        <img src="<?= $song['cover_pic'] ?>" class="songImage">
                        <h5 class="songName"><?= $song['name'] ?></h5>
                        <p class="songArtist"><?= $song['artist'] ?></p>

                    </a>
                <?php endforeach; ?>
            </div>

        </section>

        <?php

            $stmt = $conn->prepare('SELECT * FROM `user_songs` WHERE `feat_artist` = :artist');
            $stmt->bindParam(':artist', $artist, PDO::PARAM_STR);
            if($stmt->execute()){
                $feat_songs = $stmt->fetchAll(PDO::FETCH_ASSOC);

                if(count($feat_songs) > 0){

        ?>
                    <h2>Songs featuring <?=$artist?></h2>
                    <section id="artist-all-song" aria-labelledby="Songs by <?=$artist?>">
                        <div id="artist-all-song-contain">
                            <?php foreach ($feat_songs as $song) : ?>
                                <a href="<?= $song['source'] ?>" class="songLink" aria-labelledby="<?= $song['name'] ?> by <?= $song['artist'] ?>">
                                    <img src="<?= $song['cover_pic'] ?>" class="songImage">
                                    <h5 class="songName"><?= $song['name'] ?></h5>
                                    <p class="songArtist"><?= $song['artist'] ?></p>

                                </a>
                            <?php endforeach; ?>
                        </div>

                    </section>

                <?php } ?>

        <?php } ?>

<?php } ?>