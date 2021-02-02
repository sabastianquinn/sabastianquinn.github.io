<?php
get values passed from form
$username=$_POST['user'];
$password=$_POST['pass'];
//to help with security I think
$username=stripcslashes($username);
$password=stripcslashes($password);
//probably not supported unless using sql?
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
//connect to the server and choose database instead of github.com/sabastianquinn his was just "localhost" <- a domain name?
mysql_connect("github.com/sabastianquinn", "root", "");
//choosing the database probably have to name the login file name "login"
mysql_select_db("login");

//ask the database for this user???????
$result=mysql_query("select* from users where username='$username' and password='$password'") or die("Faile to query database" mysql_error());
$row=mysql_fetch_array($result);
if ($row['$username']==$username && $row['$password']==$password){
echo "Login Success!";}
else{echo "Failed to login";
}

?>
