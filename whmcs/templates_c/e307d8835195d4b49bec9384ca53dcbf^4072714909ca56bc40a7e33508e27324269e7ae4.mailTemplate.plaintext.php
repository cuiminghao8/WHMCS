<?php /* Smarty version Smarty-3.1.21, created on 2017-01-06 14:28:11
         compiled from "mailTemplate:plaintext" */ ?>
<?php /*%%SmartyHeaderCode:17756295545864858ccdea02-43257854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '17756295545864858ccdea02-43257854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864858cd09828_33317882',
  'variables' => 
  array (
    'order_id' => 0,
    'order_number' => 0,
    'order_date' => 0,
    'invoice_id' => 0,
    'order_payment_method' => 0,
    'client_id' => 0,
    'client_first_name' => 0,
    'client_last_name' => 0,
    'client_email' => 0,
    'client_company_name' => 0,
    'client_address1' => 0,
    'client_address2' => 0,
    'client_city' => 0,
    'client_state' => 0,
    'client_postcode' => 0,
    'client_country' => 0,
    'client_phonenumber' => 0,
    'order_items' => 0,
    'order_notes' => 0,
    'client_ip' => 0,
    'client_hostname' => 0,
    'whmcs_admin_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864858cd09828_33317882')) {function content_5864858cd09828_33317882($_smarty_tpl) {?><p><strong>Order Information</strong></p>
<p>Order ID: <?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
<br />
Order Number: <?php echo $_smarty_tpl->tpl_vars['order_number']->value;?>
<br />
Date/Time: <?php echo $_smarty_tpl->tpl_vars['order_date']->value;?>
<br />
Invoice Number: <?php echo $_smarty_tpl->tpl_vars['invoice_id']->value;?>
<br />
Payment Method: <?php echo $_smarty_tpl->tpl_vars['order_payment_method']->value;?>
</p>
<p><strong>Customer Information</strong></p>
<p>Customer ID: <?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
<br />
Name: <?php echo $_smarty_tpl->tpl_vars['client_first_name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['client_last_name']->value;?>
<br />
Email: <?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
<br />
Company: <?php echo $_smarty_tpl->tpl_vars['client_company_name']->value;?>
<br />
Address 1: <?php echo $_smarty_tpl->tpl_vars['client_address1']->value;?>
<br />
Address 2: <?php echo $_smarty_tpl->tpl_vars['client_address2']->value;?>
<br />
City: <?php echo $_smarty_tpl->tpl_vars['client_city']->value;?>
<br />
State: <?php echo $_smarty_tpl->tpl_vars['client_state']->value;?>
<br />
Postcode: <?php echo $_smarty_tpl->tpl_vars['client_postcode']->value;?>
<br />
Country: <?php echo $_smarty_tpl->tpl_vars['client_country']->value;?>
<br />
Phone Number: <?php echo $_smarty_tpl->tpl_vars['client_phonenumber']->value;?>
</p>
<p><strong>Order Items</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_items']->value;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['order_notes']->value) {?><p><strong>Order Notes</strong></p>
<p><?php echo $_smarty_tpl->tpl_vars['order_notes']->value;?>
</p><?php }?>
<p><strong>ISP Information</strong></p>
<p>IP: <?php echo $_smarty_tpl->tpl_vars['client_ip']->value;?>
<br />
Host: <?php echo $_smarty_tpl->tpl_vars['client_hostname']->value;?>
</p><p><a href="<?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['whmcs_admin_url']->value;?>
orders.php?action=view&id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
</a></p><?php }} ?>
