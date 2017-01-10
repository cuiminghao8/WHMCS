{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

{foreach from=$tweets key=num item=tweet}
    {if $num < $numtweets}
        <div class="tweet">
            <i class="fa fa-twitter fa-2x"></i>
            <p>
                {$tweet.tweet} <span>{$tweet.date}</span>
            </p>
        </div>
    {/if}
{/foreach}

<p>
    {$LANG.twitterfollowus} @ <a href="http://twitter.com/{$twitterusername}" target="_blank">http://twitter.com/{$twitterusername}</a> {$LANG.twitterfollowuswhy}
</p>
