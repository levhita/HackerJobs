{include file="header.tpl"}
		
		<div id="content">
			<h3 class="page-heading"><a href="{$BASE_URL}" title="{$translations.header.title}">&laquo; {$translations.header.home}</a> / {$translations.rss.title}</h3>
			<p>
				{$translations.rss.intro}
			</p>
			
			<ul>
				<li>
					<a href="{$BASE_URL}rss/all/all/">{$translations.rss.all}</a>
					{section name=type loop=$types}
						<a class="type-button" href="{$BASE_URL}rss/all/{$types[type].var_name}/" title="Latest {$types[type].name} Jobs"><img src="{$BASE_URL}_templates/{$THEME}/img/icon-{$types[type].var_name}.png" alt="{$types[type].name}" /></a>
					{/section}
				</li>
				{section name=catego loop=$categories}
				<li>
				<a href="{$BASE_URL}rss/{$categories[catego].var_name}/all/">{$translations.rss.for} {$categories[catego].name} {$translations.rss.jobs}</a>
					{section name=type loop=$types}
						<a class="type-button" href="{$BASE_URL}rss/{$categories[catego].var_name}/{$types[type].var_name}/" title="Latest {$types[type].name} Jobs for {$categories[catego].name}"><img src="{$BASE_URL}_templates/{$THEME}/img/icon-{$types[type].var_name}.png" alt="{$types[type].name}" /></a>
					{/section}
				</li>
				{/section}
			</ul>
		</div><!-- /content -->

{include file="footer.tpl"}