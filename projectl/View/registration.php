<?php
include "../Controller/validation.php";
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="userreg.css">
</head>    
<body>
    <center>
        <?php if (!empty($fileErr)) { ?>
            <p style="color: violet; font-weight: bold;"><?php echo $fileErr; ?></p>
        <?php } ?>
    <h2>User Registration Form</h2>
    <!--<img src="../image/blood.jpg" width="300" height="200">-->
    <b>
        
    <form action="" name="userform" onsubmit="return validation()" method="post" enctype="multipart/form-data">
    
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" class="fname"> <br>
        <!--<span class="error" id="fError"></span><br><br>--><br><br>
        
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" class="fname"> <br>
        <!--<span class="error" id="lError"></span><br><br>--><br><br>

          <label for="uname"> User Name : </label>
        <input type="text" id="uname" name="uname">
        <!--<span class="error" id="UserError"></span>--><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="fname"> <br>
        <!--<span class="error" id="passError"></span><br><br>--><br><br>
        
        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="pwd" > <br>
        <!--<span class="error" id="passError"></span><br><br>--><br><br> 
        
        <p>Please select your gender:</p>
        <input type="radio" id="male" name="gender" value="Male">
        <lable for="male">Male</lable>
        <input type="radio" id="female" name="gender" value="Female"> 
        <lable for="female">Female</lable>
        <input type="radio" id="other" name="gender" value="Other">
        <lable for="other">Other</lable><br><br>
        <!-- <span class="error" id="genderError"></span><br><br><br><br> -->
        
        <label for="phone">Enter your phone number:</label>
        <input type="tel" id="phone" name="phone" placeholder="123-45-6789" ><br>
        <!--<span class="error" id="phoneError"></span><br><br>--><br><br>

        <label for="nid">National ID:</label>
        <input type="text" id="nid" name="nid"><br><br> 
        
        <label for="blood">Choose your blood group:</label>
        <select name="blood" id="blood">
            <option value="">Select Blood Group</option>
            <option value="A+ve">A+ve</option>
            <option value="B+ve">B+ve</option>
            <option value="A-ve">A-ve</option>
            <option value="B-ve">B-ve</option>
            <option value="AB+ve">AB+ve</option>
            <option value="AB-ve">AB-ve</option>
            <option value="O+ve">O+ve</option>
            <option value="O-ve">O-ve</option>
            <option value="Other">Other</option>
        </select><br><br>
        
        <label for="pic">Upload photo:</label>
        <input type="file" id="pic" name="pic"><br><br>
        
        <input type="submit" name="register" class="btn submit" value="register">
        <input type="reset" class="btn reset" value="Reset">     

    </form>
</b>
</center>
</body>
</html>