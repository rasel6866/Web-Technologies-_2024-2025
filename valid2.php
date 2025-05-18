<!-- form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Registration Form</title>
    <link rel="stylesheet" href="style.css"> <!-- (optional if you have CSS) -->
</head>
<body>
    <h2>Admin Registration Form</h2>
    <form action="validate.php" method="post" name="userform" onsubmit="return Validation();">
        <label>Admin ID:</label>
        <input type="text" name="adminId">
        <br><br>

        <label>Full Name:</label>
        <input type="text" name="adminName">
        <br><br>

        <label>NID:</label>
        <input type="text" name="nid">
        <br><br>

        <label>Username:</label>
        <input type="text" name="username">
        <br><br>

        <label>Blood Bank Name:</label>
        <input type="text" name="bloodBankName">
        <br><br>

        <label>Admin Role:</label>
        <input type="text" name="adminRole">
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other
        <br><br>

        <label>Email:</label>
        <input type="text" name="email">
        <br><br>

        <label>Phone:</label>
        <input type="text" name="phone">
        <br><br>

        <label>Password:</label>
        <input type="password" name="password">
        <br><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirmPassword">
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <script src="valid.js"></script> <!-- Your JavaScript validation -->
</body>
</html>
