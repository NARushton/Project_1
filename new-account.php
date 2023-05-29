<?php include 'header.php'; ?>

    <a href="logout.php" class="logout_button">Logout</a>
    <br>
    <div class="problem_welcome">
        <form action="send-email.php" method="POST">

            <h2 class="new_account_h2">Please Enter the User's Email to Create New Account</h2>

            <input name="newAccount" type="email" style="margin-left: 10px" placeholder="Email Address">
            <input type="submit" name="submit" value="Submit" class="lastFormField formField">

        </form>
    </div>

<?php include 'footer.php'; ?>