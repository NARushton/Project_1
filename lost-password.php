<?php include 'header.php'; ?>

    <a href="logout.php" class="logout_button">Logout</a>
    <br>
    <div class="problem_welcome">
        <form action="send-email.php" method="POST">

            <h2 class="new_account_h2">Please Enter User's Email to Reset Account Password</h2>

            <input name="lostPassword" type="email" style="margin-left: 10px" placeholder="Email Address">
            <input type="submit" name="submit" value="Submit" class="lastFormField formField">

        </form>
    </div>

<?php include 'footer.php'; ?>