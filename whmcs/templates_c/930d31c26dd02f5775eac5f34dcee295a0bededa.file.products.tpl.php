<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:33:28
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/modern/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1576727795863b118c89b26-43004562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930d31c26dd02f5775eac5f34dcee295a0bededa' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/modern/products.tpl',
      1 => 1460367248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576727795863b118c89b26-43004562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carttpl' => 0,
    'groupname' => 0,
    'loggedin' => 0,
    'currencies' => 0,
    'gid' => 0,
    'curr' => 0,
    'currency' => 0,
    'BASE_PATH_IMG' => 0,
    'products' => 0,
    'num' => 0,
    'product' => 0,
    'LANG' => 0,
    'feature' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863b118d72f63_34654199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863b118d72f63_34654199')) {function content_5863b118d72f63_34654199($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />

<div id="order-modern">

    <div class="title-bar">
        <h1><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
</h1>
        <?php echo $_smarty_tpl->getSubTemplate ("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/category-chooser.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="currencychooser">
            <div class="btn-group" role="group">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                    <a href="cart.php?gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                        <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                    </a>
                <?php } ?>
            </div>
        </div>
    <?php }?>

    <div class="row">

        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
            <div class="col-md-6">
                <div id="product<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="product" onclick="window.location='cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>'">

                    <div class="pricing">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
<br />
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
                                <span class="pricing"><?php echo $_smarty_tpl->tpl_vars['product']->value['displayprice'];?>
</span>
                            <?php }?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['startingfrom'];?>

                                <br />
                            <?php }?>
                            <span class="pricing"><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['price'];?>
</span>
                            <br />
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="monthly") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="quarterly") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="semiannually") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="annually") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="biennially") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycle']=="triennially") {?>
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>

                            <?php }?>
                        <?php }?>
                    </div>

                    <div class="name">
                        <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']) {?>
                            <span class="qty">
                                (<?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>
)
                            </span>
                        <?php }?>
                    </div>

                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['feature']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <span class="prodfeature">
                            <span class="feature"><?php echo $_smarty_tpl->tpl_vars['feature']->value;?>
</span>
                            <br />
                            <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

                        </span>
                    <?php } ?>

                    <div class="clear"></div>

                    <div class="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>
</div>

                    <div class="text-right">
                        <a href="cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>
</a>
                    </div>

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['num']->value%2) {?>
                </div>
                <div class="row">
            <?php }?>

        <?php } ?>

    </div>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="currencychooser">
            <div class="btn-group" role="group">
                <?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
                    <a href="cart.php?gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
&currency=<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
" class="btn btn-default<?php if ($_smarty_tpl->tpl_vars['currency']->value['id']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> active<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/flags/<?php if ($_smarty_tpl->tpl_vars['curr']->value['code']=="AUD") {?>au<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="CAD") {?>ca<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="EUR") {?>eu<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="GBP") {?>gb<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="INR") {?>in<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="JPY") {?>jp<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="USD") {?>us<?php } elseif ($_smarty_tpl->tpl_vars['curr']->value['code']=="ZAR") {?>za<?php } else { ?>na<?php }?>.png" border="0" alt="" />
                        <?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>

                    </a>
                <?php } ?>
            </div>
        </div>
    <?php }?>

</div>
<?php }} ?>
