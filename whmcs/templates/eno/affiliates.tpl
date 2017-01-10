{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}


{if $inactive}

    {include file="$template/includes/alert.tpl" type="danger" msg=$LANG.affiliatesdisabled textcenter=true}

{else}
	
	<div class="portlet">
		<div class="portlet-body">
			<div class="row">

				<div class="col-sm-4">
					<div class="affiliate-stat affiliate-stat-green alert-warning">
						<i class="fa fa-users"></i>
						<span>{$visitors}</span>
						{$LANG.affiliatesclicks}
					</div>
				</div>

				<div class="col-sm-4">
					<div class="affiliate-stat affiliate-stat-green alert-info">
						<i class="fa fa-shopping-cart"></i>
						<span>{$signups}</span>
						{$LANG.affiliatessignups}
					</div>
				</div>

				<div class="col-sm-4">
					<div class="affiliate-stat affiliate-stat-green alert-success">
						<i class="fa fa-bar-chart-o"></i>
						<span>{$conversionrate}%</span>
						{$LANG.affiliatesconversionrate}
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="portlet">
		<div class="portlet-body">
			<div class="affiliate-referral-link text-center">

				<h3>{$LANG.affiliatesreferallink}</h3>
				<span>{$referrallink}</span>

			</div>
		</div>
	</div>

		<div class="portlet">
			<div class="portlet-body">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<table class="table table-striped table-rounded">
							<tr>
								<td class="text-right">{$LANG.affiliatescommissionspending}:</td>
								<td><strong>{$pendingcommissions}</strong></td>
							</tr>
							<tr>
								<td class="text-right">{$LANG.affiliatescommissionsavailable}:</td>
								<td><strong>{$balance}</strong></td>
							</tr>
							<tr>
								<td class="text-right">{$LANG.affiliateswithdrawn}:</td>
								<td><strong>{$withdrawn}</strong></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

    {if $withdrawrequestsent}
        <div class="alert alert-success">
            <p>{$LANG.affiliateswithdrawalrequestsuccessful}</p>
        </div>
    {else}
        <p class="text-center">
            <a href="{$smarty.server.PHP_SELF}?action=withdrawrequest" class="btn btn-lg btn-danger"{if !$withdrawlevel} disabled="true"{/if}>
                <i class="fa fa-bank"></i> {$LANG.affiliatesrequestwithdrawal}
            </a>
        </p>
        {if !$withdrawlevel}
            <p class="text-muted text-center">{lang key="affiliateWithdrawalSummary" amountForWithdrawal=$affiliatePayoutMinimum}</p>
        {/if}
    {/if}

   

    {include file="$template/includes/tablelist.tpl" tableName="AffiliatesList"}
    <script type="text/javascript">
        jQuery(document).ready( function ()
        {
            var table = jQuery('#tableAffiliatesList').removeClass('hidden').DataTable();
            {if $orderby == 'regdate'}
                table.order(0, '{$sort}');
            {elseif $orderby == 'product'}
                table.order(1, '{$sort}');
            {elseif $orderby == 'amount'}
                table.order(2, '{$sort}');
            {elseif $orderby == 'status'}
                table.order(4, '{$sort}');
            {/if}
            table.draw();
            jQuery('#tableLoading').addClass('hidden');
        });
    </script>	
	
	<div class="portlet">
		<div class="portlet-heading">
			<div class="portlet-title">
				<h4><i class="fa fa-list"></i> {$LANG.affiliatesreferals}</h4>
			</div>
			<div class="portlet-widgets">
				<a data-toggle="collapse" data-parent="#accordion" href="#affiliates-box"><i class="fa fa-chevron-down"></i></a>
			</div>
			<div class="clearfix"></div>		
		</div>
		<div id="affiliates-box" class="panel-collapse collapse in">
			<div class="portlet-body">
				<table id="tableAffiliatesList" class="datatable table table-hover table-bordered eno-table table-primary hidden">
					<thead>
						<tr>
							<th data-hide="phone">{$LANG.affiliatessignupdate}</th>
							<th data-class="expand">{$LANG.orderproduct}</th>
							<th data-hide="phone,tablet">{$LANG.affiliatesamount}</th>
							<th data-hide="phone,tablet">{$LANG.affiliatescommission}</th>
							<th>{$LANG.affiliatesstatus}</th>
						</tr>
					</thead>
					<tbody>
					{foreach from=$referrals item=referral}
						<tr class="text-center">
							<td>{$referral.date}</td>
							<td>{$referral.service}</td>
							<td>{$referral.amountdesc}</td>
							<td>{$referral.commission}</td>
							<td><span class='label status status-{$referral.status|strtolower}'>{$referral.status}</span></td>
						</tr>
					{/foreach}
					</tbody>
				</table>
				<div class="text-center" id="tableLoading">
					<p><i class="fa fa-spinner fa-spin"></i> {$LANG.loading}</p>
				</div>
			</div>
		</div>
	</div>

    {if $affiliatelinkscode}
        {include file="$template/includes/subheader.tpl" title=$LANG.affiliateslinktous}
        <div class="margin-bottom text-center">
            {$affiliatelinkscode}
        </div>
    {/if}

{/if}
