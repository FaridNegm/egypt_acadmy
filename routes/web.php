<?php

use Illuminate\Support\Facades\Auth;

// Start Admin Routes

Route::group(['namespace' => 'Admin' , 'middleware' => 'admin'] , function (){

    Route::get('admin-panel/{lang}' , 'homeController@index');

    // users Routes
    Route::get('users/{lang}' , 'usersController@index');
    Route::post('/add_user/{lang}' , 'usersController@store');
    Route::get('{id}/edit/{lang}' , 'usersController@edit');
    Route::post('{id}/edit/{lang}' , 'usersController@update');
    Route::get('{id}/delete/{lang}' , 'usersController@destroy');

    // site Settings Routes
    Route::get('admin-panel/all-settings', 'sitesettingsController@allsetting');
    Route::get('admin-panel/settings/edit/{name}', 'sitesettingsController@editsiteSetting');
    Route::post('admin-panel/settings/update/{name}', 'sitesettingsController@updateSiteSetting');

    // My Services Routes
    Route::get('services/{lang}' , 'servicesController@index');
    Route::post('/add_service/{lang}' , 'servicesController@store');
    Route::get('{id}/edit_service/{lang}' , 'servicesController@edit');
    Route::post('{id}/edit_service/{lang}' , 'servicesController@update');
    Route::get('{id}/delete_service/{lang}' , 'servicesController@destroy');

    // Team Routes
    Route::get('team/{lang}' , 'teamsController@index');
    Route::post('/add_team/{lang}' , 'teamsController@store');
    Route::get('{id}/edit_team/{lang}' , 'teamsController@edit');
    Route::post('{id}/edit_team/{lang}' , 'teamsController@update');
    Route::get('{id}/delete_team/{lang}' , 'teamsController@destroy');

    // My works Routes
    Route::get('works/{lang}' , 'worksController@index');
    Route::post('/add_work/{lang}' , 'worksController@store');
    Route::get('{id}/edit_work/{lang}' , 'worksController@edit');
    Route::post('{id}/edit_work/{lang}' , 'worksController@update');
    Route::get('{id}/delete_work/{lang}' , 'worksController@destroy');

    // Courses Routes
    Route::get('courses/{lang}' , 'reserveController@index');
    Route::post('/add_course/{lang}' , 'reserveController@store');
    Route::get('{id}/edit_course/{lang}' , 'reserveController@edit');
    Route::post('{id}/edit_course/{lang}' , 'reserveController@update');
    Route::get('{id}/delete_course/{lang}' , 'reserveController@destroy');

    // message Routes
    Route::post('admin-panel/send_message', 'usersController@saveMessage');
    Route::get('admin-panel/all-messages', 'usersController@allMessage');
    Route::get('admin-panel/message/{id}', 'usersController@singleMessage');
    Route::get('admin-panel/message/delete/{id}', 'usersController@deleteMessage');
});


// Website Routes

Route::group(['middleware' => 'guest' , 'namespace' => 'website'] , function () {
    Route::get('/send_email', 'indexController@send_email');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/login' , 'Admin\homeController@login');
Route::get('/not_authorized', 'Website\indexController@not_authorized');

Route::get('/', 'Website\indexController@index');
