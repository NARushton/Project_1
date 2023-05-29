<?php include 'header.php';?>
<script src="todaydatescript.js"></script>

    <a href="logout.php" class="logout_button">Logout</a>
    <br>

    <div class="admin_add_cont">
        
        <h1>Admin - Add Adventure</h1>
        <p>Input Details Below About Your Trip:</p>

        <form action="admin-confirm.php" method="POST" class="admin_add_form">

            <input class="add_adv_form" name="heading" type="text" maxlength="25" placeholder="Enter the Trip Title (max 25 char)" required><br>

            <label>
                Trip Start Date:
                    <input name="trip_date" type="date" required><br>
            </label>

            <input class="add_adv_form" name="duration" type="number" placeholder="Enter Number of Days (max of 14)" max= 14 required><br>

            <textarea 
                name="summery" 
                class="ad_cont_textarea" 
                rows="10" cols="28" wrap="hard" autocorrect="on"
                maxlength="250" 
                placeholder="Enter Your Trip Summery     (max 250 characters)" 
                required></textarea><br>

            <input type="submit" value="Submit">
        </form>

    </div>

<?php include 'footer.php'; ?>