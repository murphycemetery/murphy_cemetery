<?php
session_start();
if($_SESSION['loggedIn'] == "yes") {
  require_once('../inc/CemeteryBurials.class.php');

  $burial = new CemeteryBurials();

  $burialList = $burial->getList(
      (isset($_GET['sortColumn']) ? $_GET['sortColumn'] : null),
      (isset($_GET['sortDirection']) ? $_GET['sortDirection'] : null),
      (isset($_GET['burials-first-name']) ? $_GET['burials-first-name'] : null),
      (isset($_GET['burials-last-name']) ? $_GET['burials-last-name'] : null)

  );
  //var_dump($burial);
  foreach ($burialList as $burialsData) {
    if (isset($burialsData['burials-dob'])) {
      $birthDateOld = $burialsData['burials-dob'];
      $birthDateNew = date("F jS, Y", strtotime($birthDateOld));
      //var_dump($birthDateNew);
    }


    if (isset($burialsData['burials-date-of-death'])) {
      $deathDateOld = $burialsData['burials-date-of-death'];
      $deathDateNew = date("F jS, Y", strtotime($deathDateOld));
      //var_dump($deathDateNew);
    }

    if (isset($burialsData['burials-interment-date'])) {
      $intermentDateOld = $burialsData['burials-interment-date'];
      $intermentDateNew = date("F jS, Y", strtotime($intermentDateOld));
    }
  }

  require_once('../tpl/adminIndex.tpl.php');
} else {
  header("location: adminLogin.php");
  exit;
}

?>
