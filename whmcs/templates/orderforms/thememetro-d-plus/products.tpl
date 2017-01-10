{include file="orderforms/{$carttpl}/common.tpl"}

<div id="TM-pricing-tables-container">

	<div class="row">
			
		<div class="col-md-12">
		 
			<div class="text-center">
				<h1>
					{if $productGroup.headline}
						{$productGroup.headline}
					{else}
						{$productGroup.name}
					{/if}
				</h1>
				{if $productGroup.tagline}
					<p>{$productGroup.tagline}</p>
				{/if}
			
				{if $errormessage}
					<div class="alert alert-danger">
						{$errormessage}
					</div>
				{/if}
				
				{if $showSidebarToggle}
					<a data-toggle="modal" data-target="#cat-opt" class="btn btn-warning btn-xs">
						<i class="fa fa-search-plus"></i> {$LANG.showMenu}
					</a>
				{/if}
			</div>
				
			<hr class="separator" />

			<div id="products" class="TM-pricing-tables-container">
				{foreach $products as $product}
					<div class="pricing-container">
						<div class="pricing-table-6 {if $product.isFeatured}active{/if} {if $product.qty eq "0"}hidden{/if}">
							<div class="row no-gutters">
								<div class="col-md-3">
									<h1 id="product{$product@iteration}-name" class="product-name">{$product.name} {if $product.isFeatured}<span class="badge">{$LANG.featuredProduct}</span>{/if}</h1>
											
									<div class="product-pricing" id="product{$product@iteration}-price">
											<div class="price">
											<div class="amount {if $product.paytype eq "free"}free{/if}">
												{if $product.bid}
													<sup>{$LANG.bundledeal}</sup>
													{if $product.displayprice}
														<br /><span>{$product.displayPriceSimple}</span>
													{/if}
													{elseif $product.paytype eq "free"}
														 <span><i class="fa fa-smile-o"></i> {$LANG.orderfree}</span>
													{elseif $product.paytype eq "onetime"}
														 <span>{$product.pricing.onetime} </span>{$LANG.orderpaymenttermonetime}
													{else}
													{if $product.pricing.hasconfigoptions}
														{$LANG.from}
													 {/if}
													{$product.pricing.minprice.cycleText}
												{/if}
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-7">
									{if $product.featuresdesc}
										<div class="contents">
											<p id="product{$product@iteration}-description">
												{$product.featuresdesc}
											</p>
										</div>
											
										{if !empty($product.features)}
											<button type="button" class="btn btn-xs btn-feature" role="button" data-toggle="collapse" href="#product{$product@iteration}-feature{$value@iteration}" aria-expanded="false">
												{$LANG.moreDetails} <i class="fa fa-arrow-down"></i>
											</button>
										{else}
										{/if}
									{else}
										
										<div class="contents">
											<ul>
												{foreach $product.features as $feature => $value}
													<li id="product{$product@iteration}-feature{$value@iteration}">
														<span class="feature-value"><b>{$value}</b></span>
															{$feature}
													</li>
												{/foreach}
											</ul>
										</div>
									{/if}
								</div>
								<div class="col-md-2">
									<a href="cart.php?a=add&{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}" class="btn {if $product.isFeatured}btn-success{else}btn-primary{/if}" id="product{$product@iteration}-order-button">
										<i class="fa fa-shopping-cart"></i> {$LANG.ordernowbutton}
									</a>
									
									{if $product.qty!=""}<small class="stock" id="product{$product@iteration}-unavailable"><em>({if $product.qty eq "0"}{$LANG.outofstock}{else}{$product.qty} {$LANG.orderavailable}{/if})</em></small>{/if}
								</div>
							</div>
						</div>
					</div>
					
					{if $product.featuresdesc}
						<div class="collapse" id="product{$product@iteration}-feature{$value@iteration}">
							<div class="product-feature-list">
								<ul>
									{foreach $product.features as $feature => $value}
										<li id="product{$product@iteration}-feature{$value@iteration}">
											<span class="feature-value"><b>{$value}</b></span>
												{$feature}
										</li>
									{/foreach}
								</ul>		
							</div>
						</div>							
					{/if}					
					
				{/foreach}
			</div>

		
		
		
			{if count($productGroup.features) > 0}
				<div class="cart-features">
					<div class="row clearfix">
						<div class="col-md-12">
							<div class="head-area">
								<span>
									{$LANG.orderForm.includedWithPlans}
								</span>
							</div>
								
							<div class="includes-features">
								<ul class="list-features">
									{foreach $productGroup.features as $features}
										<li>{$features.feature}</li>
									{/foreach}
								</ul>
							</div>
						</div>
					</div>
				</div>
			{/if}
		
		</div>
	</div>

</div>

{include file="orderforms/{$carttpl}/categories-options.tpl"}
