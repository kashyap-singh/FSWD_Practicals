<?php
    if(isset($_POST["submit"]))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $contact=$_POST['contact'];
        $gender=$_POST['gender'];
        header("Location: index.php");
    }
?>
<html>
    <head>
        <title> Forms </title>
    </head>
    <body>
        <form method="post" action="index.php">
            Username:<input type="text" name="username" required><br>
            Email<input type="email" name="email" required><br>
            Contact<input type="tel" name="contact" pattern="[0-9]{10}"><br>
            Gender:<input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female<br>
            City:
            <select name="city">
                <option value="mumbai">Mumbai</option>
                <option value="delhi">Delhi</option>
                <option value="jaipur">Jaipur</option>
                <option value="mussoorie">Mussoorie</option>
                <option value="nanital">Nanital</option>
                <option value="chennai">Chennai</option>S
                <option value="pune">Pune</option>
                <option value="bangalore">Bangalore</option>
                <option value="hydrabad">Hydrabad</option>
                <option value="lucknow">Lucknow</option>
            </select><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>