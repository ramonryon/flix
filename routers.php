<?php  
global $routes;
$routes = array();

//routers de exemplo
$routes['/desenho/{slug}'] = '/desenho/assistir/:slug';
$routes['/desenho/{slug}/{id}/{temporada}'] = '/episodios/listarDesenho/:slug/:id/:temporada';
$routes['/serie/{slug}'] = '/serie/assistir/:slug';
$routes['/serie/{slug}/{id}/{temporada}'] = '/episodios/listarSerie/:slug/:id/:temporada';

?>