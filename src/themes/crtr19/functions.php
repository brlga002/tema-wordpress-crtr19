<?php 
/*WIDGETS*/

if (function_exists('register_sidebar')) {

	register_sidebar(array());
	register_sidebar(array());
}

/* imagem destacada */

add_theme_support('post-thumbnails');

#register_nav_menu( 'header-menu', 'Menu Categorias' );	
#register_nav_menu( 'main-menu', 'Menu Principal' );

add_filter( 'widget_text', 'do_shortcode');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function paginaRelosucao($echo=true){
  $slug = basename(get_permalink());
  $slug = apply_filters('slug_filter', $slug);
  if ($slug == "resolucoes"){
  pegaResoluções();
  }	
  
}

function pegaResoluções() {
	$caminho = '';
	if(isset($_GET['id'])){
		$caminho = $_GET['id'];
	} else {
		$caminho = 'site/resolucoes/0';
	}
	$url = file_get_contents('http://conter.gov.br/'.$caminho);
	$url  = str_replace('site/resolucoes', '?id=site/resolucoes', $url);
	$url  = str_replace('<p><a href', '<p><a target="_blank" href', $url);

	/*$procura = "/[a-z._-]+[0-9]+@([a-z]+)\.([a-z]{2,4})/";*/
	/*$procura = '!<div id="list">.*?<li.*?>.*?</li>.*?</ul>!';*/
	$procura = '/\<ul class="list-unstyled noticias"\>(.*?)\<\/ul\>/is';
	$procura2 = '/\<ul class="pagination"\>(.*?)\<\/ul\>/is';

	$matches = array();
	$matches2 = array();

# Executa nossa expressão
	$resoluções = preg_match_all($procura, $url, $matches);
	$paginas = preg_match_all($procura2, $url, $matches2);

	if ($resoluções >= 1) {
		print_r($matches[0][0]);
	} 

	if ($paginas >= 1) {
		print_r($matches2[0][0]);
	}
}

?>