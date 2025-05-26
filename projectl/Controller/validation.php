<?php
include "../Model/data.php"; 
?>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <center>
    <?php 
    $fNameError="";
    $lNameError="";
    $emailError="";
    $passError="";
    $phnError="";
    $genderError="";
    $unameError="";
    $fileErr = "";
    $errorTrace = 0;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_REQUEST["fname"]))
     {
        $fNameError="Invalid First Name";
        $errorTrace = 1;
 
     }
     else{
        echo $_REQUEST["fname"]."<br>";
     }

     if(empty($_REQUEST["lname"]))
     {
        $lNameError="Invalid Last Name";
        $errorTrace = 1;
     }
     else{
        echo $_REQUEST["lname"]."<br>";
     }

     if(empty($_REQUEST["uname"]))
     {
        $unameError="Invalid user name";
        $errorTrace = 1;
     }
     else{
        echo $_REQUEST["uname"]."<br>";
     }

     if (empty($_REQUEST["email"])) {
        $emailError = "Email is required";
        $errorTrace = 1;
    } else if (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid Email Format";
        $errorTrace = 1;
    } else {
        echo $_REQUEST["email"]."<br>";
    }
    $passError = "";

    if (empty($_REQUEST["pwd"])) {
    $passError = "Password is required";
    $errorTrace = 1;
      } else if (strlen($_REQUEST["pwd"]) < 6) {
       $passError = "Password must be at least 6 characters long";
       $errorTrace = 1;
      }

      if(empty($_REQUEST["phone"])){
        $phnError="Phone number is required";
        $errorTrace = 1;
      }
      else if(strlen($_REQUEST["phone"]) != 11)
      {
        $phnError="Phone number must be exactly 11 digits";
        $errorTrace = 1;
      }
      if (!isset($_REQUEST["gender"])) {
          $genderError = "Gender is required";
      } else {
          $gender = $_REQUEST["gender"];
      }

      if ($_FILES["pic"]["name"] == "") {
    echo "No files Uploaded"; 
} else {
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);

    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        echo "File uploaded successfully.<br>";
    } else {
        echo "Sorry, file upload failed.";
    }
}

     /* if ($_FILES["pic"]["name"] == "") {
        $fileErr = "No file Upload";
    } else {
        if ($_FILES["pic"]["size"] > 2097152) {
            $fileErr = "File too large";
        } else {
            if ($_FILES["pic"]["type"] != "image/jpeg" && $_FILES["pic"]["type"] != "image/png" && $_FILES["pic"]["type"] != "application/pdf") {
                $fileErr = "Invalid file type";
            } else {
                if (move_uploaded_file($_FILES["pic"]["tmp_name"], "uploads/" . $_REQUEST["fname"] . "-" . $_FILES["pic"]["name"])) {
                    $fileErr = "File Uploaded";
                } else {
                    $fileErr = "File Upload Failed";
                }
            }
        }*/

         if($errorTrace==0)
    {
        $conn=createCon();
        insertData($conn,$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["email"],$_REQUEST["pwd"],$_REQUEST["phone"],$_REQUEST["uname"]);
        closeCon($conn);
       
    }
    }
    
    ?>
</center>
</body>
</html>