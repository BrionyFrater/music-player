<h2>Liked Songs</h2>
<section id="hme-all-song" aria-labelledby="All songs">
    <div id="hme-all-song-contain">
        <?php foreach ($all as $song) : ?>
            <a href="<?= $song['source'] ?>" class="songLink" aria-labelledby="<?= $song['name'] ?> by <?= $song['artist'] ?>">
                <img src="<?= $song['cover_pic'] ?>" class="songImage">
                <h5 class="songName"><?= $song['name'] ?></h5>
                <p class="songArtist"><?= $song['artist'] ?></p>

            </a>
        <?php endforeach; ?>
    </div>

</section>