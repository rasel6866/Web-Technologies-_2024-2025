function Validation() {
    // Get values from form
    let adminId = document.forms["userform"]["adminId"].value;
    let adminName = document.forms["userform"]["adminName"].value;
    let nid = document.forms["userform"]["nid"].value;
    let username = document.forms["userform"]["username"].value;
    let bloodBankName = document.forms["userform"]["bloodBankName"].value;
    let adminRole = document.forms["userform"]["adminRole"].value;
    let email = document.forms["userform"]["email"].value;
    let phone = document.forms["userform"]["phone"].value;
    let password = document.forms["userform"]["password"].value;
    let confirmPassword = document.forms["userform"]["confirmPassword"].value;
    let selectedGender = document.querySelector('input[name="gender"]:checked');
 
     // Clear previous error messages
     let errorFields = [
        "adminIdError", "adminNameError", "nidError", "usernameError",
        "bloodBankError", "adminRoleError", "genderError", "emailError",
        "phoneError", "passwordError", "confirmPasswordError"
    ];
    errorFields.forEach(id => document.getElementById(id).innerHTML = "");

 
    // Validation checks
    if (adminId === "") {
        document.getElementById("adminIdError").innerHTML = "Admin ID is required";
        return false;
    }
    if (adminName === "") {
        document.getElementById("adminNameError").innerHTML = "Full name is required";
        return false;
    }
    if (nid === "" || isNaN(nid) || nid.length !== 10) {
        document.getElementById("nidError").innerHTML = "Valid 10-digit NID is required";
        return false;
    }
    if (username === "") {
        document.getElementById("usernameError").innerHTML = "Username is required";
        return false;
    }
    if (bloodBankName === "") {
        document.getElementById("bloodBankError").innerHTML = "Blood bank name is required";
        return false;
    }
    if (adminRole === "") {
        document.getElementById("adminRoleError").innerHTML = "Please select a role";
        return false;
    }
    if (!selectedGender) {
        document.getElementById("genderError").innerHTML = "Please select a gender";
        return false;
    }
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        document.getElementById("emailError").innerHTML = "Email is required";
        return false;
    } else if (!emailPattern.test(email)) {
        document.getElementById("emailError").innerHTML = "Invalid email format";
        return false;
    }
    if (phone === "" || isNaN(phone) || phone.length !== 11) {
        document.getElementById("phoneError").innerHTML = "Phone number must be 11 digits";
        return false;
    }
    if (password.length < 6) {
        document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters";
        return false;
    }
    if (confirmPassword !== password) {
        document.getElementById("confirmPasswordError").innerHTML = "Passwords do not match";
        return false;
    }
 
    // If all validations pass
    return true;
}