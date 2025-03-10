<html>
<body>
    <center>
    <h2>Registration Form</h2>
    <form action="submit_form.php" method="get">
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
        
        <label for="country">Choose your country:</label>
        <select name="country" id="country">
            <option value="">Select Country</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="France">France</option>
            <option value="Turkey">Turkey</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Russia">Russia</option>
            <option value="Denmark">Denmark</option>
        </select><br><br>
        
        <label for="pic">Upload photo:</label>
        <input type="file" id="pic" name="pic"><br><br>

        
        
        <input type="submit">

    </form>
</center>
</body>
</html>
