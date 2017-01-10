<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 20:15:21
         compiled from "/home/wwwroot/default/whmcs/templates/eno/clientregister.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2387306275863acd96812e0-23965187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9527082c6a6a4587b2ef425f9488292334de7a' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/clientregister.tpl',
      1 => 1451771172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2387306275863acd96812e0-23965187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_PATH_JS' => 0,
    'registrationDisabled' => 0,
    'LANG' => 0,
    'errormessage' => 0,
    'clientemail' => 0,
    'clientfirstname' => 0,
    'clientlastname' => 0,
    'clientcompanyname' => 0,
    'clientaddress1' => 0,
    'clientaddress2' => 0,
    'clientcity' => 0,
    'clientstate' => 0,
    'clientpostcode' => 0,
    'clientcountries' => 0,
    'countryCode' => 0,
    'clientcountry' => 0,
    'defaultCountry' => 0,
    'countryName' => 0,
    'clientphonenumber' => 0,
    'customfields' => 0,
    'customfield' => 0,
    'currencies' => 0,
    'curr' => 0,
    'securityquestions' => 0,
    'question' => 0,
    'accepttos' => 0,
    'tosurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5863acd970b994_52331302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5863acd970b994_52331302')) {function content_5863acd970b994_52331302($_smarty_tpl) {?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'msg'=>((($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccount']).(' <strong><a href="cart.php" class="alert-link">')).($_smarty_tpl->tpl_vars['LANG']->value['registerCreateAccountOrder'])).('</a></strong>')), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['registrationDisabled']->value) {?>
<div class="portlet padding-all">
    <form method="post" class="form-horizontal using-password-strength" action="<?php echo $_SERVER['PHP_SELF'];?>
" role="form">
        <input type="hidden" name="register" value="true"/>

		
		        <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
					<div class="col-sm-9">
						<input type="email" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['clientemail']->value;?>
" class="col-xs-12 col-sm-5" />
					</div>
                </div>

                <div id="newPassword1" class="form-group has-feedback">
                    <label for="inputNewPassword1" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
					<div class="col-sm-9">
						<input type="password" class="col-xs-12 col-sm-3" id="inputNewPassword1" name="password"/>
						<span class="form-control-feedback glyphicon glyphicon-password"></span>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
                </div>
                <div id="newPassword2" class="form-group has-feedback">
                    <label for="inputNewPassword2" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
</label>
					<div class="col-sm-9">
						<input type="password" class="col-xs-12 col-sm-3" id="inputNewPassword2" name="password2"/>
						<span class="form-control-feedback glyphicon glyphicon-password"></span>
						<div id="inputNewPassword2Msg"></div>
					</div>
                </div>
				
				
				<hr class="separator">
				
				
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
					<div class="col-sm-9">
						<input type="text" name="firstname" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['clientfirstname']->value;?>
" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
					<div class="col-sm-9">
							<input type="text" name="lastname" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['clientlastname']->value;?>
" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="companyname" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
					<div class="col-sm-9">
						<input type="text" name="companyname" id="companyname" value="<?php echo $_smarty_tpl->tpl_vars['clientcompanyname']->value;?>
" class="col-xs-12 col-sm-5" />
					</div>
                </div>


				<hr class="separator">
				

                <div class="form-group">
                    <label for="address1" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
					<div class="col-sm-9">
						<input type="text" name="address1" id="address1" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress1']->value;?>
" class="col-xs-12 col-sm-5" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="address2" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
					<div class="col-sm-9">
						<input type="text" name="address2" id="address2" value="<?php echo $_smarty_tpl->tpl_vars['clientaddress2']->value;?>
" class="col-xs-12 col-sm-5" />
					</div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
					<div class="col-sm-9">
						<input type="text" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['clientcity']->value;?>
" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
					<div class="col-sm-3">
						<input type="text" name="state" id="state" value="<?php echo $_smarty_tpl->tpl_vars['clientstate']->value;?>
" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="postcode" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
					<div class="col-sm-9">
						<input type="text" name="postcode" id="postcode" value="<?php echo $_smarty_tpl->tpl_vars['clientpostcode']->value;?>
" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
					<div class="col-sm-9">
						<select id="country" name="country" class="col-xs-12 col-sm-5">
							<?php  $_smarty_tpl->tpl_vars['countryName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['countryName']->_loop = false;
 $_smarty_tpl->tpl_vars['countryCode'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['clientcountries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['countryName']->key => $_smarty_tpl->tpl_vars['countryName']->value) {
$_smarty_tpl->tpl_vars['countryName']->_loop = true;
 $_smarty_tpl->tpl_vars['countryCode']->value = $_smarty_tpl->tpl_vars['countryName']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['countryCode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['clientcountry']->value&&$_smarty_tpl->tpl_vars['countryCode']->value==$_smarty_tpl->tpl_vars['defaultCountry']->value)||($_smarty_tpl->tpl_vars['countryCode']->value==$_smarty_tpl->tpl_vars['clientcountry']->value)) {?> selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['countryName']->value;?>

								</option>
							<?php } ?>
						</select>
					</div>
                </div>

                <div class="form-group">
                    <label for="phonenumber" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
					<div class="col-sm-9">
						<input type="tel" name="phonenumber" id="phonenumber" value="<?php echo $_smarty_tpl->tpl_vars['clientphonenumber']->value;?>
" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customfield']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customfields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->key => $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['customfield']->key;
?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
							<div class="col-sm-9">
								<div class="control">
									<?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>
 <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

								</div>
							</div>
                        </div>
                    <?php } ?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['currencies']->value) {?>
                    <div class="form-group">
                        <label for="currency" class="col-sm-3 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</label>
						<div class="col-sm-9">
							<select id="currency" name="currency" class="col-xs-12 col-sm-3">
								<?php  $_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['curr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->key => $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if (!$_POST['currency']&&$_smarty_tpl->tpl_vars['curr']->value['default']||$_POST['currency']==$_smarty_tpl->tpl_vars['curr']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
								<?php } ?>
							</select>
						</div>
                    </div>
                <?php }?>


		
		<?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</label>
			<div class="col-sm-9">
				<select class="col-xs-12 col-sm-5" name="securityqid" id="securityqid">
					<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['securityquestions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
						<option value=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="securityqans"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
			<div class="col-sm-9">
				<input class="col-xs-12 col-sm-5" type="password" name="securityqans" id="securityqans" />
			</div>
		</div>
		<?php }?>

		
		<hr class="separator">
		
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



		
		<?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
		<div class="form-group">
			<label id="tosagree"></label>
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<div class="tcb">
					<label>
						<input type="checkbox" class="tc" name="accepttos" class="accepttos">
						<span class="labels text-danger"> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></span>
					</label>
				</div>
			</div>
		</div>
		<?php }?>

		
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<input class="btn btn-success btn-lg" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientregistertitle'];?>
" />
			</div>
		</div>

    </form>
</div>
<?php }?>
<?php }} ?>
