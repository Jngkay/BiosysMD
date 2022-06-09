<html>
	<?php $page = 'settingPage'; include('../include/header.php');?>
	<?php include('../include/navbar.php');?>
	<link href="../css/settingPage.css" rel="stylesheet" type="text/css" />
	<body>
		<div>
			<div class="label">User Profile</div>
		</div>
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
		</div>
	</body>
	
</html>