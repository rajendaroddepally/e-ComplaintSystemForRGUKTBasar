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
   
  <div class="col-sm-8" id="hi" style="padding-left:80px">
  
   <?php
    include('dbConfig.php');
    $id=$login_session;
    $q1="select * from users where uid=$id";
    $res=mysql_query($q1);
    $row=mysql_fetch_assoc($res);
    ?>
      <div class="row">
      <br>
      
    <div class="panel panel-info" style="background-color:#D6A6D6" >
            <div class="panel-heading" style="background-color:#BF7373">
              <h3 class="panel-title" style="color:darkblue;" ><?php echo $row['fullname'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4 col-lg-4 " > <img alt="User Pic" src="<?php echo $row['imagepath'];?>" class="img-circle img-responsive"> </div>
                <div class=" col-md-8 col-lg-8 "> 
                  <table class="table table-user-information" style="color:Ivory">
                    <tbody>
                      <tr><td>ID :</td> <td><?php echo $row['bid'];?></td></tr>
                      <tr><td>Gender :</td> <td><?php echo $row['gender'];?></td></tr>
                      <tr><td>Department : </td> <td><?php echo $row['branch'];?></td></tr>
                      <tr><td>Semester :</td> <td><?php echo $row['sem'];?></td></tr>        
                        <tr><td>Class :</td> <td><?php echo $row['class'];?></td></tr>
                          <tr><td>Hostel:</td> <td><?php echo $row['dorm'];?></td></tr>
                       <tr><td>Email</td><td><a href="mailto:info@support.com" style="color:Ivory"><?php echo $row['email'];?></a></td></tr> 
 		
		 <tr><td>Phone Number</td> <td><?php echo $row['phone'];?> </td> </tr>
                     
                    </tbody>
                  </table>
              
                 
                        <span class="pull-right">
                            <a href="profile_edit.php" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm  btn_lblue" ><i class="glyphicon glyphicon-edit">Edit</i></a>
                            
                        </span>
                    
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     	 <!--------------------------------------------------------------------->
    
   <script src="resource/simple-sidebar.js"></script>
<script src="resource/modal.js">
</script>
</body>
</html>
