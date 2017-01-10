<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:33:31
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/modern/configureproductdomain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4228542555863b11bca0487-04173027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '267a942c6a8ed17974fd58ec0569979a1d8f338d' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/modern/configureproductdomain.tpl',
      1 => 1460367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4228542555863b11bca0487-04173027',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carttpl' => 0,
    'LANG' => 0,
    'productinfo' => 0,
    'incartdomains' => 0,
    'incartdomain' => 0,
    'registerdomainenabled' => 0,
    'companyname' => 0,
    'sld' => 0,
    'registertlds' => 0,
    'listtld' => 0,
    'tld' => 0,
    'transferdomainenabled' => 0,
    'transfertlds' => 0,
    'owndomainenabled' => 0,
    'subdomains' => 0,
    'subid' => 0,
    'subdomain' => 0,
    'freedomaintlds' => 0,
    'pid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863b11bd37376_44540994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863b11bd37376_44540994')) {function content_5863b11bd37376_44540994($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />

<div id="order-modern">

    <div class="text-center">
        <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductselection'];?>
: <?php echo $_smarty_tpl->tpl_vars['productinfo']->value['groupname'];?>
 - <?php echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartmakedomainselection'];?>
</p>
    </div>

<form onsubmit="checkdomain();return false">

    <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="domainoptions">
    <?php if ($_smarty_tpl->tpl_vars['incartdomains']->value) {?>
            <div class="option">
                <label class="radio-inline">
                    <input type="radio" name="domainoption" value="incart" id="selincart" /><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomainuseincart'];?>

                </label>
                <div class="domainreginput hidden clearfix" id="domainincart">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <select id="incartsld" name="incartdomain" class="form-control">
                                <?php  $_smarty_tpl->tpl_vars['incartdomain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['incartdomain']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['incartdomains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['incartdomain']->key => $_smarty_tpl->tpl_vars['incartdomain']->value) {
$_smarty_tpl->tpl_vars['incartdomain']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['incartdomain']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
            <div class="option">
                <label class="radio-inline">
                    <input type="radio" name="domainoption" value="register" id="selregister" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartregisterdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                </label>
                <div class="domainreginput hidden clearfix" id="domainregister">
                    <div class="row">
                        <div class="col-sm-6 col-xs-8 col-sm-offset-2">
                            <div class="input-group">
                                <span class="input-group-addon">www.</span>
                                <input type="text" id="registersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" />
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <select id="registertld" class="form-control">
                            <?php  $_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listtld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['registertlds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->key => $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value==$_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
            <div class="option">
                <label class="radio-inline">
                    <input type="radio" name="domainoption" value="transfer" id="seltransfer" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['carttransferdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                </label>
                <div class="domainreginput hidden clearfix" id="domaintransfer">
                    <div class="row">
                        <div class="col-sm-6 col-xs-8 col-sm-offset-2">
                            <div class="input-group">
                                <span class="input-group-addon">www.</span>
                                <input type="text" id="transfersld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" />
                            </div>
                        </div>
                        <div class="col-sm-2 col-xs-4">
                            <select id="transfertld" class="form-control">
                            <?php  $_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listtld']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transfertlds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->key => $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value==$_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['owndomainenabled']->value) {?>
            <div class="option">
                <label class="radio-inline">
                    <input type="radio" name="domainoption" value="owndomain" id="selowndomain" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartexistingdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                </label>
                <div class="domainreginput hidden clearfix" id="domainowndomain">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="row">
                                <div class="col-xs-2 text-right">
                                    <p class="form-control-static">www.</p>
                                </div>
                                <div class="col-xs-7">
                                    <input type="text" id="owndomainsld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" placeholder="yourdomain" class="form-control" autocapitalize="none" />
                                </div>
                                <div class="col-xs-3">
                                    <input type="text" id="owndomaintld" value="<?php echo substr($_smarty_tpl->tpl_vars['tld']->value,1);?>
" placeholder="com" class="form-control" autocapitalize="none" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['subdomains']->value) {?>
            <div class="option">
                <label class="radio-inline">
                    <input type="radio" name="domainoption" value="subdomain" id="selsubdomain" /><?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['cartsubdomainchoice'],$_smarty_tpl->tpl_vars['companyname']->value);?>

                </label>
                <div class="domainreginput hidden" id="domainsubdomain">
                    http:// <input type="text" id="subdomainsld" size="30" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" autocapitalize="none" /> <select id="subdomaintld"><?php  $_smarty_tpl->tpl_vars['subdomain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subdomain']->_loop = false;
 $_smarty_tpl->tpl_vars['subid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subdomains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subdomain']->key => $_smarty_tpl->tpl_vars['subdomain']->value) {
$_smarty_tpl->tpl_vars['subdomain']->_loop = true;
 $_smarty_tpl->tpl_vars['subid']->value = $_smarty_tpl->tpl_vars['subdomain']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
</option><?php } ?></select>
                </div>
            </div>
    <?php }?>
        </div>
    </div>
    </div>

    <div class="domain-fade-out">

        <div class="text-center">
            <button type="submit" id="btnDomainContinue" class="btn btn-primary btn-lg"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['freedomaintlds']->value) {?><p>* <em><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainregistration'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainappliesto'];?>
: <?php echo $_smarty_tpl->tpl_vars['freedomaintlds']->value;?>
</em></p><?php }?>

    </div>

</form>

<div id="greyout"></div>

<div id="domainpopupcontainer">
    <form id="domainfrm" onsubmit="completedomain();return false">
        <div class="domainresults" id="domainresults">
            <img src="assets/img/loading.gif" border="0" alt="Loading..." />
        </div>
    </form>
</div>

<div id="prodconfigcontainer" class="hidden"></div>

<div class="clearfix"></div>

</div>


<?php echo '<script'; ?>
 language="javascript">
jQuery(".domainoptions input:first").attr('checked','checked');
jQuery(".domainoptions input:first").parent().parent().addClass('optionselected');
jQuery("#domain"+jQuery(".domainoptions input:first").val()).removeClass('hidden').show();
jQuery(document).ready(function(){
    jQuery(".domainoptions input:radio").click(function(){
        jQuery(".domainoptions .option").removeClass('optionselected');
        jQuery(this).parent().parent().addClass('optionselected');
        jQuery(".domainreginput").hide();
        jQuery("#domain"+jQuery(this).val()).removeClass('hidden').show();
    });
});
function checkdomain() {
    jQuery("#greyout").fadeIn();
    jQuery("#domainpopupcontainer").hide().removeClass('hidden').slideDown();
    var domainoption = jQuery(".domainoptions input:checked").val();
    var sld = jQuery("#"+domainoption+"sld").val();
    var tld = '';
    if (domainoption=='incart') var sld = jQuery("#"+domainoption+"sld option:selected").text();
    if (domainoption=='subdomain') var tld = jQuery("#"+domainoption+"tld option:selected").text();
    else var tld = jQuery("#"+domainoption+"tld").val();
    jQuery.post("cart.php", { ajax: 1, a: "domainoptions", sld: sld, tld: tld, checktype: domainoption },
    function(data){
        jQuery("#domainresults").html(data);
    });
}
function cancelcheck() {
    jQuery("#domainpopupcontainer").slideUp('slow',function() {
        jQuery("#greyout").fadeOut();
        jQuery("#domainresults").html('<img src="assets/img/loading.gif" border="0" alt="Loading..." />');
    });
}
function completedomain() {
    jQuery("#domainresults").append('<img src="assets/img/loading.gif" border="0" alt="Loading..." />');
    jQuery.post("cart.php", 'ajax=1&a=add&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
&domainselect=1&'+jQuery("#domainfrm").serialize(),
    function(data){
        if (data=='') {
            window.location='cart.php?a=view';
        } else if (data=='nodomains') {
            jQuery("#domainpopupcontainer").slideUp('slow',function() {
                jQuery("#greyout").fadeOut();
            });
        } else {
            jQuery("#prodconfigcontainer").html(data);
            jQuery(".domain-fade-out").fadeOut();
            jQuery("#domainpopupcontainer").slideUp('slow',function() {
                jQuery("#greyout").fadeOut();
            });
            jQuery("#prodconfigcontainer").hide().removeClass('hidden').slideDown();
        }
    });
}
<?php echo '</script'; ?>
>

<?php }} ?>
