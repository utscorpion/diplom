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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@show']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'BlogController@execute']);
Route::get('/blogsingle/{tag}', ['as' => 'blogsingle', 'uses' => 'BlogController@show']);

Route::get('/catalog/', ['as' => 'catalog', 'uses' => 'CatalogController@show']);

Route::get('/catalogup/', ['as' => 'catalogup', 'uses' => 'CatalogController@up']);

Route::get('/catalogdown/', ['as' => 'catalogdown', 'uses' => 'CatalogController@down']);

Route::get('/single/{id}', ['as' => 'single', 'uses' => 'SinglePageController@execute']);

Route::get('/singleblog/{id}', ['as' => 'singleblog', 'uses' => 'SinglePostController@execute']);

Route::get('/contacts', ['as' => 'contacts', 'uses' => 'ContactsController@show']);

Route::post('/contacts', ['as' => 'send', 'uses' => 'ContactsController@send']);

Route::resource('search', 'SearchController')->only([
    'index', 'store'
]);

Route::resource('searchpost', 'SearchPostController')->only([
    'store'
]);

/*Route::match(['get', 'post'], '/search', ['as' => 'search', 'uses' => 'SearchController@search']);*/

Route::get('/home', function () {
    return view('home');
});




/*Route::group(['middleware' => 'web'], function () {
    Route::match(['get', 'post'], '/contacts', ['as' => 'contacts', 'uses' => 'ContactsController@show']);
    Route::auth();
});*/


/*Route::get('single', function () {
    return view('app.single');
});

Route::get('contacts', function () {
    return view('app.contacts');
});*/



Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home')*/;
