{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<h3>{$LANG.domaingeteppcode}</h3>

<p>
    {$LANG.domaingeteppcodeexplanation}
</p>

<br />

{if $error}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.domaingeteppcodefailure|cat:" $error"}
{elseif $eppcode}
    {include file="$template/includes/alert.tpl" type="warning" msg=$LANG.domaingeteppcodeis|cat:" $eppcode"}
{else}
    {include file="$template/includes/alert.tpl" type="warning" msg=$LANG.domaingeteppcodeemailconfirmation}
{/if}
