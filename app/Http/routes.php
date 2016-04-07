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
use Illuminate\Support\Facades\Input;

Route::group(['middleware' => ['web']], function () {

    Route::get('login', function(){
        if(Auth::attempt(['email' => 'admin@tutorial.com', 'password' => 'qwerty'])){
            return redirect('/');
        }else{
            return redirect('/about');
        }
    });

    Route::get('logout', function(){
        Auth::logout();
        return redirect('/about');
    });

    Route::get('checkuser', function(){
        if(Auth::check()){
            $id = Auth::user()->id;
            return $id;
        }
        if(Auth::guest()){
            return "user not logged in";
        }
    });

    Route::get('test/{password}', function($password){
        return \Hash::make($password);
    });

    Route::get('/', function () {
        return view('home');
    });

	Route::get('/about', 'AboutController@showAbout');

    Route::resource('bookmark', 'BookmarkController');

});
