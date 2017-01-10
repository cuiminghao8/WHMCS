<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 15:48:29
         compiled from "/home/wwwroot/default/whmcs/templates/FlatHost-html-mobantu.com/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8112802775864bfcd4b8d60-29848160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba492c9d0bb4b9964fbfdd1a847d6e6f61f3f893' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/FlatHost-html-mobantu.com/header.tpl',
      1 => 1386687500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8112802775864bfcd4b8d60-29848160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'kbarticle' => 0,
    'pagetitle' => 0,
    'companyname' => 0,
    'systemurl' => 0,
    'livehelpjs' => 0,
    'template' => 0,
    'headoutput' => 0,
    'headeroutput' => 0,
    'loggedin' => 0,
    'LANG' => 0,
    'condlinks' => 0,
    'loggedinuser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864bfcd572908_31278518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864bfcd572908_31278518')) {function content_5864bfcd572908_31278518($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php if ($_smarty_tpl->tpl_vars['systemurl']->value) {?><base href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
" />
    <?php }?><?php echo '<script'; ?>
 type="text/javascript" src="includes/jscript/jquery.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['livehelpjs']->value) {
echo $_smarty_tpl->tpl_vars['livehelpjs']->value;?>

    <?php }?>
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/bootstrap.css" rel="stylesheet">
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/whmcs.css" rel="stylesheet">
    
 <!--FLAT HOST STYLESHEET STARTS-->   
     <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
<!--FLAT HOST STYLESHEET ENDS-->
   
    <?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


  </head>

  <body>

<!--FLAT HOST HEADER CODE STARTS-->
<!--Be sure to check the added class templateNav to navbar for avoiding Conflict with WHMCS-->

<div class="navbar navbar-fixed-top navbar-absolute templateNav">
    <div class="navbar-inner">
      <div class="container"> 
        
        <!-- .btn-navbar is used as the toggle for collapsed navbar content --> 
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 
        
        <!-- Be sure to leave the brand out there if you want it shown --> 
        <a class="brand" href="#"> <img src="flathost-logo.png" width="174" height="52" alt="logo"></a> 
        
    <ul class="nav pull-right">
            <li class="active"><a href="#home">HOME</a></li>
            <li><a href="#features">FEATURES</a></li>
            <li><a href="#testimonials">PARTNERS</a></li>
            <li><a href="#pricing">PRICING</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="blog.html">Blog List</a></li>
                <li><a href="blog-post.html">Single Blog page</a></li>
              </ul>
            </li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#Login" role="button" data-toggle="modal">Login</a></li>
            <li><a href="#Signup" role="button" data-toggle="modal" class="btn btn-success">Sign Up</a></li>
          </ul>
      </div>
    </div>
  </div>

<!--FLAT HOST HEADER CODE ENDS-->



<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<div id="whmcsheader">
    <div class="whmcscontainer">
        <div id="whmcstxtlogo"><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a></div>
        <div id="whmcsimglogo"><a href="index.php"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/whmcslogo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
" /></a></div>
    </div>
</div>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse">
		<ul class="nav">
			<li><a href="<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>clientarea<?php } else { ?>index<?php }?>.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['hometitle'];?>
</a></li>
		</ul>
<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
    <ul class="nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservices'];?>
&nbsp;<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="clientarea.php?action=products"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavservices'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['pmaddon']) {?><li><a href="index.php?m=project_management"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaprojects'];?>
</a></li><?php }?>
            <li class="divider"></li>
            <li><a href="cart.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</a></li>
            <li><a href="cart.php?gid=addons"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaviewaddons'];?>
</a></li>
          </ul>
        </li>
      </ul>


		  <ul class="nav">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomains'];?>
&nbsp;<b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="clientarea.php?action=domains"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavdomains'];?>
</a></li>
				<li class="divider"></li>
				<li><a href="cart.php?gid=renewals"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navrenewdomains'];?>
</a></li>
				<li><a href="cart.php?a=add&domain=register"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</a></li>
				<li><a href="cart.php?a=add&domain=transfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtransferdomain'];?>
</a></li>
				<li class="divider"></li>
				<li><a href="domainchecker.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navwhoislookup'];?>
</a></li>
			  </ul>
			</li>
		  </ul>

		  <ul class="nav">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navbilling'];?>
&nbsp;<b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="clientarea.php?action=invoices"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['invoices'];?>
</a></li>
				<li><a href="clientarea.php?action=quotes"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotestitle'];?>
</a></li>
				<li class="divider"></li>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?><li><a href="clientarea.php?action=addfunds"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['masspay']) {?><li><a href="clientarea.php?action=masspay&all=true"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['masspaytitle'];?>
</a></li><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?><li><a href="clientarea.php?action=creditcard"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>
</a></li><?php }?>
			  </ul>
			</li>
		  </ul>

		  <ul class="nav">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navsupport'];?>
&nbsp;<b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="supporttickets.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>
</a></li>
				<li><a href="knowledgebase.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
				<li><a href="downloads.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadstitle'];?>
</a></li>
				<li><a href="serverstatus.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['networkstatustitle'];?>
</a></li>
			  </ul>
			</li>
		  </ul>

		  <ul class="nav">
			<li><a href="submitticket.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navopenticket'];?>
</a></li>
		  </ul>

		  <ul class="nav">
            <li><a href="affiliates.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatestitle'];?>
</a></li>
		  </ul>

		  <ul class="nav pull-right">
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['hello'];?>
, <?php echo $_smarty_tpl->tpl_vars['loggedinuser']->value['firstname'];?>
!&nbsp;<b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="clientarea.php?action=details"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['editaccountdetails'];?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['updatecc']) {?><li><a href="clientarea.php?action=creditcard"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navmanagecc'];?>
</a></li><?php }?>
				<li><a href="clientarea.php?action=contacts"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavcontacts'];?>
</a></li>
				<?php if ($_smarty_tpl->tpl_vars['condlinks']->value['addfunds']) {?><li><a href="clientarea.php?action=addfunds"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['addfunds'];?>
</a></li><?php }?>
				<li><a href="clientarea.php?action=emails"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navemailssent'];?>
</a></li>
				<li><a href="clientarea.php?action=changepw"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavchangepw'];?>
</a></li>
				<li class="divider"></li>
				<li><a href="logout.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logouttitle'];?>
</a></li>
			  </ul>
			</li>
		  </ul>
<?php } else { ?>
		  <ul class="nav">
			<li><a href="announcements.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['announcementstitle'];?>
</a></li>
		  </ul>
          
		  <ul class="nav">
			<li><a href="knowledgebase.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['knowledgebasetitle'];?>
</a></li>
		  </ul>
          
		  <ul class="nav">
			<li><a href="serverstatus.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['networkstatustitle'];?>
</a></li>
		  </ul>
          
		  <ul class="nav">
			<li><a href="affiliates.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatestitle'];?>
</a></li>
		  </ul>
          
		  <ul class="nav">
			<li><a href="contact.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactus'];?>
</a></li>
		  </ul>

		  <ul class="nav pull-right">
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account'];?>
&nbsp;<b class="caret"></b></a>
			  <ul class="dropdown-menu">
				<li><a href="clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a></li>
				<li><a href="register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a></li>
				<li class="divider"></li>
				<li><a href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a></li>
			  </ul>
			</li>
		  </ul>
<?php }?>

        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->


<div class="whmcscontainer">
    <div class="contentpadded">

<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['carttitle']) {?><div id="whmcsorderfrm"><?php }?>

<?php }} ?>
