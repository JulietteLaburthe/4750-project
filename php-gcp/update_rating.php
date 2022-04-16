
<?php
//session_start();
require('connect-db.php');
require('user_functions.php');
//dfvsfv


// if ($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//   if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Add"){ 
//         $_SESSION['current_title'] = $_POST['title'];
//         $_SESSION['current_title_id'] = $_POST['title_id'];
//   }
    
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $list_of_watched = getAllWatched($email);
    if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Update")
    {  
      // If the button is clicked and its value is "Update" then retrieve info about that friend.
      // We'll later fill in the friend's info in the form so that a user can update the info.
      
      $watch_to_update = getMedia_byID($_POST['watch_to_update']);
      $list_of_watched = getAllWatched($_POST["email"]);
      // To fill in the form, assign the pieces of info to the value attributes of form input textboxes.
      // Then, we'll wait until a user makes some changes to the friend's info 
      // and click the "Confirm update" button to actually make it reflect the database. 
      // (also note: "name" is a primary key -- refer to the friends table we created, thus can't be updated)
    }

}
$list_of_media = getAllMedia();
$list_of_watched = getAllWatched($email);
$watch_to_update_id = $watch_to_update['unique_title_identifier'];
$link_address= "https://localhost/4750-project/php-gcp/watchlist.php?email=". $email."";
$link_address2= "https://localhost/4750-project/php-gcp/add_media.php?email=". $email."";
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
    
  <title>Update Watchlist</title>
  
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
      <a class="nav-item nav-link"  href="<?php echo $link_address;?>"style="padding: 10px;color:white;font-family: 'DM Sans', sans-serif;" >Watchlist<a/>
      <a style="padding: 10px;" href="https://cs4750-project-db.uk.r.appspot.com/home_page.php" > <img src="https://cdn-icons-png.flaticon.com/128/1828/1828479.png" style="height: 25px;"/></a>

</nav>
<div class="container" style="text-align: left; padding-bottom:7%">

      <?php 
            $media_to_update = getMedia_byID($watch_to_update['unique_title_identifier']);
            $watch_to_update = getWatched_byEmailID($email,$watch_to_update['unique_title_identifier']);
      ?>
  <h1 style="font-size:50px;font-family: sans-serif;color:white"><?php echo $media_to_update["common_title"]?></h1>  

  <form name="mainForm" action="watchlist.php" method="post">   
  <div class="row mb-3 mx-3">
  <h3 style="color:#f44fb1;font-family:sans-serif"><b> Rating: </b></h3>
  </div>
  <div class="mb-3 form-check form-check-inline">
        <label for="0" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif"> 0</p></label>
        <input type="radio"class="form-check-input" value="0" id="0" name="rating" <?php echo ($watch_to_update['rating'] =="0")?'checked':'' ?> required/>
  </div>
  <div class="mb-3 form-check form-check-inline">
        <label for="1" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">1</p></label>
        <input type="radio"class="form-check-input" value="1" id="1" name="rating"  <?php echo ($watch_to_update['rating'] =="1")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="2" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">2</p></label>
        <input type="radio"class="form-check-input"  value="2" id="2" name="rating"  <?php echo ($watch_to_update['rating'] =="2")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="3" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">3</p></label>
        <input type="radio"class="form-check-input"  value="3" id="3" name="rating"  <?php echo ($watch_to_update['rating'] =="3")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="4" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">4</p></label>
        <input type="radio"class="form-check-input"  value="4" id="4" name="rating"  <?php echo ($watch_to_update['rating'] =="4")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="5" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">5</p></label>
        <input type="radio"class="form-check-input"  value="5" id="5" name="rating"  <?php echo ($watch_to_update['rating'] =="5")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="6" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">6</p></label>
        <input type="radio"class="form-check-input"  value="6" id="6" name="rating"  <?php echo ($watch_to_update['rating'] =="6")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="7" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">7</p></label>
        <input type="radio"class="form-check-input"  value="7" id="7" name="rating"  <?php echo ($watch_to_update['rating'] =="7")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="8" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">8</p></label>
        <input type="radio"class="form-check-input"  value="8" id="8" name="rating"  <?php echo ($watch_to_update['rating'] =="8")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="9" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">9</p></label>
        <input type="radio"class="form-check-input"  value="9" id="9" name="rating"  <?php echo ($watch_to_update['rating'] =="9")?'checked':'' ?>required/>
  </div>
  <div class="mb-3 form-check form-check-inline" >
        <label for="10" class="form-check-label" ><p style="color:#f44fb1;font-family:sans-serif">10</p></label>
        <input type="radio"class="form-check-input"  value="10" id="10" name="rating" <?php echo ($watch_to_update['rating'] =="10")?'checked':'' ?> required/>
  </div>
  <?php 
            $watch_to_update = getWatched_byEmailID($email,$watch_to_update['unique_title_identifier']);
           
      ?>
  <div class="row mb-3 mx-3">
  <h3 style="color:#f44fb1;font-family:sans-serif"><b> Review: </b></h3>
    <input type="text" class="form-control" name="review"  value="<?php if ($watch_to_update!=null)  echo $watch_to_update['user_comment'] ?>" style="background-color:grey;border-color:black;color:white"/> 
  </div>

<div class="row mb-3 mx-3">
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="watch_to_update_id" value="<?php echo $watch_to_update_id ?>">
  <input type="submit" value="Confirm update" name="btnAction" class="btn btn-dark" 
        title="confirm update a watch" />
 </div>
</form> 
</div>    
</body>
</html>