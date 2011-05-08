<?php /* Smarty version 2.6.26, created on 2011-05-04 05:11:47
         compiled from publish-confirmation.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id="content">
			<div id="job-listings"></div><!-- #job-listings -->
			<div class="steps">
				<div id="step-1">
					<?php echo $this->_tpl_vars['translations']['publish']['step1']; ?>

				</div>
				<div id="step-2">
					<?php echo $this->_tpl_vars['translations']['publish']['step2']; ?>

				</div>
				<div id="step-3" class="step-active">
					<?php echo $this->_tpl_vars['translations']['publish']['step3']; ?>

				</div>
				<div class="clear"></div>
			</div>
			<br />
			<?php if ($_SESSION['later_edit']): ?>
				<div class="posted-ok">
					<?php echo $this->_tpl_vars['translations']['publish']['edit_success']; ?>
: <a href="<?php echo $this->_tpl_vars['job_url']; ?>
"><?php echo $this->_tpl_vars['job_url']; ?>
</a>
					<?php 
						unset($_SESSION['later_edit']);
						unset($_SESSION['referer']);
					 ?>
				</div>
				<br />
				<p>
					<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">&laquo; <?php echo $this->_tpl_vars['translations']['notfound']['back']; ?>
</a>
				</p>
			<?php else: ?>
				<?php if ($this->_tpl_vars['postRequiresModeration']): ?>
					<div class="posted-pending">
						<?php echo $this->_tpl_vars['translations']['publish']['success_message']; ?>

					</div>
					<br />
					<p>
						<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">&laquo; <?php echo $this->_tpl_vars['translations']['notfound']['back']; ?>
</a>
					</p>
				<?php else: ?>
					<div class="posted-ok">
						<strong><?php echo $this->_tpl_vars['translations']['publish']['congratulations']; ?>
</strong><br /><a href="<?php echo $this->_tpl_vars['job_url']; ?>
"><?php echo $this->_tpl_vars['translations']['publish']['view']; ?>
</a>.
					</div>
					<h4><?php echo $this->_tpl_vars['translations']['publish']['options_title']; ?>
</h4>
					<p>
						<?php echo $this->_tpl_vars['translations']['publish']['options_info']; ?>
:
					</p>
					<ul>	
						<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/<?php echo $this->_tpl_vars['CURRENT_ID']; ?>
/<?php echo $this->_tpl_vars['auth']; ?>
/" title="<?php echo $this->_tpl_vars['translations']['publish']['edit']; ?>
">&raquo; <?php echo $this->_tpl_vars['translations']['publish']['edit']; ?>
</a></li>
						<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
deactivate/<?php echo $this->_tpl_vars['CURRENT_ID']; ?>
/<?php echo $this->_tpl_vars['auth']; ?>
/" title="<?php echo $this->_tpl_vars['translations']['publish']['deactivate']; ?>
">&raquo; <?php echo $this->_tpl_vars['translations']['publish']['deactivate']; ?>
</a></li>
					</ul>
				<?php endif; ?>
			<?php endif; ?>
		</div><!-- /content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>