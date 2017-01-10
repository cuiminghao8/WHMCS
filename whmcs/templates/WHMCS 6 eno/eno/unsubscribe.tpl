{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

{if $successful}

    {include file="$template/includes/alert.tpl" type="danger" msg=$unsubscribesuccess textcenter=true}

    <p class="text-center">{$LANG.newsletterremoved}</p>

{/if}

{if $errormessage}

    {include file="$template/includes/alert.tpl" type="danger" msg=$errormessage textcenter=true}

{/if}

<p class="text-center">
    {$LANG.newsletterresubscribe|sprintf2:'<a href="clientarea.php?action=details">':'</a>'}
</p>

<p class="text-center">
    <a href="index.php" class="btn btn-default btn-lg">
        <i class="fa fa-home"></i>
        {$LANG.returnhome}
    </a>
</p>

<br /><br />