<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:44:27
         compiled from "/home/wwwroot/default/whmcs/templates/eno/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77501207558636d5bb518d7-66271217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d08df79c6df5bb6fcfd267b5f4b177d27240f1a' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/homepage.tpl',
      1 => 1451771278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77501207558636d5bb518d7-66271217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'registerdomainenabled' => 0,
    'transferdomainenabled' => 0,
    'LANG' => 0,
    'domain' => 0,
    'twitterusername' => 0,
    'BASE_PATH_IMG' => 0,
    'template' => 0,
    'announcements' => 0,
    'seofriendlyurls' => 0,
    'WEB_ROOT' => 0,
    'announcement' => 0,
    'announcementsFbRecommend' => 0,
    'systemurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d5bbc6393_29283930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d5bbc6393_29283930')) {function content_58636d5bbc6393_29283930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/default/whmcs/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>

<div class="space-14"></div>

<div class="mass-head hero-1 inverse">
    <div>
		<div class="hero-inner text-center">
			<?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value||$_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
			<h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaintitle'];?>
</h1>
			<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegin'];?>
</p>
			
			
			<!--Domain Box For Tablet and Desktop-->
			<div class="hidden-xs">
				<form action="domainchecker.php" method="post">
					<div class="input-group">
						<div class="input-group-btn">
							<input type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" id="inputDomain" class="domains-input" maxlength="65">
							<?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?><button type="submit" id="btnCheckAvailability" class="btn btn-inverse domain-btn-2" onclick="$('#modalpleasewait').modal();"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
</button><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?><input type="submit" name="transfer"  class="btn btn-warning domain-btn-1" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomaintransfer'];?>
" /><?php }?>
						</div>
					</div>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</form>
			</div>
			<!--End Domain Box For Tablet and Desktop-->
					
			<!--Domain Box for Mobile-->
			<div class="visible-xs padding-all">
				<form action="domainchecker.php" method="post">
					<div class="input-group">
						<input type="text" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['findyourdomain'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
" id="inputDomain" class="domains-input form-control input-lg"  maxlength="65">
						<span class="input-group-btn btn-group-lg">
							<button type="submit" id="btnCheckAvailability" class="btn btn-inverse" onclick="$('#modalpleasewait').modal();">
								<i class="fa fa-search icon-only"></i>
							</button>
						</span>
					</div>

					<div class="smaller-50"><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
				</form>
			</div>
			<!--End Domain Box for Mobile-->
			
			<?php } else { ?>
			
			<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h2>
			
			<?php }?>
		</div>
    </div>
</div>



    <div class="home-shortcuts">

            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>

                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value||$_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                            <li>
                                <a id="btnBuyADomain" href="domainchecker.php">
                                    <i class="fa fa-globe"></i>
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
 <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
	

<div class="space-16"></div>

	



<div class="row">	
	<div class="col-sm-12">		
		<?php if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>
		<h5 class="heading bold text-uppercase"><i class="fa fa-twitter"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h5>
		<div class="portlet padding-all">
			<div id="twitterFeedOutput">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" /></p>
			</div>
			<?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/twitter.js"><?php echo '</script'; ?>
>
		</div>
		
		<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>	
		<h4 class=" bold text-uppercase"><i class="fa fa-bullhorn"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['news'];?>
</h4>
			<?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['announcement']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
 $_smarty_tpl->tpl_vars['announcement']->index++;
?>
				<?php if ($_smarty_tpl->tpl_vars['announcement']->index<2) {?>
					<div class="portlet padding-all no-padding-top">

						<h3>
							<a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
						</h3>
						<p><i class="fa fa-calendar text-success"></i> &nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],"M jS");?>
</p>
        
						<p>
							<?php if (strlen(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text']))<350) {?>
								<?php echo $_smarty_tpl->tpl_vars['announcement']->value['text'];?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['announcement']->value['summary'];?>

								<a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" class="btn btn-xs btn-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 &raquo;</a>
							<?php }?>
						</p>
						<div class="hr hr-6 dotted hr-double"></div>
						

						<?php if ($_smarty_tpl->tpl_vars['announcementsFbRecommend']->value) {?>
							<?php echo '<script'; ?>
>
								(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) {
										return;
									}
									js = d.createElement(s); js.id = id;
									js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
									fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
							<?php echo '</script'; ?>
>
							<div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
							<div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;
if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
						<?php }?>
					</div>
				<?php }?>
			<?php } ?>
		<?php }?>	
	</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/modal-alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
