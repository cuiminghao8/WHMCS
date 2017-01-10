{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}



   <div class="panel-group eno-accordion no-border" id="accordion" role="tablist" aria-multiselectable="true">
        {foreach $tldcategories as $tldCategory}
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{$tldCategory->id}">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$tldCategory->id}" aria-expanded="{if $tldCategory@first}true{else}false{/if}" aria-controls="collapse{$tldCategory->id}" class="domain-tld-pricing-category">
                        <h5 class="panel-title">{$tldCategory->category} {$LANG.tldpricing} <span class="pull-right"><i class="fa fa-angle-right bigger-110"></i></span></h5>
                    </a>
                </div>
                <div id="collapse{$tldCategory->id}" class="panel-collapse collapse{if $tldCategory@first} in{/if}" role="tabpanel" aria-labelledby="heading{$tldCategory->id}">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover eno-table table-primary footable" data-page-size="5">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">{$LANG.domaintld}</th>
                                            <th data-hide="phone,tablet">{$LANG.domainminyears}</th>
                                            <th>{$LANG.domainsregister}</th>
                                            <th data-hide="phone,tablet">{$LANG.domainstransfer}</th>
                                            <th data-hide="phone,tablet">{$LANG.domainsrenew}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach $tldCategory->topLevelDomains as $tld}
                                            <tr>
                                                <td>{$tld->tld}</td>
                                                <td>{$tldpricing.{$tld->tld}.period}</td>
                                                <td>{if $tldpricing.{$tld->tld}.register}{$tldpricing.{$tld->tld}.register}{else}{$LANG.domainregnotavailable}{/if}</td>
                                                <td>{if $tldpricing.{$tld->tld}.transfer}{$tldpricing.{$tld->tld}.transfer}{else}{$LANG.domainregnotavailable}{/if}</td>
                                                <td>{if $tldpricing.{$tld->tld}.renew}{$tldpricing.{$tld->tld}.renew}{else}{$LANG.domainregnotavailable}{/if}</td>
                                            </tr>
                                        {/foreach}
                                    </tbody>
									<tfoot>
										<tr>
											<td colspan="5">
												<ul class="hide-if-no-paging pagination pagination-centered pull-right"></ul>
												<div class="clearfix"></div>
											</td>
										</tr>
									</tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{$tldCategory->id}">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseAll" aria-expanded="false" aria-controls="collapseAll" class="domain-tld-pricing-category">
                   <h5 class="panel-title">{$LANG.alltldpricing} <span class="pull-right"><i class="fa fa-angle-right bigger-110"></i></span></h5>
                </a>
            </div>
            <div id="collapseAll" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAll">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover eno-table table-primary footable" data-page-size="5">
                                <thead>
                                    <tr>
                                        <th data-toggle="true">{$LANG.domaintld}</th>
                                        <th data-hide="phone,tablet">{$LANG.domainminyears}</th>
                                        <th>{$LANG.domainsregister}</th>
                                        <th data-hide="phone,tablet">{$LANG.domainstransfer}</th>
                                         <th data-hide="phone,tablet">{$LANG.domainsrenew}</th>
                                     </tr>
                                </thead>
                                <tbody>
                                    {foreach $tldpricelist as $tld}
                                        <tr>
                                            <td>{$tld.tld}</td>
                                            <td>{$tld.period}</td>
                                            <td>{if $tld.register}{$tld.register}{else}{$LANG.domainregnotavailable}{/if}</td>
                                            <td>{if $tld.transfer}{$tld.transfer}{else}{$LANG.domainregnotavailable}{/if}</td>
                                            <td>{if $tld.renew}{$tld.renew}{else}{$LANG.domainregnotavailable}{/if}</td>
                                        </tr>
                                    {/foreach}
                                </tbody>
								
								<tfoot>
									<tr>
										<td colspan="5">
											<ul class="hide-if-no-paging pagination pagination-centered pull-right"></ul>
											<div class="clearfix"></div>
										</td>
									</tr>
								</tfoot>
								
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{if !$loggedin && $currencies}
<div class="padding-all">
	<form method="post" action="domainchecker.php" class="form-horizontal">
		{$LANG.choosecurrency}: <select class="input-sm" name="currency" onchange="submit()" style="width:76px;">
		{foreach from=$currencies item=curr}
			<option value="{$curr.id}"{if $curr.id eq $currency.id} selected="selected"{/if}>{$curr.code}</option>
		{/foreach}
		</select>
	</form>
</div>
{/if}


