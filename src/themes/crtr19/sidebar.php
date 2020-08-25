		<div id="sidebar">

			<div id="search1">
				<?php get_search_form(); ?>
			</div> <!-- fim search-->

			<div id="transparencia">
				<div id="title-vistos"><span>ELEIÇÕES CONTER 2017</span></div>
				<a href="https://www.votaradiologia.org.br/"><img src="<?php bloginfo('template_url')?>/images/VOTA1.png"></a>
			</div>

			<div id="transparencia">
				<div id="title-vistos"><span>TRANSPARÊNCIA</span></div>
				<a href="<?php bloginfo('home') ?>\index.php\transparencia"><img src="<?php bloginfo('template_url')?>/images/banner-button.jpg"></a>
			</div>

			<div id="sidebar-vistos">
				<div id="title-vistos"><span>POSTS MAIS VISTOS</span></div>
				
				<?php if(function_exists('get_most_viewed')): ?>
					<ul>
						<li>
							<?php get_most_viewed('post',5);?>
						</li>
					</ul>
				<?php endif;?>

			</div> <!--fim sidebar-vistos-->

			<?php include_once('sidebar-author.php'); ?>



			<div id="sidebar-publi">
				
				<div id="title-publi"><span>LEGISLAÇÃO</span></div>
				<ul>
					<li><a href="http://conter.gov.br/uploads/legislativo/codigodeetica.pdf" target="_blanck" title="Código de Ética dos Profissionais das Técnicas Radiológicas" class="publi-maior"></a></li>
					<li><a href="http://conter.gov.br/site/resolucoes" target="_blanck" title="Resoluções" class="publi-left"></a></li>
					<li><a href="<?php bloginfo('home') ?>/index.php/leis/" class="publi-right"></a></li>
				</ul>


			</div> <!--fim sidebar-publi-->

			<div id="sidebar-coment">
				
				<div id="title-coment"><span>MAIS COMENTADOS</span></div>
				<ul>
					<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title,guid FROM {$wpdb->prefix}posts WHERE post_type='post' ORDER BY comment_count DESC LIMIT 0,5");
					foreach ($result as $post) {
						$link = $post->guid;
						$postid =$post->ID;
						$title = $post->post_title;
						if ($post->comment_count !=0){ ?>
						<li>
							<span class="coment-number"><?php $i = $i;$i++; echo $i; ?></span>
							<div class="vistos-title">
								<a href="<?php echo $link; ?>"><?php echo $title ." (".$post->comment_count.")"; ?></a>
							</div>
						</li>
						<?php }} ?>	

					</ul>

				</div> <!--fim sidebar-coment-->

				<div id="sidebar-lista">
						<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
							<aside id="secondary" class="sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'sidebar-1' ); ?>
							</aside><!-- .sidebar .widget-area -->
						<?php endif; ?>
				</div> <!--fim sidebar-facebook-->

		</div> <!--fim sidebar-->