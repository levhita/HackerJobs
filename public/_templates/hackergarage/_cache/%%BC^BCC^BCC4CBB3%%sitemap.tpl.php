<?php /* Smarty version 2.6.26, created on 2011-05-04 05:02:01
         compiled from sitemap.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<h3 class="page-heading"><?php echo $this->_tpl_vars['translations']['sitemap']['title']; ?>
</h3>
			<h4><?php echo $this->_tpl_vars['translations']['sitemap']['jobs']; ?>
:</h4>
			<ul>
				<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
        		<li id="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
"><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
/" title="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
"><?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
			<h4><?php echo $this->_tpl_vars['translations']['sitemap']['use']; ?>
:</h4>
			<ul>
				<?php if (@ENABLE_NEW_JOBS): ?>
					<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/" title="<?php echo $this->_tpl_vars['translations']['footer']['new_job_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['new_job']; ?>
</a></li>
				<?php endif; ?>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
widgets/" title="<?php echo $this->_tpl_vars['translations']['footer']['widgets_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['widgets']; ?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/" title="<?php echo $this->_tpl_vars['translations']['footer']['title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['rss']; ?>
</a></li>
			</ul>
			<h4><?php echo $this->_tpl_vars['translations']['sitemap']['more']; ?>
:</h4>
			<ul>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_COMPANIES']; ?>
/" title="<?php echo $this->_tpl_vars['translations']['footer']['companies_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['companies']; ?>
</a></li>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_CITIES']; ?>
/" title="<?php echo $this->_tpl_vars['translations']['footer']['cities_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['cities']; ?>
</a></li>
				<?php $_from = $this->_tpl_vars['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['article']['url']; ?>
/" title="<?php echo $this->_tpl_vars['article']['page_title']; ?>
"><?php echo $this->_tpl_vars['article']['title']; ?>
</a></li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div><!-- /content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>