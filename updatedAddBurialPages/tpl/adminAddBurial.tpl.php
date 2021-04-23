<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../adminAddBurial.css">
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

</head>
<body>
    <div id="displayArea">
        <h1>Add Burial Information</h1>

        <div class="formStyle">
            <form method="post" name="submitBurial" action="adminAddBurial.php" enctype="multipart/form-data">

                <h2>Burial Information</h2>

                <!-- BURIAL INFORMATION -->
                
                <div class="inputCols3">
                    <div class="labelDesc">
                        <br><label>First Name</label><br>
                    </div>
                    <input type="text" name="fName" value="<?php echo $fName ?>" placeholder="<?php echo $firstNameERR ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div>
                    <input type="text" name="mName" value="<?php echo $mName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div> 
                    <input type="text" name="lName" value="<?php echo $lName ?>"/>
                </div>  
                
                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Date of Birth <span style="font-size:15px; color:gray">(mm-dd-yyyy)</span></label><br>
                    </div>
                    <input type="text" name="birthDate" value="<?php if(!$birthDate == "") echo $birthDate ?>" placeholder="<?php echo $birthDateERR ?>"/>
                </div>
                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Birth Year <span style="font-size:15px; color:gray">(yyyy)</span></label><br>
                    </div>
                    <input type="text" name="birthYear" value="<?php if(!$birthYear == "") echo $birthYear ?>" placeholder="<?php echo $birthYearERR ?>"/>
                </div> 

                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Date of Death <span style="font-size:15px; color:gray">(mm-dd-yyyy)</span></label><br>
                    </div>
                    <input type="text" name="deathDate" value="<?php echo $deathDate ?>" placeholder="<?php echo $deathDateERR ?>"/>
                </div>
                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Death Year <span style="font-size:15px; color:gray">(yyyy)</span></label><br>
                    </div>
                    <input type="text" name="deathYear" value="<?php if(!$deathYear == "") echo $deathYear ?>" placeholder="<?php echo $deathYearERR ?>"/>
                </div>

                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Date of Burial <span style="font-size:15px; color:gray">(mm-dd-yyyy)</span></label><br>
                    </div>
                    <input type="text" name="intermentDate" value="<?php echo $intermentDate ?>" placeholder="<?php echo $intermentDateERR ?>"/>
                </div>
                <div class="inputCols2">
                    <div class="labelDesc">
                        <label>Burial Year <span style="font-size:15px; color:gray">(yyyy)</span></label><br>
                    </div>
                    <input type="text" name="intermentYear" value="<?php if(!$intermentYear == "") echo $intermentYear ?>" placeholder="<?php echo $intermentYearERR ?>"/>
                </div>
                
                <hr>

                <h2>Family Information</h2>

                <!-- FAMILY INFORMATION -->

                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Spouse First Name</label><br>
                    </div> 
                    <input type="text" name="spouseFName" value="<?php echo $spouseFName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div> 
                    <input type="text" name="spouseMName" value="<?php echo $spouseMName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div> 
                    <input type="text" name="spouseLName" value="<?php echo $spouseLName ?>"/>
                </div>

                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Mother First Name</label><br>
                    </div> 
                    <input type="text" name="motherFName" value="<?php echo $motherFName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div> 
                    <input type="text" name="motherMName" value="<?php echo $motherMName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div> 
                    <input type="text" name="motherLName" value="<?php echo $motherLName ?>"/>
                </div>

                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Father First Name</label><br>
                    </div> 
                    <input type="text" name="fatherFName" value="<?php echo $fatherFName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Middle Name</label><br>
                    </div> 
                    <input type="text" name="fatherMName" value="<?php echo $fatherMName ?>"/>
                </div>
                <div class="inputCols3">
                    <div class="labelDesc">
                        <label>Last Name</label><br>
                    </div> 
                    <input type="text" name="fatherLName" value="<?php echo $fatherLName ?>"/>
                </div>
                
                <div class="inputCols1">
                    <div class="labelDesc">
                        <label>Children</label><br>
                    </div> 
                    <input type="text" name="childrensNames" value="<?php echo $childrensNames ?>"/>
                </div>


                <hr>

                <!-- CHECKBOXES -->

                <div class="inputCols3">
                    <label>Veteran</label>
                    <input id="veteran" type="checkbox" name="veteran" value="veteran" <?php if ($veteran == "veteran") echo "checked"; ?>/>
                </div>
                <div class="inputCols3">
                    <label>Obituary</label>
                    <input id="obituaryCheckBox" type="checkbox" name="obituaryCheckBox" value="obituaryCheckBox" <?php if ($obituaryCheckBox == "obituaryCheckBox") echo "checked"; ?>/>
                </div>
                <div class="inputCols3">
                    <label>Family Notes</label>
                    <input id="familyNotesCheckBox" type="checkbox" name="familyNotesCheckBox" value="familyNotesCheckBox" <?php if ($familyNotesCheckBox == "familyNotesCheckBox") echo "checked"; ?>/>
                </div>

                <!-- VETERAN INFORMATION -->

                <div id="veteranInfo" style='<?php if($veteran == "veteran"){echo "display: inline-block;";} else {echo "display:none;";} ?>'>
                    <div class="inputCols3">
                        <div class="labelDesc">
                            <label>Branch of Service</label><br>
                        </div>
                        <input id="milBranch" type="text" name="milBranch" value="<?php echo $milBranch ?>"/>
                    </div>
                    <div class="inputCols3">
                        <div class="labelDesc">
                            <label>Military Rank</label><br>
                        </div>
                        <input id="milRank" type="text" name="milRank" value="<?php echo $milRank ?>"/>
                    </div>
                    <div class="inputCols3">
                        <div class="labelDesc">
                            <label>Dates of Service:</label><br>
                        </div>
                        <input id="dateOfService" type="text" name="serviceTime" value="<?php echo $serviceTime ?>"/>
                    </div> 
                </div>

                <!-- OBITUARY INFORMATION -->

                <div id="obituaryInfo" style='<?php if($obituaryCheckBox == "obituaryCheckBox"){echo "display: inline-block;";} else {echo "display:none;";} ?>'>
                    <div class="inputCols1">
                        <div class="labelDesc">
                            <label>Obituary:</label><br>
                        </div>
                        <textarea id="obituaryText" type="text" name="obituary" value="" cols="95" rows="6"><?php echo $obituary ?></textarea>
                    </div> 
                </div>

                <!-- FAMILY NOTES INFORMATION -->

                <div id="familyNotesInfo" style='<?php if($familyNotesCheckBox == "familyNotesCheckBox"){echo "display: inline-block;";} else {echo "display:none;";} ?>'>
                    <div class="inputCols1">
                        <div class="labelDesc">
                            <label>Family Notes:</label><br>
                        </div>
                        <textarea id="notesText" type="text" name="familyNotes" value="" cols="95" rows="6"><?php echo $familyNotes ?></textarea>
                    </div> 
                </div>
                
                <hr>

                <!-- PLOTS AND IMAGES -->

                <div class="inputCols2Plot">
                    <div class="labelDesc">
                        <label>Plot Row</label><br>
                    </div> 
                    <input type="text" name="plotRow" value="<?php echo $plotRow ?>" placeholder="<?php echo $plotRowERR ?>"/>
                </div>

                <div class="inputCols2Plot">
                    <div class="labelDesc">
                        <label>Plot Number</label><br>
                    </div> 
                    <input type="text" name="plotNum" value="<?php echo $plotNum ?>"  placeholder="<?php echo $plotNumERR ?>"/>
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

                <hr>
                
                <input class="buttonStyle" type="submit" name="submitForm" value="Submit" /> 
                <button class="buttonStyle">Reset</button> 
                
    
            </form>
        </div>
    </div>
</body>
</html>