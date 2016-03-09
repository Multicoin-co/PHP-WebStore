<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('DashedRoute');

Router::scope('/', function (RouteBuilder $routes) {

    /* Admin Controller */
    $routes->connect('/admin', ['controller' => 'Admin', 'action' => 'index']);

    /* Product Type */
    $routes->connect('/admin/product_type/add', ['controller' => 'ProductType', 'action' => 'add']);
    $routes->connect('/admin/product_type/all', ['controller' => 'ProductType', 'action' => 'index']);
    $routes->connect('/admin/product_type/view/:id', ['controller' => 'ProductType', 'action' => 'view'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
    $routes->connect('/admin/product_type/edit/:id', ['controller' => 'ProductType', 'action' => 'edit'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
    $routes->connect('/admin/product_type/delete/:id', ['controller' => 'ProductType', 'action' => 'delete'], ['id' => '[0-9\-]+', 'pass' => ['id']]);

    /* Product Sub Type */
    $routes->connect('/admin/product-sub-type/add', ['controller' => 'ProductSubtype', 'action' => 'add']);
    $routes->connect('/admin/product-sub-type/all', ['controller' => 'ProductSubtype', 'action' => 'index']);
    $routes->connect('/admin/product-sub-type/view/:id', ['controller' => 'ProductSubtype', 'action' => 'view'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
    $routes->connect('/admin/product-sub-type/edit/:id', ['controller' => 'ProductSubtype', 'action' => 'edit'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
    $routes->connect('/admin/product-sub-type/delete/:id', ['controller' => 'ProductSubtype', 'action' => 'delete'], ['id' => '[0-9\-]+', 'pass' => ['id']]);

    /* Product */
    $routes->connect('/admin/product/add', ['controller' => 'Product', 'action' => 'add']);
    $routes->connect('/admin/product/all', ['controller' => 'Product', 'action' => 'index']);
    $routes->connect('/admin/product/view/:id', ['controller' => 'Product', 'action' => 'view'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
    $routes->connect('/admin/product/edit/:id', ['controller' => 'Product', 'action' => 'edit'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
    $routes->connect('/admin/product/delete/:id', ['controller' => 'Product', 'action' => 'delete'], ['id' => '[0-9\-]+', 'pass' => ['id']]);

   /* Users */
   $routes->connect('/admin/users/add', ['controller' => 'Users', 'action' => 'add']);
   $routes->connect('/admin/users/all', ['controller' => 'Users', 'action' => 'index']);
   $routes->connect('/admin/users/view/:id', ['controller' => 'Users', 'action' => 'view'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
   $routes->connect('/admin/users/edit/:id', ['controller' => 'Users', 'action' => 'edit'], ['id' => '[0-9\-]+', 'pass' => ['id']]);
   $routes->connect('/admin/users/delete/:id', ['controller' => 'Users', 'action' => 'delete'], ['id' => '[0-9\-]+', 'pass' => ['id']]);

   /* Admin Reports */
   $routes->connect('/admin/reports/orders', ['controller' => 'Admin', 'action' => 'recentOrders']);
   $routes->connect('/admin/reports/users', ['controller' => 'Admin', 'action' => 'recentUsers']);
});

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
