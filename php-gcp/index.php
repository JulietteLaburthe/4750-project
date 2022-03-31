<?php
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
   case '/':                   // URL (without file name) to a default screen
      require 'home_page.php';
      break; 
   case '/login.php':     // if you plan to also allow a URL with the file name 
      require 'login.php';
      break;              
   case '/signup.php':
      require 'signup.php';
      break;
	case '/add_media.php':
		require 'add_media.php';
		break;
	case '/add_rating.php':
		require 'add_rating.php';
		break;
	case '/watchlist.php':
		require 'watchlist.php';
		break;
	case '/update_rating.php':
		require 'update_rating.php';
		break;
   default:
      http_response_code(404);
      exit('Not Found');
}  
?>