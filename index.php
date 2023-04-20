<?php include 'header.php'; ?>

<a href="logout.php" class="logout_button">Logout</a>
<br>

<div class="welcome_box">
    
    <h1 class="welcome_header">Welcome to your IT Support System</h1>

        <form action="problem.php" method="POST">

                <select name="theTitle" class="firstFormField formField">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mrs</option>
                </select>

                <input name="firstName" type="text" class="formField" placeholder="First Name" required>

                <input name="lastName" type="text" class="formField" placeholder="Last Name">

                <select name="role" class="formField">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="lastFormField formField">
        
        </form>
</div>

<?php include 'footer.php'; ?>