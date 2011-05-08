<?php /* Smarty version 2.6.26, created on 2011-05-04 05:13:02
         compiled from all-jobs-header.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id="content">
			<div id="job-listings">
				<?php if ($this->_tpl_vars['jobs']): ?>
				<div id="sort-by-type">
				<?php echo $this->_tpl_vars['translations']['category']['display_only']; ?>
&nbsp; 
					<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['types']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]['var_name']; ?>
/" title="<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]['name']; ?>
"><img src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/img/icon-<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]['var_name']; ?>
.png" alt="<?php echo $this->_tpl_vars['types'][$this->_sections['tmp']['index']]['name']; ?>
" /></a>
					<?php endfor; endif; ?>
				</div><!-- #sort-by-type -->
				<?php endif; ?>
				<h2>
					<?php echo $this->_tpl_vars['translations']['alljobs']['all_jobs']; ?>

				</h2>
				<?php if ($this->_tpl_vars['jobs']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "jobs-list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?>
					<div id="no-ads">
						<?php echo $this->_tpl_vars['translations']['alljobs']['no_jobs']; ?>

						<?php if (@ENABLE_NEW_JOBS): ?>
							<br /><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/" title="<?php echo $this->_tpl_vars['translations']['footer']['new_job_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['new_job']; ?>
</a>
						<?php endif; ?>
					</div><!-- #no-ads -->
				<?php endif; ?>
			</div><!-- #job-listings -->
		</div><!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>