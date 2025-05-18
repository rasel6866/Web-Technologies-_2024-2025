<?php
$adminId = $adminName = $nid = $username = $bloodBankName = $adminRole = $gender = $email = $phone = $password = $confirmPassword = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function sanitize($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Validate inputs
    if (empty($_POST["adminId"])) $errors["adminId"] = "Admin ID is required";
    else $adminId = sanitize($_POST["adminId"]);

    if (empty($_POST["adminName"])) $errors["adminName"] = "Full Name is required";
    else $adminName = sanitize($_POST["adminName"]);

    if (empty($_POST["nid"])) $errors["nid"] = "NID is required";
    elseif (!is_numeric($_POST["nid"])) $errors["nid"] = "NID must be a number";
    else $nid = sanitize($_POST["nid"]);

    if (empty($_POST["username"])) $errors["username"] = "Username is required";
    else $username = sanitize($_POST["username"]);

    if (empty($_POST["bloodBankName"])) $errors["bloodBankName"] = "Blood Bank Name is required";
    else $bloodBankName = sanitize($_POST["bloodBankName"]);

    if (empty($_POST["adminRole"])) $errors["adminRole"] = "Please select a role";
    else $adminRole = sanitize($_POST["adminRole"]);

    if (empty($_POST["gender"])) $errors["gender"] = "Please select your gender";
    else $gender = sanitize($_POST["gender"]);

    if (empty($_POST["email"])) $errors["email"] = "Email is required";
    elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $errors["email"] = "Invalid email format";
    else $email = sanitize($_POST["email"]);

    if (empty($_POST["phone"])) $errors["phone"] = "Phone number is required";
    else $phone = sanitize($_POST["phone"]);

    if (empty($_POST["password"])) $errors["password"] = "Password is required";
    else $password = $_POST["password"];

    if (empty($_POST["confirmPassword"])) $errors["confirmPassword"] = "Confirm your password";
    elseif ($_POST["password"] !== $_POST["confirmPassword"]) $errors["confirmPassword"] = "Passwords do not match";
    else $confirmPassword = $_POST["confirmPassword"];

    // If no errors, redirect to dashboard
    /*if (empty($errors)) {
        // You can insert into DB here instead
        header("Location: dashboard.php");
        exit();
    }*/
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<center>
    <h2>Admin Registration</h2>
    <img src="../image/bloodadmin.jpg" width="300" height="200"><br>
    <p class="ex1">This is css max-width;</p>
    <p>Welcome! to the BBNS Admin registration form. Please register if you haven't any previous account. Register all the box carefully</p>
    <b>
    <form name="userform" action="" method="post">

        <label for="adminId">Admin ID:</label>
        <input type="text" id="adminId" name="adminId" value="<?php echo $adminId; ?>">
        <span class="error"><?php echo $errors['adminId'] ?? ''; ?></span><br><br>

        <label for="adminName">Full Name:</label>
        <input type="text" id="adminName" name="adminName" value="<?php echo $adminName; ?>">
        <span class="error"><?php echo $errors['adminName'] ?? ''; ?></span><br><br>

        <label for="nid">NID Number:</label>
        <input type="text" id="nid" name="nid" value="<?php echo $nid; ?>">
        <span class="error"><?php echo $errors['nid'] ?? ''; ?></span><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>">
        <span class="error"><?php echo $errors['username'] ?? ''; ?></span><br><br>

        <label for="bloodBankName">Blood Bank Name:</label>
        <input type="text" id="bloodBankName" name="bloodBankName" value="<?php echo $bloodBankName; ?>">
        <span class="error"><?php echo $errors['bloodBankName'] ?? ''; ?></span><br><br>

        <label for="adminRole">Admin Role:</label>
        <select id="adminRole" name="adminRole">
            <option value="">Select Role</option>
            <option value="Manager" <?php if ($adminRole == "Manager") echo "selected"; ?>>Manager</option>
            <option value="Staff" <?php if ($adminRole == "Staff") echo "selected"; ?>>Staff</option>
        </select>
        <span class="error"><?php echo $errors['adminRole'] ?? ''; ?></span><br><br>

        <p>Select Gender:</p>
        <input type="radio" id="male" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="Other" <?php if ($gender == "Other") echo "checked"; ?>>
        <label for="other">Other</label>
        <span class="error"><?php echo $errors['gender'] ?? ''; ?></span><br><br>

        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $errors['email'] ?? ''; ?></span><br><br>

        <label for="phone">Contact Number:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
        <span class="error"><?php echo $errors['phone'] ?? ''; ?></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error"><?php echo $errors['password'] ?? ''; ?></span><br><br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
        <span class="error"><?php echo $errors['confirmPassword'] ?? ''; ?></span><br><br>

        <input type="submit" value="Register" class="btn submit">
        <input type="submit" value="Reset" class="btn submit">

    </form>
    </b>
</center>
</body>
</html>
