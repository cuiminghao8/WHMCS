<script type="text/javascript" src="templates/orderforms/{$carttpl}/js/main.js"></script>
<link rel="stylesheet" type="text/css" href="templates/orderforms/{$carttpl}/style.css" />

<div id="order-flathost">

    <div class="title-bar">
        <h1>{$groupname}</h1>
        {include file="templates/orderforms/{$carttpl}/category-chooser.tpl"}
    </div>

    {if !$loggedin && $currencies}
        <div class="currencychooser">
            <div class="btn-group" role="group">
                {foreach from=$currencies item=curr}
                    <a href="cart.php?gid={$gid}&currency={$curr.id}" class="btn btn-default{if $currency.id eq $curr.id} active{/if}">
                        <img src="{$BASE_PATH_IMG}/flags/{if $curr.code eq "AUD"}au{elseif $curr.code eq "CAD"}ca{elseif $curr.code eq "EUR"}eu{elseif $curr.code eq "GBP"}gb{elseif $curr.code eq "INR"}in{elseif $curr.code eq "JPY"}jp{elseif $curr.code eq "USD"}us{elseif $curr.code eq "ZAR"}za{else}na{/if}.png" border="0" alt="" />
                        {$curr.code}
                    </a>
                {/foreach}
            </div>
        </div>
    {/if}

    <div class="row">
 


        {foreach from=$products key=num item=product}
 
            <div class="{if {$products|@count} <= 3 } col-md-4 {else} col-md-3 {/if} {if {$products|@count} == 1 } col-md-offset-4 {elseif {$products|@count} == 2 && $num == 0 } col-md-offset-2 {/if} col-sm-6 PlanPricing">
                <div id="product{$num}" class="" onclick="window.location='cart.php?a=add&{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}'">

                    

                    <div class="planName">
                   

                        <div class="price">
                        {if $product.bid}
                            {$LANG.bundledeal}<br />
                            {if $product.displayprice}
                                {$product.displayprice}
                            {/if}
                        {else}
                            {if $product.pricing.hasconfigoptions}
                                {$LANG.startingfrom}
                                <br />
                            {/if}
                           {$product.pricing.minprice.price}
                            <br />
                            {if $product.pricing.minprice.cycle eq "monthly"}
                                {$LANG.orderpaymenttermmonthly}
                            {elseif $product.pricing.minprice.cycle eq "quarterly"}
                                {$LANG.orderpaymenttermquarterly}
                            {elseif $product.pricing.minprice.cycle eq "semiannually"}
                                {$LANG.orderpaymenttermsemiannually}
                            {elseif $product.pricing.minprice.cycle eq "annually"}
                                {$LANG.orderpaymenttermannually}
                            {elseif $product.pricing.minprice.cycle eq "biennially"}
                                {$LANG.orderpaymenttermbiennially}
                            {elseif $product.pricing.minprice.cycle eq "triennially"}
                                {$LANG.orderpaymenttermtriennially}
                            {/if}
                        {/if}
                    </div>

    <h3> {$product.name} </h3>
                        {if $product.qty}
                            <p>
                                ({$product.qty} {$LANG.orderavailable})
                            </p>
                        {/if}
                    </div>

                    {foreach from=$product.features key=feature item=value}
                        <span class="planFeatures">
                            <span class="feature">{$feature}</span>
                            <br />
                            {$value}
                        </span>
                    {/foreach}

                    <div class="clear"></div>

                    <div class="planFeatures">{$product.featuresdesc}</div>

                    <div class="text-right">
                        <a href="cart.php?a=add&{if $product.bid}bid={$product.bid}{else}pid={$product.pid}{/if}" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart"></i> {$LANG.ordernowbutton}</a>
                    </div>

                </div>
            </div>

            {if $num != 0 && ($num % 3) == 0 }
                </div>
                <div class="row">
            {/if}

        {/foreach}

    </div>

    {if !$loggedin && $currencies}
        <div class="currencychooser">
            <div class="btn-group" role="group">
                {foreach from=$currencies item=curr}
                    <a href="cart.php?gid={$gid}&currency={$curr.id}" class="btn btn-default{if $currency.id eq $curr.id} active{/if}">
                        <img src="{$BASE_PATH_IMG}/flags/{if $curr.code eq "AUD"}au{elseif $curr.code eq "CAD"}ca{elseif $curr.code eq "EUR"}eu{elseif $curr.code eq "GBP"}gb{elseif $curr.code eq "INR"}in{elseif $curr.code eq "JPY"}jp{elseif $curr.code eq "USD"}us{elseif $curr.code eq "ZAR"}za{else}na{/if}.png" border="0" alt="" />
                        {$curr.code}
                    </a>
                {/foreach}
            </div>
        </div>
    {/if}

</div>
