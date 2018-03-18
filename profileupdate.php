<?php
$success=0;
include('session.php');
if(isset($_POST['submit'])&&!isset($_POST['submit1']))
{
	include('dbConfig.php');
		echo $login_session;
		$uname=$_POST['uname'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$bday=$_POST['bday'];
		$class=$_POST['class'];
		$dorm=$_POST['dorm'];
		$sem=$_POST['sem'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
	$SQL = "UPDATE users SET uname='$uname',fname='$fname',lname='$lname',bday='$bday',class='$class',sem='$sem',dorm='$dorm',email='$email',phone='$phone' WHERE uid='$login_session'";
	$result = mysql_query($SQL);
	if($result)
		 $success=1;
}
?>
