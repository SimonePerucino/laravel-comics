<?php

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
    $comicsData = config("comics");
    return view('Home', ["comicsList" => $comicsData]);
})->name("HomePage");

route::get("/paginaDettaglio/{id}", function ($id) {
    $comicsData = config("comics");
    //if(is_numeric($id) || $id < 0 || count($comicsData)){
    //    abort()
    //}
    $comicScelta = $comicsData[$id];
    return view("paginaDettaglio", ["comic" => $comicScelta]);
})->name("paginaDettaglio");
