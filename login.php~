<?php
session_start();
$error=''; 
if(isset($_SESSION['login_user']))
{
header("location: Home.php");
}
if (isset($_POST['submit'])) 
{

   $id=$_POST['id'];
   $pwd=$_POST['pwd'];
   if(trim($id)==''&&trim($pwd)=='')
   {
   	$error="enter anything";
   }
    else
    {
       	include('dbConfig.php');
       	$admin=0;
       	$q1="select * from users where pwd='$pwd' AND bid='$id';";
        $res= mysql_query($q1);
        $rows = mysql_num_rows($res);
        if ($rows==1) 
        {
            $_SESSION['login_user']=$id; 
            $_SESSION['id']=$res['bid']; 
            $_SESSION['uid']=$res['uid'];
            $_SESSION['admin']=0;
            header("location:Home.php"); // Redirecting To Other Page
        }
        else 
        {
           $q2="select * from admins where lid='$id' AND pwd='$pwd'";
           $res1= mysql_query($q2);
          $rows1 = mysql_num_rows($res1);
          echo "admin";
		  if ($rows1==1) 
		 {
		 	 
		    $_SESSION['login_adm']=$id; 
		    $_SESSION['login_user']=$id; 
		    $_SESSION['admin']='1';
                    header("location:profileA.php");
		    // Redirecting To Other Page
		}
		
        }
        mysql_close($connection);
    }
}
?>
