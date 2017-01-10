<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:44:27
         compiled from "/home/wwwroot/default/whmcs/templates/eno/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212631648358636d5bb21658-20067532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ff00d6436aa26956e81f0ae5559e3074b762bb' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/footer.tpl',
      1 => 1462040652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212631648358636d5bb21658-20067532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formaction' => 0,
    'filename' => 0,
    'inShoppingCart' => 0,
    'secondarySidebar' => 0,
    'LANG' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'BASE_PATH_JS' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'token' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d5bb4dbe2_86057664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d5bb4dbe2_86057664')) {function content_58636d5bb4dbe2_86057664($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['formaction']->value=='dologin.php'||$_smarty_tpl->tpl_vars['filename']->value=='logout'||$_smarty_tpl->tpl_vars['filename']->value=='pwreset') {?>
<?php } else { ?>
			<!-- END YOUR CONTENT HERE -->
					</div><!-- /.main-content -->
						<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value&&$_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
							<div class="col-md-3 pull-md-left">
								<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0);?>

							</div>
						<?php }?>
					</div>
					<div class="clearfix"></div>
						
					<!-- BEGIN FOOTER CONTENT -->		
						<div class="footer">
							<div class="footer-inner">
								<!-- basics/footer -->
								<div class="footer-content">
									<?php echo $_smarty_tpl->tpl_vars['LANG']->value['copyright'];?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['allrightsreserved'];?>
.</span>
								</div>
								<!-- /basics/footer -->
							</div>
						</div>
						<button type="button" id="back-to-top" class="btn btn-inverse btn-sm back-to-top">
							<i class="fa fa-angle-double-up icon-only bigger-110"></i>
						</button>
					<!-- END FOOTER CONTENT -->
					
				</div><!-- /#page-wrapper -->	  
			<!-- END MAIN PAGE CONTENT -->
		</div>  
	</div> 
	<!-- basic scripts -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/pace/pace.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/footable/footable.min.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/plugins/footable/footable.init.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 type="text/javascript">
		
		var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';

		$(function () {
			$('#langScroll, #taskScroll').slimScroll({
				height: '190px',
				disableFadeOut: true,
				touchScrollStep: 50
			});
		});
		
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/whmcs.js"><?php echo '</script'; ?>
>
		
		<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>

		
		<?php }?>


<?php echo '<script'; ?>
 type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},s=d.getElementsByTagName('script')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/bundle.js';s.parentNode.insertBefore(c,s);
    })(document);
    smartlook('init', 'c1c9a9e02b3f805c5addadb76c8ec49477e8b90b');
<?php echo '</script'; ?>
>



	</body>
</html>
<?php }} ?>
