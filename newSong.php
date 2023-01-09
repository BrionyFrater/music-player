<?php

$song = htmlspecialchars($_POST['name']);
$artist = htmlspecialchars($_POST['artist']);
$album = htmlspecialchars($_POST['album']);
$audio = "songs/added/".htmlspecialchars($_FILES['audio']['name']);

move_uploaded_file($_FILES['audio']['tmp_name'], "$audio");

#connect to database
$host = 'localhost';
$username = 'levels_user';
$password = 'password123';
$dbname = 'levels';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);


if(htmlspecialchars($_POST['feat-artist']) != "" and htmlspecialchars($_FILES['album-pic']['size']) != 0 and htmlspecialchars($_FILES['artist-pic']['size']) != 0){
    //if all optoinal fields are set

    $featArtist = htmlspecialchars($_POST['feat-artist']);
    $albumPic = "songs/added/cover_pics/".htmlspecialchars($_FILES['album-pic']['name']);
    $artistPic = "songs/added/artist_pics/".htmlspecialchars($_FILES['artist-pic']['name']);

    

    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `feat_artist`, `cover_pic`, `artist_pic`) VALUES (:song, :artist, :album, :audio, :featArtist, :albumPic, :artistPic)');

    $stmt->bindParam(':featArtist', $featArtist, PDO::PARAM_STR);
    $stmt->bindParam(':albumPic', $albumPic, PDO::PARAM_STR);
    $stmt->bindParam(':artistPic', $artistPic, PDO::PARAM_STR);

    move_uploaded_file($_FILES['album-pic']['tmp_name'], "$albumPic");
    move_uploaded_file($_FILES['artist-pic']['tmp_name'], "$artistPic");


}elseif(htmlspecialchars($_POST['feat-artist']) != "" and htmlspecialchars($_FILES['album-pic']['size']) != 0){
    //if the featured artist and album cover pic are the only optional fields set

    $featArtist = htmlspecialchars($_POST['feat-artist']);
    $albumPic = "songs/added/cover_pics/".htmlspecialchars($_FILES['album-pic']['name']);

    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `feat_artist`, `cover_pic`) VALUES (:song, :artist, :album, :audio, :featArtist, :albumPic)');

    $stmt->bindParam(':featArtist', $featArtist, PDO::PARAM_STR);
    $stmt->bindParam(':albumPic', $albumPic, PDO::PARAM_STR);

    move_uploaded_file($_FILES['album-pic']['tmp_name'], "$albumPic");

}elseif(htmlspecialchars($_FILES['artist-pic']['size']) != 0 and htmlspecialchars($_FILES['album-pic']['size']) != 0){

    //if the album cover pic and artist pic are the only optional fields set
    $albumPic = "songs/added/cover_pics/".htmlspecialchars($_FILES['album-pic']['name']);
    $artistPic = "songs/added/artist_pics/".htmlspecialchars($_FILES['artist-pic']['name']);

    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `cover_pic`, `artist_pic`) VALUES (:song, :artist, :album, :audio, :albumPic, :artistPic)');

    $stmt->bindParam(':albumPic', $albumPic, PDO::PARAM_STR);
    $stmt->bindParam(':artistPic', $artistPic, PDO::PARAM_STR);

    move_uploaded_file($_FILES['album-pic']['tmp_name'], "$albumPic");
    move_uploaded_file($_FILES['artist-pic']['tmp_name'], "$artistPic");


}elseif(htmlspecialchars($_FILES['artist-pic']['size']) != 0 and htmlspecialchars($_POST['feat-artist']) != ""){
    //if the featured artist and artist pic are the only optional fields set
    $featArtist = htmlspecialchars($_POST['feat-artist']);
    $artistPic = "songs/added/artist_pics/".htmlspecialchars($_FILES['artist-pic']['name']);

    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `feat_artist`, `artist_pic`) VALUES (:song, :artist, :album, :audio, :featArtist, :artistPic)');

    $stmt->bindParam(':featArtist', $featArtist, PDO::PARAM_STR);
    $stmt->bindParam(':artistPic', $artistPic, PDO::PARAM_STR);

    move_uploaded_file($_FILES['artist-pic']['tmp_name'], "$artistPic");


}elseif(htmlspecialchars($_POST['feat-artist']) != ""){

    //if the featured artist optional field is the only optional field set

    $featArtist = htmlspecialchars($_POST['feat-artist']);


    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `feat_artist`) VALUES (:song, :artist, :album, :audio, :featArtist)');
    $stmt->bindParam(':featArtist', $featArtist, PDO::PARAM_STR);

}elseif(htmlspecialchars($_FILES['album-pic']['size']) != 0){

    //if the album cover pic optional field is the only optional field set

    $albumPic = "songs/added/cover_pics/".htmlspecialchars($_FILES['album-pic']['name']);


    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `cover_pic`) VALUES (:song, :artist, :album, :audio, :albumPic)');
    $stmt->bindParam(':albumPic', $albumPic, PDO::PARAM_STR);

    move_uploaded_file($_FILES['album-pic']['tmp_name'], "$albumPic");

}elseif(htmlspecialchars($_FILES['artist-pic']['size']) != 0){

    //if the artist pic optional field is the only optional field set
    $artistPic = "songs/added/artist_pics/".htmlspecialchars($_FILES['artist-pic']['name']);


    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`, `artist_pic`) VALUES (:song, :artist, :album, :audio, :artistPic)');
    $stmt->bindParam(':artistPic', $artistPic, PDO::PARAM_STR);

    move_uploaded_file($_FILES['artist-pic']['tmp_name'], "$artistPic");

}else{
    //if there are no optional fields set
    $stmt = $conn->prepare('INSERT INTO `user_songs` (`name`, `artist`, `album`, `source`) VALUES (:song, :artist, :album, :audio)');
}

$stmt->bindParam(':song', $song, PDO::PARAM_STR);
$stmt->bindParam(':artist', $artist, PDO::PARAM_STR);
$stmt->bindParam(':album', $album, PDO::PARAM_STR);
$stmt->bindParam(':audio', $audio, PDO::PARAM_STR);

if($stmt->execute()){?>

    <link href="index.css" rel="stylesheet">

    <div id="song-added">
        <h2 id="hme-nth-here">Song</h2>
        <h2 id="hme-nth">Added.</h2>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script>
        gsap.from("#hme-nth-here", {duration: 1, opacity: 0, y: 100, ease:"power4.inOut"});
        gsap.from("#hme-nth", {duration: 1, x: 100, ease:"power2.inOut"});
    </script>


<?php }else{
    echo "<script>alert('An error occured while trying to add a new song')</script>";
}





