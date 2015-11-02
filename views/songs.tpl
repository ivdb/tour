{include file="sidebar.tpl"}

<section>

{foreach $song_list as $song}

	<article>

		<h1>{$song.order_nr} {$song.artistname} - {$song.title}</h1>
		
	
		<p>{$song.long_description}</p>
		<a href="index.php?action=view_song&song_id={$song.id}">...</a>
	</article>
	
{/foreach}
</section>	

