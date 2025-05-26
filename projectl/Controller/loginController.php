<?php
session_start(); 
include "../Model/data.php";


$uname_error = "";
$pass_error = "";
$uname = $_POST["uname"];
$pass = $_POST["pass"];

$conn = createCon();
$result = checkLogin($conn, $uname, $pass);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $uname; 
    setcookie("username", $uname, time() + (86400 * 1), "/"); 
    header("Location: ../View/dashboard.php"); 
} else {
    echo "<h2>Invalid Username or Password</h2>";
}

closeCon($conn);
?>
