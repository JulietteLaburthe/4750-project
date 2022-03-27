<?php

function login($email)
{
	// db handler
	global $db;

	// write sql
	// insert into friends (name, major, year) values('someone', 'cs', 4)"; 
	// or
	// insert into friends values('someone', 'cs', 4)";

// bad practice (but convenient)
	$query = 'select * from project_user_account where email = :email';
 
// good practice: use a prepared statement 
// 1. prepare
// 2. bindValue & execute	
	

	// execute the sql
	$statement = $db->prepare($query);   // query() will compile and execute the sql
    $statement->bindValue(':email', $email);
    $statement->execute();
    
    if ($statement === false) {
        echo "Error checking for user: email does not exist";
    } 
	
    // echo $email;
    echo $query;
	

	// release; free the connection to the server so other sql statements may be issued 
	$statement->closeCursor();
}

?>