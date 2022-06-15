<html>
<?php include('include/header_index.php');?>

	<link href="css/index.css" rel="stylesheet" type="text/css" />
<body>
		<div class="container-fluid">
	  	<div class="row">
				<div class="col-sm-2">
						<img id="logo_biosys" src="img/logo.png">
				</div>
		    <div class="col-sm-4">
					<div class="left">
						<h1 id="Biosys_name">Biosys Medical Trading</h1>
						<h3 id="tagline">Advanced Quality in Medical Technology</h3>
					</div>
				</div>
		    <div class="col-sm-6">
					<div class="right">
						<h1 id="Welcome">Welcome</h1>
						<h1 id="instruction">PLEASE LOGIN TO ADMIN DASHBOARD</h1>
							<form action="actions/login.php" method="post">
								<input name="uname" type="text" class="field" placeholder="USERNAME"><br>
								<input name="pword" type="password"class="field" placeholder="PASSWORD"><br>
									<div class="col text-center">
								    <button class="btn btn-default" id="login_btn">LOGIN</button>
							    </div>
							</form>		
					</div>
				</div>
			</div>
		</div>
</body>
<?php include('include/footer.php');?>
</html>


