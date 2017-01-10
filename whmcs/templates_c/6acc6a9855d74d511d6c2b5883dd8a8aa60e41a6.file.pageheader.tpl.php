<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:45:10
         compiled from "/home/wwwroot/default/whmcs/templates/eno/includes/pageheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102137445058636d86bfdd50-29941604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6acc6a9855d74d511d6c2b5883dd8a8aa60e41a6' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/includes/pageheader.tpl',
      1 => 1436469414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102137445058636d86bfdd50-29941604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'desc' => 0,
    'showbreadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d86c46883_09875965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d86c46883_09875965')) {function content_58636d86c46883_09875965($_smarty_tpl) {?>

<div class="page-header title hidden-xs">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <span class="sub-title"><?php if ($_smarty_tpl->tpl_vars['desc']->value) {
echo $_smarty_tpl->tpl_vars['desc']->value;
}?></span></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div>
<div class="page-header title visible-xs">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <span class="sub-title"><?php if ($_smarty_tpl->tpl_vars['desc']->value) {?><br /><?php echo $_smarty_tpl->tpl_vars['desc']->value;
}?></span></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
</div><?php }} ?>
