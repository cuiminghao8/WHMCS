<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:44:27
         compiled from "/home/wwwroot/default/whmcs/templates/eno/includes/modal-alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57764041558636d5bbe7dc3-06485541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec1ef9396406b7a1ef96098e3fa6e7250fc37c7' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/includes/modal-alert.tpl',
      1 => 1451771578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57764041558636d5bbe7dc3-06485541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d5bbeaf95_73497182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d5bbeaf95_73497182')) {function content_58636d5bbeaf95_73497182($_smarty_tpl) {?>



<div class="modal fade in" id="modalpleasewait">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                 <h4><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['pleasewait'];?>
</h4>
            </div>
        </div>
    </div>
</div><?php }} ?>
