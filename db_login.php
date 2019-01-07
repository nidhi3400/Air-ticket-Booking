<?php

$conn = mysql_connect('localhost','root',NULL);
mysql_select_db("mydata",$conn);

$username = $_POST["user"];
$password = $_POST["psw"];

$resultset = mysql_query("SELECT * FROM db WHERE username='$username' AND password='$password'");
$count = mysql_num_rows($resultset);
if ($count != 0)
{
    echo "<script> window.location.assign('search.php'); </script>";
}
else
{
    echo 'Username or email not registered';
}
    
?>