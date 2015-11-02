
{include file="sidebar.tpl"}

<section>

{foreach $song_list as $song}

	<article>
		<p>{$song.order_nr}  -  {$song.artistname} - {$song.title}</p>
	
	</article>
	
{/foreach}
</section>	

