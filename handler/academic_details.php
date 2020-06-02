<?php
//extract($_POST);
require_once '../class/form.php';

$errors = array();
if (isset($_POST['user_id']) && isset($_POST['hslc_board']) && isset($_POST['hslc_institute']) && isset($_POST['hslc_sub']) && isset($_POST['hslc_year']) && isset($_POST['hslc_percentage']) && isset($_POST['hs_board']) && isset($_POST['hs_institute']) && isset($_POST['hs_sub']) && isset($_POST['hs_year']) && isset($_POST['hs_percentage'])) {

    $user_id = $_POST['user_id'];
    $hslc_board = trim($_POST['hslc_board']);
    $hslc_institute = trim($_POST['hslc_institute']);
    $hslc_sub = trim($_POST['hslc_sub']);
    $hslc_year = trim($_POST['hslc_year']);
    $hslc_percentage = trim($_POST['hslc_percentage']);
    $hs_board = trim($_POST['hs_board']);
    $hs_institute = trim($_POST['hs_institute']);
    $hs_sub = trim($_POST['hs_sub']);
    $hs_year = trim($_POST['hs_year']);
    $hs_percentage = trim($_POST['hs_percentage']);

    if (!preg_match("/^[a-zA-Z\s]+$/", $hslc_board) || !preg_match("/^[a-zA-Z\s]+$/", $hs_board)) {
        array_push($errors, "Invalid board name");
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $hslc_institute) || !preg_match("/^[a-zA-Z\s]+$/", $hs_institute)) {
        array_push($errors, "Invalid Institute");
    }
    if (!preg_match("/^[a-zA-Z\s\,]+$/", $hslc_sub) || !preg_match("/^[a-zA-Z\s\,]+$/", $hs_sub)) {
        array_push($errors, "Invalid Subjects");
    }
    if (!preg_match("/^[0-9]+$/", $hslc_year) || !preg_match("/^[0-9]+$/", $hs_year)) {
        array_push($errors, "Invalid Year");
    }
    if (!preg_match("/^[0-9\.]+$/", $hslc_percentage) || !preg_match("/^[0-9\.]+$/", $hs_percentage)) {
        array_push($errors, "Invalid Percentage");
    }

    $response = array('error' => $errors, 'success' => false);
    if (empty($errors)) {
        $Form = new Form();
        $result = $Form->insertAccademic($user_id, $hslc_board, $hslc_institute, $hslc_sub, $hslc_year, $hslc_percentage, $hs_board, $hs_institute, $hs_sub, $hs_year, $hs_percentage);
        if ($result) {
            array_push($errors, "");
            $response = array('success' => true, 'error' => $errors);
            echo json_encode($response);
        } else {
            array_push($errors, "Try again later");
            $response = array('success' => false, 'error' => $errors);
            echo json_encode($response);
        }
        // $response = array('success' => true, 'error' => $errors);
        // echo json_encode($response);
    } else {
        echo json_encode($response);
    }
} else {
    array_push($errors, "Fillup the required fields");
    $response = array('success' => false, 'error' => $errors);
    echo json_encode($response);
}
