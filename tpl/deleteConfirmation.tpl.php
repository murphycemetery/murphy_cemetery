<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Are you sure you want to delete this burial?</h1>
    <a href= "delete.php?burials-id=<?php echo $burialDataArray['burials-id']; ?>"><button>Yes, I'm sure</button></a>
    <button onclick="history.go(-1);">No, go back </button>
  </body>
</html>
