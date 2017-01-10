<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 21:03:50
         compiled from "/home/wwwroot/default/whmcs/admin/templates/NeWorld/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1113572975863b8360fdf47-40889168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142519f4717fdc05847f3dbd9beb77e73b9fa530' => 
    array (
      0 => '/home/wwwroot/default/whmcs/admin/templates/NeWorld/header.tpl',
      1 => 1466917066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1113572975863b8360fdf47-40889168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'pagetitle' => 0,
    'BASE_PATH_CSS' => 0,
    'template' => 0,
    'BASE_PATH_JS' => 0,
    'datepickerformat' => 0,
    'jquerycode' => 0,
    'jscode' => 0,
    'headoutput' => 0,
    'headeroutput' => 0,
    '_ADMINLANG' => 0,
    'topBarNotification' => 0,
    'sidebarstats' => 0,
    'minsidebar' => 0,
    'helplink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863b836181ed5_48522499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863b836181ed5_48522499')) {function content_5863b836181ed5_48522499($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WHMCS - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/style.css" rel="stylesheet" type="text/css" />
    <link href="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/admin.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/lightbox.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/jquery.growl.css" rel="stylesheet" type="text/css">

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/textext.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap-switch.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery.growl.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        var datepickerformat = "<?php echo $_smarty_tpl->tpl_vars['datepickerformat']->value;?>
";
        <?php if ($_smarty_tpl->tpl_vars['jquerycode']->value) {?>
            $(document).ready(function(){
                <?php echo $_smarty_tpl->tpl_vars['jquerycode']->value;?>

            });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['jscode']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['jscode']->value;?>

        <?php }?>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/head.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/AdminAdvSearch.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>

    
    <div class="topbar" id="topnav">
        <div class="pull-left" id="welcome">
            <a href="index.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['home']['title'];?>
</a>
            <a href="../"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['clientarea'];?>
</a>
            <a href="#" data-toggle="modal" data-target="#myNotes"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['mynotes'];?>
</a>
            <a href="myaccount.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['myaccount'];?>
</a>
            <a id="logout" href="logout.php"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['global']['logout'];?>
</a>
            <?php echo $_smarty_tpl->tpl_vars['topBarNotification']->value;?>

        </div>
        <div class="pull-right right">
            <a href="orders.php?status=Pending">
                <span class="stat"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['orders']['pending'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['pendingorders'];?>

            </a>
            <a href="invoices.php?status=Overdue">
                <span class="stat"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['invoices']['overdue'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['overdueinvoices'];?>

            </a>
            <a href="supporttickets.php">
                <span class="stat"><?php echo $_smarty_tpl->tpl_vars['sidebarstats']->value['tickets']['awaitingreply'];?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['stats']['ticketsawaitingreply'];?>

            </a>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="header">
        <h1 class="logo">
            <a href="index.php">NeWorld Admin Panel</a>
        </h1>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div id="sidebaropen"<?php if (!$_smarty_tpl->tpl_vars['minsidebar']->value) {?> style="display:none;"<?php }?>>
        <a href="#" onclick="sidebarOpen();return false">
            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/opensidebar.png" border="0" />
        </a>
    </div>
    <div id="sidebar"<?php if ($_smarty_tpl->tpl_vars['minsidebar']->value) {?> style="display:none;"<?php }?>>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

    <div class="contentarea" id="contentarea"<?php if (!$_smarty_tpl->tpl_vars['minsidebar']->value) {?> style="margin-left: 195px;"<?php }?>>

        <div style="float:left;width:100%;">

            <?php if ($_smarty_tpl->tpl_vars['helplink']->value) {?>
                <div class="contexthelp">
                    <a href="http://docs.whmcs.com/<?php echo $_smarty_tpl->tpl_vars['helplink']->value;?>
" target="_blank">
                        <img src="images/icons/help.png" border="0" align="absmiddle" />
                        <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['help']['contextlink'];?>

                    </a>
                </div>
            <?php }?>

            <h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
<?php }} ?>
