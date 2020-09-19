<?php

print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$error = '';

if (trim($name) == '') {
    $error = 'Enter your name';
} else if (trim($email) == '') {
    $error = 'Enter your email';
} else if (trim($number) == '') {
    $error = 'Enter your telephone number';
} else if (trim($message) == '') {
    $error = 'Enter your message';
}

if($error != '') {
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Order to develop website")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent type: text/plain;charset=utf-8\r\n";

mail('dedovdwork@gmail.com', $subject, $message, $headers);

header('Location: index.php');