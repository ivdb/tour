<?php /* Smarty version Smarty-3.1.18, created on 2015-11-02 09:48:18
         compiled from "views\top100.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5159541d5b944ed407-75694718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26651dcae4281aa0830e5f50725629adde9869d9' => 
    array (
      0 => 'views\\top100.tpl',
      1 => 1412238150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5159541d5b944ed407-75694718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541d5b94956384_60554287',
  'variables' => 
  array (
    'song_list' => 0,
    'song' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541d5b94956384_60554287')) {function content_541d5b94956384_60554287($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>

<?php  $_smarty_tpl->tpl_vars['song'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['song']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['song_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['song']->key => $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->_loop = true;
?>

	<article>
		<p><?php echo $_smarty_tpl->tpl_vars['song']->value['order_nr'];?>
  -  <?php echo $_smarty_tpl->tpl_vars['song']->value['artistname'];?>
 - <?php echo $_smarty_tpl->tpl_vars['song']->value['title'];?>
</p>
	
	</article>
	
<?php } ?>
</section>	

<?php }} ?>
