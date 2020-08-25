	<div id="footer">

		<div id="footer-content">
			<div id="title-footer"><span><img src="<?php bloginfo('template_url') ;?>/images/logo.png" rel="" title=""></a></span></div>

			<div id="footer-sobre">

				<?php query_posts('pagename=sobre-nos'); ?>
				<?php if(have_posts()):while (have_posts()) : the_post();?>

					<div id="title-sobre"><span><?php the_title(); ?></span></div>

					<p><?php the_excerpt_rereloaded(250,'Leia Mais'); ?></p>

					
				<?php endwhile;else: ?>
			<?php endif;?>

		</div> <!--fim footer-sobre-->

		<div id="footer-paginas">
			<div id="title-paginas"><span>PÁGINAS</span></div>
			<ul>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
			</ul>
		</div> <!--fim paginas-->

		<div id="footer-recentes">
			<div id="title-recentes"><span>POSTS RECENTES</span></div>
			<ul>
				<?php query_posts('showposts=15'); ?>
				<?php if(have_posts()):while (have_posts()) : the_post();?>
					<li><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></li>
				<?php endwhile;else: ?>
			<?php endif;?>

		</ul>
	</div> <!--fim footer-recentes-->

</div> <!--fim footer-content-->

<div id="footer-info">

	<div id="info-content">
		<span><h4>Todos Direitos Reservados</h4></span>
		<span class="info-right"><h4>Desenvolvimento: <b><a href="https://devmanaus.com" target="_blank">devmanaus.com</a></b></h4></span>
	</div>


</div> <!--fim footer-info-->

</div> <!--fim footer-->




<?php wp_footer();?>
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>
</html>