<?php /* Smarty version Smarty-3.1.18, created on 2015-11-02 09:44:42
         compiled from "views\songs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12144541c3624740250-66008438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3505fb767d64dc5507b5efc4083cf85592df4b43' => 
    array (
      0 => 'views\\songs.tpl',
      1 => 1415625638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12144541c3624740250-66008438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541c362489bd28_59484291',
  'variables' => 
  array (
    'song_list' => 0,
    'song' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c362489bd28_59484291')) {function content_541c362489bd28_59484291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section>

<?php  $_smarty_tpl->tpl_vars['song'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['song']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['song_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['song']->key => $_smarty_tpl->tpl_vars['song']->value) {
$_smarty_tpl->tpl_vars['song']->_loop = true;
?>

	<article>

		<h1><?php echo $_smarty_tpl->tpl_vars['song']->value['order_nr'];?>
 <?php echo $_smarty_tpl->tpl_vars['song']->value['artistname'];?>
 - <?php echo $_smarty_tpl->tpl_vars['song']->value['title'];?>
</h1>
		
	
		<p><?php echo $_smarty_tpl->tpl_vars['song']->value['long_description'];?>
</p>
		<a href="index.php?action=view_song&song_id=<?php echo $_smarty_tpl->tpl_vars['song']->value['id'];?>
">...</a>
	</article>
	
<?php } ?>
</section>	

<?php }} ?>
