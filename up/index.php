
<?php
 

// Simple PHP Upload Script:  http://coursesweb.net/php-mysql/

$uploadpath = 'upload/';      // directory to store the uploaded files
$max_size = 2000000000;          // maximum file size, in KiloBytes
$alwidth = 1100;            // maximum allowed width, in pixels
$alheight = 900;           // maximum allowed height, in pixels
$allowtype = array('bmp', 'gif', 'jpg', 'jpe', 'png','jfif','apk');        // allowed extensions

if(isset($_FILES['fileup']) && strlen($_FILES['fileup']['name']) > 1) {
  $uploadpath = $uploadpath . basename( $_FILES['fileup']['name']);       // gets the file name
  $sepext = explode('.', strtolower($_FILES['fileup']['name']));
  $type = end($sepext);       // gets extension
  list($width, $height) = getimagesize($_FILES['fileup']['tmp_name']);     // gets image width and height
  $err = '';         // to store the errors

  // Checks if the file has allowed type, size, width and height (for images)
  if(!in_array($type, $allowtype)) $err .= 'The file: <b>'. $_FILES['fileup']['name']. '</b> not has the allowed extension type.';
  if($_FILES['fileup']['size'] > $max_size*1000) $err .= '<br/>Maximum file size must be: '. $max_size. ' KB.';
  if(isset($width) && isset($height) && ($width >= $alwidth || $height >= $alheight)) $err .= '<br/>The maximum Width x Height must be: '. $alwidth. ' x '. $alheight;

  // If no errors, upload the image, else, output the errors
  if($err == '') {
    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
            echo '<br/><br/>direct link: <b>http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/'.$uploadpath.'</b>';
    }
    else echo '<b>Unable to upload the file.</b>';
  }
  else echo $err;
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://github.com/hasanbakai/hafsa/blob/main/style.css">
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="https://www.wdwkmusic.com/assets/img/logo/logo-white-text.svg">
</head>
<body>


<head>
  <style>
ul {
  width: 90%;
  display: flex; 
  justify-content: space-between; 
  margin:auto;
  list-style-type: none;
}
li {
    outline:1px solid gray;
    list-style-position: inside;
flex-grow: 1;
  text-align:center;
}
li:hover {
  background-color:black;
  color: red;
}
a {
  color: inherit !important ;
  text-decoration: none
}

  </style>
</head>
  
<body>

<ul>
  <li><a href="/about">About Us </a></li>
  <li><a href="/gallery">Gallery</a></li>
  <li><a href="/registration">Registration</a></li>
</ul>

</body>

  
<div style="margin:10em auto; width:333px; text-align:center;" >

<form action="hd.php" method="POST" enctype="multipart/form-data"> 
<div style="margin-bottom: 50px"></div>
 <input type="file" id="file-input" name="fileup" />
<label id="file-input-label" for="file-input"
      >Select a File</label>
<input type="submit" id="submit-input" name="submit" />
<label id="submit-input-label" for="submit-input"
      >upload</label>


    
                                                                   
 </form>

        

      

     
  <style>
 body {
        margin: +100px;
      }

      #file-input {
        display: none;
      }

      #file-input-label {
        font-size: 1.3em;
        padding: 10px 15px;
        border: 1px solid black;
        border-radius: 4%;
        color: #a32626;
        background:#140c0c;
      }

 body {
        margin: +100px;
      }

      #submit-input {
        display: none;
      }

      #submit-input-label {
        font-size: 1.3em;
        padding: 10px 15px;
        border: 1px solid black;
        border-radius: 4%;
         color: #a32626;
        background:#140c0c;
      }


 
.image{
    width: 30%;
    height: 60%;
    position: absolute;
    right: 110px;
    bottom: 0;
}

.image img{
    position: absolute;
    height: 500px;
    left: 200px;
    transform: translate(-55%);
    bottom: 0;
    transition: left 2s ease;
}

.image:hover .girl{
    left: 55%;
}

.icons a{
    text-decoration: none;
    color: #000;
}

.icons ion-icon{
    margin-left: 7%;
    color: #000;
    margin-left: +50px;
    font-size: 50px;
    transition: .4s ease;
    margin-left: 7%;
    margin-top: 25%;
}

.icons ion-icon:hover{
    color: rgb(59,174,209);
}
 
   </style> 






<div class="icons">
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        </div>
    </div>   
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>   


</div>

                
</style>


</body>
</html>