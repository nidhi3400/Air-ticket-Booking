<?php

$conn = mysql_connect('localhost','root',NULL);
echo "Connected to MySQL <br>";
mysql_select_db("mydata",$conn);

$username = $_POST["user"];
$email = $_POST["email"];
$password = $_POST["psw"];

$resultset = mysql_query("SELECT * FROM db WHERE username='$username' OR email='$email'");
$count = mysql_num_rows($resultset);
if ($count == 0)
{
    mysql_query("INSERT INTO db(username,email,password) VALUES('$username','$email','$password')");
    echo 'Successfully registered';
}
else
{
    echo 'username or email already exist';
}
    
?>


