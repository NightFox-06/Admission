<?php

require_once '../class/form.php';
extract($_POST);

if (isset($_POST['getActiveTab']) && isset($_POST['user_id'])) {
    $Form = new Form();
    $result = $Form->getActive($user_id);

    //$data = array('academic' => true, 'document' => $document);
    echo json_encode($result);
}

if(isset($_POST['getBasic'])){
    $user_id = $_POST['user_id'];
    $Form = new Form();
    $result = $Form->getBasicInfo($user_id);
    if($result){
        $response = array('error' => false, 'data' => $result);
        echo json_encode($response);
    }else{
        $response = array('error' => 'Unable to load', 'data' => false);
        echo json_encode($response);
    }
}

if(isset($_POST['getAccademic'])){
    $user_id = $_POST['user_id'];
    $Form = new Form();
    $result = $Form->getAccademic($user_id);
    if($result){
        $response = array('error' => false, 'data' => $result);
        echo json_encode($response);
    }else{
        $response = array('error' => 'Unable to load', 'data' => false);
        echo json_encode($response);
    }
}

if(isset($_POST['getDoc'])){
    $user_id = $_POST['user_id'];
    $Form = new Form();
    $result = $Form->getDoc($user_id);
    if($result){
        $response = array('error' => false, 'data' => $result);
        echo json_encode($response);
    }else{
        $response = array('error' => 'Unable to load', 'data' => false);
        echo json_encode($response);
    }
}