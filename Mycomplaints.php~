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
if(!isset($_SESSION['login_user']))
{
header("location:Home.php");
}?>
<?php
include('headerbar.php');
?>
   <?php
   include('login_pop.php');
   ?>



<!----starting of hover nav bar that is wrapper-->
<?php
include('wrapper.php');
?>
<?php
include('statususer.php');
?>
<!-------this is end f hover nav bar-->    
   <?php
   include('dbConfig.php');
   $id=$login_session;
   $q1="select * from complaint where uid=$id";
   $res=mysql_query($q1);
   $num=mysql_num_rows($res);
   $net=0;
   $n=0;
   ?> 
   
  <div class="col-sm-9" style="padding-left:60px">
    <h2 style="text-align:center;color:brown">Complaints</h2>
     <?php
	if($statusus==1)
	{
		
		echo "<div class='alert alert-warning'  style='width:100%;height:100px'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <h3 style='font-size:20px;text-align:center'>Status update Successfull <strong>login</strong> <a href='Make_C.php'><Strong>Home</strong></a>
					   	
	  				</div>"; 
	  		}
	  		?>
    <br>
      <?php
      if($num==0)
  	echo "<h1 style='text-align:center'>You did not post any complaints</h2>";
  	?>
    <?php
    while($row=mysql_fetch_assoc($res))
    {
    		$status=0;
    		$compid=$row['id'];
    		$sub=$row['subject'];
    		$compl=$row['complaint'];
    		$time=$row['created_at'];
    		$aid=$row['aid'];
    		$stata=$row['stata'];
    		$statu=$row['statu'];
    		if($stata==1&&$statu==1)
    			$status=1;
    		$q5="select * from users where uid=$login_session";
    		$res3=mysql_query($q5);
    		$row3=mysql_fetch_assoc($res3);
    		$userid=$row3['bid'];
    		$usermail=$row3['email'];
    		$username=$row3['fname'];
    		$q3="select * from admins where id=$aid";
    		$res1=mysql_query($q3);
    		$row1=mysql_fetch_assoc($res1);
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
        <b> Id : </b> <?php echo $userid;?><br>
        <b> Email : </b> <?php echo $usermail;?><br>
         <b> Subject : </b> <?php echo $sub;?><br>
          <b> Complaint : </b> <?php echo $compl;?><br>
          <b>Department :</b> <?php echo $dname;?><br>
	<b>Administrator :</b> <?php echo $adname;?><br>
	<b>Posted at :</b> <?php echo $time;?><br>
	<b>Solved Status :</b><?php if($status==1)
							echo "Yes..Successfully solved";
						else
							echo "No..Not solved yet";?></b> <br>
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
