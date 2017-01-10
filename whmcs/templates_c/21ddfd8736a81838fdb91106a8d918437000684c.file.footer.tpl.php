<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 15:48:29
         compiled from "/home/wwwroot/default/whmcs/templates/FlatHost-html-mobantu.com/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18865599805864bfcd579645-77693900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21ddfd8736a81838fdb91106a8d918437000684c' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/FlatHost-html-mobantu.com/footer.tpl',
      1 => 1386687518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18865599805864bfcd579645-77693900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagetitle' => 0,
    'LANG' => 0,
    'date_year' => 0,
    'companyname' => 0,
    'langchange' => 0,
    'setlanguage' => 0,
    'footeroutput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864bfcd58e132_81597106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864bfcd58e132_81597106')) {function content_5864bfcd58e132_81597106($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value==$_smarty_tpl->tpl_vars['LANG']->value['carttitle']) {?></div><?php }?>

    </div>
</div>

<div class="footerdivider">
    <div class="fill"></div>
</div>

<div class="whmcscontainer">
    <div class="footer">
        <div id="copyright"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['copyright'];?>
 &copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
. <?php echo $_smarty_tpl->tpl_vars['LANG']->value['allrightsreserved'];?>
.</div>
        <?php if ($_smarty_tpl->tpl_vars['langchange']->value) {?><div id="languagechooser"><?php echo $_smarty_tpl->tpl_vars['setlanguage']->value;?>
</div><?php }?>
        <div class="clear"></div>
    </div>
</div>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


<!--FLAT HOST FOOTER CODE STARTS-->
<!--Be sure to check the added class templateFoot to footer for avoiding Conflict with WHMCS-->

<div class="footer templateFoot">
  <div class="container">
    <div class="row-fluid footerlinks">
      <div class="span2">
        <p>CALL US</p>
        <ul>
          <li> +1 4528 254 247</li>
          <li>+1 4002 188 355</li>
        </ul>
      </div>
      <div class="span2">
        <p>FOLLOW US</p>
        <ul>
          <li><a href="http://twitter.com/surjithctly" target="_blank">Follow on Twitter</a></li>
          <li><a href="http://web3canvas.com" target="_blank">Like us on Facebook</a></li>
          <li><a href="http://surjithctly.in" target="_blank">Join on Linkedin</a> </li>
        </ul>
      </div>
      <div class="span2">
        <p>EMAIL US</p>
        <ul>
          <li><a href="mailto:support@surjithctly.in" target="_blank">support @flathost.com</a></li>
          <li><a href="mailto:mail@surjithctly.in" target="_blank">sales @flathost.com</a></li>
        </ul>
      </div>
      <div class="span2">
        <p>COMPANY</p>
        <ul>
          <li> <a href="#">About us</a></li>
          <li><a href="#">Latest from Blog</a></li>
          <li><a href="#">Our Team</a></li>
        </ul>
      </div>
      <div class="span2">
        <p>LEGAL TERMS</p>
        <ul>
          <li><a href="#">Terms of use</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="span2">
        <p>Live Chat</p>
        <ul>
          <li> <a href="#" class="btn btn-success btn-small">CHAT WITH US </a> </li>
        </ul>
      </div>
    </div>
    <div class="row-fluid copyright">
      <div class="pull-right"><img src="logo-footer.png" alt="logo"></div>
      <p>Copyright © 2013. Flathost Inc</p>
    </div>
  </div>
</div>

<!--FLAT HOST FOOTER CODE ENDS-->



</body>
</html><?php }} ?>
