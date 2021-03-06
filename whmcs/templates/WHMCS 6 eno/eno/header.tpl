{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="content-type" content="text/html; charset={$charset}" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>
		
		{include file="$template/includes/head.tpl"}
		
		{$headoutput}
	</head>
	
	<body {if $formaction == 'dologin.php' || $filename == 'logout' || $filename == 'pwreset'}class="login" {else}{/if}>
	{if $formaction == 'dologin.php' || $filename == 'logout' || $filename == 'pwreset'}
	{else}
	
	{$headeroutput}		
	<div id="wrapper">
		<div id="main-container">		
			<!-- BEGIN TOP NAVIGATION -->
				<nav class="navbar-top hidden-print" role="navigation">
					<!-- BEGIN BRAND HEADING -->
					<div class="navbar-header">
						
						{*
						<button type="button" class="navbar-toggle tooltip-red pull-right" data-placement="left" rel="tooltip" title="Top Menu" data-toggle="collapse" data-target=".top-collapse">
							<i class="fa fa-bars"></i>
						</button>
						*}
						
						<div class="navbar-brand">
							<a href="{$WEB_ROOT}/{if $loggedin}clientarea{else}index{/if}.php">
								<img src="{$WEB_ROOT}/templates/{$template}/assets/images/logo.png" alt="{$companyname}" class="img-responsive" />
							</a>
						</div>
					</div>
					<!-- END BRAND HEADING -->
					<div class="nav-top">
					
						<!-- RIGHT SIDE DROPDOWN BUTTONS -->
						<!-- BEGIN RIGHT SIDE DROPDOWN BUTTONS -->
	
						<ul class="nav navbar-right">
							<li class="dropdown">
								<button type="button" class="navbar-toggle" id="navbar-side-toggle">
									<i class="fa fa-bars"></i>
								</button>
							</li>
		
							<!-- Shopping Cart -->
							<li class="dropdown">
								<a href="{$WEB_ROOT}/cart.php?a=view" class="quick-nav">
									<i class="fa fa-shopping-cart"></i> <span class="badge up badge-success" id="cartItemCount">{$cartitemcount}</span>
								</a>
							</li>
							
							
							<!-- Login/Account Notifications -->
							{if $loggedin}
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bell"></i>  <span class="badge up badge-danger">{$clientAlerts|count}</span>
								</a>
								<ul class="dropdown-menu dropdown-scroll dropdown-tasks">
									<li class="dropdown-header">
										<i class="fa fa-info-circle"></i> ({$clientAlerts|count}) {$LANG.notifications}
									</li>
									<li id="taskScroll">
										<ul class="list-unstyled">
											{foreach $clientAlerts as $alert}
												<li>
													<a class="text-{$alert->getSeverity()}" href="{$alert->getLink()}">{$alert->getMessage()} {if $alert->getLinkText()} <button href="{$alert->getLink()}" class="btn btn-xs btn-{$alert->getSeverity()}">{$alert->getLinkText()}</button>{/if}</a>
												</li>
											{foreachelse}
												<li>
													<a href="javascript:;">{$LANG.notificationsnone}</a>
												</li>
											{/foreach}
										</ul>
									</li>
								</ul>
							</li>
							{/if}
					
					
							<!-- Language -->
							{if $languagechangeenabled && count($locales) > 1}
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-language"></i></span>
								</a>
								<ul class="dropdown-menu dropdown-scroll dropdown-tasks auto auto-width">
									<li class="dropdown-header">
										<i class="fa fa-list"></i> {$LANG.chooselanguage}
									</li>
									<li id="langScroll">
										<ul class="list-unstyled">
											{foreach from=$locales item=locale}
												<li><a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a></li>
											{/foreach}
										</ul>
									</li>
								</ul>
							</li>
							{/if}
					
							{include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
			
		
		
		
							<!--Search Box-->
							<li class="dropdown nav-search-icon">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<span class="glyphicon glyphicon-search"></span>
								</a>
								<ul class="dropdown-menu dropdown-search">
									<li>
										<div class="search-box">
											<form method="post" action="{$WEB_ROOT}/knowledgebase.php?action=search">
												<div class="input-icon right">
													<span class="fa fa-search"></span>
													<input type="text" placeholder="{$LANG.knowledgebasesearch} ..." name="search" class="form-control" autocomplete="off" value="{$LANG.kbquestionsearchere}" onfocus="this.value=(this.value=='{$LANG.kbquestionsearchere}') ? '' : this.value;" onblur="this.value=(this.value=='') ? '{$LANG.kbquestionsearchere}' : this.value;" />
												</div>
											</form>
										</div>
									</li>
								</ul>
							</li>
							<!--Search Box-->								
						</ul>
						<!-- END RIGHT SIDE DROPDOWN BUTTONS -->

						<!-- TOP MENU -->
						
						{*{include file="$template/includes/navbar-top-left.tpl"}*}

						
					</div><!-- /.nav-top -->
				</nav><!-- /.navbar-top -->
				<!-- END TOP NAVIGATION -->
				

				<!-- BEGIN SIDE NAVIGATION -->				
				<nav class="navbar-side hidden-print" id="navbar-side" role="navigation">
							
					{include file="$template/includes/side-menu.tpl"}
					
					
				</nav><!-- /.navbar-side -->
				<!-- END SIDE NAVIGATION -->
				
				
				<!-- BEGIN MAIN PAGE CONTENT -->
				<div id="page-wrapper">
					<!-- BEGIN PAGE HEADING ROW -->
						<div class="row">
							<div class="col-lg-12">
								<!-- BEGIN BREADCRUMB -->
								<div class="breadcrumbs">
									<ul class="breadcrumb">
										<li><a href="index.php"></a></li>
										<li>{$breadcrumbnav}</li>
									</ul>									
								</div>
								<!-- END BREADCRUMB -->	

								<!-- /#eno-layout-button, remove below line if do not want settings button -->	
								{include file="$template/includes/settings-btn.tpl"}
								
									{if $adminMasqueradingAsClient}
									<!-- Return to admin link -->
											
										<div class="alert alert-danger admin-masquerade-alert">
											{$LANG.adminmasqueradingasclient} <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="text-danger">{$LANG.logoutandreturntoadminarea}</a>
										</div>
											
									{elseif $adminLoggedIn}
									<!-- Return to admin link -->
										
										<div class="alert alert-danger admin-masquerade-alert">
											{$LANG.adminloggedin} <a href="{$WEB_ROOT}/logout.php?returntoadmin=1">{$LANG.returntoadminarea}</a>
										</div>
										
									{/if}
								
								<!-- /#eno-layout-button -->
								
							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
					<!-- END PAGE HEADING ROW -->
							
							{if $templatefile == 'homepage'}{else}
							<div class="row">
								<div class="col-lg-12">
									{include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=false}
								</div>
							</div>
							{/if}
							
							
						    <div class="row">
								{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}

									<div class="col-md-3 pull-md-left">
										{include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
									</div>
								{/if}
								<!-- Container for main page display content -->
								<div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
							

	{/if}