<?php
class Users
{
    var $userData = array();
    var $errors = array();

    var $db = null;

    function __construct()
    {
      //local
      /*$this->db = new PDO('mysql:host=localhost;dbname=murphy-cemetery;charset=utf8',
          'murphy_admin', 'MurphyCemetery_Group2');*/
      //host
      $this->db = new PDO('mysql:host=localhost;dbname=emanning11_murphy-cemetery;charset=utf8',
          'emanning11_murphy-cemetery', 'MurphyCemetery_Group2');
    }

    function set($dataArray)
    {
        $this->userData = $dataArray;
    }

    function sanitize($dataArray)
    {
        // sanitize data based on rules
          $dataArray['username'] = filter_var($dataArray['username'], FILTER_SANITIZE_STRING);
          $dataArray['password'] = filter_var($dataArray['password'], FILTER_SANITIZE_STRING);

        return $dataArray;
    }
    function load($user_id)
    {
        $isLoaded = false;

        // load from database
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE user_id=?");
        $stmt->execute(array($user_id));

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
        if (empty($this->userData['user_id']))
        {

            $stmt = $this->db->prepare(
                "INSERT INTO admin
                    (username, password)
                 VALUES (?, ?, ?)");

            $isSaved = $stmt->execute(array(
                    $this->userData['username'],
                    $this->userData['password']
                )
            );

            if ($isSaved)
            {
                $this->userData['user_id'] = $this->db->lastInsertId();
            }
        }
        else
        {
            $stmt = $this->db->prepare(
                "UPDATE admin SET
                    username = ?,
                    password = ?
                WHERE user_id = ?"
            );

            $isSaved = $stmt->execute(array(
                    $this->userData['username'],
                    $this->userData['password'],
                    $this->userData['user_id']
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
        if (empty($this->userData['username']))
        {
            $this->errors['username'] = "Please enter a username";
            $isValid = false;
        }

        if (empty($this->userData['password']))
        {
            $this->errors['password'] = "Please enter a password";
            $isValid = false;
        }

        return $isValid;
    }

    function getList($sortColumn = null, $sortDirection = null, $filterColumn = null, $filterText = null, $page = null)
    {
        $userList = array();

        $sql = "SELECT * FROM admin ";

        if (!is_null($filterColumn) && !is_null($filterText))
        {
            $sql .= " WHERE " . $filterColumn . " LIKE ?";
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
          $total_pages_sql = "SELECT COUNT(*) FROM admin";
          $stmtPages = $this->db->prepare($total_pages_sql);
          $numberOfRows = $this->db->query($total_pages_sql)->fetchColumn();
          $numberOfRows = (int)$numberOfRows;
          $numberOfPages = $numberOfRows/2;
    		}

        $stmt = $this->db->prepare($sql);

        if ($stmt)
        {
            $stmt->execute(array('%' . $filterText . '%'));

            $userList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


        return $userList;
    }

function hashPassword($passwordToHash) {
  $passwordHash = password_hash($passwordToHash, PASSWORD_BYCRYPT);
}


function getPages($sortColumn = null, $sortDirection = null, $filterColumn = null, $filterText = null, $page = null)
{
    $userList = array();

    $sql = "SELECT * FROM admin ";

    if (!is_null($filterColumn) && !is_null($filterText))
    {
        $sql .= " WHERE " . $filterColumn . " LIKE ?";
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

        $userList = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    return $numberOfPages;
}


function authorizeUser($inUsername, $inPassword){
  $user_id=null;
  $checkUsersql="SELECT user_id, username, password
                FROM admin
                WHERE username = :username
                AND password = :password";
                $query= $this->db->prepare($checkUsersql);
                                    $query->bindParam('username', $inUsername, PDO::PARAM_STR);
                                    $query->bindValue('password', $inPassword, PDO::PARAM_STR);
                                    $query->execute();

                                    $count = $query->rowCount();
                                    $row   = $query->fetch(PDO::FETCH_ASSOC);

          if ($row!=false) {
            $user_id = $row["user_id"];
            $username = $row['username'];
            $password = $row['password'];

            $user_info = array($user_id, $username, $password);

          }
            return $user_info;
    }

  }
?>
