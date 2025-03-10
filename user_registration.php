<html>
<head>
    <title>User registration</title>
</head>    
<body>
    <center>
    <h2>User Registration Form</h2>
    <form action="consumer_form.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname"> <br><br>
        
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"> <br><br> 
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"> <br><br> 
        
        <label for="pwd">Password:</label>
        <input type="password" id="pwd" name="pwd"> <br> 
        
        <p>Please select your gender:</p>
        <input type="radio" id="male" name="gender" value="Male">
        <lable for="male">Male</lable>
        <input type="radio" id="female" name="gender" value="Female"> 
        <lable for="female">Female</lable>
        <input type="radio" id="other" name="gender" value="Other">
        <lable for="other">Other</lable><br><br>
        
        <label for ="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>
        
        <label for="phone">Enter your phone number:</label>
        <input type="tel" id="phone" name="phone" placeholder="123-45-6789" pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}"><br><br>

        <label for="nid">National ID:</label>
        <input type="text" id="nid" name="nid"> <br><br> 
        
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
        
        <input type="submit">

    </form>
</center>
</body>
</html>