<?php

use App\Providers\TodoService\Todo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    Log::info('before add todo');

    Todo::set("Hello");
    Todo::set("World");

    app()->make('todo')->set('Jhon Doe');
    app('todo')->set('Philip Kotler');

    Log::info('after add todo');

    dd(Todo::get());

    return view('welcome');
});
