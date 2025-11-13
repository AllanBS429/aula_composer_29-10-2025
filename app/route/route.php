<?php

use app\controller\Home;
use app\controller\User;
use Slim\Routing\RouteCollectorProxy;

$app->get('/', Home::class . ':home');

$app->get('/home', Home::class . ':home');

$app->group('/usuario', function (RouteCollectorProxy $group) {
      $group->get('/lista', User::class . ':lista');
      $group->get('/cadastro', User::class . ':cadastro');
});
