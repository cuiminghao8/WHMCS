<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 17:18:01
         compiled from "/home/wwwroot/default/whmcs/templates/flathost/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21211002745864d4c944a616-55094569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0030e9fa6e45a4bee2918fc64401a48ba6a09ae0' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/flathost/logout.tpl',
      1 => 1436224736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21211002745864d4c944a616-55094569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864d4c94802a1_92574205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864d4c94802a1_92574205')) {function content_5864d4c94802a1_92574205($_smarty_tpl) {?><div class="logincontainer">

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['logouttitle']), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['logoutsuccessful'],'textcenter'=>true), 0);?>


    <div class="main-content">
        <p class="text-center">
            <a href="index.php" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutcontinuetext'];?>
</a>
        </p>
    </div>
</div>
<?php }} ?>
