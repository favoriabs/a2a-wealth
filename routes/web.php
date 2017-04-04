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

// Route::get('/', function () {
//     return redirect()->route('login');
// })->name('home');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/products', 'HomeController@getProducts')->name('get_products');
Route::get('/about-us', 'HomeController@getAboutUs')->name('get_aboutus');

Route::get('login', 'AuthController@getLogin')->name('login');
Route::post('login', 'AuthController@postLogin')->name('do_login');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('settings', 'AuthController@setting')->name('settings');
Route::post('settings', 'AuthController@changePassword')->name('save_settings');

Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    Route::get('/', 'AdminController@allAgents')->name('superadmin_dash');
    Route::get('/all/companies', 'AdminController@showCompanies')->name('all_companies');
    Route::get('create-cooperative', 'AdminController@create')->name('create_cooperative');
    Route::post('create-cooperative', 'AdminController@store')->name('save_cooperative');
    Route::post('edit/cooperative/{id}', 'AdminController@editCooperative')->name('update_cooperative');
    Route::get('delete/cooperative/{id}', 'AdminController@remove')->name('delete_cooperative');
    
    //agents
    Route::get('create/agent', 'AdminController@createAgent')->name('create_agent');
    Route::post('create/agent', 'AdminController@storeAgent')->name('save_agent');
    Route::post('edit/agent/{id}', 'AdminController@editAgent')->name('update_agent');
    Route::get('delete/agent/{id}', 'AdminController@deleteAgent')->name('delete_agent');
    
    //companies
    Route::post('edit/company/{id}', 'AdminController@editCompany')->name('company_update_admin');
    Route::get('delete/company/{id}', 'AdminController@deleteCompany')->name('company_delete_admin');
});

Route::post('ajax/state/lgas', 'AdminController@ajaxCall')->name('state_lga');


/*Route::group(['prefix' => 'cooperative'], function () {
    Route::get('/', 'CooperativeController@index')->name('cooperative_index');
    Route::get('create_farmer', 'CooperativeController@create')->name('create_farmer');
    Route::post('create_farmer', 'CooperativeController@store')->name('store_farmer');
});*/


Route::group(['prefix' => 'agent'], function () {
    Route::get('/', 'AgentController@index')->name('agent_index');
    Route::get('create_farmer', 'AgentController@create')->name('create_farmer');
    Route::post('create_farmer', 'AgentController@store')->name('store_farmer');
    Route::put('edit/farmer/{id}', 'AgentController@update')->name('edit_farmer_agent');
    Route::get('delete/farmer/{id}', 'AgentController@remove')->name('delete_farmer_agent');
});

Route::group(['prefix' => 'farmer'], function(){
   Route::get('/', 'FarmerController@index')->name('farmer_dashboard'); 
   Route::get('/register', 'FarmerController@register')->name('farmer_registration');
   Route::post('/register', 'FarmerController@store')->name('farmer_register');
   Route::get('/products', 'FarmerController@allProducts')->name('farmer_products');

});

Route::group(['prefix' => 'company'], function(){
   Route::get('create', 'CompanyController@create')->name('create_company');
   Route::post('save', 'AdminController@storeCompany')->name('save_company');
   Route::get('/', 'CompanyController@index')->name('company_dashboard');
   Route::get('register', 'CompanyController@registerCompany')->name('register_company');
   Route::post('register', 'CompanyController@store')->name('save_registered_company');
});

Route::group(['prefix' => 'products'], function(){
   Route::get('create', 'ProductController@create')->name('create_product');
   Route::post('create', 'ProductController@store')->name('store_product');
});

// Route::get('/password', 'CooperativeController@';


