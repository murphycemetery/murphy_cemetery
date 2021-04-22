<?php
//use current session
session_start();

//remove session variables
session_unset();

//remove current session


//user is no longer a valid user
$_SESSION['loggedIn'] = 'no';

//redirect to login page
header('location: burialSearch.php');
?>
