<?php /* Smarty version Smarty-3.1.18, created on 2015-11-02 09:44:42
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2993541c35cf7f84a9-72153325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1411224856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2993541c35cf7f84a9-72153325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541c35cf8f24e1_70788487',
  'variables' => 
  array (
    'day_list_available' => 0,
    'day' => 0,
    'day_list_greyedout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c35cf8f24e1_70788487')) {function content_541c35cf8f24e1_70788487($_smarty_tpl) {?><div id='wrapper'>

<header>
	<hr>
	<nav>
		<ul>
			<li><a href="?action=getsongs">Home</a></li>

		</ul>
		<form method="post" action="?action=search">

			
			
			<input type="search" name="searchstring">
			
			<input type="submit" name="dosearch">
	
		</form>
	</nav>

	<hr>
	<nav>
	<ul>
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['day_list_available']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
	<li><a href ="index.php?action=getsongs&day=<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</a></li>
	<?php } ?>
	<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['day_list_greyedout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</li>
	<?php } ?>
	</ul>
	</nav>
	</hr>
	
</header><?php }} ?>
