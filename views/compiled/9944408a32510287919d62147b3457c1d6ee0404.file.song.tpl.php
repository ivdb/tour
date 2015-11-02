<?php /* Smarty version Smarty-3.1.18, created on 2015-11-02 08:47:54
         compiled from "views\song.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6294541c35cf925178-99235924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9944408a32510287919d62147b3457c1d6ee0404' => 
    array (
      0 => 'views\\song.tpl',
      1 => 1411223962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6294541c35cf925178-99235924',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_541c35cf9b5a15_18036097',
  'variables' => 
  array (
    'song3_list' => 0,
    'song' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541c35cf9b5a15_18036097')) {function content_541c35cf9b5a15_18036097($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="songnav">
	<ul class="songlist">
	<li><a href="index.php?action=view_song&song_id=<?php echo $_smarty_tpl->tpl_vars['song3_list']->value[0]['id'];?>
"><p class="order_nr"><?php echo ($_smarty_tpl->tpl_vars['song3_list']->value[0]['order_nr'])>0 ? ($_smarty_tpl->tpl_vars['song3_list']->value[0]['order_nr']) : ".";?>
</p> <p><?php echo $_smarty_tpl->tpl_vars['song3_list']->value[0]['title'];?>
</p></a></li>
  	<li class="middle"><p class="order_nr"><?php echo $_smarty_tpl->tpl_vars['song']->value['order_nr'];?>
</p> <div class=clear></div>
	<p><?php echo $_smarty_tpl->tpl_vars['song']->value['artistname'];?>
 - <?php echo $_smarty_tpl->tpl_vars['song']->value['title'];?>
</p> </li>
	<li><a href="index.php?action=view_song&song_id=<?php echo $_smarty_tpl->tpl_vars['song3_list']->value[2]['id'];?>
"><p class="order_nr"><?php echo ($_smarty_tpl->tpl_vars['song3_list']->value[2]['order_nr'])>0 ? ($_smarty_tpl->tpl_vars['song3_list']->value[2]['order_nr']) : ".";?>
</p> <p><?php echo $_smarty_tpl->tpl_vars['song3_list']->value[2]['title'];?>
</p></a></li>
	</ul> 

</div>

<div>

	</div>	
	<div id="video-container"> 
	<iframe src="//www.youtube.com/embed/7pKrVB5f2W0" frameborder="0" allowfullscreen>
	</iframe>
</div>


<section> 	


	<article>

		<p><?php echo $_smarty_tpl->tpl_vars['song']->value['long_description'];?>
</p>	
	</article>

</section>	<?php }} ?>
