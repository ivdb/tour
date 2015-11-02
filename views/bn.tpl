
{include file="sidebar.tpl"}

<section>

{foreach $bn_list as $bn}

	<article>
	
	
	<a href=""><img class="bn" src="images/joling.jpg"></a>
		<h2>{$bn.name} {$bn.surname}</h2>
	
		<h6>{$bn.description}</h6>
		
	
	</article>
	
{/foreach}
</section>	

