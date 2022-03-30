
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