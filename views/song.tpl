{include file="sidebar.tpl"}


<div id="songnav">
	<ul class="songlist">
	<li><a href="index.php?action=view_song&song_id={$song3_list.0.id}"><p class="order_nr">{(($song3_list.0.order_nr) > 0)? ($song3_list.0.order_nr )  : "."}</p> <p>{$song3_list.0.title}</p></a></li>
  	<li class="middle"><p class="order_nr">{$song.order_nr}</p> <div class=clear></div>
	<p>{$song.artistname} - {$song.title}</p> </li>
	<li><a href="index.php?action=view_song&song_id={$song3_list.2.id}"><p class="order_nr">{(($song3_list.2.order_nr) > 0)? ($song3_list.2.order_nr )  : "."}</p> <p>{$song3_list.2.title}</p></a></li>
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

		<p>{$song.long_description}</p>	
	</article>

</section>	