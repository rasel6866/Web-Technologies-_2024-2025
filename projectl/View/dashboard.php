<?php
session_start(); 
include "../Model/data.php";

if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username']; 
} else {
    echo "Unauthorized access.";
    exit();
}
$conn = createCon();
$sql = "SELECT * FROM user1 WHERE username='$uname'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <img src="../img/bb.avif"> 
</head>
<body>
    
<div class="container">
<?php
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "<h2>Welcome : " . $row['username'] . "</h2>";
    echo "First Name: " . $row['fname']."<br><br>";
    echo "Last Name: " . $row['lname'] ."<br><br>";
    echo "Email : " . $row['email'] ."<br><br>" ;
    echo "Phone : " . $row['phone'] ."<br><br>";

    echo '<a href="../Controller/update.php?uname=' . $row['username'] . '">Edit Your Info</a><br><br>';
    echo '<h3>Press <a href="../Controller/logout.php" style="color: red; text-decoration: none;">here</a> for logout</h3>';

} else {
    echo "User Not Found";
}

closeCon($conn);
?>
</div>
</body>
</html>
