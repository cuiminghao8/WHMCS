<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 16:16:32
         compiled from "/home/wwwroot/default/whmcs/templates/flathost/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20247050135864c6605b0b31-10321373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe1148a0790fa69eeb5f15c693d596b6cca85acc' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/flathost/footer.tpl',
      1 => 1437057397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20247050135864c6605b0b31-10321373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'secondarySidebar' => 0,
    'WEB_ROOT' => 0,
    'template' => 0,
    'LANG' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'BASE_PATH_JS' => 0,
    'token' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864c6605ca9e4_18867102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864c6605ca9e4_18867102')) {function content_5864c6605ca9e4_18867102($_smarty_tpl) {?>
        </div><!-- /.main-content -->
        <?php if ($_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0);?>

            </div>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</section>


<!--===== Flathost  Footer =====-->

<div class="footer">
  <div class="container">
    <div class="row footerlinks">
      <div class="col-sm-4 col-md-2">
        <p>CALL US</p>
        <ul>
          <li> +1 4528 254 247</li>
          <li>+1 4002 188 355</li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>FOLLOW US</p>
        <ul>
          <li><a href="http://twitter.com/surjithctly" target="_blank">Follow on Twitter</a></li>
          <li><a href="http://web3canvas.com" target="_blank">Like us on Facebook</a></li>
          <li><a href="http://surjithctly.in" target="_blank">Join on Linkedin</a> </li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>COMPANY</p>
        <ul>
          <li> <a href="#">About us</a></li>
          <li><a href="#">Latest from Blog</a></li>
          <li><a href="#">Our Team</a></li>
        </ul>
      </div>
      <div class="col-sm-4 col-md-2">
        <p>EMAIL US</p>
        <ul>
          <li><a href="mailto:support@mail.in" target="_blank">support@mail.com</a></li>
          <li><a href="mailto:mail@mail.in" target="_blank">sales@mail.com</a></li>
        </ul>
      </div>
      
      <div class="col-sm-4 col-md-2">
        <p>LEGAL TERMS</p>
        <ul>
          <li><a href="#">Terms of use</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
  <div class="col-sm-4 col-md-2">
        <p>LIVE CHAT</p>
        <ul>
          <li>
<a href="#" class="btn btn-success btn-small">CHAT WITH US </a>

          </li>
         
        </ul>
      </div>
    </div>
    <div class="row copyright">
      <div class="pull-right hidden-xs"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/logo-footer.png" alt="logo"></div>
      <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['copyright'];?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['allrightsreserved'];?>
.</p>
    </div>
  </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }} ?>
