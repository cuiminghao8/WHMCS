<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 16:16:32
         compiled from "/home/wwwroot/default/whmcs/templates/flathost/homepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315993255864c6605ce350-47043077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0bd8e98e2101be709482fa5a74e5e0e85c61478' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/flathost/homepage.tpl',
      1 => 1437060111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315993255864c6605ce350-47043077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEB_ROOT' => 0,
    'template' => 0,
    'twitterusername' => 0,
    'LANG' => 0,
    'BASE_PATH_IMG' => 0,
    'announcements' => 0,
    'announcement' => 0,
    'seofriendlyurls' => 0,
    'announcementsFbRecommend' => 0,
    'systemurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864c660639a51_48460032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864c660639a51_48460032')) {function content_5864c660639a51_48460032($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/wwwroot/default/whmcs/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?><div class="container"> 
  <!--============== Main Features ==============-->
  
  <div class="row mainFeatures" id="features">
    <div class="col-sm-6 col-md-4">
      <div class="img-thumbnail"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/secure_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Secure &amp; Reliable</h4>
          <p>Flathost servers are having high physical security and power redundancy Your data will be secure with us.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="img-thumbnail"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/fast_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Super Fast</h4>
          <p>With our ultra mordern servers and optical cables, your data will be transfered to end user in milliseconds.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0">
      <div class="img-thumbnail"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/support_img.png" width="85" height="88" alt="secure">
        <div class="caption">
          <h4>Customer Support</h4>
          <p>We have a dedicated team of support for sales and support to help you in anytime. You can also chat with us.</p>
        </div>
      </div>
    </div>
  </div>
  
  <!--============== Other Features ==============-->
  
  <div class="row PageHead">
    <div class="col-md-12">
      <h1>More Features</h1>
      <h3>Flathost comes with lot of features. Here are few of them.</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 features"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/setup_icon.png" alt="icon" class="img-responsive">
      <h4>Instant Setup</h4>
      <p>As soon as you make a successful payment via PayPal or Google Checkout, your web hosting and domain names will be activated immediately. No waiting time whatsoever.</p>
    </div>
    <div class="col-sm-6 features"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/backup_icon.png" alt="icon" class="img-responsive">
      <h4>Constant Backups</h4>
      <p>Your hosting account is backed up 4 times a day as standard, with our backup integration. We use dedicated backup servers, providing fast &amp; easy individual file rollback abilities.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 features"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/git_icon.png" alt="icon" class="img-responsive">
      <h4>GIT/SVN Support</h4>
      <p>Web Developers love using version control systems. All of our hosting accounts can use GIT &amp; SVN command line tools on our servers. Simply request SSH access to get started.</p>
    </div>
    <div class="col-sm-6 features"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/script_icon.png" alt="icon" class="img-responsive">
      <h4>280+ Install Scripts</h4>
      <p>All our hosting accounts allow you to install popular software such as Wordpress, Drupal, Joolma and Magento in one easy step. Upgrading your software is just as easy!</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 features"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/cpanel_icon.png" alt="icon" class="img-responsive">
      <h4>cPanel Included</h4>
      <p>All hosting accounts come with the latest version of cPanel. This makes life easy for you to do routine tasks such as setting up email addresses and managing MySQL databases.</p>
    </div>
    <div class="col-sm-6 features"> <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/img/php_icon.png" alt="icon" class="img-responsive">
      <h4>Latest PHP &amp; MySQL</h4>
      <p>Our network runs the latest stable and secure versions of PHP &amp; MySQL. We also implement strict security and firewall rules protecting your website from unwanted visitors 24/7.</p>
    </div>
  </div>
</div>

 
<?php if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>

   <div class="PageHead"> <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2></div>

    <div id="twitterFeedOutput">
        <p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_IMG']->value;?>
/loading.gif" /></p>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/twitter.js"><?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>

    <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['news'];?>
</h2>

    <?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['announcement']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
 $_smarty_tpl->tpl_vars['announcement']->index++;
?>
        <?php if ($_smarty_tpl->tpl_vars['announcement']->index<2) {?>
            <div class="announcement-single">
                <h3>
                    <span class="label label-default">
                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value['rawDate'],"M jS");?>

                    </span>
                    <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {
echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</a>
                </h3>

                <blockquote>
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
}?>" class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['readmore'];?>
 &raquo;</a>
                        <?php }?>
                    </p>
                </blockquote>

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
<?php }} ?>
