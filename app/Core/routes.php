<?php
/**
 * Routes - all standard routes are defined here.
 */

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;

/** Define routes. */
Router::any('', 'Controllers\Home@index');
Router::any('contact', 'Controllers\Contact@index');
Router::any('painel_contato_usuario', 'Controllers\PainelContatoUsuario@ListUser');
Router::get('edit_contato_usuario/(:num)', 'Controllers\PainelContatoUsuario@GetUser');
Router::post('edit_contato_usuario/(:num)', 'Controllers\PainelContatoUsuario@PostUser');
Router::get('insert-blog', 'Controllers\PainelContatoUsuario@insert');
//Router::any('edit_contato_usuario/(:num)', 'Controllers\PainelContatoUsuario@EditUser');
//Router::any('edit_contato_usuario/(:num)', 'Controllers\PainelContatoUsuario@DeleteUser');

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/** If no route found. */
Router::error('Core\Error@index');

/** Turn on old style routing. */
Router::$fallback = false;

/** Execute matched routes. */
Router::dispatch();
