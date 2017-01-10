{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}



<div class="sidebar-scroll">
	<!-- BEGIN SHORTCUT BUTTONS -->
	<div class="media">							
		<ul class="sidebar-shortcuts">
			<li><a href="{$WEB_ROOT}/{if $loggedin}clientarea.php?action=products{else}announcements.php{/if}" class="btn btn-success"><i class="fa fa-{if $loggedin}cogs{else}bullhorn{/if} icon-only"></i></a></li>
			<li><a href="{$WEB_ROOT}/cart.php" class="btn btn-primary"><i class="fa fa-shopping-cart icon-only"></i></a></li>
			<li><a href="{$WEB_ROOT}/{if $loggedin}submitticket.php{else}contact.php{/if}" class="btn btn-warning"><i class="fa fa-{if $loggedin}comments{else}envelope{/if} icon-only"></i></a></li>
			<li class="pull-right"><a href="{$WEB_ROOT}/{if $loggedin}logout.php{else}login.php{/if}" class="btn btn-danger"><i class="fa fa-{if $loggedin}power-off{else}lock{/if} icon-only"></i></a></li>
		</ul>	
	</div>
	<!-- END SHORTCUT BUTTONS -->

	<!-- BEGIN FIND MENU ITEM INPUT -->
	<div class="media-search">	
		<div class="input-icon">
			<span class="fa fa-search"></span>
			<input type="text" class="input-menu" id="input-items">
		</div>
	</div>						
	<!-- END FIND MENU ITEM INPUT -->
						
	<ul id="side" class="nav navbar-nav side-nav">
		<!-- BEGIN SIDE NAV MENU -->
							
		<li><h4>Navigation</h4></li>
		<li>
			<a {if $templatefile == 'homepage' || $templatefile == 'clientareahome'}class="active"{else}{/if} href="{$WEB_ROOT}/{if $loggedin}clientarea{else}index{/if}.php">
				<i class="fa fa-dashboard"></i> <span class="mtext">{if $loggedin}{$LANG.clientareatitle}{else}{$LANG.globalsystemname}{/if}</span>
			</a>
		</li>
			
		{if $loggedin}
			<li class="panel {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "products" || $smarty.get.action eq "productdetails" || $smarty.get.action eq "cancel")}open{/if} {if $filename eq "cart" & $smarty.get.gid eq "addons"}open{/if}">
				<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-1">
					<i class="fa fa-cogs"></i> <span class="mtext">{$LANG.navservices}</span> <span class="fa arrow"></span>
				</a>
				<ul class="collapse nav" id="#m-1">
					{if $clientsstats.productsnumtotal>0}
					<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "products" || $smarty.get.action eq "productdetails" || $smarty.get.action eq "cancel")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=products">{$LANG.clientareanavservices} <span class="badge badge-success">{$clientsstats.productsnumtotal}</span></a></li>
					<li><a href="{$WEB_ROOT}/cart.php?gid=addons">{$LANG.domainaddons}</a></li>
					{else}
					<li><a href="{$WEB_ROOT}/cart.php">{$LANG.navservicesorder}</a></li>
					{/if}
					{if $condlinks.pmaddon}<li><a href="{$WEB_ROOT}/index.php?m=project_management">{$LANG.clientareaprojects}</a></li>{/if}
					</ul>
				</li>
				
			{/if}
			
			{if $condlinks.domainreg || $condlinks.domaintrans}
			<li class="panel {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "domains" || $smarty.get.action eq "domaindetails" || $smarty.get.action eq "domainaddons" || $smarty.get.action eq "domaincontacts" || $smarty.get.action eq "domainregisterns" || $smarty.get.action eq "domaingetepp")}open{/if}{if $filename eq "domainchecker"  || $filename eq "cart" & $smarty.get.gid eq "renewals"}open{/if}">
				<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-2">
					<i class="fa fa-globe"></i> <span class="mtext">{$LANG.navdomains}</span> <span class="fa arrow"></span>
				</a>
				<ul class="collapse nav" id="#m-2">
					{if $loggedin}
						
					{if $clientsstats.numdomains>0}<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "domains" || $smarty.get.action eq "domaindetails" || $smarty.get.action eq "domainaddons" || $smarty.get.action eq "domaincontacts" || $smarty.get.action eq "domainregisterns" || $smarty.get.action eq "domaingetepp")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=domains">{$LANG.clientareanavdomains} <span class="badge badge-info">{$clientsstats.numdomains}</span></a></li>{else}{/if}
					{if $clientsstats.numactivedomains>0}<li><a href="{$WEB_ROOT}/cart.php?gid=renewals">{$LANG.domainrenewalprice}</a></li>{else}{/if}
					{if $condlinks.domainreg}<li><a href="{$WEB_ROOT}/cart.php?a=add&domain=register">{$LANG.registerdomain}</a></li>{/if}
					{if $condlinks.domaintrans}<li><a href="{$WEB_ROOT}/cart.php?a=add&domain=transfer">{$LANG.domainstransfer}</a></li>{/if}
					{if $enomnewtldsenabled}<li><a href="{$WEB_ROOT}/index.php?m=enomnewtlds">Preregister New TLDs</a></li>{/if}
					<li><a {if $filename eq "domainchecker"}class="active"{/if} href="{$WEB_ROOT}/domainchecker.php">{$LANG.navdomainsearch}</a></li>
						
					{else}
						
					{if $condlinks.domainreg}<li><a href="{$WEB_ROOT}/cart.php?a=add&domain=register">{$LANG.registerdomain}</a></li>{/if}
					{if $condlinks.domaintrans}<li><a href="{$WEB_ROOT}/cart.php?a=add&domain=transfer">{$LANG.domainstransfer}</a></li>{/if}
					{if $enomnewtldsenabled}<li><a href="{$WEB_ROOT}/index.php?m=enomnewtlds">Preregister New TLDs</a></li>{/if}
					<li><a {if $filename eq "domainchecker"}class="active"{/if} href="{$WEB_ROOT}/domainchecker.php">{$LANG.navdomainsearch}</a></li>
						
					{/if}
				</ul>							
			</li>
			{/if}
				
			<li>
				<a {if $filename eq "cart"}class="active"{/if} href="{$WEB_ROOT}/cart.php">
					<i class="fa fa-shopping-cart"></i><span class="mtext">{$LANG.navservicesorder}</span>
				</a>
			</li>
				
			{if $loggedin}
			<li class="panel {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "invoices" || $smarty.get.action eq "addfunds" || $smarty.get.action eq "masspay" || $smarty.get.action eq "creditcard" || $smarty.get.action eq "quotes" || $smarty.get.action eq "details" || $smarty.get.action eq "changepw" || $smarty.get.action eq "contacts" || $smarty.get.action eq "emails" || $smarty.get.action eq "security")}open{/if}">
				<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-3">
					<i class="fa fa-money"></i> <span class="mtext">{$LANG.navbilling}</span> <span class="fa arrow"></span>
				</a>
			<ul class="collapse nav" id="#m-3">
				<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "invoices")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=invoices">{$LANG.invoices} {if $clientsstats.numoverdueinvoices>0}<span class="badge badge-danger"> {$clientsstats.numdueinvoices}</span>{/if}</a></li>
				{if $condlinks.addfunds}<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "addfunds")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=addfunds">{$LANG.addfunds}</a></li>{/if}
				{if $condlinks.masspay}<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "masspay")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=masspay&all=true">{$LANG.masspaytitle}</a></li>{/if}
				{if $condlinks.updatecc}<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "creditcard")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=creditcard">{$LANG.navmanagecc}</a></li>{/if}
				<li><a {if $pagetitle eq $LANG.clientareatitle && ($smarty.get.action eq "quotes")}class="active"{/if} href="{$WEB_ROOT}/clientarea.php?action=quotes">{$LANG.quotestitle}</a></li>	
			</ul>
		</li>
		{/if}
		
		
		<li class="panel {if $filename eq "submitticket" || $filename eq "supporttickets" || $filename eq "viewticket" || $filename eq "knowledgebase" || $filename eq "downloads" || $filename eq "serverstatus"}open{/if}">
			<a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#m-4">
				<i class="fa fa-support"></i> <span class="mtext">{$LANG.navsupport}</span> <span class="fa arrow"></span>
			</a>
			<ul class="collapse nav" id="#m-4">
				{if $loggedin}
					
				<li><a {if $filename eq "submitticket"}class="active"{/if} href="{$WEB_ROOT}/submitticket.php">{$LANG.navopenticket}</a></li>
				<li><a {if $filename eq "supporttickets"}class="active"{/if} href="{$WEB_ROOT}/supporttickets.php">{$LANG.navtickets} {if $clientsstats.numactivetickets>0}<span class="badge badge-info">{$clientsstats.numactivetickets}</span>{/if}</a></li>
				<li><a {if $filename eq "knowledgebase"}class="active"{/if} href="{$WEB_ROOT}/knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
				<li><a {if $filename eq "downloads"}class="active"{/if} href="{$WEB_ROOT}/downloads.php">{$LANG.downloadstitle}</a></li>
				<li><a {if $filename eq "serverstatus"}class="active"{/if} href="{$WEB_ROOT}/serverstatus.php">{$LANG.serverstatustitle}</a></li>
					
				{else}
				<li><a {if $filename eq "submitticket"}class="active"{/if} href="{$WEB_ROOT}/submitticket.php">{$LANG.navopenticket}</a></li>
				<li><a {if $filename eq "knowledgebase"}class="active"{/if} href="{$WEB_ROOT}/knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
				{/if}	
			</ul>
		</li>
			
		<li>
			<a {if $filename eq "announcements"}class="active"{/if} href="{$WEB_ROOT}/announcements.php">
				<i class="fa fa-bullhorn"></i><span class="mtext">{$LANG.announcementstitle}</span>
			</a>
		</li>
			
		{if $condlinks.affiliates}
		<li>
			<a {if $filename eq "affiliates"}class="active"{/if} href="{$WEB_ROOT}/affiliates.php">
				<i class="fa fa-group"></i><span class="mtext">{$LANG.affiliatestitle}</span>
			</a>
		</li>
		{/if}
			
	</ul><!-- /.side-nav -->
</div><!-- /.navbar-collapse -->