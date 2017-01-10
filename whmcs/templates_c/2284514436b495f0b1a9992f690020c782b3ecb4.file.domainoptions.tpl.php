<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:33:41
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/modern/domainoptions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2125426655863b125c9d040-03951256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2284514436b495f0b1a9992f690020c782b3ecb4' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/modern/domainoptions.tpl',
      1 => 1460367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125426655863b125c9d040-03951256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invalid' => 0,
    'reason' => 0,
    'LANG' => 0,
    'alreadyindb' => 0,
    'checktype' => 0,
    'regenabled' => 0,
    'status' => 0,
    'domain' => 0,
    'regoptions' => 0,
    'regoption' => 0,
    'period' => 0,
    'transferenabled' => 0,
    'transferprice' => 0,
    'transferterm' => 0,
    'sld' => 0,
    'tld' => 0,
    'othersuggestions' => 0,
    'other' => 0,
    'continueok' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863b125d4a057_63673273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863b125d4a057_63673273')) {function content_5863b125d4a057_63673273($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['invalid']->value) {?>
    <div class="domaininvalid">
        <?php if ($_smarty_tpl->tpl_vars['reason']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['reason']->value;?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomaininvalid'];?>

        <?php }?>
    </div>
    <p align="center">
        <button type="button" onclick="cancelcheck()" class="btn btn-default btn-lg">
            <i class="fa fa-arrow-circle-left"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttryanotherdomain'];?>

        </button>
    </p>
<?php } elseif ($_smarty_tpl->tpl_vars['alreadyindb']->value) {?>
    <div class="domaininvalid">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartdomainexists'];?>

    </div>
    <p align="center">
        <button type="button" onclick="cancelcheck()" class="btn btn-default btn-lg">
            <i class="fa fa-arrow-circle-left"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttryanotherdomain'];?>

        </button>
    </p>
<?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['checktype']->value=="register"&&$_smarty_tpl->tpl_vars['regenabled']->value) {?>

<input type="hidden" name="domainoption" value="register" />

<?php if ($_smarty_tpl->tpl_vars['status']->value=="available"||$_smarty_tpl->tpl_vars['status']->value=="error") {?>

<div class="domainavailable"><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartcongratsdomainavailable'],$_smarty_tpl->tpl_vars['domain']->value);?>
</div>
<input type="hidden" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
<div class="domainregperiod"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartregisterhowlong'];?>
 <select name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
]" id="regperiod" class="form-control select-inline"><?php  $_smarty_tpl->tpl_vars['regoption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['regoption']->_loop = false;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regoptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['regoption']->key => $_smarty_tpl->tpl_vars['regoption']->value) {
$_smarty_tpl->tpl_vars['regoption']->_loop = true;
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['regoption']->key;
if ($_smarty_tpl->tpl_vars['regoption']->value['register']) {?><option value="<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['regoption']->value['register'];?>
</option><?php }
} ?></select></div>

<?php if (isset($_smarty_tpl->tpl_vars['continueok'])) {$_smarty_tpl->tpl_vars['continueok'] = clone $_smarty_tpl->tpl_vars['continueok'];
$_smarty_tpl->tpl_vars['continueok']->value = true; $_smarty_tpl->tpl_vars['continueok']->nocache = null; $_smarty_tpl->tpl_vars['continueok']->scope = 0;
} else $_smarty_tpl->tpl_vars['continueok'] = new Smarty_variable(true, null, 0);?>

<?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="unavailable") {?>

<div class="domainunavailable"><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartdomaintaken'],$_smarty_tpl->tpl_vars['domain']->value);?>
</div>
<p align="center">
    <button type="button" onclick="cancelcheck()" class="btn btn-default btn-lg">
        <i class="fa fa-arrow-circle-left"></i>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttryanotherdomain'];?>

    </button>
</p>


<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['checktype']->value=="transfer"&&$_smarty_tpl->tpl_vars['transferenabled']->value) {?>

<input type="hidden" name="domainoption" value="transfer" />

<?php if ($_smarty_tpl->tpl_vars['status']->value=="available") {?>

<div class="domainunavailable"><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['carttransfernotregistered'],$_smarty_tpl->tpl_vars['domain']->value);?>
</div>
<p align="center">
    <button type="button" onclick="cancelcheck()" class="btn btn-default btn-lg">
        <i class="fa fa-arrow-circle-left"></i>
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttryanotherdomain'];?>

    </button>
</p>

<?php } elseif ($_smarty_tpl->tpl_vars['status']->value=="unavailable"||$_smarty_tpl->tpl_vars['status']->value=="error") {?>

<div class="domainavailable"><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['carttransferpossible'],$_smarty_tpl->tpl_vars['domain']->value,$_smarty_tpl->tpl_vars['transferprice']->value);?>
</div>
<input type="hidden" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" />
<input type="hidden" name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['transferterm']->value;?>
" />

<?php if (isset($_smarty_tpl->tpl_vars['continueok'])) {$_smarty_tpl->tpl_vars['continueok'] = clone $_smarty_tpl->tpl_vars['continueok'];
$_smarty_tpl->tpl_vars['continueok']->value = true; $_smarty_tpl->tpl_vars['continueok']->nocache = null; $_smarty_tpl->tpl_vars['continueok']->scope = 0;
} else $_smarty_tpl->tpl_vars['continueok'] = new Smarty_variable(true, null, 0);?>

<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['checktype']->value=="owndomain"||$_smarty_tpl->tpl_vars['checktype']->value=="subdomain") {?>

<input type="hidden" name="domainoption" value="<?php echo $_smarty_tpl->tpl_vars['checktype']->value;?>
" />
<input type="hidden" name="sld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" />
<input type="hidden" name="tld" value="<?php echo $_smarty_tpl->tpl_vars['tld']->value;?>
" />
<?php echo '<script'; ?>
 language="javascript">
completedomain();
<?php echo '</script'; ?>
>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['othersuggestions']->value) {?>

<div class="domainsuggestions"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartotherdomainsuggestions'];?>
</div>

<table align="center" cellspacing="1" class="domainsuggestions">
<tr><th width="50"></th><th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainname'];?>
</th><th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarearegistrationperiod'];?>
</th></tr>
<?php  $_smarty_tpl->tpl_vars['other'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['other']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['othersuggestions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['other']->key => $_smarty_tpl->tpl_vars['other']->value) {
$_smarty_tpl->tpl_vars['other']->_loop = true;
?>
<tr><td><input type="checkbox" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['other']->value['domain'];?>
" /></td><td><?php echo $_smarty_tpl->tpl_vars['other']->value['domain'];?>
</td><td><select name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['other']->value['domain'];?>
]"><?php  $_smarty_tpl->tpl_vars['regoption'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['regoption']->_loop = false;
 $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other']->value['regoptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['regoption']->key => $_smarty_tpl->tpl_vars['regoption']->value) {
$_smarty_tpl->tpl_vars['regoption']->_loop = true;
 $_smarty_tpl->tpl_vars['period']->value = $_smarty_tpl->tpl_vars['regoption']->key;
if ($_smarty_tpl->tpl_vars['regoption']->value['register']) {?><option value="<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['regoption']->value['register'];?>
</option><?php }
} ?></select></td></tr>
<?php } ?>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['continueok'])) {$_smarty_tpl->tpl_vars['continueok'] = clone $_smarty_tpl->tpl_vars['continueok'];
$_smarty_tpl->tpl_vars['continueok']->value = true; $_smarty_tpl->tpl_vars['continueok']->nocache = null; $_smarty_tpl->tpl_vars['continueok']->scope = 0;
} else $_smarty_tpl->tpl_vars['continueok'] = new Smarty_variable(true, null, 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['continueok']->value) {?>
<div class="text-center">
    <button type="submit" class="btn btn-primary btn-lg"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
</div>
<?php }?>

<?php }?>
<?php }} ?>
