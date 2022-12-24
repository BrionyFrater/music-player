/*
                NAV BAR
============================================
*/

/*TOGGLE the apperance of nav button onclick, works like radio buttons*/
$("nav > ul > li").click(function () {


    //swtich to filled icon on active link
    let source = $(this).find("img").attr("src");

    source = source.slice(0, -4) + "-filled.svg";
    $(this).find("img").attr("src", source);


    //switch to unfilled icon on all unactive links
    source = $(".navActive > img").attr("src");
    

    //accounts for first when no link is eithe  active or inactive
    if (source != undefined) {
        source = source.slice(0, -11) + ".svg";
        $(".navActive > img").attr("src", source);
    }

    //switch other links from active state
    $("nav > ul > li > a").removeClass("navActive");

    //put clicked link in active state
    $(this).find("a").addClass("navActive");


});

/*
                AUDIO CONTROLS
============================================
*/

// Get audio element and audio controls
let audio = document.getElementById("song");
let playPauseButton = document.getElementById("play-pause");
let volumeControl = document.getElementById("volume");
let seekBar = document.getElementById("seek-bar");

audio.src = "songs/added/Frank Ocean - Pink + White.mp3";

audio.onloadedmetadata = function() {
  document.getElementById("seek-bar-duration").innerHTML = formatTime(audio.duration);
}

// Play/pause audio on button click

function playPause() {

  
  if (audio.paused) {
    audio.play();

    $("#play-pause img").attr("src", "images/pause.svg");
    
  
  } else {
    audio.pause();
    
    $("#play-pause img").attr("src", "images/play.svg");
    
  }
}

// Set volume on volume control input
function setVolume() {
  audio.volume = volumeControl.value;
}

// Update seek bar as audio plays
audio.addEventListener("timeupdate", function () {
    
 
  let percentage = (audio.currentTime / audio.duration) * 100;
  seekBar.value = percentage;


  document.getElementById("seek-bar-current-time").innerHTML = formatTime(audio.currentTime);

  
});

// Seek audio on seek bar input
function seekAudio() {
  
  let seekTime = audio.duration * (seekBar.value / 100);
  audio.currentTime = seekTime;
  
}

//Format duration time in minutes and seconds
function formatTime(time){
    
    let s = parseInt(time % 60);
    let m = parseInt((time / 60) % 60);

    return m + ":" + s;

}

//likes a song
function likeSong(){
    

    if( $("#like-button").hasClass("liked")){

        $("#like-button img").attr("src", "images/heart.svg");
        $("#like-button").removeClass("liked");

        //remove like animation
        let tl = gsap.timeline();

        tl.to("#like-button", {duration: 0.2, x: -10, ease:"power4.inOut"}, "<");
        tl.to("#like-button", {duration: 0.2, x: 10, ease:"power1.inOut"});
        tl.to("#like-button", {duration: 0.2, x: 0, ease:"power2.inOut"});

    }else{
        $("#like-button img").attr("src", "images/heart-filled.svg");
        $("#like-button").addClass("liked");

        //like animation
        let tl = gsap.timeline();
        
        tl.from("#like-button", {duration: 1.2, opacity: 0, rotation: 360})
        tl.to("#like-button", {duration: 0.3, y: -10, ease:"expo.inOut"}, "<");
        tl.to("#like-button", {duration: 0.3, y: 10, ease:"slow.inOut"});
        tl.to("#like-button", {duration: 0.3, y: 0, ease:"power4.inOut"});
    }

    
}

//loops a song
function loop(){

  if(audio.loop){
    audio.loop = false;
    $("#loop img").attr("src", "images/loop.svg");
  }else{
    audio.loop = true;
    $("#loop img").attr("src", "images/loop-filled.svg");
  }
  
}