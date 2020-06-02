<?php
class Form
{
    public $dbconn;

    function __construct()
    {
        require_once '../connection/DBcon.php';
        $con = new Connection();
        $this->dbconn = $con->connect();
    }

    public function getActive($user_id)
    {
        $stmt = $this->dbconn->query("SELECT * FROM basic_information WHERE user_id =" . $user_id . "");
        $academic = $stmt->rowCount() > 0 ? true : false;

        $stmt = $this->dbconn->query("SELECT * FROM accademic_details WHERE user_id =" . $user_id . "");
        $document = $stmt->rowCount() > 0 && $academic ? true : false;

        $data = array('academic' => $academic, 'document' => $document);
        return $data;
    }

    public function insertBasicInfo($user_id, $name, $dob, $number, $gender, $caste, $nationality, $current_address, $current_city, $current_state, $current_postal_code, $current_country, $permanent_address, $permanent_city, $permanent_state, $permanent_postal_code, $permanent_country)
    {
        $sql = "INSERT INTO `basic_information`(`user_id`, `name`, `dob`, `number`, `gender`, `caste`, `nationality`, `current_address`, `current_city`, `current_state`, `current_postal_code`, `current_country`, `permanent_address`, `permanent_city`, `permanent_state`, `permanent_postal_code`, `permanent_country`) VALUES (:user_id, :full_name, :dob, :contact_number, :gender, :caste, :nationality, :current_address, :current_city, :current_state, :current_postal_code, :current_country, :permanent_address, :permanent_city, :permanent_state, :permanent_postal_code, :permanent_country) ON DUPLICATE KEY UPDATE `name` = :full_name , `dob` = :dob , `number` = :contact_number , `gender` = :gender , `caste` = :caste , `nationality` = :nationality , `current_address` = :current_address , `current_city` = :current_city , `current_state` = :current_state , `current_postal_code` = :current_postal_code , `current_country` = :current_country , `permanent_address` = :permanent_address , `permanent_city` = :permanent_city , `permanent_state` = :permanent_state , `permanent_postal_code` = :permanent_postal_code , `permanent_country` = :permanent_country";
        $stmt = $this->dbconn->prepare($sql);

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':full_name', $name);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':contact_number', $number);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':caste', $caste);
        $stmt->bindParam(':nationality', $nationality);
        $stmt->bindParam(':current_address', $current_address);
        $stmt->bindParam(':current_city', $current_city);
        $stmt->bindParam(':current_state', $current_state);
        $stmt->bindParam(':current_postal_code', $current_postal_code);
        $stmt->bindParam(':current_country', $current_country);
        $stmt->bindParam(':permanent_address', $permanent_address);
        $stmt->bindParam(':permanent_city', $permanent_city);
        $stmt->bindParam(':permanent_state', $permanent_state);
        $stmt->bindParam(':permanent_postal_code', $permanent_postal_code);
        $stmt->bindParam(':permanent_country', $permanent_country);

        $result = $stmt->execute();
        if ($result) {
            return true;
        } else {
            echo $this->dbconn->error;
        }
    }

    public function getBasicInfo($user_id)
    {
        $stmt = $this->dbconn->query("SELECT * FROM basic_information WHERE user_id =" . $user_id . "");
        if ($stmt->rowCount() > 0) {
            $basicInfo = $stmt->fetchAll();
            return $basicInfo;
        }
        return false;
    }

    //insert / Update accademic details
    public function insertAccademic($user_id, $hslc_board, $hslc_institute, $hslc_sub, $hslc_year, $hslc_percentage, $hs_board, $hs_institute, $hs_sub, $hs_year, $hs_percentage)
    {
        $sql = "INSERT INTO `accademic_details`(`user_id`, `hslc_board`, `hslc_institute`, `hslc_sub`, `hslc_year`, `hslc_percentage`, `hs_board`, `hs_institute`, `hs_sub`, `hs_year`, `hs_percentage`) VALUES (:user_id, :hslc_board, :hslc_institute, :hslc_sub, :hslc_year, :hslc_percentage, :hs_board, :hs_institute, :hs_sub, :hs_year, :hs_percentage) ON DUPLICATE KEY UPDATE `hslc_board` = :hslc_board, `hslc_institute` = :hslc_institute, `hslc_sub` = :hslc_sub, `hslc_year` = :hslc_year, `hslc_percentage` = :hslc_percentage, `hs_board` = :hs_board, `hs_institute` = :hs_institute, `hs_sub` = :hs_sub, `hs_year` = :hs_year, `hs_percentage` = :hs_percentage";
        $stmt = $this->dbconn->prepare($sql);

        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':hslc_board', $hslc_board);
        $stmt->bindParam(':hslc_institute', $hslc_institute);
        $stmt->bindParam(':hslc_sub', $hslc_sub);
        $stmt->bindParam(':hslc_year', $hslc_year);
        $stmt->bindParam(':hslc_percentage', $hslc_percentage);
        $stmt->bindParam(':hs_board', $hs_board);
        $stmt->bindParam(':hs_institute', $hs_institute);
        $stmt->bindParam(':hs_sub', $hs_sub);
        $stmt->bindParam(':hs_year', $hs_year);
        $stmt->bindParam(':hs_percentage', $hs_percentage);

        $result = $stmt->execute();
        if ($result) {
            return true;
        } else {
            echo $this->dbconn->error;
        }
    }

    //get Accademic info
    public function getAccademic($user_id)
    {
        $stmt = $this->dbconn->query("SELECT * FROM accademic_details WHERE user_id =" . $user_id . "");
        if ($stmt->rowCount() > 0) {
            $accademicDetails = $stmt->fetchAll();
            return $accademicDetails;
        }
        return false;
    }

     //insert document
     public function insertDocument($user_id, $file_name, $file)
     {
         $sql = "INSERT INTO `documents`(`user_id`, `".$file_name."`) VALUES (:user_id, :file) ON DUPLICATE KEY UPDATE `".$file_name."` = :file";
         $stmt = $this->dbconn->prepare($sql);
 
         $stmt->bindParam(':user_id', $user_id);
         $stmt->bindParam(':file', $file);
 
         $result = $stmt->execute();
         if ($result) {
             return true;
         } else {
             echo $this->dbconn->error;
         }
     }

     //get Accademic info
    public function getDoc($user_id)
    {
        $stmt = $this->dbconn->query("SELECT * FROM documents WHERE user_id =" . $user_id . "");
        if ($stmt->rowCount() > 0) {
            $documents = $stmt->fetchAll();
            return $documents;
        }
        return false;
    }
}