<?php
$ordem = array(
"destaques", #4 box
"eventos", #2 box
"fiscalizacao", #3 box
"concursos", #2 box BLOCO1
"calendario", #2 box BLOCO1
"noticias", #2 box BLOCO2
"justica", #2 box BLOCO1
"sobre-nos" #2 box BLOCO1
);

function paginaNoRodape (){
	return 'pagename=sobre-nos';
}

$nomeTema = 'TemaNovo';
$pasta = ($_SERVER['HTTP_HOST'] == 'localhost' ? '/htdocs/wp' : '');  

define( 'HOME_URL','http://'.$_SERVER['HTTP_HOST'].$pasta );#http://www.crtr19.gov.br/
define( 'SRC', HOME_URL . '/wp-content/themes/'.$nomeTema);
define( 'PATH', dirname(__DIR__) );


?>