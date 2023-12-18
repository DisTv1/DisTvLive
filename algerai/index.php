

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
    top:0.5rem;
    left:0.5rem;
    z-index:100;
    color:#fff
}
.nav .nav-menu[data-v-057f5d56] {
    width:1.5rem;
    height:1.5rem;
    padding:0rem;
    background:rgba(0,0,0,.0);
    border-radius:50%
}
.nav .nav-menu .logo[data-v-057f5d56] {
    width:3.5rem
}
.nav .nav-list-warp[data-v-057f5d56] {
    display:none;
    background:rgba(0,0,0,.0);
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
    line-height:4rem;
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
        <img data-v-057f5d56="" class="logo" src="https://i.postimg.cc/7PcMgSHh/hb.png"height="20px" width="80px"  alt="">
      </div>
      <div data-v-057f5d56="" class="nav-list-warp">
        <ul data-v-057f5d56="" class="nav-list">
          <li data-v-057f5d56=""><span data-v-057f5d56=""></span>
          </li>
         
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/113065.m3u8" target="na" class="sub-nav">
                <img src="https://i.postimg.cc/k4FsFwgP/choroknews.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/355394.m3u8"target="na"  class="sub-nav">  
               <img src="https://i.postimg.cc/9fHNdDYT/nahar.jpg" style="border-radius:10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
           <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/113069.m3u8" target="na" class="sub-nav">
                <img src="https://i.postimg.cc/2S7XxzcK/bilad.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/10_26.html" target="na" class="sub-nav">
                <img src="https://i.postimg.cc/s2hXQNDK/hayat.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/113068.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/zfJt39jY/hadaf.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba1.blogspot.com/2023/04/omii.html?s=https://shls-live-ak.akamaized.net/out/v1/2daff8b433344d659bd5079224afc3ab/index.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/DwgVCQpF/samira.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/400270483.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/VvMpXX0x/wataniya.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/113060.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/qBL8vzFq/alg1.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/113061.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/g26X8Jgv/alg2.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/356036.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/GmJRWn2W/alg3.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li> 
          
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/113080.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/D0Xk5tHY/alg4.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/162785.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/ryxq14Ty/alg5.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
               <!----></a>  
            </span></li>
         
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/355395.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/g2kdbBZr/alg-6.jpg" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/400270485.m3u8"target="na" class="sub-nav">
                <img src="https://i.postimg.cc/SRf0wWQW/alg7.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/29540.m3u8" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/dhakiratv.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----> </a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/355907.m3u8" target="na" class="sub-nav">
                <img src="https://i.postimg.cc/FFZBXFgg/fager.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/20202.m3u8" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/chrq.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
        
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/2_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/anistv.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/3_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/al24news.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
          
          
          
        <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/4_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/magha.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://startv365.com:80/live/8059765630/3322606439/355396.m3u8" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/ElDjazairN1.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
        
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/6_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/almasriyah.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/7_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/al-massriyah.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
             
          
          
           <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/9_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/CBC-DRAMA.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/8_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/cbc.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
        
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/10_70.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/cbc_extra.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/11.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/egyptiantv.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
          
          
          
        <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/algerai/?s=http://212.102.58.251:8080/live/Nroa0AohHn/z3d8ZHNBWt/406.m3u8" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/CBC-sofra.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/12_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/Anahar-Alyawm.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
        
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/13_27.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/nile_fa.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/15.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/nile_life.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
             
        <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/16.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/nile_drama.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/2_9.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/hayat_rj.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
               
          
        <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/17.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/nile_edc.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/1_93.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/fr_jpg/nile_inter.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
             
        <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/17.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/nile_co.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="https://omihabiba.blogspot.com/2023/08/3_36.html" target="na" class="sub-nav">
                <img src="http://azrotv.com/iphone/images/ar_jpg/nile_tha.jpg" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
            
                  
       
           
          
          
          
          
          
          

</body>
</html>