<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:15:53
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/thememetro-d-plus/common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17246443325863acf96eb534-53444470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a2afb62d8d539d383f8ec70891052dd60e6338' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/thememetro-d-plus/common.tpl',
      1 => 1443782998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17246443325863acf96eb534-53444470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carttpl' => 0,
    'BASE_PATH_CSS' => 0,
    'BASE_PATH_JS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863acf96f4738_33252159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863acf96f4738_33252159')) {function content_5863acf96f4738_33252159($_smarty_tpl) {?><link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/css/default.css" />
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/css/style.css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/icheck/square/blue.css" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/icheck/square/green.css" rel="stylesheet">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/icheck.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/base.js"><?php echo '</script'; ?>
>
<?php }} ?>
