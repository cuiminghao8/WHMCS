<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:55:14
         compiled from "/home/wwwroot/default/whmcs/templates/eno/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314234815586489221ee991-94242410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a1322e26a84d74b84ebc82e6ac446d57f3db5df' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/logout.tpl',
      1 => 1451771322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314234815586489221ee991-94242410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864892221e359_85901445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864892221e359_85901445')) {function content_5864892221e359_85901445($_smarty_tpl) {?>


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
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['logouttitle'];?>

					</p>
					
					<div class="hr hr-8 hr-double dotted"></div>
					
					<div class="alert alert-success">
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutsuccessful'];?>

					</div>
					
					<div class="footer-wrap">
							<a href="login.php" class="btn btn-primary btn-block"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutcontinuetext'];?>
</a>
					</div>												
				</div>
				<!-- END FORGOT BOX -->
				
			</div>

			<!-- END MAIN PAGE CONTENT --> 
	</div><?php }} ?>
