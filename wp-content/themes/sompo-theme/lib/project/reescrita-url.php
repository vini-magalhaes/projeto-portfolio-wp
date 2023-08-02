<?php 


//Cria Query Vars 

function url_plugin_query_vars( $query_vars ) {
	$query_vars[] = 'busca-artigo';
	$query_vars[] = 'categoria-artigo';
	
	
	return $query_vars;
}
add_filter( 'query_vars', 'url_plugin_query_vars' );



// Query na URL


function url_plugin_init() {

	
	add_rewrite_rule(
		'artigos/busca-artigo/([^/]*)/categoria-artigo/([^/]*)/?',
		'index.php?busca-artigo=$matches[1]&categoria-artigo=$matches[2]',
		'top'
	);
	add_rewrite_rule(
		'artigos/busca-artigo/([^/]*)/?',
		'index.php?busca-artigo=$matches[1]',
		'top'
	);
    add_rewrite_rule(
		'artigos/categoria-artigo/([^/]*)/?',
		'index.php?categoria-artigo=$matches[1]',
		'top'
	);


}
add_action( 'init', 'url_plugin_init' );


//Redireciona Busca de artigo para listagem de artigos

function url_plugin_template_include( $template ) {
	if ( get_query_var( 'busca-artigo' ) || get_query_var( 'categoria-artigo' ) ) {
		$template_name = 'home.php';
 
		$template = locate_template( $template_name );
		if ( '' === $template ) {
			$template = __DIR__ . '/' . $template_name;
		}
	}
	
	return $template;
}
add_filter( 'template_include', 'url_plugin_template_include' );


//Url Amigavel

function url_plugin_template_redirect() {
	if ( ! empty( $_GET['busca-artigo'] ) && ! empty( $_GET['categoria-artigo'] ) ) {
		wp_redirect( "/artigos/busca-artigo/{$_GET['busca-artigo']}/categoria-artigo/{$_GET['categoria-artigo']}/" );
		exit;
	}else if ( ! empty( $_GET['busca-artigo'] ) ) {
		wp_redirect( "/artigos/busca-artigo/{$_GET['busca-artigo']}/" );
		exit;
	}else if ( ! empty( $_GET['categoria-artigo'] ) ) {
		wp_redirect( "/artigos/categoria-artigo/{$_GET['categoria-artigo']}/" );
		exit;
	}
	
		
	
}
add_action( 'template_redirect', 'url_plugin_template_redirect' );