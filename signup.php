<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment Management System</title>
  
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <script src="lib/jquery/jquery-2.2.4.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 
  <style>
  
  
  
  
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius:10;
    }
    #button1{
    	
    font-weight: bold;
     color: #ffffff;
    background-color: #6666CC;
    width: 100px;
   
    padding: 2px;
    
   }
  
   
   
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height:450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 40px;
      background-color:  #f9f9f9;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
.dropdown{
	text-align:right;
	margin-left:1215px;
	margin-top:45px;
	}
.dropdown-menu{
		text-align:right;
		margin-left:-80px;
		}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background:#6666CC;height:80px;">
    <div class="navbar-header" style="font-color:blue">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
 <a class="navbar-brand" href="#">
<img src="/new/rgukt.png" height=60 width=60></img></a>
      <a class="navbar-brand" align=corner style="color:white;font-size:32px;" href="#"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appointment Management System
</a>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">please SignUp
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	
  </ul>

</div>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <p><a id="link1" href="/index.php" >Home</a></p>
    <br>
      <p><a id="link2" href="/new/appoint_faculty_vc.php">Check availability</a></p>
	<br>
      <p><a id="link3" href="/new/fac_status.php">Check status</a></p>
	<br>
      <p><a id="link4" href="/new/appoint_faculty_vc.php">Set Appointment</a>
	<br><br>
      <p><a id="link5" href="/new/fac_yourappoints.php">Your appointments</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
    
    <?php
   
     if(isset($_POST['username']))
	{
		
	$cuser=$_POST['username'];
	$pwd1=$_POST['password'];
	$f1=$_POST['f1'];
	$l1=$_POST['l1'];
	if(isset($_POST['usertype']))
	{
	$usertype=$_POST['usertype'];
	
	
	
	echo $cuser." ".$pwd1." ".$f1." ".$l1." ".$usertype." ";
	
	$cn=mysql_connect("localhost","root","") or die("could not connect");
	$db=mysql_select_db("AMSinfo",$cn) or die ("coult not connect to database");
	if($db)
	//echo "db found";
	$q1="select * from LoginInfo";
	//$q1="select * from Appointments";
	
	
	$r1=mysql_query($q1);
	$counter1=1;
	while($list1=mysql_fetch_assoc($r1))
	{
		$counter1++;
	}
	
	
	
	$q3="insert into LoginInfo values('$counter1','$cuser','$pwd1','$usertype')";
	//$r3=mysql_query($q3);
	$q4="";
	if($usertype==1)
	$q4="insert into StudentInfo values('$counter1','$cuser','$pwd1','$f1','$l1','','','')";
	else if($usertype==2)
	$q4="insert into FacultyInfo values('$counter1','$cuser','$pwd1','$f1','$l1','','','','','','','','','','','','','','')";
	else
	$q4="insert into VCInfo values('$counter1','$cuser','$pwd1','$f1','$l1','','','','','','','','','','','','','')";
	
	
	
	
	
	$r3=mysql_query($q3);
	if($r3)
	echo "found";
	$r4=mysql_query($q4);
	
	if($r3 and $r4)
	{	
		session_start();
		$_SESSION["username"]=$cuser;
		$_SESSION["usertype"]=$usertype;
		$_SESSION["refno"]=$counter1;
		
		/*
		$target_dir = "photo/";
		$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
		
		*/
		
		
		$ext = substr($_FILES['fileToUpload']['name'], strpos($_FILES['fileToUpload']['name'],'.'), strlen($_FILES['fileToUpload']['name'])-1);     
    $imageName = "$counter1".$ext;
    $normalDestination = "photo/" . $imageName;
    
    		if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $normalDestination))
    		{
		if($usertype==1)
		header("location:/new/stu_signup.php");
		else if($usertype==2)
		header("location:/new/fac_signup.php");
		else
		header("location:/new/vc_signup.php");
		}
		else
		echo "problem with uploading photo";
	}
	else
	echo "not updated";
	
	/*
	$res=mysql_query($query);
	
	$fo=1;
	$found=1;
	$cusertype="";
	
	while($list=mysql_fetch_assoc($res))
	{
		if($list['userid']==$cuser)
		{
			$found="0";
			$cusertype=$list['usertype'];
			//echo "loggedin successfully";
			
		//	echo $list['userid']." ".$list['usertype'];
			
			$q5="UPDATE LoginInfo SET password='$pwd1' where userid='$cuser'"; 
			$q6="";
			if($cusertype==1)
			$q6="UPDATE StudentInfo SET password='$pwd1' where username='$cuser'"; 
			else if($cusertype==2)
			$q6="UPDATE FacultyInfo SET password='$pwd1' where username='$cuser'"; 
			else
			$q6="UPDATE VCInfo SET password='$pwd1' where username='$cuser'"; 
			
			$r6=mysql_query($q6);
			
			
			$r5=mysql_query($q5);
			if($r5 and $r6)
			{
				echo "<h4>updated successfully </h4>";
			}
			else
			{
				echo "<h4>not updated</h4>";
			}
			
			
			
			
		}
		
		
	}
	if($found==1)
	echo "<h4 style='align:center'>Warning :You have entered invalid Details.Please check again</h4>";
	
	}
	else
	echo "<h4 style='align:center'>Warning :Entered passwords are different.Reenter again</h4>";
	
	
	
	*/
	
	
	}
	else
	echo "<h4>Warning :please fill the details</h4>";
	
}
	
	
?>
	
 <p style="algin:center">    
<form style="text-align:center" method="post" action="" enctype="multipart/form-data">
<br>
<br>
<br>

  Username:&nbsp;<input type="text" style="width:200px;height:30px" name="username">
  <br><br>
  Password:&nbsp;<input type="password" style="width:200px;height:30px" name="password">
 <br><br>
  Firstname:&nbsp;<input type="text" style="width:200px;height:30px" name="f1">
  <br><br>
  Lastname:&nbsp;<input type="text" style="width:200px;height:30px" name="l1">
  <br><br>
  Choose Photo<input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
 Type of user<input type="radio" name="usertype" value=1 >Student
<input type="radio" name="usertype" value=2 >Faculty(or related)
<input type="radio" name="usertype" value=3 >VC
  <br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input id="button1" type="submit" value="signup">
<br><br>
</form>

</p>
    </div>
    
  </div>
</div>
<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><a href="/new/appoint_student_vc.php" style=font-size:18px>Appointment to V.C</h4>
        </div>
        <div class="modal-body">
          <p><a href="/new/appoint_faculty_lists.php" style=font-size:18px>Appointment to Faculty</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><a href=/new/appoint_student_vc.php" style=font-size:18px>Availability of V.C</h4>
        </div>
        <div class="modal-body">
          <p><a href="/new/appoint_faculty_lists.php" style=font-size:18px>Availability of Faculty</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<footer class="container-fluid text-center">
  <p><a href="/new/about.html" style=font-size:20px;color:pink;>About us...</a></p>
</footer>

</body>
</html>

