<?php
session_start();
if(isset($_SESSION['email'])){
	header("location: welcome.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- !important Meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- !Style Files CSS -->
        <link rel="icon" href="img/App data-bro.svg">
        <link rel="stylesheet" href="css/master.css">
        <!-- !Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title>Login & Sing Up</title>
    </head>
    <body>