<?php
session_start();
if($_SESSION['loggedIn'] == "yes") {
require_once('../inc/CemeteryBurials.class.php');
$burial = new CemeteryBurials();

//$burialDataArray = array();

    if($burial->delete($_GET['burials-id'])) {
      $deleteMsg = "The burial associated with ID #". $_GET['burials-id'] ." has been deleted.";
    } else {
      $deleteMsg = "Uh-oh, we weren't able to delete the burial associated with ID #".$burials_id." Please try again.";
    }

require_once('../tpl/delete.tpl.php');

} else {
  header("location: adminLogin.php");
  exit;
}

?>
