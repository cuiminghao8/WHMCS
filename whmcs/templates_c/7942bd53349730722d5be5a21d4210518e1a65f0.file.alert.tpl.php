<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 16:20:36
         compiled from "/home/wwwroot/default/whmcs/templates/flathost/includes/alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5088757495864c754f3ccf4-55303353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7942bd53349730722d5be5a21d4210518e1a65f0' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/flathost/includes/alert.tpl',
      1 => 1436224736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5088757495864c754f3ccf4-55303353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'textcenter' => 0,
    'hide' => 0,
    'additionalClasses' => 0,
    'idname' => 0,
    'errorshtml' => 0,
    'LANG' => 0,
    'title' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864c755018cd2_75243292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864c755018cd2_75243292')) {function content_5864c755018cd2_75243292($_smarty_tpl) {?><div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['type']->value=="error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }
if ($_smarty_tpl->tpl_vars['textcenter']->value) {?> text-center<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['additionalClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['additionalClasses']->value;
}?>"<?php if ($_smarty_tpl->tpl_vars['idname']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['errorshtml']->value) {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errorshtml']->value;?>

    </ul>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<?php }?>
</div>
<?php }} ?>
