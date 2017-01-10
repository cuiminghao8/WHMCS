{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<div class="mass-head hero-1 inverse">
    <div>
		<div class="hero-inner text-center">
			<h1>{$LANG.domaintitle}</h1>
			<p>{$LANG.homebegin}</p>
			<!--Domain Box For Tablet and Desktop-->
			<div class="hidden-xs">
				<form id="frmDomainChecker">
					<div class="input-group">
						<div class="input-group-btn">
							<input type="text" name="domain" placeholder="{$LANG.findyourdomain}" value="{$domain}" id="inputDomain" class="domains-input" maxlength="65">
							<button type="submit" id="btnCheckAvailability" class="btn btn-inverse domain-btn-2">{$LANG.search}</button> 
							{if $bulkdomainsearchenabled}<a href="domainchecker.php?search=bulk" id="btnBulkOptions" class="btn btn-warning domain-btn-1" />{$LANG.bulkoptions}</a>{/if}
						</div>
					</div>
					{include file="$template/includes/captcha.tpl"}
				</form>
			</div>
			<!--End Domain Box For Tablet and Desktop-->
					
			<!--Domain Box for Mobile-->
			<div class="visible-xs padding-all">
				<form id="frmDomainChecker">
					<div class="input-group">
						<input type="text" name="domain" placeholder="{$LANG.findyourdomain}" value="{$domain}" id="inputDomain" class="domains-input form-control input-lg"  maxlength="65">
						<span class="input-group-btn btn-group-lg">
							<button type="submit" id="btnCheckAvailability" class="btn btn-inverse">
								<i class="fa fa-search icon-only"></i>
							</button>
						</span>
					</div>

					<div class="smaller-50">{include file="$template/includes/captcha.tpl"}</div>
				</form>
			</div>
			<!--End Domain Box for Mobile-->
		</div>
    </div>
</div>

<div class="block-s3">
	<div >
	
		{include file="$template/includes/alert.tpl" type="danger" msg="{$LANG.searchtermrequired}" textcenter=true idname="searchTermRequired" additionalClasses="domain-checker-error" hide=true}

		{include file="$template/includes/alert.tpl" type="danger" msg="{$LANG.invalidchars}" textcenter=true idname="invalidChars" additionalClasses="domain-checker-error" hide=true}

		{if $errorMsg}
			{include file="$template/includes/alert.tpl" type="danger" msg=$errorMsg textcenter=true idname="invalidDomainError" additionalClasses="domain-checker-error"}
		{else}
			{include file="$template/includes/alert.tpl" type="danger" msg="{$LANG.unabletolookup}" textcenter=true idname="invalidDomainError" additionalClasses="domain-checker-error" hide=true}
		{/if}


		<div class="domain-step-options hidden" id="stepBulkOptions">
			<textarea class="form-control" rows="10" cols="60" id="inputBulkDomains"></textarea>
		</div>
		
		<div class="domain-step-options{if !$performingLookup} hidden{/if}" id="stepResults">
			{include file="$template/domainchecker-results.tpl"}
		</div>

		
		<div id="pricingTable"{if $performingLookup} class="hidden"{/if}>
			{include file="$template/includes/domain-pricing.tpl"}
		</div>


	</div>
</div>


<script>
var langSearch = '{$LANG.search}';
var langAdding = '{$LANG.domaincheckeradding}';
var langAdded = '{$LANG.domaincheckeradded}';
var langUnavailable = '{$LANG.domainunavailable}';
var langBulkPlaceholder = '{$LANG.domaincheckerbulkplaceholder|escape:'quotes'|replace:"\n":'\n'}';
</script>
<script src="templates/{$template}/assets/js/domainchecker.js"></script>

{include file="$template/includes/modal.tpl" name="CheckUnavailable" title="{$LANG.domainchecker.suggestiontakentitle}" content="{$LANG.domainchecker.suggestiontakenmsg}" closeLabel="{$LANG.domainchecker.suggestiontakenchooseanother}"}

{include file="$template/includes/modal.tpl" name="AlreadyInCart" title="{$LANG.domainchecker.alreadyincarttitle}" content="{$LANG.domainchecker.alreadyincartmsg}" submitAction="window.location='cart.php?a=checkout'" submitLabel="{$LANG.domainchecker.alreadyincartcheckoutnow}"}

{include file="$template/includes/modal.tpl" name="AddToCartError" title="{$LANG.genericerror.title}" content="{$LANG.genericerror.msg}"}
