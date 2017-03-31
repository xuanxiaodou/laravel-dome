<?php
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
 
	//Redis::set('lar','laravel!!!');
   // return Redis::get('lar');
 //    	Redis::set('string:user:name','yao');
	// $pwd = Redis::get('string:user:name');
	// return $pwd;
	return view('welcome');
});

Route::get('/about','AboutController@index' );



Route::post('/deploy','DeploymentController@deploy');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
