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
<div class="col-sm-10" style="">
<br>
<?php
include('dbConfig.php');
$q1='select * from complaint';
$res=mysql_query($q1);
$num=mysql_num_rows($res);
$q2="select * from feedback;";
$res1=mysql_query($q2);
$num1=mysql_num_rows($res1);
$q3="select * from admins;";
$res2=mysql_query($q3);
$num2=mysql_num_rows($res2);
 $a1="select * from dept_name";
$b1=mysql_query($a1);
 $nm=mysql_num_rows($b1);
	        ?>
<div class="col-sm-10"  style="">
	<div class="main-header"><span class="destaque"></span></div>
	</div>
	
	<div class="col-md-3">    
	 <div class="panel panel-info" style="height:160px">
          <div class="panel-heading" style="height:70%">
            <div class="row"> 
              <div class="col-xs-6">
                <i class="fa fa-list-ol fa-5x"></i>
              </div>
              <div class="col-sm-6 text-center">
             <h1><?php echo $num;?></h1>
                 <h2 class="announcement-heading"></h2>
              </div>
            </div>
          </div>
     
            <div class="panel-footer announcement-bottom" style="height:30%">
               <div class="row">
              <div class="col-xs-10 text-left">
               No of complaints
               </div> 
                
              </div>
            </div>
          
        </div>
        
	</div>
	
	
	<div class="col-md-3">    
	 <div class="panel panel-info" style="height:160px">
          <div class="panel-heading" style="height:70%;background-color:#EED0EE">
            <div class="row"> 
              <div class="col-xs-6">
                <i class="fa fa-list-ol fa-5x"></i>
              </div>
              <div class="col-sm-6 text-center">
               <h1><?php echo $nm;?></h1>
                 <h2 class="announcement-heading"></h2>
              </div>
            </div>
          </div>
          
            <div class="panel-footer announcement-bottom" style="height:30%">
                <div class="row">
              <div class="col-xs-10 text-left">
               No of departments
               </div> 
                
              </div>
            </div>
        
        </div>
        
	</div>

<div class="col-md-3">    
	 <div class="panel panel-info" style="height:160px;">
          <div class="panel-heading" style="height:70%;background-color:#F4A460">
            <div class="row"> 
              <div class="col-xs-6">
                <i class="fa fa-list-ol fa-5x"></i>
              </div>
              <div class="col-sm-6 text-center">
              <h1><?php echo $num2;?></h1>
                 <h2 class="announcement-heading"></h2>
              </div>
            </div>
          </div>
          <a href="adminsview.php">
            <div class="panel-footer announcement-bottom" style="height:30%">
              <div class="row">
              <div class="col-xs-10 text-left">
               Administrators 
               </div> 
                
              </div>
            </div>
          </a>
        </div>
        
	</div>
	<div class="col-md-3">    
	 <div class="panel panel-info" style="height:160px">
          <div class="panel-heading" style="height:70%;background-color:#F0E68C">
            <div class="row"> 
              <div class="col-xs-6">
                <i class="fa fa-list-ol fa-5x"></i>
              </div>
              <div class="col-sm-6 text-center">
             <h1><?php echo $num1;?></h1>
                 <h2 class="announcement-heading"></h2>
              </div>
            </div>
          </div>
          <a href="#">
            <div class="panel-footer announcement-bottom" style="height:30%">
              <div class="row">
                <div class="col-xs-6">
               Feedbacks 
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
        
	</div>
	
	
<div class="col-md-6">	    
	    <h3>Departments</h3>	    
	    <table class="table table-condensed table-bordered table-hover">
	        <thead>
	           <tr>
	               <th>S.no</th>
	               <th>Name</th>
	               <th>Administrators</th>
	           </tr>
	        </thead>
	<?php
	while($c=mysql_fetch_assoc($b1))
	{
	$dd=$c['did'];
	$qu="select * from admins where did=$dd";
	$re1=mysql_query($qu);
	$numb=mysql_num_rows($re1);
	?>        
	        
	        
	        <tbody>  
	            <tr class="danger">
	                <td>  <?php echo $c['id'];?></td>
	               <td> <?php echo $c['name'];?></td>
	                   <td><?php echo $numb;?></td>   
	            </tr>          
	        </tbody>    
	   <?php
	   }
	   ?>     
	        
	        
	    </table>
	    
    </div>
	
	<div class="col-md-6">
	    <div id='grafico1'></div>
	</div>
	
	
</div>
  <script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
