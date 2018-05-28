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


Route::get('/banners', function () {

	$banners = App\Models\Banner::all();

    return view('banners', ['banners' => $banners]);
});


Route::get('/banners/{id}', function ($id) {

	$banner = App\Models\Banner::find($id);

    return view('banner', ['banner' => $banner]);
});

Route::get('/entidades_apoio', function () {

	$support_entities = App\Models\Support_entity::all();

    return view('support_entities', ['support_entities' => $support_entities]);
});


Route::get('/entidades_apoio/{id}', function ($id) {

	$support_entity = App\Models\Support_entity::find($id);

    return view('support_entity', ['support_entity' => $support_entity]);
});

Route::get('/empresas_contratantes', function () {

	$contracting_companies = App\Models\Contracting_companies::all();

    return view('contracting_companies', ['contracting_companies' => $contracting_companies]);
});


Route::get('/empresas_contratantes/{id}', function ($id) {

	$contracting_company = App\Models\Contracting_companies::find($id);

    return view('contracting_company', ['contracting_company' => $contracting_company]);
});