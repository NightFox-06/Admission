<?php
extract($_POST);
require_once '../class/form.php';

$errors = array();
if (isset($_POST['user_id']) && isset($_POST['name']) && isset($_POST['date_of_birth']) && isset($_POST['contact_number']) && isset($_POST['gender']) && isset($_POST['caste']) && isset($_POST['nationality']) && isset($_POST['current_address']) && isset($_POST['current_city']) && isset($_POST['current_state']) && isset($_POST['current_postal_code']) && isset($_POST['current_country']) && isset($_POST['permanent_address']) && isset($_POST['permanent_city']) && isset($_POST['permanent_state']) && isset($_POST['permanent_postal_code']) && isset($_POST['permanent_country'])) {

    $user_id = $_POST['user_id'];
    $name = trim($_POST['name']);
    $dob = trim($_POST['date_of_birth']);
    $number = trim($_POST['contact_number']);
    $gender = trim($_POST['gender']);
    $caste = trim($_POST['caste']);
    $nationality = trim($_POST['nationality']);
    $current_address = trim($_POST['current_address']);
    $current_city = trim($_POST['current_city']);
    $current_state = trim($_POST['current_state']);
    $current_postal_code = trim($_POST['current_postal_code']);
    $current_country = trim($_POST['current_country']);
    $permanent_address = trim($_POST['permanent_address']);
    $permanent_city = trim($_POST['permanent_city']);
    $permanent_state = trim($_POST['permanent_state']);
    $permanent_postal_code = trim($_POST['permanent_postal_code']);
    $permanent_country = trim($_POST['permanent_country']);
    //$data = [$user_id, $name, $dob, $number, $gender, $caste, $nationality, $current_address, $current_city, $current_state, $current_postal_code, $current_country, $permanent_address, $permanent_city, $permanent_state, $permanent_postal_code, $permanent_country];

    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        array_push($errors, "Numbers and special characters are not allowed in name");
    }
    if (!preg_match("/^[0-9]+$/", $number) || strlen($number) != 10) {
        array_push($errors, "Invalid number");
    }
    if (!preg_match("/^[a-zA-Z]+$/", $nationality)) {
        array_push($errors, "Invalid nationality");
    }
    if (!preg_match("/^[a-zA-Z\s\-\,\.]+$/", $current_address) || !preg_match("/^[a-zA-Z\s\-\,\.]+$/", $permanent_address)) {
        array_push($errors, "Invalid Address");
    }
    if (!preg_match("/^[a-zA-Z]+$/", $current_city) || !preg_match("/^[a-zA-Z]+$/", $permanent_city)) {
        array_push($errors, "Invalid city");
    }
    if (!preg_match("/^[a-zA-Z]+$/", $current_state) || !preg_match("/^[a-zA-Z]+$/", $permanent_state)) {
        array_push($errors, "Invalid state");
    }
    if (!preg_match("/^[a-zA-Z]+$/", $current_country) || !preg_match("/^[a-zA-Z]+$/", $permanent_country)) {
        array_push($errors, "Invalid country");
    }
    if (!preg_match("/^[0-9]+$/", $current_postal_code) || !preg_match("/^[0-9]+$/", $permanent_postal_code)) {
        array_push($errors, "Invalid postal code");
    }

    $response = array('error' => $errors, 'success' => false);
    if (empty($errors)) {
        $Form = new Form();
        $result = $Form->insertBasicInfo($user_id, $name, $dob, $number, $gender, $caste, $nationality, $current_address, $current_city, $current_state, $current_postal_code, $current_country, $permanent_address, $permanent_city, $permanent_state, $permanent_postal_code, $permanent_country);
        if ($result) {
            array_push($errors, "");
            $response = array('success' => true, 'error' => $errors);
            echo json_encode($response);
        } else {
            array_push($errors, "Try again later");
            $response = array('success' => false, 'error' => $errors);
            echo json_encode($response);
        }
    } else {
        echo json_encode($response);
    }
} else {
    array_push($errors, "Fillup the required fields");
    $response = array('success' => false, 'error' => $errors);
    echo json_encode($response);
}