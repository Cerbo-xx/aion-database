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

Route::get('/', function() { return redirect('/fr/'); });
Route::get('items/', function() { return redirect('/fr/'); });

Route::get('{lang}/', 'WelcomeController@index');
Route::get('{lang}/items/', 'WelcomeController@index');

Route::get('{lang}/item/{id}', ['as' => 'lang.item.id', 'uses' => 'ItemController@show']);
Route::get('{lang}/items/search', ['as' => 'lang.items.search', 'uses' => 'SearchController@search']);
Route::get('{lang}/items/weapon', 'WeaponController@index');
Route::get('{lang}/items/weapon/{type}', 'WeaponController@type');
Route::get('{lang}/items/armor', 'ArmorController@index');
Route::get('{lang}/items/armor/{type}', 'ArmorController@type');
Route::get('{lang}/items/armor/{type}/{part}', 'ArmorController@part');
Route::get('{lang}/items/accessory', 'AccessoryController@index');
Route::get('{lang}/items/accessory/{type}', 'AccessoryController@type');
Route::get('{lang}/items/skillbook', 'SkillLearnController@skillbook');
Route::get('{lang}/items/skillbook/{class}', 'SkillLearnController@skillbook');
Route::get('{lang}/items/stigma', 'SkillLearnController@stigma');
Route::get('{lang}/items/stigma/{class}', 'SkillLearnController@stigma');
