<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        Welcome to the LogIn page!
        <form action="../Controller/loginController.php" method="post">
            <lable for="username">Username:</lable>
            <input type="text" id="username" name="uname"><br><br>
            <lable for="password">Password:</lable>
            <input type="password" id="password" name="pass"><br><br>
            <input type="submit" value="Login">
    </center>
</body>
</html>