
<?php
require('connect-db.php');
require('user_functions.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (!empty($_POST['btnAction']) && $_POST['btnAction'] == "Login"){
    login($_POST['email']);
   
  }
    
}
?>

<form name="mainForm" action="login.php" method="post">   
  <div class="row mb-3 mx-3">
    Email:
    <input type="text" class="form-control" name="email"  
            ?>        
  </div>  
  <input type="submit" value="Login" name="btnAction" class="btn btn-dark" 
        title="Login" />  
</form>