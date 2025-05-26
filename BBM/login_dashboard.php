<?php
session_start(); 
include "../model/db.php";

if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username']; 
} else {
    echo "Unauthorized access.";
    exit();
}
$conn = createCon();
$sql = "SELECT * FROM registration WHERE username='$uname'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="dashboard_style.css">   
    <img src="blood.jpg" width="500" height="500"> 
</head>
<body>
    
<div class="container">
<?php
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "<h2>Welcome : " . $row['username'] . "</h2>";
    echo "Admin ID: " . $row['adminId']."<br><br>";
    echo "Admin Name: " . $row['adminName'] ."<br><br>";
    echo "NID : " . $row['nid'] ."<br><br>" ;
    echo "Blood Bank Name : " . $row['bloodbankname'] ."<br><br>" ;
    echo "Email : " . $row['email'] ."<br><br>" ;

    echo '<a href="update.php?uname=' . $row['username'] . '">Edit Your Info</a><br><br>';
    echo '<h3>Press <a href="logout.php" style="color: red; text-decoration: none;">here</a> for logout</h3>';
} else {
    echo "User Not Found";
}

closeCon($conn);
?>
</div>
</body>
</html>
