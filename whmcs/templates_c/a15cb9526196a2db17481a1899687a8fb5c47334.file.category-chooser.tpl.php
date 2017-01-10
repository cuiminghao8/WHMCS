<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:33:28
         compiled from "templates/orderforms/modern/category-chooser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15382269415863b118d7b5a5-04543242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a15cb9526196a2db17481a1899687a8fb5c47334' => 
    array (
      0 => 'templates/orderforms/modern/category-chooser.tpl',
      1 => 1460367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15382269415863b118d7b5a5-04543242',
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
  'unifunc' => 'content_5863b118d989d2_22702981',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863b118d989d2_22702981')) {function content_5863b118d989d2_22702981($_smarty_tpl) {?><div class="choosecat btn-group">
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
