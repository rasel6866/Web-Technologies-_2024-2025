<?php
function createCon()
{
    $conn = mysqli_connect("localhost", "root", "", "admininfo");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function insertData($conn, $adminId, $adminName, $nid, $username, $bloodBankName, $email, $password)
{
    $sql = "INSERT INTO registration (adminId,adminName,nid,username,bloodbankname,email,password) VALUES ('$adminId','$adminName','$nid','$username','$bloodBankName','$email','$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Data Inserted successfully. For login click <a href='login.php'>here</a>.";
    } else {
        die("Error " . mysqli_error($conn));
    }
}

function closeCon($conn)
{
    mysqli_close($conn);
}

function checkLogin($conn, $uname, $pass) 
{
    $sql = "SELECT * FROM registration WHERE username='$uname' AND password='$pass'";
    return mysqli_query($conn, $sql);
}
?>
