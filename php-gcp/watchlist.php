<?php
//session_start();
require('connect-db.php');
require('user_functions.php');
error_reporting(E_ALL ^ E_WARNING); 
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
  $email =$_GET['email'];
  }
// echo "email: " . $email;
$list_of_media = getAllMedia();
$list_of_watched = getAllWatched($email);



if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
      // echo "EMAIL: ". $email;
    if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Add to Watchlist"){ 
        $current_rating = $_POST['rating'];
        $current_review = $_POST['review'];
        $current_title_id = $_POST['current_title_id'];
        addMedia($email, $current_title_id, $current_rating, $current_review);
       
        $list_of_watched = getAllWatched($email);
    }
    if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Confirm update")
    {
      $current_rating = $_POST['rating'];
      $current_review = $_POST['review'];
      $watch_to_update_id = $_POST['watch_to_update_id'];
      updateMedia($email, $watch_to_update_id, $current_rating, $current_review);
      $list_of_watched = getAllWatched($email);
    }

    if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Delete")
    {

      $watch_to_delete = $_POST['watch_to_delete'];
      deleteMedia($email,$watch_to_delete);
      $list_of_watched = getAllWatched($email);
    }

    //Sort by Rating
    if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Sort by Rating")
    {
      $list_of_watched = getAllWatchedbyRating($email);
    }

    //Sort by Title
    if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Sort by Title")
    {
      $list_of_watched = getAllWatchedbyTitle($email);
    }
  
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
<h1>My Watchlist</h1>
<h3>List of Movies</h3>
<div>
  <form method="post" action="watchlist.php" style ="display: inline;">
      <!-- More code here -->
      <input type="hidden" name="email" value="<?php echo $email ?>">
      <input type="submit" value="Sort by Title" name="btnAction" class="btn btn-success" />
  </form>
  <form method="post" action="watchlist.php" id="form2" style ="display: inline;">
  <input type="hidden" name="email" value="<?php echo $email ?>">
      <!-- More code here -->
      <input type="submit" value="Sort by Rating" name="btnAction" class="btn btn-primary" />
  </form>
</div>

<table class="w3-table w3-bordered w3-card-4" style="width:90%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="35%">Title</th>
    <th width="10%">Rating</th>
    <th width="35%">Review</th> 
    <th width="10%">Update</th>
    <th width="10%">Delete</th>
  </tr>
  </thead>
  <?php foreach ($list_of_watched as $watched): ?>
  <tr>
    <?php 
        $media_watched = getMedia_byID($watched['unique_title_identifier']);
    ?>
    <td><?php echo $media_watched['common_title']; ?></td>
    <td><?php echo $watched['rating']; ?></td>
    <td><?php echo $watched['user_comment']; ?></td>
    <td>
      <form action="update_rating.php" method="post">
      <input type="hidden" name="email" value="<?php echo $email ?>">
      <input type="hidden" name="current_title" value="<?php echo $current_title ?>">
        <input type="submit" value="Update" name="btnAction" class="btn btn-primary" />
        <input type="hidden" name="watch_to_update" value="<?php echo $watched['unique_title_identifier']?>" />      
      </form>
    </td>
    <td>
    <form action="watchlist.php" method="post">
    <input type="hidden" name="email" value="<?php echo $email ?>">
  <input type="hidden" name="current_title" value="<?php echo $current_title ?>">
  <input type="hidden" name="current_title_id" value="<?php echo $current_title_id ?>">
        <input type="submit" value="Delete" name="btnAction" class="btn btn-danger" />

        <input type="hidden" name="watch_to_delete" value="<?php echo $watched['unique_title_identifier'] ?>" />      
      </form>
    </td> 
  </tr>
  <?php endforeach; ?>

  
  </table>
  </div>    
</body>
</html>