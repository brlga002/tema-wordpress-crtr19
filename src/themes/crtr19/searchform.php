<div id="search">
	<form action="<?php bloginfo('home');?>/" method="get">
		<input type="text" name="s" id="s" placeholder="Digite sua Pesquisa" value="<?php the_search_query(); ?>">
		<input type="submit" value="" class="btn-search" name="">
	</form>
</div> <!-- fim search-->