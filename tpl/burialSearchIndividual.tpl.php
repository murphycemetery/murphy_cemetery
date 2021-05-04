<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Burial Search Murphy Cemetery</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="css/murphyCemeteryStyle.css">
    <style>

      body {
        background-color: lightgray;
      }
      .burial {
        border: thin solid black;
        padding: 1%;
        background-color: #f0f0f0;
      }

      .burial button {
        background-color: #748B75;
        color: white;
      }

      .burial img {
        width: 40%;
      }
    </style>
    <script>
    $(document).ready(function(){
    	$(window).scroll(function () {
    			if ($(this).scrollTop() > 50) {
    				$('#back-to-top').fadeIn();
    			} else {
    				$('#back-to-top').fadeOut();
    			}
    		});
    		// scroll body to 0px on click
    		$('#back-to-top').click(function () {
    			$('body,html').animate({
    				scrollTop: 0
    			}, 400);
    			return false;
    		});
    		 let currentYear = (new Date).getFullYear();
       		  $("#thisYear").html(currentYear);
    });
    </script>

    <style>
      h1, h2 {
        text-decoration: underline;
      }

      img {
        width: 20%;
      }

      @media screen and (max-width: 576px) {
        img {
          width: 50%;
        }
      }

    </style>

  </head>
  <header>
     <nav class="navbar navbar-expand-lg" style="background-color: #748B75;">

 	<?php if($_SESSION['loggedIn'] == "yes") { ?>
            		<a class="navbar-brand mr-auto" href="adminIndex.php">Admin Home</a>
            <?php } else { ?>
 	            <a class="navbar-brand mr-auto" href="index.php">Murphy Cemetery</a>
           <?php } ?>
 		</a>
 		<button class="navbar-toggler custom-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 			<span class="navbar-toggler-icon"></span>
 		</button>
 		<div class="collapse navbar-collapse" id="navbarNav" style="justify-content: flex-end;">
 			<ul class="navbar-nav" >
 				<li class="nav-item">
 					<a class="nav-link" href="index.php">Home</a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="about.php">About/History</a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="burialSearch.php">Burial Search</a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="contact.php">Contact</a>
 				</li>
 				<li class="nav-item">
 				<?php if($_SESSION['loggedIn'] == "yes") { ?>
             				<a class="nav-link" href="logout.php">Logout</a>
             				 <?php } else { ?>
 					<a class="nav-link" href="adminLogin.php">Login</a>
 					 <?php } ?>
 				</li>
 			</ul>
 		</div>
 	</nav>
</header>
  <body>

    <main>
      <div class="burial">
        <div class = "view">
        <?php if($_SESSION['loggedIn'] == "yes") { ?>
        Burial ID: <?php echo (isset($burialDataArray['burials-id']) ? $burialDataArray['burials-id'] : ''); ?><br>
      <?php } ?>
        <?php if($burialDataArray['burials-img-deceased']) { ?>
          <img src = "deceased_img/deceased_img_<?php echo $burialDataArray['burials-id'];?>.png" alt = "<?php echo $burialDataArray['burials-first-name']; $burialDataArray['burials-last-name'];?> " /><br>
        <?php } ?>
        <h1 class="fullName"><?php echo (isset($burialDataArray['burials-first-name']) ? $burialDataArray['burials-first-name'] : ''); ?>
            <?php echo (isset($burialDataArray['burials-middle-name']) ? $burialDataArray['burials-middle-name'] : ''); ?>
            <?php echo (isset($burialDataArray['burials-last-name']) ? $burialDataArray['burials-last-name'] : ''); ?></h1>

          <?php if(!is_null($burialDataArray['burials-dob']) || !is_null($burialDataArray['burials-date-of-death'])) { ?>
            <p class = "datesLived"><?php echo $birthDateNew ; ?> - <?php echo $deathDateNew; ?></p>
          <?php } else if(!is_null($burialDataArray['burials-birth-year']) || !is_null($burialDataArray['burials-death-year'])){ ?>
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

            <?php if($burialDataArray['burials-img-grave1']) { ?>
              <img src = "grave_1_img/grave_1_img_<?php echo $burialDataArray['burials-id'];?>.png" alt = "Grave row: <?php echo $burialDataArray['burials-plot-row'];?> number: <?php echo $burialDataArray['burials-plot-number'];?> " />
            <?php } ?>

            <?php if($burialDataArray['burials-img-grave2']) { ?>
              <img src = "grave_2_img/grave_2_img_<?php echo $burialDataArray['burials-id'];?>.png" alt = "Grave row: <?php echo $burialDataArray['burials-plot-row'];?> number: <?php echo $burialDataArray['burials-plot-number'];?>" /><br>
            <?php }?>
            <br>
            <?php if($burialDataArray['burials-veteran'] == "y") { ?>
              <h2>Veteran Information</h2>
              <?php if($burialDataArray['burials-veteran-branch']) { ?>
                <p class = "branch">Branch: <?php echo (isset($burialDataArray['burials-veteran-branch']) ? $burialDataArray['burials-veteran-branch'] : '');?></p>
              <?php } ?>
              <?php if($burialDataArray['burials-veteran-rank']) { ?>
                <p class = "rank">Rank: <?php echo (isset($burialDataArray['burials-veteran-rank']) ? $burialDataArray['burials-veteran-rank'] : '');?></p>
              <?php } ?>
              <?php if($burialDataArray['burials-veteran-service-time']) { ?>
                <p class = "service">Years of Service: <?php echo (isset($burialDataArray['burials-veteran-service-time']) ? $burialDataArray['burials-veteran-service-time'] : '');?></p><br>
              <?php } ?>
          <?php  } ?>
            <?php if($burialDataArray['burials-spouse-first-name'] || $burialDataArray['burials-father-first-name'] && $burialDataArray['burials-mother-first-name']) { ?>
            <h2>Family Information</h2>
          <?php } ?>
            <?php if($burialDataArray['burials-spouse-first-name'] && $burialDataArray['burials-spouse-last-name']) { ?>
              <p class = "spouse">Spouse: <?php echo (isset($burialDataArray['burials-spouse-first-name']) ? $burialDataArray['burials-spouse-first-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-spouse-middle-name']) ? $burialDataArray['burials-spouse-middle-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-spouse-last-name']) ? $burialDataArray['burials-spouse-last-name'] : ''); ?></p>
            <?php } ?>

            <?php if($burialDataArray['burials-mother-first-name'] && $burialDataArray['burials-mother-last-name']) { ?>
              <p class = "mother">Mother: <?php echo (isset($burialDataArray['burials-mother-first-name']) ? $burialDataArray['burials-mother-first-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-mother-middle-name']) ? $burialDataArray['burials-mother-middle-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-mother-last-name']) ? $burialDataArray['burials-mother-last-name'] : ''); ?></p>
            <?php } ?>

            <?php if($burialDataArray['burials-father-first-name'] && $burialDataArray['burials-father-last-name']) { ?>
              <p class = "father">Father: <?php echo (isset($burialDataArray['burials-father-first-name']) ? $burialDataArray['burials-father-first-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-father-middle-name']) ? $burialDataArray['burials-father-middle-name'] : '');?>
                                <?php echo (isset($burialDataArray['burials-father-last-name']) ? $burialDataArray['burials-father-last-name'] : ''); ?></p>
            <?php } ?>

            <?php if($burialDataArray['burials-childrens-names']) { ?>
              <p class = "children">Children: <?php echo (isset($burialDataArray['burials-childrens-names']) ? $burialDataArray['burials-childrens-names'] : '');?></p>
            <?php } ?>

            <?php if(!is_null($burialDataArray['burials-family-notes']) && $burialDataArray['burials-family-notes'] != "") { ?>
              <p class = "familyNotes">Family Notes: <?php echo (isset($burialDataArray['burials-family-notes']) ? $burialDataArray['burials-family-notes'] : ''); ?></p>
            <?php } ?>

            <?php if($_SESSION['loggedIn'] == "yes") { ?>
              <a href="adminEditBurial.php?burials-id=<?php echo $burialDataArray['burials-id']; ?>"><button>Edit</button></a>
              <a href="../public/deleteConfirmation.php?burials-id=<?php echo $burialDataArray['burials-id']; ?>"><button>Delete</button></a>
            <?php } ?>
            <button onclick="window.print()">Print </button>
            <button onclick="history.go(-1);">Back </button>

      </div>
    </main>
  </body>
  <footer>


  	<div class="row" id="footContainer">

  		<div id="footCopy" class="col-lg-3">
  			<h5 style="padding-top: 15px;"><strong>Murphy Cemetery &copy; Copyright <span id="thisYear"></span></strong></h5>
  		</div>

  		<div id="navFoot" class="col-lg-7">

  			<p>

  			<div id="divFootNav">
  				<nav class="navbar navbar-expand-md">
  			<ul class="navbar-nav" >
  				<li class="nav-item">
  					<a class="nav-link2" href="index.php">Home</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link2" href="about.php">About/History</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link2" href="burialSearch.php">Burial Search</a>
  				</li>
  				<li class="nav-item">
  					<a class="nav-link2" href="contact.php">Contact</a>
  				</li>
  				<li class="nav-item">
  					<?php if($_SESSION['loggedIn'] == "yes") { ?>
              				<a class="nav-link2" href="logout.php">Logout</a>
              				 <?php } else { ?>
  					<a class="nav-link2" href="adminLogin.php">Login</a>
  					 <?php } ?>
  				</li>
  			</ul>
  	</nav>
  				</div>
  			</p>
  		</div>

  		<div class="col-lg-2">
  			<a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i style="color: white;" class="fas fa-chevron-up"></i></a>
  		</div>

  	</div>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </footer>
</html>
