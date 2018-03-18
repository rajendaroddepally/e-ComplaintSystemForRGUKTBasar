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
<nav class="navbar navbar-default no-margin" style="background-color:rgb(0, 132, 191);height:65px">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
        <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
      </button>
       <a class="navbar-brand" href="hub.rgukt.ac.in" style="color:white;font-size:22px;">e-Complaint System</a>
    </div>
    <!-- navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
         <li class="active"  ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
      </ul>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a id="modal_trigger" href="#modal" style="color:white;font-size:20px"> Login<span class="caret"></span></a></li>
      </ul>
    </div>
    <!-- bs-example-navbar-collapse-1 -->
  </nav>
    
 <?php
 include('login_pop.php');
 ?>
<?php
include('wrapper.php');
?>
<?php
include('dbConfig.php');
$aid='4';
$q5="select * from complaint";
?>
  <div class="col-sm-9" style="padding-left:60px">
    <h2 style="text-align:center;color:brown">Complaints</h2>
    <br>
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p1" id="problem">+ Projector problem in ABI-103</p>
		<div id="p1" class="collapse" >
				Problem: Sir Iam CR of the class ABI-103, projector hasn't been working since 5 days. I informed earlier but no one is caring about this problem. Please kindly take this problem again into count and try to solve fastly.
				<br>
				<a href="#myModal"  data-toggle="modal" data-target="#myModal" style="background:#80C5C5;border:none;" class="btn btn-warning btn-sm">View</a>
		</div>
    </div>	
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p2" id="problem">+ I dont have battery backup </p>
		<div id="p2" class="collapse" >
				Problem: Sir , I am a student belogns to e3cse bearing id.no:B121635. I don't have a battery back up since 10days.
				<br>
				<button type="button" class="btn btn-warning btn-sm" style="background:#80C5C5;border:none;">View</button>
		</div>
    </div>	
    <div class="well well-sm">
 	<p data-toggle="collapse" data-target="#p3" id="problem">+ I have not enrolled for placement cell</p>
		<div id="p3" class="collapse" >
				Problem: Sir I am student of the class ABI-103, i have not enrolled for placement cell beacause i am not in the campus at the time of placement cell registration. So please give the permission to accept my registration.
				<br>
				<button type="button" class="btn btn-warning btn-sm" style="background:#80C5C5;border:none;">View</button>
		</div>
    </div>	
	<br>
</div>
     	 <!--------------------------------------------------------------------->


     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
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


<script src="resource/bootstrap.min.js"></script>
  <script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
