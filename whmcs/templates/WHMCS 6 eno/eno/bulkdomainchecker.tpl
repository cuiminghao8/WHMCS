{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}



{if $invalidCaptcha}
    {include file="$template/includes/alert.tpl" type="danger" msg="{lang key=$invalidCaptchaError}" textcenter=true}
{/if}

<div class="well bg-warning no-padding no-border">
	{if $searchingFor == 'register'}
		<div class="padding-all no-padding-bottom">
			<h3>{$LANG.domainbulksearchintro}</h3>
		</div>

	{else}
		<div class="padding-all no-padding-bottom">
			<h3>{$LANG.domainbulktransferdescription}</h3>
		</div>
		
	{/if}

    <div class="domain-checker-bg-1 padding-2x clearfix">
        <form method="post" action="domainchecker.php?search=bulk{if $searchingFor == 'transfer'}transfer{/if}">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="input-group-box">
                        <textarea name="bulkdomains" id="inputBulkDomains" rows="8" class="form-control margin-bottom-5 position-relative">{$bulkdomains}</textarea>
                        <button type="submit" id="btnCheckAvailability" class="btn btn-inverse btn-block">{$LANG.checkavailability}</button>
                    
					
						{if $bulkdomainsearchenabled}
							<div class="domain-bulk-options-btn-group hidden-xs">
								<div class="btn-group">
									<button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										{$LANG.domainbulksearch} <span class="caret"></span>
									</button>
									<ul class="dropdown-menu dropdown-inverse" role="menu">
										<li><a href="domainchecker.php">{$LANG.domainsimplesearch}</a></li>
										<li><a href="domainchecker.php?search=bulkregister">{$LANG.domainbulksearch}</a></li>
										<li><a href="domainchecker.php?search=bulktransfer">{$LANG.domainbulktransfersearch}</a></li>
									</ul>
								</div>
							</div>
						{/if}
					
					
					</div>
                </div>
            </div>

            {include file="$template/includes/captcha.tpl"}
        </form>
    </div>
	
	


</div>







{if $invalidDomainsOmitted}
    {include file="$template/includes/alert.tpl" type="danger" msg="{$LANG.domaincheckerbulkinvaliddomain}" textcenter=true}
{/if}

{if $bulkCheckResults}
    {include file="$template/domainchecker-results.tpl"}
{else}

<div id="pricingTable"{if $performingLookup} class="hidden"{/if}>
	{include file="$template/includes/domain-pricing.tpl"}
</div>

{/if}

<script>
var langSearch = '{$LANG.search}';
var langAdding = '{$LANG.domaincheckeradding}';
var langAdded = '{$LANG.domaincheckeradded}';
var langUnavailable = '{$LANG.domainunavailable}';
var langBulkPlaceholder = '{$LANG.domaincheckerbulkplaceholder|escape:'quotes'|replace:"\n":'\n'}';
</script>
<script src="templates/{$template}/assets/js/domainchecker.js"></script>

{include file="$template/includes/modal.tpl" name="Whois" title=$LANG.whoisresults|cat:' <span id="whoisDomainName"></span>'}
