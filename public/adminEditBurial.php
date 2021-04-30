<?php
session_start();
if($_SESSION['loggedIn'] == "yes") {
    require "../PDO_connectionFile.php";

    //create variables
    $validForm = "";
    $fName = "";
    $mName = "";
    $lName = "";
    $birthDate = "";
    $birthYear= "";
    $deathDate = "";
    $deathYear = "";
    $plotRow = "";
    $plotNum = "";
    $intermentDate = "";
    $intermentYear = "";
    $veteran = "";
    $milBranch = "";
    $milRank = "";
    $serviceTime = "";
    $spouseFName = "";
    $spouseMName = "";
    $spouseLName = "";
    $childrensNames = "";
    $motherFName = "";
    $motherMName = "";
    $motherLName = "";
    $fatherFName = "";
    $fatherMName = "";
    $fatherLName = "";
    $imgDeceased = "";
    $imgGrave1 = "";
    $imgGrave2 = "";
    $obituary = "";
    $familyNotes = "";


    //create error variables
    $firstNameERR = "";
    $birthDateERR = "";
    $birthYearERR = "";
    $deathDateERR = "";
    $deathYearERR = "";
    $intermentDateERR = "";
    $intermentYearERR = "";
    $plotRowERR = "";
    $plotNumERR = "";

    //for check boxes
    $obituaryCheckBox = "";
    $familyNotesCheckBox = "";

    $updateID = $_GET['burials-id'];

    if(isset($_POST["submitForm"])){

        $fName = $_POST["fName"];
        $mName = $_POST["mName"];
        $lName = $_POST["lName"];
        $birthYear= (int)$_POST["birthYear"];
        $birthDate= $_POST["birthDate"];
        $deathDate = $_POST['deathDate'];
        $deathYear = (int)$_POST["deathYear"];
        $plotRow = (int)$_POST["plotRow"];
        $plotNum = (int)$_POST["plotNum"];
        $intermentDate = $_POST['intermentDate'];
        $intermentYear = (int)$_POST["intermentYear"];
        $veteran = $_POST["veteran"];
        $milBranch = $_POST["milBranch"];
        $milRank = $_POST["milRank"];
        $serviceTime = $_POST["serviceTime"];
        $spouseFName = $_POST["spouseFName"];
        $spouseMName = $_POST["spouseMName"];
        $spouseLName = $_POST["spouseLName"];
        $childrensNames = $_POST["childrensNames"];
        $motherFName = $_POST["motherFName"];
        $motherMName = $_POST["motherMName"];
        $motherLName = $_POST["motherLName"];
        $fatherFName = $_POST["fatherFName"];
        $fatherMName = $_POST["fatherMName"];
        $fatherLName = $_POST["fatherLName"];
        $imgDeceased = $_FILES["imgDeceased"]["name"];
        $imgGrave1 = $_FILES["imgGrave1"]["name"];
        $imgGrave2 = $_FILES["imgGrave2"]["name"];
        $obituary = $_POST["obituary"];
        $familyNotes = $_POST["familyNotes"];

        $currentImgDeceased = $_POST["currentDeceasedImg"];
        $currentImgGrave1 = $_POST["currentGrave1Img"];
        $currentImgGrave2 = $_POST["currentGrave2Img"];

        //for check boxes
        $obituaryCheckBox = $_POST["obituaryCheckBox"];
        $familyNotesCheckBox = $_POST["familyNotesCheckBox"];


        //validate fields
        $validForm = true;

        //var_dump($imgDeceased);
        //var_dump($currentImgGrave1);
        //var_dump($currentImgDeceased);
        if($imgDeceased == "" && $currentImgDeceased != ""){
            $imgDeceased = $currentImgDeceased;
        } else if($imgDeceased == "" && $currentImgDeceased == "") {
          $imgDeceased = null;
        } else if($imgDeceased != "") {
          $imgDeceased;
        }
        //var_dump($imgDeceased);

        if($imgGrave1 == "" && $currentImgGrave1 != ""){
            $imgGrave1 = $currentImgGrave1;
        } else if($imgGrave1 == "" && $currentImgGrave1 == "") {
          $imgGrave1 = null;
        } else if($imgGrave1 != "") {
          $imgGrave1;
        }

        if($imgGrave2 == "" && $currentImgGrave2 != ""){
            $imgGrave2 = $currentImgGrave2;
        } else if($imgGrave2 == "" && $currentImgGrave2 == "") {
          $imgGrave2 = null;
        } else if($imgGrave2 != "") {
          $imgGrave2;
        }

        //validate first name
		    if($fName == ""){
            $firstNameERR = "*Please enter a first name";
            $validForm = false;
        }

        if($mName == ""){
            $mName = null;
        }

        if($lName == ""){
            $lName = null;
        }

        if($veteran == ""){
            $veteran = null;
        }

        if($milBranch == ""){
            $milBranch = null;
        }

        if($milRank == ""){
            $milRank = null;
        }

        if($serviceTime == ""){
            $serviceTime = null;
        }

        if($spouseFName == ""){
            $spouseFName = null;
        }

        if($spouseMName == ""){
            $spouseMName = null;
        }

        if($spouseLName == ""){
            $spouseLName = null;
        }

        if($childrensNames == ""){
            $childrensNames = null;
        }

        if($motherFName == ""){
            $motherFName = null;
        }

        if($motherMName == ""){
            $motherMName = null;
        }

        if($motherLName == ""){
            $motherLName = null;
        }

        if($fatherFName == ""){
            $fatherFName = null;
        }

        if($fatherMName == ""){
            $fatherMName = null;
        }

        if($fatherLName == ""){
            $fatherLName = null;
        }

        if($obituary == ""){
            $obituary = null;
        }

        if($familyNotes == ""){
            $familyNotes = null;
        }

        //validate birth date
        if($birthDate == ""){
            $birthDateERR = "";
            $birthDate = null;
        }
        elseif(!preg_match('/^(18|19|20|21)\d\d[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/', $birthDate)){
            $birthDateERR = "Please enter a valid date (mm/dd/yyyy)";
            $birthDate = null;
            $validForm = false;
        }

        //validate birth year
        if($birthYear == "" || $birthYear == null){
            $birthYearERR = "";
            $birthYear = null;
        }
        elseif(!preg_match("/(?:(?:18|19|20|21)[0-9]{2})/", $birthYear)){
            $birthYearERR = "Please enter a valid year (yyyy)";
            $birthYear = null;
            $validForm = false;
        }

        //validate death date
        if($deathDate == ""){
            $deathDate = null;
            $deathDateERR = "";
        }
        elseif(!preg_match('/^(18|19|20|21)\d\d[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/', $deathDate)){
            $deathDateERR = "Please enter a valid date (mm/dd/yyyy)";
            $deathDate = null;
            $validForm = false;
        }

        //validate death year
        if($deathYear == ""){
            $deathYearERR = "";
            $deathYear = null;
        }
        elseif(!preg_match("/(?:(?:18|19|20|21)[0-9]{2})/", $deathYear)){
            $deathYearERR = "Please enter a valid year (yyyy)";
            $deathYear = null;
            $validForm = false;
        }

        //burial death date
        if($intermentDate == ""){
            $intermentDate = null;
            $intermentDateERR = "";
        }
        elseif(!preg_match('/^(18|19|20|21)\d\d[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/', $intermentDate)){
            $intermentDateERR = "Please enter a valid date (mm/dd/yyyy)";
            $intermentDate = null;
            $validForm = false;
        }

        //validate burial year
        if($intermentYear == ""){
            $intermentYearERR = "";
            $intermentYear = null;
        }
        elseif(!preg_match("/(?:(?:18|19|20|21)[0-9]{2})/", $intermentYear)){
            $intermentYearERR = "Please enter a valid year (yyyy)";
            $intermentYear = null;
            $validForm = false;
        }

        //validate plot row
        if($plotRow == ""){
            $plotRowERR = "Please enter a plot row";
            $plotRow = null;
            $validForm = false;
        }
        elseif(!preg_match("/^\d{0,4}$/", $plotRow)){
            $plotRowERR = "Please enter a valid #";
            $plotRow = null;
            $validForm = false;
        }

        //validate plot Num
        if($plotNum == ""){
            $plotNumERR = "Please enter a plot number";
            $plotNum= null;
            $validForm = false;
        }
        elseif(!preg_match("/^\d{0,4}$/", $plotNum)){
            $plotNumERR = "Please enter a valid #";
            $plotNum = null;
            $validForm = false;
        }


          if (is_null($birthDate)) {
            $birthDate = 'NULL';
          } else {
            $birthDate = "'$birthDate'";
          }

          if (is_null($birthYear)) {
            $birthYear = 'NULL';
          } else {
            $birthYear = "'$birthYear'";
          }

          if (is_null($deathDate)) {
            $deathDate = 'NULL';
          } else {
            $deathDate = "'$deathDate'";
          }

          if (is_null($deathYear)) {
            $deathYear = 'NULL';
          } else {
            $deathYear = "'$deathYear'";
          }

          if (is_null($intermentDate)) {
            $intermentDate = 'NULL';
          } else {
            $intermentDate = "'$intermentDate'";
          }

          if (is_null($intermentYear)) {
            $intermentYear = 'NULL';
          } else {
            $intermentYear = "'$intermentYear'";
          }

          if ($imgDeceased == 1) {
            $imgDeceased = null;
          }

          if ($imgGrave1 == 1) {
            $imgGrave1 = null;
          }

          if ($imgGrave2 == 1) {
            $imgGrave2 = null;
          }

        $sql = "UPDATE `cemetery-burials` SET ";
         $sql .= "`burials-first-name`='$fName', ";
         $sql .= "`burials-middle-name`='$mName', ";
         $sql .= "`burials-last-name`='$lName', ";
         $sql .= "`burials-dob`=$birthDate, ";
         $sql .= "`burials-birth-year`=$birthYear, ";
         $sql .= "`burials-date-of-death`=$deathDate, ";
         $sql .= "`burials-death-year`=$deathYear, ";
         $sql .= "`burials-plot-row` = $plotRow,";
         $sql .= "`burials-plot-number` = $plotNum,";
         $sql .= "`burials-interment-date` = $intermentDate,";
         $sql .= "`burials-interment-year` = $intermentYear,";
         $sql .= "`burials-veteran` = '$veteran',";
         $sql .= "`burials-veteran-branch` = '$milBranch',";
         $sql .= "`burials-veteran-rank` = '$milRank',";
         $sql .= "`burials-veteran-service-time` = '$serviceTime',";
         $sql .= "`burials-spouse-first-name` = '$spouseFName',";
         $sql .= "`burials-spouse-middle-name` = '$spouseMName',";
         $sql .= "`burials-spouse-last-name` = '$spouseLName',";
         $sql .= "`burials-childrens-names` = '$childrensNames',";
         $sql .= "`burials-mother-first-name` = '$motherFName',";
         $sql .= "`burials-mother-middle-name` = '$motherMName',";
         $sql .= "`burials-mother-last-name` = '$motherLName',";
         $sql .= "`burials-father-first-name` = '$fatherFName',";
         $sql .= "`burials-father-middle-name` = '$fatherMName',";
         $sql .= "`burials-father-last-name` = '$fatherLName',";
         $sql .= "`burials-img-deceased` = '$imgDeceased',";
         $sql .= "`burials-img-grave1` = '$imgGrave1',";
         $sql .= "`burials-img-grave2` = '$imgGrave2',";
         $sql .= "`burials-obituary` = '$obituary',";
         $sql .= "`burials-family-notes` = '$familyNotes'";
         $sql .= "WHERE `burials-id`=$updateID ";

        //var_dump($sql);

        if($validForm){
          //var_dump("VALID");

            $stmt = $conn->prepare($sql);
            //var_dump($stmt);

            $stmt->execute();

            //grab the latest burial id
            $burialId = $conn->lastInsertId();
            //var_dump($updateID);die;
            //directory of deceased photo
            move_uploaded_file($_FILES['imgDeceased']['tmp_name'],
            "deceased_img/" . "deceased_img_" . $updateID . ".png");

            //directory of grave 1 photo
            move_uploaded_file($_FILES['imgGrave1']['tmp_name'],
            "grave_1_img/" . "grave_1_img_" . $updateID . ".png");

            //directory of grave 2 photo
            move_uploaded_file($_FILES['imgGrave2']['tmp_name'],
            "grave_2_img/" . "grave_2_img_" . $updateID . ".png");


            //echo "<script>alert('Submission Successful');</script>";

            //reset form on successful submission
            //stay on same page
            $validForm = "";
            $fName = "";
            $mName = "";
            $lName = "";
            $birthDate = "";
            $birthYear= "";
            $deathDate = "";
            $deathYear = "";
            $plotRow = "";
            $plotNum = "";
            $intermentDate = "";
            $intermentYear = "";
            $veteran = "";
            $milBranch = "";
            $milRank = "";
            $serviceTime = "";
            $spouseFName = "";
            $spouseMName = "";
            $spouseLName = "";
            $childrensNames = "";
            $motherFName = "";
            $motherMName = "";
            $motherLName = "";
            $fatherFName = "";
            $fatherMName = "";
            $fatherLName = "";
            $imgDeceased = "";
            $imgGrave1 = "";
            $imgGrave2 = "";
            $obituary = "";
            $familyNotes = "";

            header("location: burial-save-success.php");

        }
        else{
            echo "<script>alert('Please see form details for errors!');</script>";
        }
    }
    else{
      try {
    require '../PDO_connectionFile.php';

    //Create the SQL command string
    $sql = "SELECT * FROM `cemetery-burials` WHERE `burials-id` = $updateID";

    //PREPARE the SQL statement
     $stmt = $conn->prepare($sql);

     //EXECUTE the prepared statement
     $stmt->execute();

     //RESULT object contains an associative array
     $stmt->setFetchMode(PDO::FETCH_ASSOC);

     $row=$stmt->fetch(PDO::FETCH_ASSOC);

     $burialsFirstName = $row['burials-first-name'];
     $burialsMiddleName = $row['burials-middle-name'];
     $burialsLastName = $row['burials-last-name'];
     $burialsDOB = $row['burials-dob'];
     $burialsBirthYear = $row['burials-birth-year'];
     $burialsDOD = $row['burials-date-of-death'];
     $burialsDeathYear = $row['burials-death-year'];
     $burialsPlotRow = $row['burials-plot-row'];
     $burialsPlotNumber = $row['burials-plot-number'];
     $burialsIntermentDate = $row['burials-interment-date'];
     $burialsIntermentYear = $row['burials-interment-year'];
     $burialsVeteran = $row['burials-veteran'];
     $burialsVeteranBranch = $row['burials-veteran-branch'];
     $burialsVeteranRank = $row['burials-veteran-rank'];
     $burialsVeteranServiceTime = $row['burials-veteran-service-time'];
     $burialsSpouseFirstName = $row['burials-spouse-first-name'];
     $burialsSpouseMiddleName = $row['burials-spouse-middle-name'];
     $burialsSpouseLastName = $row['burials-spouse-last-name'];
     $burialsChildrensNames = $row['burials-childrens-names'];
     $burialsMotherFirstName = $row['burials-mother-first-name'];
     $burialsMotherMiddleName = $row['burials-mother-middle-name'];
     $burialsMotherLastName = $row['burials-mother-last-name'];
     $burialsFatherFirstName = $row['burials-father-first-name'];
     $burialsFatherMiddleName = $row['burials-father-middle-name'];
     $burialsFatherLastName = $row['burials-father-last-name'];
     $burialsImageDeceased = $row['burials-img-deceased'];
     $burialsImageGrave1 = $row['burials-img-grave1'];
     $burialsImageGrave2 = $row['burials-img-grave2'];
     $burialsObituary = $row['burials-obituary'];
     $burialsFamilyNotes = $row['burials-family-notes'];

   }

   catch(PDOException $e)
   {
     $message = "There has been a problem. The system administrator has been contacted. Please try again later.";

     error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
     error_log($e->getLine());
     error_log(var_dump(debug_backtrace()));

     //Clean up any variables or connections that have been left hanging by this error.

     //header('Location: files/505_error_response_page.php');	//sends control to a User friendly page
   }
    }


    require_once('../tpl/adminEditBurial.tpl.php');

  } else {
    header("location: adminLogin.php");
    exit;
  }
?>
