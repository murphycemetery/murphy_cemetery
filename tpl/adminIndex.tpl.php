<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Murphy Cemetery - Burial Search</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="css/murphyCemeteryStyle.css">

    <style>
      .burial {
        border: thin solid black;
        text-align: left;
      }

      section {
        text-align: center;
        padding: 2%;
        margin-bottom: 10%;
      }

      .welcomeUser {
        color: white;
        background-color: #748B75;
        width: 100%;
        padding: 0.5%;
        margin-bottom: 5%;
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

  </head>
  <header>
     <nav class="navbar navbar-expand-lg" style="background-color: #748B75;">

 	<?php if($_SESSION['loggedIn'] == "yes") { ?>
            		<a class="navbar-brand mr-auto active" href="adminIndex.php">Admin Home</a>
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
    <section>

      <?php if($_SESSION['loggedIn'] == 'yes') { ?>
        <h2 class="welcomeUser">Welcome <?php echo $_SESSION['username'];?>!</h2>
      <?php } else {

      } ?>
      <h1>Administrator View</h1>
      <h2>Order By</h2>

              <p class="burialLabel">ID&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-id`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-id`&sortDirection=DESC">D</a> <br>
              First Name&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-first-name`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-first-name`&sortDirection=DESC">D</a> <br>
              Last Name&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-last-name`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-last-name`&sortDirection=DESC">D</a> <br>
              Birth Date&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-dob`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-dob`&sortDirection=DESC">D</a> <br>
              Death Date&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-date-of-death`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-date-of-death`&sortDirection=DESC">D</a> <br>
              Birth Year&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-birth-year`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-birth-year`&sortDirection=DESC">D</a> <br>
              Death Year&nbsp;-&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-death-year`&sortDirection=ASC">A</a>&nbsp;<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?sortColumn=`burials-death-year`&sortDirection=DESC">D</a> <br>
              &nbsp;
              &nbsp;
              &nbsp;</p>

          <?php foreach ($burialList as $burialsData)
          { ?>

                  <p class="burial"><?php echo "ID: " . $burialsData['burials-id']; ?> |
                  <?php echo "First Name: " . $burialsData['burials-first-name']; ?> |
                  <?php echo "Last Name: " . $burialsData['burials-last-name']; ?> |
                  <?php echo "Birth Date: " . $burialsData['burials-dob']; ?> |
                  <?php echo "Death Date: " . $burialsData['burials-date-of-death']; ?> |
                  <?php echo "Birth Year: " . $burialsData['burials-birth-year']; ?> |
                  <?php echo "Death Year: " . $burialsData['burials-death-year']; ?> |

                  <a href="../public/adminEditBurial.php?burials-id=<?php echo $burialsData['burials-id']; ?>">Edit</a> |
                  <a href="../public/burialSearchIndividual.php?burials-id=<?php echo $burialsData['burials-id']; ?>">View</a> |
                  <a href="../public/deleteConfirmation.php?burials-id=<?php echo $burialsData['burials-id']; ?>">Delete</a></p>

          <?php } ?>
  <br>


      <a href="adminAddBurial.php"><button class="add">Add Burial</button></a>
      <a href="burialSearch.php"><button class="add">Search Burials</button></a>
    </section>
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
