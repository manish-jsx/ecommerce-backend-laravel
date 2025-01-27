<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;

use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserOrderController;

use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:api'])->group(function () {
  Route::post('logout', [AuthController::class, 'logout']);
  Route::get('me', [AuthController::class, 'me']);
  Route::apiResource('products', ProductController::class);

  Route::get('categories', [CategoryController::class, 'index']);
  Route::get('categories/{category}', [CategoryController::class, 'show']);
  Route::post('categories', [CategoryController::class, 'store']);
  Route::put('categories/{category}', [CategoryController::class, 'update']);
  Route::delete('categories/{category}', [CategoryController::class, 'destroy']);



  Route::get('orders', [OrderController::class, 'index']);
  Route::get('orders/{order}', [OrderController::class, 'show']);
  Route::post('orders', [OrderController::class, 'store']);
  Route::put('orders/{order}', [OrderController::class, 'update']);
  Route::delete('orders/{order}', [OrderController::class, 'destroy']);

  Route::get('users', [UserController::class, 'index']);
  Route::get('users/{user}', [UserController::class, 'show']);
  Route::post('users', [UserController::class, 'store']);
  Route::put('users/{user}', [UserController::class, 'update']);
  Route::delete('users/{user}', [UserController::class, 'destroy']);

  Route::get('roles', [RoleController::class, 'index']);
  Route::get('roles/{role}', [RoleController::class, 'show']);
  Route::post('roles', [RoleController::class, 'store']);
  Route::put('roles/{role}', [RoleController::class, 'update']);
  Route::delete('roles/{role}', [RoleController::class, 'destroy']);

  Route::get('permissions', [PermissionController::class, 'index']);
  Route::get('permissions/{permission}', [PermissionController::class, 'show']);
  Route::post('permissions', [PermissionController::class, 'store']);
  Route::put('permissions/{permission}', [PermissionController::class, 'update']);
  Route::delete('permissions/{permission}', [PermissionController::class, 'destroy']);



  Route::get('orders/{order}/items', [OrderItemController::class, 'index']);
  Route::post('orders/{order}/items', [OrderItemController::class, 'store']);
  Route::delete('orders/{order}/items/{item}', [OrderItemController::class, 'destroy']);

  Route::get('users/{user}/orders', [UserOrderController::class, 'index']);
  Route::post('users/{user}/orders', [UserOrderController::class, 'store']);
  Route::delete('users/{user}/orders/{order}', [UserOrderController::class, 'destroy']);


});