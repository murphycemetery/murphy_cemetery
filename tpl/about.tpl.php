<!DOCTYPE html>
<html>
<head>
	<title>About Murphy Cemetery</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Murphy Cemetery About">
<meta name="keywords" content="Murphy Cemetery, about, history, cemetery">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

  <link rel="stylesheet" type="text/css" href="css/murphyCemeteryStyle.css">

<style>
#heading2  {
 color: #272635;
 padding-top: 1.5em;
}

#more {
display: none;
}

.column {
display: flex;
flex-direction: row;
}

#myBtn {
border: 2px solid #272635;
color: white;
background-color: #2699FB;
margin-bottom: 15px;
}

hr {
  border-top: 1px solid black;
  width: 70%;
}

.pic {
width: 300px;
}

@media  screen and (max-width: 1000px){

.column {
display: flex;
flex-direction: column;
margin-left: auto;
margin-right: auto;
}

}

@media  screen and (max-width: 576px){

#heading2  {
 padding-top: 2.5em;
}

.pic {
 margin-left: auto;
 margin-right: auto;
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

function readMore() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (moreText.style.display === "inline") {
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

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
					<a class="nav-link" href="adminLogin.php">Login</a>
					 <?php } ?>
				</li>
			</ul>
		</div>
	</nav>
    </header>
<body>
<div class="col-sm-12">
<h1 id="heading2">ABOUT US</h1></div>

<div class="container">
<div class="container-fluid" style="max-width: 1800px;">
<div class="row">
<hr>

<div class="column">
<div class="col-sm-4 text-center">
<img class="pic" style="padding-bottom: 10px; position: relative;" src="images/murphyCemetery-10.jpg" alt="Murphy Cemetery grave" height="300px">
</div>

<div class="col-sm-8">
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est ante in nibh mauris cursus. Tortor id aliquet lectus proin nibh nisl condimentum. Ut tortor pretium viverra suspendisse. Pulvinar etiam non quam lacus suspendisse faucibus. Sit amet cursus sit amet. Lorem ipsum dolor sit amet consectetur adipiscing elit. Viverra tellus in hac habitasse platea dictumst vestibulum. Molestie nunc non blandit massa. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Vestibulum mattis ullamcorper velit sed ullamcorper morbi. Et netus et malesuada fames ac turpis. Quam quisque id diam vel quam elementum pulvinar. Maecenas ultricies mi eget mauris pharetra et ultrices. Blandit libero volutpat sed cras. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis.
</p>
</div>
</div>
<hr>

<div class="col-sm-12">
<h1>Our History</h1><hr><hr style="width:40%", size="3">
</div>

<div class="column">
<div class="col-sm-8">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est ante in nibh mauris cursus. Tortor id aliquet lectus proin nibh nisl condimentum. Ut tortor pretium viverra suspendisse. Pulvinar etiam non quam lacus suspendisse faucibus. Sit amet cursus sit amet. Lorem ipsum dolor sit amet consectetur adipiscing elit. Viverra tellus in hac habitasse platea dictumst vestibulum. Molestie nunc non blandit massa. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur.</p><span id="more">

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est ante in nibh mauris cursus. Tortor id aliquet lectus proin nibh nisl condimentum. Ut tortor pretium viverra suspendisse. Pulvinar etiam non quam lacus suspendisse faucibus. Sit amet cursus sit amet. Lorem ipsum dolor sit amet consectetur adipiscing elit. Viverra tellus in hac habitasse platea dictumst vestibulum. Molestie nunc non blandit massa. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est ante in nibh mauris cursus. Tortor id aliquet lectus proin nibh nisl condimentum. Ut tortor pretium viverra suspendisse. Pulvinar etiam non quam lacus suspendisse faucibus. Sit amet cursus sit amet. Lorem ipsum dolor sit amet consectetur adipiscing elit. Viverra tellus in hac habitasse platea dictumst vestibulum. Molestie nunc non blandit massa. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur.</p></span>
<button onclick="readMore()" id="myBtn">Read more</button>
</div>

<div class="col-sm-4 text-center">
<img class="pic" style="padding-bottom: 10px;" src="images/murphyCemetery-14.jpg" alt="Murphy Cemetery entry" height="300px">
</div>
</div>

</div>
</div>
</div>

</body>
<footer>


	<div class="row" id="footContainer">

		<div class="col-lg-3">
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
				<li class="nav-item active">
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
			<a id="back-to-top" href="#" class="btn btn-dark btn-lg back-to-top" role="button"><i style="color: white;" class="fas fa-chevron-up"></i></a>
		</div>

	</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</footer>
</html>
