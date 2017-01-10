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
						<i class="fa fa-key"></i> {$LANG.pwreset}
					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					 {if $loggedin}
						{include file="$template/includes/alert.tpl" type="error" msg=$LANG.noPasswordResetWhenLoggedIn textcenter=true}
					{else}
	
					{if $success}

						<div class="note bg-success">
							<small><strong>{$LANG.pwresetvalidationsent}</strong>, {$LANG.pwresetvalidationcheckemail}</small>
						</div> 
						

					{else}

						{if $errormessage}
							<div class="alert alert-danger text-center">
								{$errormessage}
							</div>
						{/if}
					
					<form method="post" action="pwreset.php">
					<input type="hidden" name="action" value="reset" />
					
					{if $securityquestion}
					
						<div class="notice bg-primary marker-on-bottom"><small>{$LANG.pwresetsecurityquestionrequired}</small></div>
					
						<input type="hidden" name="email" value="{$email}" />
					
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-question text-gray"></span>
								<input class="form-control" name="answer" id="answer" type="text" value="{$answer}" placeholder="{$securityquestion}" autofocus/>
							</div>
						</div>
						
						<input type="submit" class="pull-right btn btn-primary" value="{$LANG.pwresetsubmit}" />
						
					{else}
					
						<div class="notice bg-primary marker-on-bottom"><small>{$LANG.pwresetemailneeded}</small></div>
					
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-envelope text-gray"></span>
								<input class="form-control" name="email" id="email" type="text"placeholder="{$LANG.loginemail}" autofocus/>
							</div>
						</div>
						
						<input type="submit" class="pull-right btn btn-primary" value="{$LANG.pwresetsubmit}" />
						
					{/if}
					
						
					{/if}
					
					{/if}
						<div class="clearfix"></div>
						
						<div class="footer-wrap">
							<span class="pull-left">
								<a href="login.php">{$LANG.clientareabacklink}</a>
							</span>
								
							<span class="pull-right">
								<a href="register.php">{$LANG.register} <i class="fa fa-angle-double-right"></i></a>
							</span>
							
							<div class="clearfix"></div>
							
						</div>							
					</form>	

					
				</div>
				<!-- END FORGOT BOX -->
				
			</div>
			<!-- END MAIN PAGE CONTENT --> 
	</div>
