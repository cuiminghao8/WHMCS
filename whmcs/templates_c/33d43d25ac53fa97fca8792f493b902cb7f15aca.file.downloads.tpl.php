<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 11:51:05
         compiled from "/home/wwwroot/default/whmcs/templates/eno/downloads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102809209558648829df4c93-96033143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d43d25ac53fa97fca8792f493b902cb7f15aca' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/downloads.tpl',
      1 => 1451771240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102809209558648829df4c93-96033143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dlcats' => 0,
    'LANG' => 0,
    'seofriendlyurls' => 0,
    'WEB_ROOT' => 0,
    'dlcat' => 0,
    'mostdownloads' => 0,
    'download' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58648829e5ea89_86613111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58648829e5ea89_86613111')) {function content_58648829e5ea89_86613111($_smarty_tpl) {?>

<?php if (empty($_smarty_tpl->tpl_vars['dlcats']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'],'textcenter'=>true), 0);?>

<?php } else { ?>
	<div class="portlet padding-all">
		<form role="form" method="post" action="downloads.php?action=search">
			<div class="input-group">
				<input type="text" name="search" class="form-control input-lg" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadssearch'];?>
" />
				<span class="input-group-btn">
					<button type="submit" class="btn btn-lg btn-primary" value="" /><i class="fa fa-search"></i><span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</span></button>
				</span>
			</div>
		</form>
	</div>

    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsintrotext'];?>
</p>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadscategories'];?>
</h3>
                </div>
                <div class="list-group">
                    <?php  $_smarty_tpl->tpl_vars['dlcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dlcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlcats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dlcat']->key => $_smarty_tpl->tpl_vars['dlcat']->value) {
$_smarty_tpl->tpl_vars['dlcat']->_loop = true;
?>
                        <span class="list-group-item">
                            <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/downloads/<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['urlfriendlyname'];
} else { ?>downloads.php?action=displaycat&amp;catid=<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['id'];
}?>">
                                <i class="fa fa-folder-open-o"></i>
                                <strong><?php echo $_smarty_tpl->tpl_vars['dlcat']->value['name'];?>
</strong>
                            </a>
                            (<?php echo $_smarty_tpl->tpl_vars['dlcat']->value['numarticles'];?>
)
                            <br />
                            <?php echo $_smarty_tpl->tpl_vars['dlcat']->value['description'];?>

                        </span>
                    <?php }
if (!$_smarty_tpl->tpl_vars['dlcat']->_loop) {
?>
                        <span class="list-group-item">
                            <p class="text-center fontsize3"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>
</p>
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-star"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadspopular'];?>
</h3>
                </div>
                <div class="list-group">
                    <?php  $_smarty_tpl->tpl_vars['download'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['download']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mostdownloads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['download']->key => $_smarty_tpl->tpl_vars['download']->value) {
$_smarty_tpl->tpl_vars['download']->_loop = true;
?>
                        <div class="list-group-item">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['download']->value['link'];?>
">
                                <i class="fa fa-file-o"></i>
                                <strong>
                                    <?php echo $_smarty_tpl->tpl_vars['download']->value['title'];?>

                                    <?php if ($_smarty_tpl->tpl_vars['download']->value['clientsonly']) {?>
                                        <i class="fa fa-lock"></i>
                                    <?php }?>
                                </strong>
                            </a><br />
                            <?php echo $_smarty_tpl->tpl_vars['download']->value['description'];?>

                            <div><span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsfilesize'];?>
: <?php echo $_smarty_tpl->tpl_vars['download']->value['filesize'];?>
</span></div>
                        </div>
                        <?php }
if (!$_smarty_tpl->tpl_vars['download']->_loop) {
?>
                        <span class="list-group-item">
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['downloadsnone'];?>

                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
