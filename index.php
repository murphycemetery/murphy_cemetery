<!DOCTYPE html>
<html>
<head>
	<title>Murphy Cemetery</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="murphy cemetery site">
<meta name="keywords" content="history, cemetery">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  
    <link rel="stylesheet" type="text/css" href="murphyCemeteryStyle.css">

<style>
h2 a {
font-weight: bold;
color: white;
text-shadow: 1.4px 1.4px black;
text-align: center;
}

h2 a:hover {
text-decoration: none;
color: #223843;
}

hr {
  border-top: 1px solid black;
  width: 70%;
}

.caption {
    position: absolute;
    top: 45%;
    left: 0;
    width: 100%;
}

main {
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    background-image: linear-gradient(grey, rgba(20,20,20, .5));
    overflow: hidden;
}

#heading {
 padding-top: 3.5em;
 color: white; 
 text-shadow: 1px 1px black;
}

.img {
   object-fit: cover;
   opacity: 0.3;
}

.button {
background-color: #748B75;
background-image: linear-gradient(#748B75, #223843);
border: none;
padding: 5px 15px;
}

.button a {
color: white;
}

.button a:hover {
color: #272635;
text-shadow: 1px 1px black;
}

@media  screen and (max-width: 576px){

#heading  {
 padding-top: 2.5em;
}

main {
    width: 100%;
}

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
	<a class="navbar-brand mr-auto" href="index.html">
	<?php if($_SESSION['loggedIn'] == "yes") { ?>
           		Admin Home	
           <?php } else { ?>
	            Murphy Cemetery
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
				<li class="nav-item active">
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
					<a class="nav-link" href="login.php">Login</a>
					 <?php } ?>
				</li>
			</ul>
		</div>
	</nav>
    </header>
<body>
<div class="col-sm-12" style="background: linear-gradient(rgba(265,265,265, .5), rgba(20,20,20, .5)), url(images/murphyCemetery.jpg);height:60vh;min-height:20px; background-size:cover;background-repeat: no-repeat;">
<h1 id="heading">WELCOME TO MURPHY CEMETERY!</h1>
</div>

<div class="container">
<div class="container-fluid" style="max-width: 1700px;">
<div class="row">
<hr>
<div class="col-lg-4 text-center" style="position: relative; padding-top: 15px;">
 <figure><main>
    <img class="img" src="images/murphyCemetery-12.jpg" alt="placeholder image"  width="100%" height="323px">
    </main> 
       <div class="caption">
            <h2><a href="about.html">ABOUT/HISTORY</a></h2>
       </div>
 </figure>
</div>

 <div class="col-lg-4 text-center" style="padding-bottom: 10px; position: relative; padding-top: 15px;">
    <figure><main>
          <img class="img" src="images/murphyCemetery-4.jpg" alt="placeholder image" width="100%" height="323px">
          </main>
             <div class="caption">
                <h2><a href="search.php">LOCATE A LOVED<br>ONE</a></h2>
            </div>
    </figure>
</div>

 <div class="col-lg-4 text-center" style="padding-bottom: 10px; position: relative; padding-top: 15px;">
     <figure><main>
            <img class="img" src="images/murphyCemetery-9.jpg" alt="placeholder image" width="100%" height="323px">
            </main>
               <div class="caption">
                  <h2><a href="contact.php">CONTACT</a></h2>
               </div>
     </figure>
</div>

<div class="col-sm-12"><hr>
<p style="max-width: 1000px; margin: auto;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
</div><hr>

<div class="col-sm-12 text-center" style="padding-top: 20px; padding-bottom: 20px;">
<h3>Visit Our Location!</h3><hr><hr style="width:40%", size="3">
<button class="button"><a href="contact.php">Plot Location</a></button>
</div>

</div>
</div>
</div>
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
				<li class="nav-item active">
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
					<a class="nav-link2" href="login.php">Login</a>
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
