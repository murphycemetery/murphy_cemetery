<?php
session_start();
$_SESSION['loggedIn'] = 'no';
require_once('../inc/Users.class.php');
$users = new Users();

//print "<h1> $message</h1>";
if (isset($_POST['login']))
{
    $userData = $_POST;
    // sanitize
    $userData = $users->sanitize($userData);
    $users->set($userData);
    $users->authorizeUser($_POST['username'], $_POST['password']);
    if ($user_info = $users->authorizeUser($_POST['username'], $_POST['password']))
    {
      //var_dump($user_info[0]);
      $_SESSION['loggedIn'] = 'yes';
      $_SESSION['user_id'] = $user_info[0];
      $_SESSION['username'] = $user_info[1];

      header("location: adminIndex.php");
      exit;
    }
    else
    {
        $loginFailed = "Login failed";
    }
}

require_once('../tpl/adminLogin.tpl.php');
?>
