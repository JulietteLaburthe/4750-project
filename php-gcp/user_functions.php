<?php

function login($email)
{
		global $db;


	$query = 'select * from project_user_account where email = :email';
 
	

	// execute the sql
	$statement = $db->prepare($query);  
    $statement->bindValue(':email', $email);
    $statement->execute();
    $results = $statement->fetch();  
    if ($results == null) {
        echo "Error checking for user: email does not exist";
        
    } else{
        echo  implode(",", $results);
    }
 
    
    
	

	// release; free the connection to the server so other sql statements may be issued 
	$statement->closeCursor();
    return $results;
}

function signup($email,$username,$password){

	global $db;


    // echo $email;
    // echo $username;
    // echo $password;
	$query1 = 'select * from project_user_account where email = :email';
    
    $statement1 = $db->prepare($query1);   // query() will compile and execute the sql
    $statement1->bindValue(':email', $email);
    $statement1->execute();
    $results1 = $statement1->fetch();  
     // this ensures that entry is only being added if accounts doesn't already exist
    if ($results1 == null) {
       $hashed_password = password_hash($password,PASSWORD_DEFAULT);
       $query = "insert into project_user_account values(:email, :username, :password)";
    
       $statement = $db->prepare($query);   // query() will compile and execute the sql
       $statement->bindValue(':email', $email);
       $statement->bindValue(':username', $username);
       $statement->bindValue(':password', $hashed_password);
       $statement->execute();
       $results = $statement->fetch();   
       $statement->closeCursor();
       echo "Successfully created account.";
       return $results;
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
	$query = "select * from media limit 30";

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

?>