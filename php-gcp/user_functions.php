<?php
session_start();
ob_start();
function login($email, $password)
{
		global $db;


	$query = 'select * from user_account where email = :email';
    //returns the row of the user
	

	// execute the sql
	$statement = $db->prepare($query);  
    $statement->bindValue(':email', $email);
    $statement->execute();
    $results = $statement->fetch();  
    // echo $results[2] ."\n"; //returns the password
   
    if ($results == null) {
        echo "Error checking for user: email does not exist";
       
    } else if (!empty($results)){
        // $p = password_hash($password,PASSWORD_DEFAULT);
        // echo $p;
        if (password_verify($password, $results[2])) {
            //setcookie("email", $results[0], time() + 3600);
            //setcookie("username",$results[1], time() + 3600);
            //setcookie("password", $results[2], time() + 3600);
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $query[1];
			header("Location: https://localhost/php-gcp/add_media.php");
	
			

			
			ob_end_flush();
            
    }else{ echo "Error logging in: incorrect password";}


    

}else{
   
}
    $statement->closeCursor();
    

}

function signup($email,$username,$password){

	global $db;


    // echo $email;
    // echo $username;
    // echo $password;
	$query1 = 'select * from user_account where email = :email';
    
    $statement1 = $db->prepare($query1);   // query() will compile and execute the sql
    $statement1->bindValue(':email', $email);
    $statement1->execute();
    $results1 = $statement1->fetch();  
     // this ensures that entry is only being added if accounts doesn't already exist
    if ($results1 == null) {
       $hashed_password = password_hash($password,PASSWORD_DEFAULT);
       $query = "insert into user_account values(:email, :username, :password)";
    
       $statement = $db->prepare($query);   // query() will compile and execute the sql
       $statement->bindValue(':email', $email);
       $statement->bindValue(':username', $username);
       $statement->bindValue(':password', $hashed_password);
       $statement->execute();
       $results = $statement->fetch();   
       $statement->closeCursor();
       $_SESSION['email'] = $email;
       $_SESSION['username'] = $username;
	   header("Location: https://localhost/php-gcp/add_media.php");
	

       return true;
    } else{
        echo "Error : account already exists with this email";
        // echo  implode(",", $results1);
    }
    
    $statement1->closeCursor();
}

//will limit it 
function getAllMedia()
{
	global $db;
	$query = "select * from media limit 20";

// bad	
	// $statement = $db->query($query);     // 16-Mar, stopped here, still need to fetch and return the result 
	
// good: use a prepared stement 
// 1. prepare
// 2. bindValue & execute
	$statement = $db->prepare($query);
	$statement->execute();

	// fetchAll() returns an array of all rows in the result set
	$results = $statement->fetchAll();   

	$statement->closeCursor();

	return $results;
}

function getMedia_byID($title_id){
    global $db;
    $query = "select * from media where unique_title_identifier = :title_id";
    

// bad	
	// $statement = $db->query($query);     // 16-Mar, stopped here, still need to fetch and return the result 
	
// good: use a prepared stement 
// 1. prepare
// 2. bindValue & execute
    $statement = $db->prepare($query);
    
    $statement->bindValue(':title_id', $title_id);
	$statement->execute();
    
	// fetchAll() returns an array of all rows in the result set
	$results = $statement->fetch();   
    //echo implode(",",$results);
    
	$statement->closeCursor();

	return $results;

}

function getAllWatched($email)
{
	global $db;
	$query = "select * from has_watched where email = :email";

// bad	
	// $statement = $db->query($query);     // 16-Mar, stopped here, still need to fetch and return the result 
	
// good: use a prepared stement 
// 1. prepare
// 2. bindValue & execute
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
	$statement->execute();

	// fetchAll() returns an array of all rows in the result set
	$results = $statement->fetchAll();   

	$statement->closeCursor();

	return $results;
}

function addMedia($email, $unique_title_identifier, $rating, $user_comment)
{
	// db handler
	global $db;
	$query = "insert into has_watched values(:email, :unique_title_identifier, :user_comment, :rating)";

	// execute the sql
	// $statement = $db->query($query);   // query() will compile and execute the sql
	$statement = $db->prepare($query);

	$statement->bindValue(':email', $email);
	$statement->bindValue(':unique_title_identifier', $unique_title_identifier);
    $statement->bindValue(':user_comment', $user_comment);
    $statement->bindValue(':rating', $rating);

	//echo $query;
	$statement->execute();

	// release; free the connection to the server so other sql statements may be issued 
	$statement->closeCursor();
}

function updateMedia($email, $unique_title_identifier, $rating, $user_comment)
{
	// db handler
	global $db;
	$query = "update has_watched set user_comment=:user_comment, rating=:rating where email=:email and unique_title_identifier=:unique_title_identifier";

	// execute the sql
	// $statement = $db->query($query);   // query() will compile and execute the sql
	$statement = $db->prepare($query);

	$statement->bindValue(':email', $email);
	$statement->bindValue(':unique_title_identifier', $unique_title_identifier);
    $statement->bindValue(':user_comment', $user_comment);
    $statement->bindValue(':rating', $rating);

	//echo $query;
	$statement->execute();

	// release; free the connection to the server so other sql statements may be issued 
	$statement->closeCursor();
}

function deleteMedia($email, $unique_title_identifier)
{
	global $db;
	$query = "delete from has_watched where email=:email and unique_title_identifier=:unique_title_identifier";
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':unique_title_identifier', $unique_title_identifier);
	$statement->execute();
	$statement->closeCursor();
}

function getWatched_byEmailID($email, $unique_title_identifier)
{
	global $db;
	$query = "select * from has_watched where email=:email and unique_title_identifier=:unique_title_identifier";
	$statement = $db->prepare($query);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':unique_title_identifier', $unique_title_identifier);
	$statement->execute();
    
    
    $results = $statement->fetch(); 
    $statement->closeCursor();  

	return $results;
}
?>