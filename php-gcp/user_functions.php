<?php
// session_start();
// ob_start();
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
        echo "<br></br><div class='container' style='text-align: center;width: 500px;height:30px;background-color:#1a0641;border-radius: 7px;'><p style='color:white'>Error checking for user: email does not exist</p></div>";
       
    } else if (!empty($results)){
        // $p = password_hash($password,PASSWORD_DEFAULT);
        // echo $p;
        if (password_verify($password, $results[2])) {
            //setcookie("email", $results[0], time() + 3600);
            //setcookie("username",$results[1], time() + 3600);
            //setcookie("password", $results[2], time() + 3600);
            // $_SESSION['email'] = $email;
			// $_SESSION['username'] = $query[1];
			
			echo '<br></br> <div class="container" style="text-align: center;width: 600px;height:30px;background-color:#1a0641;border-radius: 15px; "><a href="https://localhost/php-gcp/add_media?email=' . $email . '" style="color:white">Login Successful! 
			Click here to start Adding Media to Your Watchlist!</a></div>';


			

			
		
            
    }else{echo "  <div class='container' style='text-align: center;width: 800px;height:30px;background-color:black;border-radius: 15px;'><p style='color:white'>Error logging in: incorrect password</p></div>";}


    

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
    //    $_SESSION['email'] = $email;
    //    $_SESSION['username'] = $username;
	echo '<div class="container" style="text-align: center;width: 800px;height:30px;background-color:black;border-radius: 15px;"><a style="color:white" href="https://cs4750-project-db.uk.r.appspot.com/add_media.php?email=' . $email . '">Sign Up Successful! Click here to start Adding Media to Your Watchlist!</a></div>';
	

       return true;
    } else{
        echo "<div class='container' style='text-align: center;width: 800px;height:30px;background-color:black;border-radius: 15px;'><p style='color:white'>Error : account already exists with this email </p></div>";
        // echo  implode(",", $results1);
    }
    
    $statement1->closeCursor();
}

//will limit it 
function getAllMedia()
{
	global $db;
	$query = "select * from media limit 3";

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
function getMedia_byQuery($by,$search_res,$email)
{	
	global $db;
	if ($by == 'Title'){
		$title_q = 'select unique_title_identifier ,common_title from media where common_title like "%'.$search_res. '%" limit 10';
	    //  echo $title_q;
		 $title_s = $db->prepare($title_q);
		 $title_s->execute();
		 $title_r = $title_s->fetchAll(PDO::FETCH_ASSOC);
		 
		 if ($title_r != null){
			 
			 
		 }else{
			 $title_r = "The search yielded no results, please try again.";
			 $result = array();
			 return $result;
		 }
		 $title_s->closeCursor();
		 return $title_r;
	}
	if ($by == 'Actor'){
		$actor_q = 'select n.name, c.characters, c.unique_title_identifier ,
		 m.common_title from cast c ,names n, media m where c.category= "actor" 
		 and n.nconst = c.name and m.unique_title_identifier = c.unique_title_identifier 
		 and n.name like "%'.$search_res. '%" limit 10;';
	    //  echo $actor_q;
		 $actor_s = $db->prepare($actor_q);
		 $actor_s->execute();
		 $actor_r = $actor_s->fetchAll(PDO::FETCH_ASSOC);
		 
		 if ($actor_r != null){
			 
			 
		 }else{
			 $actor_r = "The search yielded no results, please try again.";
			 $result = array();
			 return $result;
		 }
		 $actor_s->closeCursor();
		 return $actor_r;
	}
	if ($by == 'Director') {

			$director_q = 'with nam as (with dir as (select nconst ,name from names where name like "%'.$search_res. '%" )
		 select d.name , m.unique_title_identifier from made_by m, dir d where m.director = d.nconst)
		  select n.unique_title_identifier, n.name, m.common_title from nam n, media m where n.unique_title_identifier = m.unique_title_identifier limit 10';
		//   echo $director_q;
		  $director_s = $db->prepare($director_q);
		  $director_s->execute();
		  $director_r = $director_s->fetchAll(PDO::FETCH_ASSOC);
		  
		  if ($director_r != null){
			  
			  
		  }else{
			  $director_r = "The search yielded no results, please try again.";
			  $result = array();
			  return $result;
		  }
		  $director_s->closeCursor();
		  return $director_r;
	}

}
function getMedia_byID($title_id){
    global $db;
    $query = "select * from media where unique_title_identifier = :title_id";
    $statement = $db->prepare($query);
    
    $statement->bindValue(':title_id', $title_id);
	$statement->execute();
    
	// fetchAll() returns an array of all rows in the result set
	$results = $statement->fetch(PDO::FETCH_ASSOC);   
    //echo implode(",",$results);
    
	$statement->closeCursor();

	 return $results;

}
function getMediaInfo_byID($title_id){
    global $db;
	//figure out which kind of media it is 
	$media_types = array("movie","TVshow","short");
	foreach ($media_types as $type){
		$query = "select * from media where unique_title_identifier = :title_id ";
    

		$statement = $db->prepare($query);
		$statement->bindValue(':title_id', $title_id);
		$statement->execute();
		// fetchAll() returns an array of all rows in the result set
		$results = $statement->fetch(PDO::FETCH_ASSOC);   
		// echo implode(",",$results);
		$id = $results['unique_title_identifier'];
		$statement->closeCursor();
		$query2 = "select * from $type where unique_title_identifier = :title_id";
		$statement2 = $db->prepare($query2);
		$statement2->bindValue(':title_id', $id);
		$statement2->execute();
		$results2 = $statement2->fetch(PDO::FETCH_BOTH);
		// echo $results2[0];
		
		if ($results2 != null){
			return $type;
		}
	
	};
   
   
	

}


function getInfo_byType($id,$type){
	global $db;
	$genres_query = 'select genres from media_genres where unique_title_identifier = :title_id';
	$genres_statement = $db->prepare($genres_query);
	$genres_statement->bindValue(':title_id', $id);
	$genres_statement->execute();
	$genres_result = $genres_statement->fetch(PDO::FETCH_ASSOC);
	if ($genres_result != null){
		$genres_result =  implode(' ',$genres_result);
	}else{
		$genres_result = "No genres found for this title.";
	}
	$cast_query = 'with cas as (select name, characters from cast where unique_title_identifier = :title_id and category= "actor") 
	select n.name,c.characters from names n, cas c where c.name = n.nconst';
	$cast_statement = $db->prepare($cast_query);
	$cast_statement->bindValue(':title_id', $id);
	$cast_statement->execute();
	$cast_result = $cast_statement->fetch(PDO::FETCH_ASSOC);
	if ($cast_result != null){
		$cast_result = implode(' ',$cast_result);
	}else{
		$cast_result = "No cast found for this title.";
	}
	$director_query = 'with dir as (select * from crew_directors where unique_title_identifier = :title_id )
	  select n.name from names n, dir d where d.directors = n.nconst';
	$director_statement = $db->prepare($director_query);
	$director_statement->bindValue(':title_id', $id);
	$director_statement->execute();
	$director_result = $director_statement->fetch(PDO::FETCH_ASSOC);
	if ($director_result != null){
		$director_result = implode(' ',$director_result);
	}else{
		$director_result = "No director found for this title.";
	}
  $writer_query = 'with wri as (select * from crew_writers where unique_title_identifier = :title_id)
  select n.name from names n, wri w where w.writers = n.nconst ';
  $writer_statement = $db->prepare($writer_query);
  $writer_statement->bindValue(':title_id', $id);
  $writer_statement->execute();
  $writer_result = $writer_statement->fetch(PDO::FETCH_ASSOC);
  if ($writer_result != null){
	  $writer_result = implode(' ',$writer_result);
  }else{
	  $writer_result = "No writer found for this title.";
  }
	
	$media_spec_result = [];
	if ($type == 'movie'){
		$media_query = "select year_released, runtime from $type where unique_title_identifier = :title_id";
		$media_statement = $db->prepare($media_query);
		$media_statement->bindValue(':title_id', $id);
		$media_statement->execute();
		$media_spec_result = $media_statement->fetch(PDO::FETCH_ASSOC);
		if ($media_spec_result != null){
			$media_spec_result = "<b style='color:#f44fb1;font-family: sans-serif'> Year released: </b>".$media_spec_result['year_released'].", <b style='color:#f44fb1;font-family: sans-serif'> Runtime (minutes): </b>".$media_spec_result['runtime'];
		}else{
			$media_spec_result = "No information found for this $type.";
		}
	}
	if ($type == 'short'){
		$media_query = "select runtime from $type where unique_title_identifier = :title_id";
		$media_statement = $db->prepare($media_query);
		$media_statement->bindValue(':title_id', $id);
		$media_statement->execute();
		$media_spec_result = $media_statement->fetch(PDO::FETCH_ASSOC);
		if ($media_spec_result != null){
			$media_spec_result = "<b style='color:#f44fb1;font-family: sans-serif'> Runtime (minutes): </b>".$media_spec_result['runtime'];
		}else{
			$media_spec_result = "No information found for this $type.";
		}
	}
	if ($type == 'TVshow'){
		$media_query = "select start_year, end_year from $type where unique_title_identifier = :title_id";
		$media_statement = $db->prepare($media_query);
		$media_statement->bindValue(':title_id', $id);
		$media_statement->execute();
		$media_spec_result = $media_statement->fetch(PDO::FETCH_ASSOC);
		if ($media_spec_result != null){
			$media_spec_result = "<b style='color:#f44fb1;font-family: sans-serif'> Start year: </b>".$media_spec_result['start_year'].", <b style='color:#f44fb1;font-family: sans-serif'>End year: </b>".$media_spec_result['end_year'];
		}else{
			$media_spec_result = "No information found for this $type.";
		}
	}
	echo "<pre>" .implode("\n",["<b style='color:#f44fb1;font-family: sans-serif'> Genres: </b>". $genres_result,"<b style='color:#f44fb1;font-family: sans-serif'> Cast: </b>".$cast_result,"<b style='color:#f44fb1;font-family: sans-serif'> Director: </b>".$director_result,"<b 'style=color:#f44fb1;font-family: sans-serif'> Writer: </b>".$writer_result,$media_spec_result])."</pre>";
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

function getAllWatchedbyRating($email)
{
	global $db;
	$query = "select * from has_watched where email = :email order by rating desc";

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

function getAllWatchedbyTitle($email)
{
	global $db;
	$query = "select * from has_watched natural join media where email = :email order by common_title asc";

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
	$query = "insert ignore into has_watched values(:email, :unique_title_identifier, :user_comment, :rating)";

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

function getRatingDistribution($email){
	global $db;
	$query = "CALL GetRatingDistributionPerPerson('".$email."');";
	$statement = $db->query($query);
	$results = $statement->fetchAll(PDO::FETCH_ASSOC); 
	return $results;

}
?>
