<?php include 'header.php'; ?>

<?php
    //setting data from index.php form to associated variables
    $theTitleFromForm = $_POST["theTitle"];
    $firstNameFromForm = $_POST["firstName"];
    $lastNameFromForm = $_POST["lastName"];
    $roleFromForm = $_POST["role"];

    $link_1 = "";
    $admin_add_link = "";
    //Below switch statement sets $link_1 to the appropriate link for the role selected
    switch ($roleFromForm) {
        case "Admin":
            $link_1 = "<a href=\"new-account.php\">Create a New Account</a>";
            $admin_add_link = "<a href=\"admin-add.php\">Add a New Adventure</a>";
            break;
        case "Manager":
            $link_1 = "<a href=\"lost-password.php\">Reset Account Password</a>";
            break;
        case "CEO":
            $link_1 = "<a href=\"need-help.php\">I require immediate assistance</a>";
    }
 

?>
    <a href="logout.php" class="logout_button">Logout</a>
    <br>
    <div class="problem_welcome">
        <h1 class="problem_header">Welcome, <?php echo $firstNameFromForm?></h1>

        <p class="problem_p"><?php echo $link_1?></p>

        <p class="problem_p"><?php echo $admin_add_link?></p>

        <p class="problem_p">
            <a href="not-working.php">My Computer Isn't Working</a>
        </p>
    </div>

<?php include 'footer.php'; ?>