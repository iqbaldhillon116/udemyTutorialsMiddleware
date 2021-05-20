<?php

use Illuminate\Support\Facades\Route;
// use App\Http\User;
use  Illuminate\Support\Facades\Auth;
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
    // return view('welcome');
//in lecture 153 we are creating logic overe here and in lecture 156 we will copy this logic inside middleware IsAdmin
    // $user = Auth::user();
    // // print_r($user);
    // // die;
    // if($user->isAdmin()){
    //     echo "you are an  admin";
    // }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app/user/roles',['middleware'=>'role',function(){
    return "middleware";
}]);
//middleware that i applied in constructor did not work. so this is another way to do it.
Route::group(['middleware' => ['IsAdmin']], function () {
      
    Route::get('/admin', 'AdminController@index');

});

