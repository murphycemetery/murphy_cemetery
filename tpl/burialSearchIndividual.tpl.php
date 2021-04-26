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
      <div class="burial">
        <div class = "view">
        Burial ID: <?php echo (isset($burialDataArray['burials-id']) ? $burialDataArray['burials-id'] : ''); ?><br>
        <?php if($burialDataArray['burials-img-deceased'] != "") { ?>
          <img src = "images/<?php echo (isset($burialDataArray['burials-img-deceased']) ? $burialDataArray['burials-img-deceased'] : ''); ?>" alt = "<?php echo $burialDataArray['burials-first-name']; $burialDataArray['burials-last-name'];?> " />
        <?php } ?>

        <?php if($burialDataArray['burials-img-grave1'] != "" ) { ?>
          <img src = "images/<?php echo (isset($burialDataArray['burials-img-grave1']) ? $burialDataArray['burials-img-grave1'] : ''); ?>" alt = "Grave row: <?php echo $burialDataArray['burials-plot-row'];?> number: <?php echo $burialDataArray['burials-plot-number'];?> " />
        <?php } ?>

        <?php if($burialDataArray['burials-img-grave2'] != "") { ?>
          <img src = "images/<?php echo (isset($burialDataArray['burials-img-grave2']) ? $burialDataArray['burials-img-grave2'] : ''); ?>" alt = "Grave row: <?php echo $burialDataArray['burials-plot-row'];?> number: <?php echo $burialDataArray['burials-plot-number'];?> " />
        <?php }?>
        <h2 class="fullName"><?php echo (isset($burialDataArray['burials-first-name']) ? $burialDataArray['burials-first-name'] : ''); ?>
            <?php echo (isset($burialDataArray['burials-middle-name']) ? $burialDataArray['burials-middle-name'] : ''); ?>
            <?php echo (isset($burialDataArray['burials-last-name']) ? $burialDataArray['burials-last-name'] : ''); ?></h2>

          <?php if(!is_null($burialDataArray['burials-dob']) && !is_null($burialDataArray['burials-date-of-death'])) { ?>
            <p class = "datesLived"><?php echo $birthDateNew ; ?> - <?php echo $deathDateNew; ?></p>
          <?php } else if(!is_null($burialDataArray['burials-birth-year']) && !is_null($burialDataArray['burials-death-year'])){ ?>
            <p class = "yearsLived"><?php echo (isset($burialDataArray['burials-birth-year']) ? $burialDataArray['burials-birth-year'] : ''); ?> -
            <?php echo (isset($burialDataArray['burials-death-year']) ? $burialDataArray['burials-death-year'] : ''); ?></p>
          <?php } ?>

          <?php if(!is_null($burialDataArray['burials-interment-date'])) { ?>
            <p class = "burialDate">Buried: <?php echo $intermentDateNew; ?></p>
          <?php } else if(!is_null($burialDataArray['burials-interment-year'])){ ?>
            <p class = "burialYear">Buried: <?php echo (isset($burialDataArray['burials-interment-year']) ? $burialDataArray['burials-interment-year'] : ''); ?></p>
          <?php } ?>

            <p class="plotRow">Plot Row: <?php echo (isset($burialDataArray['burials-plot-row']) ? $burialDataArray['burials-plot-row'] : ''); ?></p>
            <p class="plotRow">Plot Number: <?php echo (isset($burialDataArray['burials-plot-number']) ? $burialDataArray['burials-plot-number'] : ''); ?></p>
            <p class="obituary"><?php echo (isset($burialDataArray['burials-obituary']) ? $burialDataArray['burials-obituary'] : ''); ?></p>

            <?php if($burialDataArray['burials-veteran'] == "y") { ?>
              <h4>Veteran Information</h4>
              <p class = "branch">Branch: <?php echo (isset($burialDataArray['burials-veteran-branch']) ? $burialDataArray['burials-veteran-branch'] : '');?></p>
              <p class = "rank">Rank: <?php echo (isset($burialDataArray['burials-veteran-rank']) ? $burialDataArray['burials-veteran-rank'] : '');?></p>
              <p class = "service">Years of Service: <?php echo (isset($burialDataArray['burials-veteran-service-time']) ? $burialDataArray['burials-veteran-service-time'] : '');?></p>

          <?php  } ?>
            <?php if(!is_null($burialDataArray['burials-spouse-first-name']) || !is_null($burialDataArray['burials-father-first-name']) && !is_null($burialDataArray['burials-mother-first-name'])) { ?>
            <h4>Family Information</h4>
          <?php } ?>
            <?php if(!is_null($burialDataArray['burials-spouse-first-name']) && !is_null($burialDataArray['burials-spouse-last-name'])) { ?>
              <p class = "spouse">Spouse: <?php echo (isset($burialDataArray['burials-spouse-first-name']) ? $burialDataArray['burials-spouse-first-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-spouse-middle-name']) ? $burialDataArray['burials-spouse-middle-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-spouse-last-name']) ? $burialDataArray['burials-spouse-last-name'] : ''); ?></p>
            <?php } ?>

            <?php if(!is_null($burialDataArray['burials-mother-first-name']) && !is_null($burialDataArray['burials-mother-last-name'])) { ?>
              <p class = "mother">Mother: <?php echo (isset($burialDataArray['burials-mother-first-name']) ? $burialDataArray['burials-mother-first-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-mother-middle-name']) ? $burialDataArray['burials-mother-middle-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-mother-last-name']) ? $burialDataArray['burials-mother-last-name'] : ''); ?></p>
            <?php } ?>

            <?php if(!is_null($burialDataArray['burials-father-first-name']) && !is_null($burialDataArray['burials-father-last-name'])) { ?>
              <p class = "father">Father: <?php echo (isset($burialDataArray['burials-father-first-name']) ? $burialDataArray['burials-father-first-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-father-middle-name']) ? $burialDataArray['burials-father-middle-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-father-last-name']) ? $burialDataArray['burials-father-last-name'] : ''); ?></p>
            <?php } ?>

            <?php if(!is_null($burialDataArray['burials-childrens-names'])) { ?>
              <p class = "children">Children: <?php echo (isset($burialDataArray['burials-childrens-names']) ? $burialDataArray['burials-childrens-names'] : '');?>
            <?php } ?>

            <?php if(!is_null($burialDataArray['burials-family-notes'])) { ?>
              <p class = "familyNotes">Family Notes: <?php echo (isset($burialDataArray['burials-family-notes']) ? $burialDataArray['burials-family-notes'] : ''); ?></p>
            <?php } ?>

            <button onclick="history.go(-1);">Back </button>

      </div>
    </main>
  </body>
</html>
