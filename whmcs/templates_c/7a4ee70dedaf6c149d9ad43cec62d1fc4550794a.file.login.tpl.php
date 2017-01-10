<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:09:41
         compiled from "/home/wwwroot/default/whmcs/templates/eno/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11939397205863ab855ceb30-66005688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4ee70dedaf6c149d9ad43cec62d1fc4550794a' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/login.tpl',
      1 => 1451771308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11939397205863ab855ceb30-66005688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'LANG' => 0,
    'incorrect' => 0,
    'ssoredirect' => 0,
    'systemsslurl' => 0,
    'rememberme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863ab85625ba3_18068085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863ab85625ba3_18068085')) {function content_5863ab85625ba3_18068085($_smarty_tpl) {?>

	<div id="wrapper">
			<!-- BEGIN MAIN PAGE CONTENT -->
			
			<div class="login-container">
				<h2>
					<a href="index.php"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/logo.png" alt="logo" class="img-responsive"></a><!-- can use your logo-->
				</h2>
				<!-- BEGIN LOGIN BOX -->
				<div id="login-box" class="login-box visible">					
					<p class="bigger-110">
						<i class="fa fa-key"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>

					</p>
					

					
					<div class="hr hr-8 hr-double dotted"></div>
					
						<?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['loginincorrect'],'textcenter'=>true), 0);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['ssoredirect']->value) {?>
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['sso']['redirectafterlogin'],'textcenter'=>true), 0);?>

						<?php }?>
					
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
dologin.php">
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-key text-gray"></span>
								<input class="form-control" name="username" id="username" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
" />
							</div>
						</div>
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-lock text-gray"></span>
								<input class="form-control" name="password" id="password" type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginpassword'];?>
" />
							</div>
						</div>
						<div class="tcb">
							<label>
								<input type="checkbox" class="tc" name="rememberme"<?php if ($_smarty_tpl->tpl_vars['rememberme']->value) {?> checked="checked"<?php }?>>
								<span class="labels"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
</span>
							</label>
							<input type="submit" class="pull-right btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
" />
							<div class="clearfix"></div>
						</div>				
						
						
						<div class="footer-wrap">
							<span class="pull-left">
								<a href="pwreset.php"><i class="fa fa-angle-double-left"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginforgotteninstructions'];?>
</a>
							</span>
							
							<span class="pull-right">
								<a href="register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
 <i class="fa fa-angle-double-right"></i></a>
							</span>
							
							<div class="clearfix"></div>
						</div>							
					</form>
				</div>
				<!-- END LOGIN BOX -->
				
			</div>
			<!-- END MAIN PAGE CONTENT --> 
	</div>
	
	

<?php echo '<script'; ?>
 type="text/javascript">
	$("#username").focus();
<?php echo '</script'; ?>
>


<?php }} ?>
