<?php /* Smarty version 2.6.26, created on 2011-05-04 23:25:12
         compiled from no-job.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<div id="no-ads">
				<p><?php echo $this->_tpl_vars['translations']['jobs']['no_job']; ?>
</p>
				<p>
					<?php if (@ENABLE_NEW_JOBS): ?>
					<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/" title="<?php echo $this->_tpl_vars['translations']['footer']['new_job_title']; ?>
"><?php echo $this->_tpl_vars['translations']['footer']['new_job']; ?>
</a> &middot;
					<?php endif; ?> 
					<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
"><?php echo $this->_tpl_vars['translations']['notfound']['back']; ?>
</a>
				</p>
			</div>
		</div><!-- /content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>