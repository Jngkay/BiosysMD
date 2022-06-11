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
							<div class="username">
								<label for="">Username</label><br>
								<input type="text" placeholder="username"><i class="fi setting fi-rr-edit"></i>
							</div>
							<div class="pass">
								<label for="">Password</label><br>
								<input type="text" placeholder="password"><i class="fi setting fi-rr-edit"></i>
							</div>
							</div>
						
								
						
								  
								
					</div>
				</div>
			</div>
		</div>
		</div>
		<!--
		<div class="form_update">
			<form action="../actions/update_password.php" method="POST">
				<label>Change Password</label>
				<input type="password" name="password" placeholder="Password">
				<button>Update</button>
			</form>
		</div>!-->
	</body>
	
</html>