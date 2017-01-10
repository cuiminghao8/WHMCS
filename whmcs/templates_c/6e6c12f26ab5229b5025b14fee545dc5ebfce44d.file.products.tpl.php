<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:15:53
         compiled from "/home/wwwroot/default/whmcs/templates/orderforms/thememetro-d-plus/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1458414475863acf961e3c4-43907243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6c12f26ab5229b5025b14fee545dc5ebfce44d' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/orderforms/thememetro-d-plus/products.tpl',
      1 => 1456311386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1458414475863acf961e3c4-43907243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carttpl' => 0,
    'productGroup' => 0,
    'errormessage' => 0,
    'showSidebarToggle' => 0,
    'LANG' => 0,
    'products' => 0,
    'product' => 0,
    'value' => 0,
    'feature' => 0,
    'features' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863acf96e4f82_00191602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863acf96e4f82_00191602')) {function content_5863acf96e4f82_00191602($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="TM-pricing-tables-container">

	<div class="row">
			
		<div class="col-md-12">
		 
			<div class="text-center">
				<h1>
					<?php if ($_smarty_tpl->tpl_vars['productGroup']->value['headline']) {?>
						<?php echo $_smarty_tpl->tpl_vars['productGroup']->value['headline'];?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['productGroup']->value['name'];?>

					<?php }?>
				</h1>
				<?php if ($_smarty_tpl->tpl_vars['productGroup']->value['tagline']) {?>
					<p><?php echo $_smarty_tpl->tpl_vars['productGroup']->value['tagline'];?>
</p>
				<?php }?>
			
				<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
					<div class="alert alert-danger">
						<?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

					</div>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['showSidebarToggle']->value) {?>
					<a data-toggle="modal" data-target="#cat-opt" class="btn btn-warning btn-xs">
						<i class="fa fa-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['showMenu'];?>

					</a>
				<?php }?>
			</div>
				
			<hr class="separator" />

			<div id="products" class="TM-pricing-tables-container">
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
					<div class="pricing-container">
						<div class="pricing-table-6 <?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['qty']=="0") {?>hidden<?php }?>">
							<div class="row no-gutters">
								<div class="col-md-3">
									<h1 id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-name" class="product-name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['featuredProduct'];?>
</span><?php }?></h1>
											
									<div class="product-pricing" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-price">
											<div class="price">
											<div class="amount <?php if ($_smarty_tpl->tpl_vars['product']->value['paytype']=="free") {?>free<?php }?>">
												<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>
													<sup><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundledeal'];?>
</sup>
													<?php if ($_smarty_tpl->tpl_vars['product']->value['displayprice']) {?>
														<br /><span><?php echo $_smarty_tpl->tpl_vars['product']->value['displayPriceSimple'];?>
</span>
													<?php }?>
													<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['paytype']=="free") {?>
														 <span><i class="fa fa-smile-o"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfree'];?>
</span>
													<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['paytype']=="onetime") {?>
														 <span><?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['onetime'];?>
 </span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermonetime'];?>

													<?php } else { ?>
													<?php if ($_smarty_tpl->tpl_vars['product']->value['pricing']['hasconfigoptions']) {?>
														<?php echo $_smarty_tpl->tpl_vars['LANG']->value['from'];?>

													 <?php }?>
													<?php echo $_smarty_tpl->tpl_vars['product']->value['pricing']['minprice']['cycleText'];?>

												<?php }?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
										<div class="contents">
											<p id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-description">
												<?php echo $_smarty_tpl->tpl_vars['product']->value['featuresdesc'];?>

											</p>
										</div>
											
										<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['features'])) {?>
											<button type="button" class="btn btn-xs btn-feature" role="button" data-toggle="collapse" href="#product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
" aria-expanded="false">
												<?php echo $_smarty_tpl->tpl_vars['LANG']->value['moreDetails'];?>
 <i class="fa fa-arrow-down"></i>
											</button>
										<?php } else { ?>
										<?php }?>
									<?php } else { ?>
										
										<div class="contents">
											<ul>
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['feature']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
													<li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
														<span class="feature-value"><b><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</b></span>
															<?php echo $_smarty_tpl->tpl_vars['feature']->value;?>

													</li>
												<?php } ?>
											</ul>
										</div>
									<?php }?>
								</div>
								<div class="col-md-2">
									<a href="cart.php?a=add&<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>bid=<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else { ?>pid=<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>" class="btn <?php if ($_smarty_tpl->tpl_vars['product']->value['isFeatured']) {?>btn-success<?php } else { ?>btn-primary<?php }?>" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-order-button">
										<i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernowbutton'];?>

									</a>
									
									<?php if ($_smarty_tpl->tpl_vars['product']->value['qty']!='') {?><small class="stock" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-unavailable"><em>(<?php if ($_smarty_tpl->tpl_vars['product']->value['qty']=="0") {
echo $_smarty_tpl->tpl_vars['LANG']->value['outofstock'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];
}?>)</em></small><?php }?>
								</div>
							</div>
						</div>
					</div>
					
					<?php if ($_smarty_tpl->tpl_vars['product']->value['featuresdesc']) {?>
						<div class="collapse" id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
							<div class="product-feature-list">
								<ul>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['feature']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
										<li id="product<?php echo $_smarty_tpl->tpl_vars['product']->iteration;?>
-feature<?php echo $_smarty_tpl->tpl_vars['value']->iteration;?>
">
											<span class="feature-value"><b><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</b></span>
												<?php echo $_smarty_tpl->tpl_vars['feature']->value;?>

										</li>
									<?php } ?>
								</ul>		
							</div>
						</div>							
					<?php }?>					
					
				<?php } ?>
			</div>

		
		
		
			<?php if (count($_smarty_tpl->tpl_vars['productGroup']->value['features'])>0) {?>
				<div class="cart-features">
					<div class="row clearfix">
						<div class="col-md-12">
							<div class="head-area">
								<span>
									<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['includedWithPlans'];?>

								</span>
							</div>
								
							<div class="includes-features">
								<ul class="list-features">
									<?php  $_smarty_tpl->tpl_vars['features'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['features']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productGroup']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['features']->key => $_smarty_tpl->tpl_vars['features']->value) {
$_smarty_tpl->tpl_vars['features']->_loop = true;
?>
										<li><?php echo $_smarty_tpl->tpl_vars['features']->value['feature'];?>
</li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
		
		</div>
	</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/categories-options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
