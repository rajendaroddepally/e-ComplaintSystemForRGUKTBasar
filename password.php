<?php
$s=0;
include('session.php');
if(!isset($_POST['submit'])&&isset($_POST['submit1']))
{
	include('dbConfig.php');
			
		$p1=$_POST['newp2'];
		$p2=$_POST['newp1'];
		
		if($p1==$p2)	
		{
			$SQL = "UPDATE users SET pwd='$p1' WHERE uid='$login_session'";
			$result = mysql_query($SQL);
			if($result)
				$s=1;
		}
		else
		{
			$error1=1;
			$error="Two passwords should be same...Try again";
		}
}	
?>
