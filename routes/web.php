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

Route::get('/adira_iniciativa', function () {


    return view('aderir_iniciativa');
});

Route::get('/sobre', function () {


    return view('sobre');
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
	$support_entities_others = App\Models\Support_entity::where('id', '!=', $id)->get();

    return view('support_entity', ['support_entity' => $support_entity, 'support_entities_others' => $support_entities_others]);
});

Route::get('/empresas_contratantes', function () {

	$contracting_companies = App\Models\Contracting_companies::all();

    return view('contracting_companies', ['contracting_companies' => $contracting_companies]);
});


Route::get('/empresas_contratantes/{id}', function ($id) {

	$contracting_company = App\Models\Contracting_companies::find($id);

    return view('contracting_company', ['contracting_company' => $contracting_company]);
});


Route::get('/casos_sucesso', function () {

	$successful_cases = App\Models\SucessfulCase::all();

    return view('successful_cases', ['successful_cases' => $successful_cases]);
});


Route::get('/casos_sucesso/{id}', function ($id) {

	$successful_case = App\Models\SucessfulCase::find($id);

    return view('successful_case', ['successful_case' => $successful_case]);
});

Route::get('/configuracoes', function () {

	$configurations = App\Models\Configuration::all();

    return view('configurations', ['configurations' => $configurations]);
});


Route::get('/configuracoes/{id}', function ($id) {

	$configuration = App\Models\Configuration::find($id);

    return view('configuration', ['configuration' => $configuration]);
});

Route::get('/procedimentos', function () {

	$procedures = App\Models\Procedure::all();

    return view('procedures', ['procedures' => $procedures]);
});


Route::get('/procedimentos/{id}', function ($id) {

	$procedure = App\Models\Procedure::find($id);

    return view('procedure', ['procedure' => $procedure]);
});


Route::get('/sub_procedimentos', function () {

	$sub_procedures = App\Models\Sub_procedure::all();

    return view('sub_procedures', ['sub_procedures' => $sub_procedures]);
});


Route::get('/sub_procedimentos/{id}', function ($id) {

	$sub_procedure = App\Models\Sub_procedure::find($id);

    return view('sub_procedure', ['sub_procedure' => $sub_procedure]);
});

Route::get('/adira_iniciativa/candidato', function () {


    return view('aderir_iniciativa-candidato');
});

use Validator;
use Illuminate\Http\Request;

use App\Mail\NovoCandidato;
use Illuminate\Support\Facades\Mail;

Route::post('/adira_iniciativa/candidato', function (Request $request) {


    $validator = Validator::make($request->all(), [
        'nameCandidato' => 'required',
        'emailCandidato' => 'required|email',
        'phoneCandidato' => 'required|numeric|max:value = 9',
        'adressCandidato' => 'required',
        'zipcode' => 'required',
        'localidadeCandidato' => 'required',
        'birthDate' => 'required|date',
        'conhecimentoPlataformaCandidato' => 'required',
        'habilitacoes' => 'required',
    ]);

    if ($validator->fails()) {
            return redirect('adira_iniciativa/candidato')
                        ->withErrors($validator)
                        ->withInput();
    }

     //Email para onde é enviado o perfil do Candidato
     Mail::to('spam.spam.pt@gmail.com')->send(new NovoCandidato($request->all()));

     return redirect()->back()->with('message', 'O seu registo foi enviado com Sucesso! Entraremos em contacto brevemente. Obrigado!');

});

Route::post('/adira_iniciativa/empregadores', function (Request $request) {


    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric|max:value = 9',
        'nameResponsavel' => 'required',
        'localidade' => 'required',
        'conhecimentoPlataforma' => 'required',
        'logo' => 'required|image',
    ]);

    if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
    }

    if ($request->hasFile('logo')) {
        $path = $request->logo->store('uploads');
    }

    $support = new App\Models\Support_entity;
    $support->name = $request->input('name');
    $support->email = $request->input('email');
    $support->setor = $request->input('setor');
    $support->products = $request->input('products');
    $support->localidade = $request->input('localidade');
    $support->nameResponsavel = $request->input('nameResponsavel');
    $support->phone = $request->input('phone');
    $support->conhecimentoPlataforma = $request->input('conhecimentoPlataforma');
    $support->state = 0;

    $support->path = $path;

    $support->save();

    return redirect()->back()->with('message', 'O seu registo foi enviado com Sucesso! Entraremos em contacto brevemente. Obrigado!');
});


Route::get('/adira_iniciativa/empregadores', function () {


    return view('aderir_iniciativa-empregadores');
});