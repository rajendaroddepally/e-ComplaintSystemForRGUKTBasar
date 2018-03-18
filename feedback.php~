<!DOCTYPE html>
<html lang="en">
<head>
  <title>eCS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="resource/bootstrap.min.css">
  <script src="resource/jquery.min.js"></script>
  <script src="resource/bootstrap.min.js"></script>
  <script src="resource/simple-sidebar.js"></script>
  <link href="resource/simple-sidebar1.css" rel="stylesheet">
  <link href="resource/simple.css" rel="stylesheet">
  <script type="text/javascript" src="resource/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="resource/jquery.leanModal.min.js"></script>
 <script type="text/javascript" src="resource/onchange.js"></script>
<link rel="stylesheet" href="resource/font-awesome.min.css" />
<link rel="stylesheet" href="resource/font-awesome.css" />
<link href="prof.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="resource/login_style.css" />
</head>

<body>
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

<?php 
include('wrapper.php');
?>
<!---hover bar--->
 
<div class="col-sm-9" id="hi" style="padding-left:60px">
     	 <h1 style="text-align:center;color:brown">Write your Feedback here</h1>
     <?php
if(isset($_POST['submit']))
{
	include('dbConfig.php');
	 $q1="SELECT *  FROM dept_name where name='$dept'";
	$res=mysql_query($q1);
	$row1=mysql_fetch_assoc($res);
	$did=$row1['did'];
	$feedback=$_POST['feedback'];
	$rate=$_POST['rating'];
	$aid=$_POST['state'];
	$uid=$login_session;
	include('getdate.php');
	if ($db_found) 
	{
		
		$SQL = "insert into feedback values('$id','$uid','$aid','$feedback','$rate','$current_date')";
	       $result = mysql_query($SQL);
		            if($result)
		            {
		            	echo "<div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong>Your feedback on repective administrator posted succesfully.
  </div>";
		            }	
		            else
		            {
		            	echo " <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Warning !</strong> Your feedback didn't post successfully please check
  </div>";
		            }	
	}
	else
	{	
		echo " <div class='alert alert-danger'>
    <a href=#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Sorry !</strong> Problem with site. Please contact server 
  </div>";
	}
}			
?>
       
     <form role="form" action="feedback.php" method="post">  
     <h4 style="font-size:18px;font-weight: bold;">Choose Administrator: </h4>
    
    <?php
    include('dbConfig1.php');
    $query = $db->query("SELECT * FROM dept_name;");  
    $rowCount = $query->num_rows;
    ?>
    <select name="country" id="country">
        <option value="">Select Department</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['did'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">dept not available</option>';
        }
        ?>
    </select>  
    <br>
    <select name="state" id="state">
        <option value="">Select Administrator</option>
    </select>

          <h4 style="font-size:18px;">Feedback </h4>
          <textarea class="form-control"  name="feedback" style="width:90%;height:100px;" required></textarea>
          <h4 style="font-size:18px;">Rating : </h4>
          <input class="form-control"  name="rating" type="text" style="width:10%;height:50px;" placeholder="/10" required></textarea>
          <br>
      	 <input type="submit"  value="submit" class="btn btn-primary btn-lg col-sm-2" name="submit" style="background-color:rgb(0, 162, 162);color:white">
     	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>    <span><input type="reset" class="btn btn-primary btn-lg col-sm-2" style="background-color:rgb(0, 162, 162);color:white" value="Reset  ">
      </form>

    </div>
  </div>
<script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
