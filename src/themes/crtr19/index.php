<?php get_header();?>
<?php include_once('ordemCategorias.php'); ?>


<div id="container">

	<div id="content">

		<div id="audio">
			<div>
				<h2>Como funciona o processo de inscrição?</h2>
				<strong>Ouça o áudio:</strong>
				<br>
				<span"><audio preload="" controls="controls">
				<source src="http://localhost:8080/wp-content/uploads/2017/07/comoFunciona.mp3" type="audio/mpeg" />
				<a href="http://localhost:8080/wp-content/uploads/2017/07/comoFunciona.mp3">Download: Como funciona o processo de inscrição?</a>
				</audio></span>
			</div>
			<div>
				<h2>Qual a relação de documentos?</h2>
				<strong>Ouça o áudio:</strong>
				<br>
				<span"><audio preload="" controls="controls">
				<source src="http://localhost:8080/wp-content/uploads/2017/01/documentos.mp3" type="audio/mpeg" />
				<a href="http://localhost:8080/wp-content/uploads/2017/01/documentos.mp3">Download: Como funciona o processo de inscrição?</a>
				</audio></span>
			</div>
			<div>
				<h2>Qual valor das taxas no mês de julho?</h2>
				<strong>Ouça o áudio:</strong>
				<br>
				<span"><audio preload="" controls="controls">
				<source src="http://localhost:8080/wp-content/uploads/2017/01/valorTaxas.mp3" type="audio/mpeg" />
				<a href="http://localhost:8080/wp-content/uploads/2017/01/valorTaxas.mp3">Download: Como funciona o processo de inscrição?</a>
				</audio></span>
			</div>
			<br>
			<div>
			<a class="btn btn-primary" href="http://localhost:8080/inscricao-profissional">Veja Mais</a>
			</div>
		</div>

		<div id="destaque"> 
			<dir class="destaque-post">

				<?php query_posts('category_name='.$ordem[0].'&offset=0&showposts=1'); ?>
				<?php if(have_posts()):while (have_posts()) : the_post();?>

					<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<dir class="destaque-info">
						<ul>
							<li class="dest-autor"><?php the_author();?></li>
							<li class="dest-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
							<li class="dest-coment"><?php comments_number('0','1','%'); ?></li>
						</ul>
					</dir>
					<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>

				<?php endwhile;else: ?>
			<?php endif;?>

			<div class="list-dest">
				<ul>
					<?php query_posts('category_name='.$ordem[0].'&offset=2&showposts=2'); ?>
					<?php if(have_posts()):while (have_posts()) : the_post();?>

						<li>
							<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h2><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h2>
						</li>

					<?php endwhile;else: ?>
				<?php endif;?>

			</ul>
		</div>

	</dir> <!-- fim destaque-post-->

	<dir class="destaque-post right">
		<?php query_posts('category_name='.$ordem[0].'&offset=1&showposts=1'); ?>
		<?php if(have_posts()):while (have_posts()) : the_post();?>

			<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<dir class="destaque-info">
				<ul>
					<li class="dest-autor"><?php the_author();?></li>
					<li class="dest-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
					<li class="dest-coment"><?php comments_number('0','1','%'); ?></li>
				</ul>
			</dir>
			<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>

		<?php endwhile;else: ?>
	<?php endif;?>

	<div class="list-dest">
		<ul>
			<?php query_posts('category_name='.$ordem[0].'&offset=4&showposts=2'); ?>
			<?php if(have_posts()):while (have_posts()) : the_post();?>

				<li>
					<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<h2><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h2>
				</li>

			<?php endwhile;else: ?>
		<?php endif;?>

	</ul>
</div>

</dir> <!-- fim destaque-post-->


</div> <!--fim destaque-->


<div id="tecnologia">
	<?php query_posts('category_name='.$ordem[1].'>&offset=0&showposts=2'); ?>
	<div id="title-tec"><span><?php single_cat_title(''); ?></span></div>

	<?php if(have_posts()):while (have_posts()) : the_post();?>
		<div class="post-tec">

			<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

			<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>

			<div class="tec-info">
				<ul>
					<li class="dest-autor"><?php the_author();?></li>
					<li class="dest-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
					<li class="dest-coment"><?php comments_number('0','1','%'); ?></li>
				</ul>
			</div>
			<p><?php the_excerpt_rereloaded(20,'Veja Mais'); ?></p>

		</div> <!-- post-tec -->
	<?php endwhile;else: ?>
<?php endif;?>

</div> <!--fim tecnologia-->

<div id="entreterimento">

	<?php query_posts('category_name='.$ordem[2].'&offset=0&showposts=3'); ?>
	<div id="title-entreterimento"><span><?php single_cat_title(''); ?></span></div>

	
	<?php if(have_posts()):while (have_posts()) : the_post();?>
		<div class="post-entreterimento"> 
			<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>

			<div class="info-entreterimento">
				<ul>
					<li class="autor-entreterimento"><?php the_author();?></li>
					<li class="coment-entreterimento"><?php comments_number('0','1','%'); ?></li>
				</ul>
			</div>

			<p><?php the_excerpt_rereloaded(20,'Leia Mais'); ?></p>
		</div> <!-- fim post-entreterimento -->
	<?php endwhile;else: ?>
<?php endif;?>




</div> <!--fim entreterimento-->

<div id="bloco-sport-saude">

	<div id="sport">

		<?php query_posts('category_name='.$ordem[3].'&offset=0&showposts=1'); ?>
		<div id="title-sport"><span><?php single_cat_title(''); ?></span></div>
		
		<?php if(have_posts()):while (have_posts()) : the_post();?>

			<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

			<div class="sport-info">
				<ul>
					<li class="sport-autor"><?php the_author();?></li>
					<li class="sport-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
					<li class="sport-coment"><?php comments_number('0','1','%'); ?></li>
				</ul>
			</div>

			<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>
		<?php endwhile;else: ?>
	<?php endif;?>

	<div id="sport-list">
		<ul>
			<?php query_posts('category_name='.$ordem[3].'&offset=1&showposts=1'); ?>
			<?php if(have_posts()):while (have_posts()) : the_post();?>
				<li>
					<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<h2><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h2>
				</li>
			<?php endwhile;else: ?>
		<?php endif;?>
	</ul>
</div>

</div> <!--fim sport-->


<div id="saude">

	<?php query_posts('category_name='.$ordem[4].'&offset=0&showposts=1'); ?>
	<div id="title-saude"><span><?php single_cat_title(''); ?></span></div>
	
	<?php if(have_posts()):while (have_posts()) : the_post();?>
		<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

		<div class="saude-info">
			<ul>
				<li class="saude-autor"><?php the_author();?></li>
				<li class="saude-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
				<li class="saude-coment"><?php comments_number('0','1','%'); ?></li>
			</ul>
		</div>

		<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>
	<?php endwhile;else: ?>
<?php endif;?>

<div id="saude-list">
	<ul>
		<?php query_posts('category_name='.$ordem[4].'&offset=1&showposts=1'); ?>
		<?php if(have_posts()):while (have_posts()) : the_post();?>
			<li>
				<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<h2><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h2>
			</li>
		<?php endwhile;else: ?>
	<?php endif;?>

</ul>
</div> <!-- fim saude-list-->

</div> <!--fim saude-->			

</div> <!-- fim bloco-sport-saude-->




<div id="bloco-popolitica-games">


	<div id="politica">

		<?php query_posts('category_name='.$ordem[5].'&offset=0&showposts=1'); ?>
		<div id="title-politica"><span><?php single_cat_title(''); ?></span></div>
		
		<?php if(have_posts()):while (have_posts()) : the_post();?>

			<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

			<div class="politica-info">
				<ul>
					<li class="politica-autor"><?php the_author();?></li>
					<li class="politica-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
					<li class="politica-coment"><?php comments_number('0','1','%'); ?></li>
				</ul>
			</div>

			<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>
		<?php endwhile;else: ?>
	<?php endif;?>

	<div id="politica-list">
		<ul>
			<?php query_posts('category_name='.$ordem[5].'&offset=1&showposts=1'); ?>
			<?php if(have_posts()):while (have_posts()) : the_post();?>
				<li>
					<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<h2><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h2>
				</li>
			<?php endwhile;else: ?>
		<?php endif;?>
	</ul>
</div>

</div> <!--fim politica-->


<div id="games">

	<?php query_posts('category_name='.$ordem[6].'&offset=0&showposts=1'); ?>
	<div id="title-games"><span><?php single_cat_title(''); ?></span></div>

	<?php if(have_posts()):while (have_posts()) : the_post();?>

		<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>

		<div class="games-info">
			<ul>
				<li class="games-autor"><?php the_author();?></li>
				<li class="games-views"><?php if(function_exists('the_views')){ the_views(); } ?></li>
				<li class="games-coment"><?php comments_number('0','1','%'); ?></li>
			</ul>
		</div>

		<h1><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h1>
	<?php endwhile;else: ?>
<?php endif;?>

<div id="games-list">
	<ul>
		<?php query_posts('category_name='.$ordem[6].'&offset=1&showposts=1'); ?>
		<?php if(have_posts()):while (have_posts()) : the_post();?>
			<li>
				<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<h2><a href="<?php the_Permalink(); ?>"><?php the_title() ?></a></h2>
			</li>
		<?php endwhile;else: ?>
	<?php endif;?>
</ul>
</div>

</div> <!--fim games-->


</div> <!--fim bloco-popolitica-games-->


</div> <!--fim content-->

<?php get_sidebar();?>

</div> <!--fim container-->

<?php get_footer();?>