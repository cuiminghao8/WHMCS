{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>

{if $registrationDisabled}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.registerCreateAccount|cat:' <strong><a href="cart.php" class="alert-link">'|cat:$LANG.registerCreateAccountOrder|cat:'</a></strong>'}
{/if}

{if $errormessage}
    {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage}
{/if}

{if !$registrationDisabled}
<div class="portlet padding-all">
    <form method="post" class="form-horizontal using-password-strength" action="{$smarty.server.PHP_SELF}" role="form">
        <input type="hidden" name="register" value="true"/>

		
		        <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">{$LANG.clientareaemail}</label>
					<div class="col-sm-9">
						<input type="email" name="email" id="email" value="{$clientemail}" class="col-xs-12 col-sm-5" />
					</div>
                </div>

                <div id="newPassword1" class="form-group has-feedback">
                    <label for="inputNewPassword1" class="col-sm-3 control-label">{$LANG.clientareapassword}</label>
					<div class="col-sm-9">
						<input type="password" class="col-xs-12 col-sm-3" id="inputNewPassword1" name="password"/>
						<span class="form-control-feedback glyphicon glyphicon-password"></span>
						{include file="$template/includes/pwstrength.tpl"}
					</div>
                </div>
                <div id="newPassword2" class="form-group has-feedback">
                    <label for="inputNewPassword2" class="col-sm-3 control-label">{$LANG.clientareaconfirmpassword}</label>
					<div class="col-sm-9">
						<input type="password" class="col-xs-12 col-sm-3" id="inputNewPassword2" name="password2"/>
						<span class="form-control-feedback glyphicon glyphicon-password"></span>
						<div id="inputNewPassword2Msg"></div>
					</div>
                </div>
				
				
				<hr class="separator">
				
				
                <div class="form-group">
                    <label for="firstname" class="col-sm-3 control-label">{$LANG.clientareafirstname}</label>
					<div class="col-sm-9">
						<input type="text" name="firstname" id="firstname" value="{$clientfirstname}" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="lastname" class="col-sm-3 control-label">{$LANG.clientarealastname}</label>
					<div class="col-sm-9">
							<input type="text" name="lastname" id="lastname" value="{$clientlastname}" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="companyname" class="col-sm-3 control-label">{$LANG.clientareacompanyname}</label>
					<div class="col-sm-9">
						<input type="text" name="companyname" id="companyname" value="{$clientcompanyname}" class="col-xs-12 col-sm-5" />
					</div>
                </div>


				<hr class="separator">
				

                <div class="form-group">
                    <label for="address1" class="col-sm-3 control-label">{$LANG.clientareaaddress1}</label>
					<div class="col-sm-9">
						<input type="text" name="address1" id="address1" value="{$clientaddress1}" class="col-xs-12 col-sm-5" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="address2" class="col-sm-3 control-label">{$LANG.clientareaaddress2}</label>
					<div class="col-sm-9">
						<input type="text" name="address2" id="address2" value="{$clientaddress2}" class="col-xs-12 col-sm-5" />
					</div>
                </div>

                <div class="form-group">
                    <label for="city" class="col-sm-3 control-label">{$LANG.clientareacity}</label>
					<div class="col-sm-9">
						<input type="text" name="city" id="city" value="{$clientcity}" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="state" class="col-sm-3 control-label">{$LANG.clientareastate}</label>
					<div class="col-sm-3">
						<input type="text" name="state" id="state" value="{$clientstate}" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="postcode" class="col-sm-3 control-label">{$LANG.clientareapostcode}</label>
					<div class="col-sm-9">
						<input type="text" name="postcode" id="postcode" value="{$clientpostcode}" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">{$LANG.clientareacountry}</label>
					<div class="col-sm-9">
						<select id="country" name="country" class="col-xs-12 col-sm-5">
							{foreach $clientcountries as $countryCode => $countryName}
								<option value="{$countryCode}"{if (!$clientcountry && $countryCode eq $defaultCountry) || ($countryCode eq $clientcountry)} selected="selected"{/if}>
									{$countryName}
								</option>
							{/foreach}
						</select>
					</div>
                </div>

                <div class="form-group">
                    <label for="phonenumber" class="col-sm-3 control-label">{$LANG.clientareaphonenumber}</label>
					<div class="col-sm-9">
						<input type="tel" name="phonenumber" id="phonenumber" value="{$clientphonenumber}" class="col-xs-12 col-sm-3" required />
					</div>
                </div>

                {if $customfields}
                    {foreach from=$customfields key=num item=customfield}
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="customfield{$customfield.id}">{$customfield.name}</label>
							<div class="col-sm-9">
								<div class="control">
									{$customfield.input} {$customfield.description}
								</div>
							</div>
                        </div>
                    {/foreach}
                {/if}

                {if $currencies}
                    <div class="form-group">
                        <label for="currency" class="col-sm-3 control-label">{$LANG.choosecurrency}</label>
						<div class="col-sm-9">
							<select id="currency" name="currency" class="col-xs-12 col-sm-3">
								{foreach from=$currencies item=curr}
								<option value="{$curr.id}"{if !$smarty.post.currency && $curr.default || $smarty.post.currency eq $curr.id } selected{/if}>{$curr.code}</option>
								{/foreach}
							</select>
						</div>
                    </div>
                {/if}


		
		{if $securityquestions}
		<div class="form-group">
			<label class="col-sm-3 control-label" for="securityqans">{$LANG.clientareasecurityquestion}</label>
			<div class="col-sm-9">
				<select class="col-xs-12 col-sm-5" name="securityqid" id="securityqid">
					{foreach key=num item=question from=$securityquestions}
						<option value={$question.id}>{$question.question}</option>
					{/foreach}
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label" for="securityqans">{$LANG.clientareasecurityanswer}</label>
			<div class="col-sm-9">
				<input class="col-xs-12 col-sm-5" type="password" name="securityqans" id="securityqans" />
			</div>
		</div>
		{/if}

		
		<hr class="separator">
		
        {include file="$template/includes/captcha.tpl"}


		
		{if $accepttos}
		<div class="form-group">
			<label id="tosagree"></label>
			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
				<div class="tcb">
					<label>
						<input type="checkbox" class="tc" name="accepttos" class="accepttos">
						<span class="labels text-danger"> {$LANG.ordertosagreement} <a href="{$tosurl}" target="_blank">{$LANG.ordertos}</a></span>
					</label>
				</div>
			</div>
		</div>
		{/if}

		
		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<input class="btn btn-success btn-lg" type="submit" value="{$LANG.clientregistertitle}" />
			</div>
		</div>

    </form>
</div>
{/if}
