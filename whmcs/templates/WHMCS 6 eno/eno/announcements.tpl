{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}


{foreach from=$announcements item=announcement}

    <div class="portlet padding-all no-padding-top">

        <h3>
			<a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}{$smarty.server.PHP_SELF}?id={$announcement.id}{/if}">{$announcement.title}</a>
        </h3>
		<p><i class="fa fa-calendar text-success"></i> &nbsp;{"M jS"|date:$announcement.timestamp}</p>
        
            <p>{if $announcement.text|strip_tags|strlen < 350}{$announcement.text}{else}{$announcement.summary}
            <a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}{$smarty.server.PHP_SELF}?id={$announcement.id}{/if}" class="btn btn-xs btn-warning">{$LANG.readmore} &raquo;</a>
            {/if}</p>
			
			<div class="hr hr-6 dotted hr-double"></div>
        

        {if $announcementsFbRecommend}
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/{$LANG.locale}/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="{$systemurl}{if $seofriendlyurls}announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
            <div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="{$systemurl}{if $seofriendlyurls}announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
        {/if}

    </div>

{foreachelse}

    {include file="$template/includes/alert.tpl" type="info" msg="{$LANG.noannouncements}" textcenter=true}

{/foreach}

{if $prevpage || $nextpage}

    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
        <form class="form-inline" role="form">
            <div class="form-group">
                <div class="input-group">
                    {if $prevpage}
                        <span class="input-group-btn">
                            <a href="announcements.php?page={$prevpage}{if $view}&view={$view}{/if}" class="btn btn-default">&laquo; {$LANG.previouspage}</a>
                        </span>
                    {/if}
                    <input class="form-control" style="text-align: center;" value="{$LANG.page} {$pagenumber}" disabled="disabled">
                    {if $nextpage}
                        <span class="input-group-btn">
                            <a href="announcements.php?page={$nextpage}{if $view}&view={$view}{/if}" class="btn btn-default">{$LANG.nextpage} &raquo;</a>
                        </span>
                    {/if}
                </div>
            </div>
        </form>
    </div>
{/if}
