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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		//Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);


		Route::group(['prefix' => 'temperature'], function () {
            Route::get('/', 'TemperatureController@index')->name('temperature.index');
            Route::get('/seed', 'TemperatureController@seed');
            Route::get('/getTableData', 'TemperatureController@getTableData');
        });

        Route::group(['prefix' => 'humidity'], function () {

            Route::get('/air', 'HumidityController@airIndex')->name('airHumidity.index');
            Route::get('/air/seed', 'HumidityController@airSeed');
            Route::get('/air//getTableData', 'HumidityController@getAirTableData');

            Route::get('/soil', 'HumidityController@soilIndex')->name('soilHumidity.index');
            Route::get('/soil/seed', 'HumidityController@soilSeed');
            Route::get('/soil//getTableData', 'HumidityController@getSoilTableData');
        });

        Route::group(['prefix' => 'light'], function () {
            Route::get('/', 'LightController@index')->name('light.index');
            Route::get('/seed', 'LightController@seed');
            Route::get('/getTable', 'LightController@getTable');
        });


});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

