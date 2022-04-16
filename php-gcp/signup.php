
<?php
require('connect-db.php');
require('user_functions.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Sign Up!"){
    signup($_POST['email'],$_POST['username'],$_POST['password']);
   
  }
    
}
?>
  <!-- if you choose to use CDN for CSS bootstrap -->  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="https://clipartix.com/wp-content/uploads/2017/01/Movie-camera-clip-art-clipart-free-download-11.png" />
  <!-- you may also use W3's formats -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body style="background-color:#3a2961 ;">
  <br><br>
  <div class="container" style="text-align: center;width: 500px;height:500px;background-color:black;border-radius: 25px;">
  <br>
  <form name="mainForm" action="signup.php" method="post">   
  <div class="row mb-3 mx-3">
  <p style="font-size:30;font-family: sans-serif;color:white;text-align:left"> Email:</p>
    <input type="text" class="form-control" name="email" style='background-color:grey;border-color:black;color:white'  
      required      ?>        
  </div> 
  </br>
  <div class="row mb-3 mx-3">
  <p style="font-size:30;font-family: sans-serif;color:white;text-align:left"> Username:</p>
    <input type="text" class="form-control" name="username" style='background-color:grey;border-color:black;color:white'   
    required      ?>        
  </div> 
</br>
  <div class="row mb-3 mx-3">
  <p style="font-size:30;font-family: sans-serif;color:white;text-align:left"> Password:</p>
    <br>
    <input type="text" class="form-control" name="password"  style='background-color:grey;border-color:black;color:white'
            ?>    
  </div>  
  </br>
  <input type="submit" value="Sign Up!" name="btnAction" class="btn btn-dark"  style="height:50px;width:300px;color:white;background-color:#f44fb1;font-family: sans-serif;font-size:25px"
        title="Sign Up!" />  
</form>
  </div>
  </body>