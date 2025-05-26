<?php
include "../model/db.php";
$conn = createCon();

if (isset($_GET['uname'])) {
    $uname = $_GET['uname'];
    $sql = "SELECT * FROM registration WHERE username='$uname'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nid = $_POST['nid'];

    $updateSQL = "UPDATE registration SET email='$email', nid='$nid' WHERE username='$uname'";
    if (mysqli_query($conn, $updateSQL)) {
        header("Location: login_dashboard.php");
        exit();
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}

closeCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Info</title>
</head>
<body>
    <h2>Update Your Information</h2>
    <form method="POST">
        Email: <input type="email" name="email" value="<?= $row['email'] ?>" required><br><br>
        NID: <input type="text" name="nid" value="<?= $row['nid'] ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
