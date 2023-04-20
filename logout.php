<?php 

include 'header.php'; 

session_unset();

session_destroy();

?>

<div class="problem_welcome">
        <h2 class="problem_header">You have been successfully logged out</h2>
        <h3 class="return_link">
            <a href="index.php">Select this text to return to the login page</a>
        </h3>
</div>


<?php include 'footer.php'; ?>