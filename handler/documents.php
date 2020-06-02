<?php
//extract($_POST);
require_once '../class/form.php';

if (isset($_POST['document_name'])) {
    $user_id = $_POST['user_id'];
    $document_name = $_POST['document_name'];
    $name =  $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $temp_location = $_FILES['file']['tmp_name'];
    
    $file_name = $document_name .'-'.$user_id .'-'. rand(100000,999999);
    $destination = '../uploadedDocuments/' . $file_name;

    $allowedType = ['image/png', 'image/jpg', 'image/jpeg'];

    if ($size <= 1048576 && in_array($type, $allowedType)) {
        $Form = new Form();
        $result = $Form->insertDocument($user_id, $document_name, $file_name);
        if ($result) {
            move_uploaded_file($temp_location, $destination);
            echo "successfull";
        }
    } else {
        echo "Parameter doesn't match !!";
    }
}

// if (isset($_POST['loagAllImages'])) {
//     $file = new File();
//     $results = $file->getAllImages();
//     echo json_encode($results);
// }

// class File
// {
//     public $dbconn;

//     function __construct()
//     {
//         require '../connection/DBcon.php';
//         $con = new Connection();
//         $this->dbconn = $con->connect();
//     }

//     public function insertImage($name, $size, $type)
//     {
//         $sql = "INSERT INTO `images`(`name`, `size`, `type`) VALUES (?,?,?)";
//         $stmt = $this->dbconn->prepare($sql);
//         $result = $stmt->execute([$name, $size, $type]);
//         if ($result) {
//             return true;
//         } else {
//             echo "Error: " . $this->dbconn->error;
//         }
//     }

//     public function getAllImages()
//     {
//         //$sql = "SELECT * FROM `images`";
//         $stmt = $this->dbconn->query("SELECT * FROM `images` ORDER BY id DESC");
//         // $stmt = $stmt->execute();
//         $result = $stmt->fetchAll();
//         return $result;
//     }
// }