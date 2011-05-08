<?php /* Smarty version 2.6.26, created on 2011-05-04 04:59:56
         compiled from rss.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id="content">
			<h3 class="page-heading"><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
" title="<?php echo $this->_tpl_vars['translations']['header']['title']; ?>
">&laquo; <?php echo $this->_tpl_vars['translations']['header']['home']; ?>
</a> / <?php echo $this->_tpl_vars['translations']['rss']['title']; ?>
</h3>
			<p>
				<?php echo $this->_tpl_vars['translations']['rss']['intro']; ?>

			</p>
			<ul>
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/all/"><?php echo $this->_tpl_vars['translations']['rss']['all_categories']; ?>
</a></li>
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
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
/"><?php echo $this->_tpl_vars['translations']['rss']['for']; ?>
 <?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
				<?php endfor; endif; ?>
			</ul>
		</div><!-- /content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>