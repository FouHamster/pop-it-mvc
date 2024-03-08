<?php

use Src\Route;

Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/home', [Controller\Site::class, 'home'])
    ->middleware('auth');
Route::add('GET', '/choose', [Controller\Site::class, 'choose'])
    ->middleware('auth');
Route::add('GET', '/division', [Controller\Site::class, 'division'])
    ->middleware('auth');
Route::add('GET', '/staff', [Controller\Site::class, 'staff'])
    ->middleware('auth');
Route::add('GET', '/list', [Controller\Site::class, 'employee'])
    ->middleware('auth');
Route::add('GET', '/attach', [Controller\Site::class, 'attach'])
    ->middleware('auth');