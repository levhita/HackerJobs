{include file="header.tpl"}
<div id="content">
<h3 class="page-heading">{$translations.paypal.settings}</h3>
<form id="publish_form" name="settings" action="{$smarty.server.REQUEST_URI}" method="post">
<fieldset>
<table cellspacing="2" cellpadding="2" border="0">
{if $success}
<tr>
	<td colspan="2">
		<img src="{$BASE_URL_ADMIN}img/icon_accept.gif" alt="" /> {$success}
	</td>
</tr>
{elseif $error}
<tr>
	<td colspan="2">
		<img src="{$BASE_URL_ADMIN}img/exclamation.png" alt="" /> {$error}
	</td>
</tr>
{/if}
{if $success == ''}
<tr>
	<td>{$translations.paypal.button_type}:</td>
	<td><input type="text" name="button_type" size="20" maxlength="100" value="{if $paypal.button_type != ''}{$paypal.button_type}{else}{$smarty.const.PAYPAL_BUTTON_TYPE}{/if}"/></td>
</tr>
<tr>
	<td>{$translations.paypal.button_image }:</td>
	<td><input type="text" name="button_image" size="60" maxlength="255" value="{if $paypal.button_image != ''}{$paypal.button_image}{else}{$smarty.const.PAYPAL_BUTTON_IMAGE}{/if}"/></td>
</tr>
<tr>
	<td>{$translations.paypal.currency_code}:</td>
	<td><input type="text" name="currency_code" size="20" maxlength="3" value="{if $paypal.currency_code != ''}{$paypal.currency_code}{else}{$smarty.const.PAYPAL_CURRENCY_CODE}{/if}"/></td>
</tr>
<tr>
	<td>{$translations.paypal.return_url}:</td>
	<td><input type="text" name="return_url" size="60" maxlength="255" value="{if $paypal.return_url != ''}{$paypal.return_url}{else}{$smarty.const.PAYPAL_RETURN_URL}{/if}"/></td>
</tr>
<tr>
	<td>{$translations.paypal.is_active}:</td>
	<td>
	<select name="is_active">
		<option value="1"{if $smarty.const.PAYPAL_IS_ACTIVE == 1} selected="selected"{/if}>Yes</option>
		<option value="0"{if $smarty.const.PAYPAL_IS_ACTIVE == 0} selected="selected"{/if}>No</option>
	</select>
	<span class="suggestion">Specify if PayPal is active (Yes) or not (No)</span>
	</td>
</tr>
<tr>
	<td colspan="2">Option below applies only if PayPal is set to Active.</td>
	<td>
</tr>
<tr>
	<td>{$translations.paypal.first_post_only}:</td>
	<td>
	<select name="first_post_only">
		<option value="1"{if $smarty.const.PAYPAL_FIRST_POST_ONLY == 1} selected="selected"{/if}>Yes</option>
		<option value="0"{if $smarty.const.PAYPAL_FIRST_POST_ONLY == 0} selected="selected"{/if}>No</option>
	</select>
	<span class="suggestion">Specify if PayPal is active on first post only (Yes) or required whenever posting a job (No)</span>
	</td>
</tr>
<tr>
	<td colspan="2">
		<input type="hidden" name="update_what" value="settings">
		<input type="submit" name="submit" id="submit" value="{$translations.paypal.update}" />
	</td>
</tr>
{/if}
</table>
</fieldset>
</form>
 
<h2>PayPal Setting for Job Types</h2>
{if $type_success}
<p><img src="{$BASE_URL_ADMIN}img/icon_accept.gif" alt="" /> {$type_success}</p>
{/if}
<form id="publish_form" name="types" action="{$smarty.server.REQUEST_URI}" method="post">
<table id="job-posts" class="job-posts" cellspacing="0">
<tr class="alt">
	<td>ID</td>
	<td>Type Name</td>
	<td>Amount</td>
	<td>PayPal ID</td>					
</tr>
{foreach from=$types item=types}
<tr>
	<td class="center">{$types.id}</td>
	<td>{$types.name}</td>
	<td class="center"><input type="text" name="amount[{$types.id}]" value="{$types.amount}" /></td>
	<td class="center"><input type="text" name="paypal_button_id[{$types.id}]" value="{$types.paypal_button_id}" /></td>
</tr>
{/foreach}
</table>
<input type="hidden" name="update_what" value="types">
<input type="submit" name="submit" id="submit" value="{$translations.paypal.update_types}" />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div><!-- #job-details -->