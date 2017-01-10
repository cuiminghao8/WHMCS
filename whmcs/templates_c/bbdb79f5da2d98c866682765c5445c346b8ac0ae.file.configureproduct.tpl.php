<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 17:30:09
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/flathost/configureproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17337457175864d7a132a4d7-99605555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbdb79f5da2d98c866682765c5445c346b8ac0ae' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/flathost/configureproduct.tpl',
      1 => 1438000010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17337457175864d7a132a4d7-99605555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_PATH_JS' => 0,
    'carttpl' => 0,
    'BASE_PATH_CSS' => 0,
    'i' => 0,
    'firstconfig' => 0,
    'domain' => 0,
    'LANG' => 0,
    'pricing' => 0,
    'billingcycle' => 0,
    'configurableoptions' => 0,
    'productinfo' => 0,
    'server' => 0,
    'configoption' => 0,
    'options' => 0,
    'addons' => 0,
    'addon' => 0,
    'customfields' => 0,
    'customfield' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864d7a1452f56_70239346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864d7a1452f56_70239346')) {function content_5864d7a1452f56_70239346($_smarty_tpl) {?><div id="prodconfigcontainer">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_CSS']->value;?>
/jquery-ui.min.css" />

<div id="order-flathost">

<form id="orderfrm" onsubmit="catchEnter(event);">

<input type="hidden" name="configure" value="true" />
<input type="hidden" name="i" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" />

<?php if (!$_smarty_tpl->tpl_vars['firstconfig']->value||$_smarty_tpl->tpl_vars['firstconfig']->value&&!$_smarty_tpl->tpl_vars['domain']->value) {?>
    <div class="title-bar">
        <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigure'];?>
</h1>
    </div>
<?php }?>

<div id="configproducterror" class="errorbox"></div>

<div class="row">
<div class="col-md-8">

<?php if ($_smarty_tpl->tpl_vars['pricing']->value['type']=="recurring") {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartchoosecycle'];?>
</h3>
<div class="billingcycle">
<table width="100%" cellspacing="0" cellpadding="0" class="configtable">
<?php if ($_smarty_tpl->tpl_vars['pricing']->value['monthly']) {?><tr><td class="radiofield"><input type="radio" name="billingcycle" id="cycle1" value="monthly"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value=="monthly") {?> checked<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value)<?php } else { ?>recalctotals()<?php }?>" /></td><td class="fieldarea"><label for="cycle1" class="radio-inline"><?php echo $_smarty_tpl->tpl_vars['pricing']->value['monthly'];?>
</label></td></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pricing']->value['quarterly']) {?><tr><td class="radiofield"><input type="radio" name="billingcycle" id="cycle2" value="quarterly"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value=="quarterly") {?> checked<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value)<?php } else { ?>recalctotals()<?php }?>" /></td><td class="fieldarea"><label for="cycle2" class="radio-inline"><?php echo $_smarty_tpl->tpl_vars['pricing']->value['quarterly'];?>
</label></td></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pricing']->value['semiannually']) {?><tr><td class="radiofield"><input type="radio" name="billingcycle" id="cycle3" value="semiannually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value=="semiannually") {?> checked<?php }
if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?> onclick="updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value)"<?php }?> /></td><td class="fieldarea"><label for="cycle3" class="radio-inline"><?php echo $_smarty_tpl->tpl_vars['pricing']->value['semiannually'];?>
</label></td></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pricing']->value['annually']) {?><tr><td class="radiofield"><input type="radio" name="billingcycle" id="cycle4" value="annually"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value=="annually") {?> checked<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value)<?php } else { ?>recalctotals()<?php }?>" /></td><td class="fieldarea"><label for="cycle4" class="radio-inline"><?php echo $_smarty_tpl->tpl_vars['pricing']->value['annually'];?>
</label></td></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pricing']->value['biennially']) {?><tr><td class="radiofield"><input type="radio" name="billingcycle" id="cycle5" value="biennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value=="biennially") {?> checked<?php }
if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?> onclick="updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value)"<?php }?> /></td><td class="fieldarea"><label for="cycle5" class="radio-inline"><?php echo $_smarty_tpl->tpl_vars['pricing']->value['biennially'];?>
</label></td></tr><?php }?>
<?php if ($_smarty_tpl->tpl_vars['pricing']->value['triennially']) {?><tr><td class="radiofield"><input type="radio" name="billingcycle" id="cycle6" value="triennially"<?php if ($_smarty_tpl->tpl_vars['billingcycle']->value=="triennially") {?> checked<?php }
if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?> onclick="updateConfigurableOptions(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, this.value)"<?php }?> /></td><td class="fieldarea"><label for="cycle6" class="radio-inline"><?php echo $_smarty_tpl->tpl_vars['pricing']->value['triennially'];?>
</label></td></tr><?php }?>
</table>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['productinfo']->value['type']=="server") {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigserver'];?>
</h3>
<div class="serverconfig">
<table width="100%" cellspacing="0" cellpadding="0" class="configtable">
<tr><td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostname'];?>
:</td><td class="fieldarea"><input type="text" name="hostname" size="15" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['hostname'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverhostnameexample'];?>
</td></tr>
<tr><td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefix'];?>
:</td><td class="fieldarea"><input type="text" name="ns1prefix" size="10" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns1prefix'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns1prefixexample'];?>
</td></tr>
<tr><td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefix'];?>
:</td><td class="fieldarea"><input type="text" name="ns2prefix" size="10" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['ns2prefix'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverns2prefixexample'];?>
</td></tr>
<tr><td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['serverrootpw'];?>
:</td><td class="fieldarea"><input type="password" name="rootpw" size="20" value="<?php echo $_smarty_tpl->tpl_vars['server']->value['rootpw'];?>
" /></td></tr>
</table>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['configurableoptions']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderconfigpackage'];?>
</h3>
<div class="configoptions">
<table width="100%" cellspacing="0" cellpadding="0" class="configtable">
<?php  $_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['configoption']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['configurableoptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->key => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
?>
<tr><td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['configoption']->value['optionname'];?>
</td><td class="fieldarea">
<?php if ($_smarty_tpl->tpl_vars['configoption']->value['optiontype']==1) {?>
<select name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" onchange="recalctotals()" class="form-control">
<?php  $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['options']->_loop = false;
 $_smarty_tpl->tpl_vars['num2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['configoption']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['options']->key => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->_loop = true;
 $_smarty_tpl->tpl_vars['num2']->value = $_smarty_tpl->tpl_vars['options']->key;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue']==$_smarty_tpl->tpl_vars['options']->value['id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>
</option>
<?php } ?>
</select>
<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype']==2) {?>
<?php  $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['options']->_loop = false;
 $_smarty_tpl->tpl_vars['num2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['configoption']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['options']->key => $_smarty_tpl->tpl_vars['options']->value) {
$_smarty_tpl->tpl_vars['options']->_loop = true;
 $_smarty_tpl->tpl_vars['num2']->value = $_smarty_tpl->tpl_vars['options']->key;
?>
<label class="radio-inline"><input type="radio" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['options']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedvalue']==$_smarty_tpl->tpl_vars['options']->value['id']) {?> checked="checked"<?php }?> onclick="recalctotals()" /> <?php echo $_smarty_tpl->tpl_vars['options']->value['name'];?>
</label><br />
<?php } ?>
<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype']==3) {?>
<label class="checkbox-inline"><input type="checkbox" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="1"<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {?> checked<?php }?> onclick="recalctotals()" /> <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>
</label>
<?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['optiontype']==4) {?>
<?php if ($_smarty_tpl->tpl_vars['configoption']->value['qtymaximum']) {?>

    <?php echo '<script'; ?>
>
    jQuery(function() {
        
        var configid = '<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
';
        var configmin = <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];?>
;
        var configmax = <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qtymaximum'];?>
;
        var configval = <?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>;
        
        jQuery("#slider"+configid).slider({
            min: configmin,
            max: configmax,
            value: configval,
            range: "min",
            slide: function( event, ui ) {
                jQuery("#confop"+configid).val( ui.value );
                jQuery("#confoplabel"+configid).html( ui.value );
            },
            stop: function( event, ui ) {
                recalctotals();
            }
        });
    });
    <?php echo '</script'; ?>
>

<table width="90%"><tr><td width="30" id="confoplabel<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" class="configoplabel"><?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?></td><td><div id="slider<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
"></div></td></tr></table>
<input type="hidden" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" id="confop<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['configoption']->value['selectedqty']) {
echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];
} else {
echo $_smarty_tpl->tpl_vars['configoption']->value['qtyminimum'];
}?>" />
<?php } else { ?>
<input type="text" name="configoption[<?php echo $_smarty_tpl->tpl_vars['configoption']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['configoption']->value['selectedqty'];?>
" size="5" onkeyup="recalctotals()" class="form-control" /> x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['options'][0]['name'];?>

<?php }?>
<?php }?>
</td></tr>
<?php } ?>
</table>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['addons']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartavailableaddons'];?>
</h3>
<div class="addons">
<table width="100%" cellspacing="0" cellpadding="0" class="configtable">
<?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
?>
<tr><td class="radiofield"><input type="checkbox" name="addons[<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
]" id="a<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['addon']->value['status']) {?> checked<?php }?> onclick="recalctotals()" /></td><td class="fieldarea"><label for="a<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" class="checkbox-inline"><strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['addon']->value['pricing'];?>
<br /><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</label></td></tr>
<?php } ?>
</table>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
</h3>
<div class="customfields">
<table width="100%" cellspacing="0" cellpadding="0" class="configtable">
<?php  $_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customfield']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->key => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['customfield']->key;
?>
<tr><td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</td><td class="fieldarea"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</td></tr>
<?php } ?>
</table>
</div>
<?php }?>

</div>
<div class="col-md-4">
    <div>
        <div id="cartLoader" class="pull-right">
            <i class="fa fa-fw fa-refresh fa-spin"></i>
        </div>
        <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersummary'];?>
</h3>
    </div>
    <div class="ordersummary" id="producttotal"></div>
</div>

<div class="text-center">
    <button type="button" id="btnCompleteProductConfig" class="btn btn-primary btn-lg" onclick="addtocart();"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button><br /><br />
    <a href="cart.php?a=view" class="btn btn-default"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
</a>
</div>

</div>

<?php echo '<script'; ?>
>recalctotals();<?php echo '</script'; ?>
>

</form>

</div>

</div>
<?php }} ?>
