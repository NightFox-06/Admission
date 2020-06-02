<?php
$name = " pankaj sarkar ";
$name = trim($name);
if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
    echo "Name must only contain letters!";
} else {
    echo "H" . $name . "H";
}
exit();


if (isset($_POST['name']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['DOB']) && isset($_POST['g-recaptcha-response'])) {
    $secretKey = '6Lcy-f0UAAAAAOcjA9_3m0_XPJBfSmLEkZjXaWl-';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);
    $response = json_decode($verifyResponse);
    if ($response->success) {
        echo $_POST['name'];
        echo "<br/>";
        echo $_POST['mobile'];
        echo "<br/>";
        echo $_POST['email'];
        echo "<br/>";
        echo $_POST['DOB'];
    } else {
        header("Location: index.php?captch_error=invalid captch");
    }
} else {
    echo "no data";
}