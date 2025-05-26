<?php
if (!function_exists('createCon')) {
    function createCon()
    {
        $conn = mysqli_connect("localhost", "root", "", "bbm");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
}

if (!function_exists('insertData')) {
    function insertData($conn, $fname, $lname, $email, $pwd, $phone, $uname)
    {
        $sql = "INSERT INTO user1 (fname,lname,email,password,phone,username) VALUES ('$fname','$lname','$email','$pwd','$phone','$uname')";
        if (mysqli_query($conn, $sql)) {
            echo "Data Inserted successfully. For login click <a href='../View/login.php'>here</a>.";
        } else {
            die("Error " . mysqli_error($conn));
        }
    }
}

if (!function_exists('closeCon')) {
    function closeCon($conn)
    {
        mysqli_close($conn);
    }
}

if (!function_exists('checkLogin')) {
    function checkLogin($conn, $uname, $pwd)
    {
        $sql = "SELECT * FROM user1 WHERE username='$uname' AND password='$pwd'";
        return mysqli_query($conn, $sql);
    }
}
?>
