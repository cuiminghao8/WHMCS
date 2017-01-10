<?php /* Smarty version Smarty-3.1.21, created on 2016-12-28 15:44:27
         compiled from "/home/wwwroot/default/whmcs/templates/eno/includes/settings-btn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69423196758636d5bb1c923-39693732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd81d3ed235f3c783f81c969e53a8994534746842' => 
    array (
      0 => '/home/wwwroot/default/whmcs/templates/eno/includes/settings-btn.tpl',
      1 => 1451771616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69423196758636d5bb1c923-39693732',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58636d5bb1ec58_54116014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58636d5bb1ec58_54116014')) {function content_58636d5bb1ec58_54116014($_smarty_tpl) {?>



<div class="theme-options">
	<div class="btn btn-gray theme-setting-btn" id="theme-setting-btn">
		<i class="fa fa-cog bigger-150 icon-only"></i>
	</div>
	<div class="theme-setting-box" id="theme-setting-box">
		
		<!--Remove below this if you do not want theme options-->		
		<div class="hidden-xs hidden-sm">
			<span class="bigger-120">Layout Options</span>
											
			<div class="hr hr-dotted hr-8"></div>
			<label>
				<input type="checkbox" class="tc" id="fixed-navbar" />
				<span id="#fixed-navbar" class="labels"> Fixed NavBar</span>
			</label>
			<label>
				<input type="checkbox" class="tc" id="fixed-sidebar" />
				<span id="#fixed-sidebar" class="labels"> Fixed NavBar+SideBar</span>
			</label>
			<label>
				<input type="checkbox" class="tc" id="sidebar-toggle" />
				<span id="#sidebar-toggle" class="labels"> Min Sidebar</span>
			</label>
			<label>
				<input type="checkbox" class="tc" id="in-container" />
				<span id="#in-container" class="labels"> Inside<strong>.container</strong></span>
			</label>
										
			<div class="space-4"></div>
		</div>
										
		<span class="bigger-120">Color Options</span>
										
		<div class="hr hr-dotted hr-8"></div>
										
		<label>
			<input type="checkbox" class="tc" id="side-bar-color" />
			<span id="#side-bar-color" class="labels"> SideBar (Light)</span>
		</label>
		
		<!--Remove above this line code if you do not want theme options-->
										
	</div>
</div><?php }} ?>
