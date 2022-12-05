<?php

$pass = $_POST["password"];
$pass_con = $_POST["password_con"];

if($pass = $pass_con){
    echo '<p style="color:red">incorrect password confirmation. please retry</p>';
}
else{
    echo "<p style='color:blue'>Sign up was successful...</p>";
}




?>