{if $captcha}
    {if $filename == 'domainchecker' || $filename == 'index'}
        <div class="row">
            {if $captcha == "recaptcha"}
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <div id="google-recaptcha-domainchecker-1" class="g-recaptcha center-block" data-sitekey="{$reCaptchaPublicKey}"></div>
            {else}
                <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
                    <div id="default-captcha-domainchecker" class="text-center">
                        <p>{lang key="captchaverify"}</p>

                        <div class="col-xs-6 captchaimage">
                            <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                        </div>

                        <div class="col-xs-6">
                            <input id="inputCaptcha" type="text" name="code" maxlength="5" />
                        </div>
                    </div>
                </div>
            {/if}
        </div>
    {else}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{lang key="captchatitle"}</h3>
            </div>
            <div class="panel-body">
                <p>{lang key="captchaverify"}</p>
                {if $captcha eq "recaptcha"}
                    {$recaptchahtml}
                {else}
                    <div class="text-center">
                        <div class="col-md-5 col-sm-5 col-xs-5 captchaimage">
                            <img src="includes/verifyimage.php" align="middle" />
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-5">
                            <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control" />
                        </div>
                    </div>
                {/if}
            </div>
        </div>
    {/if}
{/if}
