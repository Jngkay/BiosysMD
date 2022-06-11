<html>
	<?php $page = 'settingPage'; include('../include/header.php');?>
	<?php include('../database/db.php');?>
	<?php include('../include/navbar.php');?>
	<link href="../css/settingPage.css" rel="stylesheet" type="text/css" />
	<body>
	<div class="container setting">
		<div class="row">
		    <div class="col-sm-7">
					<div class="leftcol">
						<img id="settinglogo" src="../img/settingicon.png">
					</div>
				</div>
		    <div class="col-sm-5">
					<div class="rightcol">
						<h1 id="settinglabel">SETTING</h1>
						<div class="usernamepass">
							<form action="../actions/update_password.php" method="POST">
								<div class="pass">
									<label for="">Password</label><br>
									<input type="password" placeholder="password" name="password"><i class="fi setting fi-rr-edit"></i>
								</div>
							</form>
							</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!--
		<div class="form_update">
			<form>
				<label>Change Username</label>
				<input type="text" placeholder="Enter Old Username">
				<input type="text" placeholder="Enter New Username"><br><br>
				<label>Change Password</label>
				<input type="password" placeholder="Enter Old Password">
				<input type="password" placeholder="Enter New Password"><br>
				<button>Save</button>
			</form>
		</div>!-->
	</body>
	
</html>