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
						<h1 id="settinglabel">Setting</h1>
						<div class="usernamepass">
							<div>
								Username:<br> <label for="" id="username"><?php $sql="Select * FROM users";
												$result = $conn->query($sql);?>
												<?php if ($result->num_rows > 0): ?>
													<?php while($row = $result->fetch_assoc()): ?>
														<?php echo $row["UserName"];?>
													<?php endwhile; ?>
												<?php endif; ?></label>
										
							</div>
								<div class="pass">
									<label for="">Password:</label><br>
									<label id="change">Click button to change</label><i class="fi setting fi-rr-edit" data-toggle="modal" data-target="#PasswordChange" id="passicon"></i>
										<div id="PasswordChange" class="modal">
										<div class="modal-content">
											<!--<form action="../actions/update_password.php" method="POST">-->
											<form onsubmit="return confirm('You are about to change your password, click yes to proceed.')" action="../actions/update_password.php" method="POST">
											<div class="header">
													<h3 id="Title">Change Password</h3>
													<span class="close">&times;</span>
												</div>
												<div class="form-group">
													<input type="password" placeholder="password" name="password">
												</div>
												<div class="form-group">
													<button type="submit" name="submit" id="changebtn" class="btn btn-primary">Change</button>
												</div>
											</form>
										</div>
									</div>
								</div>
						</div>
					</div>
			</div>
		</div>
	</div>
								
	
	</body>
	<script src='../include/modalscript_settings.js'></script>
</html>