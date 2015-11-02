<div id='wrapper'>

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
	{foreach $day_list_available as $day}
	<li><a href ="index.php?action=getsongs&day={$day}">{$day}</a></li>
	{/foreach}
	{foreach $day_list_greyedout as $day}
	<li>{$day}</li>
	{/foreach}
	</ul>
	</nav>
	</hr>
	
</header>