<?php
// variable
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$order = $_POST['order'];
$message = $_POST['message'];

$to="pixartsstudio@gmail.com";
$body="";
$body .="From: ".$name. "\r\n";
$body .="Email: ".$email. "\r\n";
$body .="Number: ".$number. "\r\n";
$body .="Order: ".$order. "\r\n";
$body .="Purpose: ".$message. "\r\n";



// check input filed
if (empty($name)||empty($email)||empty($number)) {

header('location:contact-us.html');
}
else{

	mail($to,$message,$body);

    header('location:index.html');

}
?>