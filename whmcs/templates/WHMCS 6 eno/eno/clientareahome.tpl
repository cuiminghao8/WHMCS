{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}



		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<a href="clientarea.php?action=services" class="tile-button btn btn-white">
					<div class="tile-content-wrapper">
						<i class="fa fa-cube text-primary"></i>
						<div class="tile-content text-primary">
							{$clientsstats.productsnumactive}
						</div>
						<small>{$LANG.navservices}</small>
					</div>
				</a>
			</div>
			{if $registerdomainenabled || $transferdomainenabled}
			<div class="col-lg-3 col-sm-6">
				<a href="clientarea.php?action=domains" class="tile-button btn btn-white">
					<div class="tile-content-wrapper">
						<i class="fa fa-globe text-success"></i>
						<div class="tile-content text-success">
							{$clientsstats.numactivedomains}
						</div>
						<small>{$LANG.navdomains}</small>
					</div>
				</a>
			</div>
			{elseif $condlinks.affiliates && $clientsstats.isAffiliate}
			<div class="col-lg-3 col-sm-6">
				<a href="affiliates.php" class="tile-button btn btn-white">
					<div class="tile-content-wrapper">
						<i class="fa fa-shopping-cart"></i>
						<div class="tile-content text-success">
							{$clientsstats.numaffiliatesignups}
						</div>
						<small>{$LANG.affiliatessignups}</small>
					</div>
				</a>
			</div>
			{else}
			<div class="col-lg-3 col-sm-6">
				<a href="clientarea.php?action=quotes" class="tile-button btn btn-white">
					<div class="tile-content-wrapper">
						<i class="fa fa-file-text-o"></i>
						<div class="tile-content text-warning">
							{$clientsstats.numquotes}
						</div>
						<small>{$LANG.quotes}</small>
					</div>
				</a>
			</div>
			{/if}
			<div class="col-lg-3 col-sm-6">
				<a href="supporttickets.php" class="tile-button btn btn-white">
					<div class="tile-content-wrapper">
						<i class="fa fa-comments text-danger"></i>
						<div class="tile-content text-danger">
							{$clientsstats.numactivetickets}
						</div>
						<small>{$LANG.navtickets}</small>
					</div>  
				</a>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a href="clientarea.php?action=invoices" class="tile-button btn btn-white">
					<div class="tile-content-wrapper">
						<i class="fa fa-credit-card text-warning"></i>
						<div class="tile-content text-warning">
							{$clientsstats.numunpaidinvoices}
						</div>
						<small>{$LANG.navinvoices}</small>
					</div>
				</a>
			</div>
		</div>
		
		
<div class="well padding-2x inverse margin-bottom">
<form role="form" method="post" action="clientarea.php?action=kbsearch">
    <div class="input-group">
        <input type="text" name="search" class="form-control input-lg" placeholder="{$LANG.clientHomeSearchKb}" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-lg btn-primary" value="" /><i class="fa fa-search"></i><span class="hidden-xs">{$LANG.knowledgebasesearch}</span></button>
        </span>
    </div>
</form>
</div>

{foreach from=$addons_html item=addon_html}
    <div>
        {$addon_html}
    </div>
{/foreach}

<div class="client-home-panels">
    <div class="row">
        <div class="col-sm-6">

            {function name=outputHomePanels}
                <div menuItemName="{$item->getName()}" class="panel panel-default panel-accent-{$item->getExtra('color')}{if $item->getClass()} {$item->getClass()}{/if}"{if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {if $item->getExtra('btn-link') && $item->getExtra('btn-text')}
                                <div class="pull-right">
                                    <a href="{$item->getExtra('btn-link')}" class="btn btn-default bg-color-{$item->getExtra('color')} btn-xs">
                                        {if $item->getExtra('btn-icon')}<i class="fa {$item->getExtra('btn-icon')}"></i>{/if}
                                        {$item->getExtra('btn-text')}
                                    </a>
                                </div>
                            {/if}
                            {if $item->hasIcon()}<i class="{$item->getIcon()}"></i>&nbsp;{/if}
                            {$item->getLabel()}
                            {if $item->hasBadge()}&nbsp;<span class="badge">{$item->getBadge()}</span>{/if}
                        </h3>
                    </div>
                    {if $item->hasBodyHtml()}
                        <div class="panel-body">
                            {$item->getBodyHtml()}
                        </div>
                    {/if}
                    {if $item->hasChildren()}
                        <div class="list-group{if $item->getChildrenAttribute('class')} {$item->getChildrenAttribute('class')}{/if}">
                            {foreach $item->getChildren() as $childItem}
                                {if $childItem->getUri()}
                                    <a menuItemName="{$childItem->getName()}" href="{$childItem->getUri()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()} active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if} id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </a>
                                {else}
                                    <div menuItemName="{$childItem->getName()}" class="list-group-item{if $childItem->getClass()} {$childItem->getClass()}{/if}" id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}
					
					{if $item->hasFooterHtml()}
						<div class="panel-footer">
							{$item->getFooterHtml()}
						</div>
					{/if}
                </div>
            {/function}

            {foreach $panels as $item}
                {if $item@iteration is odd}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
        <div class="col-sm-6">

            {foreach $panels as $item}
                {if $item@iteration is even}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
    </div>
</div>
