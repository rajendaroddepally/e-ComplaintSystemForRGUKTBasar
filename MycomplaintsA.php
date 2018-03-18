<!DOCTYPE html>
<html lang="en">
<head>
  <title>eCS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="resource/bootstrap.min.css">
  <script src="resource/jquery.min.js"></script>
    <script src="resource/jquery.js"></script>
  <script src="resource/bootstrap.min.js"></script>
  <script src="resource/simple-sidebar.js"></script>
  <link href="resource/simple-sidebar1.css" rel="stylesheet">
    <link href="prof.css" rel="stylesheet">
  <script type="text/javascript" src="resource/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="resource/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="resource/font-awesome.min.css" />
<link rel="stylesheet" href="resource/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="resource/login_style.css" />
  <style>
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
    .row.content {height: 1500px}
   
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
 
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<!------------------navbar started----->
  <?php
include('session.php'); 
if(!isset($_SESSION['login_adm']))
{
header("location:Home.php");
}?>
<?php
include('headerbar.php');
?>
<?php
include('statusupdate.php');
?>
   <?php
   include('login_pop.php');
   ?>



<!----starting of hover nav bar that is wrapper-->
<?php
include('wrapper.php');
?>
<!-------this is end f hover nav bar-->    
   <?php
   include('dbConfig.php');
   $id=$login_adm;
   $q1="select * from admins where lid=$id";
   $res=mysql_query($q1);
   $rw=mysql_fetch_assoc($res);
   $mid=$rw['id'];
   echo $mid;
   $q2="select * from complaint where aid=$mid";
    $res1=mysql_query($q2);
    $num=mysql_num_rows($res1);
    echo $num; 
   $net=0;
   $n=0;
   ?> 
   
  <div class="col-sm-9" style="padding-left:60px">
    <h2 style="text-align:center;color:brown">Complaints</h2>
    <br>
    	<?php
	if($statusupdate==1)
	{
		echo "<div class='alert alert-warning'  style='width:100%;height:100px'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <h3 style='font-size:20px;text-align:center'>Status update Successfull <strong>login</strong> <a href='Make_C.php'><Strong>Home</strong></a>
					   	
	  				</div>"; 
	  		}
	  		?>
 <!--     <?php
      if($num==0)
  	echo "<h1 style='text-align:center'>You did not post any complaints</h2>";
  	?>-->
    <?php
    while($row=mysql_fetch_assoc($res1))
    {
    		$compid=$row['id'];
    		$sub=$row['subject'];
    		$compl=$row['complaint'];
    		$time=$row['created_at'];
    		$uid=$row['uid'];
      		$q5="select * from users where uid=$uid";
    		$res3=mysql_query($q5);
    		$row3=mysql_fetch_assoc($res3);
    		$userid=$row3['bid'];
    		$usermail=$row3['email'];
    		$username=$row3['fullname'];
    		$adname=$row1['name'];
    		$dept=$row1['did'];
    		$q4="select * from dept_name where did=$dept";
    		$res2=mysql_query($q4);
    		$row2=mysql_fetch_assoc($res2);
    		$dname=$row2['name'];
    ?>
  
    <div class="modal fade" id="myModal<?php echo $n;?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Complaint Details</h4>
        </div>
        <div class="modal-body" style="font-size:18px;">
        <b> Complaint id : </b> <?php echo $compid;?><br>
        <b> Posted by : </b> <?php echo $userid;?><br>
        <b> Email : </b> <?php echo $usermail;?><br>
         <b> Name : </b> <?php echo $username;?><br>
         <b> Subject : </b> <?php echo $sub;?><br>
          <b> Complaint : </b> <?php echo $compl;?><br>
	<b>Posted at :</b> <?php echo $time;?><br>
	<b>Solved Status :</b> <br>
	<b>Update Status:</b>
	<form role="form" action="" method="post">

		    <div class="radio">
		      <label><input type="radio" name="stat" value="1" required>Solved</label>
		    </div>
		    <div class="radio">
		      <label><input type="radio" name="stat" value="0">Not Solved</label>
		    </div>
		    <div class="radio">
		    <b>Are you sure to update status ? </b>
		      <label><input type="radio" name="stat1" value="<?php echo $compid;?> " required>Yes</label>
		      <label><input type="radio" name="stat1" value="<?php echo $compid;?>">No</label>
		    </div>
		    <input type="submit" name="updatestat" value="Update" class="btn-sm btn_lblue">
	  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      </div>
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p<?php echo $net;$net++;?>" id="problem">+ &nbsp;<?php echo $sub;?></p>
		<div id="p<?php echo $net-1;?>" class="collapse" >
				 <b> Complaint Id : </b> <?php echo $compid;?><br>
				<b>Complaint :</b> <?php echo $compl;?><br>
				<b>Posted at:</b> <?php echo $time;?><br>
				<br>
				<a href="#myModal<?php echo $n;?>"  data-toggle="modal" data-target="#myModal<?php echo $n;$n++?>" style="background:#80C5C5;border:none;" class="btn btn-warning btn-sm">View</a>
		</div>
    </div>	
    

    <?php
    }
    ?>
	<br>
	   
</div>
     	 <!--------------------------------------------------------------------->
    
  <script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
