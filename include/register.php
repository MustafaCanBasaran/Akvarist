<?php 
session_start();
ob_start();
require_once "databaseConn.php";

$username=$_POST["username"];
$name_lastname=$_POST["name_lastname"];
$password_user=$_POST["password_user"];

if (preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $username) && preg_match("/[\-]{2,}|[;]|[']|[\\\*]/", $password_user))
{
	header("location:../register.php?err4");
}

$username=trim($username);
$name_lastname=trim($name_lastname);
$password_user=trim($password_user);
$password_user=md5($password_user);
$registerDate=date('Y.m.d H:m:s');



$registerCheck=mysql_fetch_row(mysql_query("SELECT * FROM users WHERE user_name='$username'"));
if($registerCheck[1]!=$name_lastname) {

if($username!="" && $name_lastname!="" && $password_user!="" && strlen($username)>4) {
	$addUser=mysql_query("INSERT INTO users (user_name,pass_user,name_lastname,register_date,lastlogin_date) VALUES ('$username','$password_user','$name_lastname','$registerDate','')");
	
	if($addUser) {
		header("location:../index.php?succ");
	} else {
		header("location:../index.php?err1");
	}

} else {
	header("location:../register.php?err2");
}

} else {
	header("location:../register.php?err3");
}

?>