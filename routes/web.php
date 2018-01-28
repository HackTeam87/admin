<?php

Auth::routes();
//Admin-Panel-Prefix
    Route::prefix('adm')->group(function () {

//Admin-Panel
        Route::group(['middleware' => 'auth'], function () {

            //AdminPost
            Route::resource('dash', 'Adm\DashController');

            //AdminCategory
            Route::resource('/categories', 'Adm\CategoriesController');

            //ArticlesControllers
            Route::get('/article/', 'Adm\PagesController@index')->name('article');;
            Route::get('/articles/{category}', 'Adm\PagesController@category')->name('category');
            Route::get('/articles/{category}/{post}', 'Adm\PagesController@post')->name('post');

            //Calendar
            Route::resource('/calendar', 'Adm\EventController');

            //AdminRoles
            Route::resource('/roles', 'Adm\RolesController');

            //AdminPermissions
            Route::resource('/permissions', 'Adm\PermissionsController');


            //Profile
            Route::get('profile/{username}', [
                'as' => '{username}',
                'uses' => 'ProfileController@show',

            ]);
        });
    });

//Email
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

//Facebook Social
Route::get('facebook/auth', 'AuthFacebook\AuthController@redirectToProvider_facebook');
Route::get('facebook/auth/callback', 'AuthFacebook\AuthController@handleToProviderCallback_facebook');


//all pages
Route::get('/', function () {
    return view('site.index');
});


//Vue

Route::get('/vue', function () {
    return view('vue.vue');
});

//calendars
//Route::get('/calendar', function () {
//    return view('administrator.calendar.date');
//});



//Route::get('adm/calendar', 'Adm\EventController@index')->name('calendar');
//Route::post('adm/calendar', 'Adm\EventController@store')->name('calendar.store');
//Route::post('adm/calendar', 'Adm\EventController@destroy')->name('calendar.destroy');


