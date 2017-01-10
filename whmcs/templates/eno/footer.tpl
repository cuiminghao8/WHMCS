{*
 **********************************************************
 * Responsive (ENO) WHMCS Theme	
 * Copyright © 2015 ThemeMetro.com, All Rights Reserved
 * Developed by: Team Theme Metro
 * Website: http://www.thememetro.com
 * Release: 2.0.11
 **********************************************************
*}

{if $formaction == 'dologin.php' || $filename == 'logout' || $filename == 'pwreset'}
{else}
			<!-- END YOUR CONTENT HERE -->
					</div><!-- /.main-content -->
						{if !$inShoppingCart && $secondarySidebar->hasChildren()}
							<div class="col-md-3 pull-md-left">
								{include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
							</div>
						{/if}
					</div>
					<div class="clearfix"></div>
						
					<!-- BEGIN FOOTER CONTENT -->		
						<div class="footer">
							<div class="footer-inner">
								<!-- basics/footer -->
								<div class="footer-content">
									{$LANG.copyright} &copy; {$date_year} {$companyname}. <span class="hidden-xs">{$LANG.allrightsreserved}.</span>
								</div>
								<!-- /basics/footer -->
							</div>
						</div>
						<button type="button" id="back-to-top" class="btn btn-inverse btn-sm back-to-top">
							<i class="fa fa-angle-double-up icon-only bigger-110"></i>
						</button>
					<!-- END FOOTER CONTENT -->
					
				</div><!-- /#page-wrapper -->	  
			<!-- END MAIN PAGE CONTENT -->
		</div>  
	</div> 
	<!-- basic scripts -->
		<script src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/bootstrap.min.js"></script>
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/pace/pace.min.js"></script>
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/footable/footable.min.js"></script>
		
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/main.js"></script>
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/plugins/footable/footable.init.js"></script>
		
		<script type="text/javascript">
		
		var csrfToken = '{$token}';

		$(function () {
			$('#langScroll, #taskScroll').slimScroll({
				height: '190px',
				disableFadeOut: true,
				touchScrollStep: 50
			});
		});
		
		</script>
		<script src="{$WEB_ROOT}/templates/{$template}/assets/js/whmcs.js"></script>
		
		{$footeroutput}
		
		{/if}


<script type="text/javascript">
    window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},s=d.getElementsByTagName('script')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='//rec.getsmartlook.com/bundle.js';s.parentNode.insertBefore(c,s);
    })(document);
    smartlook('init', 'c1c9a9e02b3f805c5addadb76c8ec49477e8b90b');
</script>



	</body>
</html>
