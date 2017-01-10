<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:44:27
         compiled from "/home/wwwroot/default/whmcs/templates/eno/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211884745858636d5b86b855-50789092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8cb95d6f8094df7aa9041823457a31c7d88079e' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/header.tpl',
      1 => 1451771270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211884745858636d5b86b855-50789092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'kbarticle' => 0,
    'pagetitle' => 0,
    'companyname' => 0,
    'headoutput' => 0,
    'formaction' => 0,
    'filename' => 0,
    'headeroutput' => 0,
    'WEB_ROOT' => 0,
    'loggedin' => 0,
    'template' => 0,
    'cartitemcount' => 0,
    'clientAlerts' => 0,
    'LANG' => 0,
    'alert' => 0,
    'languagechangeenabled' => 0,
    'locales' => 0,
    'currentpagelinkback' => 0,
    'locale' => 0,
    'secondaryNavbar' => 0,
    'breadcrumbnav' => 0,
    'adminMasqueradingAsClient' => 0,
    'adminLoggedIn' => 0,
    'templatefile' => 0,
    'displayTitle' => 0,
    'tagline' => 0,
    'inShoppingCart' => 0,
    'primarySidebar' => 0,
    'secondarySidebar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d5b929464_63202795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d5b929464_63202795')) {function content_58636d5b929464_63202795($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>
		
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
		<?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>

	</head>
	
	<body <?php if ($_smarty_tpl->tpl_vars['formaction']->value=='dologin.php'||$_smarty_tpl->tpl_vars['filename']->value=='logout'||$_smarty_tpl->tpl_vars['filename']->value=='pwreset') {?>class="login" <?php } else {
}?>>
	<?php if ($_smarty_tpl->tpl_vars['formaction']->value=='dologin.php'||$_smarty_tpl->tpl_vars['filename']->value=='logout'||$_smarty_tpl->tpl_vars['filename']->value=='pwreset') {?>
	<?php } else { ?>
	
	<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>
		
	<div id="wrapper">
		<div id="main-container">		
			<!-- BEGIN TOP NAVIGATION -->
				<nav class="navbar-top hidden-print" role="navigation">
					<!-- BEGIN BRAND HEADING -->
					<div class="navbar-header">
						
						
						
						<div class="navbar-brand">
							<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>clientarea<?php } else { ?>index<?php }?>.php">
								<img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" class="img-responsive" />
							</a>
						</div>
					</div>
					<!-- END BRAND HEADING -->
					<div class="nav-top">
					
						<!-- RIGHT SIDE DROPDOWN BUTTONS -->
						<!-- BEGIN RIGHT SIDE DROPDOWN BUTTONS -->
	
						<ul class="nav navbar-right">
							<li class="dropdown">
								<button type="button" class="navbar-toggle" id="navbar-side-toggle">
									<i class="fa fa-bars"></i>
								</button>
							</li>
		
							<!-- Shopping Cart -->
							<li class="dropdown">
								<a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="quick-nav">
									<i class="fa fa-shopping-cart"></i> <span class="badge up badge-success" id="cartItemCount"><?php echo $_smarty_tpl->tpl_vars['cartitemcount']->value;?>
</span>
								</a>
							</li>
							
							
							<!-- Login/Account Notifications -->
							<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell"></i>  <span class="badge up badge-danger"><?php echo count($_smarty_tpl->tpl_vars['clientAlerts']->value);?>
</span>
								</a>
								<ul class="dropdown-menu dropdown-scroll dropdown-tasks">
									<li class="dropdown-header">
										<i class="fa fa-info-circle"></i> (<?php echo count($_smarty_tpl->tpl_vars['clientAlerts']->value);?>
) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>

									</li>
									<li id="taskScroll">
										<ul class="list-unstyled">
											<?php  $_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alert']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientAlerts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->key => $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
?>
												<li>
													<a class="text-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
" href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
 <?php if ($_smarty_tpl->tpl_vars['alert']->value->getLinkText()) {?> <button href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
" class="btn btn-xs btn-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</button><?php }?></a>
												</li>
											<?php }
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
												<li>
													<a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>
</a>
												</li>
											<?php } ?>
										</ul>
									</li>
								</ul>
							</li>
							<?php }?>
					
					
							<!-- Language -->
							<?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value&&count($_smarty_tpl->tpl_vars['locales']->value)>1) {?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-language"></i></span>
								</a>
								<ul class="dropdown-menu dropdown-scroll dropdown-tasks auto auto-width">
									<li class="dropdown-header">
										<i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['chooselanguage'];?>

									</li>
									<li id="langScroll">
										<ul class="list-unstyled">
											<?php  $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['locale']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->key => $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
?>
												<li><a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a></li>
											<?php } ?>
										</ul>
									</li>
								</ul>
							</li>
							<?php }?>
					
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0);?>

			
		
		
		
							<!--Search Box-->
							<li class="dropdown nav-search-icon">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-search"></span>
								</a>
								<ul class="dropdown-menu dropdown-search">
									<li>
										<div class="search-box">
											<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase.php?action=search">
												<div class="input-icon right">
													<span class="fa fa-search"></span>
													<input type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasesearch'];?>
 ..." name="search" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['kbquestionsearchere'];?>
" onfocus="this.value=(this.value=='<?php echo $_smarty_tpl->tpl_vars['LANG']->value['kbquestionsearchere'];?>
') ? '' : this.value;" onblur="this.value=(this.value=='') ? '<?php echo $_smarty_tpl->tpl_vars['LANG']->value['kbquestionsearchere'];?>
' : this.value;" />
												</div>
											</form>
										</div>
									</li>
								</ul>
							</li>
							<!--Search Box-->								
						</ul>
						<!-- END RIGHT SIDE DROPDOWN BUTTONS -->

						<!-- TOP MENU -->
						
						

						
					</div><!-- /.nav-top -->
				</nav><!-- /.navbar-top -->
				<!-- END TOP NAVIGATION -->
				

				<!-- BEGIN SIDE NAVIGATION -->				
				<nav class="navbar-side hidden-print" id="navbar-side" role="navigation">
							
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/side-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					
					
				</nav><!-- /.navbar-side -->
				<!-- END SIDE NAVIGATION -->
				
				
				<!-- BEGIN MAIN PAGE CONTENT -->
				<div id="page-wrapper">
					<!-- BEGIN PAGE HEADING ROW -->
						<div class="row">
							<div class="col-lg-12">
								<!-- BEGIN BREADCRUMB -->
								<div class="breadcrumbs">
									<ul class="breadcrumb">
										<li><a href="index.php"></a></li>
										<li><?php echo $_smarty_tpl->tpl_vars['breadcrumbnav']->value;?>
</li>
									</ul>									
								</div>
								<!-- END BREADCRUMB -->	

								<!-- /#eno-layout-button, remove below line if do not want settings button -->	
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/settings-btn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								
									<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {?>
									<!-- Return to admin link -->
											
										<div class="alert alert-danger admin-masquerade-alert">
											<?php echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="text-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];?>
</a>
										</div>
											
									<?php } elseif ($_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
									<!-- Return to admin link -->
										
										<div class="alert alert-danger admin-masquerade-alert">
											<?php echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];?>
</a>
										</div>
										
									<?php }?>
								
								<!-- /#eno-layout-button -->
								
							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
					<!-- END PAGE HEADING ROW -->
							
							<?php if ($_smarty_tpl->tpl_vars['templatefile']->value=='homepage') {
} else { ?>
							<div class="row">
								<div class="col-lg-12">
									<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>false), 0);?>

								</div>
							</div>
							<?php }?>
							
							
						    <div class="row">
								<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()||$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>

									<div class="col-md-3 pull-md-left">
										<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0);?>

									</div>
								<?php }?>
								<!-- Container for main page display content -->
								<div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()||$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
							

	<?php }?><?php }} ?>
