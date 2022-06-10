<html>
	<?php $page = 'settingPage'; include('../include/header.php');?>
	<?php include('../database/db.php');?>
	<?php include('../include/navbar.php');?>
	<link href="../css/settingPage.css" rel="stylesheet" type="text/css" />
	<body>
		<div class="container">
			<div class="card">
				<h5 class="card-header">
					<?php 
					$sql="SELECT * FROM users";
					$result=$conn->query($sql);?>
					<?php if ($result->num_rows > 0): ?>
						<?php while($row = $result->fetch_assoc()): ?>
							<?php echo 'HI! ' . $row["UserName"]; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</h5>
				<div class="card-body">
					<h5 class="card-title">Setting</h5>
					<p class="card-text">
						<div class="row two">
							<div class="col-sm-7">
								<i class="fi setting fi-rs-comment-user"></i>
								<input type="text" placeholder="Username">
							</div>
							<div class="col-sm-5">
								<button>Change</button>
							</div>
						</div>
						<div class="row three">
							<div class="col-sm-7">
							<i class="fi setting fi-rr-lock"></i>
							<input type="text" placeholder="Password">
							</div>
							<div class="col-sm-5"> 
								<button>Change</button>
							</div>
						</div>
					</p>
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