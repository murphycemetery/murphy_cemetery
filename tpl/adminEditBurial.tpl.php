<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <title>Edit Burial Murphy Cemetery</title>
    <link rel="stylesheet" type="text/css" href="css/murphyCemeteryStyle.css">
    <link rel="stylesheet" type="text/css" href="css/adminAddBurial.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function (event) {

            var veteranChecked = document.getElementById('veteran');
            var obituaryChecked = document.getElementById('obituaryCheckBox');
            var notesChecked = document.getElementById('familyNotesCheckBox');

            veteranChecked.addEventListener('change', function (event) {
                if (veteranChecked.checked) {
                    document.getElementById("veteranInfo").setAttribute("style", "display: inline-block");
                } else {
                    document.getElementById("milBranch").value = "";
                    document.getElementById("milRank").value = "";
                    document.getElementById("dateOfService").value = "";
                    document.getElementById("veteranInfo").setAttribute("style", "display: none");

                }
            });

            obituaryChecked.addEventListener('change', function (event) {
                if (obituaryChecked.checked) {
                    document.getElementById("obituaryInfo").setAttribute("style", "display: inline-block");
                } else {
                    document.getElementById("obituaryText").value = "";
                    document.getElementById("obituaryInfo").setAttribute("style", "display: none");

                }
            });

            notesChecked.addEventListener('change', function (event) {
                if (notesChecked.checked) {
                    document.getElementById("familyNotesInfo").setAttribute("style", "display: inline-block");
                } else {
                    document.getElementById("notesText").value = "";
                    document.getElementById("familyNotesInfo").setAttribute("style", "display: none");

                }
            });
        });



    </script>

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
       <li class="nav-item active">
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
    <div id="displayArea">
        <h1>Edit Burial Information</h1>

        <div class="formStyle">
            <form method="post" name="submitBurial" action=""<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . "?burials-id=$updateID"; ?>"" enctype="multipart/form-data">

                <h2>Burial Information</h2>

                <!-- BURIAL INFORMATION -->

                <div class="inputCols3">
                    <div class="labelDesc">
                        <br><label>First Name</label><br>
                    </div>
                    <input type="text" name="fName" value="<?php echo $burialsFirstName?>" placeholder="<?php echo (isset($burialErrorsArray['burials-first-name']) ? $burialErrorsArray['burials-first-name'] : ''); ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div>
                    <input type="text" name="mName" value="<?php echo $burialsMiddleName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div>
                    <input type="text" name="lName" value="<?php echo $burialsLastName ?>"/>
                </div>

                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Date of Birth <span style="font-size:15px; color:gray">(mm/dd/yyyy)</span></label><br>
                    </div>
                    <input type="date" name="birthDate" value="<?php echo $burialsDOB ?>" placeholder="<?php echo $birthDateERR ?>"/>
                </div>
                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Birth Year <span style="font-size:15px; color:gray">(yyyy)</span></label><br>
                    </div>
                    <input type="number" name="birthYear" value="<?php echo $burialsBirthYear ?>" placeholder="<?php echo $birthYearERR ?>"/>
                </div>

                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Date of Death <span style="font-size:15px; color:gray">(mm/dd/yyyy)</span></label><br>
                    </div>
                    <input type="date" name="deathDate" value="<?php echo $burialsDOD ?>" placeholder="<?php echo $deathDateERR ?>"/>
                </div>

                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Death Year <span style="font-size:15px; color:gray">(yyyy)</span></label><br>
                    </div>
                    <input type="number" name="deathYear" value="<?php echo $burialsDeathYear ?>" placeholder="<?php echo $deathYearERR ?>"/>
                </div>

                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Date of Burial <span style="font-size:15px; color:gray">(mm/dd/yyyy)</span></label><br>
                    </div>
                    <input type="date" name="intermentDate" value="<?php echo $burialsIntermentDate ?>" placeholder="<?php echo $intermentDateERR ?>"/>
                </div>
                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Burial Year <span style="font-size:15px; color:gray">(yyyy)</span></label><br>
                    </div>
                    <input type="number" name="intermentYear" value="<?php echo $burialsIntermentYear ?>" placeholder="<?php echo $intermentYearERR ?>"/>
                </div>

                <hr>

                <h2>Family Information</h2>

                <!-- FAMILY INFORMATION -->

                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Spouse First Name</label><br>
                    </div>
                    <input type="text" name="spouseFName" value="<?php echo $burialsSpouseFirstName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div>
                    <input type="text" name="spouseMName" value="<?php echo $burialsSpouseMiddleName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div>
                    <input type="text" name="spouseLName" value="<?php echo $burialsSpouseLastName ?>"/>
                </div>

                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Mother First Name</label><br>
                    </div>
                    <input type="text" name="motherFName" value="<?php echo $burialsMotherFirstName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div>
                    <input type="text" name="motherMName" value="<?php echo $burialsMotherMiddleName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div>
                    <input type="text" name="motherLName" value="<?php echo $burialsMotherLastName ?>"/>
                </div>

                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Father First Name</label><br>
                    </div>
                    <input type="text" name="fatherFName" value="<?php echo $burialsFatherFirstName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div>
                    <input type="text" name="fatherMName" value="<?php echo $burialsFatherMiddleName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div>
                    <input type="text" name="fatherLName" value="<?php echo $burialsFatherLastName ?>"/>
                </div>

                <div class="inputCols1">
                    <div class="labelDesc">
                        <label>Children</label><br>
                    </div>
                    <input type="text" name="childrensNames" value="<?php echo $burialsChildrensNames ?>"/>
                </div>


                <hr>

                <!-- CHECKBOXES -->

                <div class="inputCols3">
                    <label>Veteran</label>
                    <input id="veteran" type="checkbox" name="veteran" value="y" <?php if ($burialsVeteran == "y") echo "checked"; ?>/>
                </div>
                <div class="inputCols3">
                    <label>Obituary</label>
                    <input id="obituaryCheckBox" type="checkbox" name="obituaryCheckBox" value="obituaryCheckBox" <?php if ($burialsObituary) echo "checked"; ?>/>
                </div>
                <div class="inputCols3">
                    <label>Family Notes</label>
                    <input id="familyNotesCheckBox" type="checkbox" name="familyNotesCheckBox" value="familyNotesCheckBox" <?php if ($burialsFamilyNotes) echo "checked"; ?>/>
                </div>

                <!-- VETERAN INFORMATION -->

                <div id="veteranInfo" style='<?php if($burialsVeteran == "y"){echo "display: inline-block;";} else {echo "display:none;";} ?>'>
                    <div class="inputCols3">
                        <div class="labelDesc">
                            <label>Branch of Service</label><br>
                        </div>
                        <input id="milBranch" type="text" name="milBranch" value="<?php echo $burialsVeteranBranch ?>"/>
                    </div>
                    <div class="inputCols3">
                        <div class="labelDesc">
                            <label>Military Rank</label><br>
                        </div>
                        <input id="milRank" type="text" name="milRank" value="<?php echo $burialsVeteranRank ?>"/>
                    </div>
                    <div class="inputCols3">
                        <div class="labelDesc">
                            <label>Dates of Service:</label><br>
                        </div>
                        <input id="dateOfService" type="text" name="serviceTime" value="<?php echo $burialsVeteranServiceTime ?>"/>
                    </div>
                </div>

                <!-- OBITUARY INFORMATION -->

                <div id="obituaryInfo" style='<?php if($obituaryCheckBox == "obituaryCheckBox" || $burialsObituary != "" || $burialsObituary != null){echo "display: inline-block;";} else {echo "display:none;";} ?>'>
                    <div class="inputCols1">
                        <div class="labelDesc">
                            <label>Obituary:</label><br>
                        </div>
                        <textarea id="obituaryText" type="text" name="obituary" value="" cols="95" rows="6"><?php echo $burialsObituary ?></textarea>
                    </div>
                </div>

                <!-- FAMILY NOTES INFORMATION -->

                <div id="familyNotesInfo" style='<?php if($familyNotesCheckBox == "familyNotesCheckBox" || $burialsFamilyNotes != "" || $burialsFamilyNotes != null){echo "display: inline-block;";} else {echo "display:none;";} ?>'>
                    <div class="inputCols1">
                        <div class="labelDesc">
                            <label>Family Notes:</label><br>
                        </div>
                        <textarea id="notesText" type="text" name="familyNotes" value="" cols="95" rows="6"><?php echo $burialsFamilyNotes ?></textarea>
                    </div>
                </div>

                <hr>

                <!-- PLOTS AND IMAGES -->

                <div class="inputCols2Plot">
                    <div class="labelDesc">
                        <label>Plot Row</label><br>
                    </div>
                    <input type="text" name="plotRow" value="<?php echo $burialsPlotRow ?>" placeholder="<?php echo $plotRowERR ?>"/>
                </div>

                <div class="inputCols2Plot">
                    <div class="labelDesc">
                        <label>Plot Number</label><br>
                    </div>
                    <input type="text" name="plotNum" value="<?php echo $burialsPlotNumber ?>"  placeholder="<?php echo $plotNumERR ?>"/>
                </div>

                <div class="inputCols1">
                        <label>Deceased Image:</label>
                    <input style="padding-left: 10px;" type="file" name="imgDeceased"/>
                </div>

                <div class="inputCols1">
                        <label>Grave Image 1:</label>
                    <input style="padding-left: 25px;" type="file" name="imgGrave1"/>
                </div>

                <div class="inputCols1">
                        <label>Grave Image 2:</label>
                    <input style="padding-left: 25px;" type="file" name="imgGrave2"/>
                </div>

                <input type = "hidden" name="currentDeceasedImg" value = "<?php echo $burialsImageDeceased ?>">
                <input type = "hidden" name="currentGrave1Img" value = "<?php echo $burialsImageGrave1 ?>">
                <input type = "hidden" name="currentGrave2Img" value = "<?php echo $burialsImageGrave2?>">

                <hr>

                <input class="buttonStyle" type="submit" name="submitForm" value="Submit" />
                <button class="buttonStyle">Reset</button>


            </form>
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
