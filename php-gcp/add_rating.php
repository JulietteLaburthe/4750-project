<?php
// echo "EMAIL: ".$_POST['email'];
error_reporting(E_ALL ^ E_WARNING); 
//session_start();
require('connect-db.php');
require('user_functions.php');
//dfvsfv

$list_of_media = getAllMedia();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
      $email =$_GET['email'];
      }
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Add"){ 
        $current_title = $_POST['title'];
        $current_title_id = $_POST['title_id'];
  }
  $email =$_POST['email'];
}
$link_address= "https://cs4750-project-db.uk.r.appspot.com/watchlist.php?email=". $email."";
$link_address2= "https://cs4750-project-db.uk.r.appspot.com/add_media.php?email=". $email."";
?>


<!-- 1. create HTML5 doctype -->
<!DOCTYPE html>
<html style="height:100%">
<head>
  <meta charset="UTF-8">  
  
  <!-- 2. include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 
  Bootstrap is designed to be responsive to mobile.
  Mobile-first styles are part of the core framework.
   
  width=device-width sets the width of the page to follow the screen-width
  initial-scale=1 sets the initial zoom level when the page is first loaded   
  -->
  
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">  
    
  <title>Add to Watchlist</title>
  
  <!-- 3. link bootstrap -->
  <!-- if you choose to use CDN for CSS bootstrap -->  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
  <!-- you may also use W3's formats -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <!-- 
  Use a link tag to link an external resource.
  A rel (relationship) specifies relationship between the current document and the linked resource. 
  -->
  
  <!-- If you choose to use a favicon, specify the destination of the resource in href -->
  <link rel="icon" type="image/png" href="https://clipartix.com/wp-content/uploads/2017/01/Movie-camera-clip-art-clipart-free-download-11.png" />
  <!-- if you choose to download bootstrap and host it locally -->
  <!-- <link rel="stylesheet" href="path-to-your-file/bootstrap.min.css" /> --> 
  
  <!-- include your CSS -->
  <!-- <link rel="stylesheet" href="custom.css" />  -->
       
  <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&family=Montserrat:wght@500&display=swap');
</style>
</head>

<body style="height:100%; background-image: url('cleanbackground.png'); 
 background-position: center;
  background-size: 100% 100%;">
<center>


<nav class="navbar navbar-expand-lg " style="background-color: #3a2961">
<div class="navbar-nav">
<a style="padding: 10px;" href="<?php echo $link_address2;?>" > <img src="https://cdn-icons-png.flaticon.com/128/1946/1946436.png" style="height: 25px;"/></a>
</div>
  <h2 class="navbar-brand" style="padding: 10px;color:white;font-family: 'DM Sans', sans-serif;" >WatchShelf</h2>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
      <a class="nav-item nav-link " href="<?php echo $link_address2;?>" style="padding: 10px;color:white;font-family: 'DM Sans', sans-serif;" >Add Media</a>
      <a class="nav-item nav-link "  href="<?php echo $link_address;?>"style="padding: 10px;color:white;font-family: 'DM Sans', sans-serif;" >Watchlist<a/>
      <a style="padding: 10px;" href="https://cs4750-project-db.uk.r.appspot.com/home_page.php" > <img src="https://cdn-icons-png.flaticon.com/128/1828/1828479.png" style="height: 25px;"/></a>

</nav>
<div class="container" style="text-align: left; padding-bottom:7%">
  <h1 style="font-size:50px;font-family: sans-serif;color:white"><?php echo $current_title?></h1>  

  <form name="mainForm" action="watchlist.php" method="post">   
  <input type="hidden" name="email" value="<?php echo $email ?>">
  <input type="hidden" name="current_title" value="<?php echo $current_title ?>">
  <input type="hidden" name="current_title_id" value="<?php echo $current_title_id ?>">
  <div class="row mb-3 mx-3">
   <h3 style="color:#f44fb1;font-family:sans-serif"><b> Rating: </b></h3>
  </div>
  <div class="mb-3 form-check form-check-inline">
        <label for="0" class="form-check-label" >  <p style="color:#f44fb1;font-family:sans-serif"> 0</p></label>
        <input type="radio"class="form-check-input" value="0" id="0" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline">
        <label for="1" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">1</p></label>
        <input type="radio"class="form-check-input" value="1" id="1" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="2" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">2</p></label>
        <input type="radio"class="form-check-input"  value="2" id="2" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="3" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">3</p></label>
        <input type="radio"class="form-check-input"  value="3" id="3" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="4" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">4</p></label>
        <input type="radio"class="form-check-input"  value="4" id="4" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="5" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">5</p></label>
        <input type="radio"class="form-check-input"  value="5" id="5" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="6" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">6</p></label>
        <input type="radio"class="form-check-input"  value="6" id="6" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="7" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">7</p></label>
        <input type="radio"class="form-check-input"  value="7" id="7" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="8" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">8</p></label>
        <input type="radio"class="form-check-input"  value="8" id="8" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="9" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">9</p></label>
        <input type="radio"class="form-check-input"  value="9" id="9" name="rating" required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="10" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">10</p></label>
        <input type="radio"class="form-check-input"  value="10" id="10" name="rating" required/>
  </div>
  <div class="row mb-3 mx-3">
  <h3 style="color:#f44fb1;font-family:sans-serif"><b> Review: </b></h3>
  <br>
    <input type="text" class="form-control" name="review"  style="background-color:grey;border-color:black;color:white""/> 
</div>
<div class="row mb-3 mx-3">
 
  <input type="submit" value="Add to Watchlist" name="btnAction" class="btn btn-dark" style="background-color:#f44fb1;border-color:#3a2961"
        title="insert a watch" />
        </div>
</form> 
</div>    
</body>
</html>