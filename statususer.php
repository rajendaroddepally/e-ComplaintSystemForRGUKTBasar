<?php
     $statusus=0;
    if(isset($_POST['updatestat']))
    {
    $stat=$_POST['stat'];
    $cid=$_POST['stat1'];
    include('dbConfig.php');
    $qq= "UPDATE complaint SET statu='$stat' WHERE id='$cid'";
    $result1=mysql_query($qq);
    if($result1)
    {
    	$statusus=1;
    }
    }
 ?>

