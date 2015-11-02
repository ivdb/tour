<?php /* Smarty version Smarty-3.1.18, created on 2015-11-02 09:48:25
         compiled from "views\bn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13635541d7a9d4d77b3-66290873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9f2eae3810b1072cbb04326dff5bd3e3487d51' => 
    array (
      0 => 'views\\bn.tpl',
      1 => 1411218780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13635541d7a9d4d77b3-66290873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541d7a9d5f0c00_31096740',
  'variables' => 
  array (
    'bn_list' => 0,
    'bn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541d7a9d5f0c00_31096740')) {function content_541d7a9d5f0c00_31096740($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>

<?php  $_smarty_tpl->tpl_vars['bn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['bn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bn_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['bn']->key => $_smarty_tpl->tpl_vars['bn']->value) {
$_smarty_tpl->tpl_vars['bn']->_loop = true;
?>

	<article>
	
	
	<a href=""><img class="bn" src="images/joling.jpg"></a>
		<h2><?php echo $_smarty_tpl->tpl_vars['bn']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['bn']->value['surname'];?>
</h2>
	
		<h6><?php echo $_smarty_tpl->tpl_vars['bn']->value['description'];?>
</h6>
		
	
	</article>
	
<?php } ?>
</section>	

<?php }} ?>
