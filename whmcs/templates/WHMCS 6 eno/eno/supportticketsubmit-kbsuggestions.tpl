{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<h3>{$LANG.kbsuggestions}</h3>

<p>{$LANG.kbsuggestionsexplanation}</p>

<div class="kbarticles">
    {foreach from=$kbarticles item=kbarticle}
        <p>
            <a href="knowledgebase.php?action=displayarticle&id={$kbarticle.id}" target="_blank">
                <span class="glyphicon glyphicon-file"></span>
                {$kbarticle.title}
            </a> - {$kbarticle.article}...
        </p>
    {/foreach}
</div>
