<div id="sidebar-colunistas">

	<div id="title-colunistas"><span>COLUNISTAS</span></div>

	<div class="colunistas">
		<ul>
			<?php $result2 = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts GROUP BY post_author");

			foreach ($result2 as $post) {
				$author=$post->post_author;
			?>

			<li>
				<?php echo  get_avatar($author,70); ?>
				<h1><a href="<?php bloginfo('url'); ?>/?author=<?php echo $author?>"><?php $user_info = get_userdata($author); echo ($user_info->first_name. " ". $user_info->last_name ."\n");
					?></a></h1>

				</li> <!-- colunistas-->

				<?php } ?>
			</ul>

		</div>
</div> <!--fim sidebar-colunistas-->