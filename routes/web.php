<?php
use App\Controllers\OrderController;
use App\Controllers\ReviewController;
use App\Controllers\UserController;

$app->redirect('/', '/orders');

$app->get('/orders', [OrderController::class, 'index']);
$app->get('/orders/create', [OrderController::class, 'create']);
$app->post('/orders/store', [OrderController::class, 'store']);
$app->get('/orders/show/{id}', [OrderController::class, 'show']);
$app->delete('/orders/delete/{id}', [OrderController::class, 'delete']);

$app->get('/reviews', [ReviewController::class, 'index']);
$app->get('/reviews/create', [ReviewController::class, 'create']);
$app->post('/reviews/store', [ReviewController::class, 'store']);
$app->delete('/reviews/delete/{id}', [ReviewController::class, 'delete']);

$app->get('/users', [UserController::class, 'index']);
$app->get('/users/create', [UserController::class, 'create']);
$app->post('/users/store', [UserController::class, 'store']);
$app->get('/users/show/{id}', [UserController::class, 'show']);
$app->delete('/users/delete/{id}', [UserController::class, 'delete']);
