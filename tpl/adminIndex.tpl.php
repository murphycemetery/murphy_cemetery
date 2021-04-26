<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Murphy Cemetery - Burial Search</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <?php if($_SESSION['loggedIn'] == "yes") { ?>
            <a href="adminIndex.php"><li>Admin Home</li></a>
          <?php } ?>
          <a href="index.php"><li>Home</li></a>
          <a href="about.php"><li>About/History</li></a>
          <a href="location.php"><li>Location</li></a>
          <a href="burialSearch.php"><li>Burial Search</li></a>
          <a href="contact.php"><li>Contact</li></a>
          <?php if($_SESSION['loggedIn'] == "yes") { ?>
            <a href="logout.php"><li>Logout</li></a>
          <?php } else { ?>
            <a href="adminLogin.php"><li>Login</li></a>
          <?php } ?>
        </ul>
      </nav>
    </header>

    <main>
      <?php if($_SESSION['loggedIn'] == 'yes') { ?>
        <h2>Welcome <?php echo $_SESSION['username'];?>!</h2>
      <?php } else {

      } ?>
      <h1>Administrator View</h1>
      <table border="1">
          <tr>
              <th>ID&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-id`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-id`&sortDirection=DESC">D</a></th>
              <th>First Name&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-first-name`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-first-name`&sortDirection=DESC">D</a></th>
              <th>Last Name&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-last-name`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-last-name`&sortDirection=DESC">D</a></th>
              <th>Birth Date&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-dob`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-dob`&sortDirection=DESC">D</a></th>
              <th>Death Date&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-date-of-death`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-date-of-death`&sortDirection=DESC">D</a></th>
              <th>Birth Year&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-birth-year`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-birth-year`&sortDirection=DESC">D</a></th>
              <th>Death Year&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-death-year`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-death-year`&sortDirection=DESC">D</a></th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
          </tr>
          <?php foreach ($burialList as $burialsData)
          { ?>
              <tr>
                  <td><?php echo $burialsData['burials-id']; ?></td>
                  <td><?php echo $burialsData['burials-first-name']; ?></td>
                  <td><?php echo $burialsData['burials-last-name']; ?></td>
                  <td><?php echo $burialsData['burials-dob']; ?></td>
                  <td><?php echo $burialsData['burials-date-of-death']; ?></td>
                  <td><?php echo $burialsData['burials-birth-year']; ?></td>
                  <td><?php echo $burialsData['burials-death-year']; ?></td>

                  <td><a href="../public/adminAddBurial.php?burials-id=<?php echo $burialsData['burials-id']; ?>">Edit</a></td>
                  <td><a href="../public/burialSearchIndividual.php?burials-id=<?php echo $burialsData['burials-id']; ?>">View</a></td>
                  <td><a href="../public/deleteConfirmation.php?burials-id=<?php echo $burialsData['burials-id']; ?>">Delete</a></td>
              </tr>
          <?php } ?>
      </table><br>


      <a href="addBurial.php"><button class="add">Add Burial</button></a>
      <a href="burialSearch.php"><button class="add">Search Burials</button></a>

    </main>
  </body>
</html>
