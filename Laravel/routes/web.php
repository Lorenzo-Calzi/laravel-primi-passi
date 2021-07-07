<?php

use Illuminate\Routing\Route as RoutingRoute;
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

    /* $message = "Hello";
    $name = "Lorenzo Calzi"; */

    /* return view('home', compact('message'), compact('name')); */


    
    $data = [
        'message' => "Hello",
        'name' => 'Lorenzo',
        'students' => [
            'primo',
            'secondo'
        ]
        ];

    return view('home', compact('data'));
    });
    
    
    Route::get('test', function () {
    return 'Route di Test';
    });
    