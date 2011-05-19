{include file="header.tpl"}
		
		<div id="content">
			<h3 class="page-heading"><a href="{$BASE_URL}" title="{$translations.header.title}">&laquo; {$translations.header.home}</a> / {$translations.rss.title}</h3>
			<p>
				{$translations.rss.intro}
			</p>
			<h3>Feeds For Categories:</h3>
			<ul>
				<li><a href="{$BASE_URL}rss/all/">{$translations.rss.all_categories}</a></li>
				{section name=tmp loop=$categories}
				<li><a href="{$BASE_URL}rss/{$categories[tmp].var_name}/">{$translations.rss.for} {$categories[tmp].name}</a></li>
				{/section}
			</ul>
			
			<h3>Feeds For Types:</h3>
			<ul>
				<li><a href="{$BASE_URL}rsstype/all/">{$translations.rss.all_types}</a></li>
				{section name=tmp loop=$types}
				<li><a href="{$BASE_URL}rsstype/{$types[tmp].var_name}/">{$translations.rss.for} {$types[tmp].name}</a></li>
				{/section}
			</ul>
		</div><!-- /content -->

{include file="footer.tpl"}