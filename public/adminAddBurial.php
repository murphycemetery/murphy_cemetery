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

    if(isset($_POST["submitForm"])){

        $fName = $_POST["fName"];
        $mName = $_POST["mName"];
        $lName = $_POST["lName"];
        $birthDate= $_POST["birthDate"];
        $birthYear= (int)$_POST["birthYear"];
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

        //var_dump($birthYear);die;
        //for check boxes
        $obituaryCheckBox = $_POST["obituaryCheckBox"];
        $familyNotesCheckBox = $_POST["familyNotesCheckBox"];


        //validate fields
        $validForm = true;

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

        if($imgDeceased == ""){
            $imgDeceased = null;
        }

        if($imgGrave1 == ""){
            $imgGrave1 = null;
        }

        if($imgGrave2 == ""){
            $imgGrave2 = null;
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
      /*  elseif(!preg_match('/^(18|19|20|21)\d\d[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/', $birthDate)){
            $birthDateERR = "Please enter a valid date (mm/dd/yyyy)";
            $birthDate = null;
            $validForm = false;
        } */

        //validate birth year
        if($birthYear == ""){
            $birthYearERR = "";
            $birthYear = null;
        } elseif(!preg_match("/(?:(?:17|18|19|20|21)[0-9]{2})/", $birthYear)){
            $birthYearERR = "Please enter a valid year (yyyy)";
            $birthYear = null;
            $validForm = false;
        }

        //validate death date
        if($deathDate == ""){
            $deathDate = null;
            $deathDateERR = "";
        }
      /*  elseif(!preg_match('/^(18|19|20|21)\d\d[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/', $deathDate)){
            $deathDateERR = "Please enter a valid date (mm/dd/yyyy)";
            $deathDate = null;
            $validForm = false;
        } */

        //validate death year
        if($deathYear == ""){
            $deathYearERR = "";
            $deathYear = null;
        } elseif(!preg_match("/(?:(?:18|19|20|21)[0-9]{2})/", $deathYear)){
            $deathYearERR = "Please enter a valid year (yyyy)";
            $deathYear = null;
            $validForm = false;
        }

        //burial death date
        if($intermentDate == ""){
            $intermentDate = null;
            $intermentDateERR = "";
        }
      /*  elseif(!preg_match('/^(18|19|20|21)\d\d[- \/.](0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])$/', $intermentDate)){
            $intermentDateERR = "Please enter a valid date (mm/dd/yyyy)";
            $intermentDate = null;
            $validForm = false;
        } */

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



        //create sql stmt
        $sql = "INSERT INTO `cemetery-burials` (`burials-first-name`, `burials-middle-name`, `burials-last-name`, `burials-dob`, `burials-birth-year`, `burials-date-of-death`, `burials-death-year`, `burials-plot-row`, `burials-plot-number`, `burials-interment-date`, `burials-interment-year`, `burials-veteran`, `burials-veteran-branch`, `burials-veteran-rank`, `burials-veteran-service-time`, `burials-spouse-first-name`, `burials-spouse-middle-name`, `burials-spouse-last-name`,
          `burials-childrens-names`, `burials-mother-first-name`, `burials-mother-middle-name`, `burials-mother-last-name`, `burials-father-first-name`, `burials-father-middle-name`, `burials-father-last-name`, `burials-img-deceased`, `burials-img-grave1`, `burials-img-grave2`, `burials-obituary`, `burials-family-notes`)
                VALUES (:fName, :mName, :lName, :birthDate, :birthYear, :deathDate, :deathYear, :plotRow, :plotNum, :intermentDate, :intermentYear, :veteran, :milBranch, :milRank, :serviceTime, :spouseFName, :spouseMName, :spouseLName, :childrensNames, :motherFName, :motherMName, :motherLName, :fatherFName, :fatherMName, :fatherLName, '$imgDeceased', '$imgGrave1', '$imgGrave2', :obituary, :familyNotes)";

        if($validForm){

            $stmt = $conn->prepare($sql);

            //bind parameters
            $stmt->bindParam(":fName", $fName);
            $stmt->bindParam(":mName", $mName);
            $stmt->bindParam(":lName", $lName);
            $stmt->bindParam(":birthDate", $birthDate);
            $stmt->bindParam(":birthYear", $birthYear);
            $stmt->bindParam(":deathDate", $deathDate);
            $stmt->bindParam(":deathYear", $deathYear);
            $stmt->bindParam(":plotRow", $plotRow);
            $stmt->bindParam(":plotNum", $plotNum);
            $stmt->bindParam(":intermentDate", $intermentDate);
            $stmt->bindParam(":intermentYear", $intermentYear);
            $stmt->bindParam(":veteran", $veteran);
            $stmt->bindParam(":milBranch", $milBranch);
            $stmt->bindParam(":milRank", $milRank);
            $stmt->bindParam(":serviceTime", $serviceTime);
            $stmt->bindParam(":spouseFName", $spouseFName);
            $stmt->bindParam(":spouseMName", $spouseMName);
            $stmt->bindParam(":spouseLName", $spouseLName);
            $stmt->bindParam(":childrensNames", $childrensNames);
            $stmt->bindParam(":motherFName", $motherFName);
            $stmt->bindParam(":motherMName", $motherMName);
            $stmt->bindParam(":motherLName", $motherLName);
            $stmt->bindParam(":fatherFName", $fatherFName);
            $stmt->bindParam(":fatherMName", $fatherMName);
            $stmt->bindParam(":fatherLName", $fatherLName);
            $stmt->bindParam(":obituary", $obituary);
            $stmt->bindParam(":familyNotes", $familyNotes);


            $stmt->execute();

            //grab the latest burial id
            $burialId = $conn->lastInsertId();

            //directory of deceased photo
            move_uploaded_file($_FILES['imgDeceased']['tmp_name'],
            "deceased_img/" . "deceased_img_" . $burialId . ".png");

            //directory of grave 1 photo
            move_uploaded_file($_FILES['imgGrave1']['tmp_name'],
            "grave_1_img/" . "grave_1_img_" . $burialId . ".png");

            //directory of grave 2 photo
            move_uploaded_file($_FILES['imgGrave2']['tmp_name'],
            "grave_2_img/" . "grave_2_img_" . $burialId . ".png");


            echo "<script>alert('Submission Successful');</script>";

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
    }


    require_once('../tpl/adminAddBurial.tpl.php');

  } else {
    header("location: adminLogin.php");
    exit;
  }
?>
