<?php
session_start();
require_once('../inc/CemeteryBurials.class.php');

$burial = new CemeteryBurials();

$burialList = $burial->getList(
    (isset($_GET['sortColumn']) ? $_GET['sortColumn'] : null),
    (isset($_GET['sortDirection']) ? $_GET['sortDirection'] : null),
    (isset($_GET['burials-first-name']) ? $_GET['burials-first-name'] : null),
    (isset($_GET['burials-last-name']) ? $_GET['burials-last-name'] : null)

);

require_once('../tpl/burialSearch.tpl.php');

?>
