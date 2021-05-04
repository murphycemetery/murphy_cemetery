<?php
session_start();
if($_SESSION['loggedIn'] == "yes") {
  require_once('../inc/CemeteryBurials.class.php');

  $burial = new CemeteryBurials();

  $burialDataArray = array();

  // load the user if we have it
  if (isset($_REQUEST['burials-id']) && $_REQUEST['burials-id'] > 0)
  {
      $burial->load($_REQUEST['burials-id']);
      $burialDataArray = $burial->burialsData;
  }
  require_once('../tpl/deleteConfirmation.tpl.php');

} else {
  header("location: adminLogin.php");
  exit;
}

?>
