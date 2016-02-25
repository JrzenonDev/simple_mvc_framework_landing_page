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
Router::any('edit_contato_usuario/(:num)', 'Controllers\PainelContatoUsuario@EditUser');

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/** If no route found. */
Router::error('Core\Error@index');

/** Turn on old style routing. */
Router::$fallback = false;

/** Execute matched routes. */
Router::dispatch();
