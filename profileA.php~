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
    <link href="resource/profile.css" rel="stylesheet">
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
 <br><br>
<div class="col-sm-7" id="hi" style="padding-left:100px;">
     	 	<br>
    <?php 
    include('dbConfig.php');
    $q1="select * from admins where lid=$login_adm";
	$res=mysql_query($q1);
	$row=mysql_fetch_assoc($res);
	$admid=$row['id'];
	$cabin=$row['cabin'];
	$email=$row['email'];
	$phone=$row['phone'];
	$depid=$row['did'];
	$q2="select * from dept_name where did=$depid";
	$res1=mysql_query($q2);
	$row1=mysql_fetch_assoc($res1);
	$q3="select * from complaint where aid=$admid";
	$res2=mysql_query($q3);
	$solv=0;
	while($rr=mysql_fetch_assoc($res2))
	{
		$stata=$rr['stata'];
		$statu=$rr['statu'];
		if($stata==1&&$statu==1)
			$solv++;
	}
	$numc=mysql_num_rows($res2);
	$q4="select * from feedback where aid=$admid";
	$res3=mysql_query($q4);
	$numf=mysql_num_rows($res3);


    ?>	 
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>Samith Pradhan</h2>
                    <p><strong>Department : </strong> <?php echo $row1['name'];?>
	 </p>
                    <p><strong>Cabin : </strong>  <?php echo $cabin;?></p>
                     <p><strong>Email : </strong>  <?php echo $email;?></p>
                    <p><strong>Phone : </strong> <?php echo $phone;?> </p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                        <figcaption class="ratings">
                            <p>Ratings
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                <span class="fa fa-star"></span>
                            </a>
                            <a href="#">
                                 <span class="fa fa-star-o"></span>
                            </a> 
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong><?php echo $numc;?> </strong></h2>                    
                 
                    <button class="btn btn-success btn-block btn_lblue"><span class="fa fa-plus-circle"></span>Complaints</button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong><?php echo $numf;?></strong></h2>                             
                    <button class="btn btn-info btn-block btn_lblue"><span class="fa fa-user"></span> Feedbacks</button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
              
             
                    <h2><strong><?php echo $solv;?></strong></h2>                             
                    <button class="btn btn-info btn-block btn_lblue"><span class="fa fa-user"></span> Solved compllaints </button>
                </div>
           
            </div>
    	 </div>                 
<script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
