<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"
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
    
 <!-- if you choose to use CDN for CSS bootstrap -->  
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://clipartix.com/wp-content/uploads/2017/01/Movie-camera-clip-art-clipart-free-download-11.png" />
  <!-- you may also use W3's formats -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  


<title>WatchShelf</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&family=Montserrat:wght@500&display=swap');
</style>
</head>

<body style="height: 100%; background-image: url('background.png'); 
 background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;">
<center>
<br><br> 
<div class="container" >

<div class="container" style="text-align: center; padding-bottom:10%">
 <font color="white"> <h1 style="font-size:80px; font-family: 'DM Sans', sans-serif;">WatchShelf</h1>  </font>
 <p style="color:white;  font-size:20px; font-family: 'Montserrat', sans-serif;">remember what moved you.</p>
 <img src="movie_image.png" alt="movie icon on home page" style="width: 400px; height:auto;">
 <br></br>
<form action="login.php" method="POST">
<input type="submit" value=Login style="border-radius: 10px; font-size:20px; height:50px;width:250px;color:white; background-color:#FF4BB0; border-color:#f44fb1; font-family: 'Montserrat', sans-serif;"></input> 
</form>
<br></br>
<form action="signup.php"  method="POST">
<input type="submit"  value="Sign Up" style="border-radius: 10px; font-size:20px; 10px;height:50px;width:250px;color:white; background-color:#261b40; border-color:#f44fb1; font-family: 'Montserrat', sans-serif;"></input>
</form> 

</center>
</div>
</body>




</html>