{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

{if empty($dlcats) }
    {include file="$template/includes/alert.tpl" type="info" msg=$LANG.downloadsnone textcenter=true}
{else}
	<div class="portlet padding-all">
		<form role="form" method="post" action="downloads.php?action=search">
			<div class="input-group">
				<input type="text" name="search" class="form-control input-lg" placeholder="{$LANG.downloadssearch}" />
				<span class="input-group-btn">
					<button type="submit" class="btn btn-lg btn-primary" value="" /><i class="fa fa-search"></i><span class="hidden-xs">{$LANG.search}</span></button>
				</span>
			</div>
		</form>
	</div>

    <p>{$LANG.downloadsintrotext}</p>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-folder-open"></i> {$LANG.downloadscategories}</h3>
                </div>
                <div class="list-group">
                    {foreach from=$dlcats item=dlcat}
                        <span class="list-group-item">
                            <a href="{if $seofriendlyurls}{$WEB_ROOT}/downloads/{$dlcat.id}/{$dlcat.urlfriendlyname}{else}downloads.php?action=displaycat&amp;catid={$dlcat.id}{/if}">
                                <i class="fa fa-folder-open-o"></i>
                                <strong>{$dlcat.name}</strong>
                            </a>
                            ({$dlcat.numarticles})
                            <br />
                            {$dlcat.description}
                        </span>
                    {foreachelse}
                        <span class="list-group-item">
                            <p class="text-center fontsize3">{$LANG.downloadsnone}</p>
                        </span>
                    {/foreach}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-star"></i> {$LANG.downloadspopular}</h3>
                </div>
                <div class="list-group">
                    {foreach from=$mostdownloads item=download}
                        <div class="list-group-item">
                            <a href="{$download.link}">
                                <i class="fa fa-file-o"></i>
                                <strong>
                                    {$download.title}
                                    {if $download.clientsonly}
                                        <i class="fa fa-lock"></i>
                                    {/if}
                                </strong>
                            </a><br />
                            {$download.description}
                            <div><span class="text-muted">{$LANG.downloadsfilesize}: {$download.filesize}</span></div>
                        </div>
                        {foreachelse}
                        <span class="list-group-item">
                            {$LANG.downloadsnone}
                        </span>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
{/if}
