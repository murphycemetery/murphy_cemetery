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
      <h1>Search for a Loved One</h1>

      <form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="GET">
        <label for="burials-first-name">First name:</label><br>
        <input type="text" id="burials-first-name" name="burials-first-name"><br>

        <label for="burials-last-name">Last name:</label><br>
        <input type="text" id="burials-last-name" name="burials-last-name"><br><br>

        <input type="reset" value="Reset">
        <input type="submit" name ="filter" value="Search">
      </form>


        <?php
        foreach ($burialList as $burialsData)
        { ?>
          <div class="burial">
            <h2><?php echo $burialsData['burials-first-name']; ?> <?php echo $burialsData['burials-middle-name']; ?> <?php echo $burialsData['burials-last-name']; ?> </h2>
            <?php if(isset($burialsData['burials-img-deceased']) && $burialsData['burials-img-deceased'] != "") { ?>
              <img src="deceased_img/deceased_img_<?php echo $burialsData['burials-id'];?>.png" alt = "<?php echo $burialsData['burials-first-name'];?> <?php echo $burialsData['burials-last-name']; ?>">
            <?php } ?>
            <?php if(isset($burialsData['burials-dob']) && isset($burialsData['burials-date-of-death'])) {
                $birthDateOld = $burialsData['burials-dob'];
                $birthDateNew = date("F jS, Y", strtotime($birthDateOld));

                $deathDateOld = $burialsData['burials-date-of-death'];
                $deathDateNew = date("F jS, Y", strtotime($deathDateOld));
                ?>
              <p><?php echo $birthDateNew ?> - <?php echo $deathDateNew ?></p>
            <?php } else if(isset($burialsData['burials-birth-year']) && isset($burialsData['burials-death-year'])) { ?>
              <p><?php echo $burialsData['burials-birth-year']; ?> - <?php echo $burialsData['burials-death-year']; ?></p>
            <?php } ?>
            <p>Plot Row: <?php echo $burialsData['burials-plot-row']; ?></p>
            <p>Plot Number: <?php echo $burialsData['burials-plot-number']; ?></p>
            <?php if($_SESSION['loggedIn'] == "yes") { ?>
              <a href="../public/adminEditBurial.php?burials-id=<?php echo $burialsData['burials-id']; ?>"><button>Edit</button></a>
              <a href="../public/deleteConfirmation.php?burials-id=<?php echo $burialsData['burials-id']; ?>"><button>Delete</button></a>
            <?php } ?>
            <a href="../public/burialSearchIndividual.php?burials-id=<?php echo $burialsData['burials-id']; ?>"><button>View</button></a>

        </div>
        <?php } ?>
    </main>
  </body>
</html>
