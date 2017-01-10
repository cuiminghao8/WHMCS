<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 17:30:00
         compiled from "templates/orderforms/flathost/category-chooser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17197172335864d798adf775-38233349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '639ec2508860f6335f9aceda603058817c158db6' => 
    array (
      0 => 'templates/orderforms/flathost/category-chooser.tpl',
      1 => 1436224736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17197172335864d798adf775-38233349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'productgroups' => 0,
    'productgroup' => 0,
    'loggedin' => 0,
    'renewalsenabled' => 0,
    'registerdomainenabled' => 0,
    'transferdomainenabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864d798afa879_39583833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864d798afa879_39583833')) {function content_5864d798afa879_39583833($_smarty_tpl) {?><div class="choosecat btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartchooseanothercategory'];?>
 <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <?php  $_smarty_tpl->tpl_vars['productgroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['productgroup']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['productgroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['productgroup']->key => $_smarty_tpl->tpl_vars['productgroup']->value) {
$_smarty_tpl->tpl_vars['productgroup']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['productgroup']->key;
?>
            <li><a href="cart.php?gid=<?php echo $_smarty_tpl->tpl_vars['productgroup']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['productgroup']->value['name'];?>
</a></li>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
            <li><a href="cart.php?gid=addons"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['renewalsenabled']->value) {?>
                <li><a href="cart.php?gid=renewals"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'];?>
</a></li>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
            <li><a href="cart.php?a=add&domain=register"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['registerdomain'];?>
</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
            <li><a href="cart.php?a=add&domain=transfer"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferdomain'];?>
</a></li>
        <?php }?>
        <li><a href="cart.php?a=view"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
</a></li>
    </ul>
</div>
<?php }} ?>
