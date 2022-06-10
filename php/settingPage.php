<html>
	<?php $page = 'settingPage'; include('../include/header.php');?>
	<?php include('../database/db.php');?>
	<?php include('../include/navbar.php');?>
	<link href="../css/settingPage.css" rel="stylesheet" type="text/css" />
	<body>
	
		<div class="container">
			<div class="row">
				<?php 
				$sql="SELECT * FROM users";
				$result=$conn->query($sql);?>
				<?php if ($result->num_rows > 0): ?>
					<?php while($row = $result->fetch_assoc()): ?>
						<?php echo 'HI!' . $row["UserName"]; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			

			</div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-6"> </div>
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