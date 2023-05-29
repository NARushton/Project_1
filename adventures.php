<?php session_start(); ?>

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
    <header class="main_header">
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
                <li><a href="index.html">Home</a></li>
                <li>Book Trip</li>
                <li><a href="index.php">Login</a></li>
            </ul>
        </nav>

    </header>

    <!--Main Image-->
    <div class="main_image_container">
        <img class="main_image" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg"
            alt="a red canoe docked at a lake shore">
        <div class="image_text">
            Come Experience Canada
        </div>
    </div>
    <!--Main Content-->
    <main class="main_content">
        <article>
            <h1>Up Coming Adventures</h1>

               <?php

                    try {
                        error_log("Connecting to DB\n", 0);
                        $dbhost = 'localhost';
                        $dbname = 'adventures';
                        $dbuser = 'root';
                        $dbpass = '';
                        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, 	$dbpass);

                        $query = "SELECT Heading, TripDate, Duration, Summery FROM user_added_adventures";
                        $stmt = $pdo->prepare($query);
                        $stmt->execute();
                        $stmt->bindColumn('Heading', $heading);
                        $stmt->bindColumn('TripDate', $tripDate);
                        $stmt->bindColumn('Duration', $duration);
                        $stmt->bindColumn('Summery', $summery);
                        while ($row = $stmt->fetch(PDO::FETCH_BOUD)) {
                           echo "<h2>" . $heading . "</h2>";
                           echo "<h4>Date: " . $TripDate . "</h4>";
                           echo "<h4>Duration: " . $duration . " days</h4>";
                           echo "<h3>Summary</h3>";
                           echo "<p>" . $summery . "</p>";
                        }
                    } catch (PDOException $e) {
                        $errorMessage = "<h1>Error : " . $e->getMessage() . "</h1>";
                        error_log("Cannot connect to DB\n", 0);
                        die();
                    }

                if (isset($errorMessage)) {
                    echo $errorMessage;
                }
            ?>

            <h2></h2>
            <h4>Date: </h4>
            <h4>Duration:  days</h4>
            <h3>Summary</h3>
            <p></p>

        </article>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>