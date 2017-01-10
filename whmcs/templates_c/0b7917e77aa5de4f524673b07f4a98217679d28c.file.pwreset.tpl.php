<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:11:26
         compiled from "/home/wwwroot/default/whmcs/templates/eno/pwreset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11486411095863abee4e9d30-89556489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b7917e77aa5de4f524673b07f4a98217679d28c' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/pwreset.tpl',
      1 => 1451771342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11486411095863abee4e9d30-89556489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'LANG' => 0,
    'loggedin' => 0,
    'success' => 0,
    'errormessage' => 0,
    'securityquestion' => 0,
    'email' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863abee53ce12_82563582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863abee53ce12_82563582')) {function content_5863abee53ce12_82563582($_smarty_tpl) {?>

	<div id="wrapper">
			<!-- BEGIN MAIN PAGE CONTENT -->
			
			<div class="login-container">
				<h2>
					<a href="index.php"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/logo.png" alt="logo" class="img-responsive"></a><!-- can use your logo-->
				</h2>
				<!-- BEGIN FORGOT BOX -->
				<div class="login-box visible">				
					<p class="bigger-110">
						<i class="fa fa-key"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwreset'];?>

					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					 <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['noPasswordResetWhenLoggedIn'],'textcenter'=>true), 0);?>

					<?php } else { ?>
	
					<?php if ($_smarty_tpl->tpl_vars['success']->value) {?>

						<div class="note bg-success">
							<small><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationsent'];?>
</strong>, <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationcheckemail'];?>
</small>
						</div> 
						

					<?php } else { ?>

						<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
							<div class="alert alert-danger text-center">
								<?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

							</div>
						<?php }?>
					
					<form method="post" action="pwreset.php">
					<input type="hidden" name="action" value="reset" />
					
					<?php if ($_smarty_tpl->tpl_vars['securityquestion']->value) {?>
					
						<div class="notice bg-primary marker-on-bottom"><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsecurityquestionrequired'];?>
</small></div>
					
						<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
					
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-question text-gray"></span>
								<input class="form-control" name="answer" id="answer" type="text" value="<?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['securityquestion']->value;?>
" autofocus/>
							</div>
						</div>
						
						<input type="submit" class="pull-right btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
" />
						
					<?php } else { ?>
					
						<div class="notice bg-primary marker-on-bottom"><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetemailneeded'];?>
</small></div>
					
						<div class="form-group">
							<div class="input-icon right">
								<span class="fa fa-envelope text-gray"></span>
								<input class="form-control" name="email" id="email" type="text"placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
" autofocus/>
							</div>
						</div>
						
						<input type="submit" class="pull-right btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
" />
						
					<?php }?>
					
						
					<?php }?>
					
					<?php }?>
						<div class="clearfix"></div>
						
						<div class="footer-wrap">
							<span class="pull-left">
								<a href="login.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareabacklink'];?>
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
				<!-- END FORGOT BOX -->
				
			</div>
			<!-- END MAIN PAGE CONTENT --> 
	</div>
<?php }} ?>
