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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/minuman', function () {
    return view('minuman');
});

Route::get('/detail', function () {
    return view('detail');
});
Auth::routes();

Route::get('/home', function(){
    $data = DB::table('transaksi')->get();

    return view('home', ['petani' => $data]);
});


Auth::routes();


Auth::routes();


