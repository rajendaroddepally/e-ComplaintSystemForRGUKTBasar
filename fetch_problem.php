<?php
if(isset($_POST['submit']))
{
	  include('dbConfig.php');
	 $dept = $_POST['department'];
	 ?>
	 <br> <h3> Problem </h3>
	 <?php
	 $q1="SELECT *  FROM dept_name where name='$dept'";
	$res=mysql_query($q1);
	$row1=mysql_fetch_assoc($res);
	$did=$row1['did'];
	$q2="Select * from admins where did='$did'";
	$res1=mysql_query($q2);
	$rc= mysql_num_rows($res1);
	echo "<select name='admin'>";
	if($rc>0)
	{
		 while($row=mysql_fetch_assoc($res1))
		 {
		 echo "<option value=".$row['name'].">".$row['name']."</option>"; 
		 }
	}
}
?>
