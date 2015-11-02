<?php /* Smarty version Smarty-3.1.18, created on 2014-09-20 14:08:44
         compiled from "views\searchresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21714541d6e2a0520d2-22926985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464581a0b97064700ce76ada77efdc014a3ca149' => 
    array (
      0 => 'views\\searchresult.tpl',
      1 => 1411214923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21714541d6e2a0520d2-22926985',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541d6e2a144403_03722890',
  'variables' => 
  array (
    'search' => 0,
    'searchList' => 0,
    'searchItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541d6e2a144403_03722890')) {function content_541d6e2a144403_03722890($_smarty_tpl) {?>
<h3>Zoekresultaat voor <em><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</em>:</h3>

<?php  $_smarty_tpl->tpl_vars['searchItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['searchItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['searchItem']->key => $_smarty_tpl->tpl_vars['searchItem']->value) {
$_smarty_tpl->tpl_vars['searchItem']->_loop = true;
?>

	<h5><?php echo $_smarty_tpl->tpl_vars['searchItem']->value['title'];?>
</h5>
	
<?php } ?>	
	
<?php }} ?>
