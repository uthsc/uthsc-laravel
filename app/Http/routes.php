<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages/theme');
});

Route::get('login', ['as' => 'login', 'middleware' => 'casauth', function () {
    //redirect with message?
}]);

Route::get('logout', ['as' => 'logout', function () {
    return Cas::logout();
}]);

Route::group(['middleware' => 'casauth', 'prefix' => 'admin'], function () {

    Route::get('/', function () {
        return redirect('admin/dashboard');
    });

    Route::get('dashboard', [ 'as' => 'admin/dashboard', function () {
        return Cas::getAttributes();
    }]);
});

