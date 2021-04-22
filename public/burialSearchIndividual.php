<?php
session_start();
require_once('../inc/CemeteryBurials.class.php');
$burial = new CemeteryBurials();

$burialDataArray = array();

// load the user if we have it
if (isset($_REQUEST['burials-id']) && $_REQUEST['burials-id'] > 0)
{
    $burial->load($_REQUEST['burials-id']);
    $burialDataArray = $burial->burialsData;
}




if (isset($burialDataArray['burials-dob'])) {
  $birthDateOld = $burialDataArray['burials-dob'];
  $birthDateNew = date("F jS, Y", strtotime($birthDateOld));
}

if (isset($burialDataArray['burials-date-of-death'])) {
  $deathDateOld = $burialDataArray['burials-date-of-death'];
  $deathDateNew = date("F jS, Y", strtotime($deathDateOld));
}

if (isset($burialDataArray['burials-interment-date'])) {
  $intermentDateOld = $burialDataArray['burials-interment-date'];
  $intermentDateNew = date("F jS, Y", strtotime($intermentDateOld));
}
require_once('../tpl/burialSearchIndividual.tpl.php');


?>
