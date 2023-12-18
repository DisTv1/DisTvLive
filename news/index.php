<html lang="en"><head><style class="vjs-styles-defaults">
      .video-js {
        width: 300px;
        height: 150px;
      }

      .vjs-fluid:not(.vjs-audio-only-mode) {
        padding-top: 56.25%
      }
    </style><style class="vjs-styles-dimensions"></style>
  <meta charset="UTF-8">
  <link rel="icon" type="image/svg+xml" href="https://www.wdwkmusic.com/assets/img/logo/logo-white-text.svg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DISTV</title>
  <link rel="icon" href="/favicon.ico">
  <meta name="description" content="webTv, web小电视，在线看电视">
 
</head>
  
<style>
body {
margin: 0;
font-family: Roboto;
background-color: #262626;
}
.plyr__menu__container {
overflow-y: hidden;
}
.q-audio {
display: flex;
align-items: center;
height: 100vh;
justify-content: center;
}

.q-hls .plyr {
height: 100vh;
}

.plyr__menu__container {
max-height: calc(100vh - 100% - 20px);
overflow-y: auto;
}

.container {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: #000;
z-index: 1000;
display: flex;
align-items: center;
justify-content: center;
color: #fff;
}

.loader {
border: 4px solid #000;
border-top: 4px solid #fff;
border-radius: 50%;
width: 40px;
height: 40px;
animation: spin 0.75s linear infinite;
}

.hidden {
display: none;
}

@keyframes spin {
0% {
transform: rotate(0deg);
}

100% {
transform: rotate(360deg);
}
}
.plyr--full-ui.plyr--video .plyr__control--overlaid {
display: block;
padding: 2.5rem 43px;
background-color: hsl(240deg 2% 16%);
border-radius: 24px;
}
.plyr--video:before {
font-family: Changa, "Segoe UI";
font-size: 2.5vw;
color: #fff;
position: absolute;
right: 0;
bottom: 0;
left: 0;
z-index: 1;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
pointer-events: none;
background: linear-gradient(transparent);
height: 150px;
}
.plyr,
.plyr__video-wrapper {
width: 100% !important;
height: 100% !important;
}
.plyr audio,
.plyr video {
height: 100% !important;
}

html,
body {
height: 100%;
width: 100%;
padding: 0px;
margin: 0px;
}
.players {
position: fixed;
height: 100%;
width: 100%;
padding: 0px;
margin: 0px;
}
video {
object-fit: fill;
}

.dots {
content: "";
width: 10px;
height: 10px;
background: rad;
position: absolute;
z-index: 1;
border-radius: 50%;
margin: 10px;
}
.dots::before {
content: "";
position: relative;
display: block;
width: 300%;
height: 300%;
box-sizing: border-box;
margin-left: -100%;
margin-top: -100%;
border-radius: 45px;
background-color: rad;
animation: pulse-ring 1.25s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
}
.dots::after {
content: "";
position: absolute;
left: 0;
top: 0;
display: block;
width: 100%;
height: 100%;
border-radius: 15px;
box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
animation: pulse-dot 1.25s cubic-bezier(0.455, 0.03, 0.515, 0.955) -0.4s infinite;
}
.item-post .post-body {
font-family: "Inter", sans-serif;
font-size: 15.3px;
}
.plyr {
--plyr-color-main: #272729;
box-shadow: 0px 0px 19px rgba(30, 30, 30, 0.1);
border-radius: 0;
}
.plyr__volume {
min-width: 190px;
}
#idch {
right: 2%;
position: fixed;
/bottom: 12.9%/;
}
.plyr__video-wrapper::before {
position: absolute;
top: 5%;
z-index: 2; /* opacity: .7; */
content: "";
height: 100%;
width: 100px;
background: url("") no-repeat;
background-size: 100px auto, auto;
right: 5%;
}
.plyr_controlsitem.plyr_volume::before {
content: "LIVE";
font-weight: 900;
margin-right: 5px;
}
@keyframes pulse-ring {
0% {
transform: scale(0.33);
}
100%,
100% {
opacity: 0;
}
}
@keyframes pulse-dot {
0% {
transform: scale(0.8);
}
100% {
transform: scale(1);
}
100% {
transform: scale(0.8);
}
}

#dlna {
    position: fixed;
    /* z-index: 99999999; */
    left: 45%;
    /* text-align: center; */
    /* border-radius: 50%; 
    cursor: pointer;*/
    bottom: 31px;
}
#tme_message {
position: absolute;
bottom: 0;
left: -10px;
width: 300px;
padding: 10px;
}
#dlna_message:after,
#dlna_message:before {
content: " ";
position: absolute;
bottom: -21px;
left: 23px;
border-style: solid;
height: 0;
width: 0;
border-width: 10px;
border-color: transparent;
}
#dlna_message p {
margin: 0px 0;
font-size: 12px;
color: #8e8e8e;
text-align: left;
}
.clossalert {
    position: absolute;
    right: 0px;
    font-size: 13px;
    border-radius: 4px;
    width: 57px;
    height: 33px;
    top: 8px;
    border: unset !important;
    background: #f4810f;
    color: white;
    z-index: 999999999999999999999999999999999999;
}
#dlna_message a {
margin: 6px 4px;
font-weight: bold;
color: #fff;
background: #0088cc;
border-radius: 6px;
display: inline-block;
padding: 10px;
text-decoration: none;
}
.player-poster[data-poster] {
background-size: 100% !important;
}

.plyr--loading:after {
content: "الرجاء الانتظار ";
color: #fff;
text-align: center;
/* display: inline-block;
    text-decoration: none;
        z-index: 5555; */
position: absolute;
cursor: pointer;
bottom: 300px;
font-weight: 600;
color: #fff6;
display: flex;
justify-content: center;
align-items: center;
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB3aWR0aD0nNzhweCcgaGVpZ2h0PSc3OHB4JyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCIgY2xhc3M9InVpbC1yaW5nLWFsdCI+CiAgICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0ibm9uZSIgY2xhc3M9ImJrIj48L3JlY3Q+CiAgICA8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiByPSI0MCIgc3Ryb2tlPSJyZ2JhKDAsMCwwLDApIiBmaWxsPSJub25lIiBzdHJva2Utd2lkdGg9IjEwIiBzdHJva2UtbGluZWNhcD0icm91bmQiPjwvY2lyY2xlPgogICAgPGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iNDAiIHN0cm9rZT0iI2ZmZmZmZiIgZmlsbD0ibm9uZSIgc3Ryb2tlLXdpZHRoPSI2IiBzdHJva2UtbGluZWNhcD0icm91bmQiPgogICAgICAgIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InN0cm9rZS1kYXNob2Zmc2V0IiBkdXI9IjJzIiByZXBlYXRDb3VudD0iaW5kZWZpbml0ZSIgZnJvbT0iMCIgdG89IjUwMiI+PC9hbmltYXRlPgogICAgICAgIDxhbmltYXRlIGF0dHJpYnV0ZU5hbWU9InN0cm9rZS1kYXNoYXJyYXkiIGR1cj0iMnMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiB2YWx1ZXM9IjE1MC42IDEwMC40OzEgMjUwOzE1MC42IDEwMC40Ij48L2FuaW1hdGU+CiAgICA8L2NpcmNsZT4KPC9zdmc+)
no-repeat center;
position: absolute;
height: 100%;
width: 100%;
top: 0;
left: 0;
}



.circle {
    /* position: relative; */
    width: 70px;
    height: 50px;
    /* float: left; */

}
.circle svg {
fill: none;
stroke: #8a3ab9;
stroke-linecap: round;
stroke-width: 3;
stroke-dasharray: 1;
stroke-dashoffset: 0;
animation: stroke-draw 6s ease-out infinite alternate;
      display: none;

}
.circle img {
    position: absolute;
    left: 65%;
    bottom: 16px;
    transform: translate(-50%, -50%);
    width: 35px;
    border-radius: 5px;
      background: #373738;

}
@keyframes stroke-draw {
from {
stroke: #8a3ab9;
stroke-dasharray: 1;
}
to {
stroke: #cd486b;
transform: rotate(180deg);
stroke-dasharray: 8;
}
}

*,
:after,
:before {
box-sizing: border-box;
}
.center_ad {
/*width: 300;
height: 250;
display: flex;
align-items: center;
justify-content: center;
text-align: center;*/
}
#close_ad {
right: 0;
top: 1px;
float: right;
z-index: 9999999999;
position: absolute;
padding: 2px;
font-weight: 200;
border-radius: 2px;
border: 1px solid #fff;
background: red;
color: #fff;
text-align: center;
cursor: pointer;
width: 34px;
height: 34px;
line-height: 30px;
font-size: 18px;
}
#close_ad:hover {
color: #000;
opacity: 0.9;
background: #4da368;
}
@media only screen and (max-width: 600px) {
#close_ad {
width: 38px;
height: 38px;
font-size: 30px;
}
}
#ad_asd {
position: fixed;
width: auto;
height: auto;
top: 50%;
left: 50%;
margin: -125px 0 0 -150px;
z-index: 999999999;
background-color: #1b1b1b;
border: 1px solid #666;
border-radius: 2px;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
-khtml-border-radius: 2px;
transform: translateY(-100%);
-webkit-transform: translateY(-100%);
}
.slide_in {
animation: slide_in 0.9s forwards;
-webkit-animation: slide_in 0.9s forwards;
}
.slide_out {
animation: slide_out 0.9s forwards;
-webkit-animation: slide_out 0.9s forwards;
}
@keyframes slide_in {
100% {
transform: translateY(0%);
}
}
@-webkit-keyframes slide_in {
100% {
-webkit-transform: translateY(0%);
}
}
@keyframes slide_out {
0% {
transform: translateY(0%);
}
100% {
transform: translateY(250%);
}
}
@-webkit-keyframes slide_out {
0% {
-webkit-transform: translateY(0%);
}
100% {
-webkit-transform: translateY(250%);
}
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes" name="viewport" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
<script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@canary"></script>

<!-----------  اعلان  ----------------->

  
<!-----------  كود مكان الاعلان  ----------------->  
</div></div>
<!-----------  اعلان  ----------------->

<!-----------  كود مشغل الفيديو  ---------->
<div class='container'>
<span class="dots"></span>
<!----<video controls="" crossorigin="" playsinline="player"></video></div>-->
<video class="player" autoplay="true" controls="true" height="100%" poster="" id="player" width="100%"></video>
<script>
var video = document.getElementById("player");
video.src = link;
</script>
<!-----------  كود مشغل الفيديو  ---------->



<!--- changesizeScreen  --->
<a onclick="changesizeScreen()" style="z-index: 999999999999999999999999999; height: auto; position: absolute; right: 1%; bottom: 7px; transform: translate(-20%, -20%); width: 35px; border-radius: 5px; background: #373738;" target="_blank">
<img src="https://i.imgur.com/BrfYnwa.png" style="height: 50%; width: 50%;" />
</a>
     
     
  <!--     ---->

<Script Language='Javascript'>
<!-- HTML Encryption  by sherif -->
<!--


   //ads
   var elem=document.getElementById("close_ad");elem.addEventListener("click touchstart",handler,!1);elem.addEventListener("click",handler,!1);function handler(b){var a=document.getElementById("ad_asd");b=a.classList.contains("slide_in");setTimeout(function(){a.parentNode.removeChild(a)},500);a.setAttribute("class",b?"slide_out":"slide_in")};setTimeout(function(){document.getElementById("ad_asd").style.display="block"},3E3);
   // externalplayer
   function dlna(){if(navigator.userAgent.match(/iPhone|iPad|iPod/i)){window.location=link}else{location.href="wvc-x-callback://open?url="+link+"&secure_uri=true"}};
   function wuffy(){if(navigator.userAgent.match(/iPhone|iPad|iPod/i)){window.location=link}else{location.href="intent://"+btoa(link)+"#Intent;scheme=xmtv;package=co.wuffy.player;end"}};
   function mx(){if(navigator.userAgent.match(/iPhone|iPad|iPod/i)){window.location=link}else{location.href="intent:"+link+"#Intent;package=com.mxtech.videoplayer.ad;end"}};
      </script>
     
     
     
         <script>
        function getQueryParam(param) {
var result =  window.location.search.match(new RegExp("(\\?|&)" + param + "(\\[\\])?=([^&]*)")); return result ? result[3] : false;
    }
var quality = getQueryParam("s");
      
</script>

     
     
<script type="text/javascript">
function gup(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");
var n="[\\?&]"+e+"=([^&#]*)",
l=new RegExp(n),
c=l.exec(window.location.href);
return null==c?quality:unescape(c[1])}
var video=gup("src");
var link=(video);
document.addEventListener('DOMContentLoaded', () => {
const controls = ['play'];
const source = link ;
const video = document.querySelector('video');       
 //const player = Plyr.setup('video', {controls, captions: {active: false, update: false, language: 'auto'}});
const defaultOptions = {controls,captions: {active: true, update: false, language: 'auto'}};

  if (Hls.isSupported()) {
   
    const hls = new Hls();
    hls.loadSource(source);
    hls.on(Hls.Events.MANIFEST_PARSED, function (event, data) {

      
         // Transform available levels into an array of integers (height values).
      const availableQualities = hls.levels.map(l => l.height);
      availableQualities.unshift(0); //prepend 0 to quality array

      // Add new qualities to option
      defaultOptions.quality = {
        default: 0, //Default - AUTO
        options: availableQualities,
        forced: true,
        onChange: e => updateQuality(e) };

      // Add Auto Label 
      defaultOptions.i18n = {
        qualityLabel: {
          0: 'Auto' } };  
      
      

      // Initialize here
      const player = new Plyr(video, defaultOptions);
    });
    hls.attachMedia(video);
    window.hls = hls;
  } else {
 
    const player = new Plyr(video, defaultOptions);
  }

  function updateQuality(newQuality) {
    window.hls.levels.forEach((level, levelIndex) => {
      if (level.height === newQuality) {
        console.log("Found quality match with " + newQuality);
        window.hls.currentLevel = levelIndex;
      }
    });
  }
});

$(window).on("orientationchange", () => {
   if(screen.width > screen.height){
      // change to landscape
   } else {
      // change to portrait
   }
});


$(window).on("load", function() {
      $(".preloader").fadeOut("slow")
    })



</script>

<script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@canary"></script>

     <!-----------  EEFH9 'D-0A D9ED 'DC'3* H5F/HB 'D'9D'F'*  ----------------->
<script>var myFP = fluidPlayer('hls-video',{layoutControls:{autoPlay:true,allowTheatre: true}});</script>
<script src='https://cdn.plyr.io/3.5.10/plyr.js'></script><script src='https://cdn.jsdelivr.net/hls.js/latest/hls.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script>//<![CDATA[

//]]></script>
  
 
  
 <style>
   
:root {
    font-family:Inter,system-ui,Avenir,Helvetica,Arial,sans-serif;
    line-height:1.5;
    font-weight:400
}
body {
    margin:0
}
a {
    font-weight:500;
    color:#fff;
    text-decoration:inherit
}
a:hover {
    color:#535bf2
}
.nav[data-v-057f5d56] {
    position:absolute;
    top:0rem;
    left:1rem;
    z-index:100;
    color:#fff
}
.nav .nav-menu[data-v-057f5d56] {
    width:1.5rem;
    height:1.5rem;
    padding:1rem;
    background:rgba();
    border-radius:50%
}
.nav .nav-menu .logo[data-v-057f5d56] {
    width:3rem
}
.nav .nav-list-warp[data-v-057f5d56] {
    display:none;
    background:rgba);
    padding:1rem 0 1rem 1rem;
    border-radius:1rem
}
.nav:hover .nav-list-warp[data-v-057f5d56] {
    display:block
}
.nav:hover .nav-menu[data-v-057f5d56] {
    display:none
}
.nav .active[data-v-057f5d56] {
    color:#fd6a30
}
.nav .nav-list[data-v-057f5d56] {
    margin:0;
    padding:0;
    list-style:none;
    max-height:calc(100vh - 4rem);
    overflow:auto
}
.nav .sub-nav[data-v-057f5d56] {
    padding-left:1rem;
    height:3.5rem;
    line-height:6rem;
    display:flex;
    align-items:center
}
.nav .sub-nav .tv-logo[data-v-057f5d56] {
    max-width:3rem;
    max-height:2rem;
    margin-right:2rem
}
.nav a[data-v-057f5d56] {
    color:#fff
}

   
   
  </style>
<body>
 <div id="app" data-v-app="">
    <div data-v-057f5d56="" class="nav">
      <div data-v-057f5d56="" class="nav-menu">
        <img data-v-057f5d56="" class="logo" src="https://i.postimg.cc/7PcMgSHh/hb.png"height="40px" width="80px"  alt="">
      </div>
      <div data-v-057f5d56="" class="nav-list-warp">
        <ul data-v-057f5d56="" class="nav-list">
          <li data-v-057f5d56=""><span data-v-057f5d56=""></span>
          </li>
         
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live-hls-web-aja-fa.getaj.net/AJA/01.m3u8" class="sub-nav">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjGhoFpUrkhhcmpUrLLKtQkAjis4I_rO-tuoeLLtwGVRh-WY8WCJVu56EeU4Coy_WSOEc&usqp=CAU" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>

          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://alaraby.cdn.octivid.com/alaraby/smil:alaraby.stream.smil/chunklist_b1150000.m3u8" class="sub-nav">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtEKkX8Kvkb7a1QlAG_F-kj2WZZPe-jmMl0A&usqp=CAU" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://rt-arb.rttv.com/dvr/rtarab/playlist.m3u8" class="sub-nav">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Russia-today-logo.svg/1200px-Russia-today-logo.svg.png" style="border-radius: 10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live.alarabiya.net/alarabiapublish/alarabiya.smil/alarabiya_1080p_chunks.m3u8" class="sub-nav">
                <img src="https://www.alaraby.co.uk/sites/default/files/2021-05/%D9%82%D9%86%D8%A7%D8%A9%20%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----> </a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://stream.skynewsarabia.com/hls/sna_720.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/skynews_mobile.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span></li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://dwamdstream103.akamaized.net/hls/live/2015526/dwstream103/stream05/streamPlaylist.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/dw_arabic_mobile.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=http://iptvtree.net:8080/live/Company/bkarHF3r4NAVj9uj/2924.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/bbcarabic.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://ythls.armelin.one/channel/UCdTyuXgmJkG_O8_75eqej-w.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/france24_arabic_mobile.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://tv-trtarabi.live.trt.com.tr/master_1080.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/TRT-live.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />

                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://mdnlv.cdn.octivid.com/almdn/smil:mpegts.stream.smil/chunklist_b2000000_t64NDgwcA==.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/almayadeen.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />

                <!----></a>
            </span>
          </li>
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://mbn-ingest-worldsafe.akamaized.net/hls/live/2038900/MBN_Alhurra_Worldsafe_HLS/master_928.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/alhurra.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://bcovlive-a.akamaihd.net/773a2fa387914315ad11e6957cd54f6e/eu-central-1/5377161796001/playlist-all_dvr.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/i24ar.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live2.alalam.ir/alalam.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/alaalam_mobile.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://svs.itworkscdn.net/bloomberarlive/bloomberg.smil/bloomberg_source_chunks_dvr.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/asharq_news.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
           <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live-hls-web-ajm.getaj.net/AJM/04.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/aljazeera_mubashirmisr.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://mn-nl.mncdn.com/alhiwar_live/smil:alhiwar.smil/chunklist_b3296000.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/Alhiwar-live.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://livear.cgtn.com/1000a/prog_index.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/cgtn.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>        
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live-hls-web-aje.getaj.net/AJE/03.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/aljazeera_amri.jpg" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>

          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=http://live-hls-web-ajb.getaj.net/AJB/01.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/aljazeera_balkans_live.jpg" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://linear021-gb-hls1-prd-ak.cdn.skycdp.com/Content/HLS_001_sd/Live/channel(skynews)/08_hd30.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/skynewsaust.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://muutube.sonmezalp.com/proxy.php/https://rt-arb.rttv.com/live/rtnews/playlist_4500Kb.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/rt_mobile.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----> </a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://dwamdstream106.akamaized.net/hls/live/2017965/dwstream106/stream05/streamPlaylist.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/dwdtsh.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span></li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://d2gjhy8g9ziabr.cloudfront.net/v1/manifest/3fec3e5cac39a52b2132f9c66c83dae043dc17d4/prod-samsungtvplus-stitched/1a71094a-eb80-45b2-b865-454684efc461/4.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/cnbc_mobile.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://nbculocallive.akamaized.net/hls/live/2037096/lx/use1-5.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cnbc18.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://livevideo.tegnadigital.com/kusa/v1/manifest/f9c1bf9ffd6ac86b6173a7c169ff6e3f4efbd693/KUSA/ec6dc058-cdfa-4528-b6ad-22996398c9be/0.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cnbc_flo.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://livedoc.cgtn.com/1000d/prog_index.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cgtndoc.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=http://ns8.indexforce.com:1935/alsharqiyalive/mystream/chunklist_w900251478.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/asharqiyanews.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://svs.itworkscdn.net/inewsiqlive/inewsiq.smil/inewsiqpublish/inewsiq/chunks.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/inews.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live-hls-web-ajm.getaj.net/AJM/06.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/aljazeera_mubashir.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=http://live.cgtn.com/1000/prog_index.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cgtn_en.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />

                <!----></a>
            </span>
          </li>
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://livefr.cgtn.com/1000f/prog_index.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cgtn_fr.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://livees.cgtn.com/1000e/prog_index.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cgtn_es.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=http://103.199.161.254/Content/bbcworld/Live/Channel(BBCworld)/Stream(02)/index.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/bbc_world_news.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=http://vs-hls-pushb-ww.live.cf.md.bbci.co.uk/x=4/i=urn:bbc:pips:service:bbc_persian_tv/t=3840/v=pv10/b=1604032/main.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/bbcfarisi.jpg" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>

          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://cnn-cnninternational-1-eu.rakuten.wurl.tv/f93b9a949a4a8651dd5a2f42e3a2b6f9.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cnn.jpg" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://cdnlive.presstv.ir/cdnlive/smil:cdnlive.smil/chunklist_b944100_slen.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/PressTV.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live4.presstv.ir/live/smil:presstvfr.smil/chunklist_w1411089388_b360000.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/presstvfr.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----> </a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://nhkwlive-xjp.akamaized.net/hls/live/2003458/nhkwlive-xjp-en/index_1M.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/NHK_WORLD_LIVE.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span></li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://d10rltuy0iweup.cloudfront.net/ATNNEWS/myStream/chunklist_w981922353.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/afgha_ant.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://tv-trtworld.live.trt.com.tr/master_1080.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/trt-world.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://cbsn-us.cbsnstream.cbsnews.com/out/v1/55a8648e8f134e82a470f83d562deeca/master_11.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/cbsnews.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://abc-iview-mediapackagestreams-2.akamaized.net/out/v1/6e1cc6d25ec0480ea099a5399d73bc4b/index_45.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/abcnews.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />

                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/news/?s=https://live.corusdigitaldev.com/groupa/live/6bfb7f13-9d9d-4211-9c50-fb56330e4ccd/live.isml/live-audio_1=96000-video=2499968.m3u8" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/gnews.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />

                <!----></a>
            </span>
          </li>
         
          
          
     
</body>
</html>