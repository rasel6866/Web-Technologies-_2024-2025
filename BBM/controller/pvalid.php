<?php
include "../model/db.php";

$adminIdError = "";
$adminNameError = "";
$nidError = "";
$usernameError = "";
$bloodBankError = "";
$adminRoleError = "";
$genderError = "";
$emailError = "";
$phoneError = "";
$passwordError = "";
$confirmPasswordError = "";
$errorTrace=0;

   if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if  (empty($_REQUEST["adminId"])) {
        $adminIdError = "Admin ID is required";
        $errorTrace=1;
    }
    else{
        echo $_REQUEST["adminId"]."<br>";
    }

    if (empty($_REQUEST["adminName"])) {
        $adminNameError = "Full name is required";
        $errorTrace=1;
    }
         
    else{
        echo $_REQUEST["adminName"]."<br>";
    }


    if (empty($_REQUEST["nid"])) {
        $nidError = "NID number is required";
        $errorTrace=1;
    } elseif (!is_numeric($_REQUEST["nid"]) || strlen($_REQUEST["nid"]) < 10) {
        $nidError = "NID must be at least 10 digits";
        $errorTrace=1;
    }

    else{
        echo $_REQUEST["nid"]."<br>";
    }

    if (empty($_REQUEST["username"])) {
        $usernameError = "Username is required";
        $errorTrace=1;
    }

    else{
        echo $_REQUEST["username"]."<br>";
    }

    if (empty($_REQUEST["bloodBankName"])) {
        $bloodBankError = "Blood Bank name is required";
        $errorTrace=1;
    }

    else{
        echo $_REQUEST["bloodBankName"]."<br>";
    }

    if (empty($_REQUEST["adminRole"])) {
        $adminRoleError = "Admin Role is required";
    }

    else{
        echo $_REQUEST["adminRole"]."<br>";
    }
    
    if (!isset($_REQUEST["gender"])) {
        $genderError = "Gender is required";
    }
   
    else{
        echo $_REQUEST["gender"]."<br>";
    }


    if (empty($_REQUEST["email"])) {
        $emailError = "Email is required";
        $errorTrace=1;
    } elseif (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
        $errorTrace=1;
    }

    if (empty($_REQUEST["phone"])) {
        $phoneError = "Phone number is required";
    } elseif (!is_numeric($_REQUEST["phone"]) || strlen($_REQUEST["phone"]) != 11) {
        $phoneError = "Phone number must be exactly 11 digits";
    }

    if (empty($_REQUEST["password"])) {
        $passwordError = "Password is required";
        $errorTrace=1;
    } elseif (strlen($_REQUEST["password"]) < 0) {
        $passwordError = "Password must be at least 6 characters long";
        $errorTrace=1;
    }

    if (empty($_REQUEST["confirmPassword"])) {
        $confirmPasswordError = "Confirm password is required";
    } elseif ($_REQUEST["confirmPassword"] !== $_REQUEST["password"]) {
        $confirmPasswordError = "Passwords do not match";
    }


    // if($_FILES["myfile"]["name"]=="")
    //   {
    //     echo "no file uploaded";
    //   }
    

      
    //   else {
    //             $fileExt = pathinfo($_FILES["myfile"]["name"], PATHINFO_EXTENSION);
    //            $targetPath = "../downloded/" . "image_" . date("Ymd_His") . "." . $fileExt;
    //             move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetPath);
    //         }

                      if($errorTrace==0)
    {
        $conn=createCon();
        insertData($conn,$_REQUEST["adminId"],$_REQUEST["adminName"],$_REQUEST["nid"],$_REQUEST["username"],$_REQUEST["bloodBankName"],$_REQUEST["email"],$_REQUEST["password"]);
        echo "Insert text";
        closeCon($conn);
       
    }

}
?>