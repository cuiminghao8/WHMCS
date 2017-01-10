<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:39:02
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/standard_cart/ordersummary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115981613758648556839705-90083930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6928ec2a0149bb4bf5db84196eb9b8f74cfe89d4' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/standard_cart/ordersummary.tpl',
      1 => 1460367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115981613758648556839705-90083930',
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
  'unifunc' => 'content_586485568b98c9_35401237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586485568b98c9_35401237')) {function content_586485568b98c9_35401237($_smarty_tpl) {?><span class="product-name"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</span>
<span class="product-group"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['groupname'];?>
</span>

<div class="clearfix">
    <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['productinfo']['name'];?>
</span>
    <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['baseprice'];?>
</span>
</div>

<?php  $_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['configoption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttotals']->value['configoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->key => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['configoption']->value) {?>
        <div class="clearfix">
            <span class="pull-left">&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</span>
            <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['recurring'];
if ($_smarty_tpl->tpl_vars['configoption']->value['setup']) {?> + <?php echo $_smarty_tpl->tpl_vars['configoption']->value['setup'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?></span>
        </div>
    <?php }?>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['producttotals']->value['addons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
?>
    <div class="clearfix">
        <span class="pull-left">+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
        <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurring'];?>
</span>
    </div>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup']||$_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurring']||$_smarty_tpl->tpl_vars['producttotals']->value['pricing']['addons']) {?>
    <div class="summary-totals">
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup']) {?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartsetupfees'];?>
:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['setup'];?>
</span>
            </div>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['recurring'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recurring']->_loop = false;
 $_smarty_tpl->tpl_vars['cycle'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['recurringexcltax']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recurring']->key => $_smarty_tpl->tpl_vars['recurring']->value) {
$_smarty_tpl->tpl_vars['recurring']->_loop = true;
 $_smarty_tpl->tpl_vars['cycle']->value = $_smarty_tpl->tpl_vars['recurring']->key;
?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['cycle']->value;?>
:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['recurring']->value;?>
</span>
            </div>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1']) {?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate'];?>
%:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax1'];?>
</span>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2']) {?>
            <div class="clearfix">
                <span class="pull-left"><?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxname2'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['carttotals']->value['taxrate2'];?>
%:</span>
                <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['tax2'];?>
</span>
            </div>
        <?php }?>
    </div>
<?php }?>

<div class="total-due-today">
    <span class="amt"><?php echo $_smarty_tpl->tpl_vars['producttotals']->value['pricing']['totaltoday'];?>
</span>
    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
</span>
</div>
<?php }} ?>
