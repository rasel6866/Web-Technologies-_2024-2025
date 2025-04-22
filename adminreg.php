<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="valid.js"></script>
   
</head>
<body>
 
<center>
    <h2>Admin Registration</h2>
    <img src="../image/bloodadmin.jpg" width="300" height="200"><br>
    <p class="ex1">This is css max-width;</p>
    <p>Welcome! to the BBNS Admin registration form. Please register if you haven't any previous account. Register all the box carefully</p>
 
    <form name="userform" action="dashboard.php" method="post" onsubmit="return Validation()">
       
        <label for="adminId">Admin ID:</label>
        <input type="text" id="adminId" name="adminId">
        <span class="error" id="adminIdError"></span><br><br>
 
        <label for="adminName">Full Name:</label>
        <input type="text" id="adminName" name="adminName">
        <span class="error" id="adminNameError"></span><br><br>
 
        <label for="nid">NID Number:</label>
        <input type="text" id="nid" name="nid">
        <span class="error" id="nidError"></span><br><br>
 
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <span class="error" id="usernameError"></span><br><br>
 
        <label for="bloodBankName">Blood Bank Name:</label>
        <input type="text" id="bloodBankName" name="bloodBankName">
        <span class="error" id="bloodBankError"></span><br><br>
 
        <label for="adminRole">Admin Role:</label>
        <select id="adminRole" name="adminRole">
            <option value="">Select Role</option>
            <option value="Manager">Manager</option>
            <option value="Staff">Staff</option>
        </select>
        <span class="error" id="adminRoleError"></span><br><br>
 
        <p>Select Gender:</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="Other">
        <label for="other">Other</label>
        <span class="error" id="genderError"></span><br><br>
 
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email">
        <span class="error" id="emailError"></span><br><br>
 
        <label for="phone">Contact Number:</label>
        <input type="text" id="phone" name="phone">
        <span class="error" id="phoneError"></span><br><br>
 
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error" id="passwordError"></span><br><br>
 
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
        <span class="error" id="confirmPasswordError"></span><br><br>
 
        <input type="submit" value="Register" class="btn submit">
    </form>
</center>
 
</body>
</html>