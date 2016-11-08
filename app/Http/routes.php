<?php


/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */


Route::get('/','PagesController@index');
Route::post('/','PagesController@index');
// calling Products page

Route::get('products','PagesController@products');
Route::post('products','PagesController@products');

// calling about GMFF page

Route::get('about_gmff','PagesController@about_gmff');
 Route::post('about_gmff','PagesController@about_gmff');

 // calling agithia-part page 
 
 Route::get('agthia-part','PagesController@agthia_part');
 Route::post('agthia-part','PagesController@agthia_part');
 
// calling quality page
 
 Route::get('quality','PagesController@quality');
 Route::post('quality','PagesController@quality');

 // calling recipies regular page 

 Route::get('recipes-regular','PagesController@recipes_regular');
  Route::post('recipes-regular','PagesController@recipes_regular');

  //calling recipes-light page 
  
  Route::get('recipes-light','PagesController@recipes_light');
  Route::post('recipes-light','PagesController@recipes_light');

  //Calling baking-gm  page
  
  Route::get('baking-gm','PagesController@baking_gm');
  Route::post('baking-gm','PagesController@baking_gm');

  //Calling Gallery page
  
  Route::get('gallery','PagesController@gallery');
  Route::post('gallery','PagesController@gallery');

  //calling Live healthy page.
  
  Route::get('live-healthy','PagesController@live_healthy');
Route::post('live-healthy','PagesController@live_healthy');
  
//calling tips and tricks page.

Route::get('tips-and-tricks','PagesController@tips_and_tricks');
Route::post('tips-and-tricks','PagesController@tips_and_tricks');

//calling power of grains page...

Route::get('power-of-grains','PagesController@power_of_grains');
Route::post('power-of-grains','PagesController@power_of_grains');

//calling the-food-pyramid page...
Route::get('the-food-pyramid','PagesController@food_pyramid');
Route::post('the-food-pyramid','PagesController@food_pyramid');

//calling login page .....
Route::get('login','PagesController@login');

//calling register page .....

Route::get('register','PagesController@register');