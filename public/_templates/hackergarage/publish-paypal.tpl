{include file="header.tpl"}
 
<div id="content">
	<div id="job-listings"></div><!-- #job-listings -->
	<div class="steps">
		<div id="step-1">
			{$translations.publish.step1}
		</div>
		<div id="step-2">
			{$translations.publish.step2}
		</div>
		<div id="step-3" class="step-active">
			{$translations.publish.step3}
		</div>
		<div class="clear"></div>
	</div>
	<br />
 
	{if $first_time_post == 1 && $smarty.const.PAYPAL_FIRST_POST_ONLY == 1}
		<div class="posted-ok">
			<strong>{$translations.publish.congratulations}</strong><br /><a href="{$job_url}">{$translations.publish.view}</a>.

			<h4>{$translations.publish.options_title}</h4>
			<p>
				{$translations.publish.options_info}:
			</p>
			<ul>	
				<li><a href="{$BASE_URL}post/{$CURRENT_ID}/{$auth}/" title="{$translations.publish.edit}">&raquo; {$translations.publish.edit}</a></li>
				<li><a href="{$BASE_URL}deactivate/{$CURRENT_ID}/{$auth}/" title="{$translations.publish.deactivate}">&raquo; {$translations.publish.deactivate}</a></li>
			</ul>
		</div>
	{else}
		<div class="posted-pending">
			<p>{$translations.paypal.payment_needed}</p>

			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="{$smarty.const.PAYPAL_BUTTON_TYPE}">
			<input type="hidden" name="currency_code" value="{$smarty.const.PAYPAL_CURRENCY_CODE}">
			<input type="hidden" name="item_number" value="{$paypal_item_number}">
			<input type="hidden" name="item_name" value="#{$paypal_item_number} - ({$paypal_job_type}) {$paypal_item_name}">
			<input type="hidden" name="hosted_button_id" value="{$paypal_button_id}">
			<input type="hidden" name="notify_url" value="{$smarty.const.PAYPAL_RETURN_URL}">
			<input type="hidden" name="return" value="{$BASE_URL}paypal/{$CURRENT_ID}/{$auth}/">
			<div class="suggestion">
				<input type="image" src="{$smarty.const.PAYPAL_BUTTON_IMAGE}" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<strong>{$translations.paypal.amount}: {$smarty.const.PAYPAL_CURRENCY_CODE} {$paypal_amount}</strong> | {$translations.paypal.info}
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</div>
			</form>
		</div>
	{/if}
 
	<p>
			<a href="{$BASE_URL}">&laquo; {$translations.notfound.back}</a>
		</p>
</div><!-- /content -->
 
{include file="footer.tpl"}