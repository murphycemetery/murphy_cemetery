<?php
class CemeteryBurials
{
    var $burialsData = array();
    var $errors = array();

    var $db = null;

    function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;dbname=murphy-cemetery;charset=utf8',
          'murphy_admin', 'MurphyCemetery_Group2');
    }

    function set($dataArray)
    {
        $this->burialsData = $dataArray;
    }

    function sanitize($dataArray)
    {
        // sanitize data based on rules
          $dataArray['burials-first-name'] = filter_var($dataArray['burials-first-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-middle-name'] = filter_var($dataArray['burials-middle-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-last-name'] = filter_var($dataArray['burials-last-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-dob'] = filter_var($dataArray['burials-dob'], FILTER_SANITIZE_STRING);
          $dataArray['burials-birth-year'] = filter_var($dataArray['burials-birth-year'], FILTER_SANITIZE_NUMBER_INT);
          $dataArray['burials-date-of-death'] = filter_var($dataArray['burials-date-of-death'], FILTER_SANITIZE_STRING);
          $dataArray['burials-death-year'] = filter_var($dataArray['burials-death-year'], FILTER_SANITIZE_NUMBER_INT);
          $dataArray['burials-plot-row'] = filter_var($dataArray['burials-plot-row'], FILTER_SANITIZE_NUMBER_INT);
          $dataArray['burials-plot-number'] = filter_var($dataArray['burials-plot-number'], FILTER_SANITIZE_NUMBER_INT);
          $dataArray['burials-interment-date'] = filter_var($dataArray['burials-interment-date'], FILTER_SANITIZE_STRING);
          $dataArray['burials-interment-year'] = filter_var($dataArray['burials-interment-year'], FILTER_SANITIZE_NUMBER_INT);
          $dataArray['burials-veteran'] = filter_var($dataArray['burials-veteran'], FILTER_SANITIZE_STRING);
          $dataArray['burials-veteran-branch'] = filter_var($dataArray['burials-veteran-branch'], FILTER_SANITIZE_STRING);
          $dataArray['burials-veteran-rank'] = filter_var($dataArray['burials-veteran-rank'], FILTER_SANITIZE_STRING);
          $dataArray['burials-veteran-service-time'] = filter_var($dataArray['burials-veteran-service-time'], FILTER_SANITIZE_STRING);
          $dataArray['burials-spouse-first-name'] = filter_var($dataArray['burials-spouse-first-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-spouse-middle-name'] = filter_var($dataArray['burials-spouse-middle-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-spouse-last-name'] = filter_var($dataArray['burials-spouse-last-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-childrens-names'] = filter_var($dataArray['burials-childrens-names'], FILTER_SANITIZE_STRING);
          $dataArray['burials-mother-first-name'] = filter_var($dataArray['burials-mother-first-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-mother-middle-name'] = filter_var($dataArray['burials-mother-middle-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-mother-last-name'] = filter_var($dataArray['burials-mother-last-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-father-first-name'] = filter_var($dataArray['burials-father-first-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-father-middle-name'] = filter_var($dataArray['burials-father-middle-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-father-last-name'] = filter_var($dataArray['burials-father-last-name'], FILTER_SANITIZE_STRING);
          $dataArray['burials-img-burials'] = filter_var($dataArray['burials-img-burials'], FILTER_SANITIZE_STRING);
          $dataArray['burials-img-grave1'] = filter_var($dataArray['burials-img-grave1'], FILTER_SANITIZE_STRING);
          $dataArray['burials-img-grave2'] = filter_var($dataArray['burials-img-grave2'], FILTER_SANITIZE_STRING);
          $dataArray['burials-obituary'] = filter_var($dataArray['burials-obituary'], FILTER_SANITIZE_STRING);
          $dataArray['burials-family-notes'] = filter_var($dataArray['burials-family-notes'], FILTER_SANITIZE_STRING);

        return $dataArray;
    }
    function load($burials_id)
    {
        $isLoaded = false;

        // load from database
        $stmt = $this->db->prepare("SELECT * FROM `cemetery-burials` WHERE `burials-id` =?");
        $stmt->execute(array($burials_id));

        if ($stmt->rowCount() == 1)
        {
            $dataArray = $stmt->fetch(PDO::FETCH_ASSOC);
            //var_dump($dataArray);
            $this->set($dataArray);

            $isLoaded = true;
        }

        //var_dump($stmt->rowCount());

        return $isLoaded;
    }

    function save()
    {
        $isSaved = false;

        // determine if insert or update based on articleID
        // save data from articleData property to database
        if (empty($this->burialsData['burials-id']))
        {

            $stmt = $this->db->prepare(
                "INSERT INTO burials
                    (`burials-first-name`, `burials-middle-name`, `burials-last-name`, `burials-dob`, `burials-birth-year`, `burials-date-of-death`, `burials-death-year`, `burials-plot-row`, `burials-plot-number`, `burials-interment-date`, `burials-interment-year`, `burials-veteran`, `burials-veteran-branch`, `burials-veteran-rank`, `burials-veteran-service-time`, `burials-spouse-first-name`, `burials-spouse-middle-name`, `burials-spouse-last-name`, `burials-childrens-names`, `burials-mother-first-name`, `burials-mother-middle-name`, `burials-mother-last-name`, `burials-father-first-name`, `burials-father-middle-name`, `burials-father-last-name`, `burials-img-burials`, `burials-img-grave1`, `burials-img-grave2`, `burials-obituary`, `burials-family-notes`)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $isSaved = $stmt->execute(array(
                    $this->burialsData['burials-first-name'],
                    $this->burialsData['burials-middle-name'],
                    $this->burialsData['burials-last-name'],
                    $this->burialsData['burials-dob'],
                    $this->burialsData['burials-birth-year'],
                    $this->burialsData['burials-date-of-death'],
                    $this->burialsData['burials-death-year'],
                    $this->burialsData['burials-plot-row'],
                    $this->burialsData['burials-plot-number'],
                    $this->burialsData['burials-interment-date'],
                    $this->burialsData['burials-interment-year'],
                    $this->burialsData['burials-veteran'],
                    $this->burialsData['burials-veteran-branch'],
                    $this->burialsData['burials-veteran-rank'],
                    $this->burialsData['burials-veteran-service-time'],
                    $this->burialsData['burials-spouse-first-name'],
                    $this->burialsData['burials-spouse-middle-name'],
                    $this->burialsData['burials-spouse-last-name'],
                    $this->burialsData['burials-childrens-names'],
                    $this->burialsData['burials-mother-first-name'],
                    $this->burialsData['burials-mother-middle-name'],
                    $this->burialsData['burials-mother-last-name'],
                    $this->burialsData['burials-father-first-name'],
                    $this->burialsData['burials-father-middle-name'],
                    $this->burialsData['burials-father-last-name'],
                    $this->burialsData['burials-img-burials'],
                    $this->burialsData['burials-img-grave1'],
                    $this->burialsData['burials-img-grave2'],
                    $this->burialsData['burials-obituary'],
                    $this->burialsData['burials-family-notes']

                )
            );

            if ($isSaved)
            {
                $this->burialsData['burials-id'] = $this->db->lastInsertId();
            }
        }
        else
        {
            $stmt = $this->db->prepare(
                "UPDATE burials SET
                    `burials-first-name` = ?,
                    `burials-middle-name` = ?,
                    `burials-last-name` = ?,
                    `burials-dob` = ?,
                    `burials-birth-year` = ?,
                    `burials-date-of-death` = ?,
                    `burials-death-year` = ?,
                    `burials-plot-row` = ?,
                    `burials-plot-number` = ?,
                    `burials-interment-date` = ?,
                    `burials-interment-year` = ?,
                    `burials-veteran` = ?,
                    `burials-veteran-branch` = ?,
                    `burials-veteran-rank` = ?,
                    `burials-veteran-service-time` = ?,
                    `burials-spouse-first-name` = ?,
                    `burials-spouse-middle-name` = ?,
                    `burials-spouse-last-name` = ?,
                    `burials-childrens-names` = ?,
                    `burials-mother-first-name` = ?,
                    `burials-mother-middle-name` = ?,
                    `burials-mother-last-name` = ?,
                    `burials-father-first-name` = ?,
                    `burials-father-middle-name` = ?,
                    `burials-father-last-name` = ?,
                    `burials-img-burials` = ?,
                    `burials-img-grave1` = ?,
                    `burials-img-grave2` = ?,
                    `burials-obituary`= ?,
                    `burials-family-notes` = ?

                WHERE `burials-id` = ?"
            );

            $isSaved = $stmt->execute(array(
              $this->burialsData['burials-first-name'],
              $this->burialsData['burials-middle-name'],
              $this->burialsData['burials-last-name'],
              $this->burialsData['burials-dob'],
              $this->burialsData['burials-birth-year'],
              $this->burialsData['burials-date-of-death'],
              $this->burialsData['burials-death-year'],
              $this->burialsData['burials-plot-row'],
              $this->burialsData['burials-plot-number'],
              $this->burialsData['burials-interment-date'],
              $this->burialsData['burials-interment-year'],
              $this->burialsData['burials-veteran'],
              $this->burialsData['burials-veteran-branch'],
              $this->burialsData['burials-veteran-rank'],
              $this->burialsData['burials-veteran-service-time'],
              $this->burialsData['burials-spouse-first-name'],
              $this->burialsData['burials-spouse-middle-name'],
              $this->burialsData['burials-spouse-last-name'],
              $this->burialsData['burials-childrens-names'],
              $this->burialsData['burials-mother-first-name'],
              $this->burialsData['burials-mother-middle-name'],
              $this->burialsData['burials-mother-last-name'],
              $this->burialsData['burials-father-first-name'],
              $this->burialsData['burials-father-middle-name'],
              $this->burialsData['burials-father-last-name'],
              $this->burialsData['burials-img-burials'],
              $this->burialsData['burials-img-grave1'],
              $this->burialsData['burials-img-grave2'],
              $this->burialsData['burials-obituary'],
              $this->burialsData['burials-family-notes']
                )
            );
        }

        return $isSaved;
    }

    function validate()
    {
        $isValid = true;


        // if an error, store to errors using column name as key

        // validate the data elements in articleData property
        if (empty($this->burialsData['burials-first-name']))
        {
            $this->errors['burials-first-name'] = "Please enter the first name";
            $isValid = false;
        }

        if (empty($this->burialsData['burials-last-name']))
        {
            $this->errors['burials-last-name'] = "Please enter the last name";
            $isValid = false;
        }

        /*
        if (isset($this->burialsData['burials-dob']))
        {
          if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->burialsData['burials-dob'])
          {
            $this->errors['burials-dob'] = "Please enter a valid birth date";
            $isValid = false;
          }
        }
        */

        if (isset($this->burialsData['burials-birth-year']))
        { $currentYear = date('Y');
          $currentYear = intval($currentYear);
        //var_dump($year);
          if ($this->burialsData['burials-birth-year'] > 1000 && $this->burialsData['burials-birth-year'] >= $currentYear)
          {
            $this->errors['burials-birth-year'] = "Please enter a valid birth year";
            $isValid = false;
          }
        }

        /*
        if (isset($this->burialsData['burials-date-of-death']))
        {
          if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->burialsData['burials-date-of-death'])
          {
            $this->errors['burials-date-of-death'] = "Please enter a valid death date";
            $isValid = false;
          }
        }
        */

        if (isset($this->burialsData['burials-death-year']))
        { $currentYear = date('Y');
          $currentYear = intval($currentYear);
        //var_dump($year);
          if ($this->burialsData['burials-death-year'] > 1000 && $this->burialsData['burials-death-year'] <= $currentYear)
          {
            $this->errors['burials-death-year'] = "Please enter a valid death year";
            $isValid = false;
          }
        }

        /*
        if (isset($this->burialsData['burials-interment-date']))
        {
          if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->burialsData['burials-interment-date'])
          {
            $this->errors['burials-interment-date'] = "Please enter a valid interment date";
            $isValid = false;
          }
        }
        */

        if (isset($this->burialsData['burials-interment-year']))
        { $currentYear = date('Y');
          $currentYear = intval($currentYear);
        //var_dump($year);
          if ($this->burialsData['burials-interment-year'] > 1000 && $this->burialsData['burials-interment-year'] >= $currentYear)
          {
            $this->errors['burials-interment-year'] = "Please enter a valid interment year";
            $isValid = false;
          }
        }

        if (empty($this->burialsData['burials-plot-row']))
        {
            $this->errors['burials-plot-row'] = "Please enter a plot row number";
            $isValid = false;
        }

        if (empty($this->burialsData['burials-plot-number']))
        {
            $this->errors['burials-plot-number'] = "Please enter a plot number";
            $isValid = false;
        }



        return $isValid;
    }

    function getList($sortColumn = null, $sortDirection = null, $firstNameText = null, $lastNameText = null, $page = null)
    {
        $burialList = array();

        $sql = "SELECT * FROM `cemetery-burials` ";

        if ($firstNameText != "")
        {
            $sql .= " WHERE `burials-first-name` LIKE ?";

            if ($lastNameText != "")
            {
                $sql .= " AND `burials-last-name` LIKE ?";
            }
        }

        if ($lastNameText != "" && $firstNameText == "")
        {
            $sql .= " WHERE `burials-last-name` LIKE ?";
        }



        if (!is_null($sortColumn))
        {
            $sql .= " ORDER BY " . $sortColumn;

            if (!is_null($sortDirection))
            {
                $sql .= " " . $sortDirection;
            }


        }




        // setup paging if passed
    		if (!is_null($page)) {
          //var_dump($page);
    			$sql .= " LIMIT " . ((2 * $page) - 2) . ",2";
          //var_dump($sql);
          $total_pages_sql = "SELECT COUNT(*) FROM `cemetery-burials`";
          $stmtPages = $this->db->prepare($total_pages_sql);
          $numberOfRows = $this->db->query($total_pages_sql)->fetchColumn();
          $numberOfRows = (int)$numberOfRows;
          $numberOfPages = $numberOfRows/2;
    		}

        $stmt = $this->db->prepare($sql);

        if ($stmt)
        {
          if($firstNameText != "" && $lastNameText != "")
          {

            $stmt->execute(array($firstNameText, $lastNameText));

          }

          else if($firstNameText != "")
          {
            $stmt->execute(array($firstNameText));
          }

          else if($lastNameText != "")
          {
            $stmt->execute(array($lastNameText));
          }

          else {
            $stmt->execute(array('%' . $firstNameText . '%'));
          }


            //var_dump($firstNameText);
            //var_dump($lastNameText);
            $burialList = $stmt->fetchAll(PDO::FETCH_ASSOC);


        }



        return $burialList;
    }

function hashPassword($passwordToHash) {
  $passwordHash = password_hash($passwordToHash, PASSWORD_BYCRYPT);
}


function getPages($sortColumn = null, $sortDirection = null, $filterColumn = null, $filterText = null, $page = null)
{
    $burialList = array();

    $sql = "SELECT * FROM `cemetery-burials` ";

    if (!is_null($filterColumn) && !is_null($filterText))
    {
        $sql .= " WHERE " . `$filterColumn` . " LIKE ?";
    }

    if (!is_null($sortColumn))
    {
        $sql .= " ORDER BY " . $sortColumn;

        if (!is_null($sortDirection))
        {
            $sql .= " " . $sortDirection;
        }
    }

    // setup paging if passed
		if (!is_null($page)) {
      //var_dump($page);
			//$sql .= " LIMIT " . ((2 * $page) - 2) . ",2";


		}

    $stmt = $this->db->prepare($sql);

    if ($stmt)
    {
        $stmt->execute(array('%' . $filterText . '%'));
        $numberOfRows = $stmt->rowCount();
        //var_dump($numberOfRows);
        $numberOfPages=$numberOfRows/2;
        //var_dump($numberOfPages);

        $burialList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    return $numberOfPages;
}


function authorizeBurials($inFirstName, $inLastName){
  $burials_id=null;
  $checkburialssql="SELECT burials-id, burials-first-name, burials-last-name
                FROM cemetery-burials
                WHERE burials-first-name = :burials-first-name
                AND burials-last-name = :burials-last-name";
                $query= $this->db->prepare($checkburialssql);
                                    $query->bindParam('burials-first-name', $inFirstName, PDO::PARAM_STR);
                                    $query->bindValue('burials-last-name', $inLastName, PDO::PARAM_STR);
                                    $query->execute();

                                    $count = $query->rowCount();
                                    $row   = $query->fetch(PDO::FETCH_ASSOC);

          if ($row!=false) {
            $burials_id = $row['burials_id'];
            $first_name = $row['burials-first-name'];
            $last_name = $row['burials-last-name'];

            $burials_info = array($burials_id, $first_name, $last_name);

          }
            return $burials_info;
    }

  function delete($burials_id) {
    $stmt = $this->db->prepare("DELETE FROM `cemetery-burials` WHERE `burials-id` = $burials_id");
    //run DELETE query
    //var_dump($stmt);
    //if the query runs successfully print  message telling the event was deleted
    if($stmt) {
      $stmt->execute(array('%' . $burials_id . '%'));
      //var_dump($stmt);
    	$deleteMsg = "The burial associated with ID #". $_GET['burials-id'] ." has been deleted.";
    } else {
    	$deleteMsg = "Uh-oh, we weren't able to delete the burial associated with ID #".$burials_id." Please try again.";
    }

    //var_dump($deleteMsg);

    return $deleteMsg;
  }
}
?>
