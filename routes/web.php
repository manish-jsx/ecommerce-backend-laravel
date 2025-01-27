<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DocsController;
use Carbon\Doctrine\CarbonType;

// Basic routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Auth::routes();

// API Documentation routes
Route::get('/api/documentation', function () {
    return view('docs.index');
})->name('api.documentation');

Route::prefix('docs')->name('docs.')->group(function () {
    Route::get('/', [DocsController::class, 'index'])->name('index');
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::get('/', [DocsController::class, 'authIndex'])->name('index');
        Route::get('/login', [DocsController::class, 'authLogin'])->name('login');
        Route::get('/register', [DocsController::class, 'authRegister'])->name('register');
        Route::get('/logout', [DocsController::class, 'authLogout'])->name('logout');
        Route::get('/me', [DocsController::class, 'authMe'])->name('me');
    });
    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('/', [DocsController::class, 'roles'])->name('index');
        Route::get('/show', [DocsController::class, 'rolesShow'])->name('show');
        Route::get('/store', [DocsController::class, 'rolesStore'])->name('store');
        Route::get('/update', [DocsController::class, 'rolesUpdate'])->name('update');
        Route::get('/destroy', [DocsController::class, 'rolesDestroy'])->name('destroy');
    });

 
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [DocsController::class, 'cart'])->name('index');
        Route::get('/show', [DocsController::class, 'cartShow'])->name('show');
        Route::get('/add', [DocsController::class, 'cartStore'])->name('add');
        Route::get('/update', [DocsController::class, 'cartUpdate'])->name('update');
        Route::get('/remove', [DocsController::class, 'cartDestroy'])->name('remove');
    });
   


    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [DocsController::class, 'categories'])->name('index');
        Route::get('/show', [DocsController::class, 'categoriesShow'])->name('show');
        Route::get('/store', [DocsController::class, 'categoriesStore'])->name('store');
        Route::get('/update', [DocsController::class, 'categoriesUpdate'])->name('update');
        Route::get('/destroy', [DocsController::class, 'categoriesDestroy'])->name('destroy');
    });

    Route::prefix('permissions')->name('permissions.')->group(function () {
        Route::get('/', [DocsController::class, 'permissions'])->name('index');
        Route::get('/show', [DocsController::class, 'permissionsShow'])->name('show');
  
        Route::get('/update', [DocsController::class, 'permissionsUpdate'])->name('update');

    });

    Route::prefix('products')->name('products.')->group(function () {

        Route::get('/', [DocsController::class, 'productsIndex'])->name('index');
        Route::get('/show', [DocsController::class, 'productsShow'])->name('show');
        Route::get('/store', [DocsController::class, 'productsStore'])->name('store');
        Route::get('/update', [DocsController::class, 'productsUpdate'])->name('update');
        Route::get('/destroy', [DocsController::class, 'productsDestroy'])->name('destroy');
    });
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [DocsController::class, 'orders'])->name('index');
        Route::get('/show', [DocsController::class, 'ordersShow'])->name('show');
        Route::get('/store', [DocsController::class, 'ordersStore'])->name('store');
        Route::get('/update', [DocsController::class, 'ordersUpdate'])->name('update');
        Route::get('/destroy', [DocsController::class, 'ordersDestroy'])->name('destroy');
    });
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [DocsController::class, 'users'])->name('index');
        Route::get('/show', [DocsController::class, 'usersShow'])->name('show');
        Route::get('/store', [DocsController::class, 'usersStore'])->name('store');
        Route::get('/update', [DocsController::class, 'usersUpdate'])->name('update');
        Route::get('/destroy', [DocsController::class, 'usersDestroy'])->name('destroy');
    });

});

