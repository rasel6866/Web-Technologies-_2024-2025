<?php
include "../Model/data.php";
$conn = createCon();

if (isset($_GET['uname'])) {
    $uname = $_GET['uname'];
    $sql = "SELECT * FROM user1 WHERE username='$uname'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $updateSQL = "UPDATE user1 SET email='$email', phone='$phone' WHERE username='$uname'";
    if (mysqli_query($conn, $updateSQL)) {
        header("Location: ../View/dashboard.php");
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
        Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
