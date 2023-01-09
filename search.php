<?php

$query = htmlspecialchars($_GET['term']);
$term = "%$query%";


#connect to database
$host = 'localhost';
$username = 'levels_user';
$password = 'password123';
$dbname = 'levels';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$count = $conn->query('SELECT COUNT(*) FROM `user_songs`')->fetch();
$count = $count['COUNT(*)'];

#display message if there are no songs
if ($count == 0) { ?>

    <h2 id="hme-nth-here">Looks like <br> there is</h2>
    <h2 id="hme-nth">nothing here.</h2>

<?php } else {


    $stmt = $conn->prepare('SELECT * FROM `user_songs` WHERE `name` LIKE :term ORDER BY RAND()');
    $stmt->bindParam(':term', $term, PDO::PARAM_STR);
    $stmt->execute();
    $all = $stmt->fetchAll(PDO::FETCH_ASSOC);

       
    $stmt = $conn->prepare('SELECT * FROM `user_songs` WHERE `album` LIKE :term GROUP BY `album`');
    $stmt->bindParam(':term', $term, PDO::PARAM_STR);
    $stmt->execute();
    $albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    $stmt = $conn->prepare('SELECT `artist`, `artist_pic` FROM `user_songs` WHERE `artist` LIKE :term GROUP BY `artist`');
    $stmt->bindParam(':term', $term, PDO::PARAM_STR);
    $stmt->execute();
    $artists = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $playlists = $conn->query('SELECT * FROM `playlists`');
    $playlists = $playlists->fetchAll(PDO::FETCH_ASSOC);

    

?>
    <div class="success">
        <h6>Playlist updated</h6>
    </div>

    



    <!-- Albums -->
    <h2>Albums</h2>
    <section id="hme-album-carousel" aria-label="All albums">
        <?php foreach ($albums as $album) : ?>
            <a href="<?= $album['album'] ?>" class="albumLink" aria-label="<?= $album['album'] ?> by <?= $album['artist'] ?>, click to play">
                <img src="<?= $album['cover_pic'] ?>" class="albumImage">
                <img src="images/play.svg" class="albumPlay">
                <h5 class="albumName"><?= $album['album'] ?></h5>
                <p class="albumArtist"><?= $album['artist'] ?></p>
            </a>
        <?php endforeach; ?>
    </section>

    <!-- All Songs -->
    <h2>Songs</h2>
    <section id="hme-all-song" aria-label="Songs matching <?=$term?>">
        <div id="hme-all-song-contain">

            <?php foreach ($all as $song) : ?>
                <a href="<?= $song['source'] ?>" class="songLink" aria-label="<?= $song['name'] ?> by <?= $song['artist'] ?>">
                    <img src="<?= $song['cover_pic'] ?>" class="songImage">
                    <h5 class="songName"><?= $song['name'] ?></h5>
                    <p class="songArtist"><?= $song['artist'] ?></p>

                    <button class="songOptions"><img src="images/dots.svg"></button>
                </a>
                <div class="playListMenu">
                    <form action="addToPlayList.php" method="post" class="addToPlayForm">



                        <?php foreach ($playlists as $play) : ?>

                            <input hidden value="<?= $song['id'] ?>" name="id">
                            <div class="--flex-left">
                                <input type="checkbox" name="<?= $play['name'] ?>" id="<?= $play['name'] ?>">
                                <label for="<?= $play['name'] ?>"><?= $play['name'] ?></label>
                            </div>



                        <?php endforeach; ?>
                        <input type="submit" value="Add to playlists" class="playlistSubmit"></input>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

    </section>

    <!-- Artists -->
    <h2>Artists</h2>
    <section id="hme-all-artists-carousel">
        <?php foreach ($artists as $artist) : ?>
            <a href="<?= $artist['artist'] ?>" class="artistLink" aria-label="<?= $artist['artist'] ?> songs">
                <img src="<?= $artist['artist_pic'] ?>" class="artistImage">
                <h5 class="artistArtist"><?= $artist['artist'] ?></h5>
            </a>
        <?php endforeach; ?>
    </section>

<?php } ?>