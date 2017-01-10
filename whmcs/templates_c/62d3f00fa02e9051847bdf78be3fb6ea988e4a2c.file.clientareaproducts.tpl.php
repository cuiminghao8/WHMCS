<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:40:13
         compiled from "/home/wwwroot/default/whmcs/templates/eno/clientareaproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9447278185864859db76c04-24419168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d3f00fa02e9051847bdf78be3fb6ea988e4a2c' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/clientareaproducts.tpl',
      1 => 1451771150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9447278185864859db76c04-24419168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderby' => 0,
    'sort' => 0,
    'LANG' => 0,
    'services' => 0,
    'service' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864859dbe3133_83144850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864859dbe3133_83144850')) {function content_5864859dbe3133_83144850($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/tablelist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tableName'=>"ServicesList",'filterColumn'=>"3",'noSortColumns'=>"4"), 0);?>


<?php echo '<script'; ?>
 type="text/javascript">
	jQuery(document).ready( function ()
	{
		var table = jQuery('#tableServicesList').removeClass('hidden').DataTable();
		<?php if ($_smarty_tpl->tpl_vars['orderby']->value=='product') {?>
			table.order([0, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'], [3, 'asc']);
		<?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='amount'||$_smarty_tpl->tpl_vars['orderby']->value=='billingcycle') {?>
			table.order(1, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
		<?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='nextduedate') {?>
			table.order(2, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
		<?php } elseif ($_smarty_tpl->tpl_vars['orderby']->value=='domainstatus') {?>
			table.order(3, '<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
');
		<?php }?>
		table.draw();
		jQuery('#tableLoading').addClass('hidden');
	});
<?php echo '</script'; ?>
>
	
<div class="portlet padding-all">
	<div class="table-container clearfix">
		<table id="tableServicesList" class="datatable table table-hover table-bordered table-primary eno-table hidden">
			<thead>
				<tr>
					<th data-class="expand"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderproduct'];?>
</th>
					<th data-hide="phone,tablet"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddonpricing'];?>
</th>
					<th data-hide="phone,tablet"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahostingnextduedate'];?>
</th>
					<th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastatus'];?>
</th>
					<th class="col-small center"></th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['service'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['service']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['service']->key => $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['service']->key;
?>
					<tr onclick="clickableSafeRedirect(event, 'clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
', false)">
						<td><a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['service']->value['product'];?>
</strong></a><?php if ($_smarty_tpl->tpl_vars['service']->value['domain']) {?><br /><small><i><?php echo $_smarty_tpl->tpl_vars['service']->value['domain'];?>
</i></small><?php }?></td>
						<td><?php echo $_smarty_tpl->tpl_vars['service']->value['amount'];?>
 <small><?php echo $_smarty_tpl->tpl_vars['service']->value['billingcycle'];?>
</small></td>
						<td><span class="hidden"><?php echo $_smarty_tpl->tpl_vars['service']->value['normalisedNextDueDate'];?>
</span><?php echo $_smarty_tpl->tpl_vars['service']->value['nextduedate'];?>
</td>
						<td><span class="label status status-<?php echo strtolower($_smarty_tpl->tpl_vars['service']->value['status']);?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['statustext'];?>
</span></td>
						<td class="col-small center">
							<div class="action-buttons">
								<a href="clientarea.php?action=productdetails&amp;id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" data-rel="tooltip" data-placement="left" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageproduct'];?>
"><i class="fa fa-edit bigger-130"></i></a>	
							</div>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<div class="text-center" id="tableLoading">
			<p><i class="fa fa-spinner fa-spin"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loading'];?>
</p>
		</div>
	</div>
</div><?php }} ?>
