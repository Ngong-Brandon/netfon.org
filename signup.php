<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="StyleSheet" href="../fon.css/main.css">
    <link rel="HyperText" href="index.html">
</head>
<body>
    <h1>Sign up</h1>
    <hr color = "skyblue">

    <form action="signup.php" method="post">
<label for="FirstName">FirstName:</label><br>
<input type="text" name="FirstName" placeholder="FirstName" required><br><br>

<label for="LastName">LastName:</label><br>
<input type="text" name="LastName" placeholder="LastName" required><br><br>

<label for="Email">Email:</label><br>
<input type="email" name="Email" placeholder="Email" required><br><br>

<label for="password">Password:</label><br>
<input type="password" id="passid" name="password" placeholder="atleast 8 characters" maxlength="8" required><br>
<input type="checkbox" onclick="showpass()"><b id="check">Show password</b><br><br>


<label for="password">Confirm:</label><br>
<input type="password" id="passid2"  name="password_con" placeholder="confirm password" maxlength="8" required>
<br>
<?php

$pass = $_POST["password"];
$pass_con = $_POST["password_con"];

if($pass === $pass_con){
    echo "";

}
else{
    echo '<p style="color:red">incorrect password confirmation. please retry</p>';

}




?>

Gender:<br>
<select name="gender" id="">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Custom">Custom</option>

</select>
<p><input type="submit" value="sign up"></p>

    </form>

    <hr color="gray">

Netfon.com




    <script src = "main.js"></script>
</body>
</html>