<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:44:08
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/standard_cart/addons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13713921925864868807ee59-09190768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb1f017779277a3534f06c08cf1eea8314c6579d' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/standard_cart/addons.tpl',
      1 => 1460367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13713921925864868807ee59-09190768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'addons' => 0,
    'num' => 0,
    'addon' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586486880f6918_39831134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586486880f6918_39831134')) {function content_586486880f6918_39831134($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="order-standard_cart">

    <div class="row">

        <div class="pull-md-right col-md-9">

            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</h1>
            </div>

        </div>

        <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div>

        <div class="col-md-9 pull-md-right">

            <?php echo $_smarty_tpl->getSubTemplate ("orderforms/standard_cart/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if (count($_smarty_tpl->tpl_vars['addons']->value)==0) {?>
                <div class="alert alert-warning text-center" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddonsnone'];?>

                </div>
                <p class="text-center">
                    <a href="clientarea.php" class="btn btn-default">
                        <i class="fa fa-arrow-circle-left"></i>
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['returnToClientArea'];?>

                    </a>
                </p>
            <?php }?>

            <div class="products">
                <div class="row row-eq-height">
                    <?php  $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addon']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['addons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addon']->key => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['addon']->key;
?>
                        <div class="col-md-6">
                            <div class="product clearfix" id="product<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add" class="form-inline">
                                    <input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['addon']->value['id'];?>
" />
                                    <header>
                                        <span><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</span>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']) {?>
                                            <span class="qty">
                                                <?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>

                                            </span>
                                        <?php }?>
                                    </header>
                                    <div class="product-desc">
                                        <p><?php echo $_smarty_tpl->tpl_vars['addon']->value['description'];?>
</p>
                                        <div class="form-group">
                                            <select name="productid" id="inputProductId<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="field">
                                                <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addon']->value['productids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> - <?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];
}?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <footer>
                                        <div class="product-pricing">
                                            <?php if ($_smarty_tpl->tpl_vars['addon']->value['free']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>

                                            <?php } else { ?>
                                                <span class="price"><?php echo $_smarty_tpl->tpl_vars['addon']->value['recurringamount'];?>
 <?php echo $_smarty_tpl->tpl_vars['addon']->value['billingcycle'];?>
</span>
                                                <?php if ($_smarty_tpl->tpl_vars['addon']->value['setupfee']) {?><br />+ <?php echo $_smarty_tpl->tpl_vars['addon']->value['setupfee'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersetupfee'];
}?>
                                            <?php }?>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-shopping-cart"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

                                        </button>
                                    </footer>
                                </form>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['num']->value%2!=0) {?>
                            </div>
                            <div class="row row-eq-height">
                        <?php }?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
