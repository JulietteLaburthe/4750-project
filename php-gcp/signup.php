
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
<h1>Sign Up</h1>
<h3>Please enter the information below to create your account: </h3>
<form name="mainForm" action="signup.php" method="post">   
  <div class="row mb-3 mx-3">
    Email:
    <input type="text" class="form-control" name="email"  
      required      ?>        
  </div> 
  </br>
  <div class="row mb-3 mx-3">
    Username:
    <input type="text" class="form-control" name="username"  
    required      ?>        
  </div> 
</br>
  <div class="row mb-3 mx-3">
    Password:
    <input type="text" class="form-control" name="password"  
         required    ?>        
  </div>  
  </br>
  <input type="submit" value="Sign Up!" name="btnAction" class="btn btn-dark" 
        title="Sign Up!" />  
</form>