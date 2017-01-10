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
				<!-- BEGIN LOGIN BOX -->
				<div id="login-box" class="login-box visible">					
					<p class="bigger-110">
						<i class="fa fa-key"></i> {$LANG.login}
					</p>
					

					
					<div class="hr hr-8 hr-double dotted"></div>
					
						{if $incorrect}
							{include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
						{elseif $ssoredirect}
							{include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
						{/if}
					
					<form method="post" action="{$systemsslurl}dologin.php">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input class="form-control" name="username" id="username" type="text" placeholder="{$LANG.loginemail}" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-lock text-gray"></span>
								<input class="form-control" name="password" id="password" type="password" placeholder="{$LANG.loginpassword}" />
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" class="tc" name="rememberme"{if $rememberme} checked="checked"{/if}>
								<span class="labels"> {$LANG.loginrememberme}</span>
							</label>
							<input type="submit" class="pull-right btn btn-primary" value="{$LANG.loginbutton}" />
							<div class="clearfix"></div>
						</div>				
						
						
						<div class="footer-wrap">
							<span class="pull-left">
								<a href="pwreset.php"><i class="fa fa-angle-double-left"></i> {$LANG.loginforgotteninstructions}</a>
							</span>
							
							<span class="pull-right">
								<a href="register.php">{$LANG.register} <i class="fa fa-angle-double-right"></i></a>
							</span>
							
							<div class="clearfix"></div>
						</div>							
					</form>
				</div>
				<!-- END LOGIN BOX -->
				
			</div>
			<!-- END MAIN PAGE CONTENT --> 
	</div>
	
	
{literal}
<script type="text/javascript">
	$("#username").focus();
</script>
{/literal}

