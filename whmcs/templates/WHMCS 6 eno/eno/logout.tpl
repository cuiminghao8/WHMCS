{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}


	<div id="wrapper">
			<!-- BEGIN MAIN PAGE CONTENT -->
			
			<div class="login-container">
				<h2>
					<a href="index.php"><img src="templates/{$template}/assets/images/logo.png" alt="logo" class="img-responsive"></a><!-- can use your logo-->
				</h2>
				
				<!-- BEGIN FORGOT BOX -->
				<div class="login-box visible">				
					<p class="bigger-110">
						{$LANG.logouttitle}
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<div class="alert alert-success">
						{$LANG.logoutsuccessful}
					</div>
					
					<div class="footer-wrap">
							<a href="login.php" class="btn btn-primary btn-block">{$LANG.logoutcontinuetext}</a>
					</div>												
				</div>
				<!-- END FORGOT BOX -->
				
			</div>

			<!-- END MAIN PAGE CONTENT --> 
	</div>