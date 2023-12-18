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
top: 20%;
left: 70%;
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

<!-----------  اعلان  -----------------
<div id="ad_asd" class="slide_in" style="display: none;">
<span title="Close" id="close_ad">X</span>
<div class="center_ad">
<!-- اعلان صوره --
<a href="https://app.skylivehd.com/"><img src="https://i.imgur.com/Ey7eAGh.jpg " marginwidth="0" marginheight="0" width="300" height="300" scrolling="no" border="0" frameborder="0" /></a>
<!-- اعلان فريم --
<iframe src="https://www.youtube.com" marginwidth="0" marginheight="0" width="300" height="250" scrolling="no" border="0" frameborder="0"></iframe>
  
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
const controls = [ 'play' ];
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
    top:1rem;
    left:3rem;
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
    background:rgba();
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
    padding-left:2rem;
    height:4rem;
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
        <img data-v-057f5d56="" class="logo" src="https://i.postimg.cc/7PcMgSHh/hb.png"height="40px" width="200px"  alt="">
      </div>
      <div data-v-057f5d56="" class="nav-list-warp">
        <ul data-v-057f5d56="" class="nav-list">
          <li data-v-057f5d56=""><span data-v-057f5d56=""></span>
          </li>
          
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbc1na-prod-dub-ak.akamaized.net/out/v1/84ab37e99d6e4b16b33c6600f94f6ccb/index_7.m3u8" class="sub-nav">
                <img src="https://www.shmlool.com/wp-content/uploads/f66daaf3c860e89f22b1665ca927ce32.png" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbc5-prod-dub-ak.akamaized.net/out/v1/2720564b6a4641658fdfb6884b160da2/index_2.m3u8" class="sub-nav">  
               <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-5%2Foriginal%2Fmbc-5.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius:10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
           <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbc4-prod-dub-ak.akamaized.net/out/v1/c08681f81775496ab4afa2bac7ae7638/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-4%2Foriginal%2Fmbc-4.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbcplusdrama-prod-dub-ak.akamaized.net/out/v1/97ca0ce6fc6142f4b14c0a694af59eab/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-drama-plus%2Foriginal%2Fmbc-drama-plus.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/b0b3a0e6750d4408bb86d703d5feffd1/index_27.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-drama%2Foriginal%2Fmbc-drama.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/d5036cabf11e45bf9d0db410ca135c18/index_21.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-msr-1%2Foriginal%2Fmbc-msr-1.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-masr2-ak.akamaized.net/out/v1/f683685242b549f48ea8a5171e3e993a/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-msr-2%2Foriginal%2Fmbc-msr-2.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
         <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://iraq-prod-dub-ak.akamaized.net/out/v1/c9bf1e87ea66478bb20bc5c93c9d41ea/index_10.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-iraq%2Foriginal%2Fmbc-iraq.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbcbollywood-prod-dub-ak.akamaized.net/out/v1/a79c9d7ef2a64a54a64d5c4567b3462a/index_3.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-bollywood%2Foriginal%2Fmbc-bollywood.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                 <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbcpersia-prod-dub-ak.akamaized.net/out/v1/bdc7cd0d990e4c54808632a52c396946/index_10.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-persia%2Foriginal%2Fmbc-persia.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li> 
          
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbc3-eur-prod-dub-ak.akamaized.net/out/v1/fce09dd6a967431a871efb3b8dec9f82/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fmbc-3-logo%2Foriginal%2Fmbc-3-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="80px" width="50px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://spacetoon-prod-dub-ak.akamaized.net/out/v1/6240b773a3f34cca95d119f9e76aec02/index_9.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fspacetoon%2Foriginal%2Fspacetoon.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
               <!----></a>  
            </span></li>
         
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://cartoon-network-prod-dub-ak.akamaized.net/out/v1/dc4aa87372374325a66be458f29eab0f/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fcn-logo%2Foriginal%2Fcn-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius:10px; "height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanakids-prod-dub-ak.akamaized.net/out/v1/df6e0eb3cdc4410b98209aafc8677cef/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana-kids-logo%2Foriginal%2Frotana-kids-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="10px" />
                <!----></a>
            </span>
          </li>
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://gulli-bil-arabi-prod-dub-ak.akamaized.net/out/v1/5454d215afba410c90b233f400730958/index_3.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2021%2FAbd%2FJan%2Fm6-images%2FGULLI_LOGO%2Foriginal%2FGULLI_LOGO.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----> </a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://tiji-tv-prod-dub-ak.akamaized.net/out/v1/98f46736bd8c4404b67e4b7a38cc8976/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2021%2FAbd%2FJan%2Fm6-images%2FTigi_Logo%2Foriginal%2FTigi_Logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanaplus-prod-dub-ak.akamaized.net/out/v1/1fc6103458be480b96e6a574b00fe1c0/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana---logo%2Foriginal%2Frotana---logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanadrama-prod-dub-ak.akamaized.net/out/v1/20c617b40dc743589ecc9d08d9d3345d/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana-drama-logo%2Foriginal%2Frotana-drama-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanakhalijia-prod-dub-ak.akamaized.net/out/v1/a639fd49db684f1b8c063d398101a888/index_9.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana-khalijya-logo%2Foriginal%2Frotana-khalijya-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li> 
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanacinema-egy-prod-dub-ak.akamaized.net/out/v1/c39c0ecbcbdb46e890e91106776397a8/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana-cinema-egy-logo%2Foriginal%2Frotana-cinema-egy-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
         
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanaclassic-prod-dub-ak.akamaized.net/out/v1/4eebed211c8441228321b4f67a46c5a5/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana-classic-logo%2Foriginal%2Frotana-classic-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          
          
            <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://rotanacinema-ksa-prod-dub-ak.akamaized.net/out/v1/6cee1c57ea7841e697eb15cefc98e0a6/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2020%2Ftaha%2Ft2020%2Flogos-rotana-2020%2Frotana-cinema-ksa-logo%2Foriginal%2Frotana-cinema-ksa-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://mbcfm-riyadh-prod-dub-ak.akamaized.net/out/v1/69c8a03f507e422f99cf5c07291c9e3a/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FNew-Thumbs%2Fkarim_2021_nov%2FMbc-Fm-Live-logo2%2Foriginal%2FMbc-Fm-Live-logo2.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://wanasah-prod-dub-ak.akamaized.net/out/v1/c84ef3128e564b74a6a796e8b6287de6/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FWaseem%2FStories0%2Fwanasah%2Foriginal%2Fwanasah.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://asharq-prod-dub-ak.akamaized.net/out/v1/3b6b4902cf8747a28619411239584002/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2021%2FFEB%2Fsharq%2FashraqLogo-Templet%2Foriginal%2FashraqLogo-Templet.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li> 
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/115bfcde8fa342d182ef846445cdbdcf/index_1.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2023%2FAmrAhmed%2FFeb%2Flogo_template_En%2Foriginal%2Flogo_template_En.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/302a3ad418214d3f94460738a805b930/index_1.m3u8"class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2023%2FAmrAhmed%2FFeb%2Flogo_template_FR%2Foriginal%2Flogo_template_FR.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://panoramafm-prod-dub-ak.akamaized.net/out/v1/66262e420d824475aaae794dc2d69f14/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2FNew-Thumbs%2Fkarim_2021_nov%2FPanorama-Fm-Live-logo2%2Foriginal%2FPanorama-Fm-Live-logo2.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://m6-int-prod-dub-ak.akamaized.net/out/v1/a315ab77ee7343a7a17dbe7e32eee3ba/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2021%2FAbd%2FJan%2Fm6-images%2Fm6-international-logo%2Foriginal%2Fm6-international-logo.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/81153498b61444bfaef4ff09b55e55aa/index_1.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2022%2FMar%2FAmjad%2FJuly%2FLogo_helwa%2Foriginal%2FLogo_helwa.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/2daff8b433344d659bd5079224afc3ab/index_9.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2022%2FMar%2FAmjad%2FJuly%2FLogo_samiraTV%2Foriginal%2FLogo_samiraTV.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/119ae95bbc91462093918a7c6ba11415/index_2.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2022%2FMar%2FAmjad%2FJuly%2FLogo_nessma%2Foriginal%2FLogo_nessma.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li>
          
          <li data-v-057f5d56="">
            <span data-v-057f5d56="">
              <a data-v-057f5d56="" href="http://distv.hopto.org:8000/mbc/?s=https://shls-live-ak.akamaized.net/out/v1/f1d7243984224a7e94bc34ff60d9fd53/index_14.m3u8" class="sub-nav">
                <img src="https://shahid.mbc.net/_next/image?url=https%3A%2F%2Fshahid.mbc.net%2FmediaObject%2F2023%2FAmrAhmed%2FFeb%2Flogo_Royaa%2Foriginal%2Flogo_Royaa.png%3Fheight%3Dauto%26width%3D288%26croppingPoint%3D%26version%3D1%26type%3Dwebp&w=1440&q=75" style="border-radius: 10px;" height="50px" width="80px" vspace="5px" />
                <!----></a>
            </span>
          </li> 
          
          
         
          
         
         
         
         
         
         
         
         
      

</body>
</html>