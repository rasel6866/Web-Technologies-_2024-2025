<?php
$errors = [];
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $adminId = trim($_POST['adminId'] ?? '');
    $adminName = trim($_POST['adminName'] ?? '');
    $nid = trim($_POST['nid'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $bloodBankName = trim($_POST['bloodBankName'] ?? '');
    $adminRole = trim($_POST['adminRole'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if (empty($adminId)) {
        $errors[] = "Admin ID is required.";
    }
    if (empty($adminName)) {
        $errors[] = "Full name is required.";
    }
    if (empty($nid) || !is_numeric($nid) || strlen($nid) != 10) {
        $errors[] = "Valid 10-digit NID is required.";
    }
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($bloodBankName)) {
        $errors[] = "Blood bank name is required.";
    }
    if (empty($adminRole)) {
        $errors[] = "Please select a role.";
    }
    if (empty($gender)) {
        $errors[] = "Please select a gender.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($phone) || !is_numeric($phone) || strlen($phone) != 11) {
        $errors[] = "Phone number must be 11 digits.";
    }
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }
    if ($confirmPassword !== $password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        $success = "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validation Result</title>
</head>
<body>

<?php
if (!empty($errors)) {
    echo "<h2 style='color:red;'>Errors:</h2><ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
} else {
    echo "<h2 style='color:green;'>$success</h2>";
}
?>

<a href="form.html">Go Back to Form</a>

</body>
</html>
