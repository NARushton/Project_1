<?php include 'header.php';

    $headingFromForm = $_POST["heading"];
    $tripDateFromForm = $_POST["trip_date"];
    $durationFromForm = $_POST["duration"];
    $summeryFromForm = $_POST["summery"];
    
    $errorMessage = '';

//Connection to DB + Inserting Data From Add Adventure Form
try {
	error_log("Connecting to Database\n", 0);
	$dbhost = 'localhost';
	$dbname = 'adventures';
	$dbuser = 'root';
	$dbpass = 'password';
	$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

	$sql = "INSERT INTO 'user_added_adventures' ('Heading', 'TripDate', 'Duration', 'Summery') VALUES (?, ?, ?, ?)";
	$stmt = $pdo->prepare($sql);

	$pdo->beginTransaction();
	$stmt->execute([$headerFromForm, $tripDateFromForm, $durationFromForm, $summeryFromForm]);
	$pdo->commit();

    ?>

    <a href="logout.php" class="logout_button">Logout</a>
    <br>

    <h1>Assignment Submission - Successful</h1>

    <?php

//Error Catch
} catch (Exception $e) {
	$errorMessage = "<p>Error : " . $e->getMessage() . "</p>";
	error_log("Cannot connect to Database\n", 0);

    ?>

    <div class="admin_add_cont">

        <a href="logout.php" class="logout_button">Logout</a>
        
        <h1>Assignment Submission - Failed</h1>
        <?php echo $errorMessage; ?>
        
    </div>

    <?php
}
?>
    
<?php include 'footer.php'; ?>