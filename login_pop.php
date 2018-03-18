<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader"  >
			<span class="header_title" >Login</span>
			 <span class="modal_close"  style="background:#FFBFBF"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<div class="social_login">

				<div class="centeredText">
					<span><strong>If you are a new user press on sign up to register</strong></span>
				</div>

				<div class="action_btns" >
					<div class="one_half"><a href="#" id="login_form" class="btn btn_lblue">Login</a></div>
					<div class="one_half " style="padding-left:10px;"><a href="#" id="register_form" class="btn btn_lblue">Sign up</a></div>
		
				</div>
			</div>

	
			<!-- Username & Password Login form -->
			<div class="user_login">
				<form action="login.php" method="post" >
					<label>Id / Username</label>
					<input type="text" name="id"/>
					<br />
					<label>Password</label>
					<input type="password" name="pwd" />
					<br />
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn btn_lblue"><span class="glyphicons glyphicons-step-backward"></span> Back</a></div>
						<div class="one_half last"><input type="submit" name="submit" class="btn btn_lblue" value="Login"></div>
					</div>
				</form>
				<br>
			<div class="one_half"><a href="#" id="forgot_form" class="btn btn_lblue1">Forgot password?</a></div>
			<span></span>
			<br><br><br>
			</div>

			<!-- Register Form -->
			<div class="user_register">
			
				<form action="register.php" method="post">
					<label name="name" >Id</label>
					<input type="text" id="idtext" name="bid" required/>
					<label name="name" for="sel1">Branch:</label>
					      <select class="form-control" id="sel1" name="branch" style="width:30%">
						<option>CSE</option>
						<option>ECE</option>
						<option>CIVIL</option>
						<option>MECH</option>
						<option>MME</option>
						<option>CHEM</option>
						<option>EEE</option>
						<option>P1</option>
						<option>P2</option>
					      </select>
					 <label name="name" for="sel1">Gender:</label>
					      <select class="form-control" id="sel1" name="gen" style="width:30%">
						<option>Male</option>
						<option>Female</option>
						<option>Others</option>
					      </select>     
					<label name="email">Email Address</label>
					<input type="email" name="email" required/>
					<br />
					<label name="pswd">Password</label>
					<input type="password" name="pwd" required/>
					<br />
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn btn_lblue"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><input type="submit" name="register" class="btn btn_lblue" value="Register"></a></div>
					</div>
				</form>
			</div>
				<!-- forgot for-->
			<div class="forgot_for">
				<form>
					<label>Email Address</label>
					<input type="email" />
					<br /><br />
					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn btn_lblue"><i class="fa fa-angle-double-left"></i> Back</a></div>
						
						<div class="one_half last"><a href="#" class="btn btn_lblue">Send Password</a></div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>
<!--end of popup container-->


