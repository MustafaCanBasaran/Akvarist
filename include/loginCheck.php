<?php 
session_start();
ob_start();
require_once "databaseConn.php";

$users_name=$_POST["users_name"];
$password_user=$_POST["password_user"];

$users_name=trim($users_name);
$password_user=trim($password_user);
$password_user=md5($password_user);
$LoginDateTime=date('Y.m.d H:m:s');

if($users_name!="" && $password_user!="") {
	$Check=mysql_fetch_row(mysql_query("SELECT * FROM users WHERE user_name='$users_name' AND pass_user='$password_user'"));
	if($Check[1]==$users_name && $Check[2]==$password_user) {
		$_SESSION["login"]="1";
		$_SESSION["loginID"]=$Check[0];
		$LastLogin=mysql_query("UPDATE users SET lastlogin_date='$LoginDateTime' WHERE id=$Check[0]");
		header("location:../main.php");
	} else {
		header("location:../index.php?err3");
	}
} else {
	header("location:../index.php?err2");
}

?>