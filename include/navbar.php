<link href="../css/navbar.css" rel="stylesheet" type="text/css" />
<div class="wrapper">
  <nav id="sidebar">
		<div class="sidebar-header">
			<img id="logo_biosys" src="../img/logo.png">
			<h1 id="Biosys_name">Biosys Medical Trading<br><span id="tagline">Advanced Quality in Medical Technology</span></h1>
		</div>
		  <ul class="list-unstyled components">
			  <li class="<?php if($page=='dashboard'){echo 'active';}?>">
				  <a href="dashboard.php" id="label">
				  	<i class="fi fi-rr-apps"></i>Dashboard</a>
				</li>
				<li class="<?php if($page=='viewPage'){echo 'active';}?>">
					<a href="viewPage.php" id="label">
					<i class="fi fi-rr-search"></i>View
					</a>
				</li>
				<li class="<?php if($page=='orderPage'){echo 'active';}?>">
				  <a href="orderPage.php" id="label">
				  <i class="fi fi-rr-shopping-cart"></i>Order</a>
			  </li>
				<li class="<?php if($page=='settingPage'){echo 'active';}?>">
				  <a href="settingPage.php" id="label">
				  <i class="fi fi-rr-settings-sliders"></i>Settings</a>
			  </li>
				<li>
				  <a id="label" onclick="return confirm('You are about to Log out, click YES to proceed');" href="../actions/logout.php">
				  <i class="fi fi-sr-sign-out"></i>Log out</a>
			  </li>
		  </ul>
	</nav>
</div>  