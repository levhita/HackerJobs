<?php /* Smarty version 2.6.26, created on 2011-05-05 22:41:32
         compiled from cities.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="content">
			<!-- #job-listings -->
			<h3 class="page-heading"><?php echo $this->_tpl_vars['translations']['jobscity']['title']; ?>
</h3>
			<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['cities_overview']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<span class="company-tag-<?php echo $this->_tpl_vars['cities_overview'][$this->_sections['tmp']['index']]['tag_height']; ?>
">
				<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS_IN_CITY']; ?>
/<?php echo $this->_tpl_vars['cities_overview'][$this->_sections['tmp']['index']]['varname']; ?>
"><?php echo $this->_tpl_vars['cities_overview'][$this->_sections['tmp']['index']]['name']; ?>
 (<?php echo $this->_tpl_vars['cities_overview'][$this->_sections['tmp']['index']]['count']; ?>
)</a>
			</span>
			<?php endfor; endif; ?>
			<?php if ($this->_tpl_vars['jobs_count_in_other_cities'] > 0): ?>
				<span class="company-tag-<?php echo $this->_tpl_vars['jobs_count_in_other_cities_tag_height']; ?>
">
				<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
jobs-in-other-cities/"><?php echo $this->_tpl_vars['translations']['jobscity']['other_cities']; ?>
 (<?php echo $this->_tpl_vars['jobs_count_in_other_cities']; ?>
)</a>
			</span>
			<?php endif; ?>
			<br /><br />
			<p>
			<?php echo $this->_tpl_vars['translations']['jobscity']['total']; ?>
: <strong><?php echo $this->_tpl_vars['total_number_of_jobs']; ?>
</strong> <?php echo $this->_tpl_vars['translations']['jobscity']['jobs']; ?>

			</p>
		</div>
		<!-- /content -->
 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>