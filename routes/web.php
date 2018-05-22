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


    return view('home');
});



Route::get('/parceiros', function () {

	$partners = App\Models\Partner::all();

    return view('partners', ['partners' => $partners]);
});


Route::get('/parceiros/{id}', function ($id) {

	$partner = App\Models\Partner::find($id);

    return view('partner', ['partner' => $partner]);
});
