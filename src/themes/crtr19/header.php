<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
<meta charset="<?php bloginfo('charset')?>">

<title><?php wp_title('-',true,'right');bloginfo()?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://localhost:8080/wp-content/themes/crtr19/style.css?atualiza=<?php echo date("s");?>">

<?php wp_head();?>	<!-- < ? php bloginfo('template_url')?>/-->
</head>
<body>

<div id="header">
	<div id="header-superior">
		<div id="header-superior-fundo">
			<div id="header-superior-content">
				<div id="header-paginas">
					<!--ul>
					<li><a class="a" href="< ?php bloginfo('home') ?>">Home</a></li>
					< ?php wp_list_pages('title_li&child_of');?>
					</ul-->
					<!-- ? php include_once('navegacaoPaginas.php'); ?-->
					<?php # wp_nav_menu('menu=main menu');?>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
					
					<?php # wp_nav_menu( array( 'location'=>'main-menu', 'container'=>'div', 'container-class'=>'menu', 'menu_class'=>'ul-menu' ) ); ?>


				</div> <!-- fim header-paginas-->

				<div id="header-social">
					<a href="https://www.facebook.com/CRTR19/" target="_blanck"><img src="<?php bloginfo('template_url')?>/images/face.png" rel="" title=""></a>
					<a href="http://twitter.com/conteroficial" target="_blanck"><img src="<?php bloginfo('template_url')?>/images/twitter.png" rel="" title=""></a>
					<a href="http://youtube.com/8novembrorx" target="_blanck"><img src="<?php bloginfo('template_url')?>/images/youtube.png" rel="" title=""></a>
				</div> <!-- fim header-social-->
			</div> <!-- fim header-superior-content-->
		</div> <!--fim #header-superior-fundo-->
	</div> <!-- fim header-superior-->
	
	<div id="header-content">
		<div id="logo">
			<a href="<?php bloginfo('home') ?>"><img src="<?php bloginfo('template_url')?>/images/logo
			.png" rel="" title=""></a>
		</div> <!-- fim logo-->

		<div id="header-content-horario">
			<h5><strong>SEG A SEX | 8h às 17h</strong></h5>
			<span>(92) 3308-6914 / (92) 3213-9583</span>
		</div>
	</div> <!-- fim header-content-->

	<div id="nav">
		<div id="nav-content">
			<ul>
				<?php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2&exclude=20'); ?>
			</ul>
		</div> <!-- fim nav-content-->
	</div> <!-- fim nav-->
	
</div> <!-- fim header-->