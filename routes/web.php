<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'home'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/add_employee', [Controller\Site::class, 'add_employee'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_department', [Controller\Site::class, 'add_department'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_post', [Controller\Site::class, 'add_post'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/add_structure', [Controller\Site::class, 'add_structure'])
    ->middleware('auth');
Route::add(['GET'], '/add', [Controller\Site::class, 'add'])
    ->middleware('auth');
Route::add(['GET'], '/show', [Controller\Site::class, 'show'])
    ->middleware('auth');
Route::add(['GET','POST'], '/employee_show', [Controller\Site::class, 'employee_show'])
    ->middleware('auth');
Route::add(['GET','POST'], '/search_employee', [Controller\Site::class, 'search_employee'])
    ->middleware('auth');
Route::add(['GET','POST'], '/employee_structure', [Controller\Site::class, 'employee_structure'])
    ->middleware('auth');
Route::add(['GET','POST'], '/admin_add_employee', [Controller\Site::class, 'admin_add_employee'])
    ->middleware('auth','admin');
