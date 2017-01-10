{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<div class="space-14"></div>

<div class="mass-head hero-1 inverse">
    <div>
		<div class="hero-inner text-center">
			{if $registerdomainenabled || $transferdomainenabled}
			<h1>{$LANG.domaintitle}</h1>
			<p>{$LANG.homebegin}</p>
			
			
			<!--Domain Box For Tablet and Desktop-->
			<div class="hidden-xs">
				<form action="domainchecker.php" method="post">
					<div class="input-group">
						<div class="input-group-btn">
							<input type="text" name="domain" placeholder="{$LANG.findyourdomain}" value="{$domain}" id="inputDomain" class="domains-input" maxlength="65">
							{if $registerdomainenabled}<button type="submit" id="btnCheckAvailability" class="btn btn-inverse domain-btn-2" onclick="$('#modalpleasewait').modal();">{$LANG.search}</button>{/if}
							{if $transferdomainenabled}<input type="submit" name="transfer"  class="btn btn-warning domain-btn-1" value="{$LANG.orderdomaintransfer}" />{/if}
						</div>
					</div>
					{include file="$template/includes/captcha.tpl"}
				</form>
			</div>
			<!--End Domain Box For Tablet and Desktop-->
					
			<!--Domain Box for Mobile-->
			<div class="visible-xs padding-all">
				<form action="domainchecker.php" method="post">
					<div class="input-group">
						<input type="text" name="domain" placeholder="{$LANG.findyourdomain}" value="{$domain}" id="inputDomain" class="domains-input form-control input-lg"  maxlength="65">
						<span class="input-group-btn btn-group-lg">
							<button type="submit" id="btnCheckAvailability" class="btn btn-inverse" onclick="$('#modalpleasewait').modal();">
								<i class="fa fa-search icon-only"></i>
							</button>
						</span>
					</div>

					<div class="smaller-50">{include file="$template/includes/captcha.tpl"}</div>
				</form>
			</div>
			<!--End Domain Box for Mobile-->
			
			{else}
			
			<h2>{$LANG.doToday}</h2>
			
			{/if}
		</div>
    </div>
</div>



    <div class="home-shortcuts">

            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        {$LANG.howcanwehelp}
                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        {if $registerdomainenabled || $transferdomainenabled}
                            <li>
                                <a id="btnBuyADomain" href="domainchecker.php">
                                    <i class="fa fa-globe"></i>
                                    <p>
                                        {$LANG.buyadomain} <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        {/if}
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    {$LANG.orderhosting} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    {$LANG.makepayment} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    {$LANG.getsupport} <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
	

<div class="space-16"></div>

	



<div class="row">	
	<div class="col-sm-12">		
		{if $twitterusername}
		<h5 class="heading bold text-uppercase"><i class="fa fa-twitter"></i> {$LANG.twitterlatesttweets}</h5>
		<div class="portlet padding-all">
			<div id="twitterFeedOutput">
				<img src="{$BASE_PATH_IMG}/loading.gif" /></p>
			</div>
			<script type="text/javascript" src="templates/{$template}/assets/js/twitter.js"></script>
		</div>
		
		{elseif $announcements}	
		<h4 class=" bold text-uppercase"><i class="fa fa-bullhorn"></i> {$LANG.news}</h4>
			{foreach $announcements as $announcement}
				{if $announcement@index < 2}
					<div class="portlet padding-all no-padding-top">

						<h3>
							<a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}">{$announcement.title}</a>
						</h3>
						<p><i class="fa fa-calendar text-success"></i> &nbsp;{$announcement.rawDate|date_format:"M jS"}</p>
        
						<p>
							{if $announcement.text|strip_tags|strlen < 350}
								{$announcement.text}
							{else}
								{$announcement.summary}
								<a href="{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" class="btn btn-xs btn-warning">{$LANG.readmore} &raquo;</a>
							{/if}
						</p>
						<div class="hr hr-6 dotted hr-double"></div>
						

						{if $announcementsFbRecommend}
							<script>
								(function(d, s, id) {
									var js, fjs = d.getElementsByTagName(s)[0];
									if (d.getElementById(id)) {
										return;
									}
									js = d.createElement(s); js.id = id;
									js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
									fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
							</script>
							<div class="fb-like hidden-sm hidden-xs" data-layout="standard" data-href="{$systemurl}{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
							<div class="fb-like hidden-lg hidden-md" data-layout="button_count" data-href="{$systemurl}{if $seofriendlyurls}{$WEB_ROOT}/announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}" data-send="true" data-width="450" data-show-faces="true" data-action="recommend"></div>
						{/if}
					</div>
				{/if}
			{/foreach}
		{/if}	
	</div>
</div>


{include file="$template/includes/modal-alert.tpl"}