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
Route::middleware('auth')->group( function(){
    
Route::get('/products', 'ProductController@view_products')->name('get_products');
Route::post('/products', 'ProductController@view_products')->name('add_products');
Route::get('/agents', 'AgentController@view_agents')->name('get_agents');
Route::get('/add_agents', 'AgentController@add_agents')->name('add_agents_view');
Route::post('/add_agents', 'AgentController@add_agents')->name('add_agents');
Route::get('/edit_agents/{agent_id}', 'AgentController@edit_agents')->name('edit_agents_view');
Route::post('/edit_agents/{agent_id}', 'AgentController@edit_agents')->name('edit_agents');
Route::get('/delete_agents/{agent_id}', 'AgentController@delete_agents')->name('delete_agents');
Route::get('/leads', 'LeadController@view_leads')->name('get_leads');
Route::get('/allocate', 'LeadController@allocate_leads')->name('allocate_leads');
Route::post('/allocate', 'LeadController@allocate_leads')->name('allocate_leads');
Route::get('/admin', 'UserController@get_admin_page')->name('admin');
Route::get('/submit/{agent_id}/{lead_id}', 'UserController@submit')->name('submit');
Route::get('/orders', 'OrderController@view_submitted_orders')->name('submitted_orders');
Route::get('/export', 'AgentController@export')->name('export_agents');
});
Route::get('/agent/{agent_id}', 'UserController@get_agent_page')->name('agent');
Route::get('/upload','contentsConteroller@upload')->name('upload');
Route::post('/upload','contentsConteroller@upload')->name('upload');

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/generate/password', function(){return bcrypt('123456789');});
