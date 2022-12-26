<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels - Music Player</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="index.css" rel="stylesheet">
    

    <!--dark mode favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png" media="(prefers-color-scheme: dark)">

    <!--light mode favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io_light/apple-touch-icon.png" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io_light/favicon-32x32.png" media="(prefers-color-scheme: light)">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io_light/favicon-16x16.png" media="(prefers-color-scheme: light)">
    
    <link rel="manifest" href="favicon_io/site.webmanifest">

</head>

<body>

    <!--icons from svg repo-->
    
    <div id="page-wrapper">

        <div class="animated">
            <div class="wrapper">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
                <div class="four"></div>
                
            </div>
        </div>

        <!--
            <a href="#current-tab">
                <button>Skip Navigation</button>
            </a>
        -->
        <header>
            <div id="logo-img-and-text">
                <img id="levels-logo" src="images/levels logo.svg" alt="the logo for levels music player">
                <h6 id="levels-logo-text">Levels</h6>
            </div>
        </header>
        
        <nav aria-label="Navigation Bar">

            <ul>
                <li>
                    
                    <a href="#">
                        <img src="images/home.svg" alt="Home">
                        Home
                    </a>
                    
                </li>

                <li>
                    <a>
                        <img src="images/heart.svg" alt="Liked songs">
                        Liked Songs
                    </a>
                    
                </li>

                <li>
                    <a>
                        <img src="images/library.svg" alt="Library">
                        Library
                    </a>
                        
                </li>
                
            </ul>
        </nav>
        
        
        <section id="current-tab">
            <?php
                require_once 'home.php';
            ?>
        </section>


        <footer id="audio-controls">

            <div class="--flex-space-between">
                <img src="songs/added/cover_pics/frank-ocean-blond.jpg" aria-hidden="true" id="player-cover-photo">
                
                <div id="song-info-contian">
                    <h6 id="player-song-name">Ghost in the machine (feat. Phoebe Bridges)</h6>
                    <p id="player-artist-name">SZA</p>
                </div>

                <button onclick="likeSong()" id="like-button">
                    <img src="images/heart.svg" alt="press to like this song">
                </button>
                 
            </div>

            
           
            <div id="seek-contain">
                <audio id="song" preload="metadata" paused></audio>
                
                <p id="seek-bar-current-time">0:0</p>
                <input type="range" id="seek-bar" aria-describedby="Seek Bar" min="0" max="100" value="0" oninput="seekAudio()">
                <p id="seek-bar-duration"></p>
            </div>
            
            <div id="vol-contain">
                <img src="images/volume.svg">
                <input type="range" id="volume" min="0" max="1" step="0.1" oninput="setVolume()">
            </div>
            
            <div class="--flex-center">
                <button id="loop" onclick="loop()" aria-describedby="loop button">
                    <img src="images/loop.svg">
                </button>

                <button id="play-pause" onclick="playPause()" aria-describedby="play/pause button">
                    <img src="images/play.svg">
                </button>
            </div>
            
        </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="index.js"></script>


</body>
</html>