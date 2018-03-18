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
   <link rel="stylesheet" href="prof.css">
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

 <?php
  include('session.php');
if(!isset($_SESSION['login_user']))
{
include("headerfirst.php");
}
if(isset($_SESSION['login_user']))
{
include("headerbar.php");
}
?>
    <!--pop up container-->
<?php
include('login_pop.php');
?>
<?php
include('wrapper.php');
?>
<!------------------------------------------------------------------------------------->
<div class="col-sm-10" style="padding-left:160px">

<br><br><br>
<?php
if(isset($_POST['send']))
{
	include('dbConfig.php');
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['message'];
	 include('getdate.php');
	if ($db_found) 
	{
		$SQL = "insert into contact_us values('','$name','$email','$subject','$msg','$current_date')";
	       $result = mysql_query($SQL);
		            if($result)
		            {
		            	echo "<div class='alert alert-success' style='width:82%'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong>Your Question posted succesfully. We will reply to your mail soon
  </div>";
		            }	
		            else
		            {
		            	echo " <div class='alert alert-warning' style='width:82%'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Warning !</strong> Your question didn't post successfully please check again
  </div>";
		            }	
	}
	else
	{	
		echo " <div class='alert alert-danger' style='width:82%'>
    <a href=#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Sorry !</strong> Problem with site. Please contact server 
  </div>";
	}
}			
?>

    <div class="row">
        <div class="col-md-10">
            <div class="well well-sm">
                <form action="contact_us.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name"  name="name" placeholder="Enter name" style="height:40px;" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject" >
                                Subject</label>
                            <input type="text" class="form-control" id="name" name="subject" placeholder="Main subject" style="height:40px;" required="required" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                            <br>
                                Message</label>
                            <textarea name="message" id="message" name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="send" class="btn btn-primary pull-right " style="background:rgb(20, 115, 126)"  id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span><strong> Our office</strong></legend>
            <address>
                <strong>E3-CSE</strong><br>
                Class:ABI-103<br>
                Dorm : BH-II south block 1st floor (CSE)<br>
            </address>
            </form>
        </div>
        <br><br>
    </div>
    <div class="row">
        <div class="col-md-4">         
        <legend><span class="glyphicon glyphicon-globe"></span><strong> Our team</strong></legend>
	  <div class="list-group">
    <button class="list-group-item active">Pallamolla Sai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9652598983</button>
    <button class="list-group-item">Nafi Mohammad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9652598983</button>
    <button class="list-group-item">Nilesh Bheemani&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9652627263</button>
    <button class="list-group-item">Rajashekhar Singarapu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9010904914</button>
    <button class="list-group-item">Rajendar oddepally&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8897090354</button>
  </div>
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
