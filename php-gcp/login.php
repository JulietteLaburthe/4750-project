
<?php
require('connect-db.php');
require('user_functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  // echo $_POST['email'];
  // echo $_POST['password'];
  if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Login"){
    login($_POST['email'],$_POST['password'],);
   
  }
    
}

?>
<html style="height:100%">
<head>
  <!-- if you choose to use CDN for CSS bootstrap -->  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://clipartix.com/wp-content/uploads/2017/01/Movie-camera-clip-art-clipart-free-download-11.png" />
  <!-- you may also use W3's formats -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&family=Montserrat:wght@500&display=swap');
</style>
</head>

<body style="height: 100%; background-image: url('https://i.imgur.com/yzNxGzq.png?2'); 
 background-position: center;

  background-size: 100% 100%;">
<center>
<br><br> 

<div class="container" style="text-align: center; padding-bottom:7%">
 <font color="white"> <h1 style="font-size:80px; font-family: 'DM Sans', sans-serif;">WatchShelf</h1>  </font>
 <br></br>
  <div class="container" style="text-align: center;width: 400px;height:450px;background-color:#1a0641;border-radius: 25px;">
  
  <br></br>
<form name="mainForm" action="login.php" method="post">   
<div class="row mb-3 mx-3">
<h2 style="font-family: 'Montserrat', sans-serif; color:white;">Login</h2>
</div>
  <div class="row mb-3 mx-3">
  <p style="font-size:20;font-family: 'Montserrat', sans-serif;color:white;text-align:left"> Email:</p>
    <br>
    <input type="text" class="form-control" name="email" style='border-color:black;'  
            ?>        
  </div>  
  </br>
  <div class="row mb-3 mx-3">
  <p style="font-size:20;font-family: 'Montserrat', sans-serif;color:white;text-align:left"> Password:</p>
    <br>
    <input type="text" class="form-control" name="password"  style='border-color:black;'
            ?>        
  </div>  
  <br>
  <input type="submit" value="Login" name="btnAction" class="btn btn-dark" 
        title="Login"  style="border-radius: 10px; font-size:20px; height:50px;width:250px;color:white; background-color:#FF4BB0; border-color:#f44fb1; font-family: 'Montserrat', sans-serif;"/>  
</form>
  </div>
  </body>


