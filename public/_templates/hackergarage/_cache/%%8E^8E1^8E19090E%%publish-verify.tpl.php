<?php /* Smarty version 2.6.26, created on 2011-05-04 23:18:42
         compiled from publish-verify.tpl */ ?>
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
				<div id="step-2" class="step-active">
					<?php echo $this->_tpl_vars['translations']['publish']['step2']; ?>

				</div>
				<div id="step-3">
					<?php echo $this->_tpl_vars['translations']['publish']['step3']; ?>

				</div>
				<div class="clear"></div>
			</div>
			
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "job-details.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			
			<form name="publish_form" id="publish_form" method="post" action="<?php echo $this->_tpl_vars['BASE_URL']; ?>
publish/<?php echo $this->_tpl_vars['job']['id']; ?>
/">
				<fieldset>
					<div class="right">
						<div class="suggestion"><?php echo $this->_tpl_vars['translations']['publish']['step2_info']; ?>

						<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
deactivate/<?php echo $this->_tpl_vars['job']['id']; ?>
/" title="<?php echo $this->_tpl_vars['translations']['publish']['step2_cancel']; ?>
"><?php echo $this->_tpl_vars['translations']['publish']['step2_cancel']; ?>
</a></div>
					</div>
					<?php if ($_SESSION['later_edit']): ?>
					<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['translations']['publish']['save']; ?>
" />
					<?php else: ?>
					<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['translations']['publish']['publish']; ?>
" />
					<?php endif; ?>
					&nbsp;or&nbsp;
					<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/<?php echo $this->_tpl_vars['job']['id']; ?>
/" title="<?php echo $this->_tpl_vars['translations']['publish']['edit']; ?>
"><?php echo $this->_tpl_vars['translations']['publish']['edit']; ?>
</a>
				</fieldset>
			</form>
		</div><!-- /content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>