<?php /* Smarty version Smarty-3.1.18, created on 2014-09-20 14:04:34
         compiled from "views\prijsvraag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30585541d6187543a00-44137240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c558dd7927c22e29602e3d0a0ee35f71d76d4f0c' => 
    array (
      0 => 'views\\prijsvraag.tpl',
      1 => 1411214672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30585541d6187543a00-44137240',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541d6187658fc9_22817938',
  'variables' => 
  array (
    'quiz_song' => 0,
    'quiz' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541d6187658fc9_22817938')) {function content_541d6187658fc9_22817938($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<section> 	


	<article>
		<h1><?php echo $_smarty_tpl->tpl_vars['quiz_song']->value['artistname'];?>
 - <?php echo $_smarty_tpl->tpl_vars['quiz_song']->value['title'];?>
</h1>

	
		<p><?php echo $_smarty_tpl->tpl_vars['quiz_song']->value['long_description'];?>
</p>	
	</article>

</section>	

<section> 	


	<article>
		<h2><?php echo $_smarty_tpl->tpl_vars['quiz']->value['question'];?>
 </h2>

	
	
	</article>

</section>	

<section>


</section><?php }} ?>
