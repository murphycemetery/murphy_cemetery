<?php
        //BRING IN VARIABLES AND FUNCTIONS TO BE USED IN SCRIPT
        require_once("form-handler.php");


        //CHECK IF FORM HAS BEEN SUBMITTED

        if(filter_has_var(INPUT_POST, 'submit')) {

            if ($_POST['age'] !== "1") {
                die("Form could not be submitted");
            }

            //Required fields
            $firstName = htmlspecialchars($_POST['firstName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            //Not required fields

            if (isset($_POST['moveTimeFrame'])) {
                $moveTimeFrame = $_POST['moveTimeFrame'];
            } else {
                $moveTimeFrame = "";
            }

            if (isset($_POST['floorPlans'])) {
                $floorPlans = htmlspecialchars($_POST['floorPlans']);
            } else {
                $floorPlans = "";
            }

            if (isset($_POST['howYouHeard'])) {
                $howYouHeard = implode(", ", $_POST['howYouHeard']);
            } else {
                $howYouHeard = "";
            }

            if (isset($_POST['tour-style'])) {
                $tourStyle = $_POST['tour-style'];
            } else {
                $tourStyle = "";
            }

            if (isset($_POST['preferredDate'])) {
                $preferredDate = htmlspecialchars($_POST['preferredDate']);
            } else {
                $preferredDate = "";
            }
            
            if (isset($_POST['preferredTime'])) {
                $preferredTime = htmlspecialchars($_POST['preferredTime']);
            } else {
                $preferredTime = "";
            }

            validateFirstName($firstName);
            validateLastName($lastName);
            validateEmail($email);
            validatePhone($phone);
            validateMessage($message);

            if($validForm) {

                        $toEmail = 'admin@raymondagbor.name';
                        $subject = 'Contact form submission from '. $firstName . " " . $lastName;
                        $emailBody = '<h2>Contact Form Submission</h2>
                                      <h3>Name</h3><p>'. $firstName . ' ' . $lastName.'</p>
                                      <h3>Email Address</h3><p>' .$email. '</p>
                                      <h3>Phone Number</h3><p>' . $phone . '</p>
                                      <h3>Message</h3><p>'.$message.'</p>';
                                      
                                      
                                      
                                      
                                      
                                      
                            

                        $emailHeaders = "MIME-Version: 1.0" . "\r\n";
                        $emailHeaders .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

                        $emailHeaders .= "From: " .$firstName . '' . $lastName . "<" .$email. ">". "\r\n";

                        if (mail($toEmail, $subject, $emailBody, $emailHeaders)) {
                            $msg = "Your email has been sent, we will get back to you as soon as possible. Thanks!";
                        } else {
                            $msg = "Your email was not sent, please try again later";
                        }                       
                    }
            }   else {
                
                $msg = "";
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  
    <link rel="stylesheet" type="text/css" href="murphyCemeteryStyle.css">
<style>

.contact-wrap, form {
margin-left: auto;
margin-right: auto;
text-align: center;
width: 70%;
font-size: 1.0em;
margin-top: 30px;
margin-bottom: 30px;
background-color: #748B75;
border-radius: 30px;
box-shadow: 2px 2px 5px grey;
padding-top: 10px;
padding-bottom: 5px;
}

.flex-outer ul li {
list-style-type: none;
}

.col1 {
display: inline-block;
width: 36%;
margin: 20px;
}

.col2 {
display: inline-block;
width: 36%;
margin: 20px;
}

#contact-form ul li {
margin-right: 50px;
list-style-type: none;
padding: none;
color: black;
}

iframe {
width: 96%;
}

.contact-icons {
margin-left: auto;
margin-right: auto;
text-align: center;
padding-bottom: 30px;
font-size: 1.3em;
}

@media  screen and (max-width: 1024px){
.col1 {
display: block;
width: 90%;
}

.col2 {
display: block;
width: 90%;
}

}

@media  screen and (max-width: 576px){

.contact-wrap, form {
width: 100%;
}

.col1 {
width: 80%;
}

.col2 {
width: 80%;
}

}

@media  screen and (max-width: 330px){
.contact-wrap form input {
width: 90%;
}

.col1 {
width: 95%;
margin: 0px;
}

.col2 {
width: 95%;
margin: 0px;
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

    <div class="contact-wrap">

    <h1 class="contact-head">Come find us for more information!</h1>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2962.377729695871!2d-93.3694887848222!3d42.05652226220913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ee43105a14cfbb%3A0x98f0bf25c99a4095!2sMurphy%20Cemetery!5e0!3m2!1sen!2sus!4v1618676874486!5m2!1sen!2sus" width="800" height="350" style="border:2px solid red;" allowfullscreen="" loading="lazy"></iframe>

        <h1 class="contact-head">Contact Us</h1>

        <span class="confirmation-message"><?php echo $msg ?></span>

        <form id="contact-form" name="contact-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

            <ul class="flex-outer">

            <li class="col1">
                <label for="firstName">First Name <span class="form-required">*</span></label>
                <input type="text" id="firstName" name="firstName" value="<?php echo $firstName ?>"><span class="<?php echo $msgClass ?>"><?php echo $firstNameError ?></span>
            </li>

            <li class="col1">
                <label for="lastName">Last Name <span class="form-required">*</span></label>
                <input type="text" id="lastName" name="lastName" value="<?php echo $lastName ?>"><span class="<?php echo $msgClass ?>"><?php echo $lastNameError ?></span>
            </li>

            <li id="#honeypot" style="display: none;">
                <label for="age" style="display: none;">Age</label>
                <input type="text" id="age" name="age" value="1" style="display: none;">
            </li>

            <li class="col2">
                <label for="email">Email Address <span class="form-required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo $email ?>"><span class="<?php echo $msgClass ?>"><?php echo $emailError ?></span>
            </li>

            <li class="col2">
                <label for="phone">Phone Number <span class="form-required">*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="712-221-5827" value="<?php echo $phone ?>"><span class="<?php echo $msgClass ?>"><?php echo $phoneError ?></span>
            </li>


            <li>

                <p class="label-p">How did you hear about us?</p>

                <ul class="flex-inner">

                    <li>
                        <input type="checkbox" id="mail" name="howYouHeard[]" value="Mail">
                        <label for="mail">Mail</label>
                    </li>

                    <li>
                        <input type="checkbox" id="socialMedia" name="howYouHeard[]" value="SocialMedia">
                        <label for="socialMedia">Social Media</label>
                    </li>

                    <li>
                        <input type="checkbox" id="drive-by" name="howYouHeard[]" value="DriveBy">

                        <label for="drive-by">Drive By</label>
                    </li>

                    <li>
                        <input type="checkbox" id="other" name="howYouHeard[]" value="Other">
                        <label for="other">Other</label>
                    </li>

                </ul>
            
            </li>

        </ul> <!--END FLEX OUTER CLASS-->

                    
                <label for="message" style="display: block; color: black;">Comments or Questions: <span class="form-required">*</span></label>
                <textarea id="message" name="message"><?php echo $message ?></textarea><span class="<?php echo $msgClass ?>"><?php echo $messageError ?></span>

            <div class="button-wrap">
                <input class="submit" name="submit" type="submit" value="Submit">
            </div>

        </form>

    </div>

</div>

    <div class="contact-icons">
        <a href="tel:+1-712-221-5827"><i class="fas fa-phone"></i></a>
        <a href="mailto: murphy@cemetary.com"><i class="fas fa-envelope"></i></a>
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
				<li class="nav-item">
					<a class="nav-link2" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link2" href="about.php">About/History</a>
				</li>
				<li class="nav-item">
					<a class="nav-link2" href="burialSearch.php">Burial Search</a>
				</li>
				<li class="nav-item active">
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
