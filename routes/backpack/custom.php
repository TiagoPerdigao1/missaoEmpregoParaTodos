<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
	CRUD::resource('photo', 'PhotoCrudController');
	CRUD::resource('banner', 'BannerCrudController');
	CRUD::resource('configuration', 'ConfigurationCrudController');
	CRUD::resource('sucessfulcase', 'SucessfulCaseCrudController');
	CRUD::resource('contracting_companies', 'Contracting_companiesCrudController');
	CRUD::resource('support_entity', 'Support_entityCrudController');
	CRUD::resource('procedure', 'ProcedureCrudController');
	CRUD::resource('sub_procedure', 'Sub_procedureCrudController');
	CRUD::resource('partner', 'PartnerCrudController');

}); // this should be the absolute last line of this file
