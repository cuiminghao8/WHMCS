<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:44:27
         compiled from "/home/wwwroot/default/whmcs/templates/eno/includes/side-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196509132158636d5b99cf16-30628134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab81f05d8cc647db6af86f10b7e052fc9c8c5b8' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/includes/side-menu.tpl',
      1 => 1451771524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196509132158636d5b99cf16-30628134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT' => 0,
    'loggedin' => 0,
    'templatefile' => 0,
    'LANG' => 0,
    'pagetitle' => 0,
    'filename' => 0,
    'clientsstats' => 0,
    'condlinks' => 0,
    'enomnewtldsenabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d5bb164f8_68515241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d5bb164f8_68515241')) {function content_58636d5bb164f8_68515241($_smarty_tpl) {?>



<div class="sidebar-scroll">
	<!-- BEGIN SHORTCUT BUTTONS -->
	<div class="media">							
		<ul class="sidebar-shortcuts">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>clientarea.php?action=products<?php } else { ?>announcements.php<?php }?>" class="btn btn-success"><i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>cogs<?php } else { ?>bullhorn<?php }?> icon-only"></i></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart icon-only"></i></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>submitticket.php<?php } else { ?>contact.php<?php }?>" class="btn btn-warning"><i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>comments<?php } else { ?>envelope<?php }?> icon-only"></i></a></li>
			<li class="pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>logout.php<?php } else { ?>login.php<?php }?>" class="btn btn-danger"><i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>power-off<?php } else { ?>lock<?php }?> icon-only"></i></a></li>
		</ul>	
	</div>
	<!-- END SHORTCUT BUTTONS -->

	<!-- BEGIN FIND MENU ITEM INPUT -->
	<div class="media-search">	
		<div class="input-icon">
			<span class="fa fa-search"></span>
			<input type="text" class="input-menu" id="input-items">
		</div>
	</div>						
	<!-- END FIND MENU ITEM INPUT -->
						
	<ul id="side" class="nav navbar-nav side-nav">
		<!-- BEGIN SIDE NAV MENU -->
							
		<li><h4>Navigation</h4></li>
		<li>
			<a <?php if ($_smarty_tpl->tpl_vars['templatefile']->value=='homepage'||$_smarty_tpl->tpl_vars['templatefile']->value=='clientareahome') {?>class="active"<?php } else {
}?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>clientarea<?php } else { ?>index<?php }?>.php">
				<i class="fa fa-dashboard"></i> <span class="mtext"><?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['clientareatitle'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['globalsystemname'];
}?></span>
			</a>
		</li>
			
		<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
			<li class="panel <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="products"||$_GET['action']=="productdetails"||$_GET['action']=="cancel")) {?>open<?php }?> <?php if ($_smarty_tpl->tpl_vars['filename']->value=="cart"&$_GET['gid']=="addons") {?>open<?php }?>">
				<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-1">
					<i class="fa fa-cogs"></i> <span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservices'];?>
</span> <span class="fa arrow"></span>
				</a>
				<ul class="collapse nav" id="#m-1">
					<?php if ($_smarty_tpl->tpl_vars['clientsstats']->value['productsnumtotal']>0) {?>
					<li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="products"||$_GET['action']=="productdetails"||$_GET['action']=="cancel")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=products"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavservices'];?>
 <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['productsnumtotal'];?>
</span></a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?gid=addons"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainaddons'];?>
</a></li>
					<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['pmaddon']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php?m=project_management"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaprojects'];?>
</a></li><?php }?>
					</ul>
				</li>
				
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg']||$_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?>
			<li class="panel <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="domains"||$_GET['action']=="domaindetails"||$_GET['action']=="domainaddons"||$_GET['action']=="domaincontacts"||$_GET['action']=="domainregisterns"||$_GET['action']=="domaingetepp")) {?>open<?php }
if ($_smarty_tpl->tpl_vars['filename']->value=="domainchecker"||$_smarty_tpl->tpl_vars['filename']->value=="cart"&$_GET['gid']=="renewals") {?>open<?php }?>">
				<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-2">
					<i class="fa fa-globe"></i> <span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomains'];?>
</span> <span class="fa arrow"></span>
				</a>
				<ul class="collapse nav" id="#m-2">
					<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
						
					<?php if ($_smarty_tpl->tpl_vars['clientsstats']->value['numdomains']>0) {?><li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="domains"||$_GET['action']=="domaindetails"||$_GET['action']=="domainaddons"||$_GET['action']=="domaincontacts"||$_GET['action']=="domainregisterns"||$_GET['action']=="domaingetepp")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=domains"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdomains'];?>
 <span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numdomains'];?>
</span></a></li><?php } else {
}?>
					<?php if ($_smarty_tpl->tpl_vars['clientsstats']->value['numactivedomains']>0) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?gid=renewals"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewalprice'];?>
</a></li><?php } else {
}?>
					<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=register"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=transfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['enomnewtldsenabled']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php?m=enomnewtlds">Preregister New TLDs</a></li><?php }?>
					<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="domainchecker") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomainsearch'];?>
</a></li>
						
					<?php } else { ?>
						
					<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=register"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=add&domain=transfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['enomnewtldsenabled']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php?m=enomnewtlds">Preregister New TLDs</a></li><?php }?>
					<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="domainchecker") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomainsearch'];?>
</a></li>
						
					<?php }?>
				</ul>							
			</li>
			<?php }?>
				
			<li>
				<a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="cart") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php">
					<i class="fa fa-shopping-cart"></i><span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</span>
				</a>
			</li>
				
			<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
			<li class="panel <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="invoices"||$_GET['action']=="addfunds"||$_GET['action']=="masspay"||$_GET['action']=="creditcard"||$_GET['action']=="quotes"||$_GET['action']=="details"||$_GET['action']=="changepw"||$_GET['action']=="contacts"||$_GET['action']=="emails"||$_GET['action']=="security")) {?>open<?php }?>">
				<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-3">
					<i class="fa fa-money"></i> <span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navbilling'];?>
</span> <span class="fa arrow"></span>
				</a>
			<ul class="collapse nav" id="#m-3">
				<li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="invoices")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=invoices"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoices'];?>
 <?php if ($_smarty_tpl->tpl_vars['clientsstats']->value['numoverdueinvoices']>0) {?><span class="badge badge-danger"> <?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numdueinvoices'];?>
</span><?php }?></a></li>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?><li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="addfunds")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=addfunds"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['masspay']) {?><li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="masspay")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=masspay&all=true"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['masspaytitle'];?>
</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?><li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="creditcard")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=creditcard"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>
</a></li><?php }?>
				<li><a <?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['clientareatitle']&&($_GET['action']=="quotes")) {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php?action=quotes"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestitle'];?>
</a></li>	
			</ul>
		</li>
		<?php }?>
		
		
		<li class="panel <?php if ($_smarty_tpl->tpl_vars['filename']->value=="submitticket"||$_smarty_tpl->tpl_vars['filename']->value=="supporttickets"||$_smarty_tpl->tpl_vars['filename']->value=="viewticket"||$_smarty_tpl->tpl_vars['filename']->value=="knowledgebase"||$_smarty_tpl->tpl_vars['filename']->value=="downloads"||$_smarty_tpl->tpl_vars['filename']->value=="serverstatus") {?>open<?php }?>">
			<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-4">
				<i class="fa fa-support"></i> <span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navsupport'];?>
</span> <span class="fa arrow"></span>
			</a>
			<ul class="collapse nav" id="#m-4">
				<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
					
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="submitticket") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a></li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="supporttickets") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/supporttickets.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>
 <?php if ($_smarty_tpl->tpl_vars['clientsstats']->value['numactivetickets']>0) {?><span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numactivetickets'];?>
</span><?php }?></a></li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="knowledgebase") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="downloads") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/downloads.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadstitle'];?>
</a></li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="serverstatus") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverstatustitle'];?>
</a></li>
					
				<?php } else { ?>
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="submitticket") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a></li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="knowledgebase") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/knowledgebase.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
				<?php }?>	
			</ul>
		</li>
			
		<li>
			<a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="announcements") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements.php">
				<i class="fa fa-bullhorn"></i><span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementstitle'];?>
</span>
			</a>
		</li>
			
		<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['affiliates']) {?>
		<li>
			<a <?php if ($_smarty_tpl->tpl_vars['filename']->value=="affiliates") {?>class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/affiliates.php">
				<i class="fa fa-group"></i><span class="mtext"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatestitle'];?>
</span>
			</a>
		</li>
		<?php }?>
			
	</ul><!-- /.side-nav -->
</div><!-- /.navbar-collapse --><?php }} ?>
