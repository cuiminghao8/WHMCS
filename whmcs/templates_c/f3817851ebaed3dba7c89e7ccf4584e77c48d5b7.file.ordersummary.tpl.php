<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 17:30:10
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/flathost/ordersummary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11701537905864d7a2a07007-35840581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3817851ebaed3dba7c89e7ccf4584e77c48d5b7' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/flathost/ordersummary.tpl',
      1 => 1436224736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11701537905864d7a2a07007-35840581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'producttotals' => 0,
    'configoption' => 0,
    'LANG' => 0,
    'addon' => 0,
    'cycle' => 0,
    'recurring' => 0,
    'carttotals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864d7a2a78f25_96769079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864d7a2a78f25_96769079')) {function content_5864d7a2a78f25_96769079($_smarty_tpl) {?><div class="summaryproduct"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['groupname'];?>
 - <b><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</b></div>
<table class="ordersummarytbl">
<tr><td><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['baseprice'];?>
</td></tr>
<?php  $_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['configoption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttotals']->value['configoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->key => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
if ($_smarty_tpl->tpl_vars['configoption']->value) {?>
<tr><td style="padding-left:10px;">&raquo; <?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['recurring'];
if ($_smarty_tpl->tpl_vars['configoption']->value['setup']) {?> + <?php echo $_smarty_tpl->tpl_vars['configoption']->value['setup'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?></td></tr>
<?php }
} ?>
<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttotals']->value['addons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
?>
<tr><td>+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurring'];?>
</td></tr>
<?php } ?>
</table>
<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup']||$_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurring']||$_smarty_tpl->tpl_vars['producttotals']->value['pricing']['addons']) {?>
<div class="summaryproduct"></div>
<table width="100%">
<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup']) {?><tr><td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartsetupfees'];?>
:</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'];?>
</td></tr><?php }?>
<?php  $_smarty_tpl->tpl_vars['recurring'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recurring']->_loop = false;
 $_smarty_tpl->tpl_vars['cycle'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurringexcltax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recurring']->key => $_smarty_tpl->tpl_vars['recurring']->value) {
$_smarty_tpl->tpl_vars['recurring']->_loop = true;
 $_smarty_tpl->tpl_vars['cycle']->value = $_smarty_tpl->tpl_vars['recurring']->key;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
:</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['recurring']->value;?>
</td></tr>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1']) {?><tr><td><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate'];?>
%:</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1'];?>
</td></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2']) {?><tr><td><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname2'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'];?>
%:</td><td class="text-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2'];?>
</td></tr><?php }?>
</table>
<?php }?>
<div class="summaryproduct"></div>
<table width="100%">
<tr><td colspan="2" class="text-right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
: <b><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['totaltoday'];?>
</b></td></tr>
</table>
<?php }} ?>
