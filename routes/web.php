<?php

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
Route::get('hello', function () {
    return view('hello2.index', ['data' => 'a']);
});
/*Route::get('hello', function () {
    return view('hello.index', ['values' => ['a', 'b', 'c']]);
});
*/
Route::post('hello','HelloController@post');
/*Route::get('hello',function(){
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';});
*/

