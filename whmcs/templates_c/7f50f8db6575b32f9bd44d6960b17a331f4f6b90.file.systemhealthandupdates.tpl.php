<?php /* Smarty version Smarty-3.1.21, created on 2016-12-29 14:28:55
         compiled from "/home/wwwroot/default/whmcs/admin/templates/NeWorld/systemhealthandupdates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20621645325864ad279e4ba8-08948484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f50f8db6575b32f9bd44d6960b17a331f4f6b90' => 
    array (
      0 => '/home/wwwroot/default/whmcs/admin/templates/NeWorld/systemhealthandupdates.tpl',
      1 => 1466917066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20621645325864ad279e4ba8-08948484',
  'function' => 
  array (
    'convertLevel' => 
    array (
      'parameter' => 
      array (
        'psrLevel' => 'info',
      ),
      'compiled' => '',
    ),
    'getIcon' => 
    array (
      'parameter' => 
      array (
        'psrLevel' => 'info',
      ),
      'compiled' => '',
    ),
    'renderNews' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'psrLevel' => 0,
    'keyChecks' => 0,
    '_ADMINLANG' => 0,
    'article' => 0,
    'installedVersionNumberParts' => 0,
    'installedVersionReleaseNotes' => 0,
    'installedVersionChangelog' => 0,
    'requirement' => 0,
    'warningChecks' => 0,
    'dangerChecks' => 0,
    'successfulChecks' => 0,
    'checkPercentages' => 0,
    'regularChecks' => 0,
    'id' => 0,
    'check' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5864ad27aa8a37_35775723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5864ad27aa8a37_35775723')) {function content_5864ad27aa8a37_35775723($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_convertLevel')) {
    function smarty_template_function_convertLevel($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['convertLevel']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}
if ($_smarty_tpl->tpl_vars['psrLevel']->value=='error') {?>danger
    <?php } elseif ($_smarty_tpl->tpl_vars['psrLevel']->value=='warning') {?>warning
    <?php } elseif ($_smarty_tpl->tpl_vars['psrLevel']->value=='notice') {?>success
    <?php } else { ?>info<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_getIcon')) {
    function smarty_template_function_getIcon($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['getIcon']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><i class="fa <?php if ($_smarty_tpl->tpl_vars['psrLevel']->value=='error') {?>fa-times
    <?php } elseif ($_smarty_tpl->tpl_vars['psrLevel']->value=='warning') {?>fa-warning
    <?php } elseif ($_smarty_tpl->tpl_vars['psrLevel']->value=='notice') {?>fa-check
    <?php } else { ?>fa-info-circle<?php }?>"></i>&nbsp;<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!is_callable('smarty_modifier_truncate')) include '/home/wwwroot/default/whmcs/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?><?php if (!function_exists('smarty_template_function_renderNews')) {
    function smarty_template_function_renderNews($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderNews']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php if ($_smarty_tpl->tpl_vars['keyChecks']->value->has('updateNews')) {?>
        <h2 class="text-center"><?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['healthCheck']['news'];?>
</h2>
        <div class="container-fluid">
            <div class="row">
                <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyChecks']->value['updateNews']->getBody(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['article']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
 $_smarty_tpl->tpl_vars['article']->iteration++;
?>
                    <div id="<?php echo $_smarty_tpl->tpl_vars['keyChecks']->value['updateNews']->getName();?>
-<?php echo $_smarty_tpl->tpl_vars['article']->iteration;?>
" class="panel panel-default">
                        <div class="panel-heading">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" class="autoLinked">
                                <i class="fa fa-newspaper-o"></i>
                                <?php echo $_smarty_tpl->tpl_vars['article']->value['headline'];?>

                            </a>
                        </div>
                        <div class="panel-body">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['text'],120);?>

                            <div class="text-right top-margin-5">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'];?>
" id="news<?php echo $_smarty_tpl->tpl_vars['article']->iteration;?>
" class="autoLinked btn btn-default btn-xs">
                                    <?php echo $_smarty_tpl->tpl_vars['_ADMINLANG']->value['healthCheck']['readMore'];?>
...
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="row systemHealthAndUpdates">
    <div class="col-md-4">
        <div id="<?php echo $_smarty_tpl->tpl_vars['keyChecks']->value['version']->getName();?>
" class="alert text-center version alert-<?php smarty_template_function_convertLevel($_smarty_tpl,array('psrLevel'=>$_smarty_tpl->tpl_vars['keyChecks']->value['version']->getSeverityLevel()));?>
">
            <span class="version-number"><?php echo $_smarty_tpl->tpl_vars['installedVersionNumberParts']->value[0];?>
</span>
            <span class="version-label"><?php echo $_smarty_tpl->tpl_vars['installedVersionNumberParts']->value[1];?>
</span>
            <p><?php echo $_smarty_tpl->tpl_vars['keyChecks']->value['version']->getBody();?>
</p>
            <div class="row">
                <div class="col-xs-6">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['installedVersionReleaseNotes']->value;?>
" target="_blank" class="btn btn-default btn-block btn-hide-overflow">
                        <i class="fa fa-file-text-o"></i>
                        Release Notes
                    </a>
                </div>
                <div class="col-xs-6">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['installedVersionChangelog']->value;?>
" target="_blank" class="btn btn-default btn-block btn-hide-overflow">
                        <i class="fa fa-cog"></i>
                        Changelog
                    </a>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['keyChecks']->value->has('systemRequirements')) {?>
            <div class="alert alert-danger systemRequirementLight">
                <ul class="fa-ul">
                    <?php  $_smarty_tpl->tpl_vars['requirement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['requirement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyChecks']->value['systemRequirements']->getBody(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['requirement']->key => $_smarty_tpl->tpl_vars['requirement']->value) {
$_smarty_tpl->tpl_vars['requirement']->_loop = true;
?>
                        <li><i class="fa-li fa fa-close"></i><?php echo $_smarty_tpl->tpl_vars['requirement']->value;?>
</li>
                    <?php } ?>
                </ul>
            </div>
        <?php }?>

        <div class="hidden-sm hidden-xs">
            <?php smarty_template_function_renderNews($_smarty_tpl,array());?>

        </div>
    </div>

    <div class="col-md-8 right-col">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-heart-o"></i>
                    Health Status Summary
                </h3>
            </div>
            <div class="panel-body health-summary">
                <?php if ($_smarty_tpl->tpl_vars['warningChecks']->value==0&&$_smarty_tpl->tpl_vars['dangerChecks']->value==0) {?>
                    <div class="passing">
                        <i class="fa fa-check-circle"></i>
                        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.allChecksPassed",'count'=>$_smarty_tpl->tpl_vars['successfulChecks']->value),$_smarty_tpl);?>

                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="col-md-4 passing">
                            <i class="fa fa-check-circle"></i>
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.checksPassed",'count'=>$_smarty_tpl->tpl_vars['successfulChecks']->value),$_smarty_tpl);?>

                        </div>
                        <div class="col-md-4 warning">
                            <i class="fa <?php if ($_smarty_tpl->tpl_vars['warningChecks']->value>0) {?>fa-warning<?php } else { ?>fa-thumbs-up<?php }?>"></i>
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.checksNeedAttention",'count'=>$_smarty_tpl->tpl_vars['warningChecks']->value),$_smarty_tpl);?>

                        </div>
                        <div class="col-md-4 failures">
                            <i class="fa fa-times-circle"></i>
                            <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.checksFailed",'count'=>$_smarty_tpl->tpl_vars['dangerChecks']->value),$_smarty_tpl);?>

                        </div>
                    </div>
                <?php }?>

                <div class="progress health-progress-bar">
                    <div class="progress-bar progress-bar-success progress-bar-striped" style="width: <?php echo $_smarty_tpl->tpl_vars['checkPercentages']->value['successful'];?>
%">
                        <span class="sr-only"><?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.checksPassed",'count'=>($_smarty_tpl->tpl_vars['checkPercentages']->value['successful']).('%')),$_smarty_tpl);?>
</span>
                    </div>
                    <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: <?php echo $_smarty_tpl->tpl_vars['checkPercentages']->value['warning'];?>
%">
                        <span class="sr-only"><?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.checksNeedAttention",'count'=>($_smarty_tpl->tpl_vars['checkPercentages']->value['warning']).('%')),$_smarty_tpl);?>
</span>
                    </div>
                    <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: <?php echo $_smarty_tpl->tpl_vars['checkPercentages']->value['danger'];?>
%">
                        <span class="sr-only"><?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.checksFailed",'count'=>($_smarty_tpl->tpl_vars['checkPercentages']->value['danger']).('%')),$_smarty_tpl);?>
</span>
                    </div>
                </div>
            </div>
        </div>

        <?php  $_smarty_tpl->tpl_vars['check'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['check']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['regularChecks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['check']->key => $_smarty_tpl->tpl_vars['check']->value) {
$_smarty_tpl->tpl_vars['check']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['check']->key;
?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel panel-<?php smarty_template_function_convertLevel($_smarty_tpl,array('psrLevel'=>$_smarty_tpl->tpl_vars['check']->value->getSeverityLevel()));?>
">
                <div class="panel-heading"><?php smarty_template_function_getIcon($_smarty_tpl,array('psrLevel'=>$_smarty_tpl->tpl_vars['check']->value->getSeverityLevel()));
echo $_smarty_tpl->tpl_vars['check']->value->getTitle();?>
</div>
                <div class="panel-body panel-body-overflow-auto">
                    <?php echo $_smarty_tpl->tpl_vars['check']->value->getBody();?>

                </div>
            </div>
        <?php } ?>

        <div id="exportButtons" class="panel">
            <div class="row">
                <div class="col-xs-6">
                    <a href="?export=json" class="btn btn-default btn-block">
                        <i class="fa fa-code"></i>
                        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.exportAsJson"),$_smarty_tpl);?>

                    </a>
                </div>
                <div class="col-xs-6">
                    <a href="?export=text" class="btn btn-default btn-block">
                        <i class="fa fa-file-text-o"></i>
                        <?php echo WHMCS\Smarty::langFunction(array('key'=>"healthCheck.exportAsText"),$_smarty_tpl);?>

                    </a>
                </div>
            </div>
        </div>

        <div class="hidden-lg hidden-md">
            <?php smarty_template_function_renderNews($_smarty_tpl,array());?>

        </div>
    </div>
</div>
<?php }} ?>
