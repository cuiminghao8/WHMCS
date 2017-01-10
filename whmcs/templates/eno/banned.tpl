{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<div class="alert alert-danger">
    <strong><i class="fa fa-gavel"></i> {$LANG.bannedyourip} {$ip} {$LANG.bannedhasbeenbanned}</strong>
    <ul>
        <li>{$LANG.bannedbanreason}: <strong>{$reason}</strong></li>
        <li>{$LANG.bannedbanexpires}: {$expires}</li>
    </ul>
</div>
