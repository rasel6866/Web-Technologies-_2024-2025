<?php
include "pvalid.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
    <center>
        <h2>Admin Registration</h2>
       <img src="../image/bloodadmin.jpg" width="300" height="200"><br>
        <p>Welcome to the BBNS Admin Registration Form</p>

        <form name="adminform" method="post" onsubmit="return Validation()">

            <label for="adminId">Admin ID:</label>
            <input type="text" id="adminId" name="adminId">
            <span class="error"><?php echo $adminIdError; ?></span><br><br>

            <label for="adminName">Full Name:</label>
            <input type="text" id="adminName" name="adminName">
            <span class="error"><?php echo $adminNameError; ?></span><br><br>

            <label for="nid">NID Number:</label>
            <input type="text" id="nid" name="nid">
            <span class="error"><?php echo $nidError; ?></span><br><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <span class="error"><?php echo $usernameError; ?></span><br><br>

            <label for="bloodBankName">Blood Bank Name:</label>
            <input type="text" id="bloodBankName" name="bloodBankName">
            <span class="error"><?php echo $bloodBankError; ?></span><br><br>

            <label for="adminRole">Admin Role:</label>
            <select id="adminRole" name="adminRole">
                <option value="">Select Role</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
            </select>
            <span class="error"><?php echo $adminRoleError; ?></span><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label>
            <span class="error"><?php echo $genderError; ?></span><br><br>

            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email">
            <span class="error"><?php echo $emailError; ?></span><br><br>

            <label for="phone">Contact Number:</label>
            <input type="text" id="phone" name="phone">
            <span class="error"><?php echo $phoneError; ?></span><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span class="error"><?php echo $passwordError; ?></span><br><br>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword">
            <span class="error"><?php echo $confirmPasswordError; ?></span><br><br>

            <input type="submit" class="btn submit" value="Register">
            <input type="reset" class="btn reset" value="Reset">

        </form>
    </center>
</body>
</html>