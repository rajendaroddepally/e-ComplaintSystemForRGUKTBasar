<?php
include('dbConfig.php');
session_start();
// Storing Session
$user_check=$_SESSION['login_user'];
$admin=$_SESSION['admin'];
$login_session=$user_check;
if($admin==1)
{
	$login_adm=$_SESSION['login_adm'];	
	 $q1="select * from admins where lid=$login_adm";
	$res=mysql_query($q1);
	$row=mysql_fetch_assoc($res);
	$admid=$row['id'];
	$cabin=$row['cabin'];
	$admname=$row['name'];
	$admemail=$row['email'];
	$admphone=$row['phone'];
	$depid=$row['did'];
	}
// SQL Query To Fetch Complete Information Of User
$q2="select * from users where bid='$user_check'";
$res1=mysql_query($q2);
$row = mysql_fetch_assoc($res1);
$login_session =$row['uid'];
$loginid =$row['bid'];
$loginbranch =$row['branch'];

?>
