<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('_modules.welcome');
});
Route::get('/items/', function () {
    return view('_modules.welcome');
});

Route::get('item/{id}', ['as' => 'item.id', 'uses' => 'ItemController@show']);
Route::get('items/search', ['as' => 'items.search', 'uses' => 'SearchController@search']);
Route::get('items/weapon', 'WeaponController@index');
Route::get('items/weapon/{type}', 'WeaponController@type');
Route::get('items/armor', 'ArmorController@index');
Route::get('items/armor/{type}', 'ArmorController@type');
Route::get('items/armor/{type}/{part}', 'ArmorController@part');
Route::get('items/accessory', 'AccessoryController@index');
Route::get('items/accessory/{type}', 'AccessoryController@type');
Route::get('items/skillbook', 'SkillLearnController@skillbook');
Route::get('items/skillbook/{class}', 'SkillLearnController@skillbook');
Route::get('items/stigma', 'SkillLearnController@stigma');
Route::get('items/stigma/{class}', 'SkillLearnController@stigma');