<?php  
global $routes;
$routes = array();

//routers de exemplo
$routes['/galeria/{id}'] = '/galeria/abrir/:id';
$routes['/news{id}'] = '/noticia/abrir/:id';
$routes['/{titulos}'] = '/noticia/abrir/:titulo';

?>