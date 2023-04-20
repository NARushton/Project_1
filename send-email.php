<?php include 'header.php'; 

    $message = '';    

    if ($_POST["newAccount"] == true) {
        $message = "Your New Account Has Been Successfully Created";
    } else {
        $message = "Your Password Has Been Successfully Reset";
    }

    

?>
    <a href="logout.php" class="logout_button">Logout</a>
    <br>
    <div class="email_confirmation_box">

            <h2 class="send_email_h2"><?php echo $message?></h2>

    </div>

<?php include 'footer.php'; ?>