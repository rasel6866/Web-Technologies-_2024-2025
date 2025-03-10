<html>
<head>
    <title>Admin Registration - Blood Bank Network System</title>
</head>
<body>
    <center>
        <h2>Admin Registration</h2>
 
        <form action="/register-admin" method="post">
            <label for="adminId">Admin ID:</label>
            <input type="text" id="adminId" name="adminId"><br><br>
 
            <label for="adminName">Full Name:</label>
            <input type="text" id="adminName" name="adminName"><br><br>
 
            <label for="nid">NID Number:</label>
            <input type="text" id="nid" name="nid"><br><br>
 
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
 
            <label for="bloodBankName">Blood Bank Name:</label>
            <input type="text" id="bloodBankName" name="bloodBankName"><br><br>
 
            <label for="adminRole">Admin Role:</label>
            <select name="adminRole" id="adminRole">
                <option value="">Select Role</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
            </select><br><br>
 
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email"><br><br>
 
            <label for="phone">Contact Number:</label>
            <input type="text" id="phone" name="phone"><br><br>
 
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
 
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword"><br><br>
 
            <input type="submit">
        </form>
    </center>
</body>
</html>
 