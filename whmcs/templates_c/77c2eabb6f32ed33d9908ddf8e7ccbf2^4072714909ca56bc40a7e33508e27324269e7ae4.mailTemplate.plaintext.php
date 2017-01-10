<?php /* Smarty version Smarty-3.1.21, created on 2017-01-06 14:28:11
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:10178265775864858cd5ea05-60305104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4072714909ca56bc40a7e33508e27324269e7ae4' => 
    array (
      0 => 'mailTemplate:plaintext',
      1 => 1483684091,
      2 => 'mailTemplate',
    ),
  ),
  'nocache_hash' => '10178265775864858cd5ea05-60305104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864858cd65100_94738955',
  'variables' => 
  array (
    'client_name' => 0,
    'order_number' => 0,
    'order_details' => 0,
    'signature' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864858cd65100_94738955')) {function content_5864858cd65100_94738955($_smarty_tpl) {?><p>
Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 
</p>
<p>
We have received your order and will be processing it shortly. The details of the order are below: 
</p>
<p>
Order Number: <b><?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
</b></p>
<p>
<?php echo $_smarty_tpl->tpl_vars['order_details']->value;?>
 
</p>
<p>
You will receive an email from us shortly once your account has been setup. Please quote your order reference number if you wish to contact us about this order. 
</p>
<p>
<?php echo $_smarty_tpl->tpl_vars['signature']->value;?>

</p>
<?php }} ?>
