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

    #grafico1 {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}

.main-header {
    font-size: x-large;
    color : #888;
    font-family: Verdana;
    margin-bottom: 20px;
}

.destaque {
    color: #f88;
    font-weight: bolder;
}


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
include('login.php'); 
if(isset($_SESSION['login_user']))
{
header("location:Home.php");
}
?>    
<?php
include('headerfirst.php');
?>
    <!--pop up container-->
<?php
include('login_pop.php');
?>
<!---hover bar--->
 <?php
 include('wrapper.php');
 ?>
<!------------------------------------------------------------------------------------->
<div class="col-sm-6" style="padding-left:100px">	
	    
	    <h3 style="color:brown">Administrators list : </h3>	    
	    <table class="table table-condensed table-bordered table-hover">
	        <thead>
	           <tr>
	               <th>S.no</th>
	               <th>Name</th>
	               <th>Phone</th>
	               <th>Email</th>
	           </tr>
	        </thead>
	<?php
	include('dbConfig.php');
	$qu="select * from admins";
	$re1=mysql_query($qu);
	while($c1=mysql_fetch_assoc($re1))
	{
	?>        
	        
	        <tbody>  
	            <tr class="danger">
	                <td>  <?php echo $c1['id'];?></td>
	               <td> <?php echo $c1['name'];?></td>
	                   <td><?php echo $c1['phone'];?></td>   
	                      <td><?php echo $c1['email'];?></td>   
	            </tr>          
	        </tbody>    
	   <?php
	   }
	   ?>     
	        
	        
	    </table>
	    

	
	<div class="col-md-6">
	    <div id='grafico1'></div>
	</div>
	
	
</div>
  <script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
