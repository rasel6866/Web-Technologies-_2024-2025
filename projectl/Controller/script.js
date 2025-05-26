function Validation() {
    let first = document.forms["userform"]["fname"].value;
    let last = document.forms["userform"]["lname"].value;
    let email = document.forms["userform"]["email"].value;
    let pass = document.forms["userform"]["pwd"].value;
    let phone = document.forms["userform"]["phone"].value;
    let nid = document.forms["userform"]["nid"].value;
    let blood = document.forms["userform"]["blood"].value;
    let gender = document.querySelector('input[name="gender"]:checked');

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (first === "") {
        document.getElementById("ferror").innerHTML = "First name is required";
        return false;
    } else {
        document.getElementById("ferror").innerHTML = "";
    }

    if (last === "") {
        document.getElementById("lerror").innerHTML = "Last name is required";
        return false;
    } else {
        document.getElementById("lerror").innerHTML = "";
    }

    if (email === "") {
        document.getElementById("mailError").innerHTML = "Email is required";
        return false;
    } else if (!emailPattern.test(email)) {
        document.getElementById("mailError").innerHTML = "Invalid email format";
        return false;
    } else {
        document.getElementById("mailError").innerHTML = "";
    }

    if (pass.length < 6) {
        document.getElementById("passError").innerHTML = "Password must be at least 6 characters";
        return false;
    } else {
        document.getElementById("passError").innerHTML = "";
    }

    if (phone.length !== 11 || isNaN(phone)) {
        document.getElementById("phoneError").innerHTML = "Phone number must be exactly 11 digits";
        return false;
    } else {
        document.getElementById("phoneError").innerHTML = "";
    }

    if (!gender) {
        document.getElementById("genderError").innerHTML = "Please select a gender";
        return false;
    } else {
        document.getElementById("genderError").innerHTML = "";
    }

    if (nid === "") {
        document.getElementById("nidError").innerHTML = "National ID is required";
        return false;
    } else {
        document.getElementById("nidError").innerHTML = "";
    }

    if (blood === "") {
        document.getElementById("bloodError").innerHTML = "Please select your blood group";
        return false;
    } else {
        document.getElementById("bloodError").innerHTML = "";
    }

    return true;
}
