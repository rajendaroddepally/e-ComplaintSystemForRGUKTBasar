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
    <link href="prof.css" rel="stylesheet">
  <script type="text/javascript" src="resource/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="resource/onchange.js">
</script>
<script type="text/javascript" src="resource/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="resource/font-awesome.min.css" />
<link rel="stylesheet" href="resource/font-awesome.css" />
<link type="text/css" rel="stylesheet" href="resource/login_style.css" />
  <style>
select {
    background-color: #F5F5F5;
    border: 1px double #2F4F4F;
    color: #A9A9A9;
    font-family: Georgia;
    font-weight: bold;
    font-size: 15px;
    height: 47px;
    padding: 10px 8px;
    width: 30%;
    margin: 10px 0 20px 0px;
    
}
select option{
    font-family: Georgia;
    font-size: 14px;
}

    input[type=text], {
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
include('login_pop.php')
?>
<!---hover bar--->
<?php
include('wrapper.php')
?>
<div class="col-sm-9" id="hi" style="padding-left:60px">
   <h1 style="text-align:center;color:brown">Write your complaint here</h1>
   
<?php
if(isset($_POST['comp1']))
{
	include('dbConfig.php');
	 $q1="SELECT *  FROM dept_name where name='$dept'";
	$res=mysql_query($q1);
	$row1=mysql_fetch_assoc($res);
	$did=$row1['did'];
	$complaint=$_POST['complaint'];
	$subject=$_POST['sub'];
	$aid=$_POST['state'];
	
	$uid=$login_session;
	
	include('getdate.php');
	if ($db_found) 
	{
		
		$SQL = "insert into complaint values('$id','$uid','$aid','$subject','$complaint','$current_date','','')";
	       $result = mysql_query($SQL);
		            if($result)
		            {
		            	echo "<div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong>Your complaint posted succesfully. Your problem will resolve soon
  </div>";
		            }	
		            else
		            {
		            	echo " <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Warning !</strong> Your complaint didn't post successfully please check
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
       
     <form role="form" action="Make_C.php" method="post">  
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

        	
          <h4  style="font-size:18px;font-weight: bold;">Subject :</h4>
          <input type="text" class="form-control" name="sub"  style="width:100%;height:50px;color:#008B8B;" required>
    
          <h4  style="font-size:18px;font-weight: bold;">Complaint : </h4>
          <textarea class="form-control" name="complaint" style="width:100%;height:100px;color:#008B8B;" required></textarea>
          <br>
      	<input type="submit" value="submit" name="comp1" class="btn btn-primary btn-lg col-sm-2" style="background-color:rgb(0, 162, 162);color:white;border-radius:10px">
     	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" class="btn btn-primary btn-lg col-sm-2" style="background-color:rgb(0, 162, 162);color:white;border-radius:10px" value="Reset">
     	</form> 
    </div>
  </div>
 
    <!-- /#page-content-wrapper -->
      <!-- Modal content-->
     <!-- <a href="#myModal"  data-toggle="modal" data-target="#myModal">Complaint Section</a></li>--
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Department</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

   -->
  <script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
