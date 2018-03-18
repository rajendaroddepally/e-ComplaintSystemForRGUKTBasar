<!DOCTYPE html>
<html lang="en">
<head>
  <title>eCS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="resource/bootstrap.min.css">
     <link href="prof.css" rel="stylesheet">
  <script src="resource/jquery.min.js"></script>
    <script src="resource/jquery.js"></script>
  <script src="resource/bootstrap.min.js"></script>
  <script src="resource/simple-sidebar.js"></script>
  <link href="resource/simple-sidebar1.css" rel="stylesheet">
  <script type="text/javascript" src="resource/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="resource/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="resource/font-awesome.min.css" />
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
    <?php
include('session.php'); 
if(!isset($_SESSION['login_user']))
{
header("location:Home.php");
}
?>
<?php
include('headerbar.php');
?>
<?php
include('login_pop.php');
?>
<?php
include('FileUpload.php');
?>
<!---hover bar--->
<?php 
include('wrapper.php');
?>
<!--------------------->
<?php
include('profileupdate.php');
?>
<?php
include('password.php');
?>

<?php
include('dbConfig.php');
$q1="select * from users where uid=$login_session";
$r1=mysql_query($q1);
$row=mysql_fetch_assoc($r1);
$r=$row['uname'];
?>

<div class="col-sm-9" id="hi" style="padding-left:60px">
	<br><br>
		<div class="col-md-14">
            <div class="panel with-nav-tabs panel-default" style="100%">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">General</a></li>                         
                             <li><a href="#tab2default" data-toggle="tab">Password</a></li>
                              <li><a href="#tab3default" data-toggle="tab">Upload image</a></li>
                    
                        </ul>
                </div>
	
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">
                        <?php
                        if($success==1)
                        	echo "<div class='alert alert-success'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Success!</strong>Your profile Updated succesfully.
					  </div>";     
			 if($s==1)
                        	echo "<div class='alert alert-success'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Success!</strong>Your password Updated succesfully..please try to login with this password when you come back again
					  </div>";  
			if($error1==1)
                        	echo "<div class='alert alert-warning'>
					    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					    <strong>Warning! </strong>$error
					  </div>";  
			if($files==1)
					echo "<div class='alert alert-success' style='width='80%';height='30%''>
							    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							    <strong>Success!</strong>Picture successfully updated
							 
							  </div>";		  		                           		
                        ?>
          <form id="tab" action="" method="post">
		    <label>Username</label>
		    <br>
		    <input type="text" name="uname" value="<?php echo $row['uname'];?>" class="input-xlarge" style="width:70%;"><br>
		    <label>First Name</label><br>
		    <input type="text" name="fname" value="<?php echo $row['fname'];?>" class="input-xlarge" style="width:80%;"><br>   
		    <label>Last Name</label><br>
		    <input type="text"  name="lname" value="<?php echo $row['lname'];?>" class="input-xlarge" style="width:80%;"><br>
		    <label>Birthday</label><br>
		    <input type="text" name="bday" value="<?php echo $row['bday'];?>"class="input-xlarge" style="width:80%;" placeholder="dd/mm/yyyy"><br>
		        <label>Class : </label><br>
		     <input type="text" name="class" value="<?php echo $row['class'];?>" class="input-xlarge" style="width:70%;"><br>
		         <label>Dorm :</label><br>
		    <input type="text" name="dorm" value="<?php echo $row['dorm'];?>" class="input-xlarge" style="width:70%;"><br>
		    <label>Sem :</label><br>
		     <input type="text" name="sem" value="<?php echo $row['sem'];?>" class="input-xlarge" style="width:70%;"><br>
		    <label>Email</label><br>
		    <input type="text" name="email" value="<?php echo $row['email'];?>" class="input-xlarge" style="width:80%;"><br>
		    <label>Phone</label><br>
		    <input type="text" name="phone" value="<?php echo $row['phone'];?>" class="input-xlarge" style="width:80%;"><br>         
		    <br><br>
		    <input type="submit" value="update" name="submit" class="btn btn-primary btn_lblue">
		    <a href="#tab2default" data-toggle="tab">Next</a>
            </form>
            <br>
          
            <div>
	</div>
   </div>
                        <div class="tab-pane fade" id="tab2default">
                         <?php
                                  		
                        ?>
                        <form id="tab2" action="" method="post">
				<label>New Password</label><br>
				<input type="password" name="newp2" class="input-xlarge input-lg" id="pwd"><br>
				<label>New Password</label><br>
				<input type="password" name="newp1" class="input-xlarge input-lg" id="pwd"><br><br>
				<div>
				    <input type="submit" class="btn btn-primary btn_lblue" name="submit1" value="Update">
				</div>
    		    </form> 
    	</div>
        	  <div class="tab-pane fade" id="tab3default">
                         <?php
                                  		
                        ?>
                        <label>Only image format</label>
                      <form action="" method="post" enctype="multipart/form-data">
				<b>Select an image:</b><br>
				<input type="file" name="this" id="this" style="padding:10px 10px;background:#5F9EA0">
				<br>
				<input type="submit" value="Save" name="fileup" style="padding:10px 10px;background:#5F9EA0">
		</form>
    	</div>
                    </div>
                    
                </div>
            </div>
        </div>
	</div>
</div>

<script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
