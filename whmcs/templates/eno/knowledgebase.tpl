{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<div class="portlet padding-all">
<form role="form" method="post" action="{$WEB_ROOT}/knowledgebase.php?action=search">
    <div class="input-group">
        <input type="text" name="search" class="form-control input-lg" placeholder="{$LANG.kbsearchexplain}" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-lg btn-primary" value="" /><i class="fa fa-search"></i><span class="hidden-xs">{$LANG.knowledgebasesearch}</span></button>
        </span>
    </div>
</form>
</div>


<div class="portlet padding-all">
<h2>{$LANG.knowledgebasecategories}</h2>

{if $kbcats}
    <div class="row kbcategories">
        {foreach from=$kbcats item=kbcat}
            <div class="col-sm-4">
                <a href="{if $seofriendlyurls}{$WEB_ROOT}/knowledgebase/{$kbcat.id}/{$kbcat.urlfriendlyname}{else}knowledgebase.php?action=displaycat&amp;catid={$kbcat.id}{/if}">
                    <span class="glyphicon glyphicon-folder-close"></span> {$kbcat.name} <span class="badge badge-info">{$kbcat.numarticles}</span>
                </a>
                <p>{$kbcat.description}</p>
            </div>
        {/foreach}
    </div>
{else}
    {include file="$template/includes/alert.tpl" type="info" msg=$LANG.knowledgebasenoarticles textcenter=true}
{/if}

{if $kbmostviews}

    <h2>{$LANG.knowledgebasepopular}</h2>

    <div class="kbarticles">
        {foreach from=$kbmostviews item=kbarticle}
            <a href="{if $seofriendlyurls}{$WEB_ROOT}/knowledgebase/{$kbarticle.id}/{$kbarticle.urlfriendlytitle}.html{else}knowledgebase.php?action=displayarticle&amp;id={$kbarticle.id}{/if}">
                <span class="glyphicon glyphicon-file"></span>&nbsp;{$kbarticle.title}
            </a>
            <p>{$kbarticle.article|truncate:100:"..."}</p>
        {/foreach}
    </div>

{/if}
</div>