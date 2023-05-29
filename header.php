<?php session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nick Rushton">
    <meta name="description" content="Home page for Halifax Canoe and Kayak">
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    

    <title>Halifax Canoe and Kayak</title>
    <link type="text/css" rel="stylesheet" href="styles.css">

</head>

<body>
    <!--Top Main Header Bar-->
    <header class="main_header_php">
        <!-- Header Elements-->
        <div class="header_container">

            <img id="nav_toggle_button" class="header_button" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png"
                alt="site navigation button">

            <h1 class="header_title">Halifax Canoe and Kayak</h1>

            <img class="header_logo"
                src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png"
                alt="company logo, crossed canoe paddles">

        </div>

         <!--Side Navigation Bar-->
        <nav class="header_nav">
            <ul class="header_nav_menu">
                <li><a href="adventures.php">Home</a></li>
                <li>Book Trip</li>
                <li><a href="index.php">Login</a></li>
            </ul>
        </nav>

    </header>
    