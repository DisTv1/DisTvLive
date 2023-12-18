
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://github.com/hasanbakai/hafsa/blob/main/style.css">
</head>
<body>
 <div class="image">
            <img src="https://i.postimg.cc/635PN3Yd/girl.png" align="left"  class="girl">
        </div>
    
  <style>  
<head>
  <style>


.image{
    width: 30%;
    height: 40%;
    position: absolute;
    right: 100px;
    bottom: 0;
}

.image img{
    position: absolute;
    height: 40%;
    left: 40%;
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
    margin-right: 60px;
    font-size: 40px;
    transition: .4s ease;
    
}

.icons ion-icon:hover{
    color: rgb(59,174,209);
}


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
 h1{
    font-size: 30px;
    letter-spacing: 1px;
    line-height: 24px;
    text-align:center;
    margin-top: 15%;
    color: #e60e0e;
}
h2{
    font-size: 30px;
    letter-spacing: 1px;
    line-height: 24px;
    text-align:center;
 
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

<?php
 

// Simple PHP Upload Script:  http://coursesweb.net/php-mysql/

$uploadpath = 'upload/';      // directory to store the uploaded files
$max_size = 2000;          // maximum file size, in KiloBytes
$alwidth = 900;            // maximum allowed width, in pixels
$alheight = 800;           // maximum allowed height, in pixels
$allowtype = array('bmp', 'gif', 'jpg', 'jpe', 'png','jfif');        // allowed extensions


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
       
       
           echo  '<h1>direct link</h1><h2>http://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['REQUEST_URI']), '\\/').'/'.$uploadpath.'</h2>';
    }
    else echo '<b>Unable to upload the file.</b>';
  }
  else echo $err;
}


?>

 
                





</html>


  
 

      
   
   
   
     
      
    
          
   