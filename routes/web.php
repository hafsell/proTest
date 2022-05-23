<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\studContro;
use App\http\Controllers\AdminContro;

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
    return view('welcome');
});
// Route::get('users/{id}/{name}', function ($id,$name) {
//     return 'hello'. $id .$name;
    
// }) ->where(['id'=>'[0-9]+','name'=>'[a-z]+'])->name('user');


//****************** id optionnel **************************
// Route::get('users/{id?}/', function ($id=null) {
//         return 'hello'. $id ;
        
//     })->name('user');


    //***************** add routes */
//     Route::prefix('admin')->group(function(){
//         Route::get('users/{id}', function ($id) {
//             return 'hello'. $id ; 
//         })->name('user');
//     });
Route::fallback(function(){
    return view('404h');
});
// Route::get('users/{name}',function($name){
//     return view('users',['name'=>$name]);
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('test','layouts.test');
// Route::get('/test', function () {
//     return view('test');
// });
Route::group(['prefix'=> 'students', 'as'=>'students.'],function(){
        Route::get('profile',[studContro::class,'show'])->name('profile');

Route::view('notes','students.note')->name('notes');
});
 //Route::view('admin','admin.index');
 Route::resource('admin', AdminContro::class)->except(['create','edit','update']);
 Route::put('admin','AdminContro@update')->name('admin.update');

 