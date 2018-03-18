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

<?php
include('headerfirst.php');
?>
    
<?php
include('login_pop.php');
?>
<?php
include('wrapper.php');
?>
<div class="col-sm-9" id="hi" style="padding-left:60px">
<br>
     	<?php
		if(isset($_POST['register'])&&!isset($_POST['login']))
		{
			include('dbConfig.php');
			include('getdate.php');
			$bid=$_POST['bid'];
			$branch=$_POST['branch'];
			$gender=$_POST['gen'];
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$pwd=$_POST['pwd'];
			$q='select * from users;';
			$r=mysql_query($q);
			while($row=mysql_fetch_assoc($r))
			{
				$useid=$row['bid'];
				if($bid==$useid)
				{
					$s=1;
					echo "<div class='alert alert-warning'  style='width:100%;height:150px'>
				    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				    <h3 style='font-size:20px;text-align:center'>Sorry ! User already exsists.Try to <strong>Register</strong> again  <a href='Make_C.php'><Strong>Home</strong></a>
				   	
  				</div>";
				}
			}
			if($s!=1)
			{
				$q1 = "insert into users values('','$bid','','','$fullname','$gender','','','','','$email','','$pwd','','$current_date','$branch','')";
		    		$r1 = mysql_query($q1);
		    		if($r1)
		    		{
		    			echo "<div class='alert alert-success' style='width='80%';height='30%''>
							    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							    <strong>Success!</strong>Registered Successfully
							    <br><br><br>
							    <div class='one_half'><a href='Home.php' id='login_form' class='btn btn_lblue'>Login</a></div>
							  </div>";
		    		}
		    		else
		    		{
		    			echo " <div class='alert alert-danger'>
							    <a href=#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							    <strong>Sorry !</strong>Not registered successfully
							  </div>";
		    		}
		    	}	
	    	}	
	?>
    </div>
  </div>
<script src="resource/bootstrap.min.js"></script>
<script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>

