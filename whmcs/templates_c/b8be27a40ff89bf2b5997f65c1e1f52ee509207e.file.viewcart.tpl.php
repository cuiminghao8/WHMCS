<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 17:30:18
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/flathost/viewcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11642891365864d7aa26f741-70622979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8be27a40ff89bf2b5997f65c1e1f52ee509207e' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/flathost/viewcart.tpl',
      1 => 1438000230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11642891365864d7aa26f741-70622979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carttpl' => 0,
    'clientsProfileOptionalFields' => 0,
    'BASE_PATH_JS' => 0,
    'LANG' => 0,
    'errormessage' => 0,
    'promotioncode' => 0,
    'rawdiscount' => 0,
    'bundlewarnings' => 0,
    'warning' => 0,
    'loggedin' => 0,
    'currencies' => 0,
    'curr' => 0,
    'currency' => 0,
    'BASE_PATH_IMG' => 0,
    'products' => 0,
    'product' => 0,
    'configoption' => 0,
    'num' => 0,
    'addon' => 0,
    'addons' => 0,
    'domains' => 0,
    'domain' => 0,
    'renewals' => 0,
    'cartitems' => 0,
    'subtotal' => 0,
    'promotiondescription' => 0,
    'discount' => 0,
    'taxrate' => 0,
    'taxname' => 0,
    'taxtotal' => 0,
    'taxrate2' => 0,
    'taxname2' => 0,
    'taxtotal2' => 0,
    'total' => 0,
    'totalrecurringmonthly' => 0,
    'totalrecurringquarterly' => 0,
    'totalrecurringsemiannually' => 0,
    'totalrecurringannually' => 0,
    'totalrecurringbiennially' => 0,
    'totalrecurringtriennially' => 0,
    'gatewaysoutput' => 0,
    'gatewayoutput' => 0,
    'custtype' => 0,
    'clientsdetails' => 0,
    'password' => 0,
    'password2' => 0,
    'countries' => 0,
    'thisCountryCode' => 0,
    'thisCountryName' => 0,
    'customfields' => 0,
    'customfield' => 0,
    'securityquestions' => 0,
    'question' => 0,
    'taxenabled' => 0,
    'domainsinorder' => 0,
    'domaincontacts' => 0,
    'domcontact' => 0,
    'contact' => 0,
    'domaincontact' => 0,
    'shownotesfield' => 0,
    'notes' => 0,
    'gateways' => 0,
    'gateway' => 0,
    'selectedgateway' => 0,
    'selectedgatewaytype' => 0,
    'ccinfo' => 0,
    'acceptedcctypes' => 0,
    'cctype' => 0,
    'cardtype' => 0,
    'ccnumber' => 0,
    'months' => 0,
    'ccexpirymonth' => 0,
    'month' => 0,
    'expiryyears' => 0,
    'ccexpiryyear' => 0,
    'year' => 0,
    'showccissuestart' => 0,
    'ccstartmonth' => 0,
    'startyears' => 0,
    'ccstartyear' => 0,
    'ccissuenum' => 0,
    'cccvv' => 0,
    'shownostore' => 0,
    'accepttos' => 0,
    'tosurl' => 0,
    'ipaddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864d7aa60f6c4_44795548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864d7aa60f6c4_44795548')) {function content_5864d7aa60f6c4_44795548($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/wwwroot/default/whmcs/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
?><link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />
<?php echo '<script'; ?>
 language="javascript">
 // Define state tab index value
    var statesTab=10;
<?php if (in_array('state',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?>
 // Do not enforce state input client side
    var stateNotRequired = true;
<?php }?>
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/PasswordStrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/CreditCardValidation.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 language="javascript">
function removeItem(type,num) {
    var response = confirm("<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremoveitemconfirm'];?>
");
    if (response) {
        window.location = 'cart.php?a=remove&r='+type+'&i='+num;
    }
}
function emptyCart(type,num) {
    var response = confirm("<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartemptyconfirm'];?>
");
    if (response) {
        window.location = 'cart.php?a=empty';
    }
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
window.langPasswordStrength = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrength'];?>
";
window.langPasswordWeak = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthweak'];?>
";
window.langPasswordModerate = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthmoderate'];?>
";
window.langPasswordStrong = "<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwstrengthstrong'];?>
";
<?php echo '</script'; ?>
>

<div id="order-flathost">

    <div class="text-center">
        <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartreviewcheckout'];?>
</h1>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <div class="errorbox" style="display:block;">
            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['errormessage']->value,'<li>',' &nbsp;#&nbsp; ');?>
 &nbsp;#&nbsp;
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['promotioncode']->value&&$_smarty_tpl->tpl_vars['rawdiscount']->value=="0.00") {?>
        <div class="errorbox" style="display:block;">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['promoappliedbutnodiscount'];?>

        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['bundlewarnings']->value) {?>
        <div class="cartwarningbox">
            <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundlereqsnotmet'];?>
</strong><br />
            <?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bundlewarnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
<br />
            <?php } ?>
        </div>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="currencychooser">
            <div class="btn-group" role="group">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                    <a href="cart.php?a=view&currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                        <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                    </a>
                <?php } ?>
            </div>
        </div>
    <?php }?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=view">

        <table class="table table-bordered" cellspacing="1">
            <tr>
                <th width="60%"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdesc'];?>
</th>
                <th width="40%" class="text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
</th>
            </tr>

            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
                <tr class="carttableproduct">
                    <td>
                        <strong><em><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['groupname'];?>
</em> - <?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['name'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> (<?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];?>
)<?php }?><br />
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['configoptions']) {?>
                            <?php  $_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['configoption']->_loop = false;
 $_smarty_tpl->tpl_vars['confnum'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['configoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['configoption']->key => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
 $_smarty_tpl->tpl_vars['confnum']->value = $_smarty_tpl->tpl_vars['configoption']->key;
?>
                                &nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
: <?php if ($_smarty_tpl->tpl_vars['configoption']->value['type']==1||$_smarty_tpl->tpl_vars['configoption']->value['type']==2) {
echo $_smarty_tpl->tpl_vars['configoption']->value['option'];
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['type']==3) {
if ($_smarty_tpl->tpl_vars['configoption']->value['qty']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['no'];
}
} elseif ($_smarty_tpl->tpl_vars['configoption']->value['type']==4) {
echo $_smarty_tpl->tpl_vars['configoption']->value['qty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['option'];
}?><br />
                            <?php } ?>
                        <?php }?>
                        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=confproduct&i=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="label label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carteditproductconfig'];?>
</a>
                        <a href="#" onclick="removeItem('p','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['allowqty']) {?>
                        <br /><br />
                        <div align="right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartqtyenterquantity'];?>
 <input type="text" name="qty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" size="3" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
" /> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartqtyupdate'];?>
" class="btn btn-default btn-sm" /></div>
                        <?php }?>
                    </td>
                    <td class="text-center">
                        <strong><?php echo $_smarty_tpl->tpl_vars['product']->value['pricingtext'];
if ($_smarty_tpl->tpl_vars['product']->value['proratadate']) {?><br />(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprorata'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['proratadate'];?>
)<?php }?></strong>
                    </td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['addonnum'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['addons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['addonnum']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
                    <tr class="carttableproduct">
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</td>
                        <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricingtext'];?>
</strong></td>
                    </tr>
                <?php } ?>
            <?php } ?>

            <?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
                <tr class="carttableproduct">
                    <td>
                        <strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</strong><br />
                        <?php echo $_smarty_tpl->tpl_vars['addon']->value['productname'];
if ($_smarty_tpl->tpl_vars['addon']->value['domainname']) {?> - <?php echo $_smarty_tpl->tpl_vars['addon']->value['domainname'];?>
<br /><?php }?>
                        <a href="#" onclick="removeItem('a','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
</a>
                    </td>
                    <td class="text-center"><strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricingtext'];?>
</strong></td>
                </tr>
            <?php } ?>

            <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['domain']->key;
?>
                <tr class="carttableproduct">
                    <td>
                        <strong><?php if ($_smarty_tpl->tpl_vars['domain']->value['type']=="register") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainregistration'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomaintransfer'];
}?></strong> - <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
<br />
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
<br /><?php }?>
                        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=confdomains" class="label label-info"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigdomainextras'];?>
</a>
                        <a href="#" onclick="removeItem('d','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
</a>
                    </td>
                    <td class="text-center">
                        <strong><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</strong>
                    </td>
                </tr>
            <?php } ?>

            <?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['renewals']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['domain']->key;
?>
                <tr class="carttableproduct">
                    <td>
                        <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewal'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
<br />
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
<br /><?php }?>
                        <a href="#" onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
</a>
                    </td>
                    <td class="text-center">
                        <strong><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</strong>
                    </td>
                </tr>
            <?php } ?>

            <?php if ($_smarty_tpl->tpl_vars['cartitems']->value==0) {?>
                <tr class="clientareatableactive">
                    <td colspan="2" class="text-center">
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartempty'];?>

                        <br /><br />
                    </td>
                </tr>
            <?php }?>

            <tr class="subtotal active">
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersubtotal'];?>
: &nbsp;</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
                <tr class="promotion active">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
: &nbsp;</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                <tr class="subtotal active">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
%: &nbsp;</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['taxtotal']->value;?>
</td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
                <tr class="subtotal active">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
%: &nbsp;</td>
                    <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['taxtotal2']->value;?>
</td>
                </tr>
            <?php }?>
            <tr class="total success">
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
: &nbsp;</td>
                <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['totalrecurringmonthly']->value||$_smarty_tpl->tpl_vars['totalrecurringquarterly']->value||$_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value||$_smarty_tpl->tpl_vars['totalrecurringannually']->value||$_smarty_tpl->tpl_vars['totalrecurringbiennially']->value||$_smarty_tpl->tpl_vars['totalrecurringtriennially']->value) {?>
                <tr class="recurring warning">
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalrecurring'];?>
: &nbsp;</td>
                    <td class="text-center">
                        <?php if ($_smarty_tpl->tpl_vars['totalrecurringmonthly']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringmonthly']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['totalrecurringquarterly']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringquarterly']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['totalrecurringannually']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringannually']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['totalrecurringbiennially']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringbiennially']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>
<br /><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['totalrecurringtriennially']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringtriennially']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>
<br /><?php }?>
                    </td>
                </tr>
            <?php }?>
        </table>

    </form>

    <div class="cartbuttons">
        <button type="button" class="btn btn-danger btn-sm" onclick="emptyCart();return false"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emptycart'];?>
</button>
        <a href="cart.php" class="btn btn-default btn-sm"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continueshopping'];?>
</a>
    </div>

    <?php  $_smarty_tpl->tpl_vars['gatewayoutput'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gatewayoutput']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gatewaysoutput']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gatewayoutput']->key => $_smarty_tpl->tpl_vars['gatewayoutput']->value) {
$_smarty_tpl->tpl_vars['gatewayoutput']->_loop = true;
?>
        <div class="clear"></div>
        <div class="cartbuttons">
            <?php echo $_smarty_tpl->tpl_vars['gatewayoutput']->value;?>

        </div>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['cartitems']->value!=0) {?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=checkout" id="mainfrm">
            <input type="hidden" name="submit" value="true" />
            <input type="hidden" name="custtype" id="custtype" value="<?php echo $_smarty_tpl->tpl_vars['custtype']->value;?>
" />

            <br /><br />

            <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['yourdetails'];?>
</h2>

            <div class="signuptype<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['custtype']->value!="existing") {?> active<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?> id="newcust"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newcustomer'];?>
</div><div class="signuptype<?php if ($_smarty_tpl->tpl_vars['custtype']->value=="existing"&&!$_smarty_tpl->tpl_vars['loggedin']->value||$_smarty_tpl->tpl_vars['loggedin']->value) {?> active<?php }?>" id="existingcust"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['existingcustomer'];?>
</div>
            <div class="clear"></div>

            <div class="signupfields signupfields-existing<?php if ($_smarty_tpl->tpl_vars['custtype']->value=="existing"&&!$_smarty_tpl->tpl_vars['loggedin']->value) {
} else { ?> hidden<?php }?>" id="loginfrm">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="form-group">
                        <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                        <input type="email" name="loginemail" class="form-control" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?> />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                        <input type="password" name="loginpw" class="form-control" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled<?php }?> />
                    </div>

                </div>

                <div class="clearfix"></div>

            </div>
            <div class="signupfields<?php if ($_smarty_tpl->tpl_vars['custtype']->value=="existing"&&!$_smarty_tpl->tpl_vars['loggedin']->value) {?> hidden<?php }?>" id="signupfrm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="firstname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                                <input type="text" name="firstname" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
" class="form-control"<?php if (!in_array('firstname',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?> />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="lastname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                                <input type="text" name="lastname" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
" class="form-control"<?php if (!in_array('lastname',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?>  />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="companyname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                                <input type="text" name="companyname" id="companyname" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
" class="form-control" />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                                <input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>
" class="form-control" required/>
                            <?php }?>
                        </div>
                        <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                            <div id="newPassword1" class="form-group has-feedback">
                                <label for="inputNewPassword1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                                <input type="password" class="form-control" id="inputNewPassword1" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" required/>
                                <span class="form-control-feedback glyphicon glyphicon-password"></span>
                                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            </div>
                            <div id="newPassword2" class="form-group has-feedback">
                                <label for="inputNewPassword2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
</label>
                                <input type="password" class="form-control" id="inputNewPassword2" name="password2" value="<?php echo $_smarty_tpl->tpl_vars['password2']->value;?>
" required/>
                                <span class="form-control-feedback glyphicon glyphicon-password"></span>
                                <div id="inputNewPassword2Msg">
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="address1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                                <input type="text" name="address1" id="address1" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
" class="form-control"<?php if (!in_array('address1',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?> />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="address2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                                <input type="text" name="address2" id="address2" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
" class="form-control" />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="city" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                                <input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
" class="form-control"<?php if (!in_array('city',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?> />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="state" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                                <input type="text" name="state" id="state" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
" class="form-control"<?php if (!in_array('state',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?> />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="postcode" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                                <input type="text" name="postcode" id="postcode" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
" class="form-control"<?php if (!in_array('postcode',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?> />
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['country'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="country" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                                <select id="country" name="country" class="form-control">
                                    <?php  $_smarty_tpl->tpl_vars['thisCountryName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisCountryName']->_loop = false;
 $_smarty_tpl->tpl_vars['thisCountryCode'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisCountryName']->key => $_smarty_tpl->tpl_vars['thisCountryName']->value) {
$_smarty_tpl->tpl_vars['thisCountryName']->_loop = true;
 $_smarty_tpl->tpl_vars['thisCountryCode']->value = $_smarty_tpl->tpl_vars['thisCountryName']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['thisCountryCode']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['thisCountryCode']->value==$_smarty_tpl->tpl_vars['clientsdetails']->value['country']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['thisCountryName']->value;?>
</option>
                                    <?php } ?>
                                </select>
                            <?php }?>
                        </div>
                        <div class="form-group">
                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <div class="row">
                                    <label class="col-sm-4 text-right">
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>

                                    </label>
                                    <div class="col-sm-8">
                                        <?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>

                                    </div>
                                </div>
                            <?php } else { ?>
                                <label for="phonenumber" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                                <input type="text" name="phonenumber" id="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>
" class="form-control"<?php if (!in_array('phonenumber',$_smarty_tpl->tpl_vars['clientsProfileOptionalFields']->value)) {?> required<?php }?> />
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                            <?php  $_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customfield']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->key => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['customfield']->key;
?>
                                <div class="form-group">
                                    <label class="control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
                                    <div class="control">
                                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                    </div>
                                </div>
                            <?php } ?>
                        <?php }?>
                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value&&!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="panel panel-default" id="securityQuestion">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
:</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group col-sm-12">
                            <select name="securityqid" id="securityqid" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['securityquestions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
                            <div class="col-sm-6">
                                <input type="password" name="securityqans" id="securityqans" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['taxenabled']->value&&!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="carttaxwarning">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselections'];?>

                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>
" name="updateonly" class="btn btn-info btn-sm" />
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['domainsinorder']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrantinfo'];?>
</h2>
                <select name="contact" id="inputDomainContact" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                    <?php  $_smarty_tpl->tpl_vars['domcontact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domcontact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domaincontacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domcontact']->key => $_smarty_tpl->tpl_vars['domcontact']->value) {
$_smarty_tpl->tpl_vars['domcontact']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['domcontact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value==$_smarty_tpl->tpl_vars['domcontact']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['domcontact']->value['name'];?>
</option>
                    <?php } ?>
                    <option value="addingnew"<?php if ($_smarty_tpl->tpl_vars['contact']->value=="addingnew") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavaddcontact'];?>
...</option>
                </select>
                <br />
                <div class="signupfields<?php if ($_smarty_tpl->tpl_vars['contact']->value!="addingnew") {?> hidden<?php }?>" id="domaincontactfields">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="domaincontactfirstname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                                <input type="text" name="domaincontactfirstname" id="domaincontactfirstname" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['firstname'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactlastname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                                <input type="text" name="domaincontactlastname" id="domaincontactlastname" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['lastname'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactcompanyname" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                                <input type="text" name="domaincontactcompanyname" id="domaincontactcompanyname" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['companyname'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactemail" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                                <input type="email" name="domaincontactemail" id="domaincontactemail" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['email'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactphonenumber" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                                <input type="text" name="domaincontactphonenumber" id="domaincontactphonenumber" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['phonenumber'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="domaincontactaddress1" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                                <input type="text" name="domaincontactaddress1" id="domaincontactaddress1" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address1'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactaddress2" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                                <input type="text" name="domaincontactaddress2" id="domaincontactaddress2" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address2'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactcity" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                                <input type="text" name="domaincontactcity" id="domaincontactcity" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['city'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactstate" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                                <input type="text" name="domaincontactstate" id="domaincontactstate" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['state'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactpostcode" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                                <input type="text" name="domaincontactpostcode" id="domaincontactpostcode" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['postcode'];?>
" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="domaincontactcountry" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                                <select id="domaincontactcountry" name="domaincontactcountry" class="form-control">
                                    <?php  $_smarty_tpl->tpl_vars['thisCountryName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thisCountryName']->_loop = false;
 $_smarty_tpl->tpl_vars['thisCountryCode'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thisCountryName']->key => $_smarty_tpl->tpl_vars['thisCountryName']->value) {
$_smarty_tpl->tpl_vars['thisCountryName']->_loop = true;
 $_smarty_tpl->tpl_vars['thisCountryCode']->value = $_smarty_tpl->tpl_vars['thisCountryName']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['thisCountryCode']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['domaincontact']->value['country']&&$_smarty_tpl->tpl_vars['thisCountryCode']->value==$_smarty_tpl->tpl_vars['domaincontact']->value['country'])||$_smarty_tpl->tpl_vars['thisCountryCode']->value==$_smarty_tpl->tpl_vars['clientsdetails']->value['country']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['thisCountryName']->value;?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <div class="row">
                <div class="col-md-6">

                    <div class="signupfields padded">
                        <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpromotioncode'];?>
</h2>
                        <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
                            <?php echo $_smarty_tpl->tpl_vars['promotioncode']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
<br />
                            <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=removepromo"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdontusepromo'];?>
</a>
                        <?php } else { ?>
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <input type="text" name="promocode" id="inputPromoCode" class="form-control" placeholder="<?php echo WHMCS\Smarty::langFunction(array('key'=>"orderPromoCodePlaceholder"),$_smarty_tpl);?>
">
                                    <span class="input-group-btn">
                                        <button type="submit" name="validatepromo" formnovalidate class="btn btn-warning" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpromovalidatebutton'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpromovalidatebutton'];?>

                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        <?php }?>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['shownotesfield']->value) {?>
                        <div class="signupfields padded">
                            <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotes'];?>
</h2>
                            <textarea name="notes" rows="3" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotesdescription'];?>
"><?php echo $_smarty_tpl->tpl_vars['notes']->value;?>
</textarea>
                        </div>
                    <?php }?>

                </div>
                <div class="col-md-6">

                    <div class="signupfields padded">
                        <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</h2>
                        <?php  $_smarty_tpl->tpl_vars['gateway'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gateway']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gateways']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gateway']->key => $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['gateway']->key;
?>
                            <label class="radio-inline">
                                <input type="radio" name="paymentmethod" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" id="pgbtn<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" onclick="<?php if ($_smarty_tpl->tpl_vars['gateway']->value['type']=="CC") {?>showCCForm()<?php } else { ?>hideCCForm()<?php }?>"<?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value==$_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?> checked<?php }?> />
                                <?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>

                            </label>
                        <?php } ?>

                        <br /><br />

                        <div id="ccinputform" class="signupfields<?php if ($_smarty_tpl->tpl_vars['selectedgatewaytype']->value!="CC") {?> hidden<?php }?>">
                            <table width="100%" cellspacing="0" cellpadding="0" class="configtable textleft">
                                <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                                    <tr>
                                        <td class="fieldlabel"></td>
                                        <td class="fieldarea">
                                            <label class="radio-inline">
                                                <input type="radio" name="ccinfo" value="useexisting" id="useexisting" onclick="useExistingCC()"<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?> checked<?php } else { ?> disabled<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcarduseexisting'];?>

                                                <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                                                    (<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'];?>
)
                                                <?php }?>
                                            </label><br />
                                            <label class="radio-inline">
                                                <input type="radio" name="ccinfo" value="new" id="new" onclick="enterNewCC()"<?php if (!$_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']||$_smarty_tpl->tpl_vars['ccinfo']->value=="new") {?> checked<?php }?> />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardenternewcard'];?>

                                            </label>
                                        </td>
                                    </tr>
                                <?php } else { ?>
                                    <input type="hidden" name="ccinfo" value="new" />
                                <?php }?>
                                <tr class="newccinfo"<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']&&$_smarty_tpl->tpl_vars['ccinfo']->value!="new") {?> style="display:none;"<?php }?>>
                                    <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardtype'];?>
</td>
                                    <td class="fieldarea">
                                        <select name="cctype" id="cctype">
                                            <?php  $_smarty_tpl->tpl_vars['cardtype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cardtype']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['acceptedcctypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cardtype']->key => $_smarty_tpl->tpl_vars['cardtype']->value) {
$_smarty_tpl->tpl_vars['cardtype']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['cardtype']->key;
?>
                                                <option<?php if ($_smarty_tpl->tpl_vars['cctype']->value==$_smarty_tpl->tpl_vars['cardtype']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cardtype']->value;?>
</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="newccinfo"<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']&&$_smarty_tpl->tpl_vars['ccinfo']->value!="new") {?> style="display:none;"<?php }?>>
                                    <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardnumber'];?>
</td>
                                    <td class="fieldarea">
                                        <input type="text" name="ccnumber" size="30" value="<?php echo $_smarty_tpl->tpl_vars['ccnumber']->value;?>
" autocomplete="off" />
                                    </td>
                                </tr>
                                <tr class="newccinfo"<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']&&$_smarty_tpl->tpl_vars['ccinfo']->value!="new") {?> style="display:none;"<?php }?>>
                                    <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardexpires'];?>
</td>
                                    <td class="fieldarea">
                                        <select name="ccexpirymonth" id="ccexpirymonth" class="newccinfo">
                                            <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
                                                <option<?php if ($_smarty_tpl->tpl_vars['ccexpirymonth']->value==$_smarty_tpl->tpl_vars['month']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                            <?php } ?>
                                        </select>
                                        /
                                        <select name="ccexpiryyear" class="newccinfo">
                                            <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expiryyears']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
                                                <option<?php if ($_smarty_tpl->tpl_vars['ccexpiryyear']->value==$_smarty_tpl->tpl_vars['year']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?>
                                    <tr class="newccinfo"<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']&&$_smarty_tpl->tpl_vars['ccinfo']->value!="new") {?> style="display:none;"<?php }?>>
                                        <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardstart'];?>
</td>
                                        <td class="fieldarea">
                                            <select name="ccstartmonth" id="ccstartmonth" class="newccinfo">
                                                <?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
?>
                                                    <option<?php if ($_smarty_tpl->tpl_vars['ccstartmonth']->value==$_smarty_tpl->tpl_vars['month']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                            /
                                            <select name="ccstartyear" class="newccinfo">
                                                <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['startyears']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
                                                    <option<?php if ($_smarty_tpl->tpl_vars['ccstartyear']->value==$_smarty_tpl->tpl_vars['year']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr class="newccinfo"<?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']&&$_smarty_tpl->tpl_vars['ccinfo']->value!="new") {?> style="display:none;"<?php }?>>
                                        <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardissuenum'];?>
</td>
                                        <td class="fieldarea">
                                            <input type="text" name="ccissuenum" value="<?php echo $_smarty_tpl->tpl_vars['ccissuenum']->value;?>
" size="5" maxlength="3" />
                                        </td>
                                    </tr>
                                <?php }?>
                                <tr>
                                    <td class="fieldlabel"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcvvnumber'];?>
</td>
                                    <td class="fieldarea">
                                        <input type="text" name="cccvv" id="cccvv" value="<?php echo $_smarty_tpl->tpl_vars['cccvv']->value;?>
" size="5" autocomplete="off" />
                                        <a href="#" onclick="window.open('images/ccv.gif','','width=280,height=200,scrollbars=no,top=100,left=100');return false"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcvvwhere'];?>
</a>
                                    </td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['shownostore']->value) {?>
                                    <tr>
                                        <td></td>
                                        <td class="fieldarea">
                                            <label class="checkbox-inline" for="nostore">
                                                <input type="checkbox" name="nostore" />
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardnostore'];?>

                                            </label>
                                        </td>
                                    </tr>
                                <?php }?>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                <div align="center">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="accepttos" id="accepttos" />
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a>
                    </label>
                </div>
                <br />
            <?php }?>

            <div align="center">
                <button type="submit" id="btnCompleteOrder"<?php if ($_smarty_tpl->tpl_vars['cartitems']->value==0) {?> disabled<?php }?> onclick="this.value='<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pleasewait'];?>
'" class="btn btn-primary btn-lg" <?php if ($_smarty_tpl->tpl_vars['custtype']->value=="existing"&&!$_smarty_tpl->tpl_vars['loggedin']->value) {?>formnovalidate<?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout'];?>

                    &nbsp;<i class="fa fa-arrow-circle-right"></i>
                </button>
            </div>

        </form>

    <?php } else { ?>

        <br /><br />

    <?php }?>

    <div class="cartwarningbox">
        <img src="assets/img/padlock.gif" align="absmiddle" border="0" alt="Secure Transaction" />
        &nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

    </div>

</div>
<?php }} ?>
