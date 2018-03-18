<nav class="navbar navbar-default no-margin" style="background-color:rgb(20, 115, 126);height:65px">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
        <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
      </button>
       <a class="navbar-brand" href="Home1.php" style="color:white;font-size:22px;">e-Complaint System</a>
    </div>
    <!-- navbar-header-->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
     
         <li class="active"  ><button style="color:#DCDCDC;background:#9400D3" class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
       </ul>
      </ul>
    
       <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                    <a href="#" style="font-size:16px;color:white;padding-top:25px;"class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span>&nbsp;Hello :<i>
                                    <?php 
                                    if($admin==1)
                                    	echo $admname;
                                    else
                                    	echo $loginid;?></i>
                                        <span class="glyphicon glyphicon-chevron-down"></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                      <div class="col-sm-4">
							<?php 
							include('dbConfig.php');
							$q2="select * from users where uid=$login_session";
							$rs=mysql_query($q2);
							$rw=mysql_fetch_assoc($rs);
							
							?>
		                                         <img src="<?php echo $rw['imagepath'];?>" style="width:100px;height:100px;border-radius:25px;">
                                                 
                       
                                                      </div>
                                                        <div class="col-md-7">
                                                         <!--   <span>nafi</span><br>-->
                                                             <span><b><?php
                                                             if($admin==1)
                                                             	 echo $admname;
                                                            else
                                                            	echo $loginid;  ; ?></b></span>
                                                            <p class="text-muted small">
                                                               <b> <?php
                                                               	if($admin==1)
                                                               		echo $admemail;
                                                               	else
                                                               		 echo $loginbranch; ?></b></p>
                                                            <div class="divider">
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="profile_edit.php" class="btn btn-default btn-sm btn_lblue">edit profile</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="logout.php" class="btn btn-default btn-sm pull-right btn_lblue">Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
    </div>
    <!-- bs-example-navbar-collapse-1 -->
  </nav>
    
