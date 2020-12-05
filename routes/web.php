<?php

/*admin route*/
Route::group(['middleware' => ['web' , 'admin']], function(){
	Route::get('/admin','AdminController@index');

	/*Contact*/
	Route::get('/admin/contact','ContactController@index');
	Route::get('/admin/contact/{id}','ContactController@show');
	Route::get('/admin/contact/{id}/delete','ContactController@destroy');

    /*Profil*/
    Route::get('/admin/profil', 'AdminController@profil');
	Route::get('/admin/modifier_profil', 'AdminController@edit_p');
	Route::put('/admin/modifier_profil/{id}', 'AdminController@update_profil');

	/*Membre*/

	 Route::resource('/admin/membre', 'MembreController');
    Route::get('/admin/membre/{id}/delete', 'MembreController@destroy');


    /* parametre de site */
    Route::get('/admin/sitesetting', 'SiteSettingController@index');
    Route::post('/admin/sitesetting', 'SiteSettingController@store');
    Route::post('/admin/sitesetting/{id}', 'SiteSettingController@update');
    /* parametre des images*/

     /* Service*/
    Route::get('/admin/sitesetting/service', 'ServiceController@index');
    Route::post('/admin/sitesetting/service', 'ServiceController@store_Service');
    Route::post('/admin/sitesetting/service/{id}', 'ServiceController@update');

    /*Gallerier*/
    Route::get('/admin/sitesetting/gallerie', 'GallerieController@index');
    Route::post('/admin/sitesetting/gallerie', 'GallerieController@store');
    Route::post('/admin/sitesetting/gallerie/{id}', 'GallerieController@update');
});


/*users route*/


Route::group(['middleware' => 'web'], function(){
Route::auth();
Route::get('/', function () {
    return view('visiteur.home.index');
});
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/planning', 'HomeController@planning');
Route::get('/activities', 'HomeController@activities');
Route::get('/gallerie', 'HomeController@gallerie');

/*page Contact nous*/
Route::post('/contact','ContactController@store');


});