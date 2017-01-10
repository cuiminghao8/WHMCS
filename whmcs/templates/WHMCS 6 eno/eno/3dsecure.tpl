{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}


{include file="$template/includes/alert.tpl" type="info" msg=$LANG.creditcard3dsecure textcenter=true}

<br /><br />

<div class="text-center">

    <div id="frmThreeDAuth" class="hidden">
        {$code}
    </div>

    <iframe name="3dauth" height="500" scrolling="auto" src="about:blank" class="submit-3d"></iframe>

    <br /><br />

</div>

<script language="javascript">
    jQuery("#frmThreeDAuth").find("form:first").attr('target', '3dauth');
    setTimeout("autoSubmitFormByContainer('frmThreeDAuth')", 1000);
</script>
