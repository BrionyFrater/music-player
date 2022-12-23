<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels - Music Player</title>

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
    
    <div id="wrapper">

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
                    
                    <a>
                        <img src="images/home.svg">
                        Home
                    </a>
                    
                </li>

                <li>
                    <a>
                        <img src="images/heart.svg">
                        Liked Songs
                    </a>
                    
                </li>

                <li>
                    <a>
                        <img src="images/library.svg">
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
            <audio src="songs/added/Frank Ocean - Pink + White.mp3" controls></audio>
        </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        
        //toggle the apperance of nav button onclick
        $("nav > ul > li").click(function() {
            
           
            //swtich to filled image on active link
            let source = $(this).find("img").attr("src");
               
            source = source.slice(0, -4) + "-filled.svg";
            $(this).find("img").attr("src", source);

            
            //switch to unfilled image on all unactive links
            source = $(".navActive > img").attr("src");
            console.log(source);

            if(source != undefined){
                source = source.slice(0, -11) + ".svg";
                $(".navActive > img").attr("src", source);
            }
            
            //switch other links from active state
            $("nav > ul > li > a").removeClass("navActive");

            //put clicked link in active state
            $(this).find("a").addClass("navActive");

            

            

            
        
        });
    </script>


</body>
</html>