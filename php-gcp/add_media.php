

<?php
//session_start();
error_reporting(E_ALL ^ E_WARNING); 
require('connect-db.php');
require('user_functions.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
$email =$_GET['email'];
}

$list_of_media = [];
// $t = getMediaInfo_byID($list_of_media[0][0]);
// getInfo_byType($list_of_media[0][0],$t);
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (!empty($_POST['btnAction']) && !empty($_POST['selectButton']) && $_POST['btnAction'] == "Search"){ 
    $by = $_POST['selectButton'];
    $search = $_POST['search_res'];
    $list_of_media = getMedia_byQuery($by,$search);
    
    // $list_of_watched = getAllWatched($_SESSION["email"]);
}
$email = $_POST['email'];
// echo "email: ". $email;
}
$link_address= "https://cs4750-project-db.uk.r.appspot.com/watchlist.php?email=". $email."";
$link_address2= "https://cs4750-project-db.uk.r.appspot.com/add_media.php?email=". $email."";
?>

<!-- 1. create HTML5 doctype -->
<!DOCTYPE html>
<html>
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
    
  <title>Watchlist Add Media</title>
  
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
       
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">WatchShelf</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo $link_address2;?>">Add Media</a>
      <a class="nav-item nav-link"  href="<?php echo $link_address;?>">Watchlist<a/>
    </div>
  </div>
</nav>
<div class="container">

<h1>Add Media</h1>
<h3>Search By: </h3>
<form action="add_media.php" method="post">
Title
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="radio" name="selectButton" value="Title" required>
Actor
<input type="radio" name="selectButton" value="Actor">
Director
<input type="radio" name="selectButton" value="Director">
<br>
<input type="textbox" class="form-control" name="search_res"  
            ?>    <br>
<input type="submit" value="Search" name="btnAction" class="btn btn-dark" /> 
</form>
<br>
<table class="w3-table w3-bordered w3-card-4" style="width:90%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="90%">Name</th>
    <th width="10%">Add</th> 
  </tr>
  </thead>
  <?php 
       if(count($list_of_media)==0){
         echo "<p>No Results Found.</p>";
       }
  ?>

  <?php foreach ($list_of_media as $media): ?>
  <tr>
    <td><?php echo "<h5>".$media['common_title']."</h5>"; 
     $type = getMediaInfo_byID($media['unique_title_identifier']);
     getInfo_byType($media['unique_title_identifier'],$type);?></td>
   
    <td>
      <form action="add_rating.php" method="post">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="submit" value="Add" name="btnAction" class="btn btn-primary" />
        <input type="hidden" name="title" value="<?php echo $media['common_title'] ?>" />
        <input type="hidden" name="title_id" value="<?php echo $media['unique_title_identifier'] ?>" />     
      </form>
    </td>
  </tr>
  <?php endforeach; ?>

  
  </table>
  </div>    
</body>
</html>